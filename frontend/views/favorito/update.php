<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Favorito */

$this->title = 'Update Favorito: ' . $model->IdFavorito;
$this->params['breadcrumbs'][] = ['label' => 'Favoritos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdFavorito, 'url' => ['view', 'id' => $model->IdFavorito]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="favorito-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
