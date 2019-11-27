@extends('layouts.admin.app')
@section('content')
@section('title', 'Vendor List')
<div class="m-content">
	@if(Session::has('success'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
	@endif
	<div class="m-portlet m-portlet--mobile">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						Vendor List
					</h3>
				</div>
			</div>
			<div class="m-portlet__head-tools">
				<ul class="m-portlet__nav">
					<li class="m-portlet__nav-item">
						<a href="{{url('admin/vendor/add')}}" class="btn m-btn  m-btn--pill m-btn--air m-btn--gradient-from-focus m-btn--gradient-to-danger">
							<span>
								<i class="la la-plus"></i>
								<span>
									New Vendor
								</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="m-portlet__body">
			<!--begin: Datatable -->
			<div class="m_datatable" id="ajax_data"></div>
			<!--end: Datatable -->
		</div>
	</div>
	<!-- END EXAMPLE TABLE PORTLET-->
</div>
@endsection
@section('script')
	<script type="text/javascript">
		var DatatableRemoteAjaxDemo = {
			init: function () {
				var t;
				t = $(".m_datatable").mDatatable({
					data: {
						type: "remote",
						source: {
							read: {
								url: 'getAllVendors',
								method: 'GET',
								map: function(raw) {
		                          var dataSet = raw;
		                          if (typeof raw.data !== 'undefined') {
		                           dataSet = raw.data;
		                         }
		                         // console.log('Result');
		                         // console.log(dataSet);
		                         return dataSet;
		                       },
							}
						},
						pageSize: 10,
						serverPaging: !0,
						serverFiltering: !0,
						serverSorting: !0
					},
					layout: {
						scroll: !1,
						footer: !1
					},
					sortable: !0,
					pagination: !0,
					toolbar: {
						items: {
							pagination: {
								pageSizeSelect: [10, 20, 30, 50, 100]
							}
						}
					},
					search: {
						input: $("#generalSearch")
					},
					columns: [{
		              field: "id",
		              title: "S.No",
		              selector: {class:'m-checkbox--solid m-checkbox--brand deleteCheck'},
		              width: 30
		            },
					{
						field: "name",
						title: "Name",
						sortable: !1,
						selector: !1,
						textAlign: "center"
					}, {
						field: "email",
						title: "Email",
						sortable: !1,
						selector: !1,
						textAlign: "center"
					},
					{
		              field: "status",
		              title: "Status",
		              textAlign: 'left',
		              template: function(row) {
		                
		                    return '\
		                 <span class="m-switch m-switch--success m-switch--sm" style="width: 127px;"><label>\
		                  <input type="checkbox" class="checkbox" checked="checked">\
		                    <span></span>\
		                  </label></span>\
		                 ';	                
		              }
		            },
		            {
		              width: 190,
		              title: 'Actions',
		              sortable: false,
		              overflow: 'visible',
		              field: 'Actions',
		              textAlign: 'left',
		              template: function(row) {
		                 let html = '';
		                 html+='<a href="javascript:void(0);" class="m-portlet__nav-link btn btn__text-danger btn__text" title="Edit Vendor"><i class="la la-edit"></i></a>';
			            html += '<a href="javascript:void(0);" class="m-portlet__nav-link btn btn__text-danger btn__text" title="Delete"><i class="la la-trash"></i></a>';
		                 return html;
		              },
		           }]
				}), $("#m_form_status").on("change", function () {
					t.search($(this).val(), "Status")
				}), $("#m_form_type").on("change", function () {
					t.search($(this).val(), "Type")
				}), $("#m_form_status, #m_form_type").selectpicker()
			}
		};
		jQuery(document).ready(function () {
			DatatableRemoteAjaxDemo.init()
		});
	</script>
@endsection