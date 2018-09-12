<?php /* @var $model \frontend\models\Subscribe */ ?>

<?php if ($model->hasErrors()): ?>

    <?php foreach ($model->getErrors() as $field => $errors ): ?>

        <?php foreach ($errors as $error): ?>
            <div class="alert alert-danger" role="alert">
                <?= $error; ?>
            </div>
        <?php endforeach; ?>

    <?php endforeach; ?>

<?php endif; ?>


<form method="post">
    <p>Name: </p>
    <input type="text" name="name" value="<?= ($model->name) ? $model->name : "" ?>">
    <br/><br/>

    <p>Email:</p>
    <input type="text" name="email" value="<?= ($model->email) ? $model->email : "" ?>">
    <br/><br/>

    <input type="submit">
</form>