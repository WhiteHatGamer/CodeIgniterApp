<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Note | <?php echo htmlspecialchars($_SESSION['name'])?></title>
    </head>
    <body>
        <div class="center-page" style="background-image: url(
            https://png.pngtree.com/background/20210717/original/pngtree-paper-note-cute-learning-background-picture-image_1432207.jpg
            ); background-position: center; background-size: cover;">
            <div class="card card-outline card-primary" style="background-color: rgba(242, 242, 242, 0.75);">
                <div class="card-header">
                    <h3 class="card-title"><b>A</b>dd <b>N</b>ote</h3>
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
    </body>
</html>