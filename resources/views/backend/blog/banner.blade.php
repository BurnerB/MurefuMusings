@extends('layouts.backend.main')

@section('title', 'MUREFU WRITES| Blog Index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Select a blog to show as banner</small>
      </h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"> <i class="fa fa-dashboard"></i>DashBoard</a>
        </li>

        <li>
            <a href="{{ route('backend.blog.index') }}">Blog</a>
        </li>
        <li class="active">All  Published Posts</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">

            <div class="box-header clearfix">

            </div>
              <!-- /.box-header -->
              
              <div class="box-body ">
              @include('backend.partials.message')
              
              @if(!$posts->count())
                    <div class="alert alert-danger">
                        <strong>No record found</strong>
                    </div>
                @else
                <table class="table table-bordered">
                      <thead>
                          <tr>
                              <td width="80">Action</td>
                              <td>Title</td>
                              <td width="120">Author</td>
                              <td width="150">Category</td>
                              <td width="170">Date</td>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $request = request(); ?>

                          @foreach($posts as $post)

                              <tr>
                                  <td>
                                      {!! Form::open(['method' => 'POST', 'route' => ['backend.blog.bannerUpdate', $post->id]]) !!}
                                      @if($post->isBanner == 0)
                                        <button type="submit" class="btn btn-secondary">Not Banner</button>
                                      @else
                                        <button type="button" class="btn btn-primary" disabled>Is Banner</button>
                                      @endif 
                                      {!! Form::close() !!}
                                  </td>
                                  <td>{{ $post->title }}</td>
                                  <td>{{ $post->author->name }}</td>
                                  <td>{{ $post->category->title }}</td>
                                  <td>
                                      <abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr> |
                                      {!! $post->publicationLabel() !!}
                                  </td>
                              </tr>

                          @endforeach
                      </tbody>
                  </table>
     
                @endif
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
              <div class="pull-left">
                {{ $posts->appends( Request::query())->render()}}
              </div>
              <div class="pull-right">
              <small>{{$postCount}} {{ Str::plural('Item',$postCount)}}</small>

              </div>
              
              </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
<script type="text/javascript">
$('ul.pagination').addClass('no margin pagination-sm');
</script>
@endsection
