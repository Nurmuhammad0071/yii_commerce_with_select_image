<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CartItem */

$this->title = 'Create Cart Item';
$this->params['breadcrumbs'][] = ['label' => 'Cart Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
