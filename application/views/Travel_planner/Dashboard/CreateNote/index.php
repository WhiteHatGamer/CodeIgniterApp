<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Note | <?php echo htmlspecialchars($_SESSION['name'])?></title>
        <script>
            function importData(str){
                Swal.fire({
                    title: "Select Your "+str+" File.",
                    html: `
                    <form method='post' enctype="multipart/form-data">
                        <input type='file' class='form-control' name='`+str+`'><br>
                        <button class='btn bg-gradient-primary' type='submit' name='import' value='1'>Submit</button>
                        <button class='btn bg-gradient-danger' type='menu' name='import' value='0'>Cancel</button>
                    </form>
                    `,
                    showConfirmButton: false,
                });
                
            }
            async:false;
        </script>
    </head>
    <body>
        <div class="center-page" style="background-image: url(
            https://png.pngtree.com/background/20210717/original/pngtree-paper-note-cute-learning-background-picture-image_1432207.jpg
            ); background-position: center; background-size: cover;">
            <div class="card card-outline card-primary" style="background-color: rgba(242, 242, 242, 0.75);">
                <div class="card-header">
                    <h3 class="card-title"><b>A</b>dd <b>N</b>ote</h3>
                    <div class="btn-group float-right dropdown">
                        <button type="button" id='dropdownMenuButton' class="btn btn-outline-primary dropdown-toggle btn-sm" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"><i class="fas fa-file-import"></i>Import<span class="sr-only"></span></button>
                        <div class="dropdown-menu" role="menu" labelledby="dropdownMenuButton" id='dropdown-menu'>
                            <button onclick="importData('excel')" class="dropdown-item btn-sm"><i class="fas fa-file-excel"></i>Excel</button>
                            <button onclick="importData('csv')" class="dropdown-item btn-sm"><i class="fas fa-file-csv"></i>CSV</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <textarea style="background-color: rgba(242, 242, 242, 0.7);" class="form-control" name='note' id='note' type="textarea" placeholder="Your Note" required></textarea>
                        <button class="btn bg-gradient-primary btn-sm float-right" type="submit" name='submit' value="1">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\Travel_planner\Dashboard\CreateNote\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
        <script>
            $(document).ready(function(){
                $(".sheet0").addClass("table table-bordered card col-sm-12 table-striped dataTable dtr-inline");
            });

        </script>
    </body>
</html>