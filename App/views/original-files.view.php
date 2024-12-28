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
        <?php loadPartial('sidebar') ?>
        <div class="main">
            <?php loadPartial('dash_navbar') ?>
            <main class="content">
                <div class="container-fluid p-0">
                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Users</h1>
                    </div>
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title mb-0">Users</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Registration Date</th>
                                        <th>Balance</th>
                                        <th>Verification Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $index => $user): ?>
                                        <tr>
                                            <td><?= $user->name ?></td>
                                            <td><?= $user->created_at ?></td>
                                            <td>$<?= numberFormatter($user->user_acct_balance) ?></td>
                                            <td>
                                            <?php 
                                                    if($user->verify_status === 'Not Verified'){
                                                        echo "<span class=\"badge badge-danger-light\">Not Verified</span></td>";
                                                    }else{
                                                        echo "<span class=\"badge badge-success-light\">Verified</span></td>";
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="./edit/user/<?= $user->id ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <?php 
                                                    if($user->verify_status === 'Not Verified'){
                                                        echo "<a href=\"./verify/user/$user->id\" class=\"btn btn-primary btn-sm\">Verify User</a>"; 
                                                    }else{
                                                        echo "<a href=\"./invalidate/user/$user->id\" class=\"btn btn-primary btn-sm\">Invalidate User</a>";
                                                    }
                                                ?>
                                                <?php 
                                                    if($user->paid_license === 'Not Verified'){
                                                        echo "<a href=\"./verify/license/$user->id\" class=\"btn btn-primary btn-sm\">Validate License</a>"; 
                                                    }else{
                                                        echo "<a href=\"./invalidate/license/$user->id\" class=\"btn btn-primary btn-sm\">Invalidate License</a>";
                                                    }
                                                ?>
                                            </td>
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

	<script src="js/app.js"></script>



    <script src="https://cdn.grabback.org/admin/dashboard/js/datatables.js"></script>

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