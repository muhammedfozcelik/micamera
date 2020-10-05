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
	<title>Xiaomi</title>
</head>
<body>
<div class="pt-5">
	
<img src="{{URL::asset('/pictures/360.jpg')}}" class="img-fluid w-100 h-100" alt="Responsive image">
	

</div>
<div class="">
  
<img src="{{URL::asset('/pictures/tersdüz.jpg')}}" class="img-fluid" alt="Responsive image">
  
 
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Yukarı</button>
</body>
 <script src="{{asset('scripts/script.js')}}" type="text/javascript"></script>

</html>
