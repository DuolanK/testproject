<?php 

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
AppAsset::register($this);
$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <?php $this->head() ?>
</head>

<body class="main__body">
<?php $this->beginBody() ?>
    <!-- Header -->
    <header>
    <!-- Navbar -->
    <nav>
        <div class="container">
            <div class="navbar">
                <div class="logo"> <a href="#"> AVD Company </a> </div>
                <ul class="menu">

                    <li class="nav-item"><a class="nav-link" href="/site/index">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/site/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/site/contact">Contact</a></li>
                    <?php if(Yii::$app->user->isGuest): ?>
                        <li class="nav-item"><a class="nav-link" href="/site/login">Login</a></li>
                    <?php else: ?>    
                        <li class="nav-item">
                            <form action="/site/logout" method="post">
                                <button type="submit" class="nav-link btn btn-link logout">
                                    Logout (<?= Yii::$app->user->identity->username ?>)
                                </button>
                            </form>
                        </li>
                    <?php endif; ?>

                </ul>
                
                <div class="burger">
                    <span></span>
                </div>
            </div>
        </div>
    </nav>
</header> 

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

    <!-- Footer -->
    <footer>
    <div class="container">
        <div class="footer">
            <div class="footer_item"> <a href="#"> AVD Company 2022</a> </div>
        </div>    
    </div>
</footer> 

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>