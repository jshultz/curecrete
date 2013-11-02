<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the rroot directory -->

    <link rel="stylesheet" href="/forms/assets/css/normalize.css">
    <link rel="stylesheet" href="/forms/assets/css/main.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/forms/assets/css/custom-theme/jquery-ui-1.10.2.custom.min.css">
    <script src="/forms/assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

<div role="main" id="wrapper">

<div id="content">

<h1>Project Details</h1>
<hr>

<section id="entryform">

<?php
$attributes = array('class' => 'email', 'id' => 'accordion');
echo form_open_multipart('/site/multiple_upload', $attributes);
?>
<h3>1. Contact Information</h3>

<div>
    <section id="form1">
        <section class="row clearfix">
            <article class="row clearfix">
                <label><strong>Contact Person<sup>*</sup></strong></label>
            </article>
            <article class="cell">
                <input type="text" name="firstname" class="required" id="firstname"
                       value="<?php echo set_value('firstname'); ?>"><br/>
                <label for="firstname">First Name<sup>*</sup></label>
            </article>
            <article class="cell">
                <input type="text" name="lastname" class="required" id="lastname"
                       value="<?php echo set_value('lastname'); ?>"><br/>
                <label for="lastname">Last Name<sup>*</sup></label>
            </article>
        </section>
        <section class="row clearfix">
            <label for="cust_title"><strong>Title<sup>*</sup></strong></label><br/>
            <input type="text" name="cust_title" class="required" id="cust_title"
                   value="<?php echo set_value('cust_title'); ?>">
        </section>
        <section class="row clearfix">
            <label for="cust_company"><strong>Company<sup>*</sup></strong></label><br/>
            <input type="text" name="cust_company" class="required" id="cust_company"
                   value="<?php echo set_value('cust_company'); ?>">
        </section>
        <section class="row clearfix">
            <label for="cust_phone"><strong>Contact's Phone<sup>*</sup></strong></label><br/>
            <input type="text" name="cust_phone" class="required" id="cust_phone"
                   value="<?php echo set_value('cust_phone'); ?>">
        </section>
        <section class="row clearfix">
            <label for="cust_email"><strong>Contact's Email<sup>*</sup></strong></label><br/>
            <input type="text" name="cust_email" class="required email" id="cust_email"
                   value="<?php echo set_value('cust_email'); ?>">
        </section>
    </section>
</div>
<h3>2. Project Information</h3>

<div>
    <section id="form2">

        <section class="row clearfix">
            <label><strong>Product Used</strong></label><br/>
            <article class="cell">
                <label for="ashford_formula"><strong>Ashford Formula<sup>&trade;</sup></strong><input type="checkbox"
                                                                                                      name="ashford_formula"
                                                                                                      id="ashford_formula"
                                                                                                      value="1"></label>

            </article>
            <article class="cell">
                <label for="retroplate"><strong>RetroPlate<sup>&reg;</sup></strong><input type="checkbox"
                                                                                          name="retroplate"
                                                                                          id="retroplate"
                                                                                          value="1"></label>

            </article>

        </section>

        <section class="row clearfix">
            <label for="project_name"><strong>Project Name<sup>*</sup></strong></label><br/>
            <input type="text" name="project_name" class="required" id="project_name"
                   value="<?php echo set_value('project_name'); ?>">
        </section>
        <section class="row clearfix">
            <label for="project_location"><strong>Project Location<sup>*</sup></strong></label><br/>
            <input type="text" name="project_location" class="required" id="project_location"
                   value="<?php echo set_value('project_location'); ?>"><br/>
            <input type="text" name="project_location_2" id="project_location_2"
                   value="<?php echo set_value('project_location_2'); ?>"><br/>
            <input type="text" name="project_location_3" id="project_location_3"
                   value="<?php echo set_value('project_location_3'); ?>"><br/>

            <div class="clearfix">
                <article class="cell">
                    <input type="text" name="project_city" class="required" id="project_city"
                           value="<?php echo set_value('project_city'); ?>"><br/>
                    <label for="project_city">City</label>
                </article>
                <article class="cell">
                    <input type="text" name="project_state" class="" id="project_state"
                           value="<?php echo set_value('project_state'); ?>"><br/>
                    <label for="project_state">State</label>
                </article>
                <article class="cell">
                    <input type="text" name="project_zip" class="" id="project_zip"
                           value="<?php echo set_value('project_zip'); ?>"><br/>
                    <label for="project_zip">Zip/Postal</label>
                </article>
            </div>
            <div class="clearfix">
                <input type="text" name="project_country" class="required" id="project_country"
                       value="<?php echo set_value('project_country'); ?>"><br/>
                <label for="project_country">Country</label>
            </div>

        </section>

        <section class="row important clearfix">
            <article class="cell checkbox">
                <input type="checkbox" name="project_already_submitted" id="project_already_submitted" value="1">
            </article>
            <article class="cell paragraph">
                <p><strong>I have already submitted a project report for this project to the corporate
                        office.</strong></p>

                <p><em><sup>*</sup>If you have already submitted a project report for this project, please skip
                        immediately to <strong>section 4</strong> to begin uploading photos.</em></p>
            </article>
        </section>
        <section class="row clearfix">
            <label for="company_owner_name"><strong>Company/Owner Name<sup>*</sup></strong></label><br/>
            <input type="text" name="company_owner_name" id="company_owner_name"
                   value="<?php echo set_value('company_owner_name'); ?>">
        </section>
        <section class="row clearfix">
            <label for="project_location"><strong>Address<sup>*</sup></strong></label><br/>
            <input type="text" name="company_location" id="company_location"
                   value="<?php echo set_value('company_location'); ?>"><br/>
            <input type="text" name="company_location_2" id="company_location_2"
                   value="<?php echo set_value('company_location_2'); ?>"><br/>
            <input type="text" name="company_location_3" id="company_location_3"
                   value="<?php echo set_value('company_location_3'); ?>"><br/>

            <div class="clearfix">
                <article class="cell">
                    <input type="text" name="company_city" id="company_city"
                           value="<?php echo set_value('company_city'); ?>"><br/>
                    <label for="company_city">City</label>
                </article>
                <article class="cell">
                    <input type="text" name="company_state" id="company_state"
                           value="<?php echo set_value('company_state'); ?>"><br/>
                    <label for="company_state">State</label>
                </article>
                <article class="cell">
                    <input type="text" name="company_zip" id="company_zip"
                           value="<?php echo set_value('company_zip'); ?>"><br/>
                    <label for="company_zip">Zip/Postal</label>
                </article>
            </div>
            <div class="clearfix">
                <input type="text" name="company_country" id="company_country"
                       value="<?php echo set_value('company_country'); ?>"><br/>
                <label for="company_country">Country</label>
            </div>
        </section>

        <section class="row clearfix">

            <article class="cell">
                <label for="building_use"><strong>Building Use<sup>*</sup></strong></label><br/>
                <select name="building_use" id="building_use">
                    <option value="agricultural">Agricultural/Farm<sup>*</sup></option>
                    <option value="airport">Airport<sup>*</sup></option>
                    <option value="animal">Animal<sup>*</sup></option>
                    <option value="church">Church</option>
                    <option value="convention">Convention/Meeting Center<sup>*</sup></option>
                    <option value="correctional">Correctional Facility<sup>*</sup></option>
                    <option value="educational">Educational<sup>*</sup></option>
                    <option value="freight">Freight/Shipping</option>
                    <option value="government">Government/Municipal<sup>*</sup></option>
                    <option value="health">Health Care</option>
                    <option value="hotel">Hotel/Hospitality</option>
                    <option value="manufacturing">Manufacturing</option>
                    <option value="office">Office</option>
                    <option value="parking">Parking<sup>*</sup></option>
                    <option value="power">Power Generation</option>
                    <option value="printing">Printing</option>
                    <option value="recreation">Recreation<sup>*</sup></option>
                    <option value="residential">Residential</option>
                    <option value="retail">Retail</option>
                    <option value="transportation">Transportation</option>
                    <option value="warehouse">Warehouse/Distribution Center<sup>*</sup></option>
                </select>

            </article>
            <article class="cell">
                <label for="industry"><strong>Industry</strong></label><br/>
                <select name="industry" id="industry">

                </select>

            </article>
        </section>
        <section class="row clearfix">
            <label for="project_building_size"><strong>Size of building<sup>*</sup></strong></label><br/>
            <article class="cell">
                <input type="text" name="project_building_size" id="project_building_size"
                       value="<?php echo set_value('project_building_size'); ?>">
            </article>
            <article class="cell" style="margin-left: 10px; margin-top: 10px;">
                <label for="building_feet"><strong>ft<sup>2</sup></strong><input type="checkbox" name="building_feet"
                                                                                 value="1"></label>
            </article>
            <article class="cell" style="margin-left: 10px; margin-top: 10px;">
                <label for="building_meter"><strong>m<sup>2</sup></strong><input type="checkbox" name="building_meter"
                                                                                 value="1"></label>
            </article>
        </section>

        <section class="row clearfix">
            <label for="project_concrete_amount"><strong>Amount of concrete treated with AF or
                    RP<sup>*</sup></strong></label><br/>
            <article class="cell">
                <input type="text" name="project_concrete_amount" id="project_concrete_amount"
                       value="<?php echo set_value('project_concrete_amount'); ?>">
            </article>
            <article class="cell" style="margin-left: 10px; margin-top: 10px;">
                <label for="concrete_feet"><strong>ft<sup>2</sup></strong><input type="checkbox" name="concrete_feet"
                                                                                 value="1"></label>
            </article>
            <article class="cell" style="margin-left: 10px; margin-top: 10px;">
                <label for="concrete_meter"><strong>m<sup>2</sup></strong><input type="checkbox" name="concrete_meter"
                                                                                 value="1"></label>
            </article>
        </section>

        <section class="row clearfix">
            <label for="initial_application_date"><strong>Initial Application Date
                    (Month/Year)<sup>*</sup></strong></label><br/>
            <input type="text" name="initial_application_date" id="initial_application_date"
                   value="<?php echo set_value('initial_application_date'); ?>">
        </section>
        <section class="row clearfix">
            <label for="project_completion_date"><strong>Final Completion Date (Month/Year)<sup>*</sup></strong></label><br/>
            <input type="text" name="project_completion_date" id="project_completion_date"
                   value="<?php echo set_value('project_completion_date'); ?>">
        </section>
    </section>
</div>
<h3>3. Project Participants</h3>

<div>
    <section id="form3">

        <h3>Applicator</h3><br/>
        <section class="row" style="margin-bottom: 25px;">
            <label for="applicator_name"><strong>Applicator's Name</strong></label><br/>
            <input type="text" name="applicator_name" id="applicator_name" class="required"
                   value="<?php echo set_value('applicator_name'); ?>">
        </section>

        <h3>General Contractor</h3><br/>
        <section class="row" style="margin-bottom: 25px;">
            <label for="contractor_name"><strong>Concrete Contractor's Name</strong></label><br/>
            <input type="text" name="contractor_name" id="contractor_name"
                   value="<?php echo set_value('contractor_name'); ?>">
        </section>

        <h3>Architect/Designer</h3><br/>
        <section class="row" style="margin-bottom: 25px;">
            <label for="architect_name"><strong>Architect/Designer's Name</strong></label><br/>
            <input type="text" name="architect_name" id="architect_name"
                   value="<?php echo set_value('architect_name'); ?>">
        </section>


    </section>
</div>
<h3>4. Photos Submission</h3>

<div>
    <section id="form4">
        <h3 class="red">Grant of Non-Exclusive License to Curecrete Distribution, Inc. and Advanced Floor
            Products</h3>

        <p>
            <em>
                You hereby grant Curecrete Distribution, Inc. and Advanced Floor Products a perpetual, worldwide,
                non-exclusive license to use all submitted images in connection with this photo contest, including
                reproduction in any of Curecrete Distribution, Inc. and Advanced Floor Products’ print or electronic
                media products. Curecrete Distribution, Inc. and Advanced Floor Products shall also have the right to
                edit or modify the images in its sole discretion. You will retain ownership of all intellectual property
                in and to the images. You represent and warrant to Curecrete Distribution, Inc. and Advanced Floor
                Products that you own the images and/or are duly authorized to license them in the manner described
                herein, and that the submitted images do not infringe upon the intellectual property rights of any third
                party.
            </em>
        </p>
        <section class="row license clearfix">
            <article class="cell checkbox">
                <input type="checkbox" name="photo_terms" class="required" id="photo_terms" value="1">
            </article>
            <article class="cell paragraph">
                <p><strong>I agree to the license terms stated above.</strong></p>
            </article>
        </section>
        <section class="row">
            <label for="photographer_credit"><strong>Photo credit should read:<sup>*</sup></strong></label><br/>
            <input type="text" name="photographer_credit" class="required" id="photographer_credit"
                   value="<?php echo set_value('photographer_credit'); ?>">
        </section>
        <section class="row clearfix">
            <label><strong>Photographer Name<sup>*</sup></strong></label><br/>
            <article class="cell">
                <input type="text" name="photographer_first_name" class="required" id="photographer_first_name"
                       value="<?php echo set_value('photographer_first_name'); ?>"><br/>
                <label for="photographer_first_name">First Name</label>
            </article>
            <article class="cell">
                <input type="text" name="photographer_last_name" class="required" id="photographer_last_name"
                       id="photographer_first_name" value="<?php echo set_value('photographer_first_name'); ?>"><br/>
                <label for="photographer_last_name">Last Name</label>
            </article>
        </section>
        <section class="row">
            <label for="photographer_phone"><strong>Photographer Phone<sup>*</sup></strong></label><br/>
            <input type="text" name="photographer_phone" class="required" id="photographer_phone"
                   value="<?php echo set_value('photographer_phone'); ?>">
        </section>
        <hr>
        <section class="row">
            <label><strong>
                    Brief description of the project. Explain the project, identify specific
                    reasons why Ashford Formula<sup>&trade;</sup> or RetroPlate<sup>&reg;</sup> was used, note any
                    special/unique application procedures, feedback from building owners,
                    architects, awards, distinctions, etc.
                </strong></label><br/>
            <textarea name="project_description"
                      id="project_description"><?php echo set_value('project_description'); ?></textarea>

            <p><em>A portion of this description will be published in the calendar as well as on our website. Projects
                    will be selected on such factors as innovative use of the Ashford Formula<sup>&trade;</sup> or
                    RetroPlate<sup>&reg;</sup> product,
                    innovative building design, cost or time saving methods, specific design, building or environmental
                    awards and distinctions (i.e. LEED Silver, Gold or Platinum), etc.</em></p>
        </section>
        <hr>
        <section class="row">
            <h3 class="reversed">Please only upload photos that<br/>
                pertain to this particular project.</h3>
        </section>
        <section class="row photoupload">
            <label for="photo_upload_1"><strong>Upload Photo<sup>*</sup></strong></label><br/>
            <input type="file" name="photo_upload_1" id="photo_upload_1">
        </section>
        <section class="row photoupload">
            <label for="photo_upload_2"><strong>Upload Photo<sup>*</sup></strong></label><br/>
            <input type="file" name="photo_upload_2" id="photo_upload_2">
        </section>
        <section class="row photoupload">
            <label for="photo_upload_3"><strong>Upload Photo<sup>*</sup></strong></label><br/>
            <input type="file" name="photo_upload_3" id="photo_upload_3">
        </section>
        <section class="row photoupload">
            <label for="photo_upload_4"><strong>Upload Photo<sup>*</sup></strong></label><br/>
            <input type="file" name="photo_upload_4" id="photo_upload_4">
        </section>
        <section class="row photoupload">
            <label for="photo_upload_5"><strong>Upload Photo<sup>*</sup></strong></label><br/>
            <input type="file" name="photo_upload_5" id="photo_upload_5">
        </section>
        <section class="row photoupload">
            <label for="photo_upload_6"><strong>Upload Photo<sup>*</sup></strong></label><br/>
            <input type="file" name="photo_upload_6" id="photo_upload_6">
        </section>
        <section class="row photoupload">
            <label for="photo_upload_7"><strong>Upload Photo<sup>*</sup></strong></label><br/>
            <input type="file" name="photo_upload_7" id="photo_upload_7">
        </section>
        <section class="row photoupload">
            <label for="photo_upload_8"><strong>Upload Photo<sup>*</sup></strong></label><br/>
            <input type="file" name="photo_upload_8" id="photo_upload_8">
        </section>
        <section class="row photoupload">
            <label for="photo_upload_9"><strong>Upload Photo<sup>*</sup></strong></label><br/>
            <input type="file" name="photo_upload_9" id="photo_upload_9">
        </section>
        <section class="row photoupload">
            <label for="photo_upload_0"><strong>Upload Photo<sup>*</sup></strong></label><br/>
            <input type="file" name="photo_upload_0" id="photo_upload_0">
        </section>
        <section class="row">
            <article class="instructions">
                <h3>Do not close your browser until you reach the "Thank You" Screen.</h3>

                <p><strong>If you do not reach the "Thank You" screen and receive a confirmation email, your information
                        was not submitted.</strong></p>

                <p><em>If you experience problems with uploading, contact <a href="mailto:marketing@curecrete.com">marketing@curecrete.com</a></em>
                </p>
            </article>
        </section>
        <input type="submit" name="submit" id="submit">
    </section>
</div>
</form>

</section>


</div>


</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/forms/assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script src="/forms/assets/js/plugins.js"></script>
<script src="/forms/assets/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq = [
        ['_setAccount', 'UA-XXXXX-X'],
        ['_trackPageview']
    ];
    (function (d, t) {
        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
        g.src = '//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
</script>
</body>
</html>
