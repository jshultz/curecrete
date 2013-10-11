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
        $attributes = array('class' => 'email', 'id' => 'international-purchase-form');
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
            <input name="checkDeclaration" id="checkDeclaration" type="checkbox" class="require-doc">
            <label for="checkDeclaration">Project Report ONLY <span>(Sections 1 & 2 Only)</span></label><br/>
        </div>
        <div class="checkbox">
            <input name="checkDeclaration" id="checkDeclaration" type="checkbox" class="require-doc">
            <label for="checkDeclaration">Warranty Request <span>(Sections 1 - 3)</span></label><br/>
        </div>
        <div class="checkbox">
            <input name="checkDeclaration" id="checkDeclaration" type="checkbox" class="require-doc">
            <label for="checkDeclaration">Ashford Formula</label><br/>
        </div>
        <div class="checkbox">
            <input name="checkDeclaration" id="checkDeclaration" type="checkbox" class="require-doc">
            <label for="checkDeclaration">Retroplate</label><br/>
        </div>
    </div>
    <div class="block">
        <div class="checkbox">
            <input name="checkDeclaration" id="checkDeclaration" type="checkbox" class="require-doc">
            <label for="checkDeclaration">Domestic Project</label><br/>
        </div>
        <div class="checkbox">
            <input name="checkDeclaration" id="checkDeclaration" type="checkbox" class="require-doc">
            <label for="checkDeclaration">International Project</label><br/>
        </div>
        <div class="checkbox">
            <input name="checkDeclaration" id="checkDeclaration" type="checkbox" class="require-doc">
            <label for="checkDeclaration">Will this project be applying for a LEED Award or any other “Green” distinctions?</label><br/>
        </div>
    </div>
</div>

    <div id="headerTextFields">
    <div class="cell">
        <label for="billToPhone">Distributor Submitting Form<sup>*</sup></label>
        <input name="billToPhone" id="billToPhone" type="text" class="required">
    </div>
    <div class="cell">
        <label for="billToPhone">Distributor Email<sup>*</sup></label>
        <input name="billToPhone" id="billToPhone" type="text" class="required">
    </div>
    <div class="cell">
        <label for="billToPhone">PO #</label>
        <input name="billToPhone" id="billToPhone" type="text" class="required">
    </div>
</div>

    <div class="floatright" style="width: 215px;">

</div>

    <table id="warrantyTable">

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
