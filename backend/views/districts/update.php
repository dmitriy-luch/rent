<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Districts */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => Yii::t('app', 'District'),
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Districts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="districts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
