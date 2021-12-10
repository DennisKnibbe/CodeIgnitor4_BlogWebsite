
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/postCSS.css'); ?>">

    <div class="main">
      <ul class="cards">
        <?php 
            if($post): 
                foreach ($post as $newsItem):?>
                  <li class="cards_item">
                    <div class="info">
                      <a href="/pages/allBlogs"><button>Back to Blogs</button></a>
                      <div class="info_Card">
                        <p class="card_date">Posted on: <?= date('Y-m-d', strtotime($newsItem['date'])) ?> <?= date(' h:i:sa', strtotime($newsItem['date'])) ?></p>
                        <p class="card_date">written by: <?= $newsItem['author']?></p>
                        <p class="card_date">Tags: <?= $newsItem['tag'] ?>, <?= $newsItem['tag2'] ?></p>
                      </div>
                    </div>

                    <p class="card_title"><?= $newsItem['title'] ?></p>
                    <div class="card">
                      <div class="card_image"><img src="../../app/images/<?= $newsItem['image']?>"></div>
                        <div class="card_content">
                          <p class="card_text"><?= $newsItem['body'] ?></p>
                        </div>
                    </div>
                  </li> 
                <?php endforeach ?>
            <?php else: ?>
              <p class="text-center">No posts are found</p>
            <?php endif; ?>
      </ul>
    </div>
           


  


