@extends('layouts.admin.app')
@section('content')
@section('title', isset($id) ? __('messages.update_vendor') : __('messages.new_vendor'))
<style>
img#view_profile_image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
}
</style>
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						{{isset($id) ? __('messages.update_vendor') : __('messages.new_vendor')}}
					</h3>
				</div>
			</div>
			<div class="m-portlet__head-tools">
				<ul class="m-portlet__nav">
					<li class="m-portlet__nav-item">
						<a href="{{url('admin/vendor/list')}}" class="btn m-btn  m-btn--pill m-btn--air m-btn--gradient-from-focus m-btn--gradient-to-danger">
							<span>
								<i class="la la-arrow-left"></i>
								<span>
									{{ __('messages.vendor_list') }}
								</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	<!--begin::Form-->
		<form class="m-form m-form--state m-form--fit m-form--label-align-right" id="m_form_1" method="post" action="{{ route('admin.vendor.addVendor') }}">
			@csrf
			<input class="form-control m-input" id="id" type="hidden" name="id" placeholder="id" value="{{isset($id) ? $id : ''}}">
			<input class="form-control m-input" id="profile_id" type="hidden" name="meta[profile_photo_id]" placeholder="id" value="{{isset($profile_photo_id) ? $profile_photo_id : ''}}">
			<div class="m-portlet__body">
				<div class="m-form__heading">
					<h3 class="m-form__heading-title">
						{{ __('messages.general_information') }}
					</h3>
				</div>
				<div class="form-group m-form__group row">
				   <div class="col-lg-6 m-form__group-sub">
						<label class="form-control-label">
							{{ __('messages.first_name') }}*
						</label>
				
						<input class="form-control m-input" id="first_name" type="text" name="first_name" placeholder="{{ __('messages.first_name') }}" value="{{isset($first_name) ? $first_name : ''}}">
					</div>
					<div class="col-lg-6 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.last_name') }}*
						</label>
						
						<input class="form-control m-input" id="last_name" type="text" name="last_name" placeholder="{{ __('messages.last_name') }}" value="{{isset($last_name) ? $last_name : ''}}">
					</div>
				</div>
				<div class="form-group m-form__group row">
					<div class="col-lg-6 m-form__group-sub">
						<label class="form-control-label">
							{{ __('messages.email') }}*
						</label>
				
						<input class="form-control m-input" {{isset($email) ? 'readonly' : ''}} id="email" type="text" name="email" placeholder="{{ __('messages.email') }}" value="{{isset($email) ? $email : ''}}">
					</div>
					<div class="col-lg-6 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.password') }}*
						</label>
						
						<input class="form-control m-input" id="password" type="password" name="password" placeholder="*****" value="">
					</div>
				</div>
				<div class="form-group m-form__group row">
					<div class="col-lg-12 m-form__group-sub">
						<label class="form-control-label">
							{{ __('messages.bio') }}
						</label>
				
						<textarea class="form-control m-input" id="bio" name="meta[bio]" placeholder="{{ __('messages.bio') }}" rows="3">{{isset($bio) ? $bio : ''}}</textarea>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<div class="col-lg-2 m-form__group-sub">
						<label class="form-control-label">
							{{ __('messages.profile_pic') }}
						</label>
						 <div class="m-card-profile__pic">
							<div class="m-card-profile__pic-wrapper">
								<img src="{{isset($file_name) ? url('../storage/'.$server_path) : url('assets/avatar.png')}}" alt="" id="view_profile_image">
								<button type="button" class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only  m-btn--pill m--margin-left-55 m--margin-top-10 {{ !isset($file_name) ? 'm--hide' : ''}}" id="remove_file"><i class="la la-close"></i></button>
							</div>
						</div>
					</div>
					<div class="col-lg-8 m-form__group-sub">
						<label class="form-control-label">
						</label>
						<div class="m-dropzone " action="{{ route('dropzone.upload.uploadProfilePic') }}" id="my-awesome-dropzone">
							<div class="m-dropzone__msg dz-message needsclick">
								<h3 class="m-dropzone__msg-title">
									{{ __('messages.upload_text') }}
								</h3>
								<span class="m-dropzone__msg-desc">
									{{ __('messages.upload_description') }}
								</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="m-separator m-separator--dashed m-separator--lg"></div>
				
				<div class="m-form__heading">
					<h3 class="m-form__heading-title">
						{{ __('messages.address') }}
					</h3>
				</div>
				
				<div class="form-group m-form__group row">
					<div class="col-lg-8 m-form__group-sub">
						<label class="form-control-label">
							{{ __('messages.address') }}
						</label>
				
						<input class="form-control m-input" id="address" type="text" name="meta[address]" placeholder="{{ __('messages.address') }}" value="{{isset($address) ? $address : ''}}">
					</div>
					<div class="col-lg-4 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.apt_suite') }}
						</label>
						
						<input class="form-control m-input" id="apt_suite" type="text" name="meta[apt_suite]" placeholder="Ex: #123" value="{{isset($apt_suite) ? $apt_suite : ''}}">
					</div>
				</div>
				
				<div class="form-group m-form__group row">
					<div class="col-lg-4 m-form__group-sub">
						<label class="form-control-label">
							{{ __('messages.city') }}
						</label>
				
						<input class="form-control m-input" id="city" type="text" name="meta[city]" placeholder="{{ __('messages.city') }}" value="{{isset($city) ? $city : ''}}">
					</div>
					<div class="col-lg-4 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.state') }}
						</label>
						
						<input class="form-control m-input" id="state" type="text" name="meta[state]" placeholder="{{ __('messages.state') }}" value="{{isset($state) ? $state : ''}}">
					</div>
					<div class="col-lg-4 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.zip') }}
						</label>
						
						<input class="form-control m-input" id="zip" type="text" name="meta[zip]" placeholder="{{ __('messages.zip') }}" value="{{isset($zip) ? $zip : ''}}">
					</div>
				</div>
				
				<div class="form-group m-form__group row">
					<div class="col-lg-6 m-form__group-sub">
						<label class="form-control-label">
							{{ __('messages.neighborhood') }}
						</label>
				
						<input class="form-control m-input" id="neighborhood" type="text" name="meta[neighborhood]" placeholder="{{ __('messages.neighborhood') }}" value="{{isset($neighborhood) ? $neighborhood : ''}}">
					</div>
					<div class="col-lg-6 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.country') }}
						</label>
						
						<input class="form-control m-input" id="country" type="text" name="meta[country]" placeholder="{{ __('messages.country') }}" value="{{isset($country) ? $country : ''}}">
					</div>
				</div>
				
				<div class="m-separator m-separator--dashed m-separator--lg"></div>
				
				<div class="m-form__heading">
					<h3 class="m-form__heading-title">
						{{ __('messages.emergency_contact') }}
					</h3>
				</div>
				<div class="form-group m-form__group row">
					<div class="col-lg-3 m-form__group-sub">
						<label class="form-control-label">
							{{ __('messages.contact_name') }}
						</label>
				
						<input class="form-control m-input" id="contact_name" type="text" name="meta[contact_name]" placeholder="{{ __('messages.contact_name') }}" value="{{isset($contact_name) ? $contact_name : ''}}">
					</div>
					<div class="col-lg-3 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.contact_relationship') }}
						</label>
						
						<input class="form-control m-input" id="contact_relation" type="text" name="meta[contact_relation]" placeholder="{{ __('messages.contact_relationship') }}" value="{{isset($contact_relation) ? $contact_relation : ''}}">
					</div>
					<div class="col-lg-3 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.email') }}
						</label>
						
						<input class="form-control m-input" id="contact_email" type="text" name="meta[contact_email]" placeholder="{{ __('messages.contact_email') }}" value="{{isset($contact_email) ? $contact_email : ''}}">
					</div>
					<div class="col-lg-3 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.phone') }}
						</label>
						
						<input class="form-control m-input" id="phone" type="text" name="meta[phone]" placeholder="{{ __('messages.phone') }}" value="{{isset($phone) ? $phone : ''}}">
					</div>
				</div>
				
				<div class="m-separator m-separator--dashed m-separator--lg"></div>
				
				<div class="m-form__heading">
					<h3 class="m-form__heading-title">
						{{ __('messages.social_media') }}
					</h3>
				</div>
				<div class="form-group m-form__group row">
					<div class="col-lg-3 m-form__group-sub">
						<label class="form-control-label">
							{{ __('messages.facebook_url') }}
						</label>
				
						<input class="form-control m-input" id="facebook_url" type="text" name="meta[facebook_url]" placeholder="{{ __('messages.facebook_url') }}" value="{{isset($facebook_url) ? $facebook_url : ''}}">
					</div>
					<div class="col-lg-3 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.twitter_url') }}
						</label>
						
						<input class="form-control m-input" id="twitter_url" type="text" name="meta[twitter_url]" placeholder="{{ __('messages.twitter_url') }}" value="{{isset($twitter_url) ? $twitter_url : ''}}">
					</div>
					<div class="col-lg-3 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.instagram_url') }}
						</label>
						
						<input class="form-control m-input" id="instagram_url" type="text" name="meta[instagram_url]" placeholder="{{ __('messages.instagram_url') }}" value="{{isset($instagram_url) ? $instagram_url : ''}}">
					</div>
					<div class="col-lg-3 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.youtube_url') }}
						</label>
						
						<input class="form-control m-input" id="youtube_url" type="text" name="meta[youtube_url]" placeholder="{{ __('messages.youtube_url') }}" value="{{isset($youtube_url) ? $youtube_url : ''}}">
					</div>
				</div>
				
				
				
			</div>
			<div class="m-portlet__foot m-portlet__foot--fit">
				<div class="m-form__actions m-form__actions">
					<div class="row">
						<div class="col-lg-9 ml-lg-auto">
							<button type="submit" class="btn btn-success">
								{{isset($id) ? __('messages.update') : __('messages.save') }}
							</button>
							<button type="reset" class="btn btn-secondary">
							{{__('messages.cancel')}}
							</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!--end::Form-->
	</div>
</div>
</div>
<script>
var FormControls = {
    init: function() {
        $("#m_form_1").validate({
            rules: {
                first_name: {
                    required: !0
                },
				last_name: {
                    required: !0
                },
                email: {
                    required: !0,
                    email: !0,
                },
                @if(!isset($id))
				password: {
                    required: !0,
                    minlength: 8,
                },
                @endif
				phone: {
                    required: !0,
                    digits: !0,
					minlength: 10,
                },
				zip:{
					digits: !0,
				},
            },
            invalidHandler: function(e, r) {
                var i = $("#m_form_1_msg");
                i.removeClass("m--hide").show(), mApp.scrollTo(i, -200)
            },
            submitHandler: function(form) {
				form.submit();
			}
        });
    },
	uploadProfile:function(){
		Dropzone.autoDiscover = false;
		var myDropzone = new Dropzone("#my-awesome-dropzone",{
			paramName: "user_image", // The name that will be used to transfer the file
			maxFilesize: 2, // MB
			maxFiles : 1,
			acceptedFiles: 'image/*',
			addRemoveLinks: true,
			dictFileTooBig: "{{ __('messages.file_too_big') }}",
			dictInvalidFileType: "{{ __('messages.invalid_file') }}",
		});
		myDropzone.on("addedfile", function(file) {
			//console.log(file);
			$("#my-awesome-dropzone").addClass("dropzone"); // adding class for styling purpose only.
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
	}
};

jQuery(document).ready(function() {
    FormControls.init();
    FormControls.uploadProfile();
});
</script>	
@endsection