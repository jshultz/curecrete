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
            <input name="projectReportOnly" id="projectReportOnly" type="checkbox" class="require-doc">
            <label for="projectReportOnly">Project Report ONLY <span>(Sections 1 & 2 Only)</span></label><br/>
        </div>
        <div class="checkbox">
            <input name="warrantyRequest" id="warrantyRequest" type="checkbox" class="require-doc">
            <label for="warrantyRequest">Warranty Request <span>(Sections 1 - 3)</span></label><br/>
        </div>
        <div class="checkbox">
            <input name="ashfordFormula" id="ashfordFormula" type="checkbox" class="require-doc">
            <label for="ashfordFormula">Ashford Formula</label><br/>
        </div>
        <div class="checkbox">
            <input name="retorplate" id="retorplate" type="checkbox" class="require-doc">
            <label for="retorplate">Retroplate</label><br/>
        </div>
    </div>
    <div class="block">
        <div class="checkbox">
            <input name="domesticProject" id="domesticProject" type="checkbox" class="require-doc">
            <label for="domesticProject">Domestic Project</label><br/>
        </div>
        <div class="checkbox">
            <input name="internationalProject" id="internationalProject" type="checkbox" class="require-doc">
            <label for="internationalProject">International Project</label><br/>
        </div>
        <div class="checkbox">
            <input name="leedNominated" id="leedNominated" type="checkbox" class="require-doc">
            <label for="leedNominated">Will this project be applying for a LEED Award or any other “Green” distinctions?</label><br/>
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
            <th colspan="4">
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
            <td class="input" rowspan="4"><textarea name="comments"></textarea> </td>
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
            <td>
                <label>Drum No.</label>
            </td>
            <td>
                <label>Liters <span>or</span> Gallons</label>
            </td>
            <td>
                <label>Drum No.</label>
            </td>
            <td>
                <label>Liters <span>or</span> Gallons</label>
            </td>
            <td>
                <label>Drum No.</label>
            </td>
            <td>
                <label>Liters <span>or</span> Gallons</label>
            </td>
            <td>
                <label>Drum No.</label>
            </td>
            <td>
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
