	<?php 
		$counter =0;
		
			$data = new wp_Query(array(
			'post_type' => 'custom-posttype',
			'posts_per_page' => -1,
			'order' => 'ASC',
		));

		 while( $data -> have_posts() ) : $data -> the_post();
	?>
	
	<?php 

	  ++$counter;
	  if($counter == 3) {
		$lastcolum = 'lastcolumn';
		$clearfixdiv = '<div class="clearfix"></div>';
		$counter = 0;
	  } else { $lastcolum = '';$clearfixdiv = '';}
	  
	?>
	
	<?php 
	//every three id than add the clearfix div and another lastcolum class.
	echo $clearfixdiv; 
	?>
	<div class="grid3column <?php echo $lastcolum; ?>">
		<h2><?php the_title(); ?></h2>
	</div>

	
	
	<?php endwhile; ?>