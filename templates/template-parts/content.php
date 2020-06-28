<div class="col-sm-6  post-item">
    <div class="card">
        <img src="<?php the_post_thumbnail_url('medium_large');?>" class="card-img-top" alt="<?php the_title();?>">
        <div class="card-body">
            <span class="card-title"><?php the_title();?></span>
            <a href="<?php the_permalink();?>" class="btn btn-primary">Читать далее</a>
        </div>
    </div>
</div>