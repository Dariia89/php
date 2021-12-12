<div style="display: flex; align-items: center; justify-content: center; height: 100%; flex-direction: column">
    <?php
    $path = "images/".$_FILES['photo']['name'];

    if (! file_exists($_FILES["photo"]["tmp_name"])) {
        ?><p>Возникла проблема с загрузкой изображения. Попробуйте еще раз!</p>
        <?php
    } elseif ($_FILES["photo"]["size"] > 2000000) {
        ?><p>Размер изображения не должен превышать 2мб.</p>
        <?php
    } elseif ($_FILES["photo"]["type"] === 'image/jpg' || $_FILES["photo"]["type"] === 'image/jpeg' || $_FILES["photo"]["type"] === 'image/png') {
        if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
            ?>
                <img src="images/<?= $_FILES['photo']['name']?>" height="210" width="250px" style="margin-bottom: 20px" alt="dog">
                <p><?= $_FILES['photo']['name']." успешно загружен!" ?></p>
        <?php
        } else {
            ?><p>Возникла проблема с загрузкой изображения. Попробуйте еще раз!</p>
            <?php
        }
    } else {
        ?><p>Допустимые расширения файла: jpg, jpeg, png.</p>
        <?php
    }
    ?>
    <a href="<?= $_SERVER['HTTP_REFERER'] ?>">Вернуться назад</a>
</div>
