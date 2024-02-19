<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotels | <?=@$_SESSION['name']?></title>
        <script>
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

            function getHotels(str){
                // Function to get City Hotels
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        const list = document.getElementById("hotel");
                        list.innerHTML = this.response;
                    }
                }
                xmlHttp.open("GET","<?= adminTravelPlannerUrl()?>dashboard/get_hint?q=getHotel&s="+str, true);
                xmlHttp.send();
            }


            function Calculate_min(){
                // Function to calculate Return Date After Journey
                const checkIn = new Date(document.getElementById('checkIn').value);
                checkOut = document.getElementById('checkOut');
                checkIn.setMinutes(checkIn.getMinutes() + 1);
                checkIn.setHours(checkIn.getHours() + 4);
                checkOut.min = checkIn.toISOString().slice(0,10);

            }
        </script>
    </head>
    <body>
        <div style="min-height: 89%; background-image: url(
            'https://c8.alamy.com/comp/2D6RDC0/hotel-room-service-icons-set-simple-set-of-hotel-room-service-vector-icons-for-web-design-on-white-background-2D6RDC0.jpg'
        ); background-size: cover;">
            <div style="background-color: rgba(255, 255, 255, 0.4);" class="center-page">
                <div class="card col-md-5" style="background-color: rgba(255, 255, 255, 0.92);">
                    <div class="card-header">
                        <h3 class="card-title"><b>H</b>otel <b>S</b>tay</h3>
                    </div>
                    <div class="card-body">
                
                        <!-- Form Start -->
                        <form method="post" name="stay" action=<?=$_SERVER['PHP_SELF']?>>
                            <input class='form-control' type="text" name="city" id="city" placeholder="Type Location" required list="id_list" onclick="getCity(this.value)" onkeyup="getCity(this.value)" onblur="getHotels(this.value)" autocomplete="off">
                            <datalist id="id_list">
                                <div id="id_city">
                                    <!-- To be filled onKeyUp type -->
                                    
                                </div>
                            </datalist>
                            
                            <!-- Select List Based on Selected City -->
                            <select class='form-control' id="hotel" name="hotel" onchange=getExpense(this.value) required>
                                <option value="">--Select-Hotel--</option>
                            </select>
                            <output name="HotelExpense" id="HotelExpense"></output>
                            <br>
                            <br>
                            
                            <!-- <label for="checkIn">Check In: </label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <label for="checkOut">Check Out: </label> -->
                            <!-- Date with Limit using PHP -->
                            <input class='form-control' style="width: 180px;" type="text" name="checkIn" placeholder="Check In" onfocus="(this.type='date')" id="checkIn" onchange="calculateCheckOut(this.value)" required min="<?php echo date('Y-m-d');?>">
                            <input class='form-control' style="width: 180px;" type="text" name="checkOut" placeholder="Check Out" onfocus="(this.type='date')" id="checkOut" onclick="Calculate_min()" onchange="calculateExpense(this.value)" required><br>
                            <select class='form-control' id="night" name="night" onchange="calculateDate(this.value)">
                                <?php for ($i=1; $i < 31; $i++) { 
                                    echo "<option value='$i'>$i Night(s)</option>";
                                } ?>
                            <option value="31">30+ Night(s)</option>
                            </select><br><br>
                            <button class='btn btn-success float-right' type="submit" name="stay" value="1">Save</button>
                        </form>
                        
                    </div>
                </div>
            </div>
            <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\admin\Travel_planner\Dashboard\AppointHotel\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
        </div>
    </body>
    </html>