@extends('front.layouts.master')
@section('content')

    <!DOCTYPE html>
<html lang="tr">


<head>
    <meta charset="utf-8">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="all" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="node_modules/fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" media="all" href="/css/style.css?v={{ time() }}">
    <link rel="stylesheet" media="all" href="/css/header.css?v={{ time() }}">
    <link rel="stylesheet" media="all" href="/css/footer.css?v={{ time() }}">
    <link rel="stylesheet" media="all" type="text/css" href="/css/backtotop.css?v={{time()}}">
    <link rel="stylesheet" media="all" type="text/css" href="/css/hoverslide.css?v={{time()}}">
    <link rel="stylesheet" media="all" type="text/css" href="/css/form.css?v={{time()}}">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>Xiaomi Mija </title>
</head>
<div class="p-3">
    
</div>
<body style="background-color:#FAEBD7; text-align: center;">
<div class="container-fluid fa">
    
<div id="carouselExampleControls" class="carousel slide active mt-5" data-ride="carousel">
    <ol class="carousel-indicators">
               
            </ol>
  <div class="carousel-inner">
     @foreach($sliderresim as $slider)
     @if($loop->first)
    <div class="carousel-item active ">
      <img class="d-block w-100 h-100 mt-5" src="{{asset('uploads/slider/' . $slider->image)}}" alt=" ">      
    </div>

    @endif
    @if($loop->last)
    <div class="carousel-item">
      <img class="d-block w-100 h-100 mt-5" src="{{asset('uploads/slider/' . $slider->image)}}" alt="Third slide">
    </div>
    @endif
      @endforeach
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
 <button onclick="topFunction()" id="myBtn" title="Go to top">Yukarı</button>

<div class="container">

<div class="row">

<div class="col-md-4 mt-5 text-xl-center">

<span class=""><h4 class="mt-5">Mi Home Security Camera 360°1080P</h4></span>
</div>
<div class="col-md-8 ">
	<img src="{{URL::asset('/pictures/basliresim.jpg')}}" class="baslikresim w-100">

</div>
</div >
</div>
<div class="container-fluid mt-5">

	<div class="paragraf row">
	<div class="col-md-4 mt-auto mb-auto">
	<span class="yazi">Çift motor başlığı, kameranın tam 360° yatay ve 96° dikey şekilde dönmesini ve çekim yapmasını sağlar.
Fotoğraf makinesinin darbeye dayanıklı tasarımı ve sessiz motoru, dönüş sırasında sarsıntıyı engeller ve kameranın sessiz kalmasını sağlar.</span>
	</div>
		<div class="col-md-8">
			 <img src="{{URL::asset('/pictures/iconbox.png')}}" class="w-100 h-100">
		</div>
	</div>
</div>
	<div class="container mt-5" style="background-color: grey;border-radius: 10px" >

                     <table class="table">
                  <thead>
                       

                    <tr class="text-xl-center">
                      @foreach($icerik as $articles)
                      <th scope="col">{{$articles->title}}</th>
                      @endforeach
                    </tr>

                  </thead>
                  
                  <tbody>
                    <tr>
                      @foreach($icerik as $articles)
                      <td scope="row" class="text-center">{{$articles->content}}</td>
                      @endforeach
                      
                    </tr>
                      
                   
                  </tbody>

                </table>
                    
    </div>
            <div class="container">
			 <div class="row">
		<div class="col-md-6 mt-5 embed-responsive embed-responsive-21by9" >
			<iframe class="mt-3 embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/iNh0r0zzYAE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

			<div class="col-md-6">

				<div class="containerslide mt-5 ml-5 border-dark">
				 <img src="{{URL::asset('/pictures/specs.jpg')}}"  width="100%" onclick="myFunction(this)"; >

				  <div class="overlay">
				    <div class="list-group"><b><p> Özellikler</p></b>	</div>
				    	<ul class="mt-4 list-group-item-dark">
						     <li >Bağlantı: WI-FI 2.4GHZ</li>
						     <li>Depolama: Micro SD Kart (max. 64 GB)</li>
						     <li>Çözünürlük: 720p-1080p</li>
						     <li>Lens: F2.6mm 112°</li>
						     <li>Güç: 5V/1A</li>
						     <li>Gece Görüşü: 8 Non-invasive (940nm)</li>
						     <li>Hareket Algılama: Auto Capture (10 Saniye)</li>
						     <li>Kontrol: PTZ</li>
						     <li>Intercom</li>
						     <li>Ağırlık: 230g</li>
						     <li>Boyut: 110 x 64 x 93mm</li>
						</ul>
				  </div>
				</div>
			<!-- END MAIN -->
			</div>



						</div>
                        </div>


					  




<div class="containerform " id="myDIV">

  @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
       

        <form method="post" action="{{ route('contact.store') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

           
    <div class="form-group">
        <label>Adınız</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

        <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Soyadınız</label>
        <input type="text" class="form-control {{ $errors->has('surname') ? 'error' : '' }}" name="surname" id="surname">

        @if ($errors->has('surname'))
        <div class="error">
            {{ $errors->first('surname') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Eposta</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

        @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Numaranız</label>
        <input type="text" class="form-control {{ $errors->has('number') ? 'error' : '' }}" name="number"
            id="number">

        @if ($errors->has('number'))
        <div class="error">
            {{ $errors->first('number') }}
        </div>
        @endif
    </div>

    <div class="form-group ">
        <label>Adres</label>
        <textarea class="form-control {{ $errors->has('address') ? 'error' : '' }}" name="address" id="address"
            rows="4"></textarea>

        @if ($errors->has('address'))
        <div class="error">
            {{ $errors->first('address') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label><a data-target="#myModal " class="ml-3" data-toggle="modal" class="" id="myModal" href="#myModal">KVKK ve Aydınlatma metni </a>
            
        </label>

        <input type="checkbox" class="form-control kvkkbox  {{ $errors->has('kvkk') ? 'error' : '' }}" name="kvkk"
            id="kvkk">

        @if ($errors->has('kvkk'))
        <div class="error">
            {{ $errors->first('kvkk') }}
        </div>
        @endif
    </div>

        <input type="submit" name="send" value="Gönder" class="btn btn-dark btn-block" onclick="myFunction()">
</div>



</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <script src="{{asset('scripts/script.js')}}" type="text/javascript"></script>

</html>

@endsection

