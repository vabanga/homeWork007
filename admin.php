


<h3>Админка</h3>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="usefile">
    <br>
    <br>
    <input type="submit" value="Отправить"">
    <input type="button" onclick="document.location.href = '/homeWork007';" value="Назад"/>
</form>
<form method="post" action="?act=list">
    <input type="submit" onclick="location='?act=list';" value="Редирект">
</form>

<?php


if(isset($_FILES['usefile'])){
    $file = $_FILES['usefile'];
    define(PATH_UPLOAD,'test');
    $path_file = PATH_UPLOAD.'/'.$file['name'];
    $ext = explode(".", $file['name']);
    if($ext[1]=='json'){
        if(move_uploaded_file($file['tmp_name'],$path_file)){
            ?>
            <p style="color:green">Файл отправлен</p>
            <?php
        } else {
            ?>
            <p style="color:red">Файл НЕ отправлен</p>
            <?php
        }

    }
    else{
        ?>
        <p style="color:red">Расширение файла не правельное</p>
        <?php
    }

}

?>