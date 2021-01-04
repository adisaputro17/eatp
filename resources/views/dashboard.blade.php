@extends('layout/main')

@section('title','ATP Report')

@section('main-content')
<div class="section-body mt-4">
	<div class="container-fluid">
		<!-- Info boxes -->
		<div class="row mb-3">
			<div class="col-12 col-sm-6 col-md-3">
				<div class="card bg-info">
					<div class="card-body w_user">
						<div class="user_avtar">
							<img class="rounded-circle" src="../assets/images/sm/avatar2.jpg" alt="">
						</div>
						<div class="content text-white">
							<div class="text">CPU Traffic</div>
							<h4 class="mb-0">10 %</h4>
						</div>
					</div>
				</div>
			</div>
			<!-- /.col -->

			<div class="col-12 col-sm-6 col-md-3">
				<div class="card bg-danger">
					<div class="card-body w_user">
						<div class="user_avtar">
							<img class="rounded-circle" src="../assets/images/sm/avatar2.jpg" alt="">
						</div>
						<div class="content text-white">
							<div class="text">Likes</div>
							<h4 class="mb-0">41,410</h4>
						</div>
					</div>
				</div>
			</div>
			<!-- /.col -->

			<div class="col-12 col-sm-6 col-md-3">
				<div class="card bg-success">
					<div class="card-body w_user">
						<div class="user_avtar">
							<img class="rounded-circle" src="../assets/images/sm/avatar2.jpg" alt="">
						</div>
						<div class="content text-white">
							<div class="text">Sales</div>
							<h4 class="mb-0">760</h4>
						</div>
					</div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-12 col-sm-6 col-md-3">
				<div class="card bg-warning">
					<div class="card-body w_user">
						<div class="user_avtar">
							<img class="rounded-circle" src="../assets/images/sm/avatar2.jpg" alt="">
						</div>
						<div class="content text-white">
							<div class="text">New Members</div>
							<h4 class="mb-0">2,000</h4>
						</div>
					</div>
				</div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
</div>
@endsection