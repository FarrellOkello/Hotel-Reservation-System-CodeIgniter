<div class="row">
    <ul class="gallery">
 <?php if(count($files)):?>
<?php foreach($files as $file):?>    
        <li class="item">
            <img src="<?php echo $file->photo_url;?>" width="30" height="80">        
        </li>
<?php endforeach;?>
<?php else:?>
 <p>Image(s) not found.....</p>
<?php endif;?>
    </ul>
</div>
<!-- display status message -->
<?php echo form_open_multipart('dashboard/gallery');?>
<?php $userid = $this->session->userdata('userid')?>
<?php $hotel_id=$hotel->Property_id;?> 
<?php $propertyName =$hotel->propertyName;?>
 <?php $hotel->propertyName;?> 
 <?php  $email=$hotel->email;?> 
<?php $data = array('property_id'=>$hotel_id, 'propertyOwnerid'=>$userid,
'propertyOEmail'=>$email,
'propertyName'=>$propertyName  );  ?>
<?php echo form_hidden($data)?>
<p><?php echo $this->session->flashdata('statusMsg'); ?></p>

<!-- file upload form -->
    <div class="form-group">
        <label>Choose Files</label>
        <input type="file" name="files[]" multiple/>
    </div>
    <div class="form-group">
        <input type="submit" name="fileSubmit" value="UPLOAD"/>
    </div>
</form>