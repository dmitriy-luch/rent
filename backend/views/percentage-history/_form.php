<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PercentageHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="percentage-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'use_purpose')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'contract_additions_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
