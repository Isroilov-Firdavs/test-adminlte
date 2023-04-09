<?php

use yii\helpers\Html; 
use yii\bootstrap5\ActiveForm;
 
/** @var yii\web\View $this */
/** @var frontend\models\Car $model */
/** @var ActiveForm $form */


$this->title = 'Create car';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-form">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <?php $form = ActiveForm::begin(); ?>
        
                <?= $form->field($model, 'model') ?>
                <?= $form->field($model, 'make') ?>
                <?= $form->field($model, 'price') ?>
            
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-info']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>


</div><!-- site-form -->
