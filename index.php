<?php

require 'config/function.php';
// ambil 2 data lotto & DESC dari database
$dataLotto = getTwoDataLottoDesc();

?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from pixner.net/dooplo/dooplo/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Oct 2022 16:08:56 GMT -->

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Canada Lottery</title>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <!-- favicon -->
 <link rel="shortcut icon" href="http://canadalottery.net/fav.png" type="image/x-icon">
 <!-- bootstrap -->
 <link rel="stylesheet" href="https://hanoilottery-vn.com/guest/css/bootstrap.min.css">
 <!-- animate css -->
 <link rel="stylesheet" href="https://hanoilottery-vn.com/guest/css/animate.css">
 <link rel="stylesheet" href="https://hanoilottery-vn.com/guest/css/animate.min.css">
 <!-- load all Font Awesome styles -->
 <link rel="stylesheet" href="https://hanoilottery-vn.com/guest/css/all.min.css">
 <!-- owl carousel css -->
 <link rel="stylesheet" href="https://hanoilottery-vn.com/guest/css/owl.carousel.min.css">
 <!-- main css -->
 <link rel="stylesheet" href="https://hanoilottery-vn.com/guest/css/style.css">
</head>
<!-- INI TEMPAT LOGIKA PHP -->



<!-- INI TEMPAT CSS -->
<style>
 @keyframes rotate {
  0% {
   transform: rotate(0deg);
  }

  100% {
   transform: rotate(360deg);
  }
 }

 .animated-logo {
  max-width: 33%;
  height: auto;
  animation: rotate 4s linear infinite;
 }

 #clock {
  font-size: 24px;
  font-weight: bold;
 }


 #clock {
  font-size: 48px;
  color: #ffffff;
  text-align: center;
 }

 @keyframes logoAnimation {
  0% {
   opacity: 0;
   transform: scale(0.5);
  }

  100% {
   opacity: 1;
   transform: scale(1);
  }
 }

 .logo {
  animation: logoAnimation 1s ease-in-out infinite alternate;
 }

 .title {
  color: white;
 }

 .part-img {
  position: relative;
 }

 .part-img .power-ball {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation-name: spin;
  animation-duration: 2s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
 }

 @keyframes spin {
  0% {
   transform: translate(-50%, -50%) rotate(0deg);
  }

  100% {
   transform: translate(-50%, -50%) rotate(360deg);
  }
 }

 /******pagination.js******/

 .simple-pagination ul {
  margin: 50px 0 20px;
  padding: 0;
  list-style: none;
  text-align: center;
 }

 .simple-pagination li {
  display: inline-block;
  margin-right: 5px;
 }

 .simple-pagination li a,
 .simple-pagination li span {
  color: #135766;
  padding: 5px 10px;
  text-decoration: none;
  border: 1px solid #EEE;
  background-color: #FFF;
  font-size: 15px;
  padding: 10px 15px 10px 15px;
  border-radius: 10px;
 }

 .simple-pagination .current {
  color: #FFF;
  background-color: #135766;
  border-color: #135766;
  font-size: 15px;
  padding: 10px 15px 10px 15px;
  border-radius: 10px;
 }

 .simple-pagination .prev.current,
 .simple-pagination .next.current {
  background: #135766;
 }


 /******pagination.js******/

 .container {
  color: #333;
  margin: 0 auto;
  text-align: center;
 }

 #countdown #tiles>span {
  width: 70px;
  max-width: 70px;
  font: bold 70px "Barlow Condensed", sans-serif;
  text-align: center;
  display: inline-block;
  position: relative;
  color: #ffff;
 }

 .headline {
  font-weight: normal;
  letter-spacing: .125rem;
  text-transform: uppercase;
 }

 .spans {
  background: -webkit-linear-gradient(219.47deg, #F08B6B 15.1%, #C5B310 86.62%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
 }

 .container-table th h1 {
  font-weight: bold;
  font-size: 1em;
  text-align: left;

 }

 .container-table td {
  font-weight: normal;
  font-size: 1.2em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
  -moz-box-shadow: 0 2px 2px -2px #0E1119;
  box-shadow: 0 2px 2px -2px #0E1119;
 }

 .container-table {
  text-align: left;
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
 }

 .container-table td,
 .container-table th {
  padding-bottom: 2%;
  padding-top: 2%;
  padding-left: 2%;
 }

 /* Background-color of the odd rows */

 .container-table tr:nth-child(odd) {
  background-color: black;
 }

 /* Background-color of the even rows */

 .container-table tr:nth-child(even) {
  background-color: black;
 }

 .container-table th {
  background-color: black;
 }

 .container-table td:first-child {
  font-weight: bold;
  background: linear-gradient(223.14deg, #D3471A -17.3%, #988B17 101.56%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  width: 300px;
 }

 .container-table td:last-child {
  font-weight: bold;
  background: linear-gradient(223.14deg, #D3471A -17.3%, #988B17 101.56%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
 }

 .container-table tbody tr:hover {
  background-color: #fff;
  -webkit-box-shadow: 0 6px 6px -6px #0E1119;
  -moz-box-shadow: 0 6px 6px -6px #0E1119;
  box-shadow: 0 6px 6px -6px #0E1119;
  cursor: pointer;
 }

 @media (max-width: 800px) {

  .container-table td:nth-child(4),
  .container-table th:nth-child(4) {
   display: none;
  }
 }
</style>

<!-- INI TEMPAT SCRIPT  -->
<!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script src="https://hanoilottery-vn.com/guest/js/jquery.js"></script>
<!-- popper -->
<script src="https://hanoilottery-vn.com/guest/js/popper.min.js"></script>
<!-- bootstrap -->
<script src="https://hanoilottery-vn.com/guest/js/bootstrap.min.js"></script>
<!-- plugin js-->
<script src="https://hanoilottery-vn.com/guest/js/plugin.js"></script>
<script src="https://hanoilottery-vn.com/guest/js/countdown.min.js"></script>
<script src="https://hanoilottery-vn.com/vendors/jquery.countdown-2.1.0/jquery.countdown.min.js"></script>
<!-- MpusemoverParallax JS-->
<script src="https://hanoilottery-vn.com/guest/js/TweenMax.js"></script>
<script src="https://hanoilottery-vn.com/guest/js/mousemoveparallax.js"></script>
<!-- main -->
<script src="https://hanoilottery-vn.com/guest/js/main.js"></script>
<!-- Pagination.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>
<!-- owl carousel js -->
<script src="https://hanoilottery-vn.com/guest/js/owl.carousel.min.js"></script>
<!-- main js -->
<script src="https://hanoilottery-vn.com/guest/js/main.js"></script>
<!-- lottery js initialize -->
<script src="https://hanoilottery-vn.com/guest/js/lotteries-initialization.js"></script>
<script>
 function updateClock(clockId) {
  var now = new Date();
  var hours = now.getHours();
  var minutes = now.getMinutes();
  var seconds = now.getSeconds();

  // Menambahkan 0 di depan angka jika kurang dari 10
  hours = hours < 10 ? "0" + hours : hours;
  minutes = minutes < 10 ? "0" + minutes : minutes;
  seconds = seconds < 10 ? "0" + seconds : seconds;

  var time = hours + ":" + minutes + ":" + seconds;
  document.getElementById(clockId).textContent = time;
 }

 // Memanggil fungsi updateClock untuk pertama kali
 updateClock("clock1");
 updateClock("clock2");

 // Menjalankan fungsi updateClock setiap 1 detik
 setInterval(function() {
  updateClock("clock1");
  updateClock("clock2");
 }, 1000);

 function updateClock() {
  var now = new Date();
  var hours = now.getHours();
  var minutes = now.getMinutes();
  var seconds = now.getSeconds();

  // Menambahkan 0 di depan angka jika kurang dari 10
  hours = hours < 10 ? "0" + hours : hours;
  minutes = minutes < 10 ? "0" + minutes : minutes;
  seconds = seconds < 10 ? "0" + seconds : seconds;

  var time = hours + ":" + minutes + ":" + seconds;
  document.getElementById("clock").textContent = time;

  // Menjalankan fungsi updateClock setiap 1 detik
  setTimeout(updateClock, 1000);
 }

 // Memanggil fungsi updateClock untuk pertama kali
 updateClock();

 //memnggil fungsi updateCountdown setiap detik
 var countdownInterval = setInterval(updateCountdown, 1000);
 var endDate = new Date("2023-05-28T12:00:00"); // Mengubah waktu akhir menjadi pukul 12:00

 function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;

  let date = today.getDate();
  let day = today.getDay();
  let month = today.getMonth();
  let year = today.getFullYear();
  let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
  let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
   "November", "December"
  ];

  document.getElementById('date').innerHTML = days[day] + ", " + months[month] + " " + date + ", " + year;

  setTimeout(startTime, 1000);
 }

 function checkTime(i) {
  if (i < 10) {
   i = "0" + i
  }; // add zero in front of numbers < 10
  return i;
 }
 // Mendapatkan elemen dengan ID "result_time"
 var timeElement = document.getElementById("result_time");

 // Mendapatkan teks waktu saat ini
 var currentTime = timeElement.innerText;

 // Mendapatkan tanggal, bulan, dan tahun dari teks waktu saat ini
 var dateParts = currentTime.split(", ")[1].split(" ");
 var day = parseInt(dateParts[1]);
 var month = dateParts[0];
 var year = parseInt(dateParts[2]);

 // Mengubah bulan menjadi angka
 var monthNumber;
 switch (month) {
  case "January":
   monthNumber = 0;
   break;
  case "February":
   monthNumber = 1;
   break;
  case "March":
   monthNumber = 2;
   break;
  case "April":
   monthNumber = 3;
   break;
  case "May":
   monthNumber = 4;
   break;
  case "June":
   monthNumber = 5;
   break;
  case "July":
   monthNumber = 6;
   break;
  case "August":
   monthNumber = 7;
   break;
  case "September":
   monthNumber = 8;
   break;
  case "October":
   monthNumber = 9;
   break;
  case "November":
   monthNumber = 10;
   break;
  case "December":
   monthNumber = 11;
   break;
  default:
   break;
 }

 // Mendapatkan zona waktu saat ini
 var timeZone = parseInt(currentTime.match(/\(GMT ([+-]\d+)\)/)[1]);

 // Membuat objek tanggal JavaScript
 var date = new Date(year, monthNumber, day);

 // Mengurangi zona waktu dari tanggal
 date.setHours(date.getHours() - timeZone);

 // Mengubah tanggal menjadi format yang diinginkan
 var newTime = date.toDateString() + " (GMT " + timeZone + ")";

 // Mengubah teks waktu menjadi jam mundur
 timeElement.innerText = newTime;
</script>

<body onload="startTime()" style=" background-color: #18687A;">

 <div class="preloader">
  <div class="loader">
   <div></div>
   <div></div>
   <div></div>
   <div></div>
  </div>
 </div>

<!-- ================= START NAVBAR ==================== -->
 <nav class="navbar navbar-expand-lg navbar-light p-3 ">
  <div class="container">
   <div class=" logo row">
    <div class="col-md-12 col-lg-5 offset-lg-1 text-center">
     <img src="img/canada.png" alt="Canada Flag" style="max-width: 33%; height: auto;">
    </div>
   </div>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
   <div class="navbar-nav">
    <a class="nav-link active text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
    <a class="nav-link active text-light" href="resulteditnew.php"> Result</a>
    <a class="nav-link active text-light" href="contactedit.php ">Contact</a>

   </div>
  </div>
 </nav>
<!-- ================= END NAVBAR ==================== -->

 <div class="container">
  <div class="row justify-content-center">
   <div class="col-xl-6 col-lg-6">
    <div class="banner-content">
     <h1 style="color: white; " class="title">LIVE
      DRAW<span class="special">PLAY TO WIN</span>
     </h1>
     <h3 style="color: white;">
     </h3>
     <div class="result-number-palate" style="margin: 0px 0px rtfgvb20px 0px;" id="result_number">
      <button class="single-selected-header" style="color:  gold; background-color: orange; border-radius: 50%;">
       <?= $dataLotto[0]['angka1'] ?>
      </button>
      <button class="single-selected-header" style="color: gold; background-color: orange; border-radius: 50%;">
       <?= $dataLotto[0]['angka2'] ?>
      </button>
      <button class="single-selected-header" style="color: gold; background-color: orange; border-radius: 50%;">
       <?= $dataLotto[0]['angka3'] ?>
      </button>
      <button class="single-selected-header" style="color: gold; background-color: orange; border-radius: 50%;">
       <?= $dataLotto[0]['angka4'] ?>
      </button>
      <button class="single-selected-header" style="color: gold; background-color: orange; border-radius: 50%;">
       <?= $dataLotto[0]['angka5'] ?>
      </button>
     </div>
     <div style="margin-top: 40px;" class="all-btns">
      <a href="resulteditnew.php" class="btn-pok">View More Result</a>
     </div>
    </div>
   </div>
   <div class="col-xl-6 col-lg-6 col-md-8 col-sm-9 d-xl-flex d-lg-flex d-block align-items-end">
    <div class="part-img animated">
     <div class="logo">
      <img class="" src="img/ay.png" alt="">
     </div>
    </div>
   </div>
   <div class="part-img animated">
    <div style="background-color:white  ;border-radius: 100px;">
     <div class="picking-number-header">
      <div class="container">
       <div class="logo">
        <h1 style="color: black;" id="headline">LET'S PLAY
         <span style="color: black;"> YOU WILL DEFINITELY WIN</span>
         <h3 style="color: black;" id="txt"></h3>
        </h1>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 </div>
 </div>
 </div>

 <div class="lotteries">

  <div class="part-picking-number">
   <div class="lotteries-selection-menu">
   </div>
   <div class="animation-body animated">
    <div style="background-color: #18687A;" class="picking-number-body">
     <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade active show" id="pills-info" role="tabpanel" aria-labelledby="pills-winners-tab">
       <div class="lottery-winners">
        <div class="row" id="result-list-only">
         <div class="row" id="result-list-only">

          <div class="col-xl-6 col-lg-6">
           <div style=" border: 5px solid #fff;background-color: #fff;" class="single-winner">
            <div class="part-text">
             <p style="color: black;">DRAW NO:
              <?= $dataLotto[0]['drawno'] ?>
             </p>
             <ul>
              <li style="color: black;" class="plaing-stats">
               <span style="color: black;" class="ps-title">Date
                :</span>
               <?= $dataLotto[0]['tanggalupdate'] ?>
              </li>
             </ul>
             <div style="color: black;" class="winning-number ">
              <span class="single-number selected">
               <p style="color:gold;margin-top: 7 px;">

                <?= $dataLotto[0]['angka1'] ?>

               </p>
              </span>

              <span class="single-number selected">
               <p style="color:gold;margin-top: 7 px;">
                <?= $dataLotto[0]['angka2'] ?>
               </p>
              </span>
              <span class="single-number selected">
               <p style="color:gold;margin-top: 7 px;">
                <?= $dataLotto[0]['angka3'] ?>
               </p>
              </span>
              <span class="single-number selected">
               <p style="color:gold;margin-top: 7 px;">
                <?= $dataLotto[0]['angka4'] ?>
               </p>
              </span>
              <span class="single-number selected">
               <p style="color:gold;margin-top: 7 px;">
                <?= $dataLotto[0]['angka5'] ?>
               </p>
              </span>
             </div>
            </div>
           </div>
          </div>
          <div class="col-xl-6 col-lg-6">
           <div style=" border: 5px solid #fff;background-color: #fff;" class="single-winner">
            <div class="part-text">
             <p style="color: black;">DRAW NO:
              <?= $dataLotto[1]['drawno'] ?>
             </p>
             <ul>
              <li style="color: black;" class="plaing-stats">
               <span style="color: black;" class="ps-title">Date
                :</span>
               <?= $dataLotto[1]['tanggalupdate'] ?>
              </li>
             </ul>
             <div class="winning-number">
              <span class="single-number selected">
               <p style="color:gold;text-align: center;">
                <?= $dataLotto[1]['angka1'] ?>
               </p>
              </span>
              <span class="single-number selected">
               <p style="color:gold;text-align: center;">
                <?= $dataLotto[1]['angka2'] ?>
               </p>
              </span>
              <span class="single-number selected">
               <p style="color:gold;text-align: center;font: bold;">
                <?= $dataLotto[1]['angka3'] ?>
               </p>
              </span>
              <span class="single-number selected">
               <p style="color:gold;text-align: center;">
                <?= $dataLotto[1]['angka4'] ?>
               </p>
              </span>
              <span class="single-number selected">
               <p style="color:gold;text-align: center;">
                <?= $dataLotto[1]['angka5'] ?>
               </p>
              </span>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="part-btn ">
         <a href=" resulteditnew.php" class="btn-pok ">See Result </a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- lottery end -->

 <!-- footer begin -->
 <div class="footer">
  <div style=" background-color: #18687A ;  border: 5px solid #18687A;" class=" footer-bottom">
   <div class="container">
    <div class="footer-bottom-content">
     <p style="color:white" class="copyright-text">copyright © 2022. all right reserved by
      Canada Lottery
     </p>
     <div class="footer-menu">
      <ul>
       <li>
        <a style="color:white" href="index.php" class="single-menu">homepage</a>
       </li>
       <li>
        <a style="color:white" href="resulteditnew.php" class="single-menu">Results</a>
       </li>
       <li>
        <a style="color:white" href="contactedit.php" class="single-menu">contact</a>
       </li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- footer end -->
 <!-- back to button begin -->
</body>

</html>