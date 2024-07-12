   
   <?php 

   include('header.php');
   
   ?>
   <!---main body-->
     
   <main>
    <!-- carousel-->
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/carousel-3.jpg" class="d-block  custom-car-img-height-sm" alt="carousel 1">
          <div class="carousel-caption text-center">
            <div class="mt-sm-5 py-3">
                <h2 class="display-4 m-4 pam-hero-title">
                <span class="p-2 pam-ft-color font-weight-bold"> First slide label </span></h2>
                <p class="m-4 ">
                <span class="p-2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
                </span>
                </p>
              
            </div>
            <div class="button">
              <a href="#" class="btn btn-primary pam-bg-blue py-2 px-3" role="button">Visit our website</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/carousel-3.jpg" class="d-block custom-car-img-height-sm" alt="carousel 2">
          <div class="carousel-caption ">
            <div class="mt-sm-5 py-3">
               <h2 class="display-4 m-4 pam-hero-title">
                <span class="p-2 pam-ft-color font-weight-bold"> Second slide label </span></h2>
                <p class=" m-4 ">
                <span class="p-2 "> Lorem ipsum dolor sit amet
                </span>
                </p>
            </div>
            <div class="button">
              <a href="#" class="btn btn-primary pam-bg-blue py-2 px-3" role="button">Learn more</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/carousel-3.jpg" class="d-block custom-car-img-height-sm" alt="carousel 3">
          <div class="carousel-caption ">
            <div class="mt-sm-5 py-3">
              <h2 class="display-4 m-4 pam-hero-title">
                <span class="p-2 pam-ft-color font-weight-bold"> Third slide label </span></h2>
                <p class="m-4 ">
                <span class="p-2 "> Lorem ipsum dolor sit amet
                </span>
                </p> 
            </div>
            <div class="button">
              <a href="#" class="btn btn-primary  pam-bg-blue py-2 px-3" role="button">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    

    <!--Articles section-->
    <div class="container my-5 ">
      <!-- First Row: Articles -->
      <div class="row my-4 ">
        <div class="col d-flex justify-content-between align-items-center">
          <h2 >Articles</h2>
         <hr>
        </div>
      </div>
      <!-- Second Row: Cards -->
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <!-- Card 1 -->
        <div class="col">
          <div class="card rounded-0 pam-bg-grey">
            <div class="card-item">
              <img class="card-img-top rounded-0" src="img/card1.jpg" alt="Card 1">
            </div>
            <div class="card-body pam-bg-grey">
              <h5 class="card-title pam-ft-color">3rd PAMJE Convention</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col">
          <div class="card rounded-0 ">
            <div class="card-item">
              <img class="card-img-top rounded-0" src="img/card2.jpg" alt="Card 2">
            </div>
            <div class="card-body pam-bg-grey">
              <h5 class="card-title pam-ft-color">Annual Educational Session</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col">
          <div class="card rounded-0 ">
            <div class="card-item">
              <img class="card-img-top rounded-0" src="img/card3.jpg" alt="Card 3">
            </div>
            <div class="card-body pam-bg-grey">
              <h5 class="card-title pam-ft-color">Most Outstanding Physician Award</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- About us section-->
    <div class="container-fluid pam-bg-lightblue ">
      <div class="container d-md-flex ">
        <div class="row ">
          <div class="col-md-7 order-md-2 pt-5">
            <h3 class="mb-3 text-uppercase font-weight-bold">About Us</h3>
            <p class="lead">The Philippine Association of Medical Journal Editors (PAMJE) was established on May 5, 2011 at the Executive Lounge of the Philippine Council for Health Research Development (PCHRD), Department of Science and Technology.
              Professor Dr. Jose F. Lapeña Jr., editor of the Philippine Journal of Otolaryngology Head and Neck Surgery and Secretary-General of the Asia Pacific Association of Medical Journal Editors (APAME) was elected President, and Drs. Ricardo Guanzon and Filomena San Juan, editors of the Filipino Family Physician and the Philippine Journal of Obstetrics and Gynecology respectively, were elected Vice Presidents.
              </p>
              <p class="pam-ft-color"><button onclick="location.href='about.php'" type="button" class="btn btn-outline-primary">Read More</button></p>
          </div>
          <div class="col-md-5 order-md-1 card-item">
            <img class="featurette-image img-fluid mx-auto"src="img/about-us.jpg" alt="About Us">
          </div>
        </div>
      </div>
    </div>

    <!-- Officers section-->
    <div class="container  my-5">
      <div class="row my-4 justify-content-center text-center">
        <div class="col-auto">
          <h2 class="cen-font-darkblue text-uppercase">Officers</h2>
        
        </div>
      </div>
      <div class="row ">
        <!-- officer 1-->
        <div class="col-lg-4 text-center">
   
        </div>
        <!-- officer 2-->
        <div class="col-lg-4 text-center">
          <div class="card-item">
            <img class="rounded-circle p-2" src="img/officers/dr-lapena.jpg" alt="Dr Lapena" width="140" height="140">
          </div>
          <h5> Dr. Jose Florencio Fabella Lapeña, Jr.</h5>
          <p>President</p>
          <p class="pt-3"></p> 
  
        </div>
        <!-- officer 3-->
        <div class="col-lg-4 text-center">
            
        </div>
      </div>

      <div class="row justify-content-center">


        <!-- officer 1-->
        <div class="officer col-lg-3 text-center">
        <div class="card-item">
            <img class="rounded-circle p-2" src="img/officers/dr-maramba.jpg" alt="Dr Maramba" width="140" height="140">
          </div>
          <h5>Dr. Cecile Maramba</h5>
          <p>Vice President (Internal)</p>
          <p class="pt-3"></p> 
  
        </div>

        <div class="col-lg-3 text-center">
            
        </div>
        <!-- officer 2-->
        <div class="col-lg-3 text-center">
          <div class="card-item">
            <img class="rounded-circle p-2" src="img/officers/dr-palaganas.jpg" alt="Dr Palaganas" width="140" height="140">
          </div>
          <h5>Dr. Erlinda Castro-Palaganas </h5>
          <p>Vice President (External)</p>
          <p class="pt-3"></p>        
        </div>
      </div>

      <div class="row justify-content-center">
        <!-- officer 1-->
        <div class="col-lg-3 text-center">
          <div class="card-item">
            <img class="rounded-circle p-2" src="img/officers/dr-esmaquel.jpg" alt="Dr Esmaquel" width="140" height="140">
          </div>
          <h5>Dr. Pelagio Esmaquel Jr. </h5>
          <p>Corporate Treasurer</p>
          <p class="pt-3"></p>          
        </div>

        <div class="col-lg-3 text-center">
            
        </div>
        <!-- officer 2-->
        <div class="col-lg-3 text-center">
          <div class="card-item">
           <img class="rounded-circle p-2" src="img/officers/dr-quebral.jpg" alt="Dr Quebral" width="140" height="140">
          </div>
           <h5>Dr. Jospeh Quebral</h5>
          <p>Corporate Secretary</p>
          <p class="pt-3"></p>          
        </div>

      </div>

    </div>
    </main>

    <?php 
   
   include('footer.php');
   
   ?>