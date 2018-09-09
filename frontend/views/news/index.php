<?php foreach ($news as $item): ?>

    <h1>
        <a href="<?=Yii::$app->urlManager->createUrl(["news/single", "id" => $item["id"]]);?>">
            <?=$item["title"];?>
        </a>
    </h1>

    <p><?=$item["content"];?></p>

<?php endforeach; ?>
