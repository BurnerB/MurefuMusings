@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit Testimony')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        Testimony
          <small>Edit Testimony</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.categories.index') }}">Testimony</a></li>
          <li class="active">Edit Testimony</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($testimony, [
                  'method' => 'PUT',
                  'route'  => ['backend.testimony.update', $testimony->id],
                  'files'  => TRUE,
                  'id' => 'post-testimony'
              ]) !!}

              @include('backend.testimony.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection
