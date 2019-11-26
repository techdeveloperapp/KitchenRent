@extends('layouts.admin.app')
@section('content')
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						Add Vendor
					</h3>
				</div>
			</div>
		</div>
	<!--begin::Form-->
		<form class="m-form m-form--fit m-form--label-align-right" id="m_form_1">
			<div class="m-portlet__body">
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						Username*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-typeahead">
							<input class="form-control m-input" id="m_typeahead" type="text" name="typeahead" placeholder="Username">
						</div>
						<span class="m-form__help">
							Please insert username
						</span>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						Email*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-typeahead">
							<input class="form-control m-input" id="m_typeahead" type="text" name="typeahead" placeholder="Email">
						</div>
						<span class="m-form__help">
							Please insert email
						</span>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						Gender*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<select class="form-control m-bootstrap-select" id="m_bootstrap_select" name="select" value="Select Gender">
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-3 col-sm-12">
						Password*
					</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-typeahead">
							<input class="form-control m-input" id="m_typeahead" type="password" name="typeahead" placeholder="Password">
						</div>
						<span class="m-form__help">
							Please insert password
						</span>
					</div>
				</div>
			</div>
			<div class="m-portlet__foot m-portlet__foot--fit">
				<div class="m-form__actions m-form__actions">
					<div class="row">
						<div class="col-lg-9 ml-lg-auto">
							<button type="submit" class="btn btn-success">
								Validate
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
@endsection