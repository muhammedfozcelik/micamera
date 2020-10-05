@extends('contactanasablon')
@section('icerik')

<div class="container">	

<div class="jumbotron">
		<form action="/sliderekle" method="post" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" placeholder="isim girin">
		</div>
		<div class="input-group">
			<div class="custom-file">
					<input  type="file" name="image" class="image custom-file-input" placeholder="isim girin">
					<label class="custom-file-label">Dosya Seç</label>
					<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="modalLabel">ss</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">×</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <div class="img-container">
				            <div class="row">
				                <div class="col-md-8">
				                    <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
				                </div>
				                <div class="col-md-4">
				                    <div class="preview"></div>
				                </div>
				            </div>
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				        <button type="button" class="btn btn-primary" id="crop">Crop</button>
				      </div>
				    </div>
				  </div>
				</div>

				</div>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Save Data</button>
						
		</form>
</div>
</div>
							
@endsection
