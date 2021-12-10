
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/createCSS.css'); ?>">



<div class="errors">
    <?php if($_POST): ?>
            <?=\Config\Services::Validation()->listErrors(); ?>
        <?php endif; ?>
</div>
<li class="cards_item">
  <div class="card">
    <h1>Create Blog</h1>
    <form class="" action="/blog/create" method="post"  enctype="multipart/form-data">      
      <div class="field-group">
            <label class="label" for="author"><strong>Author:</strong></label>
        <div class="field">
            <input type="text" class="form-control" name="author" id="author" value="" placeholder="author">
        </div>
      </div>

      <div class="field-group">
            <label class="label" for="title"><strong>Title:</strong></label>
        <div class="field">
            <input type="text" class="form-control" name="title" id="title" value="" placeholder="Title">
        </div>
      </div>

      <div class="field-group">
            <label class="label" for="tag1"><strong>tag1:</strong></label>
        <div class="field">
            <input type="text" class="form-control" name="tag" id="tag" value="" placeholder="Tag1"> 
        </div>
      </div>

      <div class="field-group">
            <label class="label" for="tag2"><strong>tag2:</strong></label>
        <div class="field">
            <input type="text" class="form-control" name="tag2" id="tag2" value="" placeholder="Tag2">
        </div>
      </div>

      <div class="field-group">
            <label class="label" for="image">Select image</label>         
        <div class="field">
            <input type="file" id="image" name="image">
        </div>
      </div>

      <div class="field-group">
            <label class="label" for="body"><strong>Body:</strong></label>
        <div class="field">
            <textarea name="body" id="body"></textarea>
        </div>
      </div>

      <button type="submit">CREATE BLOG</button>

    </form>
  </div>
</li>

