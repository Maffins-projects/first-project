<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Removals on time every time</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
  echo $this->Html->meta('icon');
  echo $this->Html->css('bootstrap-select.min');
  echo $this->Html->css('bootstrap');
  echo $this->Html->css('bootstrap.min');
  echo $this->Html->css('bootstrap.icon-large.min');
  echo $this->Html->css('admin');
  echo $this->Html->css('bootstrap-datepicker.min');
  echo $this->Html->css('bootstrap-datepicker.standalone.min');
  echo $this->fetch('meta');
  echo $this->Html->script('jquery-1.11.3.min');
  echo $this->Html->script('bootstrap.min');  
  echo $this->Html->script('jsDatePick.jquery.min.1.3') ;
  echo $this->Html->script('bootstrap-datepicker.min') ;
?>

?> 
</head>
<body>
<div class="shell">
  <div class="borde">
    <div id="header">
      <h1 id="logo"><a href="#" class="notext">bgsdfgeSMART</a></h1>
      <div class="socials right">
        <ul>
          <li>ADMIN SECTION</li>
        </ul>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
    <div id="navigation">
      <ul>
        <li><a href="/removal-leads.co.za/admin/Companies/index">Companies</a></li>
        <li><a href="/removal-leads.co.za/admin/Leadsentlogs/index">Leads</a></li>
        <li><a href="/removal-leads.co.za/admin/Companies/setleads">Set Leads</a></li>
        <li><a href="/removal-leads.co.za/admin/Leadsentlogs/reports">Reports</a></li>
        <li><a href="/removal-leads.co.za/admin/Leadsentlogs/payments">Payments</a></li>
        <li>
          <?php 
            $user = $this->Session->read('Admins');    
            echo "Hello <b>".$user[0]['admins']['fname']." ".$user[0]['admins']['lname']."</b> - <a style='color:black;display:inline' href='/removal-leads.co.za/admin/admins/logout'>logout</a>";
           ?>          
        </li>
      </ul>
      <div class="cl">&nbsp;</div>
    </div>
      <div id="main">
      <div id="content" class="left">
       <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>
      </div>

  </div>
  </div>
  <div id="footer">
    <p class="left">Copyright &copy; 2015, Best Removals Company</p>
    <div class="cl"></div>
    <?php echo $this->element('sql_dump'); ?>  
  </div>
  <script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    })    
  </script>   
</div>
</body>
</html>
