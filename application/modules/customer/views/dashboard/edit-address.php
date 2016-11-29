<?php // print_r($address);   ?>
<div style='text-align: center'>
    <?php $this->load->view('inc-messages'); ?>
</div>

<div class="col-lg-12">
    <div class="columns-w">														
        <div class="columns-w">
            <?php $this->load->view('themes/'.THEME.'/layout/inc-dashboard'); ?>
            <div class="account-create yt-main-right yt-main col-main col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="page-title">
                    <h1>Edit Address :</h1>
                </div>
                <form action="" method="post" id="form-validate" enctype="multipart/form-data">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group required-field-block">
                            <label>Address Alias <span class="required">*</span></label>
                            <input type="text" placeholder="Address Alias *" name="alias" class="form-control" disabled="true" value="<?php echo arrIndex($address, 'uadd_alias') ?>">
                        </div>
                        <div class="form-group required-field-block">
                            <label>Address Recipent <span class="required">*</span></label>
                            <input type="text" placeholder="Address Recipent *" name="uadd_recipient" class="form-control" value="<?php echo arrIndex($address, 'uadd_recipient') ?>">
                        </div>
                        <div class="form-group required-field-block">
                            <label>Phone <span class="required">*</span></label>
                            <input type="text" placeholder="Phone *" name="uadd_phone" class="form-control" value="<?php echo arrIndex($address, 'uadd_phone') ?>">
                        </div>
                        <div class="form-group required-field-block">
                            <label>Address 1 <span class="required">*</span></label>
                            <input type="text" placeholder="Address 1 *" name="uadd_address_01" class="form-control" value="<?php echo arrIndex($address, 'uadd_address_01') ?>">
                        </div>     
                        <div class="form-group required-field-block">
                            <label>City <span class="required">*</span></label>
                            <input type="text" placeholder="City *" name="uadd_city" class="form-control" value="<?php echo arrIndex($address, 'uadd_city') ?>">
                        </div>     
                        <div class="form-group required-field-block">
                            <label>Address type <span class="required">*</span></label><br>
                            <select name="address_type" class="form-control" >
                                <option value=""></option>
                                <?php foreach ($addressType as $type => $label) { ?>
                                <option <?php echo (arrIndex($address, 'address_type') == $type) ? "selected" : ""; ?> value="<?php echo $type ?>"><?php echo $label; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group required-field-block">
                            <label>Company </label>
                            <input type="text" placeholder="Company *" name="uadd_company" class="form-control" value="<?php echo arrIndex($address, 'uadd_company') ?>">
                        </div>

                        <div class="form-group required-field-block">
                            <label>Address 2</label>
                            <input type="text" placeholder="Address 2" name="uadd_address_02" class="form-control" value="<?php echo arrIndex($address, 'uadd_address_02') ?>">
                        </div>    
                        <div class="form-group required-field-block">
                            <label>County <span class="required">*</span></label>
                            <input type="text" placeholder="County *" name="uadd_county" class="form-control" value="<?php echo arrIndex($address, 'uadd_county') ?>">
                        </div>  
                        <div class="form-group required-field-block">
                            <label>Country <span class="required">*</span></label>
                            <input type="text" placeholder="Country *" name="uadd_country" class="form-control" value="<?php echo arrIndex($address, 'uadd_country') ?>">
                        </div>  
                        <div class="form-group required-field-block">
                            <label>Postcode <span class="required">*</span></label>
                            <input type="text" placeholder="Postcode *" name="uadd_post_code" class="form-control" value="<?php echo arrIndex($address, 'uadd_post_code') ?>">
                        </div>
                                                
                    </div>
                    <div class="buttons-set">
                        <p class="required">* Required Fields</p>
                        <p class="back-link"><a href="<?php echo base_url('customer') ?>" class="back-link"><small>« </small>Back</a></p>
                        <button type="submit" title="Submit" class="button"><span><span>Register</span></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>