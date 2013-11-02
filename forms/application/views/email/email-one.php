<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<body bgcolor="#f6f6f6" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (DYO_email-v3-1) -->
<style>
	a {color: #BFD730; text-decoration: none; padding: 0}
	a, img {
		margin: 0;
		padding: 0;
	}
	img {outline: none; text-decoration: none; border: 0;}
	h3 {font-weight: 400;}
	body {background-color: #f6f6f6;}
</style>
<table id="Table_01" width="704" border="0" cellpadding="0" cellspacing="0" style="margin: 40px auto; color: #939598; background-color: #ffffff; border: 1px solid gray; font-size: 15px; line-height: 18px; font-family: verdana, arial, san-serif">


	<tr>
		<td colspan="1">
			<img alt="Curecrete" src="<?php echo base_url(); ?>assets/img/Curecrete-Logo_120x169.png" width="243" height="123" alt="">
		</td>
		<td colspan="1" style="text-align: right; vertical-align: middle;">


		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div style="width: 510px; margin: 0 20px; ">
				<?php
					if ((isset($firstname) && (strlen($firstname) > 0))) {

						echo '<p>' . $fullname . ',</p>';
					}
				?>



				<?php
					if ((isset($message) && (strlen($message) > 0))) {

						echo $message;
					}
				?>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="1" style="vertical-align: top;">
			<div style="width:240px; padding: 0 20px; float: left">

				<h3>Your Closet Doors</h3>

				<p>
					<strong>Style: </strong> <?php
						if ((isset($style) && (strlen($style) > 0))) {

							echo $style;
						}
					?><br/>
					<strong>Size: </strong><?php
						if ((isset($size) && (strlen($size) > 0))) {

							echo $size;
						}
					?><br/>
					<strong>Number of Panels: </strong> <?php
						if ((isset($panels) && (strlen($panels) > 0))) {

							echo $panels;
						}
					?><br/>
					<strong>Price Range*: </strong> <?php
						if ((isset($price) && (strlen($price) > 0))) {

                            $number = preg_replace("/[^0-9.]/", '', $price);

                            $newprice = $number * 1.25;


							echo $price . ' &mdash; $' . $newprice;
						}
					?><br/>


				</p>
				<?php



				?>


                <?php echo '<a alt="Contact A Specialist" href="'  . base_url() . 'site/consultation?email=' . $cust_email . '&key=' . $key . '">' ?><img alt="Contact A Specialist" href=" src="<?php echo base_url(); ?>assets/images/email-one/specialist.png"></a>

                <?php echo '<a alt="Visit A Showroom" href="'  . base_url() . 'site/consultation?email=' . $cust_email . '&key=' . $key . '">' ?><img alt="Visit A Showroom" src="<?php echo base_url(); ?>assets/images/email-one/showroom.png"></a>

			</div>
		</td>
		<td colspan="1" style="vertical-align: top;">
			<div style="width:240px; padding: 1px 20px;">



				<?php if ($nolocation != '1') { ?>



					<?php if (count($location_array) > 1) {



						echo '<h3>Contact Your Showroom</h3>';

						foreach (array_slice($location_array, 0, 5) as $store) {?>

							<?php
							if ((isset($store['email']) && (strlen($store['email']) > 0))) {

								$email_address = $store['email'];
							}
							?>

							<p>
								Our <a style="color: #BFD730; text-decoration: none;" href="<?php
									if ((isset($store['map_link']) && (strlen($store['map_link']) > 0))) {

										echo $store['map_link'];
									}
								?>"><?php
										if ((isset($store['location']) && (strlen($store['location']) > 0))) {

											echo $store['location'];
										}
									?></a> showroom is
								serving your area.

							</p>
							


							<p>
								<?php
									if ((isset($store['address']) && (strlen($store['address']) > 0))) {

										echo $store['address'];
									}
								?><br/>
								<?php
									if ((isset($store['city']) && (strlen($store['city']) > 0))) {

										echo $store['city'];
									}
								?>
								, <?php
									if ((isset($store['state']) && (strlen($store['state']) > 0))) {

										echo $store['state'];
									}
								?> <?php
									if ((isset($store['zip']) && (strlen($store['zip']) > 0))) {

										echo $store['zip'];
									}
								?><br/>
								t: <?php
									if ((isset($store['telephone']) && (strlen($store['telephone']) > 0))) {

										echo $store['telephone'];
									}
								?><br/>
                                Hours: <?php
                                if ((isset($store['hours']) && (strlen($store['hours']) > 0))) {

                                    echo $store['hours'];
                                }
                                ?><br/>
							</p>

						<?php }

					} else { ?>
						<h3>Your Showroom</h3>
						<p>
							Our <a style="color: #BFD730; text-decoration: none;" href="<?php
								if ((isset($maplink) && (strlen($maplink) > 0))) {

									echo $maplink;
								}
							?>"><?php
									if ((isset($location) && (strlen($location) > 0))) {

										echo $location;
									}
								?></a> showroom is
							serving your area.

						</p>
						


						<p>
							<?php
								if ((isset($address) && (strlen($address) > 0))) {

									echo $address;
								}
							?><br/>
							<?php
								if ((isset($city) && (strlen($city) > 0))) {

									echo $city;
								}
							?>
							, <?php
								if ((isset($state) && (strlen($state) > 0))) {

									echo $state;
								}
							?> <?php
								if ((isset($zip) && (strlen($zip) > 0))) {

									echo $zip;
								}
							?><br/>
							t: <?php
								if ((isset($telephone) && (strlen($telephone) > 0))) {

									echo $telephone;
								}
							?><br/>
                            Hours: <?php
                            if ((isset($hours) && (strlen($hours) > 0))) {

                                echo $hours;
                            }
                            ?><br/>
						</p>

					<?php }?>


				 <?php } ?>

			</div>
		</td>
	</tr>


	<tr>
		<td colspan="2" style="padding: 20px 0; background-color: #F0F0F0;">
			<div style="padding: 0 20px; font-size: 10px">

				<p>
                    Curecrete Distribution, Inc. | 1203 W. Spring Creek Place | Springville, UT 84663 USA | <a style="text-decoration: none; color:#939598" href="http://curecrete.com">curecrete.com</a>
				</p>
			</div>
		</td>
	</tr>

</table>
<!-- End Save for Web Slices -->
</body>
</html>