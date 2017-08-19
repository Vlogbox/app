 <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle" aria-hidden="true"></i></span></button>
    <h3 class="modal-title" id="myModalLabel">Edit Video</h3>
</div>
<?= 
	$this->Form->create($video, [
		'type' => 'file',
		'url' => ['action' => 'edit',base64_encode($video->id)],
        'id' => 'edit-video-form'

	]) 
?>

<div class="modal-body">
    <div class="form-group">
        <label>Upload Video</label>
        <?= 
        	$this->Form->input('url',[
        		'type' => 'file',
        		'class' => "form-control input-lg",
        		'label' => false,
                
        	]) 
        ?>
    </div>
    <div class="form-group">
        <label>Video Name</label>
        <?= 
        	$this->Form->input('name',[
        		'class' => "form-control input-lg",
        		'label' => false
        	]) 
        ?>
    </div>
    <div class="form-group">
        <label>Category</label>
        <?= 
        	$this->Form->input('category_id',[
        		'options' => $categories,
        		'class' => "form-control input-lg",
        		'label' => false
        	]) 
        ?>
    </div>
    <div class="form-group">
        <label>Video Description</label>
        <?= 
        	$this->Form->input('description',[
        		'class' => "form-control input-lg",
        		'label' => false
        	]) 
        ?>
    </div>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-orange">Save</button>
</div>
<?= $this->Form->end() ?>