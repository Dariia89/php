<?php
$photos = scandir("images");
$response = "";
?>
<div style="display: flex; flex-wrap: wrap; width: 800px; margin: 50px auto">
    <?php 
        for($i=2;$i < count($photos);$i++){?>
            <a href="image.php?img=<?= $photos[$i]?>" style="margin-right: 10px">
                <div style="display: flex; object-fit: cover; object-position: center; width: 250px; height: 220px; overflow: hidden">
                    <img style="margin-bottom: 10px" width="100%" src="images/<?= $photos[$i]?>" alt="">
                </div>
            </a>
        <?php
        }
    ?>
</div>
<hr>
<form style="width: 800px; margin: 50px auto" action="uploadImage.php" method="post" enctype="multipart/form-data">
     <p>Выберите файл</p>
     <input type="file" name="photo"><br><br>
     <input type="submit" value="Загрузить">
</form>