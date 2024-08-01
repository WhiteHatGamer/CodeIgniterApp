<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Trip | Travel Planner</title>
    <script>
        function importData(str){
            Swal.fire({
                title: "Select Your "+str+" File.",
                html: `
                <form method='post' enctype="multipart/form-data">
                    <input type='file' class='form-control' name='`+str+`'><br>
                    <button class='btn bg-gradient-primary' type='submit' name='submit' value='1'>Submit</button>
                    <button class='btn bg-gradient-danger' type='menu' name='submit' value='0'>Cancel</button>
                </form>
                `,
                showConfirmButton: false,
            });
            
        }
        async:false;

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

        function Calculate_min(){
            // Function to calculate Return Date After Journey
            const journey = new Date(document.getElementById('journey').value);
            round = document.getElementById('round');
            journey.setMinutes(journey.getMinutes() + 1);
            journey.setHours(journey.getHours() + 4);
            round.min = journey.toISOString().slice(0,16);
        }
    </script>
</head>
<body>
    <div style="min-height: 89%; background-image: url('https://in2english.net/wp-content/uploads/2017/04/transport.png'); background-size: cover;">
        <div style="background-color: rgba(255, 255, 255, 0.4);" class="center-page">
            <div class="card card-outline card-warning col-md-6" style="background-color: rgba(255, 255, 255, 0.92);">
                <div class="card-header">
                    <h3 class="card-title"><b>P</b>lan <b>J</b>ourney</h3>
                    <div class="btn-group float-right dropdown">
                        <button type="button" id='dropdownMenuButton' class="btn btn-outline-warning dropdown-toggle btn-sm" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"><i class="fas fa-file-import"></i>Import<span class="sr-only"></span></button>
                        <div class="dropdown-menu" role="menu" labelledby="dropdownMenuButton" id='dropdown-menu'>
                            <button onclick="importData('excel')" class="dropdown-item btn-sm"><i class="fas fa-file-excel"></i>Excel</button>
                            <button onclick="importData('csv')" class="dropdown-item btn-sm"><i class="fas fa-file-csv"></i>CSV</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                
                    <!-- Form Start -->
                    <form method="post" name="plan" action=<?=$_SERVER['REQUEST_URI']?>>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-plane-departure"></i></span>
                            </div>
                            <input type="text" name="source" id="source" class="form-control" placeholder="Type Source City" required list="id_list" onclick="getCity(this.value)" onkeyup="getCity(this.value)" autocomplete="off">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-plane-arrival"></i></span>
                            </div>
                            <input type="text" class="form-control" name="destination" id="destination" placeholder="Type Destination City" required list="id_list" onclick="getCity(this.value)" onkeyup="getCity(this.value)" autocomplete="off">
                        </div>
                        <div id="id_city">
                            <!-- To be filled onKeyUp type -->
            
                        </div>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn bg-olive">
                                <input id="way1" name='way' type="radio" onclick="CalculateTime(this.value)" autocomplete='off' value="airplane" required><i class="fas fa-plane"></i>Airplane</option>
                            </label>
                            <label class="btn bg-olive">
                                <input id="way2" name='way' type="radio" onclick="CalculateTime(this.value)" autocomplete='off' value="train"><i class="fas fa-train"></i>Train</option>
                            </label>
                            <label class="btn bg-olive">
                                <input id="way3" name='way' type="radio" onclick="CalculateTime(this.value)" autocomplete='off' value="car"><i class="fas fa-car"></i>Car</option>
                            </label>
                            <label class="btn bg-olive">
                                <input id="way4" name='way' type="radio" onclick="CalculateTime(this.value)" autocomplete='off' value="bus"><i class="fas fa-bus"></i>Bus</option>
                            </label>
                            <label class="btn bg-olive">
                                <input id="way5" name='way' type="radio" onclick="CalculateTime(this.value)" autocomplete='off' value="cycling"><i class="fas fa-bicycle"></i>Cycle</option>
                            </label>
                            <label class="btn bg-olive">
                                <input id="way6" name='way' type="radio" onclick="CalculateTime(this.value)" autocomplete='off' value="walk"><i class="fas fa-walking"></i>Walk</option>
                            </label>
                        </div>
                        <output name="tripTime" id="tripTime"></output>
                        <br><br>
                        
                        <!-- Date with Limit using PHP -->
                         
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input class="form-control col-md-4" type="text" placeholder="Journey Date" onfocus="(this.type='datetime-local')" name="journey" id="journey" required min="<?php echo date('Y-m-d')."T".date("H:i");?>">
                        </div>
                        
                        <div class="custom-control custom-radio">
                            <input type="checkbox" id="trip2" name="trip" class="custom-control-input" value="round_trip">
                            <label for="trip2" class="custom-control-label">Round Trip<i class="fas fa-arrows-alt-h"></i></label>
                        </div>
                        <div class="input-group mb-1" id='round-div' style='display: none'>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input class="form-control col-md-4" type="text" placeholder="Return Date" onfocus="(this.type='datetime-local')" name="round" id="round" required onclick="Calculate_min()">
                        </div>
                        <button class="btn btn-small bg-gradient-primary float-right" type="submit" name="plan">Save</button>
                    </form>
                </div>
            </div>

        </div>
        <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\Travel_planner\Dashboard\PlanTrip\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
    </div>
    <script>
        $(document).ready(function(){
            $(".sheet0").addClass("table table-bordered card col-sm-12 table-striped dataTable dtr-inline");
        });
        
        $('#trip2').click(function() {
            $("#round-div").toggle(this.checked);
            $("#round").val('');
        });

    </script>

</body>
</html>