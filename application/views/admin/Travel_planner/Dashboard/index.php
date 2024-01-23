<!-- Adding Name in Title -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard | <?php echo htmlspecialchars($_SESSION['name'])?></title>

</head>
<script>

    function travel_click() {
        travel_btn.className = 'btn bg-gradient-success active';
        hotel_btn.className = 'btn btn-outline-info ';
        note_btn.className = 'btn btn-outline-info ';
        travel.hidden=false;
        stay.hidden=true;
        note.hidden = true;
        
    }

    function hotel_click(){
        travel_btn.className = 'btn btn-outline-info';
        hotel_btn.className = 'btn bg-gradient-success active';
        note_btn.className = 'btn btn-outline-info';
        travel.hidden=true,
        stay.hidden=false,
        note.hidden = true;

    }

    function note_click(){
        travel_btn.className = 'btn btn-outline-info';
        hotel_btn.className = 'btn btn-outline-info';
        note_btn.className = 'btn bg-gradient-success active';
        travel.hidden=true,
        stay.hidden=true,
        note.hidden = false;
    }

</script>
<body>
<div style="min-height: 89%; background-image: url(
    https://previews.123rf.com/images/sn333g/sn333g1510/sn333g151000083/47687055-travel-seamless-pattern-vector-tourism-linear-background-or-texture-in-thin-line-style.jpg
    );">
<!-- https://previews.123rf.com/images/sn333g/sn333g1510/sn333g151000083/47687055-travel-seamless-pattern-vector-tourism-linear-background-or-texture-in-thin-line-style.jpg -->

    <?php
        $CookieName = $_SERVER['REMOTE_ADDR'];
        // Greeting User if Cookie Found
        if(isset($_COOKIE[md5('back')])? $_COOKIE[md5('back')]:false){
            echo "<div style='background-color: rgba(242,242,242,0.85);'>Welcome Back, ".((isset($_SESSION['name']))? $_SESSION['name']:$_SESSION['email'])."</div>";
        }
    ?>
    <div class="user-panel mt-1 mb-3 d-flex" style="background-color: rgba(242,242,242,0.9);">
        <div class="image">
            <img style="height:35px; width: 35px; border: 1px solid #4F5F5F;" src="data:image/jpeg;base64, <?=@base64_encode($image)?>" class="img-circle elevation-1" alt="User Profile">
        </div>
        <div class="info">
            <a href="User_profile" class="d-block"><?=@$name?? 'User' ?></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5" style="background-color: rgba(242,242,242,0.925);">
            <table class="table ">
                <tr>
                    <div class="btn-group-vertical">
                        <th><button class="btn btn-outline-info" type="button" name='travel_btn' id='travel_btn' onclick=travel_click()><i class="fa fa-plane-departure"></i> <b>T</b>ravel <b>P</b>lan</button></th>
                        <th><button class="btn btn-outline-info" type="button" name='hotel_btn' id='hotel_btn' onclick=hotel_click()><i class="fa fa-bed"></i> <b>H</b>otel <b>S</b>tay</button></th>
                        <th><button class="btn btn-outline-info" type="button" name='note_btn' id='note_btn' onclick=note_click()><i class="fa fa-edit"></i> <b>T</b>ravel <b>N</b>ote</button></th>
                    </div>
                </tr>
                <tr>
                    <div class="card-box">
                    <td>
                        <!-- Travel Plan -->
                        <div class='card-body' id="travel" hidden>
                            <div class="tab-content">
                                <div class="tab-pane active">
                                    <p><a class="post" href="<?=adminTravelPlannerUrl()?>journey/plan">Plan Travel</a></p>
                                    <p><a class="post" href="<?=adminTravelPlannerUrl()?>journey">Show Trips</a></p>
                                    <p><a class="post" href="<?=adminTravelPlannerUrl()?>journey/edit">Edit Trip</a></p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Stay Plan -->
                        <div class='card-body' id="stay" hidden>
                            <div class="tab-content">
                                <div class="tab-pane active">
                                    <p><a class="post" href="<?=adminTravelPlannerUrl()?>hotel/Appoint">Appoint Hotel</a></p>

                                    <!-- List Stays Stored -->
                                    <p><a class='post' href="<?=adminTravelPlannerUrl()?>hotel/">List Stays</a></p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Note Operations -->
                        <div class='card-body' id="note" hidden>
                            <div class="tab-content">
                                <div class="tab-pane active">
                                    <!-- Add Note -->
                                    <p><a class='post' href="<?=adminTravelPlannerUrl()?>note/create">Create Note</a></p>

                                    <!-- List Note -->
                                    <p><a class='post' href="<?=adminTravelPlannerUrl()?>note/">Read Notes</a></p>

                                    <!-- Update Note -->
                                    <p><a class='post' href="<?=adminTravelPlannerUrl()?>note/update">Update Notes</a></p>

                                    <!-- Delete Note -->
                                    <p><a class='post' href="<?=adminTravelPlannerUrl()?>note/delete">Delete Note</a></p>
                        </div>
                    </td>
                    </div>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
                        <button class='btn btn-xs bg-gradient-danger float-right' name="logout" type="submit"><span  style="color: #f2f2f2;">Log Out</span></button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Log out -->
    <!-- <form action="EditProfile/index.php" method="post">
    <button type="submit">Edit Profile</button>
    </form> -->
</div>
<!-- jQuery -->
<script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/dist/js/demo.js')?>"></script>
