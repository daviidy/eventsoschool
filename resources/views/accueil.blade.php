@extends('layouts.menu')

@section('content')

<!--cover section slider -->
<section id="home" class="home-cover">
    <div class="cover_slider owl-carousel owl-theme">
        <div class="cover_item" style="background: url('/events/assets/img/bg/events.jpg');">
             <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                Soyez prêts pour les
                            </h2>
                            <strong class="cover-xl-text">vacances</strong>
                            <p class="cover-date">
                                20 août-21 septembre 2018  - Université Cocody, Abidjan.
                            </p>
                            <p class="cover-date">
                              Inscrivez-vous avant le 20 août et payez 10.000 FCFA ! (80% de réduction)
                            </p>
                            <a data-toggle="modal" data-target="#myModal" href="#" class=" btn btn-primary btn-rounded" >
                                Réservez votre place maintenant
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('/events/assets/img/bg/events.jpg');">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-left">
                            <h2 class="cover-title">
                                Apprenez à
                            </h2>
                            <strong class="cover-xl-text">coder</strong>
                            <p class="cover-date">
                                20 août-21 septembre 2018  - Université Cocody, Abidjan.
                            </p>
                            <p class="cover-date">
                              Inscrivez-vous avant le 20 août et payez 10.000 FCFA ! (80% de réduction)
                            </p>
                            <a data-toggle="modal" data-target="#myModal" href="#" class=" btn btn-primary btn-rounded" >
                                Réservez votre place maintenant
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('/events/assets/img/bg/events.jpg');">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                          <h2 class="cover-title">
                              Apprenez à
                          </h2>
                          <strong class="cover-xl-text">vendre</strong>
                          <p class="cover-date">
                              20 août-21 septembre 2018  - Université Cocody, Abidjan.
                          </p>
                          <p class="cover-date">
                            Inscrivez-vous avant le 20 août et payez 10.000 FCFA ! (80% de réduction)
                          </p>
                          <a data-toggle="modal" data-target="#myModal" href="#" class=" btn btn-primary btn-rounded" >
                              Réservez votre place maintenant
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cover_nav">
        <ul class="cover_dots">
            <li class="active" data="0"><span>1</span></li>
            <li  data="1"><span>2</span></li>
            <li  data="2"><span>3</span></li>
        </ul>
    </div>
</section>
<!--cover section slider end -->

<!--event info -->
<section class="pt100 pb100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-calendar-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            DATE
                        </h5>
                        <p>
                            20 août-21 septembre 2018
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-location-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            lieu
                        </h5>
                        <p>
                            Université Cocody, Abidjan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-person-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            formateurs
                        </h5>
                        <p>
                            David YAO, Adams Tehoua
                            + invités
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-pricetag-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Participation
                        </h5>
                        <p>
                            10.000 FCFA
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--event info end -->


<!--event countdown -->
<section class="bg-img pt70 pb70" style="background-image: url('/events/assets/img/bg/bg-img.png');">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h4 class="mb30 text-center color-light">Dépêchez-vous ! Il reste encore</h4>
                <div class="countdown"></div> 
            </div>
        </div>
    </div>
</section>
<!--event count down end-->


<!--about the event -->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                A propos
            </h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p>
                  Du 20 août au 21 septembre, mon entreprise Oschool organise
                  des cours de vacances en développement Front-End.
                  Si suivre des cours en ligne est particulièrement difficile pour toi,
                  je crois que c'est l'unique occasion pour toi d'apprendre à coder ou vendre.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <p>
                    Du lundi au vendredi, 3 heures de travail, 1 mois d'acharnement.
                    A la clé, un certificat de réusiite et d'autres bonus.
                </p>
            </div>
        </div>

        <!--event features-->
        <div class="row justify-content-center mt30">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-mic"></i>
                    <div class="content">
                        <h4>2 formateurs</h4>
                        <p>
                            David et Adams savent à quel point il est difficile d'apprendre
                            les métiers du digital tels que la programmation et le marketing.
                            Ils seront là pour vous coacher, vous aider à surmonter les mêmes
                            obstacles qu'ils ont rencontré par le passé.
                        </p>
                      <!--  <a href="#">read more</a> -->
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-rocket"></i>
                    <div class="content">
                        <h4>3 hrs de Marathon</h4>
                        <p>
                            Vous découvrirez le web sous des aspects nouveaux,
                            et verrez tout ce qu'il est possible de faire avec.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-bullhorn"></i>
                    <div class="content">
                        <h4>Accès à Team Oschool</h4>
                        <p>
                            La Team Oschool, c'est plus de 300 personnes réunies autour du thème du digital !
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-clock"></i>
                    <div class="content">
                        <h4>1 programme</h4>
                        <p>
                            Vous pouvez consulter le programme de cet événement en cliquant <a href="https://events.oschool.ci/docs/code-de-vacances.pdf" target="_blank">ici</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--event features end-->
    </div>
</section>
<!--about the event end -->


<!--speaker section-->
<section id="formateur" class="pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
               Nos formateurs
            </h3>
        </div>
    </div>
    <div class="row justify-content-center no-gutters">
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="/img/dave.jpeg" alt="David YAO">
                    <div class="info_box">
                        <h5 class="name">David YAO</h5>
                        <p class="position">Développeur et entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="/img/adams.jpeg" alt="David YAO">
                    <div class="info_box">
                        <h5 class="name">Adams TEHOUA</h5>
                        <p class="position">Marketeur et entrepreneur</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!--speaker section end -->

<!--Price section-->
<section class="pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                Réservez maintenant votre place
            </h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <div class="price_box active">
                    <div class="price_highlight">
                        Recommandé
                    </div>
                   <div class="price_header">
                       <h4>
                           Prix
                       </h4>
                       <h6>
                           Pour les plus rapides
                       </h6>
                   </div>
                    <div class="price_tag">
                        10000 <sup>CFA</sup>
                    </div>

                    <div class="price_footer">
                        <a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-primary btn-rounded">Achetez</a>
                    </div>
                </div>
            </div>

            <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Remplissez ce formulaire pour réserver votre place</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="{{ route('tickets.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="">Email de votre compte Oschool:</label>
              <input type="email" class="form-control" id="" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
              <label for="">Nom</label>
              <input type="text" class="form-control" id="" placeholder="Nom" name="nom" required>
            </div>
            <div class="form-group">
              <label for="">Type</label>
              <select name="objet" class="form-control" style="" required>
                <option value="Programmation Web">Programmation web</option>
                <option value="Marketing Digital">Marketing digital</option>
              </select>
            </div>
            <div style="display: none;" class="form-group">
              <label for="">Thème</label>
              <select name="theme" class="form-control" style="">
                <option value="Aucun">Aucun</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        </div>

      </div>
    </div>
  </div>

  <!--end modal-->










        </div>
    </div>
</section>
<!--price section end -->

<!--event calender-->
<section id="next" class="pb100">
    <div class="container">
        <div class="table-responsive">
            <table class="event_calender table">
                <thead class="event_title">
                  <tr>
                      <th>
                          <i class="ion-ios-calendar-outline"></i>
                          <span>Prochains événements</span>
                      </th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <img src="/events/assets/img/cleander/marketing.jpg" alt="image bootcamp marketing">
                    </td>
                    <td class="event_date">
                        22
                        <span>septembre</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>Les outils marketing pour vendre en Afrique</h5>
                            <h6>09 H - 16 H</h6>
                            <p>Formateur: Adams TEHOUA</p>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-rounded">Bientôt disponible</a>
                    </td>
                    <td class="buy_link">
                        <a href="#">Achetez maintenant</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="/events/assets/img/cleander/html.png" alt="image bootcamp html">
                    </td>
                    <td class="event_date">
                        6
                        <span>octobre</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>Bootcamp HTML</h5>
                            <h6>09 H - 16 H</h6>
                            <p>Formateur: David YAO</p>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-rounded">Bientôt disponible</a>
                    </td>
                    <td class="buy_link">
                        <a href="#">Achetez maintenant</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="/events/assets/img/cleander/facebook.jpg" alt="image bootcamp facebook">
                    </td>
                    <td class="event_date">
                        20
                        <span>octobre</span>
                    </td>
                    <td>
                      <div class="event_place">
                          <h5>Générer vos premiers revenus sur Facebook</h5>
                          <h6>09 H - 16 H</h6>
                          <p>Formateur: Adams TEHOUA</p>
                      </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-rounded">Bientôt disponible</a>
                    </td>
                    <td class="buy_link">
                        <a href="#">Achetez maintenant</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--event calender end -->

<!--brands section
<section class="bg-gray pt100 pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                our partners
            </h3>
        </div>
        <div class="brand_carousel owl-carousel">
            <div class="brand_item text-center">
                <img src="/events/assets/img/brands/b1.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="/events/assets/img/brands/b2.png" alt="brand">
            </div>

            <div class="brand_item text-center">
                <img src="/events/assets/img/brands/b3.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="/events/assets/img/brands/b4.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="/events/assets/img/brands/b5.png" alt="brand">
            </div>
        </div>
    </div>
</section>
brands section end-->

<!--get tickets section -->
<section class="bg-img pt100 pb100" style="background-image: url('/events/assets/img/bg/tickets.png');">
    <div class="container">
        <div class="section_title mb30">
            <h3 class="title color-light">
                Réservez votre place maintenant
            </h3>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-9 text-md-left text-center color-light">
                Plus vous hésitez, et moins vous arez de chances de participer
                à ces expériences incroyables que sont les événements Oschool
            </div>
            <div class="col-md-3 text-md-right text-center">
                <a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-primary btn-rounded mt30">Réservez maintenant</a>
            </div>
        </div>
    </div>
</section>
<!--get tickets section end-->

@endsection
