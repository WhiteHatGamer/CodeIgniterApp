<!-- Adding Name in Title -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Note | <?php echo htmlspecialchars($_SESSION['name'])?></title>
    </head>
    <body>
        <div class="center-page" style="background-image: url(
            https://previews.123rf.com/images/porstock/porstock1508/porstock150800019/44250338-opening-note-paper-and-pen-on-wood-texture-background-with-copy-space.jpg
            ); background-position: center; background-size: cover;">
            <div class="card card-outline card-warning" style="background-color: rgba(242, 242, 242, 0.75);">
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
                        <!-- Edit Form -->
                    </table>
                </div>
                <!-- !card-body -->
                <div class="card-footer">
                    <form action="#" method="post">
                        <input class='form-control' type="number" name="id" required placeholder="Id No:" onkeyup="getNote(this.value)" autocomplete="off">
                        <input class='form-control' type="text" id='note' name="note" placeholder="Edited Note">
                        <button class='btn bg-gradient-warning float-right' type="submit" name="submit" value="1">Edit</button>
                    </form>
                </div>
                <!-- !card-footer -->
            </div>
            <!-- !card -->
        </div>
        <!-- !center-page -->
        <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\admin\Travel_planner\Dashboard\UpdateNote\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
    </body>
</html>