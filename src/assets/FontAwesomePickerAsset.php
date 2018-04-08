<?php

namespace baskof147\fontawesomepicker\assets;

use rmrevin\yii\fontawesome\cdn\AssetBundle as RmrevinAssetBundle;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class FontAwesomePickerAsset
 * @package baskof147\fontawesomepicker\assets
 * @author Ilya Loginov
 */
class FontAwesomePickerAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/baskof147/fontawesomepicker/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/iconpicker.css'
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/iconpicker.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        JqueryAsset::class,
        RmrevinAssetBundle::class
    ];
}
