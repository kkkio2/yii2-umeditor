yii2-umeditor
=============
[UmEditor](http://ueditor.baidu.com/website/umeditor.html) 是百度UEditor的精简版本。

安装
------------
因为个人不是很喜欢composer的方式，所以需要将代码下载下来，放到固定的位置。  
将下载下来的文件夹重命名为umeditor，将文件夹移动到yii2项目的common\widgets目录下。

使用
------------

安装完成后，使用下面的代码使用该扩展  :

控制器（controller）:  

```php
public function actions()
{
    return [
        'upload' => [
            'class' => 'common\widgets\umeditor\UmEditorAction',
        ]
    ];
}
```

视图（view）:

```php
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'content')->widget('common\widgets\umeditor\UMeditor', [
    'clientOptions' => [
        'initialFrameHeight' => 100,
        'toolbar' => [
            'source | undo redo | bold |',
            'link unlink | emotion image video |',
            'justifyleft justifycenter justifyright justifyjustify |',
            'insertorderedlist insertunorderedlist |' ,
            'horizontal preview fullscreen',
        ],
    ]
])->label(false) ?>

<div class="form-group">
    <?= Html::submitButton('保存', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
```

功能相关信息
-------------------
请查看 [Umeditor plugin site](http://ueditor.baidu.com) 或 [config](https://github.com/shiyangDR/yii2-umeditor/blob/master/umeditor/umeditor.config.js) 文档， 来学习相关的配置选项。

Demo
-------------------
查看 [umeditor](http://ueditor.baidu.com/website/umeditor.html)