<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Spotifinder</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        
        <?php 
        	echo $this->Html->div('form-group', 
        		$this->Html->tag('label', __('Find music on Spotify').'...').
        		$this->Form->input('parameter', array('type' => 'text', 'label' => false, 'required' => true, 'id' => 'query', 'class' => 'form-control'))
        		.$this->Html->para('help-block', '', array('id' => 'search_block_error'))
        	); 
       	?>

       	<?php echo $this->Form->button($this->Html->tag('i', '', array('class' => 'fa fa-search')).' '.__('Search'), array('type' => 'button', 'class' => 'btn btn-default', 'onclick' => 'Javascript:doSearch();')); ?>


    </div>
</div>

<br>

<div id="results"></div>