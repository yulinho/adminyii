<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Configs */

$this->title = Yii::t('app', 'Create Configs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Configs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="configs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
