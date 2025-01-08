<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	
	<title>Analysis Results</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">
	<link class="js-stylesheet" href="../../../ib-fyp/css/light.css" rel="stylesheet">

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
                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Analysis Results</h1>
                    </div>
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title mb-0">Analysis Results</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th>Unique ID</th>
                                        <th>Case File Name</th>
                                        <th>Investigator</th>
                                        <th>Stage One Result</th>
                                        <th>Stage Two Result</th>
                                        <th>Stage Three Result</th>
                                        <th>Analysis Result</th>
                                        <th>Date Uploaded</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($analysisResults as $analysisResult): ?>
                                        <tr>
                                            <td>#<?= $analysisResult->unique_id ?></td>
                                            <td><?= $analysisResult->file_name ?></td>
                                            <td><?= $analysisResult->investigator_name ?></td>
                                            <td class="<?php if ($analysisResult->stage_one_results === '0') {
														echo 'text-danger';
													} elseif ($analysisResult->stage_one_results === '33') {
														echo 'text-warning';
													} elseif ($analysisResult->stage_one_results === '66') {
														echo 'text-primary';
													} elseif ($analysisResult->stage_one_results === '100') {
														echo 'text-success';
													}
													?>"><?= $analysisResult->stage_one_results ?>%</td>
                                            <td class="<?php if ($analysisResult->stage_two_results === '0') {
														echo 'text-danger';
													} elseif ($analysisResult->stage_two_results === '33') {
														echo 'text-warning';
													} elseif ($analysisResult->stage_two_results === '66') {
														echo 'text-primary';
													} elseif ($analysisResult->stage_two_results === '100') {
														echo 'text-success';
													}
													?>"><?= $analysisResult->stage_two_results ?>%</td>
                                            <td class="<?php if ($analysisResult->stage_three_results === '0') {
														echo 'text-danger';
													} elseif ($analysisResult->stage_three_results === '33') {
														echo 'text-warning';
													} elseif ($analysisResult->stage_three_results === '66') {
														echo 'text-primary';
													} elseif ($analysisResult->stage_three_results === '100') {
														echo 'text-success';
													}
													?>"><?= $analysisResult->stage_three_results ?>%</td>
                                            <td class="<?php if ($analysisResult->analysis_result === '0') {
														echo 'text-danger';
													} elseif ($analysisResult->analysis_result === '33') {
														echo 'text-warning';
													} elseif ($analysisResult->analysis_result === '66') {
														echo 'text-primary';
													} elseif ($analysisResult->analysis_result === '100') {
														echo 'text-success';
													}
													?>"><?= $analysisResult->analysis_result ?>%</td>
                                            <td><?= $analysisResult->analysis_date ?></td>
                                        </tr>
                                        <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </div>

	<script src="../../../ib-fyp/js/app.js"></script>



    <script src="../../../ib-fyp/js/datatables.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Orders
            $("#datatables-orders").DataTable({
                responsive: true,
                aoColumnDefs: [{
                    bSortable: false,
                    aTargets: [-1]
                }]
            });
        });
    </script>
</body>


</html>