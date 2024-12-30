<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	
	<title>Dashboard</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">
	<link class="js-stylesheet" href="css/light.css" rel="stylesheet">

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<div class="wrapper">
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item">
							<a class="nav-icon js-fullscreen d-none d-lg-block" href="#">
								<div class="position-relative">
									<i class="align-middle" data-feather="maximize"></i>
								</div>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
								<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded" alt="Admin" />
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<main class="content">
				<div class="container-fluid p-0">
					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3><strong>Dashboard</strong></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-xxl-12 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<a href="http://localhost/ib-fyp/dashboard/upload-original" target="_blank" style="text-decoration: none;">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5 class="card-title">Upload Original Case File</h5>
														</div>
														<div class="col-auto">
															<div class="stat text-primary">
																<i class="align-middle" data-feather="share"></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">Upload Original Case File to Database</h1>
												</div>
											</div>
										</a>
									</div>
									<div class="col-sm-6">
										<a href="http://localhost/ib-fyp/stage-one" style="text-decoration: none;">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5 class="card-title">Upload Files</h5>
														</div>
														<div class="col-auto">
															<div class="stat text-primary">
																<i class="align-middle" data-feather="search"></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">Upload Case Files for analysis</h1>
												</div>
											</div>
										</a>
									</div>
									<div class="col-sm-6">
										<a href="http://localhost/ib-fyp/dashboard/original-files" style="text-decoration: none;">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5 class="card-title">View all original case files</h5>
														</div>
														<div class="col-auto">
															<div class="stat text-primary">
																<i class="align-middle" data-feather="database"></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">View all original case files</h1>
												</div>
											</div>
										</a>
									</div>
									<div class="col-sm-6">
										<a href="" style="text-decoration: none;">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5 class="card-title">View all analysis</h5>
														</div>
														<div class="col-auto">
															<div class="stat text-primary">
																<i class="align-middle" data-feather="database"></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">View all analysis</h1>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-12 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<h5 class="card-title mb-0">Latest Analysis</h5>
								</div>
								<table class="table table-borderless my-0">
									<thead>
										<tr>
											<th>File Name</th>
											<th>Integrity (%)</th>
											<th>Investigator's Name</th>
											<th>Date Analysed</th>
											<th class="d-none d-xl-table-cell">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="d-flex">
													<div class="flex-grow-1 ms-3">
														<strong>Project Apollo Case</strong>
													</div>
												</div>
											</td>
											<td><strong class="text-success">80%</strong></td>
											<td><strong>John Doe</strong></td>
											<td>27.12.2024</td>
											<td class="d-none d-xl-table-cell">
												<a href="#" class="btn btn-light">View</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</main>
		</div>
	</div>
	<script src="js/app.js"></script>
</body>

</html>