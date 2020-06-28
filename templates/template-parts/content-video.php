<?php
$post_id     = $post->ID;
$video_order = get_post_meta( $post_id, 'order', true );
$video_time  = get_post_meta( $post_id, 'video_duration', true );
$video_url   = get_post_meta( $post_id, 'video_url', true );
?>

<div class="col-sm-6 post-item">
    <div class="card">
        <img src="<?php the_post_thumbnail_url('medium_large');?>" class="card-img-top" alt="<?php the_title();?>">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <span class="card-title"><?php the_title();?></span>
                </div>
                <?php if($video_time){ ?>
                <div class="col-md-auto">
                    <?php echo $video_time;?>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <?php if($video_url){ ?>
                <div class="col">
                    <a href="<?php echo $video_url;?>" target="_blank">Ссылка</a>
                </div>
                <?php } ?>
                <?php if($video_order){ ?>
                    <div class="col-md-auto">
                        <?php echo $video_order;?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>