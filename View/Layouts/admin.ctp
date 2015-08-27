<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Removals on time every time</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
  echo $this->Html->meta('icon');

  echo $this->Html->css('admin');
  echo $this->Html->css('jsDatePick_ltr.min');

  echo $this->fetch('meta');
  echo $this->Html->script('jquery-1.4.2.min');
  //echo $this->Html->script('jquery.jcarousel.pack.min');
 // echo $this->Html->script('jquery.uniform.min');
  
  echo $this->Html->script('jsDatePick.jquery.min.1.3') ;

?>
<script type="text/javascript" charset="utf-8">
  $(function(){
   // $("input:checkbox, input:radio, input:file, select").uniform();
  });
</script>
<script type="text/javascript">
<?php
  if($this->params['controller'] == "Loads" && $this->action == "add"):
?> 
  window.onload = function(){
    new JsDatePick({
      useMode:2,
      target:"LoadMoveDate",
      dateFormat:"%Y-%m-%d"
      /*selectedDate:{        This is an example of what the full configuration offers.
        day:5,            For full documentation about these settings please see the full version of the code.
        month:9,
        year:2006
      },
      yearsRange:[1978,2020],
      limitToToday:false,
      cellColorScheme:"beige",
      dateFormat:"%m-%d-%Y",
      imgPath:"img/",
      weekStartDay:1*/
    }); 
  };
<?php 
  endif;
?>  
/****************************************************************************************************************************/
<?php       
  if($this->params['controller'] == "Shuttles" && $this->action == "add"):
?>   
  window.onload = function(){
    new JsDatePick({
      useMode:2,
      target:"ShuttlePickupDatetime",
      dateFormat:"%Y-%m-%d"
      /*selectedDate:{        This is an example of what the full configuration offers.
        day:5,            For full documentation about these settings please see the full version of the code.
        month:9,
        year:2006
      },
      yearsRange:[1978,2020],
      limitToToday:false,
      cellColorScheme:"beige",
      dateFormat:"%m-%d-%Y",
      imgPath:"img/",
      weekStartDay:1*/
    });
  };

/****************************************************************************************************************************/
 
  window.onload = function(){
    new JsDatePick({
      useMode:2,
      target:"ShuttleToDatetime",
      dateFormat:"%Y-%m-%d"
      /*selectedDate:{        This is an example of what the full configuration offers.
        day:5,            For full documentation about these settings please see the full version of the code.
        month:9,
        year:2006
      },
      yearsRange:[1978,2020],
      limitToToday:false,
      cellColorScheme:"beige",
      dateFormat:"%m-%d-%Y",
      imgPath:"img/",
      weekStartDay:1*/
    });
  };
<?php 
  endif;
?>
/****************************************************************************************************************************/
<?php
  if($this->params['controller'] == "Cabs" && $this->action == "add"):
?>   
  window.onload = function(){
    new JsDatePick({
      useMode:2,
      target:"cabToDatetime",
      dateFormat:"%Y-%m-%d"
      /*selectedDate:{        This is an example of what the full configuration offers.
        day:5,            For full documentation about these settings please see the full version of the code.
        month:9,
        year:2006
      },
      yearsRange:[1978,2020],
      limitToToday:false,
      cellColorScheme:"beige",
      dateFormat:"%m-%d-%Y",
      imgPath:"img/",
      weekStartDay:1*/
    });
 
 new JsDatePick({
      useMode:2,
      target:"cabPickupDatetime",
      dateFormat:"%Y-%m-%d"
      /*selectedDate:{        This is an example of what the full configuration offers.
        day:5,            For full documentation about these settings please see the full version of the code.
        month:9,
        year:2006
      },
      yearsRange:[1978,2020],
      limitToToday:false,
      cellColorScheme:"beige",
      dateFormat:"%m-%d-%Y",
      imgPath:"img/",
      weekStartDay:1*/
    });    
  };
<?php
 endif;
?>
</script>
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
        <li><a href="/removal-leads.co.za/admin/Companies/index">Clients</a></li>
        <li><a href="/removal-leads.co.za/admin/Leadsentlogs/index">Leads</a></li>
        <li><a href="/removal-leads.co.za/admin/Campaigns/index">Campains</a></li>
        <li><a href="/removal-leads.co.za/admin/Loads/index">Loads</a></li>
        <li><a href="/removal-leads.co.za/admin/Cabs/index">Cabs</a></li>
        <li><a href="/removal-leads.co.za/admin/Shuttles/index">Shuttles</a></li>
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
</div>
</body>
</html>
