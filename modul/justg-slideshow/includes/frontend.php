<?php 
$columns    = count($settings->slider_columns);
$control    = $settings->control;
$indicators = $settings->indicators;
$transition = $settings->transition;
?>

<div class="justg-slideshow justg-slideshow-<?php echo $id; ?>">
	
	<div id="jgslideshow-<?php echo $id; ?>" class="carousel slide <?= $transition=='fade'?'carousel-fade':'';?>" data-ride="carousel">
	    
        <div class="carousel-inner">
        	<?php
        	for ($i=0; $i < count($settings->slider_columns); $i++) {
        		if(!is_object($settings->slider_columns[$i])) continue;
        		$data = $settings->slider_columns[$i];
        		
        		$img        = isset($data->img)?'<img src="'.wp_get_attachment_image_url( $data->img, 'full').'" />':'';
        		$link       = isset($data->link)?$data->link:'';
        		$caption    = isset($data->caption)?$data->caption:'';
        		
        	?>
                <div class="carousel-item <?= $i==0?'active':'';?>">
                    <div class="justg-img">
                        <?php echo $link?'<a class="justg-link" href="'.$link.'" />':''; ?>
                        <?php echo $img; ?>
                        <?php echo $link?'</a>':''; ?>
                    </div>
                    <div class="carousel-caption d-none d-md-block justg-caption"><?php echo $caption; ?></div>
                </div>
    	    <?php } ?>
        </div>
      
        <?php if($control=='yes'): ?>
            <a class="carousel-control-prev" href="#jgslideshow-<?php echo $id; ?>" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#jgslideshow-<?php echo $id; ?>" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        <?php endif; ?>
        
        <?php if($indicators=='yes'): ?>
            <ol class="carousel-indicators">
                <?php for ($x=0; $x < $columns; $x++) { ?>
                    <li data-target="#jgslideshow-<?php echo $id; ?>" data-slide-to="<?= $x;?>" class="<?= $x==0?'active':'';?>"></li>
                <?php } ?>
            </ol>
        <?php endif; ?>
      
    </div>
	
</div>
