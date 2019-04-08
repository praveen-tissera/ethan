<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" method="post">

    </form> -->

    <?php
    // show form errors
    if(form_error('school') || form_error('address')){
        echo form_error('school','<h3>','</h3>');
        echo form_error('address','<h3>','</h3>');
    }

    ?>
    <?php
    echo form_open('user/fromSubmit');
    ?>
        <input type="text" name="school"><br><br>
        <textarea name="address" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Save this form" name="submit">
    <?php 
    echo form_close();
    ?>
</body>
</html>