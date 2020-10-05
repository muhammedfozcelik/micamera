@extends('contactanasablon')
@section('icerik')
 <div class="container">
    @if(Session::has('success'))
  <div class="alert alert-success">
    {{Session::get('success')}}
  </div>
  @endif
<form action="/kaydol" method="post">
	@csrf
  <div class="form-group">
    <label for="first_name">Ad</label>
    <input type="text" class="form-control" placeholder="isminizi girinizi" name="first_name" id="first_name">
  </div>
  <div class="form-group">
    <label for="last_name">Soyad</label>
    <input type="text" class="form-control" placeholder="soyisminizi giriniz" name="last_name" id="last_name">
  </div>
  <div class="form-group">
    <label for="mobile">Numara</label>
    <input type="text" class="form-control" placeholder="numaranızı girinizi" name="mobile" id="mobile">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" placeholder="email girinizi" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="password">Sifre</label>
    <input type="password" class="form-control" placeholder="sifrenizi girinizi" name="password" id="password">
  </div>
  <div class="form-group">
    <label for="confirm_password">Sifre Onay</label>
    <input type="password" class="form-control" placeholder="sifrenizi tekrar giriniz" name="confirm_password" id="confirm_password">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Kaydol</button>
</form> 
</div>
@endsection

	

