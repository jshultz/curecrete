$(function() {



    // jQuery for Contest Form
    if ($('#entryform').length > 0) {
        $( "#accordion" ).accordion({
            heightStyle: "content",
            collapsible: true
        });

        $("#accordion").validate({
            rules: {
                AccordionField: {
                    required: true
                }
            },
            ignore: []
        });

        $("#building_use").change(function () {
            var str = "";

            var agricultural = '<option value="barn">Barn</option>' +
                '<option value="botanical">Botanical/Garden</option>' +
                '<option value="dairy">Dairy</option>' +
                '<option value="silo">Silo</option>';

            var airport = '<option value="airline">Airline/Terminal</option>' +
                '<option value="hanger">Hanger</option>' +
                '<option value="tarmac">Tarmac</option>' +
                '<option value="cargo">Cargo Facility</option>';

            var animal = '<option value="zoo">Zoo</option>' +
                '<option value="pen">Pen</option>' +
                '<option value="hospital">Hospital</option>' +
                '<option value="kennel">Kennel</option>' +
                '<option value="stall">Stall</option>';

            var correctional = '<option value="prison">Prison</option>' +
                '<option value="jail">Jail</option>' +
                '<option value="penitentiary">Penitentiary</option>';

            var educational = '<option value="mechanical">Mechanical Room</option>' +
                '<option value="shower">Shower</option>' +
                '<option value="lab">Lab</option>' +
                '<option value="sidewalk">Sidewalk</option>' +
                '<option value="storage">Storage Area</option>';

            var government = '<option value="sidewalks">Sidewalks</option>' +
                '<option value="maintenance">Maintenance Garages</option>' +
                '<option value="curb">Curb and Gutter</option>' +
                '<option value="concrete">Concrete Roadways</option>';

            var parking = '<option value="covered">Outdoor-Covered</option>' +
                '<option value="uncovered">Outdoor-Uncovered</option>' +
                '<option value="indoor">Indoor and Subterranean</option>';

            var recreation = '<option value="arena">Arena/Stadium</option>' +
                '<option value="amusement">Amusement</option>' +
                '<option value="museum">Museum</option>';

            var warehouse = '<option value="applicance">Appliance</option>' +
                '<option value="antique">Antique</option>' +
                '<option value="automotive">Automotive and Tire</option>' +
                '<option value="aviation">Aviation</option>' +
                '<option value="baby">Baby Product</option>'+
                '<option value="bakery">Bakery</option>' +
                '<option value="bath">Bath and Body Product</option>' +
                '<option value="beverage">Beverage</option>' +
                '<option value="book">Book</option>'+
                '<option value="building">Building Material and Hardware</option>' +
                '<option value="camping">Camping and Outdoor</option>' +
                '<option value="chemical">Chemical</option>' +
                '<option value="clothing">Clothing and Textile</option>'+
                '<option value="collectible">Collectible</option>' +
                '<option value="cosmetic">Cosmetic</option>' +
                '<option value="craft">Craft and Hobby</option>' +
                '<option value="decoration">Decoration (Holiday and Home)</option>'+
                '<option value="electronic">Electronic and Computer</option>' +
                '<option value="fitness">Fitness Product</option>' +
                '<option value="food">Food</option>' +
                '<option value="furniture">Furniture</option>'+
                '<option value="gardening">Gardening Product</option>' +
                '<option value="gun">Gun and Ammunition</option>' +
                '<option value="general">General Merchandise</option>' +
                '<option value="gift">Gift and Boutique</option>'+
                '<option value="greeting">Greeting Card</option>' +
                '<option value="groceries">Groceries</option>' +
                '<option value="heavy">Heavy Equipment</option>' +
                '<option value="home">Home Center</option>'+
                '<option value="houseware">House Ware</option>' +
                '<option value="jewelry">Jewelry</option>' +
                '<option value="luggage">Luggage and Bag</option>' +
                '<option value="medical">Medical Supply</option>'+
                '<option value="membership">Membership Club</option>' +
                '<option value="motorcycle">Motorcycle</option>' +
                '<option value="musical">Musical Instrument</option>' +
                '<option value="office">Office Equipment and Supply</option>'+
                '<option value="pet">Pet Supply</option>' +
                '<option value="pharmaceutical">Pharmaceutical and Healthcare</option>' +
                '<option value="photography">Photography</option>' +
                '<option value="plant">Plant and Flower</option>'+
                '<option value="plumbing">Plumbing</option>' +
                '<option value="pottery">Pottery and Glass</option>' +
                '<option value="sewing">Sewing Product</option>' +
                '<option value="shoe">Shoe</option>'+
                '<option value="speculative">Speculative Building</option>' +
                '<option value="sporting">Sporting Good and Recreation</option>' +
                '<option value="storage">Storage Facility</option>' +
                '<option value="tobacco">Tobacco</option>'+
                '<option value="toy">Toy</option>';



            $("#building_use option:selected").each(function () {
                str = $(this).val();
                console.log(str);

                if (str == 'agricultural') {
                    $('#industry').find('option').remove();
                    $('#industry').html(agricultural);
                }

                else if (str == 'airport') {
                    $('#industry').find('option').remove();
                    $('#industry').html(airport);
                }

                else if (str == 'animal') {
                    $('#industry').find('option').remove();
                    $('#industry').html(animal);
                }

                else if (str == 'convention') {
                    $('#industry').find('option').remove();
                    $('#industry').html('<option value="exhibit">Exhibit Hall</option>');
                }

                else if (str == 'correctional') {
                    $('#industry').find('option').remove();
                    $('#industry').html(correctional);
                }

                else if (str == 'educational') {
                    $('#industry').find('option').remove();
                    $('#industry').html(educational);
                }

                else if (str == 'government') {
                    $('#industry').find('option').remove();
                    $('#industry').html(government);
                }

                else if (str == 'parking') {
                    $('#industry').find('option').remove();
                    $('#industry').html(parking);
                }

                else if (str == 'recreation') {
                    $('#industry').find('option').remove();
                    $('#industry').html(recreation);
                }

                else if (str == 'warehouse') {
                    $('#industry').find('option').remove();
                    $('#industry').html(warehouse);
                }

                else {
                    $('#industry').find('option').remove();
                }

            });


//        $("div").text(str);
        })
            .trigger('change');
    }

    // International Purchase Order

    if ($('#international-purchase-form').length > 0) {


        val = 10;
        $('table.order').on('click', 'img.addRow,img.removeRow', function() {

            newRow = '<tr>'
                + '<td class="quantity"><input name="row[' + val + '][orderQuantity]" type="text"></td>'
                + '<td class="size"><input name="row[' + val + '][orderSize]" type="text"></td>'
                + '<td class="product"><input name="row[' + val + '][orderProduct]" type="text"></td>'
                + '<td class="liter"><input name="row[' + val + '][orderLiter]" type="text"></td>'
                + '<td class="container"><input name="row[' + val + '][orderContainer]" type="text"></td>'
                + '<td class="remove"><img src="/forms/assets/img/Plus-32.png" class="addRow"></td>'
                + '</tr>';
            var $this = $(this);
            if ($this.hasClass('addRow')) {
                var curRow = $(this).closest('tr');
				$(this).closest('img.addRow').css('display', 'none');
                val = val + 1;
                $(newRow).insertAfter(curRow);
            } else {
                $(this).closest("tr").fadeOut('slow');
            }


        })

		$('#billSameAsShip').click(function() {
			shipToName = $('#shipToName').val();
			shipToAddress1 = $('#shipToAddress1').val();
			shipToAddress2 = $('#shipToAddress2').val();
			shipToCity = $('#shipToCity').val();
			shipToState = $('#shipToState').val();
			shipToCountry = $('#shipToCountry').val();
			shipToPostal = $('#shipToPostal').val();
			shipToPhone = $('#shipToPhone').val();
			shipToFax = $('#shipToFax').val();
			shipToEmail = $('#shipToEmail').val();
			shipToContact = $('#shipToContact').val();

			$('#billToName').val(shipToName);
			$('#billToAddress1').val(shipToAddress1);
			$('#billToAddress2').val(shipToAddress2);
			$('#billToCity').val(shipToCity);
			$('#billToState').val(shipToState);
			$('#billToCountry').val(shipToCountry);
			$('#billToPostal').val(shipToPostal);
			$('#billToPhone').val(shipToPhone);
			$('#billToFax').val(shipToFax);
			$('#billToEmail').val(shipToEmail);
			$('#billToContact').val(shipToContact);

		})

		$(".radio1").click(function() {
			if ($(this).is(":checked")) {
				var group1 = $('*[class^="require-origin radio1"]');
				$(group1).prop("checked", false);
				$(this).prop("checked", true);

			} else {
				$(this).prop("checked", false);
			}

		});


		$('#destEx_works').click(function() {
			var freight = '';
			var otherFrieght = '';
			freight = $('*[class^="required freight"]');
			if (freight.length == '') {
				freight = $('*[class^="freight required"]');
			}
			otherFrieght = $('*[class^="otherFrieght"]');

			$(freight).prop('disabled', true).removeClass('required');
			$(otherFrieght).prop('disabled', true);
			$('.skip').css('display', 'block');
			$('#destPort').val('');


			// Uncheck the shipping origins and then check Hamburg
//			var group3 = $('*[class^="require-origin radio3"]');
//			$(group3).prop("checked", false);
//			$('#hamburg').prop('checked', true);
		});

		$('#hamburg').click(function() {
			var freight = '';
			var otherFrieght = '';
			freight = $('*[class^="required freight"]');
			if (freight.length == '') {
				freight = $('*[class^="freight required"]');
			}
			otherFrieght = $('*[class^="otherFrieght"]');

			$(freight).prop('disabled', true).removeClass('required');
			$(otherFrieght).prop('disabled', true)

			// Uncheck the shipping origins and then check Ex Works
			var group1 = $('*[class^="require-origin radio1"]');
			$(group1).prop("checked", false);
			$('#destEx_works').prop('checked', true);
			$('.skip').css('display', 'block');
		});


		$('#destPort').click(function() {
			var freight = '';
			var otherFrieght = '';
			freight = $('*[class^="freight"]');
			otherFrieght = $('*[class^="otherFrieght"]');
			$(freight).prop('disabled', false).addClass('required');
			$(otherFrieght).prop('disabled', false);
			$('.skip').css('display', 'none');
		})

		$('#cif').click(function() {
			var freight = '';
			var otherFrieght = '';
			freight = $('*[class^="freight"]');
			otherFrieght = $('*[class^="otherFrieght"]');

			$(freight).prop('disabled', false).addClass('required');
			$(otherFrieght).prop('disabled', false);
			$('#hamburg').prop('checked', false);
			$('.skip').css('display', 'none');
		})

		$('#destForwarder').click(function() {
			var freight = '';
			var otherFrieght = '';
			freight = $('*[class^="freight"]');
			otherFrieght = $('*[class^="otherFrieght"]');

			$(freight).prop('disabled', false).addClass('required');
			$(otherFrieght).prop('disabled', false);
			$('#hamburg').prop('checked', false);
			$('.skip').css('display', 'none');
		})

		$('#springville').click(function() {
			var freight = '';
			var otherFrieght = '';
//			freight = $('*[class^="freight"]');
//			otherFrieght = $('*[class^="otherFrieght"]');
//			$(freight).prop('disabled', false).addClass('required');
//			$(otherFrieght).prop('disabled', false);
//			$('#destEx_works').prop('checked', false);
//			$('.skip').css('display', 'none');
		})

		$('#orlando').click(function() {
			var freight = '';
			var otherFrieght = '';
//			freight = $('*[class^="freight"]');
//			otherFrieght = $('*[class^="otherFrieght"]');
//			$(freight).prop('disabled', false).addClass('required');
//			$(otherFrieght).prop('disabled', false);
//			$('#destEx_works').prop('checked', false);
//			$('.skip').css('display', 'none');
		})

		$('#otherShipping').click(function() {
			var freight = '';
			var otherFrieght = '';
//			freight = $('*[class^="freight"]');
//			otherFrieght = $('*[class^="otherFrieght"]');
//			$(freight).prop('disabled', false).addClass('required');
//			$(otherFrieght).prop('disabled', false);
//			$('#destEx_works').prop('checked', false);
//			$('.skip').css('display', 'none');
		})

		$(".radio2").click(function() {
			if ($(this).is(":checked")) {
				var group2 = $('*[class^="radio2"]');
				$(group2).prop("checked", false);
				$(this).prop("checked", true);
			} else {
				$(this).prop("checked", false);
			}
		});

		$(".require-origin.radio3").click(function() {
			if ($(this).is(":checked")) {
				var group3 = $('*[class^="require-origin radio3"]');
				$(group3).prop("checked", false);
				$(this).prop("checked", true);
			} else {
				$(this).prop("checked", false);
			}
		});

        // Validate Form

        $('#international-purchase-form').validate({
            groups: {
                origin: require_origin,
                doc: require_doc,
				ship: require_ship
            },
            rules: {
                AccordionField: {
                    required: true
                }
            },

            ignore: []
        });

        $.validator.addMethod('require-origin', function(value) {
            return $('.require-origin:checked').size() > 0;
        }, 'Please check at least one box.');

        var origin = $('.require-origin');
        var require_origin = $.map(origin, function(e, i) {
            return $(e).attr("name")
        }).join(" ");


        $.validator.addMethod('require-doc', function(value) {
            return $('.require-doc:checked').size() > 0;
        }, 'Please check at least one box.');

        var docs = $('.require-doc');
        var require_doc = $.map(docs, function(e, i) {
            return $(e).attr("name")
        }).join(" ");


		$.validator.addMethod('require-ship', function(value) {
			return $('.require-ship:checked').size() > 0;
		}, 'Please check at least one box.');

		var ship = $('.require-ship');
		var require_ship = $.map(ship, function(e, i) {
			return $(e).attr("name")
		}).join(" ");

    }




});
