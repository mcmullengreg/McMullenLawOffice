<menu class="sidebar page">
<?php 
	if(!$post->post_parent){
		$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
	}else{
		if($post->ancestors) {
			$ancestors = end($post->ancestors);
			$children = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0");
		}
	}
	if ($children) : 
?>
	<ul> 
		<?php echo $children; ?>
	</ul>
<?php 
	endif; 
?>
</menu>