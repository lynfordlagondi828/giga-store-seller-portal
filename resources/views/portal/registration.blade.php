<html lang="{{str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{config('app.name', 'Front end Portal')}}</title>
        <!--Scripts -->
        <script src="asset('css/app.js')"></script>
        <!--Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            h1{
                font-family: 'PlusJakartaSans';
                font-style: bold;
                font-weight: 900;
                src: url(fonts/PlusJakartaSans-ExtraBold.woff2) format('woff2');
            }

            #back{
                color:blue;
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
        </nav>
      </div>
    </body>
<body class="bg-transparent">
    <!-- End Navigation -->
    <div class="container">
        <div id="back">
            <b>
            <ul>
                <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="20" height="20"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#0e41d5"><path d="M68.155,45.0425c-0.7525,0.13438 -1.42437,0.51063 -1.935,1.075l-37.5175,37.41l-2.365,2.4725l2.365,2.4725l37.5175,37.41c0.83313,1.02125 2.16344,1.49156 3.45344,1.19594c1.27656,-0.29562 2.28438,-1.30344 2.58,-2.58c0.29563,-1.29 -0.17469,-2.62031 -1.19594,-3.45344l-31.605,-31.605h101.5875c1.23625,0.01344 2.39188,-0.63156 3.02344,-1.70656c0.61813,-1.075 0.61813,-2.39187 0,-3.46687c-0.63156,-1.075 -1.78719,-1.72 -3.02344,-1.70656h-101.5875l31.605,-31.605c1.11531,-1.03469 1.41094,-2.67406 0.73906,-4.03125c-0.65844,-1.37062 -2.15,-2.12312 -3.64156,-1.88125z"></path></g><path d="" fill="none"></path></g></g></svg>
                        
                        Back
                </a>
               
            </ul>
            </b>
        </div>
        <div align="center">
            <h1>Start selling today</h3>
            <div class="col-lg-6">
                <div class="p-3">
                    <div class="form-group">
                        <label style="float:left" for="shopName"><b>Shop name *</b></label>
                        <input type="text" class="form-control form-control" name="shop_name"  placeholder="Shop Name" required>
                    </div><br>
                    <div class="form-group">
                        <label style="float:left" for=""><b>Shop address *</b></label>
                        <input type="text" class="form-control form-control" name="shop_address"  placeholder="396 Clanrendon St. South Melbourne. VIC 3205" required>
                    </div><br>
                    <div class="form-group">
                        <label style="float:left" for=""><b>Floor / Suite (Optional)</b></label>
                        <input type="text" class="form-control form-control" name="floor">
                    </div><br>

                    <div class="row g-3">
                        <div class="col">
                            <label style="float:left" for=""><b>First name *</b></label>
                            <input type="text" class="form-control" placeholder="Amanda" aria-label="First name">
                        </div>
                        <div class="col">
                            <label style="float:left" for=""><b>Last name *</b></label>
                            <input type="text" class="form-control" placeholder="Bailey" aria-label="Last name">
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label style="float:left" for=""><b>Email *</b></label>
                        <input type="text" class="form-control form-control" name="email" placeholder="myshop@emailaddress.com.au">
                    </div><br>

                    <label style="float:left" for=""><b>Phone number *</b></label>
                    <div class="input-group mb-3">
                        
                        <span class="input-group-text" id="basic-addon1">+61</span>
                        <input type="number" class="form-control" placeholder="400 000 000">
                    </div><br>

                    <label style="float:left" for=""><b>Business type*</b></label>
                    <div class="form-group">
                        <select class="form-control" name="select" required>
                            <option value="">Select Business type</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                          <p style="float:left;">
                              By clicking Submit you acknowledge you have re the <b style="color:blue;">Privacy Policy</b>
                            </p>
                    </div>
                    <br><br>
                    <div class="form-group">
                            <button style="background-color:blue; border: 5px; padding: 10px 30px;
                        text-align: center; color:white; border-radius: 12px; font-style:bold;"  
                        href="shop_registration" type="submit">Get Started</button>
                    </div>

                   
                   
                </div>
            </div>
        </div>
    </div>
        
   
</body>
</html>