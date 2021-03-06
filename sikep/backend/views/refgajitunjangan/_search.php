<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Gaji TunjanganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refgajitunjangan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdRefGajiTunjangan') ?>

    <?= $form->field($model, 'KodeGajiTunjangan') ?>

    <?= $form->field($model, 'NamaGajiTunjangan') ?>

    <?= $form->field($model, 'IdGajiPokok') ?>

    <?= $form->field($model, 'Tunjangan') ?>

    <?php // echo $form->field($model, 'RemunisasiGajiTunjangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
