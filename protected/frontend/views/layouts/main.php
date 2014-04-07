<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-16" />
        <meta name="language" content="en" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/lib/css/style.css"/>
            <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
            <!--[if lt IE 8]>
            <![endif]-->

            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/jquery-2.1.0.min.js"></script>
            <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
            <!--<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/vendor/custom.modernizr.js"></script>-->
            <!--<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/vendor/fastclick.js"></script>-->

            <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <?php require ('header.php'); ?>
        <div id="main-content" class="container">
            <?php echo $content; ?>
        </div>
        <?php
        require ('footer.php');
        ?>

            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/bootstrap.min.js"></script>
    </body>
</html>