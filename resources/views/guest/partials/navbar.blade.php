<header :class="{'on_scroll': !view.topOfPage}">
      {{-- banner --}}
      <div :class="bannerNone" class="banner">
         <div class="container">
            <p>Clicca <a href="#">qui</a> e riceverai 10% di sconto sul tuo primo ordine</p>
            <p>Affrettati questa offerta scade tra @{{time}}</p>
            <i class="closeBanner fas fa-times" @click="hideBanner"></i>
         </div>
      </div>
     {{-- navbar --}}
      <div class="navbar">
         <nav class="container">
            
            
           
         
            
         </nav>
      
      </div>


   
      
</header>
                            