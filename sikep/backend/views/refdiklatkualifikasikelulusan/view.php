<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refdiklatkualifikasikelulusan */

$this->title = $model->IdDiklatKualifikasiLulusan;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Kualifikasi Kelulusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refdiklatkualifikasikelulusan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdDiklatKualifikasiLulusan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdDiklatKualifikasiLulusan], [
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
            'IdDiklatKualifikasiLulusan',
            'NamaKualifikasiLulusan',
            'UrutanKualifikasiLulusan',
        ],
    ]) ?>

</div>
