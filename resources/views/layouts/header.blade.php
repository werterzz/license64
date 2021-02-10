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
<body class="bgMain">
<div class="head">@yield('title')</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="{{ asset('storage/licenseLogo.png') }}" alt="" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link tab-selected" aria-current="page" href="#">ข้อสอบ</a>
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
  <!-- <div class="header">
  <a href="/"><ion-icon name="arrow-back-outline" class="backBtn"></ion-icon></a>
  @yield('title')
  </div> -->
  <div class="topHeaderBanner">
  </div>
  <div class="space"></div>
  <div class="mainContent">
    @yield('content')
  </div>
  <div class="bspace"></div>
  <x-footer />
</body>
</html>
<style>
  /* body {
    overflow: hidden;
  } */

  @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap');

  .backBtn {
      float: left;
  }
  .space {
    height: 7vh;
    width: 50px;
  }

  .bspace {
    height: 90px;
    width: 50px;
  }

.tab-selected {
    color: #c14ad2 !important;
  }

  .topHeaderBanner 
  {
    margin-top: 12vh;
  }

  .head {
  position: fixed;
top: 2.4vh;
text-align: center;
width: 55vw;
left: 22.5vw;
right: 22.5vw;
z-index: 10000;
color: #c14ad2 !important;
pointer-events: none;


}

  .navbar {
  position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}





  .header a {
      color: #fff;
    text-decoration: none;
  }

  .mainContent {
    min-height: 50vmax;
    margin-bottom: 1vmax;
  }

  .bgMain {
    background-image: linear-gradient(#c14ad2, #23d5de);
    background-attachment: fixed;
    font-family: Prompt;
  }

  .header {
    position: fixed;
   left: 0;
   top: 0;
   width: 100%;
   background-color: #c14ad2;
   color:  #fff;
   text-align: center;
   padding: 1%;
   cursor: context-menu;
  }

  @media (max-width: 575.98px) {
    .space {
      height: 11.5vh;
    }
    .head {
      font-size: 95% !important;
      line-height: 100%;
    }
    .topHeaderBanner 
  {
    margin-top: 10vh;
  }
  }

</style>
<script src="{{ asset('js/inContentPage.js') }}" defer></script>