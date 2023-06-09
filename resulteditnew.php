<?php

include 'config/function.php';

$dataLotto = getAllDataLotto();

?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hanoi Lottery</title>
  <!-- favicon -->

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="shortcut icon" href="https://hanoilottery-vn.com/guest/img/favicon.ico" type="image/x-icon">
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
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Tautan ke library Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Tautan ke library Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>

<!-- Pagination.js -->
<style>
  .single-selected-header {
    color: gold;
  }

  .data-list {
    color: black;
  }

  .container-table {
    background-color: yellow;
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
    border-color: #fff;
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
    color: white;
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



  .container-table td:first-child {
    font-weight: bold;
    background: linear-gradient(223.14deg, #D3471A -17.3%, #FFFFFF 101.56%);
    color: #FFFFFF;
    /* atau color: #EDEDED; untuk abu-abu muda */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    width: 300px;

  }

  .container-table td:last-child {
    font-weight: bold;
    background: linear-gradient(223.14deg, #D3471A -17.3%, #FFFFFF 101.56%);
    color: #FFFFFF;
    padding: 10px;

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .container-table tbody tr:hover {

    -webkit-box-shadow: 0 6px 6px -6px #0E1119;
    -moz-box-shadow: 0 6px 6px -6px #0E1119;
    box-shadow: 0 6px 6px -6px #0E1119;
    cursor: pointer;
  }
</style>

<body style=" background-color: #18687A">

  <div class="preloader">
    <div class="loader">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

  <!-- header begin -->
  <nav class="navbar navbar-expand-lg navbar-light p-3 ">

    <div class="container">
      <div class="logo">
        <img src="img/canada.png" alt="') }}" width="100">
      </div>
    </div>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link active text-light" href="resultedit.php"> Result</a>
        <a class="nav-link active text-light" href="contactedit.php ">Contact</a>

      </div>
    </div>
  </nav>
  </div>
  <!-- header end -->
  <style>
    .single-selected-header {
      width: 30px;
      height: 30px;
      font-size: 18px;
    }
  </style>
  <div class="logo">
    <div class="breadcrumb-pok ">
      <img class="br-shape-left" src="https://hanoilottery-vn.com/img/breadcrumb/left-bg.png" alt="">
      <img class="br-shape-right" src="https://hanoilottery-vn.com/img/breadcrumb/right-bg.png" alt="">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-8">
            <div class="breadcrumb-content">
              <span class="subtitle">Lotteries</span>
              <h2 class="title">Quick Pick or Choose Your Own Numbers</h2>
              <div class="page-links">
                <ul>
                  <li>
                    <a href="index.php">Home</a>
                  </li>
                  <li>
                    <span class="current-page"> <a href="resultedit.php">Lotteries</a></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- breadcrumb begin  -->
  <!-- breadcrumb end  -->
  <!-- contoh tabel agination baru edit -->

  <!-- lottery begin -->
  <div class="lotteries">
    <div>
      <img href="result.php" alt="">
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8">
          <div class="section-title">
            <h3 style="color: white;" class="title">All lotteries</h3>
            <h2 style="color: white;" class="title">pick your lucky number</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <table id="#example" class="table table-primary table-striped">
        <thead>
          <tr>
            <th>Number.</th>
            <th>Draw rNo.</th>
            <th>Result</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody class="list-all">
          <?php
          $i = 1;
          foreach ($dataLotto as $row) { ?>
            <tr class="data-list">
              <td><?= $i ?></td>
              <td><?= $row['drawno']; ?></td>
              <td>
                <button style="color: black;" class='single-selected-header'><?= $row['angka1']; ?></button>
                <button style="color: black;" class='single-selected-header'><?= $row['angka2']; ?></button>
                <button style="color: black;" class='single-selected-header'><?= $row['angka3']; ?></button>
                <button style="color: black;" class='single-selected-header'><?= $row['angka4']; ?></button>
                <button style="color: black;" class='single-selected-header'><?= $row['angka5']; ?></button>
              </td>
              <td style="color: black;"> <?= $row['tanggalupdate']; ?></td>
            </tr>
            <?php $i++; ?>
          <?php } ?>
        </tbody>
      </table>
      <div class="text-center">
        <div id="pagination-container"></div>
      </div>
    </div>

  </div>

  <!-- lottery end -->

  <!-- footer begin -->
  <div class="footer">
    <div style=" background-color: #18687A ;  border: 5px solid black;" class=" footer-bottom">
      <div class="container">
        <div class="footer-bottom-content">
          <p style="color:white" class="copyright-text">copyright © 2022. all right reserved by Hanoi Lottery
          </p>
          <div class="footer-menu">
            <ul>
              <li>
                <a style="color:white" href="index.php" class="single-menu">homepage</a>
              </li>
              <li>
                <a style="color:white" href="resultedit.php" class="single-menu">Results</a>
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


  <!-- back to top button end -->
  <!-- All js link starts hear -->

  <!-- jquery -->
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
    var items = $(".list-all .data-list");
    var numItems = items.length;
    var perPage = 10;

    items.slice(perPage).hide();

    $('#pagination-container').pagination({
      items: numItems,
      itemsOnPage: perPage,
      prevText: "&laquo;",
      nextText: "&raquo;",
      onPageClick: function(pageNumber) {
        var showFrom = perPage * (pageNumber - 1);
        var showTo = showFrom + perPage;
        items.hide().slice(showFrom, showTo).show();
      }
    });
  </script>


</body>

</html>