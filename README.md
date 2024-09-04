This is a personal plugin for study.
It is strongly recomended that you not use it. 
This plugin is unstable.
======================
It is the qiniu plugin for yii2
======================

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist syships/yii2-qiniu "*"
```

or add

```
"syships/yii2-qiniu": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Before using the extension,you can add the _ide_helper.php under your application folder.

Once the extension is installed, simply use it in your code by  :

config：

    'components' => [
        'qiniu' => [
            'class' => 'syships\qiniu\Application',
            'accessKey' => "QdgHxWgNAhwiKLbzKtUgdNajI6wZopUEXLGN7Ujf",
            'secretKey' => "EKG9b3QW3YsVI0ID-xzDZFbd6I9E-Npey6pnYvI9"
        ],
    ],

You can use the code below：

    use Qiniu\Storage\UploadManager;
    use Yii;
    use yii\web\UploadedFile;
    
    $image = UploadedFile::getInstanceByName('image');
    $fileName = 'image_' . time() .rand(1000,9999). '.' . $image->getExtension();
    $upToken = Yii::$app->qiniu->Auth()->uploadToken("syships-imgs");
    $uploadMgr = new UploadManager();
    list($result, $error) = $uploadMgr->putFile($upToken, $fileName, $image->tempName);


