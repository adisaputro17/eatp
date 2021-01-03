@extends('layout/main')

@section('title','ATP Report')

@section('main-content')
<div class="section-body">
	<div class="container-fluid mt-2">
		<div class="d-flex justify-content-between align-items-center ">
			<div class="header-action">
				<h1 class="page-title">ATP Report</h1>
			</div>
			<a href="/create-atp" class="btn btn-info btn-sm">Create ATP</a>
		</div>
	</div>
</div>
<div class="section-body mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="table-responsive">                                
						<table class="table table-hover table-striped table-vcenter text-nowrap mb-0">
							<thead>
								<tr>
									<th>No</th>
									<th>Project</th>
									<th>Site Name</th>
									<th>Site ID</th>
									<th>Area</th>
									<th>Location</th>
									<th>Status</th>
									<th>ATP</th>
									<th>BAL</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Telkomsel RAE</td>
									<td>Galaxy Mall 03</td>
									<td>ADL092</td>
									<td>Kendari</td>
									<td>DMT Poros Tendean</td>
									<td>Approved PM Tsel</td>
									<td><a href="/cetak-atp"><i class="fa fa-file"></i></a></td>
									<td><a href="/cetak-bal"><i class="fa fa-file"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection