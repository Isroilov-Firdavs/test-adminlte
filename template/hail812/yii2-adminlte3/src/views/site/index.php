<?php
$this->title = 'Home page';
$this->params['breadcrumbs'] = [['label' => $this->title]];
$assetDir = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php foreach ($user as $u):?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="user-panel d-flex">
                    <div class="image">
                        <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info a-tag">
                        <a href="#" class="d-block"><?=$u['username'];?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
<?php endforeach;?>
