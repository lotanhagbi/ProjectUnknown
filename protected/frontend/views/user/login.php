<?php
/* @var $this UserController */
/* @var $user User */
/* @var $form CActiveForm */
?>
<div class="row">
	<div class="col-xs-12 visible-lg visible-md col-md-6">
		<?php 
			
		?>
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
		
		<div class="page-header">
			<h3>Login <small></small></h3>
		</div>

        <?php echo $form->textFieldControlGroup($user, 'user_email', array('validateOnChange' => true)); ?>
        <?php echo $form->passwordFieldControlGroup($user, 'user_pass'); ?>


        <div class="row">
            <div class="col-xs-12 clearfix">
                <p class="pull-left">Fields with * are required.</p>
                <?php
                echo BsHtml::submitButton('Login', array(
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