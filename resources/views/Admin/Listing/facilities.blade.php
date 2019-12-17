@extends('layouts.admin.app')
@section('content')
@section('title', __('messages.facilities') )
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						{{ __('messages.facilities') }}
					</h3>
				</div>
			</div>
			<div class="m-portlet__head-tools">
				<ul class="m-portlet__nav">
					<li class="m-portlet__nav-item">
						<a href="#" data-toggle="modal" data-target="#listingModal" class="btn m-btn  m-btn--pill m-btn--air m-btn--gradient-from-focus m-btn--gradient-to-danger">
							<span>
								<i class="la la-plus"></i>
								<span>
									{{ __('messages.new') }}
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
  <div class="modal fade" id="listingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">
			</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
					×
				</span>
			</button>
		</div>
        <form name="fm-student" id="listing_form">
			@csrf
          <div class="modal-body">
             <input class="form-control m-input" id="type_id" type="hidden" name="id" value="0">
			 <div class="form-group m-form__group row">
				   <div class="col-lg-6 m-form__group-sub">
						<label class="form-control-label">
							{{ __('messages.name') }}*
						</label>
				
						<input class="form-control m-input" id="type_name" type="text" name="name" placeholder="{{ __('messages.name') }}" value="">
						<input id="type_listing" type="hidden" name="type_listing" value="facilities">
					</div>
					<div class="col-lg-6 m-form__group-sub">
						<label class="form-control-label">
						{{ __('messages.status') }}
						</label>
						<select name='status' id='type_status' class="form-control m-input">
							<option value="1">{{ __("messages.active") }}</option>
							<option value="2">{{ __("messages.in_active") }}</option>
						</select>
					</div>
				</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default  background_gradient btn-view no_border_field" data-dismiss="modal">
              Close
            </button>
			<button type="submit" class="btn btn-accent  background_gradient btn-view no_border_field">
              {{ __('messages.save') }}
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
								url: 'getAllFacilities',
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
					search: {
					  // enable trigger search by keyup enter
					  onEnter: true,
					  // input text for search
					  input: $('#global_search'),
					  // search delay in milliseconds
					  delay: 400,
					},
					rows: {
					  callback: function() {
						//console.log('ok');
					  },
					},
					translate: { records: {processing: '{{ __("messages.proceesing") }}',noRecords: "{{ __('messages.no_records') }}"},toolbar: {pagination: {items: {default: {first: "{{ __('messages.first') }}",prev: "{{ __('messages.previous') }}",next: "{{ __('messages.next') }}",last: "{{ __('messages.last') }}"},info: "{{ __('messages.pagination') }}" }}}},
					columns: [
					{
		              	field: "id",
		              	title: "ID",
		              	sortable: !0,
						selector: !1,
						textAlign: "left"
		            },
					{
						field: "name",
						title: "{{ __('messages.name') }}",
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
		                 var delete_url="'{{url('admin/listing/deleteListingTypeById/')}}/"+row.id+"'";
		                 html+='<a onclick="edit_record(this);" href="javascript:void(0)" data-id="'+row.id+'" data-name="'+row.name+'" data-status="'+row.status+'" class="btn btn-info m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill edit_data" title="{{ __('messages.edit') }}"><i class="la la-edit"></i></a> ';
			            html += '<a href="javascript:void(0);" class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only  m-btn--pill" title="{{ __('messages.delete') }}" onclick="deleteType('+delete_url+');"><i class="la la-trash"></i></a> ';
		                 return html;
		              },
		           }],
				   
				}), $("#global_search").on("change", function () {
					var value = $(this).val();
			  		t.setDataSourceQuery({global_search:value});
				  	t.reload();
				})
			}
		};
		jQuery(document).ready(function () {
			DatatableRemoteAjaxDemo.init();
			$("#listingModal").modal({
				'keyboard' : false,
				'show' : false,
				'backdrop' : false
			});
			$("#listingModal").on('hide.bs.modal',function(){
				$('#type_name').val('');
				$('#type_id').val('0');
				$('#type_status').val('1');
			});
			$("#listing_form").validate({
				rules: {
					name: {
						required: !0
					},
				},
				submitHandler: function(form) {
					//form.submit();
					$.ajax({
						method: 'POST',
						url: "{{url('admin/listing/add_type')}}",
						data: {'name':$('#type_name').val(),'status': $('#type_status').val(),'id':$("#type_id").val(),'type_listing':$("#type_listing").val() },
						headers: {
						  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						},
						success: function(data) {
							console.log(data);
						  swal(data.message,'',data.status);
						if(data.status == 'success'){
						  $("#listingModal").modal('hide');						  
						  t.reload();
						}
					   },
					   error: function(data) {
						swal('Error',data,'error');
					  }
					});
				}
			});
			
			
		});
		//edit records
		function edit_record(obj){
			console.log('edit '+ $(obj).attr('data-id'));
			$("#type_id").val($(obj).attr('data-id'));
			$("#type_name").val($(obj).attr('data-name'));
			$("#type_status").val($(obj).attr('data-status'));
			$("#listingModal").modal('show');
		}

		function deleteType(url){
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

	</script>
@endsection