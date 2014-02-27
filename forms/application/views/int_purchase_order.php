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

<div id="content" class="international clearfix">

<section>
	<img class="floatleft" src="/forms/assets/img/Curecrete-Logo_120x169.png" style="margin-right: 10px; height: 100px; width: 71px">
	<h1>International Purchase Order</h1>
	<hr>
</section>
<div class="floatleft" style="width:400px;">

	<p style="margin-top: 0"> This form is intended to be used for the ordering of all Curecrete Distribution, Inc. products including: Ashford Formula™, RetroPlate®, CreteStrip™, CreteFill Pro Series™ and CreteClean plus with Scar Guard™.</p>

	<p class="allcaps"><strong>Instructions:</strong></p>

	<div style="float: left; width: 400px">
		<ol style="padding-left: 15px; margin-top:0;">
			<li>Please complete all sections.</li>
			<li>Required fields are identified by an asterisk (*).</li>
			<li>Press “Submit Order” to submit the form.</li>
			<li>A “Thank You” confirmation webpage will let you know that your order has been successfully submitted to the Customer Care team.</li>
			<li> If you do not reach the “Thank You” confirmation webpage, your order has not been received.   Please review the form to make sure all the required fields have been completed and then re-submit the order.</li>
			<li>Once your order has been successfully completed, you will also receive a confirmation email detailing your entire order submission to be kept for your records.</li>
			<li>If you continue to experience problems with this form, contact the Customer Care team at <a href="mailto:customercare@curecrete.com">customercare@curecrete.com</a> or by phone at <strong>801-489-5663</strong>.</li>
		</ol>
	</div>
</div>
<div class="floatright" style="width: 215px;">
	<p style="margin-top:0;">
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
<section id="internationalPO">

	<?php
		$attributes = array('class' => 'email', 'id' => 'international-purchase-form');
		echo form_open('/site/formsubmit', $attributes);
	?>

	<div class="clearfix">
		<section class="floatleft noborder">
			<label for="distributor"><strong>*Distributor Placing Order:</strong></label>
			<input class="floatright required" name="distributor" id="distributor" style="width: 190px">
		</section>
		<section class="floatright noborder">
			<label for="dateOfOrder"><strong>*Date of Order</strong> (MM/DD/YYYY):</label>
			<input class="floatright required" name="dateOfOrder" id="dateOfOrder" style="width: 169px">
		</section>
	</div>

	<div class="clearfix">
		<hr>
		<!-- Ship to / Final Destination -->
		<section class="floatleft">
			<h2>Ship To / Final Destination</h2>
			<div class="row">
				<label for="shipToName">*Name:</label>
				<input name="shipToName" id="shipToName" type="text" class="required">
			</div>
			<div class="row">
				<label for="shipToAddress1">*Address 1:</label>
				<input name="shipToAddress1" id="shipToAddress1" type="text" class="required">
			</div>
			<div class="row">
				<label for="shipToAddress2">Address 2:</label>
				<input name="shipToAddress2" id="shipToAddress2" type="text">
			</div>
			<div class="row">
				<label for="shipToCity">*City:</label>
				<input name="shipToCity" id="shipToCity" type="text" class="required">
			</div>
			<div class="row">
				<label for="shipToState">State/Province:</label>
				<input name="shipToState" id="shipToState" type="text">
			</div>
			<div class="row">
				<label for="shipToCountry">*Country:</label>
				<input name="shipToCountry" id="shipToCountry" type="text" class="required">
			</div>
			<div class="row">
				<label for="shipToPostal">Postal Code (<em>if available</em>):</label>
				<input name="shipToPostal" id="shipToPostal" type="text">
			</div>
			<div class="row">
				<label for="shipToPhone">*Phone:</label>
				<input name="shipToPhone" id="shipToPhone" type="text" class="required">
			</div>
			<div class="row">
				<label for="shipToFax">Fax:</label>
				<input name="shipToFax" id="shipToFax" type="text">
			</div>
			<div class="row">
				<label for="shipToEmail">*Email:</label>
				<input name="shipToEmail" id="shipToEmail" type="text" class="email required">
			</div>
			<div class="row">
				<label for="shipToContact">*Contact:</label>
				<input name="shipToContact" id="shipToContact" type="text" class="required">
			</div>
		</section>
		<!-- Bill to / Final Distributor -->
		<section class="floatright">
			<h2>Bill To / Distributor</h2>
			<div class="row">
				<input name="billSameAsShip" id="billSameAsShip" type="checkbox" style="margin:0 10px 0 5px;">
				<label for="billSameAsShip">Billing Address is same as Ship To Address</label>
			</div>

			<div class="row">
				<label for="billToName">*Name:</label>
				<input name="billToName" id="billToName" type="text" class="required">
			</div>
			<div class="row">
				<label for="billToAddress1">*Address 1:</label>
				<input name="billToAddress1" id="billToAddress1" type="text" class="required">
			</div>
			<div class="row">
				<label for="billToAddress2">Address 2:</label>
				<input name="billToAddress2" id="billToAddress2" type="text">
			</div>
			<div class="row">
				<label for="billToCity">*City:</label>
				<input name="billToCity" id="billToCity" type="text" class="required">
			</div>
			<div class="row">
				<label for="billToState">State/Province:</label>
				<input name="billToState" id="billToState" type="text">
			</div>
			<div class="row">
				<label for="billToCountry">*Country:</label>
				<input name="billToCountry" id="billToCountry" type="text" class="required">
			</div>
			<div class="row">
				<label for="billToPostal">Postal Code (<em>if available</em>):</label>
				<input name="billToPostal" id="billToPostal" type="text">
			</div>


			<div class="row">
				<label for="billToPhone">*Phone:</label>
				<input name="billToPhone" id="billToPhone" type="text" class="required">
			</div>
			<div class="row">
				<label for="billToFax">Fax:</label>
				<input name="billToFax" id="billToFax" type="text">
			</div>
			<div class="row">
				<label for="billToEmail">*Email:</label>
				<input name="billToEmail" id="billToEmail" type="text" class="email required">
			</div>
			<div class="row">
				<label for="billToContact">*Contact:</label>
				<input name="billToContact" id="billToContact" type="text" class="required">
			</div>
		</section>
	</div>
	<div class="clearfix">
		<!-- Shipping Information -->
		<section class="floatleft">
			<h2>Shipping Information</h2>
			<div style="width: 350px">
				<label class="floatleft" for="productRequested">*Product Requested<br/>On/Before (MM/DD/YYYY):</label>
				<input class="floatright required" name="productRequested" id="productRequested" type="text" style="width: 168px; margin-top:14px">
			</div>
			<div class="clearfix">
				<label style="margin: 5px 0;" for="destination"><strong>Shipping Method (<em>Select one</em>):</strong></label>
					<div class="floatleft">
                        <span class="clearfix">
                            <input name="fedex" id="fedex" type="checkbox" class="require-method radio1">
							<label for="destPort">UPS / FedEx / Private Carrier</label><br>
                        </span>
						<span class="clearfix">
							<input name="cif" id="cif" type="checkbox" class="require-method radio1">
							<label for="destPort">CIF – (<em>Specify port/destination below</em>)</label><br>
							<input class="floatleft" name="destPort" id="destPort" type="text" style="width: 345px;">
						</span><br/>
						<span>
							<input name="destEx_works" id="destEx_works" type="checkbox" class="require-method radio1">
							<label for="destEx_works">EX WORKS / Will Call</label>
						</span>
						<span>
							<input name="destForwarder" id="destForwarder" type="checkbox" class="require-method radio1">
							<label for="destForwarder">Deliver to Forwarder</label>
						</span>
					</div>
			</div>

			<div class="clearfix">
				<label style="margin: 5px 0;"><strong>Freight Forwarder: </strong><span class="skip">(Not necessary for EX WORKS / Will Call)</span> </label>
					<div class="floatleft" style="width: 350px">
						<div class="row">
							<label for="shippingName">*Name:</label>
							<input name="shippingName" id="shippingName" type="text" class="required freight">
						</div>
						<div class="row">
							<label for="shippingAddress1">*Address 1:</label>
							<input name="shippingAddress1" id="shippingAddress1" type="text" class="required freight">
						</div>
						<div class="row">
							<label for="shippingAddress2">Address 2:</label>
							<input name="shippingAddress2" id="shippingAddress2" type="text" class="otherFrieght">
						</div>
						<div class="row">
							<label for="shippingCity">*City:</label>
							<input name="shippingCity" id="shippingCity" type="text" class="required freight">
						</div>
						<div class="row">
							<label for="shippingState">State/Province:</label>
							<input name="shippingState" id="shippingState" type="text" class="otherFrieght">
						</div>
						<div class="row">
							<label for="shippingCountry">Country:</label>
							<input name="shippingCountry" id="shippingCountry" type="text" class="otherFrieght">
						</div>
						<div class="row">
							<label for="shippingPostal">Postal Code (<em>if available</em>):</label>
							<input name="shippingPostal" id="shippingPostal" type="text" class="otherFrieght">
						</div>
						<div class="row">
							<label for="shippingPhone">*Phone:</label>
							<input name="shippingPhone" id="shippingPhone" type="text" class="required freight">
						</div>
						<div class="row">
							<label for="shippingFax">Fax:</label>
							<input name="shippingFax" id="shippingFax" type="text" class="otherFrieght">
						</div>
						<div class="row">
							<label for="shippingEmail">*Email:</label>
							<input name="shippingEmail" id="shippingEmail" type="text" class="required freight">
						</div>
						<div class="row">
							<label for="shippingContact">*Contact:</label>
							<input name="shippingContact" id="shippingContact" type="text" class="required freight">
						</div>
					</div>
			</div>

			<div class="clearfix">
				<label style="margin: 5px 0;" for="shippingOrigin"><strong>*Preferred Shipping Origin (<em>Select one</em>):</strong></label>
					<div class="floatleft">
						<div>
							<input name="springville" id="springville" type="checkbox" class="require-origin radio3">
							<label for="springville">Springville, Utah USA</label><br/>
						</div>
						<div>
							<input name="orlando" id="orlando" type="checkbox" class="require-origin radio3">
							<label for="orlando">Orlando, Florida USA</label><br/>
						</div>
						<div>
							<input name="hamburg" id="hamburg" type="checkbox" class="require-origin radio3">
							<label for="hamburg">Hamburg, GERMANY (<em>EX WORKS / Will Call</em>)</label><br/>
						</div>
						<div>
							<input name="otherShipping" id="otherShipping" type="checkbox" class="require-origin radio3">
							<label for="otherShipping">Other</label><br/>
							<input name="otherShippingText" id="otherShippingText" type="text" style="margin-left: 9px; width: 335px">
						</div>
					</div>
			</div>

		</section>
		<!-- Order Information -->
		<section class="floatright">
			<h2>Order Information</h2>
			<div>
				<span class="clearfix" style="width: 300px">
					<label class="floatleft" for="orderPONumber">P.O. #:</label>
					<input class="floatleft" name="orderPONumber" type="text" style="margin-left: 10px;" class="required">
					<input class="floatright" name="orderPONA" type="checkbox">
					<label class="floatright" for="orderPONA">N/A</label>
				</span>
			</div>
			<div>
			<label style="margin: 5px 0;" for="orderOrderNumber"><strong>Order For (<em>Select one</em>):</strong></label>
			</div>
			<div>
				<span class="checkbox">
					<input name="orderStock" id="orderStock" type="checkbox" class="require-order radio2">
					<label for="orderStock">Stock &mdash; <em>Send Project Report Upon Use</em></label>
				</span><br/>
				<span class="checkbox">
					<input name="orderOverStock" id="orderOverStock" type="checkbox" class="require-order radio2">
					<label for="orderOverStock">Overstock &mdash; <em>Send Project Report Upon Use</em></label>
				</span> <br/>
				<span class="checkbox">
					<input name="orderSpecific" id="orderSpecific" type="checkbox" class="require-order radio2">
					<label for="orderSpecific">Specific Project &mdash; <em>Please List Project(s) Below</em>:</label>
				</span> <br/>
				<textarea name="orderSpecificProjects" id="orderSpecificProjects" style="width: 340px"></textarea>
				<p><em>Please send project report for the above listed project to <a href="mailto:customercare@curecrete.com">customercare@curecrete.com</a>.  If ordering for multiple projects or stock, please send the project report within 5 days of project completion to <a href="mailto:customercare@curecrete.com">customercare@curecrete.com</a> </em></p>
			</div>
		</section>
		<section class="floatright">
			<h2>Check Documents Required</h2>
			<p><em>Select all that apply.</em></p>
			
				<div class="clearfix">
					<div>
						<input name="checkCertificateInsurance" id="checkCertificateInsurance" type="checkbox" class="require-doc">
						<label for="checkCertificateInsurance">Certificate of Insurance</label><br/>
					</div>


					<div>
						<input name="checkCertificateOrigin" id="checkCertificateOrigin" type="checkbox" class="require-doc">
						<label for="checkCertificateOrigin">Certificate of Origin</label><br/>
					</div>


					<div>
						<input name="checkCommercialInvoice" id="checkCommercialInvoice" type="checkbox" class="require-doc">
						<label for="checkCommercialInvoice">Commercial Invoice</label><br/>
					</div>


					<div>
						<input name="checkDeclaration" id="checkDeclaration" type="checkbox" class="require-doc">
						<label for="checkDeclaration">Declaration of Non-Wood Packaging</label><br/>
					</div>


					<div>
						<input name="checkBillLading" id="checkBillLading" type="checkbox" class="require-doc">
						<label for="checkBillLading">Original Bill of Lading</label><br/>
					</div>


					<div>
						<input name="checkPackingList" id="checkPackingList" type="checkbox" class="require-doc">
						<label for="checkPackingList">Packing List</label><br/>
					</div>


					<div>
						<input name="checkWarehouse" id="checkWarehouse" type="checkbox" class="require-doc">
						<label for="checkWarehouse">Warehouse Release</label><br/>
					</div>


					<div>
						<input name="checkOther" id="checkOther" type="checkbox" class="require-doc">
						<label for="checkOther">Other</label><br/>
						<input class="floatleft" name="checkOtherText" id="checkOtherText" type="text" style="margin-left:10px; width: 320px">
					</div>
				</div>
			
			<p><em>NOTE: Original documents will be sent via Express Mail to the Distributor and, if applicable, to the warehouse from which the product is being released.</em></p>
		</section>
	</div>
	<div class="clearfix wide">
		<h2>Order (USD)</h2>
		<!-- Order Items -->
		<table class="order">
			<tbody>
			<tr>
				<th>Quantity</th>
				<th>Size</th>
				<th>Product</th>
				<th>Gallons<br/>Price (USD)</th>
				<th>Container<br/>Price (USD)</th>
				<th>Add Row</th>

			</tr>
			<tr>
				<td class="quantity"><input name="row[0][orderQuantity]" type="text" class="required"></td>
				<td class="size"><input name="row[0][orderSize]" type="text" class="required"> </td>
				<td class="product"><input name="row[0][orderProduct]" type="text" class="required"> </td>
				<td class="liter"><input name="row[0][orderLiter]" type="text" class=""> </td>
				<td class="container"><input name="row[0][orderContainer]" type="text" class=""></td>
				<td class="remove"></td>
			</tr>
			<tr>
				<td class="quantity"><input name="row[1][orderQuantity]" type="text" ></td>
				<td class="size"><input name="row[1][orderSize]" type="text" > </td>
				<td class="product"><input name="row[1][orderProduct]" type="text" > </td>
				<td class="liter"><input name="row[1][orderLiter]" type="text"> </td>
				<td class="container"><input name="row[1][orderContainer]" type="text"></td>
				<td class="remove"></td>
			</tr>
			<tr>
				<td class="quantity"><input name="row[2][orderQuantity]" type="text" ></td>
				<td class="size"><input name="row[2][orderSize]" type="text" > </td>
				<td class="product"><input name="row[2][orderProduct]" type="text" > </td>
				<td class="liter"><input name="row[2][orderLiter]" type="text"> </td>
				<td class="container"><input name="row[2][orderContainer]" type="text"></td>
				<td class="remove"></td>
			</tr>
			<tr>
				<td class="quantity"><input name="row[3][orderQuantity]" type="text" ></td>
				<td class="size"><input name="row[3][orderSize]" type="text" > </td>
				<td class="product"><input name="row[3][orderProduct]" type="text" > </td>
				<td class="liter"><input name="row[3][orderLiter]" type="text"> </td>
				<td class="container"><input name="row[3][orderContainer]" type="text"></td>
				<td class="remove"></td>
			</tr>
			<tr>
				<td class="quantity"><input name="row[4][orderQuantity]" type="text" ></td>
				<td class="size"><input name="row[4][orderSize]" type="text" > </td>
				<td class="product"><input name="row[4][orderProduct]" type="text" > </td>
				<td class="liter"><input name="row[4][orderLiter]" type="text"> </td>
				<td class="container"><input name="row[4][orderContainer]" type="text"></td>
				<td class="remove"></td>
			</tr>
			<tr>
				<td class="quantity"><input name="row[5][orderQuantity]" type="text" ></td>
				<td class="size"><input name="row[5][orderSize]" type="text" > </td>
				<td class="product"><input name="row[5][orderProduct]" type="text" > </td>
				<td class="liter"><input name="row[5][orderLiter]" type="text"> </td>
				<td class="container"><input name="row[5][orderContainer]" type="text"></td>
				<td class="remove"></td>
			</tr>
			<tr>
				<td class="quantity"><input name="row[6][orderQuantity]" type="text" ></td>
				<td class="size"><input name="row[6][orderSize]" type="text" > </td>
				<td class="product"><input name="row[6][orderProduct]" type="text" > </td>
				<td class="liter"><input name="row[6][orderLiter]" type="text"> </td>
				<td class="container"><input name="row[6][orderContainer]" type="text"></td>
				<td class="remove"></td>
			</tr>
			<tr>
				<td class="quantity"><input name="row[7][orderQuantity]" type="text" ></td>
				<td class="size"><input name="row[7][orderSize]" type="text" > </td>
				<td class="product"><input name="row[7][orderProduct]" type="text" > </td>
				<td class="liter"><input name="row[7][orderLiter]" type="text"> </td>
				<td class="container"><input name="row[7][orderContainer]" type="text"></td>
				<td class="remove"></td>
			</tr>
			<tr>
				<td class="quantity"><input name="row[8][orderQuantity]" type="text" ></td>
				<td class="size"><input name="row[8][orderSize]" type="text" > </td>
				<td class="product"><input name="row[8][orderProduct]" type="text" > </td>
				<td class="liter"><input name="row[8][orderLiter]" type="text"> </td>
				<td class="container"><input name="row[8][orderContainer]" type="text"></td>
				<td class="remove"></td>
			</tr>
			<tr>
				<td class="quantity"><input name="row[9][orderQuantity]" type="text" ></td>
				<td class="size"><input name="row[9][orderSize]" type="text" > </td>
				<td class="product"><input name="row[9][orderProduct]" type="text" > </td>
				<td class="liter"><input name="row[9][orderLiter]" type="text"> </td>
				<td class="container"><input name="row[9][orderContainer]" type="text"></td>
				<td class="remove"><img src="/forms/assets/img/Plus-32.png" class="addRow"></td>
			</tr>
			</tbody>

		</table>
		<table style="width: 712px; float: left">
			<tbody>
			<tr>
				<td rowspan="3" class="comments" style="width:486px">
					<textarea name="orderComments" id="orderComments">Comments (Specific Requests on Shipment):</textarea>
				</td>
				<td rowspan="3" style="text-align: center; width: 200px"><input style="margin:0 auto;height: 35px;width: 120px;font-size: 16px;line-height: 16px;" type="submit" name="submit" class="submit" value="Submit Order"></td>


			</tr>
			</tbody>
		</table>

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
