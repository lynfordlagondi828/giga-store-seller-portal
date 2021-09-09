<html lang="{{str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{config('app.name', 'Front end Portal')}}</title>
        <!--Scripts -->
        <script src="asset('css/app.js')"></script>
        <!--Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
       
        <style>
            #foot{
                 /**background-color: rgb(32, 28, 90);*/
                 background-color: rgb(25, 21, 90);
               color:#fff;
            }
        </style>
    </head>
    <!--Navigation -->
    <body>
    <div class="container">
        <nav class="navbar navbar-light bg-white">
            <a style="margin-left:0px;" href="#" class="navbar-brand">
               
            <img  src="img/logo.png" width="25%">
               
            </a>
            <form class="form-inline" action="/registration">
                <button style="margin-right:100px;background-color:blue; border: 5px; padding: 10px 30px;
                text-align: center; color:white; border-radius: 12px; font-style:bold;"  
                href="shop_registration" type="submit">Get Started</button>
            </form>
            
        </nav>
      </div>
    </body>
<body class="bg-transparent">
    <!-- End Navigation -->
    <!--Banner-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                
                <div class="card-body">
                    <h1 class="card-title"><b style="color:#000">Up for a Collab? Sell</b></h1>
                    <h1 class="card-title"><b style="color:#000">now at Giga-store.</b></h1>
                    <p class="card-text"><b>Giga-store offers the best of value and market reach through its powerful<br>
                    Platform. We value our sellers through our innate values of partnerships<br>
                    and shared growth. Less of a seller, more of a partner and mates of all<br>
                    times.</b></p>
               
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-body">
                    <p class="card-text"><img  src="img/banner_sample1.png" ></p>
                </div>
            </div>
        </div>
        
        
    </div>
   
    <div class="container">
        <br>
        <h1 align="center"><b>Why partner with us?</b></h1><br>
    </div>
    <!--End Banner -->
    <!--Partner-->
        <div class="container">
            <div class="row bg-white">
                <div class="col-sm ">
                    
                            <img  src="img/p1.png">
                            <h5><b>Our active Web Presence</b></h5>
                            <p>We Provide our sellers an ultimate online<br>
                                retail platform with enormous reach and <br>
                                lead. No need to spend on making your own<br>
                                website;just trust us.
                            </p>
                </div>
                <div class="col-sm">
                            <img  src="img/p2.png">
                                <h5><b>We Create Value for your business</b></h5>
                                <p>Our team would drive value in your business<br>
                                    througn personalized brand awareness and<br>
                                    digital marketing
                            </p>
                </div>
                <div class="col-sm">
                            <img  src="img/p3.png">
                                <h5><b>Guaranteed Sales and scalability</b></h5>
                                <p>Get in touch with us to get skyrocketing<br>
                                sales. We strive for shared benefits and<br>
                                phenomenal scalability.
                                </p>
                </div>
            </div>
        </div>
    <!--End Partner -->

    <!--Pricing -->
    <div class="container text-center">
        
            
            <div class="card-body">
                <h1 class="card-title"><b>All features, one price</b></h1>
                <h1 class="card-title"><b>$ 0/</b>Month</h1>
                <p style="color:#000" class="card-text">When you make a sale, you'll pay <b>3.5% commission.</b></p>
                <p style="color:#000" class="card-text">When you list an item, you'll pay <b>$10c/item.</b></p>
                <p style="color:#000" class="card-text">Promoted listing fees will be variable.</p>
                
            </div>
        
    </div>
    <!-- End Pricing-->

    <!--Communication Stream Product Management-->
    <br>
        <div class="container">
                <div class="row bg-white">
                    <div class="col-sm ">
                        
                                <img  src="img/c1.png">
                                <h5><b>Streamlined Product Management</b></h5>
                                <p> Better product listing, better value and sales <br>
                                for sellers.
                                </p>
                    </div>
                    <div class="col-sm">
                        <img  src="img/c2.png">
                        <h5><b>Optimal Order Processing</b></h5>
                        <p> Fast new order alerts for sellers and easy to <br>
                        dispatching policy. We have got you covered!
                        </p>
                    </div>
                    <div class="col-sm">
                    <img  src="img/c3.png">
                        <h5><b>Quick Communication For Buyer</b></h5>
                        <p> We beleived in the poer of connection. <br>
                        Sellers get to communicate with our valued<br>
                        customers for details and concerns.
                        </p>
                    </div>
                </div>
        </div>
        <br>
        <!--2--->
        <div class="container">
                <div class="row bg-white">
                    <div class="col-sm ">
                        
                                <img  src="img/userf.png">
                                <h5><b>User-Friendly Vendor Dashboard</b></h5>
                                <p> Highly Interactive user interface with <br>
                                management, sales, inventory and<br>
                                promotional tools. All in one place!
                                </p>
                    </div>
                    <div class="col-sm">
                        <img  src="img/ship.png">
                        <h5><b>Ease Of Shipping</b></h5>
                        <p> Our sellers get the leverage to choose a <br>
                        shipping company. Moreover, Giga Store<br>
                        provides shipping solutions and information<br>
                        for well-in-time deivery!
                        </p>
                    </div>
                    <div class="col-sm">
                    <img  src="img/promotions.png">
                        <h5><b>Quick Communication For Buyer</b></h5>
                        <p> Digital Marketing soutions at GigaStore <br>
                        power the products througn tools such as inbuilt pay per click(PPC) and online ad<br>
                        campaigns.
                        </p>
                    </div>
                </div>
        </div>
        <!--End 2-->
    <!--End-->

    <!--Get Started-->
    <br>
    <div class="container text-center">
        
        <form class="form-inline" action="/registration">
                
                <button style="background-color:blue; border: 5px; padding: 10px 30px;
                text-align: center; color:white; border-radius: 12px; font-style:bold;"  
                href="shop_registration" type="submit">Get Started</button>
            </form>
    </div>
    <!-- End get started-->

    <!--Application -->
    <br>
        <div class="container text-center">
            <h1><b style="coor:#000">Here's our seller application process</b></h1><br>
        </div>
        
    <!--End Application -->

    <!-- Appication process -->
        <div class="container">
            <div style="max-width: 800px;">
                <div class="row g-0">
                    
                    <div class="col-md-8">
                            <h1><b style="color:#38c172;">Initiating your seller application</b></h1>
                            <h5>
                                <b>We would love to hear about the business venture, its</b>
                                <b>vision, and products.</b>
                            </h5>
                            
                        
                    </div>
                    <div class="col-md-4">
                        <p>
                        <img src="img/ap1.png" class="img-fluid" alt="..." width="80px">
                        </p>
                        <p style="margin-left:30px;">
                            <b>
                                |<br>
                                |<br>
                                |<br>
                                |<br>
                            </b>
                
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    <!-- end -->

    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                
                <div   class="card-body ">
                    <p style="margin-left:500px;"  class="card-text">
                        <img  src="img/ap2.png" >
                    </p>

                    <p style="margin-left:550px;">
                            <b>
                                |<br>
                                |<br>
                                |<br>
                                |<br>
                            </b>
                
                        </p>
               
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                
                    <h1><b style="color:#f66d9b;"> &nbsp;&nbsp;Seller application review</b></h1>
                        <h5>
                            <b>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                Let us see what you have got. We would<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thoroughly review your application.
                            </b>
                        </h5>
                </div>
            </div>
        </div>

        <div style="max-width: 800px;">
                <div class="row g-0">
                    
                    <div class="col-md-8">
                            <h1><b style="color:#f6993f;;">Setting your Online strore</b></h1>
                            <h5>
                                <b>
                                    After a successful review and approval, you are <br>
                                    eligible to set up an online store with us. You would be <br>
                                    proided the agreement and store credentials.
                                </b>
                                
                            </h5>
                            
                        
                    </div>
                    <div class="col-md-4">
                        <p>
                        <img src="img/shop.png" class="img-fluid" alt="..." width="80px">
                        </p>
                        <p style="margin-left:30px;">
                            <b>
                                |<br>
                                |<br>
                                |<br>
                                |<br>
                            </b>
                
                        </p>
                        
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="col-md-6 text-center">
                
                <div   class="card-body ">
                    <p style="margin-left:500px;"  class="card-text">
                        <img  src="img/join.png" >
                    </p>

                    <p style="margin-left:550px;">
                            <b>
                                |<br>
                                |<br>
                                |<br>
                                |<br>
                            </b>
                
                        </p>
               
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                
                    <h1><b style="color:#3490dc;;"> &nbsp;&nbsp;Join us on board</b></h1>
                        <h5>
                            <b>
                                &nbsp;&nbsp;&nbsp;
                                Now comes the onboarding stage. Buckle up for the<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;hight flight. You would be able to connect and work on<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;product import. Our marketing maestros would assits <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;you.
                            </b>
                        </h5>
                </div>
            </div>
        </div>

        <div style="max-width: 800px;">
                <div class="row g-0">
                    
                    <div class="col-md-8">
                            <h1><b style="color:#38c172;">Start the selling game</b></h1>
                            <h5>
                                <b>
                                    Now, you would be able to sell your products to a<br>
                                    wider consumer market. Good Luck!
                                </b>
                                <b>vision, and products.</b>
                            </h5>
                            
                        
                    </div>
                    <div class="col-md-4">
                        <p>
                        <img src="img/sell_game.png" class="img-fluid" alt="..." width="80px">
                        </p>
                        
                        
                    </div>
                </div>
            </div>
    </div>

    <br>
    <div class="container text-center">
        <h3>
            <b>
                What are you waiting for?
            </b>
           <br>
           <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
            </svg>

        </h3>
        <br>
        <form class="form-inline" action="/registration">
                
                <button style=" background-color:blue; border: 5px; padding: 10px 30px;
                text-align: center; color:white; border-radius: 12px; font-style:bold;"  
                href="shop_registration" type="submit">Let's Get Started</button>
            </form>
    </div>
    <br><br>
        <footer id="foot" class="container-fluid">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 ">
               

                <!-- Right -->
                <div>
                  
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h5 class=" fw-bold mb-4">
                        Group 1
                    </h5>
                    <h6>
                        Home
                    </h6>
                    <h6>
                        Features
                    </h6>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-md-2 col-md-2 mx-auto mb-4">
                    <!-- Links -->
                    <h5 class=" fw-bold mb-4">
                        Group 2
                    </h5>
                    <h6>
                        Privacy Policy
                    </h6>
                    <h6>
                        Terms & Conditions
                    </h6>
                    
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    
                    <div class="col">
                        <!-- Content -->
                            <h3>Logo here</h3>
                        <p>
                        Giga-store is one of the top Australian online marketplaces.<br>
                            We believe in connecting retailers with their potential<br>
                            consumers. Giga-store provides opportunities for sellers or<br>
                            what we like call them, collaborators. We believe in shared<br>
                            growth, precedence of seller and customer benefit, and a <br>
                            passion for retail.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Follow us
                    </h6>
                    <p id="follow_us">
                        <img src="img/insta_logo.png"  width="30px" height="30px">
                        <img class="img-responsive" style="margin-left:20px;" src="img/fb_logo.png" width="30px" height="30px">
                    </p>
                  
                   
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4">
                Copyright © 2021 Giga-store
                
            </div>
            <!-- Copyright -->
        </footer>

</body>
</html>