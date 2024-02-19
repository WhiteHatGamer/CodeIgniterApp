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
