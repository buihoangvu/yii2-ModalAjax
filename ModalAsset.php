<?php

/**
 * @copyright Copyright &copy; Karnbrock GmbH, 2015
 * @package yii2-modal-ajax
 */

namespace karnbrockgmbh\modal;

class ModalAsset extends \yii\web\AssetBundle {
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/buihoangvu/yii2-modalajax/assets/';

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/kb-modal-ajax.js',
    ];
}
