<!DOCTYPE html>
<html>
<head>
<title>News</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body >

<div>


<h2><?= esc($title) ?></h2>



<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><b><?= esc($news_item['title']) ?></b></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><u><a href="/lab3/ci4/public/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></u></p>
        <!-- <p><u><a href="/~addeguzman2/lab3/ci4/public/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></u></p> -->

    <?php endforeach ?>


<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>

</div>

</body>
</html>
