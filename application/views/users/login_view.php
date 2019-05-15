
<!-- add from in helper in autoload.php -->
<?php if($this->session->userdata('logged_in')){ ?>
<h2>Logout</h2>
<?php echo "you are loggedin as".$this->session->userdata('username'); ?>
<?php $attribute=array('id'=>'form1', 'class'=>'form_horz1'); ?>
<?php echo form_open('user/logout',$attribute) ?>
<input type="submit" name="logout" value="logout" class="btn btn-primary">

<?php echo form_close(); ?>
<?php }  
else{
?>
<h2>Login view</h2>
<?php if($this->session->flashdata('errors')){ ?>
<?php echo $this->session->flashdata('errors'); ?>
<?php } ?>
<?php $attribute=array('id'=>'form', 'class'=>'form_horz'); ?>
<?php echo form_open('user/login',$attribute) ?>
	<label>UserName</label>
	<input type="text" name="username" class="form-control" placeholder="Enter UserName">
	<label>Password</label>
	<input type="password" name="password" class="form-control" placeholder="Enter Password">
	<label>Confirm Password</label>
	<input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password"><br/>
	<input type="submit" name="submit" value="submit" class="btn btn-primary form-control ">
<?php echo form_close(); ?>
<?php } ?>