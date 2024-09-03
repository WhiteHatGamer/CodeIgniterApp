<style>

    #card {
        position: absolute;
        cursor: move;
        z-index: 100;
        top: 0%;
        left: 0%;
    }
</style>
<?php
    if(isset($image)){
        if(!isset($selected_img)){

            $selected_img = base64_decode($filePath);
        }
        ?>
        <form action="edit_image_merge" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?=base64_encode($selected_img)?>" name="selected-img" id="selected-img">
            <input type="hidden" value="<?=base64_encode($image)?>" name="image" id="image">
            <div ondragover="allowDrop(event)" >
                <img id="dropImg" draggable="false" src='<?=$selected_img?>' style="border: 3px solid #000;">
                <img draggable="true" id="card" src='<?=$image?>' style="border: 3px solid #000">
            </div>
            <input type="hidden" name="x-pos" id="x-pos">
            <input type="hidden" name="y-pos" id="y-pos">
            <label for="custom-height" class="form-label">Sub Image Size: </label>
            <input type="range" name="custom-height" id="custom-height" class="form-range" min="10" max="1000" style="width: 500px;"><input type="number" id="custom-h-text" > <br>
            <button type="submit" class="btn btn-outline-success" disabled id="download-btn-img" name="type" value="image"><i class="fas fa-download"></i> Image</button>
            <button type="submit" class="btn btn-outline-primary" disabled id="download-btn-pdf" name="type" value="pdf"><i class="fas fa-download"></i> Pdf</button>
            </div>
            <p id="error-msg" style="color: red;"></p>
        </form>

        <?php
    }else{
        ?>
        <div class="wrapper bg-white">
            <div class="center-page m-2 bg-white">

                <div class="card col-md-6 m-3">
                    <div class="card-body">
                        <form class="form" action="<?=$_SERVER["REQUEST_URI"]?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <?php
                                    if(isset($filePath)){
                                    ?>
                                        <label for="selected-img" class="form-control">Selected Image</label>
                                        <img id="selected-img" class="col-md-6" src="<?=base64_decode($filePath)?>">
                                        <br>
                                        <?php
                                    }else{
                                        ?>
                                        <label for="selected-img" class="form-control">Select Image/PDF</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="selected-img" type="file" class="custom-file-input" id="main-image-File" onchange="getFile(this)">
                                                <label class="custom-file-label" for="main-image-File">Choose file</label>
                                            </div>
                                        </div>
                                        <br>
                                        <?php
                                    }
                                ?>
                                <br>
                                <label class="form-control">Upload Signature/Stamp</label>
                                <input type="hidden" name="edit" value="<?=@$id?>">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input" id="sub-image-file" onchange="getFile(this)">
                                        <label class="custom-file-label" for="sub-image-file" id="sub-image">Choose file</label>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success float-right"><i class="fas fa-wrench"></i> Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
<script>
    window.onload=function() {
        var Card = document.getElementById("card");
        document.getElementById('custom-height').value = Card.offsetHeight - 5;
        $('#custom-h-text').val(parseInt(Card.offsetHeight) - 5);
    }

    let newX = 0, newY = 0, startX = 0, startY = 0;

    const mainImage = document.getElementById("dropImg");
    const subImage = document.getElementById("card");

    subImage.addEventListener('dragstart', dragStart);

    // Transparent Image
    var img = new Image();
    img.src = 'data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z/C/HgAGgwJ/lK3Q6wAAAABJRU5ErkJggg==';

    function dragStart(event){
        
        // Set the drag image to the transparent image
        event.dataTransfer.setDragImage(img, 0, 0);
        startX = event.clientX;
        startY = event.clientY;

        subImage.addEventListener('drag', drag);
        document.addEventListener('dragover', dragOver);
        document.addEventListener('drop', drOp);
    }

    function drag(event){
        // While Image is being Dragged
        newX = startX - event.clientX;
        newY = startY - event.clientY;

        startX = event.clientX;
        startY = event.clientY;

        subImage.style.left = (subImage.offsetLeft - newX) + 'px';
        subImage.style.top = (subImage.offsetTop - newY) + 'px';

    }
    
    function dragOver(event){
        // console.log(subImage.offsetLeft - newX, subImage.offsetTop - newY)
        var header = document.getElementsByTagName("header")[0].offsetHeight;
        // console.log("x-Pos: "+subImage.offsetLeft);
        // console.log("y-Pos: "+subImage.offsetTop);
        document.getElementById("x-pos").value = subImage.offsetLeft;
        document.getElementById("y-pos").value = subImage.offsetTop - header;
        document.removeEventListener("drag", drag);
    }

    function drOp(event){
        // Checking if subImage Inside Main Image
        if((subImage.offsetTop < mainImage.offsetTop) || (subImage.offsetLeft < mainImage.offsetLeft)){

            document.getElementById("error-msg").innerText ="Outside Image";
            document.getElementById("download-btn-img").disabled = true;
            document.getElementById("download-btn-pdf").disabled = true;
        }else if((subImage.offsetHeight + subImage.offsetTop) > (mainImage.offsetTop+mainImage.offsetHeight) ){
            
            document.getElementById("error-msg").innerText ="Outside Image";
            document.getElementById("download-btn-img").disabled = true;
            document.getElementById("download-btn-pdf").disabled = true;
            
        }else if((subImage.offsetWidth + subImage.offsetLeft) > (mainImage.offsetLeft+mainImage.offsetWidth) ){

            document.getElementById("error-msg").innerText ="Outside Image";
            document.getElementById("download-btn-img").disabled = true;
            document.getElementById("download-btn-pdf").disabled = true;
            
        }else{
            document.getElementById("error-msg").innerText ="";
            document.getElementById("download-btn-img").disabled = false;
            document.getElementById("download-btn-pdf").disabled = false;
            
        }
        
    }

    function allowDrop(event){
        event.preventDefault();
    }


</script>
<script>

    // Script for File Upload Update
    function getFile(input){
        $('label[for="'+input.id+'"]').text(input.files[0].name);
    }

    const customHeight = document.getElementById('custom-height')

    customHeight.addEventListener('change', (event) => {
        $("#custom-h-text").val(customHeight.value);
        card.style.height= (parseInt(customHeight.value)+parseInt(5))+'px';
    })

    const customHeightText = document.getElementById('custom-h-text')

    customHeightText.addEventListener('change', (event) => {
        $("#custom-height").val(customHeightText.value);
        card.style.height= (parseInt(customHeight.value)+parseInt(5))+'px';
    })
</script>