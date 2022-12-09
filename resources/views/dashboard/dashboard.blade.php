<x-app-layout title="dashboard">
	<h1 class="app-page-title">Overview</h1>

	<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
		<div class="inner">
			<div class="app-card-body p-3 p-lg-4">
				<h3 class="mb-3">Welcome, {{Auth::user()->email}}</h3>
				<div class="row gx-5 gy-3">
					<div class="col-12 col-lg-9">
						<div>Kelola Peminjaman Laptop Sekolah SMK Wikrama disini</div>
					</div>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	</div>

	<div style="display: flex; gap: 20px">
		<div class="col-6 col-lg-3">
			<div class="app-card app-card-stat shadow-sm h-100">
				<div class="app-card-body p-3 p-lg-4">
					<h4 class="stats-type mb-1">Total Peminjaman Hari ini</h4>
					<div class="stats-figure">{{$laptops->where('done_time', NULL)->count()}}</div>
					
				</div>
				<!--//app-card-body-->
				<a class="app-card-link-mask" href="#"></a>
			</div>
			<!--//app-card-->
		</div>

		<div class="col-6 col-lg-3">
			<div class="app-card app-card-stat shadow-sm h-100">
				<div class="app-card-body p-3 p-lg-4">
					<h4 class="stats-type mb-1">Total Penembalian Hari ini</h4>
					<div class="stats-figure">{{$laptops->whereNotNull('done_time')->count()}}	</div> 		
					
				</div>
				<!--//app-card-body-->
				<a class="app-card-link-mask" href="#"></a>
			</div>
			<!--//app-card-->
		</div>
	</div>
</x-app-layout>