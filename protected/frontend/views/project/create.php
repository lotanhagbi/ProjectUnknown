<?php
/* @var $this ProjectController */
/* @var $project Project */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <?php
        $form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
            'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
            'enableAjaxValidation' => true,
            'id' => 'project-create-form',
            'htmlOptions' => array(
                'class' => 'well well-default'
            ),
            'focus' => array($project, 'project_name')
        ));
        ?>

        <div class="page-header">
            <h3>New Project <small>Inlight us with your idea!</small></h3>
        </div>
        
        
        <?php echo $form->textFieldControlGroup($project, 'project_name'); ?>
        <?php echo $form->textFieldControlGroup($project, 'project_title'); ?>
        <?php echo $form->textAreaControlGroup($project, 'project_description'); ?>
        
        <?php echo $form->errorSummary($project); ?>
        

        <div class="row">
            <div class="col-xs-12 clearfix">
                <p class="pull-left">Fields with * are required.</p>
                <?php
                echo BsHtml::submitButton('Create', array(
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