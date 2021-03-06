@extends('layouts.backend.main')

@section('title', 'MyBlog | Update settings')

@section('content')
    <style>
        .file {
            position: relative;
            height: 35px;
        }

        .file > input[type="file"] {
            position: absolute;
            opacity: 0;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }


    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                settings
                <small>Update</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="active">Update settings</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form role="form" action="{{ route('backend.misc.update') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        @include('includes.messages')
                        <div class="col-md-offset-3 col-md-6">
                            <div class="form-group text-center">
                                <div class="form-group text-center">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">   

                                    <img src="{{ ($settings->about_image) ? $settings->about_image : '/img/posts/unnamed.jpg'}}" alt="No image">
                                    </div>

                                </div>
                                <div class="file">
                                    <label for="avatar" class="btn bg-navy btn-flat"><span class="fa fa-upload"></span> Upload about us image</label>
                                    <input type="file" name="about_image" accept="image/*" class="form-control" id="about_image">
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="slug">Mobile number</label>
                                <input type="tel" class="form-control" id="slug" name="mobile" placeholder="phone number" required="required" value="{{ $settings->mobile }}">
                            </div>

                            <div class="form-group">
                                <label for="slug">Email</label>
                                <input type="email" class="form-control" id="slug" name="email" placeholder="support@codeisystems.co.ke" required="required" value="{{ $settings->email }}">
                            </div>

                            <div class="form-group">
                                <label for="slug">Facebook</label>
                                <input type="url" class="form-control" id="slug" name="facebook" placeholder="Fb page link"  value="{{ $settings->facebook }}">
                            </div>

                            <div class="form-group">
                                <label for="slug">Twitter</label>
                                <input type="url" class="form-control" id="slug" name="twitter" placeholder="Twitter page link"  value="{{ $settings->twitter}}">
                            </div>

                            <div class="form-group">
                                <label for="slug">Linkedin</label>
                                <input type="url" class="form-control" id="slug" name="linkedin" placeholder="Linkedin page link"  value="{{ $settings->linkedin }}">
                            </div>

                            <div class="form-group">
                                <label for="slug">Medium</label>
                                <input type="url" class="form-control" id="slug" name="medium" placeholder="Medium page link"  value="{{ $settings->medium}}">
                            </div>

                            <div class="form-group">
                                <label for="name">About text</label>
                                <textarea class="form-control" rows="3" placeholder="" name="about_text">
                                            {{ $settings->about_text}}
                                    </textarea>

                            </div>


                            <div class="form-group">
                                <label for="name">Address</label>
                                <textarea class="form-control" rows="3" placeholder="" name="address">
                                            {{ $settings->address }}
                                        </textarea>

                            </div>

                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>

@endsection

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#about_image").change(function(){
        readURL(this);
    });
</script>
