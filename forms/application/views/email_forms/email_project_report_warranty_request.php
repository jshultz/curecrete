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
<body class="pdf">
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
            <?php echo $projectReportOnlyCheck; ?>
            <label for="projectReportOnlyCheck">Project Report ONLY <span>(Sections 1 & 2 Only)</span></label><br/>
        </div>
        <div class="checkbox">
            <?php echo $warrantyRequestCheck; ?>
            <label for="warrantyRequestCheck">Warranty Request <span>(Sections 1 - 3)</span></label><br/>
        </div>
        <div class="checkbox">
            <?php echo $ashfordFormulaCheck; ?>
            <label for="ashfordFormulaCheck">Ashford Formula</label><br/>
        </div>
        <div class="checkbox">
            <?php echo $retorplateCheck; ?>
            <label for="retorplateCheck">Retroplate</label><br/>
        </div>
    </div>
    <div class="block">
        <div class="checkbox">
            <?php echo $domesticProjectCheck; ?>
            <label for="domesticProjectCheck">Domestic Project</label><br/>
        </div>
        <div class="checkbox">
            <?php echo $internationalProjectCheck; ?>
            <label for="internationalProjectCheck">International Project</label><br/>
        </div>
        <div class="checkbox">
            <?php echo $leedNominatedCheck; ?>
            <label for="leedNominatedCheck">Will this project be applying for a LEED Award or any other “Green” distinctions?</label><br/>
        </div>
    </div>
</div>

    <div id="headerTextFields">
    <div class="cell">
        <label for="distributorName">Distributor Submitting Form<sup>*</sup></label><br/>
        <?php echo $distributorName; ?>
    </div>
    <div class="cell">
        <label for="distributorEmail">Distributor Email<sup>*</sup></label><br/>
        <?php echo $distributorEmail; ?>
    </div>
    <div class="cell">
        <label for="poNumber">PO #</label><br/>
        <?php echo $poNumber; ?>
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
            <td class="input"><?php echo $projectName; ?></td>
            <td class="label"><label for="amountUsed"><span class="euro">Liters</span><span class="domestic">Gallons</span> Used<sup>*</sup></label> </td>
            <td class="input"><?php echo $amountUsed; ?> </td>
        </tr>
        <tr>
            <td class="label"><label for="address">Address<sup>*</sup></label></td>
            <td class="input"><?php echo $address; ?></td>
            <td class="label"><label for="squareDistance"><span class="euro">m2</span><span class="domestic">ft2</span> <sup>*</sup></label> </td>
            <td class="input"><?php echo $squareDistance; ?> </td>
        </tr>
        <tr>
            <td class="label"><label for="city">City<sup>*</sup></label></td>
            <td class="input"><?php echo $city; ?></td>
            <td class="label"><label for="initialApplicationDate">Initial Application Date<sup>*</sup></label> </td>
            <td class="input"><?php echo $initialApplicationDate; ?> </td>
        </tr>
        <tr>
            <td class="label"><label for="state">Province/State<sup>*</sup></label></td>
            <td class="input"><?php echo $state; ?></td>
            <td class="label"><label for="finalApplicationDate">Final Application Date<sup>*</sup></label> </td>
            <td class="input"><?php echo $finalApplicationDate; ?> </td>
        </tr>
        <tr>
            <td class="label"><label for="country">Country &amp; Postal Code<sup>*</sup></label></td>
            <td class="input"><input name="country" id="country" type="text" class="required"></td>
            <td class="label"><label for="buildingUse">Building Use<sup>*</sup></label> </td>
            <td class="input">
                <?php echo $projectName; ?>
            </td>
        </tr>
        <tr>
            <td class="label"><label for="projectOwner">Project Owner<sup>*</sup></label></td>
            <td class="input"><?php echo $projectOwner; ?></td>
            <td class="label"><label for="industry">Industry<sup>*</sup></label> </td>
            <td class="input"><?php echo $industry; ?> </td>
        </tr>
        <tr>
            <td class="label"><label for="specifierArchitect">Specifier/Architect</label></td>
            <td class="input"><?php echo $specifierArchitect; ?></td>
            <td class="label" rowspan="4"><label for="comments">Comments</label> </td>
            <td class="input" rowspan="4"><p><?php echo $projectName; ?></p></td>
        </tr>
        <tr>
            <td class="label"><label for="generalContractor">General Contractor</label></td>
            <td class="input"><?php echo $generalContractor; ?></td>
        </tr>
        <tr>
            <td class="label"><label for="applicator">Applicator<sup>*</sup></label></td>
            <td class="input"><?php echo $applicator; ?></td>
        </tr>
        <tr>
            <td class="label"><label for="flatWorker">Flat Worker / Floor Maker / Sub-Contractor</label></td>
            <td class="input"><?php echo $flatWorker; ?></td>
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
        </tr>
        <tr>
            <td>
                <input name="group[0][drumNumber]">
            </td>
            <td>
                <input name="group[0][size]">
            </td>
            <td>
                <input name="group[1][drumNumber]">
            </td>
            <td>
                <input name="group[1][size]">
            </td>
            <td>
                <input name="group[2][drumNumber]">
            </td>
            <td>
                <input name="group[2][size]">
            </td>
            <td>
                <input name="group[3][drumNumber]">
            </td>
            <td>
                <input name="group[3][size]">
            </td>
            <td class="remove"></td>
        </tr>
        <tr>
            <td>
                <input name="group[4][drumNumber]">
            </td>
            <td>
                <input name="group[4][size]">
            </td>
            <td>
                <input name="group[5][drumNumber]">
            </td>
            <td>
                <input name="group[5][size]">
            </td>
            <td>
                <input name="group[6][drumNumber]">
            </td>
            <td>
                <input name="group[6][size]">
            </td>
            <td>
                <input name="group[7][drumNumber]">
            </td>
            <td>
                <input name="group[7][size]">
            </td>
            <td class="remove"></td>
        </tr>
        <tr>
            <td>
                <input name="group[8][drumNumber]">
            </td>
            <td>
                <input name="group[8][size]">
            </td>
            <td>
                <input name="group[9][drumNumber]">
            </td>
            <td>
                <input name="group[9][size]">
            </td>
            <td>
                <input name="group[10][drumNumber]">
            </td>
            <td>
                <input name="group[10][size]">
            </td>
            <td>
                <input name="group[11][drumNumber]">
            </td>
            <td>
                <input name="group[11][size]">
            </td>
            <td class="remove"></td>
        </tr>
        <tr>
            <td>
                <input name="group[12][drumNumber]">
            </td>
            <td>
                <input name="group[12][size]">
            </td>
            <td>
                <input name="group[13][drumNumber]">
            </td>
            <td>
                <input name="group[13][size]">
            </td>
            <td>
                <input name="group[14][drumNumber]">
            </td>
            <td>
                <input name="group[14][size]">
            </td>
            <td>
                <input name="group[15][drumNumber]">
            </td>
            <td>
                <input name="group[15][size]">
            </td>
            <td class="remove"></td>
        </tr>
        <tr>
            <td>
                <input name="group[16][drumNumber]">
            </td>
            <td>
                <input name="group[16][size]">
            </td>
            <td>
                <input name="group[17][drumNumber]">
            </td>
            <td>
                <input name="group[17][size]">
            </td>
            <td>
                <input name="group[18][drumNumber]">
            </td>
            <td>
                <input name="group[18][size]">
            </td>
            <td>
                <input name="group[19][drumNumber]">
            </td>
            <td>
                <input name="group[19][size]">
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
            <td class="input"><?php echo $dateFloorWarrantied; ?></td>
            <td class="label"><label for="applicatorAddress">Address<sup>*</sup></label> </td>
            <td class="input"><?php echo $applicatorAddress; ?></td>
        </tr>
        <tr>
            <td class="label"><label for="applicatorCompany">Applicator Company Name<sup>*</sup></label> </td>
            <td class="input"><?php echo $applicatorCompany; ?></td>
            <td class="label"><label for="applicatorCity">City<sup>*</sup></label> </td>
            <td class="input"><?php echo $applicatorCity; ?></td>
        </tr>
        <tr>
            <td class="label"><label for="applicatorOwner">Applicator Owner Name<sup>*</sup></label> </td>
            <td class="input"><?php echo $applicatorOwner; ?></td>
            <td class="label"><label for="applicatorState">State/Province<sup>*</sup></label> </td>
            <td class="input"><?php echo $applicatorState; ?></td>
        </tr>
        <tr>
            <td class="label"><label for="applicatorPhone">Phone<sup>*</sup></label> </td>
            <td class="input"><?php echo $applicatorPhone; ?></td>
            <td class="label"><label for="applicatorCountry">Country<sup>*</sup></label> </td>
            <td class="input"><?php echo $applicatorCountry; ?></td>
        </tr>
        <tr>
            <td class="label"><label for="applicatorFax">Fax</label> </td>
            <td class="input"><?php echo $applicatorFax; ?></td>
            <td class="label"><label for="applicatorPostal">Postal Code<sup>*</sup></label> </td>
            <td class="input"><?php echo $applicatorPostal; ?></td>
        </tr>

    </table>

    <table id="warrantyRequest2">
        <tr>
            <td class="label first"><label for="environmentalConditions">Environmental Conditions During Concrete Pour (i.e. Enclosed Building)<sup>*</sup></label></td>
            <td class="input" colspan="5"><p><?php echo $environmentalConditions; ?></p> </td>
        </tr>
        <tr>
            <td class="label first"><label for="weatherConditions">Weather Conditions During Ashford Formula Application<sup>*</sup></label></td>
            <td class="input" colspan="5"><p><?php echo $weatherConditions; ?></p> </td>
        </tr>
        <tr>
            <td class="label first"><label for="ashfordForulaCure">Ashford Formula Used As Cure?<sup>*</sup></label></td>
            <td class="input">
                <div class="checkbox">
                    <?php echo $ashfordForulaCureYes; ?>
                    <label for="ashfordForulaCureYes">Yes</label>
                </div><br/>
                <div class="checkbox">
                    <?php echo $ashfordForulaCureNo; ?>
                    <label for="ashfordForulaCureNo">No</label>
                </div>
            </td>
            <td class="label">
                <label for="appliedToConcrete">Applied To Concrete?<sup>*</sup></label>
            </td>
            <td class="input" width="155px">
                <div class="checkbox">
                    <?php echo $appliedOnExistingFloor; ?>
                    <label for="appliedOnExistingFloor">On Existing Floor?</label>
                </div>
            <br/>
                <div class="checkbox">
                    <?php echo $appliedAtTimeOfPlacement; ?>
                    <label for="appliedAtTimeOfPlacement">At Time Of Placement?</label>
                </div>
            </td>
            <td colspan="2">
                <div class="checkbox" id="hoursAfterPlacementCheckbox">
                    <?php echo $hoursAfterPlacement; ?>
                    <?php echo $hoursAfterPlacementNumbers; ?>
                    <br/>
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
                    <?php echo $floorBurnishedYes; ?>
                    <label for="floorBurnishedYes">Yes</label>
                </div><br/>
                <div class="checkbox">
                    <?php echo $floorBurnishedNo; ?>
                    <label for="floorBurnishedNo">No</label>
                </div>
            </td>
            <td class="label">
                <label for="applicationSupervisedByDistributor">Application Supervised by Distributor?<sup>*</sup></label>
            </td>
            <td class="input">
                <div class="checkbox">
                    <?php echo $applicationSupervisedByDistributorYes; ?>
                    <label for="applicationSupervisedByDistributorYes">Yes</label>
                </div><br/>
                <div class="checkbox">
                    <?php echo $applicationSupervisedByDistributorNo; ?>
                    <label for="applicationSupervisedByDistributorNo">No</label>
                </div>
            </td>
            <td class="label">
                <label for="maintenanceBrochureGiven">Maintenance Brochure Given?<sup>*</sup></label>
            </td>
            <td class="input">
                <div class="checkbox">
                    <?php echo $maintenanceBrochureGivenYes; ?>
                    <label for="maintenanceBrochureGivenYes">Yes</label>
                </div><br/>
                <div class="checkbox">
                    <?php echo $maintenanceBrochureGivenNo; ?>
                    <label for="maintenanceBrochureGivenNo">No</label>
                </div>
            </td>
        </tr>
    </table>

    <table id="corporateProjects">
        <tr><th><p>Corporate Projects</p></th></tr>
        <tr>
            <td>
                <p><?php echo $hoursAfterPlacementNumbers; ?></p>
            </td>
        </tr>

    </table>

    <table id="photos">
        <tr>
            <td class="input"><?php echo $uploadPhotosYes; ?></td>
            <td class="label"><label for="uploadPhotosYes">I will submit photos of this project with this form.</label> </td>
            <td class="input"><?php echo $uploadPhotosNo; ?></td>
            <td class="label"><label for="uploadPhotosNo">I will submit photos of this project at a later time.</label> </td>
        </tr>
        <tr>
            <td colspan="4">
                <div class="uploadFiles">
                    <table>
                        <tr><td>
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
                        </td></tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>

    <table id="submission">
        <tr><td></td></tr>
    </table>

    <div class="dz-begin dz-message"><span>Continue uploading files as needed. File previews will appear at the bottom of the form.</span></div>




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
