@extends('layouts.admin.app')
@section('content')
@section('title', 'Add Vendor')
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						Add New Vendor
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
									Vendor List
								</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	<!--begin::Form-->
		<form class="m-form m-form--fit m-form--label-align-right" id="m_form_1" method="post">
			<div class="m-portlet__body">
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						First Name*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-typeahead">
							<input class="form-control m-input" id="first_name" type="text" name="first_name" placeholder="First name">
						</div>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						Last Name*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-typeahead">
							<input class="form-control m-input" id="last_name" type="text" name="last_name" placeholder="Last name">
						</div>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						Email*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-typeahead">
							<input class="form-control m-input" id="email" type="text" name="email" placeholder="Email">
						</div>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						Password*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-typeahead">
							<input class="form-control m-input" id="password" type="password" name="password" placeholder="Password">
						</div>
						
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						Phone*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						 <div class="m-typeahead">
							<input class="form-control m-input" id="phone" type="text" name="phone" placeholder="Phone">
						</div>
					</div>
				</div>
				
			</div>
			<div class="m-portlet__foot m-portlet__foot--fit">
				<div class="m-form__actions m-form__actions">
					<div class="row">
						<div class="col-lg-9 ml-lg-auto">
							<button type="submit" class="btn btn-success">
								Save
							</button>
							<button type="reset" class="btn btn-secondary">
								Cancel
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
				password: {
                    required: !0,
                    minlength: 8,
                },
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