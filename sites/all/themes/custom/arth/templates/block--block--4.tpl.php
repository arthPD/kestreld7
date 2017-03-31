<?php
	$type = "projects"; 
	$nodes = node_load_multiple(array(), array('type' => $type));
?>
<!-- <script>console.log(< ?php echo json_encode($nodes[4]); ?>)</script>
< ?php print render($nodes[4]->title) ?>
<img src="< ?php print file_create_url($nodes[4]->field_image[LANGUAGE_NONE][0]['uri']); ?>" alt="" width='100' height='100'>
< ?php print render($nodes[4]->body[LANGUAGE_NONE][0]['value']) ?>
 -->
 <div class="row">
 	<div class="col-md-6">
 		<?php
			$ctr = 0;
			foreach($nodes as $n){
				echo $n->title;
				$pic = file_create_url($n->field_image[LANGUAGE_NONE][0]['uri']);
				echo "<img src='$pic' class='img-thumbnail' style='width: 250px; height: 300px'>";
				//print render($n->body[LANGUAGE_NONE][0]['value']);
				if($ctr == 2){
					break;
				}
				$ctr++;
			}
		?>
 	</div>
 	<div class="col-md-6">
 		
 	</div>
 </div>