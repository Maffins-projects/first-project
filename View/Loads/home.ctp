<div class="home">
  <h1 style="text-align: center;">Compare removal companies, shuttle companies, Cab companies</h1>
  <br />
  <h2 style="text-align: center;">Request quotes for free and you get<br /> responses quick and you can choose the best</h2>
  <br />
  <div class="step">
    Step 1 - 3
  </div>
  <table>
    <tr>
      <td valign="top">
        <?php echo $this->Form->create('User', array('action'=>'add')); ?>
        <table class="content-table">
          <tr>
            <td><label for="name">Service Required *:</label> </td>
            <td><?php 
              $options = array('0'=>'- Select -', '1'=>'Removals', '2'=>'Shuttle Services', '3'=>'Cab');
              echo $this->Form->select('service_required', $options,  array('label'=>false,'default'=>0)); ?></td>
          </tr>
           <tr>
            <td><label for="name">First Name *:</label> </td>
            <td><?php echo $this->Form->input('fname', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Surname *:</label> </td>
            <td><?php echo $this->Form->input('lname', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Email Address *:</label> </td>
            <td><?php echo $this->Form->input('email', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Cellnumber *:</label> </td>
            <td><?php echo $this->Form->input('cellnumber', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Day Time Number *:</label> </td>
            <td><?php echo $this->Form->input('daytimenumber', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td colspan="2">  <?php echo $this->Form->end(__('Next')); ?></td>
          </tr>
        </table>
      </td>
      <td valign="top">
        <img src="/removal-leads.co.za/img/removal.jpg" alt="Removals, shuttle services, cab">
      </td>
    </tr>
  </table>
</div>
<br style="clear: both;" />

  
