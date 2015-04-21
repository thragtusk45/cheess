<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 05.04.2015
 * Time: 16:15
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class ChessAsset extends AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/chess.css',
    ];
    public $js = [
        'js/script.js'
    ];

} 