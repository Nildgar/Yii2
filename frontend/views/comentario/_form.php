<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comentario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Mensagem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DataComent')->textInput() ?>

    <?= $form->field($model, 'IdUtilizador')->textInput() ?>

    <?= $form->field($model, 'IdApartamento')->textInput() ?>

    <?= $form->field($model, 'IdComentarioPai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
