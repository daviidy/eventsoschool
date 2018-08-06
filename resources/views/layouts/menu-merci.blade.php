<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Oschool Events | Bienvenue !</title>

    <!-- favicon -->
    <link href="#" rel=icon>

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome -->
    <link href="/merci/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="/merci/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="/merci/css/style.css" rel="stylesheet">

    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">

    jQuery(document).ready(function($) {

      if (window.history && window.history.pushState) {

        $(window).on('popstate', function() {
          var hashLocation = location.hash;
          var hashSplit = hashLocation.split("#!/");
          var hashName = hashSplit[1];

          if (hashName !== '') {
            var hash = window.location.hash;
            if (hash === '') {
              alert('Back button was pressed.');
                window.location='misses';
                return false;
            }
          }
        });

        window.history.pushState('forward', null, './#forward');
      }

    });

    </script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
  @if (session('status'))
      <div class="alert alert-success alert-dismissible">
          {{ session('status') }}
      </div>
  @endif
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

@yield('content')

<footer class="footer">
    <div class="copyright-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="copytext">&copy; 2018 Oschool. Tous droits réservés | Développé par : <a
                            href="https://rikudotech.com" target="_blank">Rikudo Technologies</a></div>
                </div>
            </div>
            <!--.row-->
        </div>
        <!-- .container-fluid -->
    </div>
    <!-- .copyright-section -->
</footer>
<!-- .footer -->
</div>
<!-- .right-col-block -->
</div>
<!-- .columns-block -->
</div>
<!-- #main-wrapper -->

<!-- jquery -->
<script src="/merci/js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="/merci/js/bootstrap.min.js"></script>
<script src="/merci/js/scripts.js"></script>
</body>
</html>
