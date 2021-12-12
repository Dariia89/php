<?php
    include_once('config.php');

    $id = $_GET['id'];
    $sql = "select * from dogs where id='$id'";

    if (mysqli_query($connect, $sql)) {
        $img = mysqli_fetch_assoc(mysqli_query($connect, $sql));
        $count = "update dogs set count=count+1 where id=$id";
        mysqli_query($connect, $count);
    }
?>

<div style="position: absolute; top: 35%; left: 40%;">
    <img src="images/<?= $img['img'] ?>" height="210" width="250px" alt=""><br>
    <p>Просмотрено <?= ++$img['count'] ?> раз(а)</p><br>
    <a href="<?= $_SERVER['HTTP_REFERER'] ?>">Вернуться назад</a>
</div>
