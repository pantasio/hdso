<div class="servicebox">
    <a href="<?php print $node_url; ?>">
        <div class="service-icon">
            <i class="fa <?php print render($content['field_icon']); ?> fa-4x"></i>
        </div><!-- end service icon -->
    </a>
    <div class="title">
        <h3><?php echo $title; ?></h3>
    </div><!-- end title -->
    <?php print $node->body['und'][0]['summary']; ?>
    <a class="readmore" href="<?php echo $node_url; ?>">Read more...</a>
</div>