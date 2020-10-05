@extends('contactanasablon')
@section('icerik')
<div class="container">	

<div class="jumbotron">
		<form action="/updateimage/{{$sliderresim->id}}" method="post" enctype="multipart/form-data">
			@csrf
			{{method_field('PUT')}}	
			<input type="hidden" value="{{$sliderresim->id}}" name="id" id="id">
		<div class="form-group">
					<label>Name</label>
					<input type="text" value="{{$sliderresim->name}}" name="name" class="form-control" placeholder="isim girin">
		</div>
		<div class="input-group">
			<div class="custom-file">
					<input type="file" name="image" class="custom-file-input" value="{{$sliderresim->image}}" placeholder="isim girin">
					<label class="custom-file-label">Dosya Seç</label>
			</div>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Update Data</button>
	</form>
</div>	

</div>	
@endsection