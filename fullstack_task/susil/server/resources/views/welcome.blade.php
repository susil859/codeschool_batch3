<!DOCTYPE html>
<html ng-app="homeMod">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
    <script src="https://code.angularjs.org/1.5.7/angular.js"></script>
    <script src="//cdn.rawgit.com/angular-ui/ui-router/0.2.18/release/angular-ui-router.js"></script>
    <script src="{{asset('scripts/home.js')}}"></script>
</head>
<style>
    .header1 {
        font-size: 12px;
        color: white;
        font-weight: bold;
        padding: 8px;
    }

    .d1 {
        background-color: #1b364d;
    }

    .d1 div {
        padding: 20px;
    }

    .d1 a {
        color: white;
        text-decoration: none;
    }

    .d1 div:hover {
        background-color: #324a5f;
        border-left: 7px solid yellow;
        transition: 0.5s;
    }
</style>

<body>
    <header  ng-controller="logoutCtrl">
        <div class="container-fluid" style="background-color:red;">
            <div class="row header1">
                <div class="col-md-2" style="text-align:center ;">OUR BRAND PROMISE</div>
                <div class="col-md-2"><svg xmlns="http://www.w3.org/2000/svg" style="margin-right:8px ;" width="16"
                        height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                    </svg>EASY RETURN</div>
                <div class="col-md-2" style="border-left: 1px solid white;"><svg xmlns="http://www.w3.org/2000/svg"
                        style="margin-right:8px;" width="16" height="16" fill="currentColor" class="bi bi-truck"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>NEXT DAY DELIVERY</div>
                <div class="col-md-2" style="border-left: 1px solid wheat;">SRRVICE GURANTTE</div>
                <div class="col-md-2" style="border-left: 1px solid wheat;">UNMATCHED NETWORK</div>
                <div class="col-md-1" style="border-left: 1px solid wheat;">Find a store</div>
                <div class="col-md-1" style="border-left: 1px solid wheat;">contact us</div>

                <!-- 2nd header -->

                <div class="row" style="border-top:1px solid white ; padding:5px ; margin-top: 10px;">
                    <div class="col-md-2" style="text-align:center ;"><img src="img/reliance1.png" style="max-width:100% ;">
                    </div>
                    <div class="col-md-5"><input type="search" placeholder="Find your favorite product"
                            style="margin-top:25px; width:100%; height:50%;border-radius: 10px;">
                    </div>
                    <div class="offset-md-1 col-md-2" style="margin-top: 25px; color:white; font-size: 15px;">Select
                        your
                        pincode</div>
                    <div class="col-md-1" style="margin-top: 25px; color:white;font-size: 15px;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cart-dash" viewBox="0 0 16 16">
                            <path d="M6.5 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg> cart</div>
                    <div class="col-md-1" style="margin-top: 25px; color:white; font-size: 15px;" ng-click="logout();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>Logout</div>
                </div>

            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- 
side menu start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 d1">


                <div><a ui-sref="About">ABOUT</a></div>
                <div><a ui-sref="Contact">CONTACT</a></div>
                <div><a ui-sref="product">PRODUCT</a></div>
                <div><a ui-sref="Cart">CART</a></div>
                <div><a href="#">COMPUTER</a></div>
                <div><a href="#">CAMERA</a></div>
                <div><a href="#">PERSONAL CARE</a></div>
                <div><a href="#">ACCESSORIES </a></div>
            </div >
            <div class="col-md-10" ui-view>
                
            </div>

        </div>
    </div>
    </div>
    <script>
    //  if(!localStorage.getItem('userData')){
    //     window.location.assign('login');
    // }
    </script>
</body>

</html>