<!DOCTYPE html>
<html>
<head>
	<title> QUEN HOTEL </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">PAMUKKALE QUEN HOTEL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="home" class="nav-link">Anasayfa</a></li>
            <li class="nav-item"><a href="hakkımızda" class="nav-link">Hakkımızda</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="rooms" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Odalar</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                 <!-- <a class="dropdown-item" href="odalar">Odalar</a> -->
                  <a class="dropdown-item" href="kral">Kral Dairesi</a>
                  <a class="dropdown-item" href="oneclass">Birinci Sınıf Odalar</a>
                  <a class="dropdown-item" href="family">Aile Odaları</a> 
                </div>
            </li>
            <li class="nav-item"><a href="dining" class="nav-link">Yemekler &amp; Bar</a></li>
            <li class="nav-item"><a href="amenities" class="nav-link">Güzellikler</a></li>
            <li class="nav-item"><a href="reservation" class="nav-link">Rezervasyon</a></li>
            <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li> 
            <li class="nav-item active"><a href="contact" class="nav-link">İletişim</a></li>
          </ul>
        </div>
      </div>
    </nav>



@yield('content')



    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">HAKKIMIZDA</h2>
              <p>Otelimizde hem huzurlu hem eğlenceli bir tatil yapma fırsatını bu sizlere sunmak için çalışıyoruz.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">ÇALIŞMA SAATLERİ</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Pazartesi: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Salı: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Çarşamba: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Perşembe: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Cuma: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Cumartesi: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Pazar: <span>08: - 22:00</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">İLETİŞİM BİLGİLERİ</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Denizli/Pamukkale</a></li>
                <li><a href="#" class="py-2 d-block">0535 643 50 28</a></li>
                <li><a href="#" class="py-2 d-block">birgihank@gmail.com</a></li>
                <li><a href="#" class="py-2 d-block">mehmetcan@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <!--<div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <span class="icon icon-paper-plane"></span>
                  <input type="text" class="form-control" placeholder="Subscribe">
                </div>
              </form>
            </div>
          </div> -->
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Hotel &copy;<script>document.write(new Date().getFullYear());</script> Her Hakkı Saklıdır | Denizli/Pamukkale <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">PamukkaleQuen</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

</body>
</html>