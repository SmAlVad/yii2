<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Content</h2>
                <p><a class="btn btn-lg btn-success" href="<?= Url::to(["news/subscribe"]) ?>">Подписаться на рассылку</a></p>
            </div>
        </div>

    </div>
</div>
