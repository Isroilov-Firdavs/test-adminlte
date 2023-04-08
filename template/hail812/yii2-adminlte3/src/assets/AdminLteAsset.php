<?php
namespace hail812\adminlte3\assets;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@template/almasaeed2010/adminlte/dist';

    public $css = [
        'css/adminlte.min.css'
    ];

    public $js = [
        'js/adminlte.min.js'
    ];

    public $depends = [
        'hail812\adminlte3\assets\BaseAsset',
        'hail812\adminlte3\assets\PluginAsset'
    ];
}