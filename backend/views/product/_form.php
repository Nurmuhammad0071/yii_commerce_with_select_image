<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?> 

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

<?= $form->field($model, 'imageFile', [
        'template' => '
                <div class="custom-file">
                    {input}
                    {label}
                    {error}
                </div>
            ',
        'labelOptions' => ['class' => 'custom-file-label'],
        'inputOptions' => ['class' => 'custom-file-input']
    ])->textInput(['type' => 'file']) ?>

    <?= $form->field($model, 'price')->textInput([
        'maxlength' => true,
        'type'=> 'number'
        ]) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
