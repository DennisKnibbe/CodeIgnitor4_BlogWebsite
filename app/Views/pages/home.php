
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/homeCSS.css'); ?>">




<div class="success">
  <?php
    $session = \Config\Services::session();
    ?>
    <?php if(isset($session->success)): ?>
      <div style="text-align:center; font-size: 24px; background-color: #28A745">
          <?=$session->success ?>
      </div>
    <?php endif; ?>
  </div>


  <div class="homePageTitle">Latest Blog Posts</div>
  <div class="blog-section">
    <?php if($news): 
        $limit = 5;
          foreach ($news as $newsItem): 
            if($limit != 0): ?>
              <div class="blog-card">
                  <div class="meta">
                    <div class="photo" style="background-image: url(../app/images/<?= $newsItem['image']?>)"></div>
                      <ul class="details">
                        <li class="author">Author: <?= $newsItem['author']?></li>
                        <li class="date">Date: <?= date('Y-m-d', strtotime($newsItem['date'])) ?> <?= date(' h:i:sa', strtotime($newsItem['date'])) ?></li>
                        <li class="tags">
                          <ul>
                            <li>Tags:</li>
                            <li><?= $newsItem['tag']?></li>
                            <li><?= $newsItem['tag2']?></li>
                          </ul>
                        </li>
                      </ul>
                </div>
                <div class="description">
                  <h1><?= $newsItem['title'] ?></h1>
                  <p><?= $newsItem['body'] ?> </p>
                  <p class="read-more">
                  <a href="/blog/post/<?= $newsItem['id']?>">Read More</a>
                  </p>
                </div>
              </div>
 

            <?php $limit = $limit -1; ?>
          <?php endif; ?>
        <?php endforeach ?>
    <?php else: ?>
          <p class="text-center">No posts are found</p>
    <?php endif; ?>    
  </div>

