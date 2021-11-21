<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = 'Maxsulot';
$this->params['breadcrumbs'][] = ['label' => 'Maxsulotlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
