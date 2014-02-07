<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('email');
        $this->load->library('phpmailer');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        var_dump(base_url());

		$this->load->view('welcome_message');

	}

	public function contest()
	{
		$this->load->view('contest');
	}

	public function pdf_report($data, $file_name="report", $sendername="", $senderemail="", $type = "S", $photomessage="", $photouploaded="", $emailsubject=""){
		date_default_timezone_set('UTC');
		$this->load->helper(array('My_Pdf'));   //  Load helper

		create_pdf($data, $file_name, $type, $sendername, $senderemail, $photomessage, $photouploaded, $emailsubject); //Email pdf

		
	}

	public function int_purchase_order() {

        $this->load->view('int_purchase_order');
	}

	public function formsubmit()
	{
		date_default_timezone_set('UTC');
		$sendername = (string)$this->input->post('billToName', TRUE);
		$senderemail = (string)$this->input->post('billToEmail', TRUE);

		$firstName = '';
		$lastName = '';
		$fullName = $sendername;
		$address = (string)$this->input->post('shipToAddress1', TRUE);
		$state = (string)$this->input->post('shipToState', TRUE);
		$zip = (string)$this->input->post('shipToPostal', TRUE);
		$phone = (string)$this->input->post('shipToPhone', TRUE);
		$email = $senderemail;
		$form = 'International Purchase Order';


		$this->Clients_model->create_client($firstName, $lastName, $fullName, $address, $state, $zip, $phone, $email, $form);

		$message = '<body>';
		$message .= '<div id="pdf">';
		$message .= '<img src="http://curecrete.com/forms/assets/img/Curecrete-Logo_120x169.png" style="float:left; margin-left: 10px; margin-right: 10px; height: 100px; width: 71px">';
		$message .= '<h1>International Purchase Order</h1><br/>';
		$message .= '<div class="clearfix">';
		$message .= '<div class="floatleft noborder"><p><strong>Time Stamp (UTC)</strong>: ' . date('Y-m-d, H:i:s') . '</p></div>';
		$message .= '</div>';
		$message .= '<div id="internationalPO">';
		$message .= '<div>
					<div class="floatleft noborder">';
		$message .= '<p><strong>Distributor Placing Order:</strong> ' . (string)$this->input->post('distributor', TRUE) . '</p>';
		$message .= '</div>
					<div class="floatright noborder">';
		$message .= '<p><strong>Date of Order:</strong> ' . (string)$this->input->post('dateOfOrder', TRUE) . '</p>';
		$message .= '</div>';
		$message .= '</div>';


		$message .= '<div class="clearfix">
		<!-- Ship to / Final Destination -->
		<div class="floatleft nobottom" style="border-bottom: 1px solid #ffffff">';
		$message .= '<h2>' . 'Ship To / Final Destination' . '</h2>';

		$message .= '<p>' . '<strong>Name:</strong> '. (string)$this->input->post('shipToName', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Address 1:</strong> ' . (string)$this->input->post('shipToAddress1', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Address 2:</strong> ' . (string)$this->input->post('shipToAddress2', TRUE) .'</p>';
		$message .= '<p>' . '<strong>City:</strong> ' . (string)$this->input->post('shipToCity', TRUE) .'</p>';
		$message .= '<p>' . '<strong>State/Province:</strong> ' . (string)$this->input->post('shipToState', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Country:</strong> ' . (string)$this->input->post('shipToCountry', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Postal Code (<em>if available</em>):</strong> ' . (string)$this->input->post('shipToPostal', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Phone:</strong> ' . (string)$this->input->post('shipToPhone', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Fax:</strong> ' . (string)$this->input->post('shipToFax', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Email:</strong> ' . (string)$this->input->post('shipToEmail', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Contact:</strong> ' . (string)$this->input->post('shipToContact', TRUE) .'</p>';
		$message .= '</div>';



		$message .= '<!-- Bill To / Distributor -->
		<div class="floatright nobottom" style="border-bottom: 1px solid #ffffff">';
		$message .= '<h2>' . 'Bill To / Distributor' . '</h2>';

		$message .= '<p>' . '<strong>Name:</strong> ' . (string)$this->input->post('billToName', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Address 1:</strong> ' . (string)$this->input->post('billToAddress1', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Address 2:</strong> ' . (string)$this->input->post('billToAddress2', TRUE) .'</p>';
		$message .= '<p>' . '<strong>City:</strong> ' . (string)$this->input->post('billToCity', TRUE) .'</p>';
		$message .= '<p>' . '<strong>State:</strong> ' . (string)$this->input->post('billToState', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Country:</strong> ' . (string)$this->input->post('billToCountry', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Postal Code (<em>if available</em>):</strong> ' . (string)$this->input->post('billToPostal', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Phone:</strong> ' . (string)$this->input->post('billToPhone', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Fax:</strong> ' . (string)$this->input->post('billToFax', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Email:</strong> ' . (string)$this->input->post('billToEmail', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Contact:</strong> ' . (string)$this->input->post('billToContact', TRUE) .'</p>';
		$message .= '</div>';
		$message .= '</div>';


		$message .= '<div class="clearfix">
		<!-- Shipping Information -->
		<div class="floatleft notop" style="border-top: 1px solid #ffffff">';
		$message .= '<h2>' . 'Shipping Information' . '</h2>';

		$message .= '<p>' . '<strong>Product Requested On/Before:</strong> ' . (string)$this->input->post('productRequested', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Shipping Method:</strong> ' .'</p>';

        $fedex = (isset($_POST['fedex']))?true:false;
        if ($fedex == '1') { $fedex = '&#x2611;';} else { $fedex = '&#x2610;';}

		$cif = (isset($_POST['cif']))?true:false;
		if ($cif == '1') { $cif = '&#x2611;';} else { $cif = '&#x2610;';}

		$destEx_works = (isset($_POST['destEx_works']))?true:false;
		if ($destEx_works == '1') { $destEx_works = '&#x2611;';} else { $destEx_works = '&#x2610;';}

		$destForwarder = (isset($_POST['destForwarder']))?true:false;
		if ($destForwarder == '1') { $destForwarder = '&#x2611;';} else { $destForwarder = '&#x2610;';}

		$message .= '<table style="width:325px">';
        $message .= '<tr><td style="width 5px; text-align:left"><p>' . $fedex  .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>UPS / FedEx / Private Carrier</strong>: </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $cif  .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>CIF</strong>: </p></td></tr>';
		$message .= '<tr><td colspan="2" style="text-align: left; padding-left: 0"><p>' . (string)$this->input->post('destPort', TRUE) . '</p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $destEx_works .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>EX WORKS / Will Call</strong> </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $destForwarder . '</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Deliver to Forwarder</strong> </p></td></tr>';
		$message .= '</table>';

		$message .= '<h2>' . 'Freight Forwarder' . '</h2>';

		$message .= '<p>' . '<strong>Name</strong>: ' . (string)$this->input->post('shippingName', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Address 1</strong>: ' . (string)$this->input->post('shippingAddress1', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Address 2:</strong> ' . (string)$this->input->post('shippingAddress2', TRUE) .'</p>';
		$message .= '<p>' . '<strong>City:</strong> ' . (string)$this->input->post('shippingCity', TRUE) .'</p>';
		$message .= '<p>' . '<strong>State/Province:</strong> ' . (string)$this->input->post('shippingState', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Country:</strong> ' . (string)$this->input->post('shippingCountry', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Postal Code (<em>if available</em>):</strong> ' . (string)$this->input->post('shippingPostal', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Phone:</strong> ' . (string)$this->input->post('shippingPhone', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Fax:</strong> ' . (string)$this->input->post('shippingFax', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Email:</strong> ' . (string)$this->input->post('shippingEmail', TRUE) .'</p>';
		$message .= '<p>' . '<strong>Contact:</strong> ' . (string)$this->input->post('shippingContact', TRUE) .'</p>';

		$message .= '<h2>' . 'Preferred Shipping Origin (Select one)' . '</h2>';

		$springville = (isset($_POST['springville']))?true:false;
		if ($springville == '1') { $springville = '&#x2610;';} else { $springville = '&#x2610;';}

		$orlando = (isset($_POST['orlando']))?true:false;
		if ($orlando == '1') { $orlando = '&#x2610;';} else { $orlando = '&#x2610;';}

		$hamburg = (isset($_POST['hamburg']))?true:false;
		if ($hamburg == '1') { $hamburg = '&#x2611;';} else { $hamburg = '&#x2610;';}

		$otherShipping = (isset($_POST['otherShipping']))?true:false;
		if ($otherShipping == '1') { $otherShipping = '&#x2611;';} else { $otherShipping = '&#x2610;';}

		$message .= '<table>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $springville .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Springville, Utah USA</strong> </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $orlando .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Orlando, Florida USA</strong> </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $hamburg .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Hamburg, GERMANY</strong> (EX WORKS / Will Call) </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $otherShipping . ' ' .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Other</strong>: </p></td></tr>';
		$message .= '<tr><td colspan="2" style="text-align: left;"><p> ' . (string)$this->input->post('otherShippingText', TRUE) . '</p></td></tr>';
		$message .= '</table>';
		$message .= '</div>';

		$message .= '<!-- Order Information -->
		<div class="floatright notop" style="border-top: 1px solid #ffffff">';

		$message .= '<h2>' . 'Order Information' . '</h2>';

		$orderPONA = (isset($_POST['orderPONA']))?true:false;
		if ($orderPONA == '1') { $orderPONA = '&#x2611;';} else { $orderPONA = '&#x2610;';}

		$message .= '<table style="width:325px">';
		$message .= '<tr><td style="text-align: left; padding-left: 0"><strong>P.O. #:</strong> ' . (string)$this->input->post('orderPONumber', TRUE) .' <span style="margin-left:15px"><strong>N/A:</strong> ' . $orderPONA .'</span></p></td></tr>';
		$message .= '</table>';

		$message .= '<h3>' . 'Order For:' . '</h3>';

		$orderStock = (isset($_POST['orderStock']))?true:false;
		if ($orderStock == '1') { $orderStock = '&#x2611;';} else { $orderStock = '&#x2610;';}

		$orderOverStock = (isset($_POST['orderOverStock']))?true:false;
		if ($orderOverStock == '1') { $orderOverStock = '&#x2611;';} else { $orderOverStock = '&#x2610;';}

		$orderSpecific = (isset($_POST['orderSpecific']))?true:false;
		if ($orderSpecific == '1') { $orderSpecific = '&#x2611;';} else { $orderSpecific = '&#x2610;';}

		$message .= '<table style="width:325px">';
		$message .= '<tr><td style="width 5px; text-align:left">' . $orderStock .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Stock &mdash; <em>Send Project Report Upon Use</em></strong> </td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left">' . $orderOverStock .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Overstock &mdash; <em>Send Project Report Upon Use</em></strong> </td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left">' . $orderSpecific .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Specific Project &mdash; <em>Please List Project(s) Below</em></strong>: </td></tr>';
		$message .= '<tr><td colspan="2" style="text-align: left; padding-left: 0"><p>' . (string)$this->input->post('orderSpecificProjects', TRUE) . '</td></tr></p>';
		$message .= '</table>';

		$message .= '<p><em>Please send project report for the above listed project to customercare@curecrete.com.  If ordering for multiple projects or stock, please send the project report within 5 days of project completion to customercare@curecrete.com</em></p>';


		$message .= '<h2>' . 'Check Documents Required' . '</h2>';

		$checkCertificateInsurance = (isset($_POST['checkCertificateInsurance']))?true:false;
		if ($checkCertificateInsurance == '1') { $checkCertificateInsurance = '&#x2611;';} else { $checkCertificateInsurance = '&#x2610;';}

		$checkCertificateOrigin = (isset($_POST['checkCertificateOrigin']))?true:false;
		if ($checkCertificateOrigin == '1') { $checkCertificateOrigin = '&#x2611;';} else { $checkCertificateOrigin = '&#x2610;';}

		$checkCommercialInvoice = (isset($_POST['checkCommercialInvoice']))?true:false;
		if ($checkCommercialInvoice == '1') { $checkCommercialInvoice = '&#x2611;';} else { $checkCommercialInvoice = '&#x2610;';}

		$checkDeclaration = (isset($_POST['checkDeclaration']))?true:false;
		if ($checkDeclaration == '1') { $checkDeclaration = '&#x2611;';} else { $checkDeclaration = '&#x2610;';}

		$checkBillLading = (isset($_POST['checkBillLading']))?true:false;
		if ($checkBillLading == '1') { $checkBillLading = '&#x2611;';} else { $checkBillLading = '&#x2610;';}

		$checkPackingList = (isset($_POST['checkPackingList']))?true:false;
		if ($checkPackingList == '1') { $checkPackingList = '&#x2611;';} else { $checkPackingList = '&#x2610;';}

		$checkWarehouse = (isset($_POST['checkWarehouse']))?true:false;
		if ($checkWarehouse == '1') { $checkWarehouse = '&#x2611;';} else { $checkWarehouse = '&#x2610;';}

		$checkOther = (isset($_POST['checkOther']))?true:false;
		if ($checkOther == '1') { $checkOther = '&#x2611;';} else { $checkOther = '&#x2610;';}

		$message .= '<table style="width:325px">';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $checkCertificateInsurance .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Certificate of Insurance</strong> </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $checkCertificateOrigin .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Certificate of Origin</strong> </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $checkCommercialInvoice .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Commercial Invoice</strong> </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $checkDeclaration .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Declaration of Non-Wood Packaging</strong> </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $checkBillLading .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Original Bill of Lading</strong> </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $checkPackingList .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Packing List</strong> </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $checkWarehouse .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Warehouse Release</strong> </p></td></tr>';
		$message .= '<tr><td style="width 5px; text-align:left"><p>' . $checkOther .'</p></td><td style="text-align: left; padding-left: 0; width:300px"><p>' . '<strong>Other</strong>: </p></td></tr>';
		$message .= '<tr><td colspan="2" style="text-align: left;"><p>' . (string)$this->input->post('checkOtherText', TRUE) .'</p></td></tr>';
		$message .= '</table>';

		$message .= '<p><em>NOTE: Original documents will be sent via Express Mail to the Distributor and, if applicable, to the warehouse from which the product is being released.</em></p>';

		$message .= '</div>';
		$message .= '</div>';

		$message .= '<h2 class="order">Order (USD)</h2>';
		$message .= '<table border="1"><tbody>';
		$message .= '<tr><th>Quantity</th>
					<th>Size</th>
					<th>Product</th>
					<th>Gallons<br/>Price (USD)</th>
					<th>Container<br/>Price (USD)</th>
					<th class="extension">Extension<br/>(Office Use)</th></tr>';



		foreach($_POST['row'] as $key => $value) {

			if ($value["orderQuantity"] != '') {
				$message .= '<tr><td>' . $value["orderQuantity"] .  '</td><td>' . $value["orderSize"] . '</td><td>' . $value["orderProduct"] . '</td><td>' . $value["orderLiter"] . '</td><td>' . $value["orderContainer"] . '</td><td class="extension"></td></tr>';
			}

		}


		$message .= '<tr><td colspan="4" rowspan="3" border="1" class="comments"><p>Comments (Specific requests on shipment:)</p> <p>' . (string)$this->input->post('orderComments', TRUE) . '</p></td>';
		$message .= '<td style="text-align: right"><p>Warehouse Fee $65:</p></td><td class="extension"> </td></tr>';
		$message .= '<tr><td style="text-align: right"><p>Miscellaneous:</p></td><td class="extension"> </td></tr>';
		$message .= '<tr><td style="text-align: right"><p>Total:</p></td><td class="extension"> </td></tr>';
		$message .= '</tbody></table>';


		$message .= '</div>';
		$message .= '</body>';

        $random = random_string('alnum', 4);
        $file_name = 'IPO-' . $sendername . '-' . $random . '-' . date('dMY');
		$type = "S";

		$this->pdf_report($message, $file_name, $sendername, $senderemail, $type);




		$data['message'] = '<p>Thank you for submitting your <strong>International Purchase Order</strong>.  </p><p>Your order was received on <strong>' . date('m-d-Y, H:i:s') . ' (UTC)</strong>. </p><p>You will be receiving a confirmation email listing the details of your order shortly.  If you have any questions, please email the Customer Care team at <a href="customercare@curecrete.com">customercare@curecrete.com</a>.</p>';
		$data['project'] = '';

		$this->load->view('thankyou', $data);

	}

	public function multiple_upload($upload_dir = './assets/uploads', $config = array())
	{
		$files = array();

		if(empty($config))
		{
			$config['upload_path'] = './assets/uploads';
			$config['allowed_types'] = 'gif|jpg|jpeg|jpe|png';
			$config['max_size']      = '800000000';
		}

		$this->load->library('upload', $config);

		$errors = FALSE;

		foreach($_FILES as $key => $value)
		{
			if( ! empty($value['name']))
			{
				if( ! $this->upload->do_upload($key))
				{
					$data['upload_message'] = $this->upload->display_errors(ERR_OPEN, ERR_CLOSE); // ERR_OPEN and ERR_CLOSE are error delimiters defined in a config file
					$this->load->vars($data);

					$errors = TRUE;
				}
				else
				{
					// Build a file array from all uploaded files
					$files[] = $this->upload->data();
				}
			}
		}

		// There was errors, we have to delete the uploaded files
		if($errors)
		{
			foreach($files as $key => $file)
			{
				@unlink($file['full_path']);
			}
		}
		elseif(empty($files) AND empty($data['upload_message']))
		{
			$this->lang->load('upload');
			$data['upload_message'] = ERR_OPEN.$this->lang->line('upload_no_file_selected').ERR_CLOSE;
			$this->load->vars($data);
		}
		else
		{
			$sendername = (string)$this->input->post('firstname', TRUE) . ' ' . (string)$this->input->post('lastname', TRUE);
			$senderemail = (string)$this->input->post('cust_email', TRUE);

			$retroplate = (isset($_POST['retroplate']))?true:false;
			$ashford = (isset($_POST['ashford_formula']))?true:false;

			$building_feet = (isset($_POST['building_feet']))?true:false;
			$building_meter = (isset($_POST['building_meter']))?true:false;
			$concrete_feet = (isset($_POST['concrete_feet']))?true:false;
			$concrete_meter = (isset($_POST['concrete_meter']))?true:false;

			$message = '<p>' . 'First <strong>Name:</strong> '. (string)$this->input->post('firstname', TRUE) .'</p>';
			$message .= '<p>' . 'Last <strong>Name:</strong> ' . (string)$this->input->post('lastname', TRUE) .'</p>';
			$message .= '<p>' . 'Customer Title: ' . (string)$this->input->post('cust_title', TRUE) .'</p>';
			$message .= '<p>' . 'Customer Company: ' . (string)$this->input->post('cust_company', TRUE) .'</p>';
			$message .= '<p>' . 'Customer <strong>Phone:</strong> ' . (string)$this->input->post('cust_phone', TRUE) .'</p>';
			$message .= '<p>' . 'Customer <strong>Email:</strong> ' . (string)$this->input->post('cust_email', TRUE) .'</p>';
			$message .= '<p>' . 'Was Retroplate Used? ' . $retroplate . '</p>';
			$message .= '<p>' . 'Was Ashford Formula Used? ' . $ashford . '</p>';
			$message .= '<p>' . 'Project <strong>Name:</strong> ' . (string)$this->input->post('project_name', TRUE) .'</p>';
			$message .= '<p>' . 'Project Location: ' . (string)$this->input->post('project_location', TRUE) .'</p>';
			$message .= '<p>' . 'Project Location 2: ' . (string)$this->input->post('project_location_2', TRUE) .'</p>';
			$message .= '<p>' . 'Project Location 3: ' . (string)$this->input->post('project_location_3', TRUE) .'</p>';
			$message .= '<p>' . 'Project <strong>City:</strong> ' . (string)$this->input->post('project_city', TRUE) .'</p>';
			$message .= '<p>' . 'Project State: ' . (string)$this->input->post('project_state', TRUE) .'</p>';
			$message .= '<p>' . 'Project Zip: ' . (string)$this->input->post('project_zip', TRUE) .'</p>';
			$message .= '<p>' . 'Project <strong>Country:</strong> ' . (string)$this->input->post('project_country', TRUE) .'</p>';
			$message .= '<p>' . 'Company Owner/<strong>Name:</strong> ' . (string)$this->input->post('company_owner_name', TRUE) .'</p>';
			$message .= '<p>' . 'Company Location: ' . (string)$this->input->post('company_location', TRUE) .'</p>';
			$message .= '<p>' . 'Company Location 2: ' . (string)$this->input->post('company_location_2', TRUE) .'</p>';
			$message .= '<p>' . 'Company Location 3: ' . (string)$this->input->post('company_location_3', TRUE) .'</p>';
			$message .= '<p>' . 'Company <strong>City:</strong> ' . (string)$this->input->post('company_city', TRUE) .'</p>';
			$message .= '<p>' . 'Company State: ' . (string)$this->input->post('company_state', TRUE) .'</p>';
			$message .= '<p>' . 'Company Zip: ' . (string)$this->input->post('company_zip', TRUE) .'</p>';
			$message .= '<p>' . 'Company <strong>Country:</strong> ' . (string)$this->input->post('company_country', TRUE) .'</p>';
			$message .= '<p>' . 'Building Use: ' . (string)$this->input->post('building_use', TRUE) .'</p>';
			$message .= '<p>' . 'Industry: ' . (string)$this->input->post('industry', TRUE) .'</p>';
			$message .= '<p>' . 'Project Building Size: ' . (string)$this->input->post('project_building_size', TRUE) . ' Feet: ' . $building_feet . ' Meter: ' . $building_meter .'</p>';
			$message .= '<p>' . 'Amount of Concrete Treated: ' . (string)$this->input->post('concrete_amount', TRUE) . ' Feet: ' . $concrete_feet . ' Meter: ' . $concrete_meter .'</p>';
			$message .= '<p>' . 'Project Concrete Amount: ' . (string)$this->input->post('project_concrete_amount', TRUE) .'</p>';
			$message .= '<p>' . 'Project Completion Date: ' . (string)$this->input->post('project_completion_date', TRUE) .'</p>';
			$message .= '<p>' . 'Architect <strong>Name:</strong> ' . (string)$this->input->post('architect_name', TRUE) .'</p>';
			$message .= '<p>' . 'Contractor <strong>Name:</strong> ' . (string)$this->input->post('contractor_name', TRUE) .'</p>';
			$message .= '<p>' . 'Applicator <strong>Name:</strong> ' . (string)$this->input->post('applicator_name', TRUE) .'</p>';
			$message .= '<p>' . 'Photographer Credit: ' . (string)$this->input->post('photographer_credit', TRUE) .'</p>';
			$message .= '<p>' . 'Photographer First <strong>Name:</strong> ' . (string)$this->input->post('photographer_first_name', TRUE) .'</p>';
			$message .= '<p>' . 'Photographer Last <strong>Name:</strong> ' . (string)$this->input->post('photographer_last_name', TRUE) .'</p>';
			$message .= '<p>' . 'Photographer <strong>Phone:</strong> ' . (string)$this->input->post('photographer_phone', TRUE) .'</p>';
			$message .= '<p>' . 'Project Description: ' . (string)$this->input->post('project_description', TRUE) .'</p>';

			$submitted = (isset($_POST['project_already_submitted']))?true:false;

			$message .= '<p>' . 'Project Already Submitted: ' . $submitted .'</p>';

			$photo_terms = (isset($_POST['photo_terms']))?true:false;

			$message .= '<p>' . 'Photo Terms: ' . $photo_terms .'</p>';

			foreach ($files as $key) {

				$message .= '<p>' . 'File: ' . $key['file_name'] . '</p>';
			}

//			Sending Email to Curecrete

			$this->email->set_mailtype("html");;
			$this->email->to('marketing@curecrete.com');
//			$this->email->to('jasshultz@gmail.com');
			$this->email->from($senderemail, $sendername);

			$this->email->subject('Customer Form Submission');

			$this->email->message('<p>You have a new submission. The details are as follows:</p>' . $message);

			$this->email->send();

//			Sending Thank You Email

			$this->email->set_mailtype("html");;
			$this->email->to($senderemail, $sendername);
			$this->email->from('Garrett.Soong@ashfordformula.com', 'Curecrete Postmaster');

			$this->email->subject('Customer Form Submission');

			$message2 = '<p>Thank you for your submission.</p>';
			$message2 .= '<p>We have received your submission.';
			$message2 .= '<p>You can also contact us at 800.998.5664';
			$message2 .= '<p>This is the information which was submitted</p>';
			$message2 .= $message;

			$this->email->message($message2);

			$this->email->send();

			$data['project'] = (string)$this->input->post('project_name', TRUE);


			$this->load->view('thankyou', $data);

			return $files;

		}
	}

    /* Landing Page for Uploading Photos. Form submits to photo_upload */
    public function photoupload() {
        if (isset($_GET) || isset($_POST)) {
            $email = $this->input->get_post('email', TRUE);
            $key = $this->input->get_post('key', TRUE);

            $customer = $this->Clients_model->getCustomer($email, $key);

            foreach ($customer->result_array() as $x) {

                $fullname = $x['FullName'];
                $formid = $x['idforms'];
                $key = $x['uniqueKey'];
                $clientid = $x['idclients'];
                $formname = $x['Form'];

            }

            $data['fullname'] = $fullname;
            $data['formid'] = $formid;
            $data['key'] = $key;
            $data['clientid'] = $clientid;
            $data['formname'] = $formname;
            $data['email'] = $email;

            $this->load->view('landing/photoupload', $data);


        }
    }

    public function photo_upload($upload_dir = './assets/uploads', $config = array())
    {
        $files = array();

        if(empty($config))
        {
            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'gif|jpg|jpeg|jpe|png';
            $config['max_size']      = '800000000';
        }

        $this->load->library('upload', $config);

        $errors = FALSE;

        foreach($_FILES as $key => $value)
        {
            if( ! empty($value['name']))
            {
                if( ! $this->upload->do_upload($key))
                {
                    $data['upload_message'] = $this->upload->display_errors(ERR_OPEN, ERR_CLOSE); // ERR_OPEN and ERR_CLOSE are error delimiters defined in a config file
                    $this->load->vars($data);

                    $errors = TRUE;
                }
                else
                {

                    // Build a file array from all uploaded files
                    $files[] = $this->upload->data();
                }
            }
        }

        // There was errors, we have to delete the uploaded files
        if($errors)
        {
            foreach($files as $key => $file)
            {
                @unlink($file['full_path']);
            }
        }
        elseif(empty($files) AND empty($data['upload_message']))
        {
            $this->lang->load('upload');
            $data['upload_message'] = ERR_OPEN.$this->lang->line('upload_no_file_selected').ERR_CLOSE;
            $this->load->vars($data);
        }
        else
        {

            if (isset($_GET) || isset($_POST)) {
                $email = $this->input->get_post('email', TRUE);
                $key = $this->input->get_post('key', TRUE);

                $customer = $this->Clients_model->getCustomer($email, $key);

                foreach ($customer->result_array() as $x) {

                    $fullname = $x['FullName'];
                    $formid = $x['idforms'];
                    $key = $x['uniqueKey'];
                    $clientid = $x['idclients'];
                    $formname = $x['Form'];
                    $custemail = $x['Email'];

                }

            };


            $this->load->library('phpmailer');

            $body = '<h3>Photos have been submitted for the following project:</h3>';

            $body .= '<p><strong>Form ID: </strong> ' . $formid . '</p>';
            $body .= '<p><strong>Client ID: </strong> ' . $clientid . '</p>';
            $body .= '<p><strong>Distributor Name: </strong> ' . $fullname . '</p>';

            $custbody = '<p>Thank you for Your Submission. The following files were uploaded: </p>';

            foreach ($files as $key) {

                $body .= '<p>' . 'File Uploaded: ' . $key['file_name'] . '</p>';
                $custbody .= '<p>' . 'File Uploaded: ' . $key['file_name'] . '</p>';
            }


//			Sending Email to Curecrete

            $subject = 'Warranty Project Photo Submission';

            $name = 'Curecrete Postmaster';

//          $email = 'jasshultz@gmail.com';
            $email = 'marketing@curecrete.com';

            $this->phpmailer->AddAddress($email);

            $this->phpmailer->IsMail();

            $this->phpmailer->From = 'postmaster@curecrete.com';

            $this->phpmailer->FromName = 'Curecrete Postmaster';

            $this->phpmailer->IsHTML(true);

            $this->phpmailer->Subject = $subject;

            $this->phpmailer->Body = $body;

            $this->phpmailer->Send();

            /* Send Email Confirmation to Customer */

            $this->phpmailer->AddAddress($custemail);

            $this->phpmailer->IsMail();

            $this->phpmailer->From = 'postmaster@curecrete.com';

            $this->phpmailer->FromName = 'Curecrete Postmaster';

            $this->phpmailer->IsHTML(true);

            $this->phpmailer->Subject = $subject;

            $this->phpmailer->Body = $custbody;

            $this->phpmailer->Send();


            $data['message'] = '<p>Thank you for submitting the photos for your <strong>Project Report</strong>.  </p><p>Your submission was received on <strong>' . date('m-d-Y, H:i:s') . ' (UTC)</strong>. </p><p>You will be receiving a confirmation email listing the details of your submission shortly.  If you have any questions, please email the Customer Care team at <a href="customercare@curecrete.com">customercare@curecrete.com</a>.</p>';
            $data['project'] = '';

            $this->load->view('thankyou', $data);

        }
    }

    public function project_report_warranty_request() {

        $this->load->view('project_report_warranty_request');
    }

    public function projectsubmit() {

        date_default_timezone_set('UTC');

        /* Begin Header Check Boxes */

            $data['projectReportOnlyCheck'] = (isset($_POST['projectReportOnlyCheck']))?true:false;
            if ($data['projectReportOnlyCheck'] == '1') { $data['projectReportOnlyCheck'] = '&#x2611;';} else { $data['projectReportOnlyCheck'] = '&#x2610;';}

            $data['warrantyRequestCheck'] = (isset($_POST['warrantyRequestCheck']))?true:false;
            if ($data['warrantyRequestCheck'] == '1') { $data['warrantyRequestCheck'] = '&#x2611;';} else { $data['warrantyRequestCheck'] = '&#x2610;';}

            $data['ashfordFormulaCheck'] = (isset($_POST['ashfordFormulaCheck']))?true:false;
        if ($data['ashfordFormulaCheck'] == '1') { $data['ashfordFormulaCheck'] = '&#x2611;';} else { $data['ashfordFormulaCheck'] = '&#x2610;';}

            $data['retroplateCheck'] = (isset($_POST['retroplateCheck']))?true:false;
        if ($data['retroplateCheck'] == '1') { $data['retroplateCheck'] = '&#x2611;';} else { $data['retroplateCheck'] = '&#x2610;';}

            $data['domesticProjectCheck'] = (isset($_POST['domesticProjectCheck']))?true:false;
        if ($data['domesticProjectCheck'] == '1') { $data['domesticProjectCheck'] = '&#x2611;';} else { $data['domesticProjectCheck'] = '&#x2610;';}

            $data['internationalProjectCheck'] = (isset($_POST['internationalProjectCheck']))?true:false;
        if ($data['internationalProjectCheck'] == '1') { $data['internationalProjectCheck'] = '&#x2611;';} else { $data['internationalProjectCheck'] = '&#x2610;';}

            $data['leedNominatedCheck'] = (isset($_POST['leedNominatedCheck']))?true:false;
        if ($data['leedNominatedCheck'] == '1') { $data['leedNominatedCheck'] = '&#x2611;';} else { $data['leedNominatedCheck'] = '&#x2610;';}

        /* END Header Check Boxes */

        /* Begin Header Text Fields */

            $data['distributorName'] = (string)$this->input->get_post('distributorName', TRUE);

            $data['distributorEmail'] = (string)$this->input->get_post('distributorEmail', TRUE);

            $data['poNumber'] = (string)$this->input->get_post('poNumber', TRUE);

        /* END Header Text Fields */

        /* Begin Project Information */

            $data['projectName'] = (string)$this->input->get_post('projectName', TRUE);

            $data['amountUsed'] = (string)$this->input->get_post('amountUsed', TRUE);

            $data['address'] = (string)$this->input->get_post('address', TRUE);

            $data['squareDistance'] = (string)$this->input->get_post('squareDistance', TRUE);

            $data['city'] = (string)$this->input->get_post('city', TRUE);

            $data['initialApplicationDate'] = (string)$this->input->get_post('initialApplicationDate', TRUE);

            $data['state'] = (string)$this->input->get_post('state', TRUE);

            $data['finalApplicationDate'] = (string)$this->input->get_post('finalApplicationDate', TRUE);

            $data['country'] = (string)$this->input->get_post('country', TRUE);

            $data['postalCode'] = (string)$this->input->get_post('postalCode', TRUE);

            $data['building_use'] = (string)$this->input->get_post('building_use', TRUE);

            $data['projectOwner'] = (string)$this->input->get_post('projectOwner', TRUE);

            $data['industry'] = (string)$this->input->get_post('industry', TRUE);

            $data['specifierArchitect'] = (string)$this->input->get_post('specifierArchitect', TRUE);

            $data['comments'] = (string)$this->input->get_post('comments', TRUE);

            $data['generalContractor'] = (string)$this->input->get_post('generalContractor', TRUE);

            $data['applicator'] = (string)$this->input->get_post('applicator', TRUE);

            $data['flatWorker'] = (string)$this->input->get_post('flatWorker', TRUE);

        /* END Project Information */

        /* Begin Drum Information */

        $tempdrums[] = $this->input->get_post('group');

            foreach($tempdrums as $key => $value) {

                $data['drumdata'] = $value;

            }

        /* END Drum Information */

        /* Begin Warranty Request */

            $data['dateFloorWarrantied'] = (string)$this->input->get_post('dateFloorWarrantied', TRUE);

            $data['applicatorAddress'] = (string)$this->input->get_post('applicatorAddress', TRUE);

            $data['applicatorCompany'] = (string)$this->input->get_post('applicatorCompany', TRUE);

            $data['applicatorCity'] = (string)$this->input->get_post('applicatorCity', TRUE);

            $data['applicatorOwner'] = (string)$this->input->get_post('applicatorOwner', TRUE);

            $data['applicatorState'] = (string)$this->input->get_post('applicatorState', TRUE);

            $data['applicatorPhone'] = (string)$this->input->get_post('applicatorPhone', TRUE);

            $data['applicatorCountry'] = (string)$this->input->get_post('applicatorCountry', TRUE);

            $data['applicatorFax'] = (string)$this->input->get_post('applicatorFax', TRUE);

            $data['applicatorPostal'] = (string)$this->input->get_post('applicatorPostal', TRUE);

        /* END Warranty Request */

        /* Begin Warranty Request 2 */

            $data['environmentalConditions'] = (string)$this->input->get_post('environmentalConditions', TRUE);

            $data['weatherConditions'] = (string)$this->input->get_post('weatherConditions', TRUE);

            $data['ashfordForulaCureYes'] = (isset($_POST['ashfordForulaCureYes']))?true:false;
        if ($data['ashfordForulaCureYes'] == '1') { $data['ashfordForulaCureYes'] = '&#x2611;';} else { $data['ashfordForulaCureYes'] = '&#x2610;';}

            $data['ashfordForulaCureNo'] = (isset($_POST['ashfordForulaCureNo']))?true:false;
        if ($data['ashfordForulaCureNo'] == '1') { $data['ashfordForulaCureNo'] = '&#x2611;';} else { $data['ashfordForulaCureNo'] = '&#x2610;';}

            $data['appliedOnExistingFloor'] = (isset($_POST['appliedOnExistingFloor']))?true:false;
        if ($data['appliedOnExistingFloor'] == '1') { $data['appliedOnExistingFloor'] = '&#x2611;';} else { $data['appliedOnExistingFloor'] = '&#x2610;';}

            $data['appliedAtTimeOfPlacement'] = (isset($_POST['appliedAtTimeOfPlacement']))?true:false;
        if ($data['appliedAtTimeOfPlacement'] == '1') { $data['appliedAtTimeOfPlacement'] = '&#x2611;';} else { $data['appliedAtTimeOfPlacement'] = '&#x2610;';}

            $data['hoursAfterPlacementChecked'] = (isset($_POST['hoursAfterPlacementChecked']))?true:false;
        if ($data['hoursAfterPlacementChecked'] == '1') { $data['hoursAfterPlacementChecked'] = '&#x2611;';} else { $data['hoursAfterPlacementChecked'] = '&#x2610;';}

            $data['hoursAfterPlacementNumbers'] = (string)$this->input->get_post('hoursAfterPlacementNumbers', TRUE);

            $data['floorBurnishedYes'] = (isset($_POST['floorBurnishedYes']))?true:false;
        if ($data['floorBurnishedYes'] == '1') { $data['floorBurnishedYes'] = '&#x2611;';} else { $data['floorBurnishedYes'] = '&#x2610;';}

            $data['floorBurnishedNo'] = (isset($_POST['floorBurnishedNo']))?true:false;
        if ($data['floorBurnishedNo'] == '1') { $data['floorBurnishedNo'] = '&#x2611;';} else { $data['floorBurnishedNo'] = '&#x2610;';}

            $data['applicationSupervisedByDistributorYes'] = (isset($_POST['applicationSupervisedByDistributorYes']))?true:false;
        if ($data['applicationSupervisedByDistributorYes'] == '1') { $data['applicationSupervisedByDistributorYes'] = '&#x2611;';} else { $data['applicationSupervisedByDistributorYes'] = '&#x2610;';}

            $data['applicationSupervisedByDistributorNo'] = (isset($_POST['applicationSupervisedByDistributorNo']))?true:false;
        if ($data['applicationSupervisedByDistributorNo'] == '1') { $data['applicationSupervisedByDistributorNo'] = '&#x2611;';} else { $data['applicationSupervisedByDistributorNo'] = '&#x2610;';}

            $data['maintenanceBrochureGivenYes'] = (isset($_POST['maintenanceBrochureGivenYes']))?true:false;
        if ($data['maintenanceBrochureGivenYes'] == '1') { $data['maintenanceBrochureGivenYes'] = '&#x2611;';} else { $data['maintenanceBrochureGivenYes'] = '&#x2610;';}

            $data['maintenanceBrochureGivenNo'] = (isset($_POST['maintenanceBrochureGivenNo']))?true:false;
        if ($data['maintenanceBrochureGivenNo'] == '1') { $data['maintenanceBrochureGivenNo'] = '&#x2611;';} else { $data['maintenanceBrochureGivenNo'] = '&#x2610;';}

        /* END Warranty Request 2 */

        /* Begin Corporate Projects */

            $data['corporateProjectsText'] = (string)$this->input->get_post('corporateProjectsText', TRUE);

        /* END Corporate Projects */

        /* File Handling */

        $files = array();

        if(empty($config))
        {
            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'gif|jpg|jpeg|jpe|png';
            $config['max_size']      = '800000000';
        }

        $this->load->library('upload', $config);

        $errors = FALSE;

        foreach($_FILES as $key => $value)
        {
            if( ! empty($value['name']))
            {
                if( ! $this->upload->do_upload($key))
                {
                    $data['upload_message'] = $this->upload->display_errors(ERR_OPEN, ERR_CLOSE); // ERR_OPEN and ERR_CLOSE are error delimiters defined in a config file
                    // $this->load->vars($data);

                    $errors = TRUE;
                }
                else
                {
                    // Build a file array from all uploaded files
                    $files[] = $this->upload->data();
                }
            }
        }

        $data['files'] = $files;

        /* Add the Customer to the Database */


        $firstName = '';
        $lastName = '';
        $fullName = $data['distributorName'];
        $address = $data['address'];
        $state = $data['state'];
        $zip = $data['postalCode'];
        $phone = '';
        $email = $data['distributorEmail'];
        $form = 'Project Report/Warranty Request Form';


        $data['formid'] = $this->Clients_model->create_client($firstName, $lastName, $fullName, $address, $state, $zip, $phone, $email, $form);

        $key = $this->Clients_model->get_key($data['formid']);

        $data['uploadPhotosYes'] = (isset($_POST['uploadPhotosYes']))?true:false;



        if ($data['uploadPhotosYes'] == '1') {
            $photouploaded = '1';
        } else {
            $photouploaded = '0';
        }

        $photomessage = '<p><a alt="Photo Submission" href="'  . base_url() . 'site/photoupload?email=' . $email . '&key=' . $key . '"><strong>CLICK HERE TO SUBMIT PROJECT PHOTOS</strong></a><br/>';

        $photomessage .= 'If you would like to upload photos for this project now, or at a later time, please click on the link above. </p><p> <span style="font-size: 13px;"><em>(PLEASE NOTE: This link is a unique link that connects your photos to the project listed below and is identified by the "<strong>Customer Unique Form ID</strong>" number)</em></span> </p>';

        $photomessage .= 'Questions or concerns regarding your submission?  Contact Customer Care at <a href="mailto:customercare@curecrete.com">customercare@curecrete.com</a> or call 801-489-5663.';

        $photomessage .= '<p>&nbsp;</p>';

        $body = $this->load->view('email_forms/email_project_report_warranty_request', $data, TRUE);


        $type = "S";

        $random = random_string('alnum', 4);

        $file_name = 'PR-WR-' . $data['distributorName'] . '-' . $data['formid'] . '-' . date('dMY');

        $emailsubject = 'PR/WR Form Submission-' . $data['distributorName'] . '-' . $data['formid'];

        $this->pdf_report($body, $file_name, $data['distributorName'], $data['distributorEmail'], $type, $photomessage, $photouploaded, $emailsubject);
        $data['message'] = '<div style="text-align:center;">';
        $data['message'] .= '<p>Thank you for submitting your <strong>Project Report/Warranty Request</strong>.  </p><p>Your submission was received on <strong>' . date('m-d-Y, H:i:s') . ' (UTC)</strong>. </p><p>You will be receiving a confirmation email listing the details of your submission shortly.</p>';
        $data['message'] .= '<p><strong><em><span style="text-decoration: underline">Questions Regarding Your Submission?</span></em></strong><br/><a href="mailto:customercare@curecrete.com">customercare@curecrete.com</a> or 801-489-5663</p>';
	    $data['message'] .= '<p><strong><em><span style="text-decoration: underline">Questions Regarding Inventory and Consignment?</span> </em></strong><br/><a href="mailto:projectreports@curecrete.com">projectreports@curecrete.com</a></p>';
	    $data['message'] .= '<p>Would you like to submit another form?<br/><a href="' . base_url() . 'site/project_report_warranty_request">Click Here</a></p>';
        $data['message'] .= '</div>';
        $data['project'] = '';

        $this->load->view('thankyou', $data);

        /* End File Handling */



    }

	public function thankyou() {
		$this->load->view('thankyou');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */