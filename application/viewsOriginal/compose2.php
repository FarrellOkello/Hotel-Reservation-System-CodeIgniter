<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to bookersafrica</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/foundation.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css');?>">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
        background-color:grey;
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
<h1><img src="<?php echo base_url('assets/img/fronthotels.jpg');?>"
	height=35 width= 100>
	FRONT HOTELS Property owner</h1>
    	<div id="body">	
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
              <li class="dropdown">
                  <a href="<?php echo base_url('dashboard/propertyOwner');?>" >Home</a>               
                </li>               
                <li class="dropdown">           
                </li>
                 <li class="dropdown">
                  <a href="<?php echo base_url('dashboard/reservation');?>">Reservations</a>
                </li>			
				<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/mail');?>">Mail</a>
                </li>		
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account</a>
                  <ul class="dropdown-menu" role="menu">
					<li class="divider"></li>
                    <li><a href="accountsettings">Account settings</a></li>
					<li class="divider"></li>                    
					<li class="divider"></li>
                    <li><a href="<?php echo base_url('index.php/dashboard/POlogout');?>">Logout</a></li>
                    <li class="divider"></li>
                   </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>
            </div>

<br/><hr/>
<div class="side-nav">
<?php $username = $this->session->userdata('username')?>
<?php $propertyownerid = $this->session->userdata('userid')?>
<h1 class="greeting">Welcome      <?php echo $username;?></h1>
</div>
<!-- <?php $this->load->helper('url'); ?> -->
<?php if(count($message)>0):?>
<table width="100%" border="1" style="border-collapse:collapse; border-color:#CCCCCC;
" cellpadding="4" cellspacing="4">
<tr>
    <td style="padding:10px;" background-color="blue">
		<a href="<?php echo site_url()."dashboard/mail"?>">Inbox</a> &nbsp;&nbsp;&nbsp;
		<a href="<?php echo site_url()."dashboard/messages/".MSG_UNREAD?>">Unread</a> &nbsp;&nbsp;&nbsp; 
		<a href="<?php echo site_url()."dashboard/messages/".MSG_SENT?>">Sent</a> &nbsp;&nbsp;&nbsp;
		<a href="<?php echo site_url()."dashboard/messages/".MSG_DELETED?>">Trashed</a> &nbsp;&nbsp;&nbsp;
		<a href="<?php echo site_url()."dashboard/send"?>">Compose</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td><td></td><td></td><td></td><td></td>
	</tr>
    <?php endif;?>
<?php
	$this->load->library('session');
$MAX_INPUT_LENGTHS = $this->config->item('$MAX_INPUT_LENGTHS', 'pm');
$recipients = array(
	'name'	=> PM_RECIPIENTS,
	'id'	=> PM_RECIPIENTS,
	'value' => set_value(PM_RECIPIENTS, $message[PM_RECIPIENTS]),
	'maxlength'	=> $MAX_INPUT_LENGTHS[PM_RECIPIENTS], 
	'size'	=> 40,
);
$subject = array(
	'name'	=> TF_PM_SUBJECT,
	'id'	=> TF_PM_SUBJECT,
	'value' => set_value(TF_PM_SUBJECT, $message[TF_PM_SUBJECT]),
	'maxlength'	=> $MAX_INPUT_LENGTHS[TF_PM_SUBJECT], 
	'size'	=> 40
);
$body = array(
	'name'	=> TF_PM_BODY,
	'id'	=> TF_PM_BODY,
	'value' => set_value(TF_PM_BODY, $message[TF_PM_BODY]),
	'cols'	=> 80,
	'rows'	=> 5
);
?>

<?php echo form_open($this->uri->uri_string()); ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="5%"><?php echo form_label('To', $recipients['id']); ?></td>
		<td width="33%"><?php echo form_input($recipients); ?></td>
		<td><?php echo form_error($recipients['name']); ?></td>	
	</tr>	
	<tr>
		<td><?php echo form_label('Subject', $subject['id']); ?></td>
		<td><?php echo form_input($subject); ?></td>
		<td><?php echo form_error($subject['name']); ?></td>	
	</tr>	
	<tr>
		<td><?php echo form_label('Message', $body['id']); ?></td>
		<td><?php echo form_textarea($body); ?></td>
		<td><?php echo form_error($body['name']); ?></td>	
	</tr>
	<tr>
	<td colspan=2 align="center" valign="top" style="background:#F2F2F2; padding:4px;">
		<label>
			<!-- DO NOT CHANGE BUTTON NAME, NEEDED FOR CONTROLLER "send" -->
			<input type="submit" name="btnSend" id="btnSend" class='hollow button secondary textbox' value="Send" />
		</label>
	</td>
	<td></td>
	</tr>	
	<tr>
	<td align="left" valign="top" style="font-weight:bold; background:#F2F2F2; padding:4px;">
	</td>
	<td align="left" valign="top" style="font-weight:bold; background:#F2F2F2; padding:4px;">
	<?php
	if(isset($status)) echo $status.' ';
	if($this->session->flashdata('status')) echo $this->session->flashdata('status').' ';
	if(!$found_recipients)
	{
		foreach($suggestions as $original => $suggestion) 
		{
			echo 'Did you mean <font color="#00CC00">'.$suggestion.'</font> for <font color="#CC0000">'.$original.'</font> ?'; 
			echo '<br />';
		}
	} ?>
	</td>
	<td></td>
	</tr>
</table>
<?php echo form_close(); ?>


<!-- </hr> -->

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>Oxy</strong>' : '' ?></p>
</div>
<script src="<?php echo base_url('plugins/jQuery/jQuery-2.1.4.min.js');?>"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<script src="<?php echo base_url('plugins/fastclick/fastclick.min.js');?>"></script>
<script src="<?php echo base_url('dist/js/app.min.js');?>"></script>
<script src="<?php echo base_url('dist/js/demo.js');?>"></script>
<!-- <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
    <!-- Bootstrap 3.3.5 -->
    <!-- <script src="../../bootstrap/js/bootstrap.min.js"></script> -->
    <!-- SlimScroll -->
    <!-- <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
    <!-- FastClick -->
    <!-- <script src="../../plugins/fastclick/fastclick.min.js"></script> -->
    <!-- AdminLTE App -->
    <!-- <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="../../dist/js/demo.js"></script> --> 

</body>
</html>