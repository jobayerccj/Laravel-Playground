@extends('layouts/master')

@section('content')
	<div class="col-md-8 blog-main">
		<h1>Publish a Post</h1>
		<hr/>

		@include('partials/errors')
		
		<form method="POST" action="/posts" id="post_create1" >
			{{ csrf_field() }}


		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" id="title" placeholder="Title" name="title">
		    
		  </div>
		  <div class="form-group">
		    <label for="body">Body</label>
		    <textarea class="form-control" name="body"></textarea>
		    
		  </div>

	  		<input type="hidden" name="image" >

		  <div action="#" id="dropzone" class="dropzone">
			    <div class="fallback">
			        <input type="file" name="images[]" class="file-styled btn btn-primary" accept=".jpg, .jpeg, .png" required multiple>
			    </div>
			</div>
		  
		  <button type="submit" class="btn btn-primary">Publish</button>
		</form>
	</div>
	<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

	<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
	
	<script>
		
		Dropzone.options.dropzone = {
		  url: "/posts/store_image",
		  sending: function(data, xhr, formData){
	          formData.append('_token', "{{ csrf_token() }}" );
	          
	       },
		  
		  paramName:"images",
		  
		  maxFiles:10,
		  addRemoveLinks:true,
		  acceptedFiles: ".jpeg,.jpg,.png,.gif",
		  success: function(results, callback){
		  	console.log(results['name']);
		  }
		};
	</script>
@endsection