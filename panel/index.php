<?php
require_once "../functions/functions.php";
$autors=get_author();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">

</head>
<body>
<label for="">عنوان پست :</label>
<input type="text" name="title">
<label for="">نویسنده پست :</label>
<select>
<?php foreach($autors as $aid =>$author) : ?>

    <option value="<?= $author->fullname ?>" name="author"><?= $author->fullname ?></option>
    <?php endforeach ?>

</select>
<label for="">محتوای پست :</label>
<textarea name="content"  cols="30" rows="10"></textarea>
<button type="submit">ذخیره پست</button> 
</body>
</html>
