<?php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
$this->title = 'Electron';
?>

<!--  Block user info   -->
<div class="row">
    <div class="col-md-7 col-sm-12 order-2 order-sm-2 order-md-1 mt-4">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="d-inline-block mb-1">Электрон Вебов</h4>
                <p class="text-muted el-change-status" data-toggle="collapse" href="#collapseStatus" role="button" aria-expanded="false" aria-controls="collapseStatus">
                    изменить статус
                </p>
                <div class="collapse" id="collapseStatus">
                    <div class="card card-body el-user-status-card">
                        <form class="form-inline" id="user-status-form">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control el-user-status-form" id="user-status-input" placeholder="введите статус">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" id="btn-user-status" class="btn btn-primary  el-user-status-form mx-sm-3 mb-2" data-toggle="collapse" href="#collapseStatus" aria-controls="collapseStatus">
                                    сохранить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-4 el-user-info">
                        <p class="text-muted">День рождения:</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-primary">23 сентябрть 1988 г.</p>
                    </div>
                    <div class="col-md-4 el-user-info">
                        <p class="text-muted">Семейное положение:</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-primary">Женат</p>
                    </div>
                    <div class="col-md-4 el-user-info">
                        <p class="text-muted">Образование:</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-primary">ИжГТУ им.МТ Калашникова</p>
                    </div>
                    <div class="col-md-4 el-user-info">
                        <p class="text-muted">Веб сайт:</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-primary">www.web-electron.ru</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted">Немного о себе:</p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque dolor error excepturi ipsam iusto, laborum quis ut? Alias at dolore eos iusto molestiae possimus quaerat quod similique voluptas voluptate.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-4 offset-md-1 col-sm-12 order-1 order-sm-1 order-md-2 mt-4">
        <div class="card shadow">
            <div class="text-center">
                <img src="<?= Yii::$app->request->baseUrl;?>/static/img/avatar.png" class="el-avatar">
            </div>
        </div>
    </div>
</div>

<!--  Block user photos   -->
<div class="row mt-4">
    <div class="col-md-12">
        <div class="d-block d-md-none">
            <strong class="d-inline-block mb-2">Фотографии Электрона</strong>

            <section class="el-photo-card">
                <div class="el-photo-card--content"><img src="<?= Yii::$app->request->baseUrl;?>/static/img/photo_1.jpg" alt=""></div>
                <div class="el-photo-card--content"><img src="<?= Yii::$app->request->baseUrl;?>/static/img/photo_2.jpg" alt=""></div>
                <div class="el-photo-card--content"><img src="<?= Yii::$app->request->baseUrl;?>/static/img/photo_3.jpg" alt=""></div>
                <div class="el-photo-card--content"><img src="<?= Yii::$app->request->baseUrl;?>/static/img/photo_4.jpg" alt=""></div>
            </section>
        </div>
        <div class="card shadow d-none d-md-block">
            <div class="card-body">
                <strong class="d-inline-block mb-2">Фотографии Электрона</strong>
                <div class="row">
                        <div class="col-md-3">
                            <img src="<?= Yii::$app->request->baseUrl;?>/static/img/photo_1.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-md-3">
                            <img src="<?= Yii::$app->request->baseUrl;?>/static/img/photo_2.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-md-3">
                            <img src="<?= Yii::$app->request->baseUrl;?>/static/img/photo_3.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-md-3">
                            <img src="<?= Yii::$app->request->baseUrl;?>/static/img/photo_4.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Block user comments   -->
<div class="row mt-4" id="block-comment">
    <div class="col-md-12">
        <strong class="d-inline-block mb-2">Записи в вашей стене</strong>
        <?php \yii\widgets\Pjax::begin(['id' => 'el-comments']) ?>
        <?php if (!empty($comments)):?>
                <?php foreach($comments as $comment):?>
                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <div class="el-comment-block">
                                <img src="<?= Yii::$app->request->baseUrl;?>/static/img/deadpool.png" width="55" height="55" class="rounded-circle el-comment-avatar">
                                <span class="text-primary el-comment-username"><?=$comment->username;?></span>
                                <span class="text-muted"><?= Yii::$app->formatter->asTime($comment->time);?></span>
                            </div>
                            <div class="el-comment-text">
                                <p class="mt-3">
                                    <?=$comment->text;?>
                                </p>

                                <p class="text-right text-primary comment-delete" data-comment-id="<?=$comment->id;?>" style="cursor: pointer">
                                    Удалить
                                </p>
                            </div>
                        </div>
                    </div>
                 <?php endforeach;?>
        <?php else:?>
            <p class="text-primary">Не найдено записей...</p>
        <?php endif;?>
        <?php \yii\widgets\Pjax::end() ?>
    </div>
</div>

<!--  Block form comments   -->
<div class="row mt-4">
    <div class="col-md-12">
        <strong class="d-inline-block mb-2">Добавить запись</strong>
        <?php \yii\widgets\Pjax::begin(['id' => 'el-new-comment']) ?>
            <?php $form = ActiveForm::begin(['options' => [
                'data-pjax' => true,
            ]]); ?>
                <?= $form->field($model, 'username')->textInput(['maxlength' => true])->input('text',['placeholder' => "Ваше имя"])->label(false) ?>
                <?= $form->field($model, 'text')->textarea(['placeholder' => "Текст записи", 'rows' => '6'])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton( 'Отправить', ['class' => 'btn btn-primary']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        <?php \yii\widgets\Pjax::end() ?>
    </div>
</div>

<?php

$commentDeleteUrl = \yii\helpers\Url::to('site/delete');
$this->registerJs(
    "
    
    $('document').ready(function(){
            $('#el-new-comment').on('pjax:end', function() {
            $.pjax.reload({container:'#el-comments'});
        });
    });
   
    $('body').on('click','.comment-delete', function() {
        var commentId = $(this).attr('data-comment-id');
    
        $.ajax({
            type: 'POST',
            url: '$commentDeleteUrl',
            data: {id: commentId}
        }).done(function() {
            $.pjax.reload({container: '#el-comments'});
        });
    });
        "
);
?>
