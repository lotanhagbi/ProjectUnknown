<?php
/* @var $this UserController */
/* @var $user User */
/* @var $form CActiveForm */
?>
<div class="row">
    <div class="col-xs-12 visible-lg visible-md col-md-6">
    </div>
    <div class="col-xs-12 col-md-6">
        <?php
        $form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
            'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
            'enableAjaxValidation' => true,
            'id' => 'user-login-form',
            'htmlOptions' => array(
                'class' => 'well well-default'
            ),
            'focus' => array($user, 'user_email')
        ));
        ?>

        <div class="page-header"><h3>Login</h3></div>

        <?php echo $form->textFieldControlGroup($user, 'user_email'); ?>
        <?php echo $form->passwordFieldControlGroup($user, 'user_pass'); ?>

        <?php echo $form->errorSummary($user); ?>

        <div class="row">
            <div class="col-xs-12 clearfix">
                <p class="pull-left">Fields with * are required.</p>
                <?php
                echo BsHtml::submitButton('Login', array(
                    'color' => BsHtml::BUTTON_COLOR_PRIMARY,
                    'size' => BsHtml::BUTTON_SIZE_LARGE,
                    'class' => 'pull-right'
                ));
                ?>
            </div>
        </div>

        <?php $this->endWidget(); ?>
    </div>
</div>