<?php
include "../config.php";

$sql = "select * from dogs order by count desc";
$res = mysqli_query($connect, $sql);
?>

<div style="display: flex; flex-wrap: wrap; width: 800px; margin: 50px auto">
    <?php 
        while($data = mysqli_fetch_assoc($res)):
    ?>
        <a href="image.php?id=<?= $data['id']?>" style="margin-right: 10px">
            <div style="display: flex; object-fit: cover; object-position: center; width: 250px; height: 220px; overflow: hidden">
                <img style="margin-bottom: 10px" width="100%" src="images/<?= $data['img']?>" alt="">
            </div>
        </a>
    <?php
        endwhile;
    ?>
</div>