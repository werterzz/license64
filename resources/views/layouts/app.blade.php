<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<!-- <div class="footer">
    <div class="row">
    <div class="col-sm tab-selected">
    <ion-icon name="pencil-outline"></ion-icon>
      <ion-label>ข้อสอบ</ion-label>
    </div>
    <div class="col-sm">
    <ion-icon name="reader-outline"></ion-icon>
      <ion-label>เนื้อหา</ion-label>
    </div>
    <div class="col-sm">
    <ion-icon name="logo-youtube"></ion-icon>
      <ion-label>วิดีโอ</ion-label>
    </div>
  </div>
  <div class="row">
  <div class="header">ข้อสอบ</div>
  </div>
</div> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="/storage/licenseLogo.png" alt="" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">ข้อสอบ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">เนื้อหา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">วิดีโอ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<body class="bgMain">
  <!-- <div class="header">ข้อสอบ</div> -->
  <div>
    @yield('content')
  </div>
    
  <x-footer />
</body>
</html>
<style>
  /* body {
    overflow: hidden;
  } */

  @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap');

  .hidden {
  display: none;
}

  .bgMain {
    background-image: linear-gradient(#c14ad2, #23d5de);
    background-attachment: fixed;
    /* height: 100vh; */
    margin: 0;
    font-family: Prompt;
    min-height: 100vh;
  }
  .tab-selected {
    /* background-color: #c14ad2; */
        color: #c14ad2 !important;
  }
  .header {
    /* position: fixed; */
   /* left: 0;
   top: 7; */
   width: 100%;
   background-color: #c14ad2;
   color:  #fff;
   text-align: center;
   padding: 0.5%;
   cursor: context-menu;
  }
.footer {
   position: fixed;
   left: 0;
   top: 0;
   width: 100%;
   background-color: #fff;
   color:  #a1a1a1;
   text-align: center;
   cursor: pointer;
}
.footer .row .col-sm {
  padding: 1%;
}
</style>
<script src="{{ asset('js/appPage.js') }}" defer></script>