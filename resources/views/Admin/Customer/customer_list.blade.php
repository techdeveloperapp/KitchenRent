@extends('layouts.admin.app')
@section('content')
@section('title', __('messages.customer_list') )
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						{{ __('messages.customer_list') }}
					</h3>
				</div>
			</div>
			<div class="m-portlet__head-tools">
				<ul class="m-portlet__nav">
					<li class="m-portlet__nav-item">
						<a href="{{url('admin/customer/add')}}" class="btn m-btn  m-btn--pill m-btn--air m-btn--gradient-from-focus m-btn--gradient-to-danger">
							<span>
								<i class="la la-plus"></i>
								<span>
									{{ __('messages.new_customer') }}
								</span>
							</span>
						</a>
					</li>
				</ul>
				
			</div>
		</div>
		
		<div class="m-portlet__body">
			<div class="m-form m-form--label-align-right m--margin-top-0 m--margin-bottom-5">
				<div class="row align-items-center">
					<div class="col-md-3">
						<div class="m-input-icon m-input-icon--left">
							<input type="text" class="form-control m-input" placeholder="{{ __('messages.search') }}..." id="global_search">
							<span class="m-input-icon__icon m-input-icon__icon--left">
								<span>
									<i class="la la-search"></i>
								</span>
							</span>
						</div>
					</div>
				</div>
			</div>
			<!--begin: Datatable -->
			<div class="m_datatable" id="ajax_data"></div>
			<!--end: Datatable -->
		</div>
	</div>
	<!-- END EXAMPLE TABLE PORTLET-->
</div>
<!-- Modal for success response -->
  <div class="modal fade" id="ResponseSuccessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form name="fm-student">
          <div class="modal-body">
            <h5 id="ResponseHeading"></h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-accent  background_gradient btn-view no_border_field" data-dismiss="modal" id="LoadVendorDatatable">
              {{__('messages.success_response')}}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
@section('script')
	<script type="text/javascript">
		var t;
		var DatatableRemoteAjaxDemo = {
			init: function () {
				
				t = $(".m_datatable").mDatatable({
					data: {
						type: "remote",
						source: {
							read: {
								url: 'getAllCustomers',
								method: 'GET',
								headers: { 'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
								params: {
									// custom query params
									query: {
										global_search: $('global_search').val(),
									}
								},
								map: function(raw) {
		                          var dataSet = raw;
		                          if (typeof raw.data !== 'undefined') {
		                           dataSet = raw.data;
		                         }
		                         return dataSet;
		                       },
							}
						},
						pageSize: 10,
						serverPaging: !0,
						serverFiltering: !0,
						serverSorting: !1
					},
					layout: {
						theme: "default",
						scroll: !1,
						footer: !1
					},
					sortable: !0,
					pagination: !0,
					toolbar: {
						items: {
							pagination: {
								pageSizeSelect: [5, 10, 20, 30, 50, 100]
							}
						}
					},
					// search: {
					// 	input: $("#global_search")
					// },
					
					translate: { records: {processing: '{{ __("messages.proceesing") }}',noRecords: "{{ __('messages.no_records') }}"},toolbar: {pagination: {items: {default: {first: "{{ __('messages.first') }}",prev: "{{ __('messages.previous') }}",next: "{{ __('messages.next') }}",last: "{{ __('messages.last') }}"},info: "{{ __('messages.pagination') }}" }}}},
					columns: [
					{
		              	field: "S_No",
		              	title: "S.No",
		              	sortable: !0,
						selector: !1,
						textAlign: "left"
		            },
					{
						field: "first_name",
						title: "{{ __('messages.first_name') }}",
						sortable: !0,
						selector: !1,
						textAlign: "left"
					},{
						field: "last_name",
						title: "{{ __('messages.last_name') }}",
						sortable: !0,
						selector: !1,
						textAlign: "left"
					},{
						field: "email",
						title: "{{ __('messages.email') }}",
						sortable: !0,
						selector: !1,
						textAlign: "left"
					},{
						field: "phone",
						title: "{{ __('messages.phone') }}",
						sortable: !0,
						selector: !1,
						textAlign: "left"
					},
					{
						field: "status",
						title: "{{ __('messages.status') }}",
						sortable: !0,
						selector: !1,
						textAlign: "left",
						template: function(row) {
							let html = '';
							if(row.status == '1'){
								html += '<span class="m-badge m-badge--info m-badge--wide">{{ __("messages.active") }}</span>';
							}else{
								html += '<span class="m-badge m-badge--warning m-badge--wide">{{ __("messages.in_active") }}</span>';
							}
							return html;
						}
					},
		            {
		              //width: 190,
		              title: "{{ __('messages.actions') }}",
		              sortable: false,
		              overflow: 'visible',
		              field: 'Actions',
		              textAlign: 'left',
		              template: function(row) {
		                 let html = '';
		                 var edit_url="{{url('admin/customer/getCustomerById/')}}/"+row.id;
		                 var delete_url="'{{url('admin/customer/deleteCustomerById/')}}/"+row.id+"'";
		                 html+='<a href="'+edit_url+'" class="btn btn-info m-btn m-btn--icon btn-sm m-btn--icon-only  m-btn--pill" title="{{ __('messages.edit') }}"><i class="la la-edit"></i></a> ';
			            html += '<a href="javascript:void(0);" class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only  m-btn--pill" title="{{ __('messages.delete') }}" onclick="deleteCustomer('+delete_url+');"><i class="la la-trash"></i></a> ';
		                 return html;
		              },
		           }],
				   
				}), $("#global_search").on("change", function () {
					var value = $(this).val();
			  		t.setDataSourceQuery({global_search:value});
				  	t.reload();
				}), $("#m_form_type").on("change", function () {
					t.search($(this).val(), "Type")
				}), $("#m_form_status, #m_form_type").selectpicker()
			}
		};
		jQuery(document).ready(function () {
			DatatableRemoteAjaxDemo.init()
		});

		function deleteCustomer(url){
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
			        url: url,
			        headers: {
			          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			        },
			        success: function(data) {
						console.log(data);
			          //var res = $.parseJSON(data);
			          swal(data.message,'',data.status); 	
					  t.reload();
			       },
			       error: function(data) {
			        swal('Error',data,'error');
			      }
			    });
				
		  	}else{
		  	}
		  	
		  });
		}

		$("#LoadVendorDatatable").on('click',function(){
		  t.reload();
		  $('body').css('overflow', 'auto');
		});
	</script>
@endsection