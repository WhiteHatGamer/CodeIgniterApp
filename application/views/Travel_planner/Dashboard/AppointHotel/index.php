<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotels | <?=@$_SESSION['name']?></title>
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

            function getExpense(hotel){
                // Function to get Expense of Hotel Selected
                var xmlHttp = new XMLHttpRequest();
                cityName = document.getElementById('city').value;
                night = document.getElementById('night').value;
                xmlHttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("HotelExpense").value = this.responseText;
                    }
                }
                xmlHttp.open("GET","<?= adminTravelPlannerUrl()?>dashboard/get_hint?q=getExpense&h="+hotel+"&c="+cityName+"&n="+night, true);
                xmlHttp.send();
            }

            function calculateExpense(checkOut){
                // Function to Calculate Expense Based on Days
                var xmlHttp = new XMLHttpRequest();
                checkIn  = document.getElementById('checkIn').value;
                hotel  = document.getElementById('hotel').value;
                cityName  = document.getElementById('city').value;

                // Check if checkOut is After CheckIn
                if(new Date(checkIn).getTime() > new Date(checkOut).getTime()){
                    document.getElementById("HotelExpense").value = "Please Select Check Out Date After Check In";
                    document.getElementById('checkOut').value = document.getElementById('checkIn').value;
                    document.getElementById("night").value = 1;
                    return;
                };

                xmlHttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("HotelExpense").value = this.response;
                    }
                }
                xmlHttp.open("GET","<?= adminTravelPlannerUrl()?>dashboard/get_hint?q=calculateExpense&o="+checkOut+"&i="+checkIn+"&h="+hotel+"&c="+cityName, true);
                xmlHttp.send();
                
                // Calculate Night
                var xmlHttp = new XMLHttpRequest();
                checkIn  = document.getElementById('checkIn').value;
                xmlHttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("night").value = this.response;
                    }
                }
                xmlHttp.open("GET","<?= adminTravelPlannerUrl()?>dashboard/get_hint?q=calculateNight&o="+checkOut+"&i="+checkIn, true);
                xmlHttp.send();

            }
            
            function calculateDate(night){
                // Function to calculate Date after selecting Nights
                var xmlHttp = new XMLHttpRequest();
                checkIn  = document.getElementById('checkIn').value;
                document.getElementById('checkOut').type = 'date';
                xmlHttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        checkOut = this.response;
                        document.getElementById("checkOut").value = checkOut;

                        // Calculating Expense after selecting nights
                        var xmlHttpExpense = new XMLHttpRequest();
                        checkIn  = document.getElementById('checkIn').value;
                        hotel  = document.getElementById('hotel').value;
                        cityName  = document.getElementById('city').value;
                        xmlHttpExpense.onreadystatechange = function(){
                            if(this.readyState == 4 && this.status == 200){
                                document.getElementById("HotelExpense").value = this.response;
                            }
                        }
                        xmlHttpExpense.open("GET","<?= adminTravelPlannerUrl()?>dashboard/get_hint?q=calculateExpense&o="+checkOut+"&i="+checkIn+"&h="+hotel+"&c="+cityName, true);
                        xmlHttpExpense.send();
                    }
                }
                xmlHttp.open("GET","<?= adminTravelPlannerUrl()?>dashboard/get_hint?q=calculateDate&n="+night+"&i="+checkIn, true);
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

            function calculateCheckOut(checkIn){
                // Function to calculate Date after selecting CheckIn
                var xmlHttp = new XMLHttpRequest();
                night  = document.getElementById('night').value;
                document.getElementById('checkOut').type = 'date';
                xmlHttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        checkOut = this.response;
                        document.getElementById("checkOut").value = checkOut;

                        // Calculating Expense after->
                        var xmlHttpExpense = new XMLHttpRequest();
                        checkIn  = document.getElementById('checkIn').value;
                        hotel  = document.getElementById('hotel').value;
                        cityName  = document.getElementById('city').value;
                        xmlHttpExpense.onreadystatechange = function(){
                            if(this.readyState == 4 && this.status == 200){
                                document.getElementById("HotelExpense").value = this.response;
                            }
                        }
                        xmlHttpExpense.open("GET","<?= adminTravelPlannerUrl()?>dashboard/get_hint?q=calculateExpense&o="+checkOut+"&i="+checkIn+"&h="+hotel+"&c="+cityName, true);
                        xmlHttpExpense.send();
                    }
                }
                xmlHttp.open("GET","<?= adminTravelPlannerUrl()?>dashboard/get_hint?q=calculateDate&n="+night+"&i="+checkIn, true);
                xmlHttp.send();
                
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
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-outline-success dropdown-toggle btn-sm" data-toggle="dropdown"><i class="fas fa-file-import"></i>Import<span class="sr-only"></span></button>
                            <div class="dropdown-menu" role="menu">
                                <button onclick="importData('excel')" class="dropdown-item btn-sm"><i class="fas fa-file-excel"></i>Excel</button>
                                <button onclick="importData('csv')" class="dropdown-item btn-sm"><i class="fas fa-file-csv"></i>CSV</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                
                        <!-- Form Start -->
                        <form method="post" name="stay" action=<?=$_SERVER['REQUEST_URI']?>>
                            <input class='form-control' type="text" name="city" id="city" placeholder="Type Location" required list="id_list" onkeyup="getCity(this.value)" onblur="getHotels(this.value)" autocomplete="off">
                            <div id="id_city">
                                <!-- To be filled onKeyUp type -->
                                
                            </div>
                            
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