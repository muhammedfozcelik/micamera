@extends('front.layouts.master')

<!DOCTYPE html>
<html lang="tr">
<head> 
	    <meta charset="utf-8">

	  <link rel="stylesheet" media="all" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" media="all" href="/css/style.css?v={{ time() }}">
     <link rel="stylesheet" media="all" href="/css/header.css?v={{ time() }}">
      <link rel="stylesheet" media="all" href="/css/footer.css?v={{ time() }}">
      <link rel="stylesheet" media="all" type="text/css" href="/css/backtotop.css?v={{time()}}">
      <link rel="stylesheet" media="all" type="text/css" href="/css/hoverslide.css?v={{time()}}">
       <link rel="stylesheet" media="all" type="text/css" href="/css/form.css?v={{time()}}">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<title>Teknik Özellikler</title>
</head>
<body>
  <div class="container mt-5 pt-5">
<table class="table table-hover text-center">
  <thead class="">
    <tr>
      <th scope="col">Teknik Özellikler</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Bağlantı: WI-FI 2.4GHZ</td>
    
    </tr>
    <tr>
      <td scope="row">Depolama: Micro SD Kart (max. 64 GB)</td>
     
    </tr>
    <tr>
      <td scope="row">Çözünürlük: 720p-1080p</td>
     
    </tr>
     <tr>
      <td scope="row">Lens: F2.6mm 112°</td>
     
    </tr>
     <tr>
      <td scope="row">Güç: 5V/1A</td>
     
    </tr>
     <tr>
      <td scope="row">Gece Görüşü: 8 Non-invasive (940nm)</td>
     
    </tr>
     <tr>
      <td scope="row">Hareket Algılama: Auto Capture (10 Saniye)</td>
     
    </tr>
     <tr>
      <td scope="row">Kontrol: PTZ</td>
     
    </tr>
     <tr>
      <td scope="row">Intercom</td>
     
    </tr>
     <tr>
      <td scope="row">Ağırlık: 230g</td>
     
    </tr>
     <tr>
      <td scope="row">Boyut: 110 x 64 x 93mm</td>
     
    </tr>
    

  </tbody>
</table>
</div>
</body>
<script src="{{asset('scripts/script.js')}}" type="text/javascript"></script>
</html>