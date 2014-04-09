<?php
/* @var $this UserController */
/* @var $user User */
/* @var $form CActiveForm */
?>
<div class="row">
    <div class="col-xs-12 col-md-6">
        <?php
        $form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
            'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
            'enableAjaxValidation' => true,
            'id' => 'user-register-form',
            'htmlOptions' => array(
                'class' => 'well well-default'
            ),
            'focus' => array($user, 'user_email')
        ));
        ?>

        <?php echo $form->textFieldControlGroup($user, 'user_email', array('validateOnChange' => true)); ?>
        <?php echo $form->textFieldControlGroup($user, 'first_name'); ?>
        <?php echo $form->textFieldControlGroup($user, 'last_name'); ?>
        <?php echo $form->dateFieldControlGroup($user, 'user_birthdate'); ?>
        <?php echo $form->inlineRadioButtonListControlGroup($user, 'user_gender', array('m' => 'Male', 'f' => 'Female'), array('class' => 'radio-inline')); ?>
        <?php echo $form->passwordFieldControlGroup($user, 'user_pass'); ?>

        <div class="row">
            <div class="col-xs-12 clearfix">
                <?php echo $form->checkBoxControlGroup($user, 'user_terms',array('label'=>'test conditions')); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 clearfix">
                <p class="pull-left">Fields with * are required.</p>
                <?php
                echo BsHtml::submitButton('Register', array(
                    'color' => BsHtml::BUTTON_COLOR_SUCCESS,
                    'size' => BsHtml::BUTTON_SIZE_LARGE,
                    'class' => 'pull-right'
                ));
                ?>
            </div>
        </div>

        <?php $this->endWidget(); ?>
    </div>
</div>