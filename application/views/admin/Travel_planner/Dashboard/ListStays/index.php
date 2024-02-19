<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotel Stays | <?= $_SESSION['name'] ?></title>
        <!-- DataTables -->
        <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
        <script>
            
            function export_table(str) {
                window.open("<?=adminTravelPlannerUrl().'hotel/export_table'?>/"+str);
            }

            $(function() {
                $("#hotel_table").DataTable({ 
                    "responsive": true, "autoWidth": false,"pageLength":25,
                    "buttons": ["colvis"]
                }).buttons().container().appendTo('#hotel_table_wrapper .col-md-6:eq(0)');
            });
        </script>
    </head>

    <body>
        <?php

        // Edit Form With Autocomplete
        if (isset($_POST['edit'])) {

            // Getting Results Based on id
            $city = $edit['city'];
            $Hotel = $edit['hotel'];
            $checkIn = strtotime($edit['checkIn']);
            $checkOut = strtotime($edit['checkOut']);
            $night = round(($checkOut - $checkIn) / 60 / 60 / 24);
        ?>
            <div class="card-body" style="background-color: rgba(242, 242, 242, .5);">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>E</b>dit <b>D</b>etails</h3>
                    </div>
                    <div class="card-body p-0" style="background-color: rgba(255, 255, 255, .75);">

                        <form method='post' action='#'>
                            <table class='table table-bordered table-striped text-center'>
                                <tr>
                                    <th>City</th>
                                    <th>Hotel</th>
                                    <th>CheckIn</th>
                                    <th>CheckOut</th>
                                    <th>Night(s)</th>
                                    <th>Confirm</th>
                                    <th>Cancel</th>
                                </tr>
                                <tr>
                                    <td><input class='form-control' type="text" name="city" id="city" placeholder="Type City" required list="id_list" onkeyup="getCity(this.value)" onblur="getHotels(this.value)" autocomplete="off" value="<?= $city ?>" autofocus></td>
                                    <datalist id="id_list">
                                        <div id="id_city">
                                            <!-- To be filled onKeyUp type -->

                                        </div>
                                    </datalist>

                                    <!-- Select List Based on Selected City -->
                                    <td><select class='form-control' id="hotel" name="hotel" onchange=getExpense(this.value) required>
                                            <option value="<?= $Hotel ?>"><?= $Hotel ?></option>
                                        </select></td>

                                    <!-- Date with Limit using PHP -->
                                    <td>
                                        <input class='form-control' type="date" name="checkIn" id="checkIn" onchange="calculateCheckOut(this.value)" onclick="Calculate_min()" required min="<?php echo date('Y-m-d'); ?>" value="<?= date('Y-m-d', $checkIn) ?>">
                                    </td>
                                    <td>
                                        <input class='form-control' type="date" name="checkOut" id="checkOut" onchange="calculateExpense(this.value)" min="<?php echo date('Y-m-d'); ?>" value="<?= date('Y-m-d', $checkOut) ?>" onclick="Calculate_min()" required>
                                    </td>
                                    <td>
                                        <select class='form-control' id="night" name="night" onchange="calculateDate(this.value)" onclick="calculateDate(this.value)" required>
                                            <?php for ($i = 1; $i < 31; $i++) {
                                                echo "<option value='$i' " . (($i == $night) ? 'selected' : '') . ">$i Night(s)</option>";
                                            } ?>
                                            <option value="31" <?= ($night > 30) ? 'selected' : '' ?>>30+ Night(s)</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class='btn btn-success' type="submit" name="stay" value="<?= $_POST['edit'] ?>"><i class="fas fa-check"></i></button>
                        </form>
                        </td>
                        <form method="post" action="#">
                            <td>
                                <button class='btn btn-danger' type="submit" name="cancel"><i class="fas fa-times"></i></button>
                            </td>
                        </form>
                        </table>
                        <output name="HotelExpense" id="HotelExpense">
                            <!-- Filling Estimate on change -->
                        </output>
                    </div>
                </div>
            </div>
        <?php
        }

        // Delete Confirmation
        if (isset($_POST['delete'])) { ?>
            <div class="card-body" style="background-color: rgba(255, 255, 255, .5);">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>C</b>onfirm <b>D</b>elete</h3>
                    </div>
                    <div class="card-body p-0" style="background-color: rgba(255, 255, 255, .75);">

                        <form method='post' action='#'>
                            <table class='table table-bordered table-striped text-center'>
                                <tr>
                                    <th>City</th>
                                    <th>Hotel</th>
                                    <th>CheckIn</th>
                                    <th>CheckOut</th>
                                    <th>Confirm</th>
                                    <th>Cancel</th>
                                </tr>

                            <?php
                            echo "<tr>";
                            foreach ($delete as $key => $value) {
                                if ($key == "id") {
                                    $id = $value;
                                    continue;
                                } elseif ($key == 'email') {
                                    continue;
                                }
                                if ($key == 'checkIn' || $key == 'checkOut') {
                                    echo "<td>" . date('d-M-Y', strtotime($value)) . "</td>";
                                } else {
                                    echo "<td>" . $value . "</td>";
                                }
                            }
                            // Button with id as Value
                            echo "<td><button class='btn bg-gradient-danger' type='submit' name='confirm_delete' value={$_POST['delete']}><i class='fas fa-check'></i></button></td>";
                            echo "<td><button class='btn bg-gradient-info' type='submit' name='cancel'><i class='fas fa-times'></i></button></td>";
                            echo "</tr>";
                            echo "</table></form></div></div></div>";
        }


        ?>
        <div style="min-height: 89%; background-image: url(
                        'https://static.vecteezy.com/system/resources/previews/016/257/593/original/hotel-icon-set-room-guest-reception-bed-breakfast-hospitality-concierge-inn-line-sign-symbol-simple-outline-style-illustration-design-isolated-on-white-background-eps-10-vector.jpg'
                        ); background-position: center;">
            <div class="card" style="background-color: rgba(255, 255, 255, .5);">
                <div class="card-header">
                    <h3 class="card-title"><b>H</b>otel <b>S</b>tays</h3>
                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-outline-success dropdown-toggle btn-sm" data-toggle="dropdown"><i class="fas fa-sign-out-alt"></i>Export<span class="sr-only"></span></button>
                        <div class="dropdown-menu" role="menu">
                            <button onclick="export_table('excel')" class="dropdown-item btn-sm"><i class="fas fa-file-excel"></i>Excel</button>
                            <button onclick="export_table('pdf')" class="dropdown-item btn-sm"><i class="fas fa-file-pdf"></i>PDF</button>
                            <button onclick="export_table('csv')" class="dropdown-item btn-sm"><i class="fas fa-file-csv"></i>CSV</button>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="background-color: rgba(255, 255, 255, .75);">
                    <div id="hotel_table_wrapper" class="dataTables_wrapper dt-bootstrap4">

                        <form method='post' action="<?= $_SERVER['PHP_SELF'] ?>">
                            <table id="hotel_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>City</th>
                                        <th>Hotel</th>
                                        <th>CheckIn</th>
                                        <th>CheckOut</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <?php
                                foreach ($result as $row) {
                                    echo "<tr>";
                                    foreach ($row as $key => $value) {
                                        if ($key == "id") {
                                            $id = $value;
                                            continue;
                                        } elseif ($key == 'email') {
                                            continue;
                                        }
                                        if ($key == 'checkIn' || $key == 'checkOut') {
                                            echo "<td>" . date('d-M-Y', strtotime($value)) . "</td>";
                                        } else {
                                            echo "<td>" . $value . "</td>";
                                        }
                                    }
                                    echo "<td><button class='btn bg-gradient-warning' type='submit' name='edit' value=$id><i class='fas fa-tools'></i></button></td>";
                                    echo "<td><button class='btn bg-gradient-danger'  type='submit' name='delete' value=$id><i class='fas fa-skull-crossbones'></i></button></td>";
                                    echo "</tr>";
                                }
                                echo '</table> </form> </div> </div> </div>'
                                ?>
        </div>
        <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\admin\Travel_planner\Dashboard\ListStays\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>

        <!-- Page specific script -->
        <script>
            async: false;

            function getCity(str) {
                // Function to suggest City
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("id_city").innerHTML = this.responseText;
                    }
                }
                xmlHttp.open("GET", "<?= adminTravelPlannerUrl() ?>dashboard/get_hint?q=searchCity&s=" + str, true);
                xmlHttp.send();
            }

            function getHotels(str) {
                // Function to get City Hotels
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        const list = document.getElementById("hotel");
                        var prevCity = '<?= @$edit['city'] ?>';
                        if (prevCity == str) {
                            list.innerHTML = "<option value='<?= @$edit['hotel'] ?>'><?= @$edit['hotel'] ?></option>" + this.response;
                        } else {

                            list.innerHTML = this.response;
                        }
                    }
                }
                xmlHttp.open("GET", "<?= adminTravelPlannerUrl() ?>dashboard/get_hint?q=getHotel&s=" + str, true);
                xmlHttp.send();
            }

            function getExpense(hotel) {
                // Function to get Expense of Hotel Selected
                var xmlHttp = new XMLHttpRequest();
                cityName = document.getElementById('city').value;
                night = document.getElementById('night').value;
                xmlHttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("HotelExpense").value = this.responseText;
                    }
                }
                xmlHttp.open("GET", "<?= adminTravelPlannerUrl() ?>dashboard/get_hint?q=getExpense&h=" + hotel + "&c=" + cityName + "&n=" + night, true);
                xmlHttp.send();
            }

            function Calculate_min() {
                // Function to calculate Return Date After Journey
                const checkIn = new Date(document.getElementById('checkIn').value);
                checkOut = document.getElementById('checkOut');
                checkIn.setMinutes(checkIn.getMinutes() + 1);
                checkIn.setHours(checkIn.getHours() + 4);
                checkOut.min = checkIn.toISOString().slice(0, 10);

            }

            function calculateExpense(checkOut) {
                // Function to Calculate Expense Based on Days
                var xmlHttp = new XMLHttpRequest();
                checkIn = document.getElementById('checkIn').value;
                hotel = document.getElementById('hotel').value;
                cityName = document.getElementById('city').value;

                if (new Date(checkIn).getTime() > new Date(checkOut).getTime()) {
                    // CheckOut is before CheckIn
                    document.getElementById("HotelExpense").value = "Please Select Check Out Date After Check In";
                    document.getElementById('checkOut').value = document.getElementById('checkIn').value;;
                    document.getElementById("night").value = 1;
                    return;
                };

                xmlHttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("HotelExpense").value = this.response;
                    }
                }
                xmlHttp.open("GET", "<?= adminTravelPlannerUrl() ?>dashboard/get_hint?q=calculateExpense&o=" + checkOut + "&i=" + checkIn + "&h=" + hotel + "&c=" + cityName, true);
                xmlHttp.send();

                // Calculate Night
                var xmlHttp = new XMLHttpRequest();
                checkIn = document.getElementById('checkIn').value;
                xmlHttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("night").value = this.response;
                    }
                }
                xmlHttp.open("GET", "<?= adminTravelPlannerUrl() ?>dashboard/get_hint?q=calculateNight&o=" + checkOut + "&i=" + checkIn, true);
                xmlHttp.send();

            }
            }
        </script>
                            
        <?php
        if (isset($_POST['edit'])) { ?>
            <script>
                // Calculating Expense Of the stay Editing
                calculateExpense("<?= date('Y-m-d', strtotime($edit['checkOut'])); ?>");
            </script>
        <?php } ?>

    </body>

</html>