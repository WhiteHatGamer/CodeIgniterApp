<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upload Document | <?=@$_SESSION['name']?></title>
</head>


<body>
  <div style="min-height: 89%; background-image: url(
          'https://c1.wallpaperflare.com/preview/323/67/830/polaroid-cork-wall-photos-retro.jpg'
      ); background-repeat: repeat;">
    <div style="min-height: 100%; background-color: rgba(255, 255, 255, 0.6); height: auto;" class="center-page">
      <div class="card card-outline card-danger col-md-3 shadow-lg">
        <div class="card-header">
          <h3 class="card-title"><b>D</b>ocument <b>U</b>pload</h3>
        </div>
        <div class="card-body">

          <!-- Form start -->
          <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" name='doc' enctype="multipart/form-data">
            <div class="input-group">
              <input type="file" class="custom-file-input" name='images[]' multiple='multiple' id="images" accept=".png,.jpeg,.jpg">
              <label class="custom-file-label" for="images" >Select Your Images: </label>
            </div>
            <span>All *Image Types Supported</span>
            <br>
            <div id="preview_image">
              
            </div>
            <br>
            <button type="submit" class="btn btn-danger float-right" value='1' name='upload'>Upload</button>
          </form>
        </div>
      </div>
    </div>

  </div>

  <script>
    // On Upload Image Preview on Div
    images.onchange = evt => {
      $.each(images.files, function(index, value){
        if(index == 0){
          
          document.getElementById('preview_image').innerHTML = '';
        }

        var x_image = document.createElement("IMG");
        x_image.src = URL.createObjectURL(value);
        x_image.height = '150';
        x_image.width = '150';
        document.getElementById('preview_image').append(x_image);
      });
      
    }
  </script>