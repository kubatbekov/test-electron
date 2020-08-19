<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark el-bg">
        <div class="container">
            <a class="navbar-brand" href="<?= \yii\helpers\Url::home();?>">
                <div>
                    <img src="<?= Yii::$app->request->baseUrl;?>/static/img/back.png" alt="">
                    <img src="<?= Yii::$app->request->baseUrl;?>/static/img/E.png" class="el-logo" alt="">
                </div>
            </a>
            <div class="d-xl-none d-lg-none d-sm-block">
                <ul class="navbar-nav ml-sm-auto " style="display: inline-block; ">
                    <?php if(!Yii::$app->user->isGuest): ?>

                    <li class="nav-item list-inline-item">
                        <a class="nav-link el-nav-username" href="#"><?php echo  \Yii::$app->user->identity->username ?></a>
                    </li>
                    <li class="nav-item list-inline-item  dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?= Yii::$app->request->baseUrl;?>/static/img/avatar.png" width="35" height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu el-mobile-dropdown" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item el-dropdown-menu" href="<?= \yii\helpers\Url::home();?>">Моя страница</a>
                            <?= Html::a('Выйти', ['site/logout'], ['data' => ['method' => 'post'], 'class' => 'dropdown-item el-dropdown-menu']) ?>
                        </div>
                    </li>
                    <?php else:?>
                        <li class="nav-item">
                            <a class="nav-link el-nav-username" href="<?php echo \yii\helpers\Url::to('site/login')?>">Войти</a>
                        </li>
                    <?php endif;?>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbar-list-4">
                <ul class="navbar-nav mr-auto">
                    <form class="form-inline my-2 my-md-0">
                        <input class="form-control el-search-input" type="text" placeholder="Поиск" aria-label="Поиск">
                    </form>
                </ul>
                <ul class="navbar-nav">
                    <?php if(!Yii::$app->user->isGuest): ?>
                    <li class="nav-item">
                        <a class="nav-link el-nav-username" href="#"><?php echo  \Yii::$app->user->identity->username ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?= Yii::$app->request->baseUrl;?>/static/img/avatar.png" width="35" height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item el-dropdown-menu" href="<?= \yii\helpers\Url::home();?>">Моя страница</a>
                            <?= Html::a('Выйти', ['site/logout'], ['data' => ['method' => 'post'], 'class' => 'dropdown-item el-dropdown-menu']) ?>
                        </div>
                    </li>
                    <?php else:?>
                        <li class="nav-item">
                            <a class="nav-link el-nav-username" href="<?php echo \yii\helpers\Url::to('site/login')?>">Войти</a>
                        </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>
</header>

    <div class="container">
        <?= $content ?>
    </div>

<!-- FOOTER -->
<footer class="el-footer">
    <div class="container">
        <span class="el-footer-copyright">elbook 2018</span>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
