<!-- Adding Name in Title -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Read Note | <?php echo htmlspecialchars($_SESSION['name'])?></title>
        
        <script>
            
            function export_table(str) {
                window.open("<?=adminTravelPlannerUrl().'note/export_table'?>/"+str);
            }

            $(function() {
                $("#note_table").DataTable({ 
                    "responsive": true, "autoWidth": false,"pageLength":25,
                    "buttons": ["colvis"]
                }).buttons().container().appendTo('#note_table_wrapper .col-md-6:eq(0)');
            });
        </script>
    </head>
    <body>
        <div style="background-image: url(
            https://png.pngtree.com/background/20210717/original/pngtree-paper-note-cute-learning-background-picture-image_1432207.jpg
            ); background-position: center; background-size: cover; min-height: 89%;">
                    

            <div class="card card-outline card-success" style="background-color: rgba(242, 242, 242, 0.75);">
                <div class="card-header">
                    <h3 class="card-title"><b>S</b>aved <b>N</b>otes:</h3>
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
                    <div id="note_table_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <table id='note_table' class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>Modified Time</th>
                                    <th>Note</th>
                                </tr>
                            </thead>
                            <?php
                            
                                // Looping Through Result
                                foreach ($result as $key) {
                                    echo "<tr>
                                    <td>".date("d/M H:i",strtotime($key['create_time']))."</td>";
                                    echo "<td>".$key['note']."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                </div>
            </div>
        </div>
        </div>
        <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\admin\Travel_planner\Dashboard\ReadNote\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
    </body>
</html>