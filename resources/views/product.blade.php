<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{ asset("assets/images/favicon.png")}}" type="">
      <title>Eatsambel</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/bootstrap.css")}}" />
      <!-- font awesome style -->
      <link href="{{ asset("assets/css/font-awesome.min.css")}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ asset("assets/css/style.css")}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ asset("assets/css/responsive.css")}}" rel="stylesheet" />
   </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <header class="main-header">
            @include("header")
         </header>
         <!-- end header section -->
      </div>
      <!-- product section -->
      <section class="product_section layout_padding" style="background-color: #E44126">
         <div class="container">
            <div class="heading_container heading_center">
               <h2 style="color: #FFDE17">
                  Our <span style="color: #FFDE17">products</span>
               </h2>
            </div>
            <div class="row">
               @foreach ($data_product as $produk)
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="{{ url('beli/'.$produk->id_produk)}}" class="option2">
                              Buy Now
                              </a>
                           </div>
                        </div>
                        <div class="img-box">
                           <img src="{{ asset($produk->image)}}" alt="">
                        </div>
                        <div class="detail-box">
                           <h5>
                              {{$produk->nama_produk}}
                           </h5>
                           <h6>
                              Rp {{number_format($produk->harga)}}
                           </h6>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
      <!-- footer start -->
      <footer class="main-footer" style="background-color: #FFDE17">
         @include("footer")
      </footer>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By Trio Legends</a><br>
         
            Distributed By EatSambal</a>
         
         </p>
      </div>
      <!-- footer section -->
      <!-- jQery -->
      <script src="{{ asset("assets/js/jquery-3.4.1.min.js")}}"></script>
      <!-- popper js -->
      <script src="{{ asset("assets/js/popper.min.js")}}"></script>
      <!-- bootstrap js -->
      <script src="{{ asset("assets/js/bootstrap.js")}}"></script>
      <!-- custom js -->
      <script src="{{ asset("assets/js/custom.js")}}"></script>
   </body>
</html>