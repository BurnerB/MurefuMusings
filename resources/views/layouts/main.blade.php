
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Murefus Musings</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> -->
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{route('blog')}}">Murefus Musings</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="the-navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
    </header>



@yield('content')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">&copy; 2021 Fredrick Murefu</p>
                </div>
                <div class="col-md-4">
                    <nav>
                        <ul class="social-icons">
                            <li><a href="#" class="i fa fa-facebook"></a></li>
                            <li><a href="#" class="i fa fa-twitter"></a></li>
                            <li><a href="#" class="i fa fa-medium"></a></li>
                            <li><a href="#" class="i fa fa-github"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.min.js"></script>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="DeW69KYH"></script>
    
</body>

</html>