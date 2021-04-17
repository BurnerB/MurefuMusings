@extends('layouts.backend.main')

@section('title', 'Murefus Musings| Add Blog')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Add new Blog</small>
      </h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"> <i class="fa fa-dashboard"></i>DashBoard</a>
        </li>

        <li>
            <a href="{{ route('backend.blog.index') }}">Blog</a>
        </li>
        <li class="active">Add New</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">

        
              <!-- /.box-header -->
              
              <div class="box-body ">

              {!! Form::model ($post,[
                'method'=>'POST',
                'route' => 'backend.blog.store',
                'files'=>TRUE
              ])
              !!}

              <div class="form-group {{ $errors->has('title') ? 'has-error' :''}}">             

              {!! Form ::label('title') !!}
              {!! Form ::text('title',null,['class'=> 'form-control']) !!}

              @if($errors->has('title'))
                            <span class="help-block">{{ $errors->first('title') }}</span>
                        @endif
             
              </div>
              <div class="form-group {{ $errors->has('slug') ? 'has-error' :''}}">            

              {!! Form ::label('slug') !!}
              {!! Form ::text('slug',null,['class'=> 'form-control']) !!}

              @if($errors->has('slug'))
                            <span class="help-block">{{ $errors->first('slug') }}</span>
                        @endif
             
              </div>
              <div class="form-group {{ $errors->has('exerpt') ? 'has-error' :''}}">             

              {!! Form ::label('exerpt') !!}
              {!! Form ::textarea('exerpt',null,['class'=> 'form-control']) !!}

              @if($errors->has('exerpt'))
                            <span class="help-block">{{ $errors->first('exerpt') }}</span>
                        @endif
             
              </div>
              <div class="form-group {{ $errors->has('body') ? 'has-error' :''}}">             

              {!! Form ::label('body') !!}
              {!! Form ::textarea('body',null,['class'=> 'form-control']) !!}

              @if($errors->has('body'))
                            <span class="help-block">{{ $errors->first('body') }}</span>
                        @endif
             
              </div>

              <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                        {!! Form::label('image', 'Feature Image') !!}
                        {!! Form::file('image') !!}

                        @if($errors->has('image'))
                            <span class="help-block">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

              
              <div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">
                        {!! Form::label('published_at', 'Publish Date') !!}
                        {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}

                        @if($errors->has('published_at'))
                            <span class="help-block">{{ $errors->first('published_at') }}</span>
                        @endif
                    </div>

              <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                        {!! Form::label('category_id', 'Category') !!}
                        {!! Form::select('category_id', App\Models\Category::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}

                        @if($errors->has('category_id'))
                            <span class="help-block">{{ $errors->first('category_id') }}</span>
                        @endif
                    </div>

              <hr>
              {!! Form::submit('Create new Blog', ['class'=> 'btn btn-primary'])!!}

              {!! Form::close() !!}
              <!-- /.box-body -->
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
