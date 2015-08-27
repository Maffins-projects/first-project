<div class="companies view">
<h2><?php  echo __('Company details captured');?></h2>
<table class="listing">
  <tr>
    <td colspan="2">
      Thank you for contacting us, one of our agents will be in touch with you within 24hours.
      <br />
      <br />
    </td>
  </tr>
  <tr>
    <td><dt><?php echo __('Company Name'); ?></dt></td>
    <td><?php echo h($company['Company']['company_name']); ?></td>
  </tr>
  <tr>
    <td>Contact Name</td>
    <td><?php echo h($company['Company']['c_name']." ".$company['Company']['c_surname']); ?></td>
  </tr>
  <tr>
    <td>Telephone</td>
    <td><?php echo h($company['Company']['c_telephone']); ?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo h($company['Company']['c_name']." ".$company['Company']['c_email']); ?></td>
  </tr>
</table

</div>

