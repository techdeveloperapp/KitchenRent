@extends('layouts.admin.app')
@section('content')
@section('title', isset($id) ? __('messages.update_vendor') : __('messages.new_vendor'))
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
		<form class="m-form m-form--fit m-form--label-align-right" id="m_form_1" method="post" action="{{ route('admin.vendor.addVendor') }}">
			@csrf
			<input class="form-control m-input m--hide" id="id" type="text" name="id" placeholder="id" value="{{isset($id) ? $id : ''}}">
			<div class="m-portlet__body">
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						{{ __('messages.first_name') }}*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-typeahead">
							<input class="form-control m-input" id="first_name" type="text" name="first_name" placeholder="{{ __('messages.first_name') }}" value="{{isset($first_name) ? $first_name : ''}}">
						</div>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						{{ __('messages.last_name') }}*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-typeahead">
							<input class="form-control m-input" id="last_name" type="text" name="last_name" placeholder="{{ __('messages.last_name') }}" value="{{isset($last_name) ? $last_name : ''}}">
						</div>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						{{ __('messages.email') }}*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-typeahead">
							<input class="form-control m-input" {{isset($email) ? 'readonly' : ''}} id="email" type="text" name="email" placeholder="{{ __('messages.email') }}" value="{{isset($email) ? $email : ''}}">
						</div>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						{{ __('messages.password') }}*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-typeahead">
							<input class="form-control m-input" id="password" type="password" name="password" placeholder="*****" value="">
						</div>
						
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						{{ __('messages.phone') }}*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						 <div class="m-typeahead">
							<input class="form-control m-input" id="phone" type="text" name="meta[phone]" placeholder="{{ __('messages.phone') }}" value="{{isset($phone) ? $phone : ''}}" data-rule-required="true" data-rule-minlength="10" data-rule-digits="true">
						</div>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						{{ __('messages.profile_pic') }}
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						 <div class="m-dropzone dropzone" action="{{ route('admin.vendor.uploadProfilePic') }}" id="m-dropzone-one">
							<div class="m-dropzone__msg dz-message needsclick">
								<h3 class="m-dropzone__msg-title">
									Drop files here or click to upload.
								</h3>
							</div>
						</div>
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
                }
            },
            invalidHandler: function(e, r) {
                var i = $("#m_form_1_msg");
                i.removeClass("m--hide").show(), mApp.scrollTo(i, -200)
            },
            submitHandler: function(form) {
				form.submit();
			}
        });
    }
};
jQuery(document).ready(function() {
    FormControls.init();
});
</script>	
@endsection