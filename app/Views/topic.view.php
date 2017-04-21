<h1>
    <a href="/section/<?= $data['section']->getSlug() ?>">
        <?= $data['section']->getTitle() ?></a>
    >
    <?= $data['topic']->getTitle() ?>
</h1>

<form method='post'>
    <textarea type="text" cols="30" rows="3" name='form[post]' placeholder="Повідомлення"></textarea>
    <button type="submit">Додати повідомлення</button>
</form>

<hr>

<h2>Повідомлення:</h2>

<?php foreach( $data['posts'] as $post ) { ?>

    <?=$post->getText() ?>
    <br>
    <small><?=$post->getCreated_at() ?></small>

    <br>
    <br>

<?php } ?>
