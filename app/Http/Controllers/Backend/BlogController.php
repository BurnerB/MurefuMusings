<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;
use Illuminate\Support\Str;


class BlogController extends BackendController
{
    
    protected $uploadPath;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * 
     */

     public function __construct()
     {
         parent::__construct();
         $this->uploadPath = public_path('img');
     }
    public function index(Request $request)
    {
        $onlyTrashed = FALSE;

        if (($status = $request->get('status')) && $status == 'trash')
        {
            $posts       = Post::onlyTrashed()->with('category', 'author')->latest()->paginate($this->limit);
            $postCount   = Post::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }
        elseif ($status == 'published')
        {
            $posts       = Post::published()->with('category', 'author')->latest()->paginate($this->limit);
            $postCount   = Post::published()->count();
        }
        elseif ($status == 'scheduled')
        {
            $posts       = Post::scheduled()->with('category', 'author')->latest()->paginate($this->limit);
            $postCount   = Post::scheduled()->count();
        }
        elseif ($status == 'draft')
        {
            $posts       = Post::draft()->with('category', 'author')->latest()->paginate($this->limit);
            $postCount   = Post::draft()->count();
        }
        elseif ($status == 'own')
        {
            $posts       = $request->user()->posts()->with('category', 'author')->latest()->paginate($this->limit);
            $postCount   = $request->user()->posts()->count();
        }
        else
        {
            $posts       = Post::with('category', 'author')->latest()->paginate($this->limit);
            $postCount   = Post::count();
        }

        $statusList = $this->statusList($request);

        return view("backend.blog.index", compact('posts', 'postCount', 'onlyTrashed', 'statusList'));
    }

    private function statusList($request)
    {
        return [
            'own'       => $request->user()->posts()->count(),
            'all'       => Post::count(),
            'published' => Post::published()->count(),
            'scheduled' => Post::scheduled()->count(),
            'draft'     => Post::draft()->count(),
            'trash'     => Post::onlyTrashed()->count(),
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        return view("backend.blog.create",compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PostRequest $request)
    {
        $data = $this->handleRequest($request);
        $newPost = $request->user()->posts()->create($data);

        $newPost->createTags($data["post_tags"]);

        

        // $request->user()->posts()->create($data);

        return redirect('/backend/blog')->with('message', 'Your post was created successfully!');
    }

    public function handleRequest($request)
    {
        $data = $request->all();
        if($request->hasFile('image')){
            $image= $request->file('image');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination,$fileName);

            $data['image']=$fileName;
            
        }

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view("backend.blog.edit",compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PostRequest $request, $id)
    {
        $post     = Post::findOrFail($id);
        $oldImage = $post->image;
        
        $data     = $this->handleRequest($request);

        $post->update($data);
        $post->createTags($data['post_tags']);

        if ($oldImage !== $post->image) {
            $this->removeImage($oldImage);
        }
        
        return redirect('/backend/blog')->with('message', 'Your post was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect('/backend/blog')->with('trash-message', ['Your post was moved to Trash', $id]);
    }

    public function restore($id)
    {
        //get data in trash and restore
        $post = Post::withTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->back()->with('message', 'You post has been restored from Trash');
    }

    public function forceDestroy($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->forceDelete();

        $this->removeImage($post->image);

        return redirect('/backend/blog?status=trash')->with('message', 'Your post has been deleted successfully');
    }

    private function removeImage($image)
    {
        if ( ! empty($image) )
        {
            $imagePath     = $this->uploadPath . '/' . $image;
            
            $ext           = substr(strrchr($image, '.'), 1);

            if ( file_exists($imagePath) ) unlink($imagePath);
        }
    }

    public function banner(Request $request)
    {
        $onlyTrashed = FALSE;
        $posts       = Post::published()->with('category', 'author')->latest()->paginate($this->limit);
        $postCount   = Post::published()->count();
        $statusList = $this->statusList($request);
        $banner     = Post::where('isBanner', '=', '1')->first();

        return view("backend.blog.banner", compact('posts', 'postCount', 'onlyTrashed', 'statusList', 'banner'));
    }

    public function bannerUpdate($id)
    {
        $Post = Post::where('id', '=', e($id))->first();
        $Post->isBanner = 1;
                Post::query()
                ->where('id', '!=', $id)
                ->update(['isBanner' => 0]);
        $Post->save();   
        return redirect()->back()->with('message', 'Banner Updated Successfully');
    }
}
