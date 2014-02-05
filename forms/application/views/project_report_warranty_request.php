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

    <script src="/forms/assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

<div role="main" id="wrapper">

<div id="content" class="warranty">
<?php
$attributes = array('class' => 'email', 'id' => 'warrantyRequestForm');
echo form_open_multipart('/site/projectsubmit', $attributes);
?>


<div id="header" class="clearfix">
    <section>
        <img class="floatleft" src="/forms/assets/img/Curecrete-Logo_120x169.png"
             style="margin-right: 10px; height: 100px; width: 71px">

        <h1>Project Report &amp; Warranty Request</h1>
        <hr>
    </section>

    <div class="leftcolumn" style="">

        <p>This form is intended to be used for submitting Project Reports and Warranty
            Requests for Ashford Formula<sup>&trade;</sup> and RetroPlate<sup>®</sup> System projects.</p>

        <p><strong>INSTRUCTIONS:</strong></p>
        <ol style="padding-left: 15px; margin-top:0;">
            <li>
                If you are submitting a <strong>Project Report ONLY</strong>, complete “Project Information”
                    and “Drum Information” sections.
            </li>
            <li>
                If you are submitting a <strong>Warranty Request</strong>, complete all sections.<br/><br/>
                <em>PLEASE NOTE: By submitting a Warranty Request, you are automatically completing the form for a Project Report.</em>
            </li>
            <li>
                Photos can be uploaded for <strong>Project Reports</strong> and <strong>Warranty Requests</strong>.<br/><br/>

                <strong>Photos can be submitted with this form or uploaded at a later time</strong>. If you
                    have submitted photos with this form, but wish to upload more photos to this
                    particular project at a different time, please reference the link included in your
                    confirmation email.
<br/><Br/>
                In order to identify that you are uploading the photos to the correct Project
                    Report/Warranty Request, please identify the confirmation email which you
                    should have received for that specific project and follow the link provided at the
                    top of that email.
<br/><br/>
                <strong><em>PLEASE NOTE: The link to upload photos provided in the confirmation email is
                            specific to that project, and is not a generic, use-for-all link.</em></strong>

            </li>
            <li>
                Required fields are identified by an asterisk (*).
            </li>
            <li>
                A “Thank You” confirmation webpage will let you know that your request has
                    been successfully submitted to the Customer Care team.
            </li>
            <li>
                If you do not reach the “Thank You” confirmation webpage, your request has
                    not been received. Please review the form to make sure all the required fields
                    have been completed and then re-submit the request.
            </li>
            <li>
                Once your request has been successfully submitted, you will also receive a
                    confirmation email detailing your entire order submission to be kept for your
                    records.
            </li>
            <li>
                If you continue to experience problems with this form, contact the Customer
                    Care team at <a href="mailto:customercare@curecrete.com">customercare@curecrete.com</a> or by phone
                    at <strong>801-489-5663</strong>.
            </li>
        </ol>

    </div>

    <div class="address" style="">
        <p style="margin-top: 10px">
            <strong>Curecrete Distribution, Inc.</strong><br/>
            1203 W. Spring Creek Place<br/>
            Springville, UT 84663 USA
        </p>

        <p>
            PHN: 801.489.5663<br/>
            FAX: 801.489.3307<br/>
            EMAIL: <a href="mailto:customercare@curecrete.com">customercare@curecrete.com</a>
        </p>
    </div>

</div>


<div id="headerCheckboxes">

    <div class="block borderright first">
        <div class="checkbox">
            <input name="projectReportOnlyCheck" id="projectReportOnlyCheck" type="checkbox" class="require-check"
                   title="Only Fill out Project Information and Drum Information" checked>
            <label for="projectReportOnlyCheck">Project Report ONLY</label><br/>
        </div>

        <div class="checkbox">
            <input name="warrantyRequestCheck" id="warrantyRequestCheck" type="checkbox" class="require-check"
                   title="You Must Fill Out All Three Sections of Information">
            <label for="warrantyRequestCheck">Warranty Request</label><br/>
        </div>


    </div>

    <div class="block borderright">
        <div class="checkbox">
            <input name="ashfordFormulaCheck" id="ashfordFormulaCheck" type="checkbox" class="product-check">
            <label for="ashfordFormulaCheck">Ashford Formula</label><br/>
        </div>

        <div class="checkbox">
            <input name="retroplateCheck" id="retroplateCheck" type="checkbox" class="product-check">
            <label for="retroplateCheck">Retroplate</label><br/>
        </div>


    </div>

    <div class="block">

        <div class="checkbox">
            <input name="domesticProjectCheck" id="domesticProjectCheck" type="checkbox" class="require-check2">
            <label for="domesticProjectCheck">Domestic Project</label><br/>
        </div>

        <div class="checkbox">
            <input name="internationalProjectCheck" id="internationalProjectCheck" type="checkbox"
                   class="require-check2">
            <label for="internationalProjectCheck">International Project</label><br/>
        </div>

    </div>

</div>

<div id="headerCheckboxes2">

    <div class="checkbox">
        <input name="leedNominatedCheck" id="leedNominatedCheck" type="checkbox">
        <label for="leedNominatedCheck">Will this project be applying for a LEED Award or any other “Green”
            distinctions?</label><br/>
    </div>

</div>


<div id="headerTextFields">
    <div class="cell first">
        <label for="distributorName">Distributor Submitting Form<sup>*</sup></label><br/>
        <input name="distributorName" id="distributorName" type="text" class="required" tabindex="1"><br/>
    </div>
    <div class="cell">
        <label for="distributorEmail" title="A confirmation email of your submission will be sent to this email address.">Distributor Email<sup>*</sup></label><br/>
        <input name="distributorEmail" id="distributorEmail" type="text" class="required" tabindex="2" title="A confirmation email of your submission will be sent to this email address."><br/>
    </div>
    <div class="cell">
        <label for="poNumber">PO #</label><br/>
        <input name="poNumber" id="poNumber" type="text" class="" tabindex="3"><br/>
    </div>
</div>

<table id="projectInformation">

    <tr>
        <th colspan="5">
            <p><span>Project Information</span></p>
        </th>
    </tr>
    <tr>
        <td class="label"><label for="projectName">Project Name<sup>*</sup></label></td>
        <td class="input"><input name="projectName" id="projectName" type="text" class="required" tabindex="4"></td>
        <td class="label"><label for="amountUsed"><span class="euro">Liters</span><span class="domestic">Gallons</span>
                Used<sup>*</sup></label></td>
        <td class="input"><input name="amountUsed" id="amountUsed" type="text" class="required" tabindex="14"></td>
    </tr>
    <tr>
        <td class="label"><label for="address">Address</label></td>
        <td class="input"><input name="address" id="address" type="text" class="" tabindex="5"></td>
        <td class="label"><label for="squareDistance"><span class="euro">m<sup>2</sup></span><span
                    class="domestic">ft<sup>2</sup></span> <sup>*</sup></label></td>
        <td class="input"><input name="squareDistance" id="squareDistance" type="text" class="required" tabindex="15">
        </td>
    </tr>
    <tr>
        <td class="label"><label for="city">City<sup>*</sup></label></td>
        <td class="input"><input name="city" id="city" type="text" class="required" tabindex="6"></td>
        <td class="label"><label for="initialApplicationDate">Initial Application Date<sup>*</sup></label></td>
        <td class="input"><input name="initialApplicationDate" id="initialApplicationDate" type="text" class="required"
                                 tabindex="16"></td>
    </tr>
    <tr>
        <td class="label"><label for="state">Province/State</label></td>
        <td class="input"><input name="state" id="state" type="text" class="" tabindex="7"></td>
        <td class="label"><label for="finalApplicationDate">Final Application Date<sup>*</sup></label></td>
        <td class="input"><input name="finalApplicationDate" id="finalApplicationDate" class="required" type="text"
                                 tabindex="17"></td>
    </tr>
    <tr>
        <td class="label"><label for="country">Country &amp; Postal Code<sup>*</sup></label></td>
        <td class="input"><input name="country" id="country" type="text" class="required" tabindex="8"></td>
        <td class="label"><label for="buildingUse">Building Use<sup>*</sup></label></td>
        <td class="input">
            <select name="building_use" tabindex="18" id="building_use" class="required">
                <option value="">Please Choose One</option>
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
        </td>
    </tr>
    <tr>
        <td class="label"><label for="projectOwner">Project Owner</label></td>
        <td class="input"><input name="projectOwner" id="projectOwner" type="text" class="" tabindex="9"></td>
        <td class="label"><label for="industry">Industry<sup>*</sup></label></td>
        <td class="input"><select name="industry" id="industry" tabindex="19"></select></td>
    </tr>
    <tr>
        <td class="label"><label for="specifierArchitect">Specifier/Architect</label></td>
        <td class="input"><input name="specifierArchitect" id="specifierArchitect" type="text" class="" tabindex="10"">
        </td>
        <td class="label" rowspan="4"><label for="comments">Comments</label></td>
        <td class="input" rowspan="4"><textarea id="comments" name="comments" tabindex="20"></textarea></td>
    </tr>
    <tr>
        <td class="label"><label for="generalContractor">General Contractor</label></td>
        <td class="input"><input name="generalContractor" id="generalContractor" type="text" class="" tabindex="11">
        </td>
    </tr>
    <tr>
        <td class="label"><label for="applicator">Applicator<sup>*</sup></label></td>
        <td class="input"><input name="applicator" id="applicator" type="text" class="required" tabindex="12"></td>
    </tr>
    <tr>
        <td class="label"><label for="flatWorker">Flat Worker / Sub-Contractor</label></td>
        <td class="input"><input name="flatWorker" id="flatWorker" type="text" class="" tabindex="13"></td>
    </tr>

</table>

<table id="drumInformation">
    <tr>
        <th colspan="9" style="padding: 10px;">

            <p><span>Drum Information</span></p>

            <p>Drum Number(s) / Liter(s) or Gallon(s)
                Used</p>

            <p> If some or all of your drum numbers fall in consecutive order, please feel free to use the
                "series" method shown below to avoid typing each drum number individually and to save you valuable
                time.</p>

            <p>Example:<br/>
                10001, 10002, 10003, 10004, 10005, 10006 or 10001 - 10006</p>
        </th>
    </tr>
    <tr class="labelRow">
        <td class="label">
            <label>Drum No.</label>
        </td>
        <td class="label">
            <label><span class="euro">Liters</span><span class="domestic">Gallons</span></label>
        </td>
        <td class="label">
            <label>Drum No.</label>
        </td>
        <td class="label">
            <label><span class="euro">Liters</span><span class="domestic">Gallons</span></label>
        </td>
        <td class="label">
            <label>Drum No.</label>
        </td>
        <td class="label">
            <label><span class="euro">Liters</span><span class="domestic">Gallons</span></label>
        </td>
        <td class="label">
            <label>Drum No.</label>
        </td>
        <td class="label">
            <label><span class="euro">Liters</span><span class="domestic">Gallons</span></label>
        </td>
        <td class="label">
            <label>Add Row</label>
        </td>
    </tr>
    <tr>
        <td>
            <input name="group[0][drumNumber]" class="required">
        </td>
        <td class="size">
            <input name="group[0][size]" class="required">
        </td>
        <td>
            <input name="group[1][drumNumber]">
        </td>
        <td class="size">
            <input name="group[1][size]">
        </td>
        <td>
            <input name="group[2][drumNumber]">
        </td>
        <td class="size">
            <input name="group[2][size]">
        </td>
        <td>
            <input name="group[3][drumNumber]">
        </td>
        <td class="size">
            <input name="group[3][size]">
        </td>
        <td class="remove"></td>
    </tr>
    <tr>
        <td>
            <input name="group[4][drumNumber]">
        </td>
        <td class="size">
            <input name="group[4][size]">
        </td>
        <td>
            <input name="group[5][drumNumber]">
        </td>
        <td class="size">
            <input name="group[5][size]">
        </td>
        <td>
            <input name="group[6][drumNumber]">
        </td>
        <td class="size">
            <input name="group[6][size]">
        </td>
        <td>
            <input name="group[7][drumNumber]">
        </td>
        <td class="size">
            <input name="group[7][size]">
        </td>
        <td class="remove"></td>
    </tr>
    <tr>
        <td>
            <input name="group[8][drumNumber]">
        </td>
        <td class="size">
            <input name="group[8][size]">
        </td>
        <td>
            <input name="group[9][drumNumber]">
        </td>
        <td class="size">
            <input name="group[9][size]">
        </td>
        <td>
            <input name="group[10][drumNumber]">
        </td>
        <td class="size">
            <input name="group[10][size]">
        </td>
        <td>
            <input name="group[11][drumNumber]">
        </td>
        <td class="size">
            <input name="group[11][size]">
        </td>
        <td class="remove"></td>
    </tr>
    <tr>
        <td>
            <input name="group[12][drumNumber]">
        </td>
        <td class="size">
            <input name="group[12][size]">
        </td>
        <td>
            <input name="group[13][drumNumber]">
        </td>
        <td class="size">
            <input name="group[13][size]">
        </td>
        <td>
            <input name="group[14][drumNumber]">
        </td>
        <td class="size">
            <input name="group[14][size]">
        </td>
        <td>
            <input name="group[15][drumNumber]">
        </td>
        <td class="size">
            <input name="group[15][size]">
        </td>
        <td class="remove"></td>
    </tr>
    <tr>
        <td>
            <input name="group[16][drumNumber]">
        </td>
        <td class="size">
            <input name="group[16][size]">
        </td>
        <td>
            <input name="group[17][drumNumber]">
        </td>
        <td class="size">
            <input name="group[17][size]">
        </td>
        <td>
            <input name="group[18][drumNumber]">
        </td>
        <td class="size">
            <input name="group[18][size]">
        </td>
        <td>
            <input name="group[19][drumNumber]">
        </td>
        <td class="size">
            <input name="group[19][size]">
        </td>
        <td class="remove"><img src="/forms/assets/img/Plus-32.png" class="addRow"></td>
    </tr>

</table>

<table id="warrantyRequest">
    <tr>
        <th colspan="4">
            <p><span>Warranty Request</span></p>

            <p>International Distributors are to provide a signed, binding letter of certification stating they will
                <br/>assume financial responsibility for the 5-Year Labor portion of the warranty.</p>
        </th>
    </tr>
    <tr>
        <td class="label"><label for="dateFloorWarrantied">Date Floor To Be Warranted<sup>*</sup></label></td>
        <td class="input"><input name="dateFloorWarrantied" id="dateFloorWarrantied" type="text"
                                 class="warranty-request" tabindex="21"></td>
        <td class="label"><label for="applicatorAddress">Address<sup>*</sup></label></td>
        <td class="input"><input name="applicatorAddress" id="applicatorAddress" type="text" class="warranty-request"
                                 tabindex="26"></td>
    </tr>
    <tr>
        <td class="label"><label for="applicatorCompany">Applicator Company Name<sup>*</sup></label></td>
        <td class="input"><input name="applicatorCompany" id="applicatorCompany" type="text" class="warranty-request"
                                 tabindex="22"></td>
        <td class="label"><label for="applicatorCity">City<sup>*</sup></label></td>
        <td class="input"><input name="applicatorCity" id="applicatorCity" type="text" class="warranty-request"
                                 tabindex="27"></td>
    </tr>
    <tr>
        <td class="label"><label for="applicatorOwner">Applicator Owner Name<sup>*</sup></label></td>
        <td class="input"><input name="applicatorOwner" id="applicatorOwner" type="text" class="warranty-request"
                                 tabindex="23"></td>
        <td class="label"><label for="applicatorState">State/Province<sup>*</sup></label></td>
        <td class="input"><input name="applicatorState" id="applicatorState" type="text" class="warranty-request"
                                 tabindex="28"></td>
    </tr>
    <tr>
        <td class="label"><label for="applicatorPhone">Phone<sup>*</sup></label></td>
        <td class="input"><input name="applicatorPhone" id="applicatorPhone" type="text" class="warranty-request"
                                 tabindex="24"></td>
        <td class="label"><label for="applicatorCountry">Country<sup>*</sup></label></td>
        <td class="input"><input name="applicatorCountry" id="applicatorCountry" type="text" class="warranty-request"
                                 tabindex="29"></td>
    </tr>
    <tr>
        <td class="label"><label for="applicatorFax">Fax<sup>*</sup></label></td>
        <td class="input"><input name="applicatorFax" id="applicatorFax" type="text" class="warranty-request"
                                 tabindex="25"></td>
        <td class="label"><label for="applicatorPostal">Postal Code<sup>*</sup></label></td>
        <td class="input"><input name="applicatorPostal" id="applicatorPostal" type="text" class="warranty-request"
                                 tabindex="30"></td>
    </tr>

</table>

<table id="warrantyRequest2">
    <tr>
        <td class="label first"><label for="environmentalConditions">Environmental Conditions During Concrete Pour (i.e.
                Enclosed Building)<sup>*</sup></label></td>
        <td class="input" colspan="5"><textarea class="warranty-request" name="environmentalConditions"
                                                id="environmentalConditions" tabindex="31"></textarea></td>
    </tr>
    <tr>
        <td class="label first"><label for="weatherConditions">Weather Conditions During Ashford Formula
                Application<sup>*</sup></label></td>
        <td class="input" colspan="5"><textarea class="warranty-request" name="weatherConditions" id="weatherConditions"
                                                tabindex="32"></textarea></td>
    </tr>
    <tr>
        <td class="label first"><label for="ashfordForulaCure">Ashford Formula Used As Cure?<sup>*</sup></label></td>
        <td class="input first">
            <div class="checkbox">
                <input tabindex="33" name="ashfordForulaCureYes" id="ashfordForulaCureYes" type="checkbox" class="cure-check">
                <label for="ashfordForulaCureYes">Yes</label>
            </div>


            <div class="checkbox">
                <input tabindex="34" name="ashfordForulaCureNo" id="ashfordForulaCureNo" type="checkbox" class="cure-check">
                <label for="ashfordForulaCureNo">No</label>
            </div>
        </td>
        <td class="label applied" rowspan="2">
            <label for="appliedToConcrete">Applied To Concrete?<sup>*</sup></label>
        </td>
        <td class="input">
            <div class="checkbox">
                <input tabindex="35" name="appliedOnExistingFloor" id="appliedOnExistingFloor" type="checkbox" class="applied-check">
                <label for="appliedOnExistingFloor">On Existing Floor?</label>
            </div>


            <div class="checkbox">
                <input tabindex="36" name="appliedAtTimeOfPlacement" id="appliedAtTimeOfPlacement" type="checkbox"
                       class="applied-check">
                <label for="appliedAtTimeOfPlacement">At Time Of Placement?</label>
            </div>
        </td>
        <td class="label supervised">
            <label for="applicationSupervisedByDistributor">Application Supervised by Rep/Distributor?<sup>*</sup></label>
        </td>
        <td class="input last">
            <div class="checkbox">
                <input tabindex="37" name="applicationSupervisedByDistributorYes" id="applicationSupervisedByDistributorYes"
                       type="checkbox" class="app-check">
                <label for="applicationSupervisedByDistributorYes">Yes</label>
            </div>

            <div class="checkbox">
                <input tabindex="38" name="applicationSupervisedByDistributorNo" id="applicationSupervisedByDistributorNo"
                       type="checkbox" class="app-check">
                <label for="applicationSupervisedByDistributorNo">No</label>
            </div>
        </td>

    </tr>
    <tr>
        <td class="label">
            <label for="floorBurnished">Floor Burnished?<sup>*</sup></label>
        </td>
        <td class="input first">
            <div class="checkbox">
                <input tabindex="39" name="floorBurnishedYes" id="floorBurnishedYes" type="checkbox" class="burnished-check">
                <label for="floorBurnishedYes">Yes</label>
            </div>


            <div class="checkbox">
                <input tabindex="40" name="floorBurnishedNo" id="floorBurnishedNo" type="checkbox" class="burnished-check">
                <label for="floorBurnishedNo">No</label>
            </div>
        </td>
<!--        <td class="label">-->
<!---->
<!--        </td>-->
        <td class="input">
            <div class="checkbox" id="rrsAfterPlacementCheckbox">
                <input style="width: 120px;" tabindex="41" name="hoursAfterPlacementNumbers" id="hoursAfterPlacementNumbers" type="text"
                       class="hours-check"><br/>
                <label for="hoursAfterPlacement" id=""># Hours After Placement</label>
            </div>


        </td>
        <td class="label">
            <label for="maintenanceBrochureGiven">Maintenance Brochure Given?<sup>*</sup></label>
        </td>
        <td class="input last">
            <div class="checkbox">
                <input tabindex="42" name="maintenanceBrochureGivenYes" id="maintenanceBrochureGivenYes" type="checkbox"
                       class="brochure-check">
                <label for="maintenanceBrochureGivenYes">Yes</label>
            </div>


            <div class="checkbox">
                <input tabindex="43" name="maintenanceBrochureGivenNo" id="maintenanceBrochureGivenNo" type="checkbox"
                       class="brochure-check">
                <label for="maintenanceBrochureGivenNo">No</label>
            </div>
        </td>
    </tr>
</table>

<table id="corporateProjects">
    <tr>
        <th><p><span>Partnering Services Projects</span></p></th>
    </tr>
    <tr>
        <td>
            <textarea tabindex="44" name="corporateProjectsText" id="corporateProjectsText"
                      placeholder="If this is a Partnering Services Project, please indicate the final result of the project here."></textarea>
        </td>
    </tr>

</table>

<table id="photos">
    <tr>
        <th colspan="4">
            <p><span>Photos</span></p>
        </th>
    </tr>
    <tr>
        <td colspan="4"><p>&nbsp;</p></td>
    </tr>
    <tr>
        <td class="input" tabindex="45"><input type="checkbox" id="uploadPhotosYes" name="uploadPhotosYes" class="require-photo"></td>
        <td class="label"><label for="uploadPhotosYes">I will submit photos of this project with this form.</label></td>
        <td rowspan="2"><input style="margin:0 auto;height: 35px;width: 120px;font-size: 16px;line-height: 16px;" type="submit" value="Submit"></td>
    </tr>
    <tr>
        <td class="input" tabindex="46"><input type="checkbox" id="uploadPhotosNo" name="uploadPhotosNo" class="require-photo"></td>
        <td class="label"><label for="uploadPhotosNo">I will submit photos of this project at a later time.</label></td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="uploadFiles">
                <table>
                    <tr>
                        <td>
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
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>

<table id="submission">
    <tr>

    </tr>
</table>


</form>

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
