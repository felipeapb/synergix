<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Synergix - Painel Administrativo</title>
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <span style="color:#fff" class="brand">Synergix - Painel Administrativo</span>
	      <ul class="nav">
	        <li <?php if($this->uri->segment(2) == 'products'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/products">Mensagens</a>
	        </li>
	      <!--  <li <?php if($this->uri->segment(2) == 'manufacturers'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/manufacturers">Manufacturers</a>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
	          <ul class="dropdown-menu">-->
	        
	        <!--   </ul>
	   </li>-->
	      </ul>
	    </div>
	  </div>
	</div>
