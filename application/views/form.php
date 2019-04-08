<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/plugin-frameworks/css/bootstrap.min.css'); ?>">
</head>
<body>

    <div class="container">
        
        <div class="row">
            <div class="col-sm-12 col-md-6">
                    <!-- <form action="" method="post">

                    </form> -->

                    <?php
                    // show form errors
                    if(form_error('school') || form_error('address')){
                        echo form_error('school','<div class="alert alert-danger">','</div>');
                        echo form_error('address','<div class="alert alert-danger">','</div>');
                    }

                    ?>
                    <?php
                    echo form_open('user/fromSubmit');
                    ?>
                        <input type="text" name="school"><br><br>
                        <textarea name="address" cols="30" rows="10"></textarea><br><br>
                        <input type="submit" class="btn btn-primary" value="Save this form" name="submit">
                    <?php 
                    echo form_close();
                    ?>


            </div>
            <div class="col-sm-12 col-md-6">
                <h1>second coloum</h1>

            </div>
               
        </div>
                



    </div>

   



</body>
</html>