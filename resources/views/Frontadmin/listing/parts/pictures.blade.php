<style>
.upload-gallery-thumb-buttons {
    background-color: #f7f8f9;
    margin: 0 0 10px;
    max-width: 200px;
}
.upload-gallery-thumb-buttons button {
    color: #949ca5;
    background-color: transparent;
    border-color: transparent;
    margin: 0 5px;
}
</style>
<!-- Headline -->
<div class="add-listing-headline">
	<h3><i class="sl sl-icon-picture"></i> {{ __('messages.pictures') }}</h3>
</div>
<div class="row with-forms margin-bottom-20">
<!-- Dropzone -->
	
	<div class="dropzone" action="{{ route('dropzone.upload.uploadListingImage') }}" id="my-awesome-dropzone">
		<div class="dropzone__msg dz-message needsclick">
			<div class="upload-icon"> <i class="fa fa-picture-o" aria-hidden="true"></i></div>
			<h4> Drag and drop the images to customize the gallery order.<br>Click on the star icon to set the featured image<br> <span>(Minimum size 1440 x 900 px)</span></h4>
		</div>
	</div>
</div>
<div class="row with-forms upload-media-gallery margin-bottom-50">
	<div class="col-sm-2 col-xs-4 listing-thumb" style="position: relative; left: 0px; top: 0px;">
		<figure class="upload-gallery-thumb">
			<img width="150" height="150" src="https://www.gigworks.me/wp-content/uploads/2019/12/single-listing-05c-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="">
		</figure>
		<div class="upload-gallery-thumb-buttons">
			<button type="button" class="icon-featured" data-thumb="https://www.gigworks.me/wp-content/uploads/2019/12/single-listing-05c-450x300.jpg" data-listing-id="" data-attachment-id=""><i class="fa fa-star"></i></button>
			<button  type="button" class="icon-delete" data-listing-id="" data-attachment-id=""><i class="fa fa-trash-o"></i></button>
			<input type="hidden" class="listing-image-id" name="listing_image_ids[]" value="">
		</div>
		<span style="display: none;" class="icon icon-loader"><i class="fa fa-spinner fa-spin"></i></span>
		</div>
</div>

	
	<button onclick="save_draft();" type="button" class="button button-defualt">{{ __('messages.save_draft') }}</button>
	<button type="button" onclick="Next_Tab(4);" class="button pull-right">{{ __('messages.next') }} <i class="fa fa-arrow-right"></i></button>
	<button type="button" onclick="Previous_Tab(2);" class="button pull-right"><i class="fa fa-arrow-left"></i>{{ __('messages.previous') }}</button>
	
<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="{{url('frontend/')}}/scripts/dropzone.js"></script>
<script>
Dropzone.autoDiscover = false;
$(document).ready(function(){
		var myDropzone = new Dropzone("#my-awesome-dropzone",{
			paramName: "image", // The name that will be used to transfer the file
			maxFilesize: 10, // MB
			maxFiles : 10,
			acceptedFiles: 'image/*',
			addRemoveLinks: true,
			dictFileTooBig: "{{ __('messages.file_too_big') }}",
			dictInvalidFileType: "{{ __('messages.invalid_file') }}",
		});
		
		myDropzone.on("thumbnail", function(file) {
			console.log(file);
		}); 
		myDropzone.on("error", function(file,errorMessage,xhr) {
			swal('Error',errorMessage,'error');
			myDropzone.removeFile(file);
			//console.log(xhr);
		}); 
		myDropzone.on("success", function(file,errorMessage,xhr) {
			//console.log(xhr);
			var response = JSON.parse(file.xhr.response);
			//console.log(response);

			if(response.status=='error')
			{
				myDropzone.removeFile(file);
				swal('Error','Something went wrong please check allowed type and size','error');
				return false;
			}
			//console.log(response.id);
			$('#profile_id').val(response.id);
			$("#view_profile_image").attr('src',file.dataURL);
			myDropzone.removeFile(file);
			$("#remove_file").removeClass('m--hide');
		}); 
		$("#remove_file").on('click',function(){
			swal({
		    title: "{{ __('messages.are_you_sure_delete') }}",
		    text: "",
		    type: "warning",
		    showCancelButton: true,
		    confirmButtonClass: "btn btn-warning",
		    confirmButtonColor: "#DD6B55",
		    confirmButtonText: "{{ __('messages.yes_proceed') }}",
		    cancelButtonText: "{{ __('messages.cancel') }}",
		    closeOnConfirm: false
		  }).then(result => {
		  	if(result.value){
		  		 $.ajax({
					method: 'POST',
					url: "{{url('dropzone/upload/deleteProfilePic')}}",
					data: {'id':$('#profile_id').val()},
					headers: {
					  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					success: function(data){
						swal(data.message,'','success');
						$("#view_profile_image").attr('src',"{{url('assets/avatar.png')}}");
						$("#remove_file").addClass('m--hide');
						$('#profile_id').val('');
					},
					error: function(data){
						swal('Error',data,'error');
					}
				});
		  	}
		  });
		});
});
</script>