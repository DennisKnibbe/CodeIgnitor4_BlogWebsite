
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/allBlogsCSS.css'); ?>">

    <h1>All Blogs</h1>
    <div class="main">
      <ul class="cards">
        <?php 
            if($slug): 
                foreach ($slug as $newsItem):?>
                        <li class="cards_item">
                        <div class="card">
                        <div class="card_image"><img src="../../app/images/<?= $newsItem['image']?>"></div>
                            <div class="card_content">
                            <h2 class="card_title"><?= $newsItem['title'] ?></h2>
                            <p class="card_text">Posted on: <?= date('Y-m-d', strtotime($newsItem['date'])) ?> <?= date(' h:i:sa', strtotime($newsItem['date'])) ?></p>
                            <p class="card_text">Tags: <?= $newsItem['tag'] ?> <?= $newsItem['tag2'] ?></p>
                            <p class="card_text">written by: <?= $newsItem['author']?></p>
                            <p class="card_text"><?= $newsItem['body'] ?></p>
                            <a href="/blog/post/<?= $newsItem['id']?>"><button class="btn">Read More</button></a>
                            </div>
                        </div>
                        </li>
                    
                <?php endforeach ?>
            <?php else: ?>
                    <p style="text-align:center">No posts are found</p>
            <?php endif; ?>
      </ul>
    </div>

    <?= $pager->links() ?>


  


