@extends('layouts.admin.app')
@section('content')
@section('title', 'Vendor List')
<div class="m-content">
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
			<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
				<thead>
					<tr>
						<th>
							RecordID
						</th>
						<th>
							Name
						</th>
						<th>
							Email
						</th>
						<th>
							Gender
						</th>
						<th>
							Status
						</th>
						<th>
							Type
						</th>
						<th>
							Actions
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							61715-075
						</td>
						<td>
							China
						</td>
						<td>
							Tieba
						</td>
						<td>
							3
						</td>
						<td>
							2
						</td>
						<td nowrap></td>
					</tr>
					<tr>
						<td>
							2
						</td>
						<td>
							63629-4697
						</td>
						<td>
							Indonesia
						</td>
						<td>
							Cihaur
						</td>
						<td>
							6
						</td>
						<td>
							3
						</td>
						<td nowrap></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- END EXAMPLE TABLE PORTLET-->
</div>
@endsection