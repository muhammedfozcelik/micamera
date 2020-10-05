@extends('contactanasablon')
@section('icerik')
<div class="container">

<h1>İletişim Formu</h1>

<div class="row">
  
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">ad</th>
      <th scope="col">soyad</th>
      <th scope="col">email</th>
      <th scope="col">numara</th>
      <th scope="col">adres</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contactform as $contacts)
    <tr>
      <th scope="row">{{$contacts->id}}</th>
      <td>{{$contacts->name}}</td>
      <td>{{$contacts->surname}}</td>
      <td>{{$contacts->email}}</td>
      <td>{{$contacts->number}}</td>
      <td>{{$contacts->address}}</td>
    </tr>
    @endforeach  
  </tbody>
</table>
</div>
</div>
    
@endsection
