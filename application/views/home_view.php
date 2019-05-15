


<p class="bg-success">
<?php if($this->session->flashdata('login_success')){ ?>
<?php echo $this->session->flashdata('login_success'); ?>
<?php } ?>
</p>
<p class="bg-danger">
<?php if($this->session->flashdata('password_incorrect')){ ?>
<?php echo $this->session->flashdata('password_incorrect'); ?>
<?php } ?>
</p>
<h1>hello this is home view test</h1>


