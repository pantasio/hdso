<?php 
	global $image_default; 
	if(isset($row->field_field_image[0])) {
		$image_default = file_create_url($row->field_field_image[0]['rendered']['#item']['uri']);
	}
?>
<div class="portfolio_item">
	<div class="entry">
		<img src="<?php print $image_default;?>" alt="" class="img-responsive">
		<div class="magnifier">
			<div class="buttons">
				<a class="st btn btn-default" rel="bookmark" href="<?php echo drupal_lookup_path('alias',"node/".$row->nid); ?>"><?php print theme_get_setting('project_text_button'); ?></a>
                <h3><?php print $row->node_title; ?></h3>
			</div><!-- end buttons -->
		</div><!-- end magnifier -->
	</div><!-- end entry -->
</div><!-- end portfolio_item -->

