<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fiador */

$this->title = $model->IdFiador;
$this->params['breadcrumbs'][] = ['label' => 'Fiadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fiador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdFiador], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdFiador], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdFiador',
            'Nome',
            'DataNasc',
            'Email:email',
            'Contacto',
            'NumCarCid',
            'Mensalidade',
            'CasaPropria',
            'Distrito',
            'Concelho',
            'Freguesia',
            'Morada',
            'CodigoPostal',
            'IdUtilizador',
        ],
    ]) ?>

</div>
