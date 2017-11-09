<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Minha Empresa',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
        
    ]);
   
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],          
            ['label' => 'Controle de Acesso', 'visible'=>[false] ,
                'url' => ['#'],
                'template' => '<a href="{url}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
                'items' => [
                    ['label' => 'Cadastrar Menu', 'url' => ['/menu/index']],
                    ['label' => 'Cadastrar Usuário', 'url' => ['/usuario/index']],
                    ['label' => 'Cadastrar Perfil', 'url' => ['/perfil/index']],
                     ['label' => 'Cadastrar Perfil Menu', 'url' => ['/perfil-pessoa/index']],
                    ['label' => 'Cadastrar Perfil Pessoa', 'url' => ['/perfil-menu/index']],
                   
                  
                ],
                'visible'=>!Yii::$app->user->isGuest,
            ],
            ['label' => 'Menu Principal',  
                'url' => ['#'],
                'template' => '<a href="{url}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
                'items' => [                 
                     
                    ['label' => 'Cadastrar Movimentos', 'url' => ['/movimento-estoque/index']],
                    ['label' => 'Cadastrar Medicação Para Animal', 'url' => ['/medicacao-animal/index']],
                    ['label' => 'Cadastrar Preço Leite', 'url' => ['/preco-leite/index']],
                    ['label' => 'Cadastrar Lote Animal', 'url' => ['/lote-animais/index']],
                    ['label' => 'Historico Coleta', 'url' => ['/historico-coleta/index']],
                    
                   
                ],
                'visible'=>!Yii::$app->user->isGuest,
            ],
            
            ['label' => 'Cadastros Básicos',  
                'url' => ['#'],
                'template' => '<a href="{url}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
                'items' => [
                    ['label' => 'Cadastrar Empresa', 'url' => ['empresa/index']],  
                    ['label' => 'Cadastrar Endereço', 'url' => ['endereco/index']],
                    ['label' => 'Cadastrar Pessoa', 'url' => ['/pessoa/index']],
                    ['label' => 'Cadastrar Raça', 'url' => ['raca/index']],
                    ['label' => 'Cadastrar Animal', 'url' => ['animal/index']],   
                    ['label' => 'Cadastrar Medicação', 'url' => ['medicacao/index']],  
                    ['label' => 'Cadastrar Tipo Movimento', 'url' => ['tipo-movimento-estoque/index']],  
                    ['label' => 'Cadastrar Equipamento', 'url' => ['equipamento/index']],  
                ],
                'visible'=>!Yii::$app->user->isGuest,
            ],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
