<?php
    $imgLen = count($images);
    $destLen = count($destinations);
    $packageUrl = "https://www.holidaymakers.com/index.php/package/search_holidays?to=$1&adult=1&child=0"
    ?>

        
    <div class='card card-success'>
        <div class='card-body'>
            <div class='row'><?php
                for($i=0;$i<$destLen; $i++){
                    ?>
                    <div class='col-3 img-thumbnail'>
                        <div class='position-absolute m-2 rounded bg-primary' style="bottom: 0%; right: 0%; width: 96%; height: 14%; z-index: 100; border-top-right-radius: 0; border-top-left-radius: 0;">
                            <a style="height: 100%; width: 100%; display: grid; align-items: center; justify-content: center;" href="<?=str_replace("$1",$countries[$i%$destLen],$packageUrl)?>"><?=$destinations[$i%$destLen]?></a>
                        </div>
                        <div class='card mb-2 d-flex justify-content-center' style="height: 100%;">
                            <img class='card-img-top rounded img-fluid mx-auto d-block' style="height: 400px; width:auto;" src='<?=$images[$i%$imgLen]?>'>
                        </div>
                    </div>
                    <?php
                }?>
            </div>
        </div>
    </div>