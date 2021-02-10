<div >
<footer class="bg-light text-center text-lg-start" id="logoFooter">
  <!-- Copyright -->
  <div class="text-center p-2" style="background-color: #333; color: #fff;">
  เตรียมพร้อมสอบใบขับขี่
  <div class="logo">
  <a class="" href="https://play.google.com/store/apps/details?id=com.artkidstudio.driverlicense&hl=th"><div class="logoStore"><img src="{{ asset('storage/logoImages/app-store-badge.png') }}"></div></a>
    <a class="" href="https://play.google.com/store/apps/details?id=com.artkidstudio.driverlicense&hl=th"><div class="logoStore"><img src="{{ asset('storage/logoImages/google-play-badge.png') }}"></div></a>
  </div>

  </div>
  <!-- Copyright -->
</footer>

<style>
  .logoStore {
    width: 8vw;
    margin-left: 1.5vw;
    /* margin-top: -2vh; */
    /* margin-bottom: -2vh; */
    display: inline-block;
  }
  .logoStore img {
    width: 110%;
    /* height: 100%; */
  }
  #logoFooter {
    height: 0.5vh;
    padding: 0px;
    position: fixed;
    top: 8vh;
    left: 0;
    width: 100vw;
  }

  /* #logoFooter div {
    min-height: 10vh;
  } */

  .logo {
      display: inline-block;
    }

  @media (max-width: 575.98px) {
    .logoStore {
      width: 30vw;
      /* height: 8vh; */
      
    }
    #logoFooter {
    top: 7.8vh;
  }
    .logoStore img {
      object-fit: contain;
      /* height: 130%; */
      max-width:100%;
max-height:50%;
    }
    .logoStore:nth-child(1)
    {
      /* margin-top: -5vh; */
      
    }
    .logo {
      display: block;
    }
}
</style>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>