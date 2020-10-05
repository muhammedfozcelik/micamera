<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/icerik">Home</a></li>
    <li class="breadcrumb-item"><a href="/create">Oluştur</a></li>
  </ol>
</nav>
	<div>



<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Baslik</th>
      <th scope="col">İcerik</th>
      
    </tr>
  </thead>
  <tbody>
 	 @foreach($icerik as $articles)
    <tr>
      <th>{{$articles->title}}</th>
      <td>{{$articles->content}}</td>
      <td>
      	<a href="{{url('/edit/'.$articles->id)}}" class="btn btn-sm btn-warning">Düzenle</a>
      	<a href="" class=""></a>

      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>

</div>

