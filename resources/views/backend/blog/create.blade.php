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
                'route' => 'backend.blog.store'
              ])
              !!}

              <div class="form-group">             

              {!! Form ::label('title') !!}
              {!! Form ::text('title',null,['class'=> 'form-control']) !!}
             
              </div>
              <div class="form-group">            

              {!! Form ::label('slug') !!}
              {!! Form ::text('slug',null,['class'=> 'form-control']) !!}
             
              </div>
              <div class="form-group">             

              {!! Form ::label('excerpt') !!}
              {!! Form ::textarea('excerpt',null,['class'=> 'form-control']) !!}
             
              </div>
              <div class="form-group">             

              {!! Form ::label('body') !!}
              {!! Form ::textarea('body',null,['class'=> 'form-control']) !!}
             
              </div>
              <div class="form-group">         

              {!! Form ::label('published_at','Publish Date') !!}
              {!! Form ::text('published_at',null,['class'=> 'form-control']) !!}
             
              </div>

              <div class="form-group">         

              {!! Form ::label('category_id','Category') !!}
              {!! Form ::select('category_id',App\Models\Category::pluck('title', 'id'),null,['class'=> 'form-control','placeholder'=>'Choose a Category']) !!}
             
              </div>

              <hr>
              {!! Form::submit('Create new post', ['class'=> 'btn btn-primary'])!!}

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
