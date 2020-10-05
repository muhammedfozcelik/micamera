@extends('contactanasablon')
@section('icerik')
	<div class="container">
		<div class="jumbotron">

		<a href="/slider" class="btn btn-info">Resim ekle</a>
			<table class="table table-striped table-bordered">
  				<thead class="thead-dark">
  



    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">image</th>
      <th scope="col">Resim Değiştir</th>
      <th scope="col">Resim Sil</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($sliderresim as $slider)
    <tr>
      <th scope="row">{{$slider->id}}</th>
      <td>{{$slider->name}}</td>
      <td><img id="image" src="{{asset('uploads/slider/' . $slider->image)}}" class="w-50 h-50" data-action="zoom"> </td>
      <td ><a href="/editimage/{{$slider->id}}" class="btn btn-success">Resim Değiştir</a></td>	
      <td><a href="/deleteimage/{{$slider->id}}" class="btn btn-danger">Resim Sil</a></td>
    </tr>

   	@endforeach
  </tbody>
</table>



		</div>


	</div>

@endsection