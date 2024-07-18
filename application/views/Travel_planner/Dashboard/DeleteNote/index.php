<!-- Adding Name in Title -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Note | <?php echo htmlspecialchars($_SESSION['name'])?></title>
    </head>
    <body>
        <div class="center-page" style="background-image: url(
            https://images.pexels.com/photos/220634/pexels-photo-220634.jpeg
            ); background-position: center; background-size: cover;">
            <div class="card card-outline card-danger" style="background-color: rgba(242, 242, 242, 0.75);">
                <div class="card-header">
                    <h3 class="card-title"><b>S</b>aved <b>N</b>otes:</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Modified Time</th>
                            <th>Note</th>
                        </tr>
                        <?php
                        
                            // Looping Through Result
                            foreach ($result as $key) {
                                echo "<tr>";
                                echo "<td>".$key['id']."</td>";
                                echo "<td>".date("d/M H:i",strtotime($key['create_time']))."</td>";
                                echo "<td>".$key['note']."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>
                <div class="card-footer">
                    <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
                        <input class="form-control" placeholder="Id No:" type="number" name="id" required autocomplete="off"><br>
                        <button class="btn bg-gradient-danger float-right" type="submit" name="submit" value="1">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\admin\Travel_planner\Dashboard\DeleteNote\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
    </body>
</html>