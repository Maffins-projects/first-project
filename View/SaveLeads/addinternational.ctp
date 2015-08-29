<div class="saveLeads form">
<?php echo $this->Form->create('SaveLead'); ?>

  <table style="width: 75%;">
    <tr>
      <td> 
       <?php echo $this->Form->hidden('savelead_id', array('label'=>false, 'type'=>'text', 'value'=>$id)); ?>  
        <div class="users form">
        <table class="content-table" >
         <tr>
          <td colspan="2" style="">
            <input type="hidden" value="" id="SaveLeadMoveType_" name="data[SaveLead][move_type]">
            <input type="radio" value="3" checked=checked id="SaveLeadMoveType1" name="data[SaveLead][move_type]"><label for="SaveLeadMoveType1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> International</label>                         
          </td>
         </tr>
          <tr>
            <td colspan="2" style="background-color: #F2F2F2;font-weight: bold;">
             <h4>Moving from (Old place):</h4>
            </td>
          </tr>
          <tr>
            <td><label for="name"> Province*:</label> </td>
            <td>
              <?php 
                $options = array("0"=>'- Select -','17533'=>'Eastern Cape','17534'=>'Free State','17535'=>'Gauteng','17536'=>'KwaZulu-Natal','17537'=>'Limpopo','17538'=>'Mpumalanga','17539'=>'North West', '17540'=>'Northern Cape', '17541'=>'Western Cape');
                echo $this->Form->select('from_province', $options,  array('label'=>false,'default'=> $prov[0]['SaveLead']['from_province'])); 
              ?>
            </td>
          </tr>
           <tr>
            <td><label for="name">Address *:</label> </td>
            <td><?php echo $this->Form->textarea('from_address', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Postal Code *:</label> </td>
            <td><?php echo $this->Form->input('from_postal_code', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Floor number *:</label> </td>
            <td><?php echo $this->Form->input('from_floor', array('label'=>false)); ?></td>
          </tr>                        
          <?php $options1 = array('No' => 'No', 'Yes' => 'Yes');?> 
          <tr>
            <td><label for="name">Elevator Available *:</label> </td>
            <td>
            <?php echo $this->Form->radio('from_elevator', $options1, array('legend'=>false)); ?>
            </td>
          </tr>
          <tr>
            <td><label for="name">How many rooms *:</label> </td>
            <td><?php echo $this->Form->input('from_rooms', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td colspan="2" style="background-color: #F2F2F2;font-weight: bold;">
            <h4>Moving to (New Place):</h4>
            </td>
          </tr>          
           <tr>
            <td><label for="name"> Destination country*:</label> </td>
            <td>
              <select required='required' name="data[SaveLead][destination_country]">
                <option selected="selected" value="">- Please select -</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina">Burkina</option>
                <option value="Burma (Myanmar)">Burma (Myanmar)</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, Democratic Republic of">Congo, Democratic Republic of</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Greece">Greece</option>
                <option value="Grenada">Grenada</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Honduras">Honduras</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Ivory Coast">Ivory Coast</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, North">Korea, North</option>
                <option value="Korea, South">Korea, South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia">Micronesia</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Qatar">Qatar</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City">Vatican City</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
              </select>            
            </td>
           <tr>
            <td><label for="name">Address if known (else enter city name) *:</label> </td>
            <td><?php echo $this->Form->textarea('to_address', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Floor number (if known):</label> </td>
            <td><?php echo $this->Form->input('to_floor', array('label'=>false, 'required' => false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Elevator Available (if known):</label> </td>
            <td>
            <?php echo $this->Form->radio('to_elevator', $options1, array('legend'=>false)); ?>
            </td>
          </tr>
          <tr>
            <td><label for="name">How many rooms (if known):</label> </td>
            <td><?php echo $this->Form->input('to_rooms', array('label'=>false, 'required' => false)); ?></td>
          </tr>   
          <tr>
            <td colspan="2" style="background-color: #F2F2F2;font-weight: bold;">
            <h4>About your move: </h4>
            </td>
          </tr>            
          <tr>
            <td><label for="name">I will need storage *:</label> </td>
            <?php $options = array('No' => 'No', 'Yes' => 'Yes');?>
            <td><?php echo $this->Form->radio('require_storage', $options, array('legend'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Dismantling & reassembling of furniture *:</label> </td>
            <td><?php echo $this->Form->radio('require_full_assembly', $options, array('legend'=>false)); ?></td>
          </tr> 
          <tr>
            <td><label for="name">I require packaging *:</label> </td>
            <td><?php echo $this->Form->radio('packaging_service', $options, array('legend'=>false)); ?></td>
          </tr>  
          <tr>
            <td><label for="name">Do you need a vehicle to be moved *:</label> </td>
            <td><?php echo $this->Form->radio('vehicle_service', $options, array('legend'=>false)); ?></td>
          </tr>  
          <tr>
            <td><label for="name">Do you require pets to be moved *:</label> </td>
            <td><?php echo $this->Form->radio('pets_service', $options, array('legend'=>false)); ?></td>
          </tr> 
          <tr>
            <td><label for="name">Moving date *:</label> </td>
            <td><?php echo $this->Form->input('move_date', array('label'=>false, 'type'=>'text', 'class' => 'datepicker')); ?></td>
          </tr>  
          <tr>
            <td colspan="2" style="background-color: #F2F2F2;font-weight: bold;">
            <h4>Transport preference: </h4>
            </td>
          </tr> 
          <tr>
            <td colspan="2" style="">
            <input type="hidden" value="" id="SaveLeadMoveType_" name="data[SaveLead][transport_preference]">
            <table>
              <tr>
                <td><input type="radio" value="air" id="SaveLeadMoveType1" name="data[SaveLead][transport_preference]"><label for="SaveLeadMoveType1"><i class="icon-large icon-plane"></i> Air</label></td>
                <td><input type="radio" value="sea" id="SaveLeadMoveType2" name="data[SaveLead][transport_preference]"><label for="SaveLeadMoveType2"><i class="icon-large icon-boat"></i> Sea</label></td>
                <td><input type="radio" value="land" id="SaveLeadMoveType2" name="data[SaveLead][transport_preference]"><label for="SaveLeadMoveType2"><i class="icon-large icon-truck"></i> Land</label></td>
              </tr>
            </table>   
            </td>
          </tr>
          <tr>
            <td colspan="2" style="background-color: #F2F2F2;font-weight: bold;">
            <h4>Additional information you can tell us?: </h4>
            </td>
          </tr> 
          <tr>
            <td>Additional information</td>
            <td><?php echo $this->Form->textarea('additional_information', array('label'=>false, 'type'=>'text')); ?></td>
          </tr>  
          <tr>
            <td>Paid by company or paying by self?</td>
            <td>
              <?php 
                $options = array("0"=>'- Please Select -','self'=>'Paid by self','company'=>'Paid by company');
                echo $this->Form->select('paid_by', $options,  array('label'=>false,'default'=> '')); 
              ?>            
            </td>
          </tr>         
          <tr>
            <td colspan="2" style="background-color: #F2F2F2;font-weight: bold;">
            <h4>About you: </h4>
            </td>
          </tr> 
          <tr>
            <td><label for="name">First name *:</label> </td>
            <td><?php echo $this->Form->input('fname', array('label'=>false, 'type'=>'text', 'required' => 'required')); ?></td>
          </tr>            <tr>
            <td><label for="name">Last name *:</label> </td>
            <td><?php echo $this->Form->input('lname', array('label'=>false, 'type'=>'text', 'required' => 'required')); ?></td>
          </tr>            <tr>
            <td><label for="name">Best contact number *:</label> </td>
            <td><?php echo $this->Form->input('cellphone', array('label'=>false, 'type'=>'text', 'required' => 'required')); ?></td>
          </tr>            <tr>
            <td><label for="name">Email address *:</label> </td>
            <td><?php echo $this->Form->input('email', array('label'=>false, 'type'=>'text', 'required' => 'required')); ?></td>
          </tr>                             
          <tr>
            <td colspan="2"> <?php echo $this->Form->submit(__('Next'), array('class'=>'btn btn-primary')); ?></td>
          </tr>
        </table>
        </div>
      </td>
      <td> 
      <h2>Send me free removal quotes now </h2>
   <br />
Complete your details. It is important that you ensure the information supplied is correct so that companies can contact you quickly and easily about your requirements. Your request is obligation and cost free!
        <img src="/removal-leads.co.za/img/truck.png" alt="Removals, shuttle services, cab">
      </td>
    </tr>
  </table>

</div>

