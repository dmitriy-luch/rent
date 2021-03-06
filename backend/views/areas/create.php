<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Areas */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => Yii::t('app', 'Area'),
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Areas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
