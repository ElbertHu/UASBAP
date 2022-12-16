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
      <!-- why section -->
      <section class="why_section layout_padding" style="background-color: #E44126">
         <div class="container">
            <div class="heading_container heading_center">
                @foreach ($data_product as $produk)
                <div class="row align-items-center">
                    <div class="col-md-2 col-lg-2"></div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                       <div class="box">
                          <div class="img-box">
                             <img src="{{ asset($produk->image)}}" alt="" class="img-fluid">
                          </div>
                       </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="detail-box">
                            <h5>
                               {{$produk->nama_produk}}
                            </h5>
                            <h6>{{$produk->deskripsi_produk}}</h6>
                            <h6>
                               Rp {{number_format($produk->harga)}}
                            </h6>
                        </div>
                        <div class="btn-box">
                            <button class="btn btn1 btn_custom1" type="button" data-toggle="modal" data-target="#alertModal">
                            Beli Sekarang
                            </button>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2"></div>
                </div>
             @endforeach
            </div>
         </div>
         <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <img src="{{asset('assets/images/success.gif')}}" alt="" class="img-fluid">
                        <h3>Pembelian Berhasil</h3>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- end why section -->
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