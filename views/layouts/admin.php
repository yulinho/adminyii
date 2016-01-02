<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

$moduleName = $this->context->module->id;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Yii::t('admin', 'Control Panel') ?> - <?= Html::encode($this->title) ?></title>
    <!--link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'-->
    <style>
      @font-face {
      font-family: NotoSans-Bold;
      src: url('/fonts/NotoSans/NotoSans-Bold.ttf');
      }
      @font-face {
          font-family: NotoSans-Regular;
          src: url('/fonts/NotoSans/NotoSans-Regular.ttf');
      }
      @font-face {
          font-family: NotoSans-Regular;
          src: url('/fonts/NotoSans/NotoSans-Regular.ttf');
      }
      @font-face{font-family:'Glyphicons Halflings';src:url(/fonts/glyphicons-halflings/glyphicons-halflings-regular.eot);src:url(/fonts/glyphicons-halflings/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(/fonts/glyphicons-halflings/glyphicons-halflings-regular.woff2) format('woff2'),url(/fonts/glyphicons-halflings/glyphicons-halflings-regular.woff) format('woff'),url(/fonts/glyphicons-halflings/glyphicons-halflings-regular.ttf) format('truetype'),url(/fonts/glyphicons-halflings/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
      html,body,a,p,span{
        font-family:  NotoSans-Regular;

      }
      h1{
        display: none;
      }
      td{
        padding: 5px !important;
      }
  </style>
  <script src="/themes/default/js/jquery.min.js"></script>
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href="/css/admin.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="admin-body">
    <div class="container">
        <div class="wrapper">
            <div class="header">
                <div class="logo">
                    <!--img src="/img/logo_20.png"-->
                    <?php echo Yii::$app->params['sitename'] ?> Admin
                </div>
                <div class="nav">
                    <a target="_blank" href="/" class="pull-left"><i class="glyphicon glyphicon-home"></i> <?= Yii::t('admin', 'Open site') ?></a>
                    <a href="<?= Url::to(['/admin/logout']) ?>" class="pull-right"><i class="glyphicon glyphicon-log-out"></i> <?= Yii::t('admin', 'Logout') ?></a>
                </div>
            </div>
            <div class="main">
                <div class="box sidebar">
                    
                        <a href="<?= Url::to(["/admin/index"]) ?>" class="menu-item <?php //($moduleName == $module->name ? 'active' : '') ?>">
                           

                                <i class="glyphicon glyphicon-"></i>
                            

                            <?= Yii::t('admin', 'Control Panel') ?>

                            
                                <span class="badge"></span>
                            
                        </a>

                    <a href="<?= Url::to(['/configs/index']) ?>" class="menu-item <?= (Yii::$app-> controller-> id == 'configs') ? 'active' :'' ?>">
                        <i class="glyphicon glyphicon-cog"></i>
                        <?= Yii::t('admin', 'configs') ?>
                    </a>
  

                </div>



                <div class="box content">
                    <div class="page-title">
                        <?= $this->title ?>
                    </div>
                    <div class="container-fluid">
                        <?php foreach(Yii::$app->session->getAllFlashes() as $key => $message) : ?>
                            <div class="alert alert-<?= $key ?>"><?= $message ?></div>
                        <?php endforeach; ?>
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
