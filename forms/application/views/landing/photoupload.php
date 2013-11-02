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

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>assets/css/custom-theme/jquery-ui-1.10.2.custom.min.css">
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body class="photoupload">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

<div role="main" id="wrapper">

    <div id="content">

        <h1>Photo Uploading</h1>
        <hr>

        <p>Welcome back. Please use this form below to submit your photos. You will be submitting photos which will
        be attached to the following form:</p>

        <p>
            <strong>Form Name:</strong> <?php echo $formname; ?><br/>
            <strong>Form ID: </strong> <?php echo $formid; ?>
        </p>
        <section id="entryform">

            <?php
            $attributes = array('class' => 'email', 'id' => 'photoupload');
            echo form_open_multipart('/site/photo_upload', $attributes);
            ?>
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="clientid" value="<?php echo $clientid; ?>">
            <input type="hidden" name="formid" value="<?php echo $formid; ?>">
            <input type="hidden" name="key" value="<?php echo $key; ?>">

            <div>
                <section id="form4">
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

                            <p><strong>If you do not reach the "Thank You" screen and receive a confirmation email, your
                                    information was not submitted.</strong></p>

                            <p><em>If you experience problems with uploading, contact <a
                                        href="mailto:marketing@curecrete.com">marketing@curecrete.com</a></em></p>
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
<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>forms/assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

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
