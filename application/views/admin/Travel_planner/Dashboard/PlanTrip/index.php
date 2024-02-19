<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Trip | Travel Planner</title>
    <script>
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
    </script>
</head>
<body>
    <div style="min-height: 90%; background-image: url('https://in2english.net/wp-content/uploads/2017/04/transport.png'); background-size: cover;" class='login-page'>
        <div class="card col-md-6" style="background-color: rgba(29, 94, 116, 0.75);">
            <div class="card-head">
                <h3 class="card-header" style="color: #e9ecef;">Plan Journey</h3>
            </div>
            <div class="card-body">

                <!-- Conditional Radio Buttons -->
                <div class="custom-control custom-radio">
                    <input type="radio" id="trip1" name="trip" class="custom-control-input" onclick="round.disabled = true;round.value = ''" checked value="one_way">
                    <label for="trip1" class="custom-control-label" style="color: #e9ecef;">One Way<i class="fas fa-arrow-right"></i></label>&emsp;&emsp;
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="trip2" name="trip" class="custom-control-input" onclick="round.disabled = false" value="round_trip">
                    <label for="trip2" class="custom-control-label" style="color: #e9ecef;">Round Trip<i class="fas fa-arrows-alt-h"></i></label>
                </div>
            
                <!-- Form Start -->
                <form method="post" name="plan" action=<?=$_SERVER['PHP_SELF']?>>
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
                    <datalist id="id_list">
                        <div id="id_city">
                            <!-- To be filled onKeyUp type -->
            
                        </div>
                    </datalist>
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
                    <output name="tripTime" id="tripTime" style="color: #e9ecef;"></output>
                    <br><br>
                    
                    <!-- Date with Limit using PHP -->
                    <label class="form-control-label" for="journey" style="color: #e9ecef;">Journey Date: </label>
                    <input class="form-control col-md-4" type="datetime-local" name="journey" id="journey" required min="<?php echo date('Y-m-d')."T".date("H:i");?>">
                    <label class="form-control-label text-center" for="round" style="color: #e9ecef;">Return Date: </label>
                    <input class="form-control col-md-4" type="datetime-local" name="round" id="round" disabled required onclick="Calculate_min()"><br><br>
                    <button class="btn btn-small bg-gradient-primary float-right" type="submit" name="plan">Save</button>
                </form>
            </div>
        </div>
    </div>
    <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\admin\Travel_planner\Dashboard\PlanTrip\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>

</body>
</html>