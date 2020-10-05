   
  <nav class="navbar navbar-expand-lg navbar-ligh bg-light">
  <a class="navbar-brand" href="/contacts">Mi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/contacts">Form <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sliderresimler">Slider Resim</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="/icerik">
          İçerikler
        </a>
        
      </li>
     
    </ul>
    @if(Sentinel::check())
    <a href="/cikisyap" class="ml-3" title=""><p>Çıkış Yap</p></a>
    @else
    <a href="/girisyap"><p class="mr-3">Giriş Yap</p></a>
    <a href="/kaydol"><p>Kaydol</p></a>
    @endif
  </div>

</nav> 