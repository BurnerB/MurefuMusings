<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;

class Post extends Model

{
    use SoftDeletes;

    protected $fillable = ['title','slug','exerpt','body','published_at','category_id','image'];
    protected $dates = ['published_at'];
    public function author()
    {
        return $this->belongsTo(User::class);
    }
    public function getImageUrlAttribute($value)
    {
        $imageUrl = " ";
        if(! is_null($this->image)){
            $imagePath = public_path() . "/img/" .$this->image;
            if(file_exists($imagePath)) $imageUrl = asset("img/" . $this->image); 
        }

        return $imageUrl;
    }

    public function getDateAttribute()
    {
        return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
        
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    // only show those that publish date is today or passt
    public function scopePublished($query)
    {
        return $query->where("published_at","<=", Carbon::now());
    }

    
    public function getBodyHtmlAttribute($value)
    {
        return $this-> body ? Markdown::convertToHtml(e($this-> body)) : NULL;
    }

    public function getExerptHtmlAttribute($value)
    {
        return $this-> exerpt ? Markdown::convertToHtml(e($this-> exerpt)) : NULL;
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopePopular($query)
        {
            return $query->orderBy('view_count', 'desc');
        }

    public function getImageThumbUrlAttribute($value)
    {
        $imageUrl = " ";
        if(! is_null($this->image)){
            $thumbnail = str_replace(".jpg","_thumb.jpg", $this->image);
            $imagePath = public_path() . "/img/" .$thumbnail;
            if(file_exists($imagePath)) $imageUrl = asset("img/" . $thumbnail); 
        }

        return $imageUrl;
    }

    public function dateFormatted($showTimes= false)
    {
        $format="d/m/20y";
        if($showTimes) $format = $format. "H:i:s";
        return $this->created_at->format($format);
    }

    public function publicationLabel()
    {
       if(!$this->published_at){
           return '<span class="label label-warning"> Draft</span>';
       }
       elseif($this->published_at && $this->published_at->isFuture()){
        return '<span class="label label-info"> Scheduled</span>';
       }
       else{
        return '<span class="label label-success"> Published</span>'; 
       }
    }

    public function setPublishedAtAttribute($value)
    {
       $this->attributes['published_at'] = $value ?: NULL;
    }

    public function scopeScheduled($query)
    {
        return $query->where("published_at", ">", Carbon::now());
    }

    public function scopeDraft($query)
    {
        return $query->whereNull("published_at");
    }

    public function scopeFilter($query, $filter)
    {
        if (isset($filter['month']) && $month = $filter['month']) {
            $query->whereRaw('month(published_at) = ?', [Carbon::parse($month)->month]);
        }

        if (isset($filter['year']) && $year = $filter['year']) {
            $query->whereRaw('year(published_at) = ?', [$year]);
        }

        // check if any term entered
        if (isset($filter['term']) && $term = $filter['term'])
        {
            $query->where(function($q) use ($term) {
                $q->whereHas('author', function($qr) use ($term) {
                    $qr->where('name', 'LIKE', "%{$term}%");
                });
                $q->orWhereHas('category', function($qr) use ($term) {
                    $qr->where('title', 'LIKE', "%{$term}%");
                });
                $q->orWhere('title', 'LIKE', "%{$term}%");
                $q->orWhere('excerpt', 'LIKE', "%{$term}%");
            });
        }
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function getTagsHtmlAttribute()
    {
        $anchors = [];
        foreach($this->tags as $tag) {
            $anchors[] = '<a href="' . route('tag', $tag->slug) . '">' . $tag->name . '</a>';
        }
        return implode(", ", $anchors);
    }

    public static function archives()
    {
        return static::selectRaw('count(id) as post_count, year(published_at) year, monthname(published_at) month')
                        ->published()
                        ->groupBy('year', 'month')
                        ->orderByRaw('min(published_at) desc')
                        ->get();
    }

}
