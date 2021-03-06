<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vote */

$this->title = 'Update Vote: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Votes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vote-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
