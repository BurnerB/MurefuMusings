@extends('layouts.backend.main')

@section('title', 'MyBlog | Add new testimony')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        testimony
          <small>Add new testimony</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.testimony.index') }}">Testimonies</a></li>
          <li class="active">Add new</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($testimony, [
                  'method' => 'POST',
                  'route'  => 'backend.testimony.store',
                  'files'  => TRUE,
                  'id' => 'testimony-form'
              ]) !!}

              @include('backend.testimony.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

