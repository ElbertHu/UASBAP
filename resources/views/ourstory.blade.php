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
      <title>EatSambel</title>
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
               <h2 style="color: #FFDE17">
                  OUR STORY
               </h2>
            </div>
               <br>
               <h5><b>Eatsambel berdiri karena,</b></h5>
               <br>
               <h5><b>Sebagai orang Indonesia, kami sangat mengerti kecintaan masyarakat Indonesia dengan Sambel.</b></h5>
               <h5><b>Kami sangat mengerti bagaimana betenya apabila menemukan makanan enak tapi sambelnya engga enak.</b></h5>
               <h5><b>Kami sangat mengerti bagaimana hampanya apabila pergi keluar negeri, lalu makannya tidak ada sambel.</b></h5>
               <h5><b>Kami sangat mengerti bahkan hanya dengan sambel yang enak, makan dengan nasi putih pun sudah cukup.</b></h5>
               <br>
               <h5><b>Setiap varian rasa yang kami keluarkan melalui riset panjang untuk memastikan semua rasa yang kami keluarkan mempunyai rasa yang sangat enak agar Kamu tidak perlu bete lagi karena hal-hal tadi. Kami juga memberikan jaminan, apabila rasa kami tidak enak. Kami kembalikan 100% uang Kamu.</b></h5>
               <br>
               <h5><b>Dalam membangun Eatsambel kami juga mempunyai Nilai-nilai yang kami pegang :</h5>
               <ul>
                  <li>
                     <h5><b>Service : Kami mengetahui betul apabila kita membeli sesuatu dan mendapatkan service yang buruk, itu  sangat tidak enak sekali. Karena itu di Eatsambel, kami memberikan Service terbaik untuk anda.</b></h5>
                  </li>
                  <li>
                     <h5><b>Inovasi : Kami selalu berinvestasi dalam product development, Untuk bisa menciptakan varian rasa terbaru yang enak untuk teman makan Kamu.</b></h5>
                  </li>
                  <li>
                     <h5><b>Kualitas : Kami lebih memilih untuk rugi karena harus membeli bahan baku bagus yang sedang naik, daripada harus mengorbankan kualitas rasa Eatsambel.</b></h5>
                  </li>
                  <li>
                     <h5><b>Komitmen : Kami berkomitmen pada nilai-nilai, customer-customer, para mitra, dan rekan bisnis kami. Secara keseluruhan kami berkomitmen untuk melakukan hal terbaik demi menjadi yang terbaik.</b></h5>
                  </li>
               </ul>
               <br>
               <h5><b>Oh iya, Eatsambel juga mengeluarkan produk b2b (Business to business) tujuannya untuk membantu restaurant-restaurant yang membutuhkan sambel enak untuk memberikan daya tarik customer ke restaurant Kamu. Apabila Kamu tertarik untuk menggunakan Eatsambel sebagai sambel restaurant Kamu, Hubungi Sales kami disini</b></h5>
               <br>
               <h5><b>Selain itu kami juga ingin sekali mendengar pengalaman makan Kamu dengan Eatsambel ! Yuk share pengalaman kamu di Instagram : @eatsambel dan facebook page kami : Eat Sambel</b></h5>
         </div>
      </section>
      <!-- end why section -->

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