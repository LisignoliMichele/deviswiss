<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    {{-- moment.js --}}
    <script src="https://momentjs.com/downloads/moment.js"></script>

    {{-- VUE development version, includes helpful console warnings --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    {{-- axios --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('css/guest.css')}}">
    <title>DeliSwiss</title>
</head>
<body>
    <div id="app">

        <div class="nav">
            <div class="bars"></div>
        </div>
        {{-- banner --}}
        {{-- <div :class="bannerNone" class="banner">
            <div class="container">
                <p>Clicca <a href="#">qui</a> e riceverai 10% di sconto sul tuo primo ordine</p>
                <p>Affrettati questa offerta scade tra @{{time}}</p>
                <i class="closeBanner fas fa-times" @click="hideBanner"></i>
            </div>
        </div> --}}
        {{-- /banner --}}
        {{-- navbar --}}
        {{-- <nav class=navbar> --}}
            {{-- <a  href="{{route("home")}}" class="logo">
              
            </a>
            <ul class="navbar_elements">
               <li >
                  <a href="{{route("chiSiamo")}}">Contatti</a>
               </li>
               <li >
                  <a href="{{route("home")}}#category">Ristoranti</a>
               </li>
               <li >
                  <a href="{{route("home")}}#introduction">Chi siamo</a>
               </li>
            </ul>
            <div class="nav_login">
               @if (Route::has('login'))
               @auth
               <div class="dropdownLogout"> --}}
                  
                  {{-- Menu dropdown --}}
                  {{-- <a class ="btn_primary" @click="logouttoggleshow" href="#">{{ Auth::user()->name }} <i class="fas fa-chevron-down"></i></a>
                  <div :class="logoutshow" class="logout">
                     <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                     </form>
                  </div>
               </div> --}}
               {{-- <a class="btn_primary" href="{{ url('/home') }}">Home</a> --}}
               {{-- @else
               <div class="dropDownMenu btn_primary" v-on:mouseleave="hidemenu">
                  <a @click="menutoggleshow" href="#">
                     <i class="fas fa-user-circle"></i>
                     <small>Accesso Utente</small>
                     <i class="fas fa-chevron-down"></i>
                  </a>
                  <div :class="menushow" class="menu">
                     <ul>
                        <li>
                           <a class=" registration" href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                           <a class=" registration" href="{{ route('register') }}">Registrati</a>
                        </li>
                     </ul>
                  </div>
               </div>
               @if (Route::has('register'))
               @endif
               @endauth
               @endif
            </div> --}}
         {{-- </nav> --}}
        {{-- /navbar --}}

        {{-- jumbotron --}}
        <section class="jumbotron">
            <div class="logo">
                <img src="/img/hero_logo.png" alt="logo deliswiss">
                <div class="map">
                    <video id="VideoFood" poster="/img/poster.png" autoplay muted loop><source src="/img/VideoFood.mp4" type="video/mp4"></video>
                </div>
            </div>
            <a class="getFood" href="#restaurants" >
                <p>What'd<br>you like<br>to eat?</p>
               <img src="/img/white_arrow.png" alt=""> 
            </a>
        </section>
        {{-- /jumbotron --}}

        {{-- introduction --}}
        {{-- <section id="introduction">
            <div class="titles">
                <h2><span class="logo_span">DeliBool</span> : tutta la qualità romana a portata di un click </h2>
                <p>Più di 25 ristoranti da cui ordinare. Goditi promozioni e risparmi illimitati ogni giorno. Deviboo é il più veloce e affidabile servizio di delivery che puoi trovare in cittá, operiamo su tutta Roma!</p>
            </div>
            <div class="presentation">
                <div class="box_container container">
                    <div class="box">
                        <div class="box_content">
                            <h3>velocissimi</h3>
                            <img src="img/point_moped.png" alt="scooter">
                            <p>I piatti che prefeisci dai tuoi ristoranti preferiti. in meno di 15 minuti o all'ora che desideri tu</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box_content">
                            <h3>fidati</h3>
                            <img src="img/phone.png" alt="1 ml delivery">
                            <p>Nel 2021 <span class="delivebool">Delivebool</span> ha raggiunto un milione di clienti! Siamo i migliori e non abbiamo mai sbagliato una consegna </p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box_content">
                            <h3>comodo</h3>
                            <img src="img/points_relax.png" alt="sofa">
                            <p>Puoi ordinare comodamente dal tuo dovano in pieno relax allo stesso prezzo di sempre se se orndini nei prossimi  @{{time}} minuti riceverai uno sconto del 20%</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- introduction --}}

        {{-- categories --}}
        <section id="restaurants">
            <div class="container">
                <div class=categories>
                    <div class="category-icon" v-on:mouseover="selectedType = -1" @click='filtredRestaurantByType'>
                        <div class=content>
                            <div class="icon all">
                                <img src="img/all.png" alt="all types">
                            </div>
                            <div class="type-name">
                                <h4>all</h4>
                            </div>
                        </div>
                    </div>
                    
                    <!-- card  -->
                    <div class="category-icon" v-for="(type, index) in restaurants_types" v-on:mouseover="selectedType = index" @click='filtredRestaurantByType'>
                        <div class=content>
                            <div class="icon">
                                <img :src="'img/' + type.restaurant_type + '.png'" alt="type icon">
                            </div>
                            <div class="type-name">
                                <h4>@{{type.restaurant_type}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section id="category">
            <div class="categories container">

                
            </div>
        </section> --}}
        {{-- categories --}}

        {{-- restaurants --}}
        {{-- <section id="restaurants">
            <div class="container">
                <div class="restaurant_card" v-for="restaurant in restaurants">
                    <a class="content" :href="'http://localhost:8000/restaurant/show/' + restaurant.slug">
                        <div class="logo_rest">
                            <img :src="'storage/' +restaurant.img_profile" alt="">
                        </div>
                        <div class="restaurant_info">
                            <h3>@{{restaurant.rest_name}}</h3>
                            <small class="orario">
                                <i class="fas fa-map-marker-alt"></i>
                                @{{restaurant.address}}
                                <br>
                                <i class="far fa-clock"></i>
                                @{{restaurant.open_time}} - @{{restaurant.close_time}} 
                            </small>
                            {{-- <div><small>@{{getRestTypeName}}</small></div> --}}
                        {{-- </div>
                    </a>
                </div>
            </div> --}}
        {{-- </section> --}} 
        {{-- //restaurants --}}

        {{-- footer --}}
        {{-- <footer>
            <div class="footer_container container">
                <div class="footer_col" id="foot_col1">
                    <div class="footer_logo">
                        <img src="/img/bigger_logo.png" alt="logo DeviBool">
                    </div>
                    <p class="mt_3">
                        Da madre cuoca e papà tassista, nasce il nostro sogno! <span class="devibool">DeviBool</span>: cosegna a domicilio il cibo più buono e il più velocemente possibile! Da ormai 3 anni io e il mio team lavoriamo non-stop per garantire qualità e velocità su tutto il territorio Laziale 
                    </p>

                    <h4>Anche sui social !</h4>
                    <ul >
                        <li>
                            <a href="facebook.com">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="twitter.com">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="instagram.com">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="footer_menu">
                    <div class="footer_col"  id="foot_col2">
                        <h3>Contatti</h3>
                        <div class="contact_info">
                            <ul> 
                                <li>
                                    <a href="{{route("chiSiamo")}}">
                                        <i class="fas fa-map-marker"></i>
                                        indirizzo
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route("chiSiamo")}}">
                                        <i class="fas fa-phone"></i>
                                        telefono
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="footer_col" id="foot_col3">
                        
                        <h3>Servizio clienti</h3>
                        <ul> 
                            <li>
                                <a href="#">Apps</a>
                            </li>
                            <li>
                                <a href="#"> Domande frequenti </a>
                            </li>
                            <li>
                                <a href="#">Politica reso</a>
                                
                            </li>
                        </ul>
                    </div>
                    
                    <div class="footer_col" id="foot_col4">
                        <h3>Scarica la nostra APP</h3>
                        <ul> 
                            <li>
                                <a href="">
                                    <img src="/img/playstore.png" alt="compra con playstore">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/img/applestore.png" alt="compra con applestore">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/img/appgallery.png" alt="compra con appgallery">
                                </a>
                            </li>
                        </ul>  
                    </div>

                    {{-- <div class="slider_comments  displayNone">
                        <p>qui ci potrebbero andare dei commenti super fake  </p>
                    </div> --}}
                {{-- </div>
                
                
            </div>
            
        </footer> --}}
        {{-- <div class="footer_row">
            <ul>
                <li id="copyright">
                    <i class="far fa-copyright"></i>
                    Copyright 2012-2012  
                </li>
                <li>
                    Made with &#9829; by TEAM 1
                </li>
                <li>
                    All rights Reserved
                </li>
                <li>
                    Powered by renewable energies only (and laravel)
                </li>
            </ul>
        </div>  --}}
        {{-- /footer --}}

        
    </div>
</body>

{{-- script --}}
<script src="{{asset('js/home.js')}}"></script>
{{-- /script --}}
</html>