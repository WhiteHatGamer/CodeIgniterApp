<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Trips | <?=$_SESSION['name']?></title>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
    
</head>
</html>
<body>
    <div style="min-height: 90%; background-image: url('https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvam9iNjg0LTI3Mi14LmpwZw.jpg'); background-size: contain; background-position: center; background-repeat: no-repeat; background-color: #f8f5f4;">
        <div class="card" style="background-color: rgba(248, 245, 244, 0.6);">
            <div class="card-header">
                <h3 class="card-title" style="color: #000000;"><b>U</b>pcoming <b>J</b>ourneys</h3>
                <div class="btn-group float-right">
                    <button type="button" class="btn btn-outline-success dropdown-toggle btn-sm" data-toggle="dropdown"><i class="fas fa-sign-out-alt"></i>Export<span class="sr-only"></span></button>
                    <div class="dropdown-menu" role="menu">
                        <button onclick="export_table('excel')" class="dropdown-item btn-sm"><i class="fas fa-file-excel"></i>Excel</button>
                        <button onclick="export_table('pdf')" class="dropdown-item btn-sm"><i class="fas fa-file-pdf"></i>PDF</button>
                        <button onclick="export_table('csv')" class="dropdown-item btn-sm"><i class="fas fa-file-csv"></i>CSV</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="journey_table_wrapper" class="dataTables_wrapper dt-bootstrap4">

                    <table id="journey_table" class="table table-bordered" style="background-color: rgba(248,244,244,0.8);">
                        <thead>

                            <tr>
                                <th>Source</th>
                                <th>Destination</th>
                                <th>Way</th>
                                <th>Journey</th>
                                <th>Return</th>
                            </tr>
                        </thead>
                        <?php
                            foreach($result as $r){
                                echo "<tr>";
                                foreach ($r as $col => $val) {
                                    if(($col=="id") || ($col=='email')){
                                        continue;
                                    }
                                    echo "<td>".$val."</td>";
                                }
                                echo "</tr>";
                            }
                        ?>
                    </table>
            </div>
        </div>
    </div>
    <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\admin\Travel_planner\Dashboard\ShowTrips\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
</body>