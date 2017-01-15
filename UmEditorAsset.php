<?php
/**
 * @copyright Copyright (c) 2017 codeloving
 * @author codeloving <admin@codeloving.com>
 * @link http://codeloving.com
 */
namespace common\widgets\umeditor;

use yii;
use yii\web\AssetBundle;

class UmEditorAsset extends AssetBundle {

    /**
     * UEditor路径
     * @var
     */
    public $sourcePath;

    /**
     * UEditor加载需要的JS文件。
     * ueditor.config.js中是默认配置项，不建议直接引入。
     * @var array
     */
    public $js = [
        'umeditor.min.js',
    ];

    /**
     * UEditor加载需要的CSS文件。
     * UEditor 会自动加载默认皮肤，CSS这里不必指定
     *
     * @var array
     */
    public $css = [];


    public $publishOptions = [
        'except' => [
            'php/',
            'index.html',
            '.gitignore'
        ]
    ];

    public function init() {
        parent::init();
        if($this->sourcePath == null)
            $this->sourcePath = __DIR__ . DIRECTORY_SEPARATOR . 'assets';
    }

}
