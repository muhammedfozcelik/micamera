@extends('contactanasablon')
@section('icerik')
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>İçerik Yönetim Sistemi</title>
  </head>
  <body>
    @if($layout=='index')
    <div class="container-fluid">
      <div class="row">
      <section class="col">
        @include("iceriklistesi")
      </section>
      <section class="col">
        
        

      </section>
      </div>

    </div>
    @elseif($layout=='create')
     <div class="container-fluid">
      <div class="row">
      <section class="col-md-6">
        @include("iceriklistesi")
      </section>
      <section class="col-md-6">
        <form action="{{url('/store')}}" method="post">
          @csrf
                  <div class="form-group">
                    <label>Baslik</label>
                    <input type="text" class="form-control" name="title" placeholder="baslik giriniz">
                  </div>
                  <div class="form-group">
                    <label>İcerik</label>
                    <input type="text" class="form-control" name="content" placeholder="icerik giriniz">
                  </div>

                    <input type="submit" class="btn btn-info" value="save">
                    <input type="reset" class="btn btn-warning" value="reset">
        </form>


      </section>
      </div>

    </div>

    @elseif($layout=='show')
     <div class="container-fluid">
      <div class="row">
      <section class="col">
        @include("iceriklistesi")
      </section>
      <section class="col"></section>

      </div>
    </div>

    @elseif($layout=='edit')
     <div class="container-fluid">
      <div class="row">
      <section class="col">
        @include("iceriklistesi")
      </section>
      <section class="col">
            <form action="{{url('/update/'.$article->id)}}" method="post">
          @csrf
                  <div class="form-group">
                    <label>Baslik</label>
                    <input value="{{$article->title}}" type="text" class="form-control" name="title" placeholder="baslik giriniz">
                  </div>
                  <div class="form-group">
                    <label>İcerik</label>
                    <input value="{{$article->content}}" type="text" class="form-control" name="content" placeholder="icerik giriniz">
                  </div>

                    <input type="submit" class="btn btn-info" value="update">
                    <input type="reset" class="btn btn-warning" value="reset">
        </form>



      </section>

      </div>
    </div>  

    @endif
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
