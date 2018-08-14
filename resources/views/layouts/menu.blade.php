<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Retrouvez tous les événements éducatifs organisé par Oschool. Notamment nos bootcamps, nos séances de formation intensives et nos meetups !">
    <meta name="keywords" content="Oschool, Elearning, Formation en ligne, Cours de Vacances, Formation programmation, Formation informatique">
    <meta name="author" content="Oschool">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> Oschool Events - @yield('title')</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="/events/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="/events/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/events/assets/css/et-line.css" rel="stylesheet">
    <link href="/events/assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="/events/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/events/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/events/assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="/events/assets/css/main.css" rel="stylesheet">
    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Event",
  "name": "Cours de Vacances Oschool",
  "startDate": "2018-08-20T10:00-13:00",
  "location": {
    "@type": "Place",
    "name": "Université de Cocody",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Cocody",
      "postalCode": "00225",
      "addressCountry": "CI"
    }
  },
  "image": [
    "https://events.oschool.ci/events/assets/img/bg/events.jpg",
   ],
  "description": "Join us for an afternoon of Jazz with Santa Clara resident and pianist Andy Lagunoff. Complimentary food and beverages will be served.",
  "endDate": "2018-09-21T10:00-13:00",
  "offers": {
    "@type": "Offer",
    "url": "https://events.oschool.ci",
    "price": "10000",
    "priceCurrency": "FCFA",
    "availability": "http://schema.org/InStock",
    "validFrom": "2017-01-20T16:20-08:00"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "David YAO"
  }
}
</script>
</head>
<body>


@if (session('status'))
  <!--  <div class="alert alert-success">
        {{ session('status') }}
    </div> -->
    <div id="myModalx" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Bienvenue dans la team Oschool !</h4>
          </div>
          <div class="modal-body" style="background-color: #DEF0D8;
    font-size: 16px;">
            <p>{{ session('status') }}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endif

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand logo" href="#">
            <img width="150" src="/img/logo-oschool-events.png" alt="Oschool Events"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#formateur">Formateurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#next">Evénéments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="https://events.oschool.ci/docs/code-de-vacances.pdf" target="_blank">Programme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#contact">Contact</a>
                </li><li class="nav-item">
                    <a class="nav-link " href="https://vimeo.com/284831688" target="_blank">Comment acheter un ticket ?</a>
                </li>
          <!--      <li class="search_btn">
                    <a  href="#">
                       <i class="ion-ios-search"></i>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</header>
<!--header end here-->

@yield('content')



<!--footer start -->
<footer id="contact">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 col-12">
                <div class="footer_box">
                    <div class="footer_header">
                        <div class="footer_logo">
                            <img src="/img/logo-oschool-events.png" alt="evento">
                        </div>
                    </div>
                    <div class="footer_box_body">
                        <p>
                            Bienvenue sur Oschool Events, l'espace web dédié aux événements éducatifs organisés par Oschool
                            E-learning. Vous aurez notamment l'occasion d'acheter des tickets pour participer à des
                            bootcamps, ou des cours de vacances axés sur l'apprentssage des métiers du digital.
                        </p>
                        <ul class="footer_social">
                            <li>
                                <a href="#"><i class="ion-social-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            appelez le +225 48459868
                        </h4>
                        <p>Pour vos questions</p>
                    </div>
                    <div class="footer_box_body">
                        <ul class="instagram_list">
                            <li>
                                <a href="#">
                                    <img src="/events/assets/img/cleander/html.png" alt="image bootcamp html">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/events/assets/img/cleander/marketing.jpg" alt="image bootcamp marketing">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/events/assets/img/cleander/facebook.png" alt="image bootcamp facebook">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
</footer>
<div class="copyright_footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
            <div class="col-12 col-md-6 ">
                <ul class="footer_menu">
                    <li>
                        <a href="#">Accueil</a>
                    </li>
                    <li>
                        <a href="#formateur">Formateurs</a>
                    </li>
                    <li>
                        <a href="#next">Evénements</a>
                    </li>
                    <li>
                        <a href="https://oschool.ci" target="_blank">News</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--footer end -->

<script type="text/javascript">

$(window).load(function(){
  $('#myModalx').modal('show');
   });

</script>

<!-- jquery -->
<script src="/events/assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="/events/assets/js/popper.js"></script>
<script src="/events/assets/js/bootstrap.min.js"></script>
<script src="/events/assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="/events/assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="/events/assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="/events/assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="/events/assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="/events/assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="/events/assets/js/main.js"></script>
</body>
</html>
