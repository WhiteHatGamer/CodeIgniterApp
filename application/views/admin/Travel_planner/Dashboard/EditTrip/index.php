<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Journeys | <?=$_SESSION['email']?></title>
    <script>
        // Ajax Scripts For requesting php

        function Calculate_min(){
            // Function to calculate Return Date After Journey
            const journey = new Date(document.getElementById('journey').value);
            round = document.getElementById('round');
            journey.setMinutes(journey.getMinutes() + 1);
            journey.setHours(journey.getHours() + 4);
            round.min = journey.toISOString().slice(0,16);
        }

        function getCity(str){
            // Function to suggest City
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("id_city").innerHTML = this.responseText;
                }
            }
            xmlHttp.open("GET","<?= adminTravelPlannerUrl()?>dashboard/get_hint?q=searchCity&s="+str, true);
            xmlHttp.send();
        }
        function CalculateTime(way){
            // Function to calculate ETA using source and destination
            var xmlHttp = new XMLHttpRequest();
            destination = document.getElementById('destination').value;
            source = document.getElementById('source').value;
            xmlHttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("tripTime").value = this.responseText;
                }
            }
            xmlHttp.open("GET","<?= adminTravelPlannerUrl()?>dashboard/get_hint?q=time&w="+way+"&s="+source+"&d="+destination, true);
            xmlHttp.send();
        }
    </script>
</head>
<body>
<?php
    // Checking if Submitted
    if(isset($_POST['edit'])){
        ?>
        <div style='background-color: #f2f2f2;'>
        <div class='card-body'>
            <div class="card">
                <div class="card-header">
                    <h3 class='card-title'><b>E</b>dit <b>D</b>etails:</h3>
                </div><div class="card-body p-0">

        <!-- // Listing the Journey to be Edited using id -->
        <!-- // $result = $mysqli->query("SELECT * FROM $JourneyTable WHERE id={$_POST['edit']}")->fetch_assoc(); -->
        
        <!-- // Creating Form with Table -->
        <form method='post' action='<?=$_SERVER['PHP_SELF']?>'><table class='table table-striped table-bordered'>
            <tr>
                <th>Source</th>
                <th>Destination</th>
                <th>Way</th>
                <th>Journey</th>
                <th>Return</th>
                <th>Confirm</th>
                <th>Cancel</th>
            </tr>
        <tr>

        <!-- // List Details with same form as create -->
            <td><input class='form-control' type="text" name="source" id="source" required list="id_list" value="<?=$edit['source']?>" onkeyup="getCity(this.value)" autocomplete="off"></td>
            <td><input class='form-control' type="text" name="destination" id="destination" value="<?=$edit['destination']?>" required list="id_list" onkeyup="getCity(this.value)" autocomplete="off"></td>
            <datalist id="id_list">
                <div id="id_city">
                </div>
            </datalist>
            <td><select class='form-control form-select' name="way" onchange=CalculateTime(this.value)>
                <option value="">--select-Transport--</option>
                <option value="airplane" <?php if($edit['way']=='airplane') echo 'selected'; ?>>Airplane</option>
                <option value="train" <?php if($edit['way']=='train') echo 'selected'; ?>>Train</option>
                <option value="car" <?php if($edit['way']=='car') echo 'selected'; ?>>Car</option>
                <option value="bus" <?php if($edit['way']=='bus') echo 'selected'; ?>>Bus</option>
                <option value="cycling" <?php if($edit['way']=='cycling') echo 'selected'; ?>>Cycle</option>
                <option value="walk" <?php if($edit['way']=='walk') echo 'selected'; ?>>Walk</option>
            </select>
            <output name="tripTime" id="tripTime"></output></td>
            <td><input class='form-control' type="datetime-local" name="journey" id="journey" required value="<?=$edit['journey']?>" min="<?php echo date('Y-m-d')."T".date("H:i");?>"></td>
            <td><input class='form-control' type="datetime-local" name="round" id="round" required value="<?=$edit['round']?>" onclick="Calculate_min()"></td>
            <td><button type='submit' name='confirm_edit' class="btn btn-success" value="<?=$_POST['edit']?>"><i class="fas fa-check"></i></button></td>
        </form>

        <!-- Separate Form to Cancel Else Conflicts with required and Client side -->
        <form method="post" action="<?= $_SERVER['PHP_SELF']?>">
            <td><button class="btn btn-danger" type='submit' name='cancel'><i class="fas fa-times"></i></button></td>
            </tr></table></form></div></div>
        <?php
    }


    // Delete Confirmation
    if(isset($_POST['delete'])){
        echo "<div style='background-color: #f2f2f2;'>";
        echo "<div class='card-body'><div class='card'><div class='card-header'><h3 class='card-title'><b>C</b>onfirm <b>D</b>elete:</h3></div>";
        echo "<div class='card-body p-0'><form method='post' action='{$_SERVER['PHP_SELF']}'><table class='table table-striped table-bordered'>
            <tr>
                <th>Source</th>
                <th>Destination</th>
                <th>Way</th>
                <th>Journey</th>
                <th>Return</th>
                <th>Confirm</th>
                <th>Cancel</th>
            </tr>";
        echo "<tr>";
        foreach ($delete as $key => $value) {
            if(($key=="id") || ($key=='email')){
                continue;
            }
            if($key=='journey' || $key == 'round'){
                if($value){
                    echo "<td>".date('H:i  -  d/M/Y',strtotime($value))."</td>";
                }else{
                    echo "<td></td>";
                }
                continue;
            }
            echo "<td>".$value."</td>";
        }

        // Button with id as Value
        echo "<td><button class='btn btn-danger'type='submit' name='confirm_delete' value={$_POST['delete']}><i class='fas fa-check'></i></button></td>";
        echo "<td><button class='btn btn-info'type='submit' name='cancel'><i class='fas fa-times'></i></button></td>";
        echo "</tr></table></form></div></div></div>";

    }

    
?>
<div style="min-height: 89%; background-image: url('https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvam9iNjg0LTI3Mi14LmpwZw.jpg'); background-size: contain; background-position: center; background-repeat: no-repeat; background-color: #f8f5f4;">
    <div class="card" style="background-color: rgba(248, 244, 244, 0.6);">
        <!-- // List Upcoming Journeys as Table -->
        <form method='post' action='<?=$_SERVER['PHP_SELF']?>'>
                <div class="card-header">
                    <h3 class="card-title" style="color: black;"><b>E</b>dit <b>J</b>ourneys</h3>
                </div>

                <div class="card-body p-0">
                    <table class="table table-bordered table-striped" style="background-color: rgba(248, 244, 244, 0.8);">
                        <tr>
                            <th>Source</th>
                            <th>Destination</th>
                            <th>Way</th>
                            <th>Journey</th>
                            <th>Return</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    <?php
                        foreach($result as $row){
                            $id = '';
                            echo "<tr>";
                            foreach ($row as $key => $value) {
                                if($key=="id"){
                                    $id = $value;
                                    continue;
                                }
                                if($key=='email'){
                                    continue;
                                }
                                if($key=='journey' || $key == 'round'){
                                    if($value){
                                        echo "<td>".date('H:i  -  d/M/Y',strtotime($value))."</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                    continue;
                                }
                                echo "<td>".$value."</td>";
                            }

                            // Form Action Buttons
                            echo "<td><button class='btn bg-gradient-warning' type='submit' name='edit' value='$id'><i class='fas fa-tools'></i></button></td>";
                            echo "<td><button class='btn bg-gradient-danger' type='submit' name='delete' value='$id'><i class='fas fa-skull-crossbones'></i></button></td>";
                            echo "</tr>";
                        }
                    ?>

                    </table>
                </div>
            </div>
        </div>
        </form>
    </div>
    <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\admin\Travel_planner\Dashboard\EditTrip\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
</div>
</body>
</script>
</html>