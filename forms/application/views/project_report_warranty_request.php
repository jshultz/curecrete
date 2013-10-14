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
    <script src="/forms//assets/js/vendor/modernizr-2.6.2.min.js"></script>
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
        $attributes = array('class' => 'email', 'id' => 'warrantRequest');
        echo form_open('/site/formsubmit', $attributes);
    ?>

    <div id="header">
        <img src="/forms/assets/img/Curecrete-Logo_120x169.png" style="margin-right: 10px; height: 100px; width: 71px">
        <div class="title">
            <h3>Ashford Formula <sup>&trade;</sup> &amp; Retroplate <sup>&reg;</sup></h3>
            <h1>Project Report &amp; <br/> Warranty Request</h1>
            <p>Fax: 801.489.3307 &nbsp; EMAIL | projectreports@curecrete.com</p>
        </div>
    </div>



    <div id="headerCheckboxes">
    <div class="block">
        <div class="checkbox">
            <input name="projectReportOnlyCheck" id="projectReportOnlyCheck" type="checkbox" >
            <label for="projectReportOnlyCheck">Project Report ONLY <span>(Sections 1 & 2 Only)</span></label><br/>
        </div>
        <div class="checkbox">
            <input name="warrantyRequestCheck" id="warrantyRequestCheck" type="checkbox" >
            <label for="warrantyRequestCheck">Warranty Request <span>(Sections 1 - 3)</span></label><br/>
        </div>
        <div class="checkbox">
            <input name="ashfordFormulaCheck" id="ashfordFormulaCheck" type="checkbox" >
            <label for="ashfordFormulaCheck">Ashford Formula</label><br/>
        </div>
        <div class="checkbox">
            <input name="retorplateCheck" id="retorplateCheck" type="checkbox" >
            <label for="retorplateCheck">Retroplate</label><br/>
        </div>
    </div>
    <div class="block">
        <div class="checkbox">
            <input name="domesticProjectCheck" id="domesticProjectCheck" type="checkbox" >
            <label for="domesticProjectCheck">Domestic Project</label><br/>
        </div>
        <div class="checkbox">
            <input name="internationalProjectCheck" id="internationalProjectCheck" type="checkbox" >
            <label for="internationalProjectCheck">International Project</label><br/>
        </div>
        <div class="checkbox">
            <input name="leedNominatedCheck" id="leedNominatedCheck" type="checkbox" >
            <label for="leedNominatedCheck">Will this project be applying for a LEED Award or any other “Green” distinctions?</label><br/>
        </div>
    </div>
</div>

    <div id="headerTextFields">
    <div class="cell">
        <label for="distributorName">Distributor Submitting Form<sup>*</sup></label><br/>
        <input name="distributorName" id="distributorName" type="text" class="required">
    </div>
    <div class="cell">
        <label for="distributorEmail">Distributor Email<sup>*</sup></label><br/>
        <input name="distributorEmail" id="distributorEmail" type="text" class="required">
    </div>
    <div class="cell">
        <label for="poNumber">PO #</label><br/>
        <input name="poNumber" id="poNumber" type="text" class="required">
    </div>
</div>

    <table id="projectInformation">

        <tr>
            <th colspan="5">
                <p>Project Information</p>
            </th>
        </tr>
        <tr>
            <td class="label"><label for="projectName">Project Name<sup>*</sup></label></td>
            <td class="input"><input name="projectName" id="projectName" type="text" class="required"></td>
            <td class="label"><label for="gallonsUsed">Liters or Gallons Used<sup>*</sup></label> </td>
            <td class="input"><input name="gallonsUsed" id="gallonsUsed"> </td>
        </tr>
        <tr>
            <td class="label"><label for="address">Address<sup>*</sup></label></td>
            <td class="input"><input name="address" id="address" type="text" class="required"></td>
            <td class="label"><label for="meters">m2 or ft2<sup>*</sup></label> </td>
            <td class="input"><input name="meters" id="meters"> </td>
        </tr>
        <tr>
            <td class="label"><label for="city">City<sup>*</sup></label></td>
            <td class="input"><input name="city" id="city" type="text" class="required"></td>
            <td class="label"><label for="initialApplicationDate">Initial Application Date<sup>*</sup></label> </td>
            <td class="input"><input name="initialApplicationDate" id="initialApplicationDate"> </td>
        </tr>
        <tr>
            <td class="label"><label for="state">Province/State<sup>*</sup></label></td>
            <td class="input"><input name="state" id="state" type="text" class="required"></td>
            <td class="label"><label for="finalApplicationDate">Final Application Date<sup>*</sup></label> </td>
            <td class="input"><input name="finalApplicationDate" id="finalApplicationDate"> </td>
        </tr>
        <tr>
            <td class="label"><label for="country">Country &amp; Postal Code<sup>*</sup></label></td>
            <td class="input"><input name="country" id="country" type="text" class="required"></td>
            <td class="label"><label for="buildingUse">Building Use<sup>*</sup></label> </td>
            <td class="input"><input name="buildingUse" id="buildingUse"> </td>
        </tr>
        <tr>
            <td class="label"><label for="projectOwner">Project Owner<sup>*</sup></label></td>
            <td class="input"><input name="projectOwner" id="projectOwner" type="text" class="required"></td>
            <td class="label"><label for="industry">Industry<sup>*</sup></label> </td>
            <td class="input"><input name="industry" id="industry"> </td>
        </tr>
        <tr>
            <td class="label"><label for="specifierArchitect">Specifier/Architect<sup>*</sup></label></td>
            <td class="input"><input name="specifierArchitect" id="specifierArchitect" type="text" class="required"></td>
            <td class="label" rowspan="4"><label for="comments">Comments<sup>*</sup></label> </td>
            <td class="input" rowspan="4"><textarea id="comments" name="comments"></textarea> </td>
        </tr>
        <tr>
            <td class="label"><label for="generalContractor">General Contractor<sup>*</sup></label></td>
            <td class="input"><input name="generalContractor" id="generalContractor" type="text" class="required"></td>
        </tr>
        <tr>
            <td class="label"><label for="applicator">Applicator<sup>*</sup></label></td>
            <td class="input"><input name="applicator" id="applicator" type="text" class="required"></td>
        </tr>
        <tr>
            <td class="label"><label for="flatWorker">Flat Worker / Floor Maker / Sub-Contractor<sup>*</sup></label></td>
            <td class="input"><input name="flatWorker" id="flatWorker" type="text" class="required"></td>
        </tr>

    </table>

    <table id="drumInformation">
        <tr>
            <th colspan="9"><p>D R U M I N F O R M A T I O N – Drum Number(s) / Liter(s) or Gallon(s) Used</p>

                <p> If some or all of your drum numbers fall in consecutive order, please feel free to use the
                    "series" method shown below to avoid typing each drum number individually and to save you valuable time.</p>

                <p>Example:<br/>
                    10001, 10002, 10003, 10004, 10005, 10006 or 10001 - 10006</p>
            </th>
        </tr>
        <tr class="labelRow">
            <td class="label">
                <label>Drum No.</label>
            </td>
            <td class="label">
                <label>Liters <span>or</span> Gallons</label>
            </td>
            <td class="label">
                <label>Drum No.</label>
            </td>
            <td class="label">
                <label>Liters <span>or</span> Gallons</label>
            </td>
            <td class="label">
                <label>Drum No.</label>
            </td>
            <td class="label">
                <label>Liters <span>or</span> Gallons</label>
            </td>
            <td class="label">
                <label>Drum No.</label>
            </td>
            <td class="label">
                <label>Liters <span>or</span> Gallons</label>
            </td>
        </tr>
        <tr>
            <td>
                <input name="row[0][drumNumber][0]">
            </td>
            <td>
                <input name="row[0][gallons][0]">
            </td>
            <td>
                <input name="row[0][drumNumber][1]">
            </td>
            <td>
                <input name="row[0][gallons][1]">
            </td>
            <td>
                <input name="row[0][drumNumber][2]">
            </td>
            <td>
                <input name="row[0][gallons][2]">
            </td>
            <td>
                <input name="row[0][drumNumber][3]">
            </td>
            <td>
                <input name="row[0][gallons][3]">
            </td>
            <td class="remove"></td>
        </tr>
        <tr>
            <td>
                <input name="row[1][drumNumber][0]">
            </td>
            <td>
                <input name="row[1][gallons][0]">
            </td>
            <td>
                <input name="row[1][drumNumber][1]">
            </td>
            <td>
                <input name="row[1][gallons][1]">
            </td>
            <td>
                <input name="row[1][drumNumber][2]">
            </td>
            <td>
                <input name="row[1][gallons][2]">
            </td>
            <td>
                <input name="row[1][drumNumber][3]">
            </td>
            <td>
                <input name="row[1][gallons][3]">
            </td>
            <td class="remove"></td>
        </tr>
        <tr>
            <td>
                <input name="row[2][drumNumber][0]">
            </td>
            <td>
                <input name="row[2][gallons][0]">
            </td>
            <td>
                <input name="row[2][drumNumber][1]">
            </td>
            <td>
                <input name="row[2][gallons][1]">
            </td>
            <td>
                <input name="row[2][drumNumber][2]">
            </td>
            <td>
                <input name="row[2][gallons][2]">
            </td>
            <td>
                <input name="row[2][drumNumber][3]">
            </td>
            <td>
                <input name="row[2][gallons][3]">
            </td>
            <td class="remove"></td>
        </tr>
        <tr>
            <td>
                <input name="row[3][drumNumber][0]">
            </td>
            <td>
                <input name="row[3][gallons][0]">
            </td>
            <td>
                <input name="row[3][drumNumber][1]">
            </td>
            <td>
                <input name="row[3][gallons][1]">
            </td>
            <td>
                <input name="row[3][drumNumber][2]">
            </td>
            <td>
                <input name="row[3][gallons][2]">
            </td>
            <td>
                <input name="row[3][drumNumber][3]">
            </td>
            <td>
                <input name="row[3][gallons][3]">
            </td>
            <td class="remove"></td>
        </tr>
        <tr>
            <td>
                <input name="row[4][drumNumber][0]">
            </td>
            <td>
                <input name="row[4][gallons][0]">
            </td>
            <td>
                <input name="row[4][drumNumber][1]">
            </td>
            <td>
                <input name="row[4][gallons][1]">
            </td>
            <td>
                <input name="row[4][drumNumber][2]">
            </td>
            <td>
                <input name="row[4][gallons][2]">
            </td>
            <td>
                <input name="row[4][drumNumber][3]">
            </td>
            <td>
                <input name="row[4][gallons][3]">
            </td>
            <td class="remove"><img src="/forms/assets/img/Plus-32.png" class="addRow"></td>
        </tr>

    </table>

    <table id="warrantyRequest">
        <tr>
            <th colspan="4">
                <p>Warranty Request</p>
                <p>International Distributors are to provide a signed, binding letter of certification stating they will assume financial responsibility for the 5-Year Labor portion of the warranty.</p>
            </th>
        </tr>
        <tr>
            <td class="label"><label for="dateFloorWarrantied">Date Floor To Be Warranted<sup>*</sup></label> </td>
            <td class="input"><input name="flatWorker" id="flatWorker" type="text" class="required"></td>
            <td class="label"><label for="applicatorAddress">Address<sup>*</sup></label> </td>
            <td class="input"><input name="applicatorAddress" id="applicatorAddress" type="text" class="required"></td>
        </tr>
        <tr>
            <td class="label"><label for="applicatorCompany">Applicator Company Name<sup>*</sup></label> </td>
            <td class="input"><input name="applicatorCompany" id="applicatorCompany" type="text" class="required"></td>
            <td class="label"><label for="applicatorCity">City<sup>*</sup></label> </td>
            <td class="input"><input name="applicatorCity" id="applicatorCity" type="text" class="required"></td>
        </tr>
        <tr>
            <td class="label"><label for="applicatorOwner">Applicator Owner Name<sup>*</sup></label> </td>
            <td class="input"><input name="applicatorOwner" id="applicatorOwner" type="text" class="required"></td>
            <td class="label"><label for="applicatorState">State/Province<sup>*</sup></label> </td>
            <td class="input"><input name="applicatorState" id="applicatorState" type="text" class="required"></td>
        </tr>
        <tr>
            <td class="label"><label for="applicatorPhone">Phone<sup>*</sup></label> </td>
            <td class="input"><input name="applicatorPhone" id="applicatorPhone" type="text" class="required"></td>
            <td class="label"><label for="applicatorCountry">Country<sup>*</sup></label> </td>
            <td class="input"><input name="applicatorCountry" id="applicatorCountry" type="text" class="required"></td>
        </tr>
        <tr>
            <td class="label"><label for="applicatorFax">Fax</label> </td>
            <td class="input"><input name="applicatorFax" id="applicatorFax" type="text" class="required"></td>
            <td class="label"><label for="applicatorPostal">Postal Code<sup>*</sup></label> </td>
            <td class="input"><input name="applicatorPostal" id="applicatorPostal" type="text" class="required"></td>
        </tr>

    </table>
    <table id="warrantyRequest2">
        <tr>
            <td class="label first"><label for="environmentalConditions">Environmental Conditions During Concrete Pour (i.e. Enclosed Building)<sup>*</sup></label></td>
            <td class="input" colspan="5"><textarea name="environmentalConditions" id="environmentalConditions"></textarea> </td>
        </tr>
        <tr>
            <td class="label first"><label for="weatherConditions">Weather Conditions During Ashford Formula Application<sup>*</sup></label></td>
            <td class="input" colspan="5"><textarea name="weatherConditions" id="weatherConditions"></textarea> </td>
        </tr>
        <tr>
            <td class="label first"><label for="ashfordForulaCure">Ashford Formula Used As Cure?<sup>*</sup></label></td>
            <td class="input">
                <div class="checkbox">
                    <input name="ashfordForulaCureYes" id="ashfordForulaCureYes" type="checkbox" >
                    <label for="ashfordForulaCureYes">Yes</label>
                </div><br/>
                <div class="checkbox">
                    <input name="ashfordForulaCureNo" id="ashfordForulaCureNo" type="checkbox" >
                    <label for="ashfordForulaCureNo">No</label>
                </div>
            </td>
            <td class="label">
                <label for="appliedToConcrete">Applied To Concrete?<sup>*</sup></label>
            </td>
            <td class="input" width="155px">
                <div class="checkbox">
                    <input name="appliedOnExistingFloor" id="appliedOnExistingFloor" type="checkbox" >
                    <label for="appliedOnExistingFloor">On Existing Floor?</label>
                </div>
            <br/>
                <div class="checkbox">
                    <input name="appliedAtTimeOfPlacement" id="appliedAtTimeOfPlacement" type="checkbox" >
                    <label for="appliedAtTimeOfPlacement">At Time Of Placement?</label>
                </div>
            </td>
            <td colspan="2">
                <div class="checkbox" id="hoursAfterPlacementCheckbox">
                    <input name="hoursAfterPlacement" id="hoursAfterPlacement" type="checkbox" >
                    <input name="hoursAfterPlacementNumbers" id="hoursAfterPlacementNumbers" type="text"><br/>
                    <label for="hoursAfterPlacement" id="">Hours After Placement</label>
                </div>
            </td>

        </tr>
        <tr>
            <td class="label">
                <label for="floorBurnished">Floor Burnished?<sup>*</sup></label>
            </td>
            <td class="input">
                <div class="checkbox">
                    <input name="floorBurnishedYes" id="floorBurnishedYes" type="checkbox" >
                    <label for="floorBurnishedYes">Yes</label>
                </div><br/>
                <div class="checkbox">
                    <input name="floorBurnishedNo" id="floorBurnishedNo" type="checkbox" >
                    <label for="floorBurnishedNo">No</label>
                </div>
            </td>
            <td class="label">
                <label for="applicationSupervisedByDistributor">Application Supervised by Distributor?<sup>*</sup></label>
            </td>
            <td class="input">
                <div class="checkbox">
                    <input name="applicationSupervisedByDistributorYes" id="applicationSupervisedByDistributorYes" type="checkbox" >
                    <label for="applicationSupervisedByDistributorYes">Yes</label>
                </div><br/>
                <div class="checkbox">
                    <input name="applicationSupervisedByDistributorNo" id="applicationSupervisedByDistributorNo" type="checkbox" >
                    <label for="applicationSupervisedByDistributorNo">No</label>
                </div>
            </td>
            <td class="label">
                <label for="maintenanceBrochureGiven">Maintenance Brochure Given?<sup>*</sup></label>
            </td>
            <td class="input">
                <div class="checkbox">
                    <input name="maintenanceBrochureGivenYes" id="maintenanceBrochureGivenYes" type="checkbox" >
                    <label for="maintenanceBrochureGivenYes">Yes</label>
                </div><br/>
                <div class="checkbox">
                    <input name="maintenanceBrochureGivenNo" id="maintenanceBrochureGivenNo" type="checkbox" >
                    <label for="maintenanceBrochureGivenNo">No</label>
                </div>
            </td>
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
