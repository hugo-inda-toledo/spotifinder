<?php $this->layout = null;?>

<?php if($tracks['tracks']['total'] != 0):?>

	<div class="row">
	    <div class="col-lg-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <?php echo __('Showing all results');?>
	            </div>
	            <div class="panel-body">
	                <div class="row">
	                    <div class="col-lg-12">
	                    	<?php foreach($tracks['tracks']['items'] as $item):?>
	                    		<div class="row">
								    <div class="col-lg-12">
								        <div class="panel panel-success">
								            <div class="panel-heading">

								            	<?php if(count($item['artists']) == 1):?>
								            		<?php echo $item['name'].' '.__('by').' '.$this->Html->tag('strong', $item['artists'][0]['name']);?>
								            	<?php else:?>

								            		<?php $artists = '';?>

								            		<?php foreach($item['artists'] as $artist):?>
									            		<?php $artists.= $artist['name'].', '; ?>
									            	<?php endforeach;?>

									            	<?php $artists = substr($artists, 0, -2);?>

									            	<?php echo $item['name'].' '.__('by').' '.$this->Html->tag('strong', $artists);?>
								            	<?php endif;?>
								                
								            </div>
								            <div class="panel-body">
								                <div class="row">
								                    <div class="col-lg-3">
								                    <?php echo $this->Html->link($this->Html->image($item['album']['images'][0]['url'], array('class' => 'img-responsive album-image')), $item['album']['external_urls']['spotify'], array('escape' => false, 'target' => '_blank'));?>
								                    </div>
								                    <div class="col-lg-5">
								                    	<?php //echo $this->Html->para(null, __('Song from the album %s', $item['album']['name'])); ?>

								                    	<div class="panel panel-default">
															<div class="panel-body">
																<?php echo $this->Html->tag('h3', __('Information'));?>
																<br>

																<ul>
																	<li>
																		<?php if(count($item['artists']) == 1):?>

														            		<?php echo __('Artist').': '.$item['artists'][0]['name'];?>

														            	<?php else:?>

														            		<?php echo __('Artists').': '.$artists;?>

														            	<?php endif;?>
																	</li>
																	<li>
																		<?php echo __('Album').': '.$item['album']['name'];?>
																	</li>
																	<li>
																		<?php echo __('Song name').': '.$item['name'];?>
																	</li>
																</ul>
															</div>
														</div>

								                    </div>
								                    <div class="col-lg-4">
								                    	<?php echo $this->Html->tag('iframe', '', array('src' => 'https://embed.spotify.com/?uri='.$item['uri'].'&theme=white', 'width' => 300, 'height' => 80, 'frameborder' => 0, 'allowtransparency' => 'true')); ?>
								                    </div>
								                </div>
								            </div>
								        </div>
								    </div>
								</div>
	                    	<?php endforeach;?>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

<?php else:?>

	<?php
		echo $this->Html->div('row',
			$this->Html->div('col-lg-12',
				$this->Html->tag('h3', __('No matches found, please try again with another word').'...', array('class' => 'text-center'))
			)
		);
	?>
<?php endif;?>