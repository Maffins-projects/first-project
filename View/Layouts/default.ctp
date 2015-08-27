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
  echo $this->Html->css('style');
  echo $this->Html->css('jsDatePick_ltr.min');

  echo $this->fetch('meta');
  echo $this->Html->script('jquery-1.4.2.min');
  echo $this->Html->script('bootstrap.min');  
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

/****************************************************************************************************************************/
 

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
  <div class="border">
    <div id="header">
      <h1 id="logo"><a href="/removal-leads.co.za/" class="notext">Compare my move</a></h1>
      <div class="socials right">
        <ul>
          <li><a href="http://www.facebook.com/removal-leads" class="fb">Facebook</a></li>
          <li class="last"><a href="#" class="twit">Twitter</a></li>
        </ul>
        </div>
        <br style="clear: both;" />
        <div id="top-navigation">
          <ul>
            <li><a href="/removal-leads.co.za/" <?php if(!isset($which)):?> class="active"<?php endif;?>>Home</a></li>
            <li><a href="/removal-leads.co.za/Pages/howworks" <?php if(@$which == "How"):?> class="active"<?php endif;?>>How it works</a></li>
            <li><a href="/removal-leads.co.za/Pages/advisor" <?php if(@$which == "How"):?> class="active"<?php endif;?>>Move advisor</a></li>
            <li style="border-right: 0"><a href="/removal-leads.co.za/Pages/contact" <?php if(@$which == "Contact"):?> class="active"<?php endif;?>>Contact Us</a></li>
          </ul>
        </div>
      <div class="cl">&nbsp;</div>
    </div>
    <div id="navigation">       
      <ul>
        <li><a href="/removal-leads.co.za/" class="label label-primary"><h5><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Residential Moves</h5></a></li>
        <li><a href="/removal-leads.co.za/Pages/howworks" class="label label-success"><h5><span class="glyphicon glyphicon-tower" aria-hidden="true"></span>Commercial Moves</h5></a></li>
        <li><a href="/removal-leads.co.za/Pages/contact" class="label label-info"><h5><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>Internation Moves</h5></a></li>
      </ul>
      <div class="cl">&nbsp;</div>
      <div style="position: relative;left: 702px;top:-37px;-moz-border-radius: 60px;-webkit-border-radius: 60px; -khtml-border-radius: 60px; border-radius: 60px; ">
        <a href="/removal-leads.co.za/Companies/add"><img src="http://localhost/removal-leads.co.za/img/getlisted.gif" style="border: 0;" alt="Get Listed"></a>
      </div>
    </div>
      <div id="main">
      <div id="content" class="left">
       <?php echo @$this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>
      </div>

  </div>
  </div>
  <div id="footer">
  <table style="width: 980px;">
    <tr>
      <td class="footer-column" valign="top" style="width: 35%;">
        <h3 style="font-weight: bold; font-size: 16px;padding: 5px;" class="label label-info"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp;&nbsp;Why use us</h3>
        <br style="clear: both;" /> 
        <br style="clear: both;" /> 
        <ul>
         <li>No need to book online or pay a deposit.</li>
         <li>Free no-obligation quotes directly from your best local movers to compare before you book. </li>
         <li>Our verification process ensures we only have the very best removal companies in our network.</li>
         <li>We value and monitor all customer feedback to provide the best service.</li>
         <li>Save time, money and hassle. Sit back, relax and let us do the hard work for you.</li>
        </ul>
      </td>      
      <td class="footer-column" valign="top" style="padding-left: 35px;width: 40%;">
        <h3 style="font-weight: bold; font-size: 16px;padding: 5px;" class="label label-info"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;Only Verified Movers</h3>
        <br style="clear: both;" /> 
        <br style="clear: both;" /> 
       <b>Our Verification Process </b>
       <ul>
          <li>Step 1: They are a legitimate trading company</li>
          <li>Step 2: Mover has sufficient insurance in place </li>
          <li>Step 3: Positive third party feedback </li>
          <li>Step 4: A quality working website is online </li>
          <li>Step 5: Company searches carried out </li>
          <li>Step 6: Code of practice acceptance </li>
          <li>Step 7: Company has sufficient terms & conditions in place </li>
          <li>Step 8: Registered business address </li> 
        </ul>      
      </td>      
      <td class="footer-column" valign="top">
        <h3 style="font-weight: bold; font-size: 16px;padding: 5px;" class="label label-info"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;Useful links</h3>
        <br style="clear: both;" /> 
        <br style="clear: both;" /> 
        <a href="/removal-leads.co.za/Pages/sitemap">Sitemap</a> <br />
        <a href="/removal-leads.co.za/Companies/add">Become a Partner</a> <br />
        <a href="/removal-leads.co.za/Pages/verification">Verification Process</a> <br />
        <a href="/removal-leads.co.za/Pages/terms">Terms & Conditions</a> <br />
        <a href="/removal-leads.co.za/Pages/privacy">Privacy</a>  <br />
        <a href="/removal-leads.co.za/Pages/contact">Contact Us</a>  <br />
        <a href="/removal-leads.co.za/Pages/feedback">Feedback</a>   <br />
        <a href="/removal-leads.co.za/Pages/affiliate">Affiliate Program</a>
      </td>
    </tr>
  </table>
    <p class="left">Copyright &copy; 2015, Best Removal Companies</p>
    <div class="cl"></div>
    <script type="text/javascript">
      $('.selectpicker').selectpicker();
    </script>
    <?php echo $this->element('sql_dump'); ?>  
  </div>
</div>
</body>
</html>