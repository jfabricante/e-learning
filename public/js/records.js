var RecordsData = function() {

	var init = function() {
		const $ed_table  = $('#educational-attainment tbody');
		const $pre_table = $('#previous-employment tbody');
		const $tra_table = $('#training-attended tbody');
		const $edu_add   = $('#edu-add');
		const $emp_add   = $('#emp-add');
		const $tra_add   = $('#tra-add');
		const $formEl    = $('#m_form');

		// inputs
		const $firstname       = $('#firstname');
		const $middlename      = $('#middlename');
		const $lastname        = $('#lastname');
		const $gender          = $('input[name="gender"]');
		const $birthdate       = $('#birthdate');
		const $age             = $('#age');
		const $mobile          = $('#mobile');
		const $email           = $('#email');
		const $present_address = $('#present-address');
		const $group           = $('#group');
		const $dealership      = $('#dealership');
		const $position        = $('#position');
		const $date_hired      = $('#date-hired');
		const $duties          = $('#duties');

		const $account_username  = $('#account_username');
		const $account_password  = $('#account_password');
		const $account_user_type = $('#account_user_type');

		// label
		const $label_firstname  = $('#firstname-txt');
		const $label_middlename = $('#middlename-txt');
		const $label_lastname   = $('#lastname-txt');
		const $label_gender     = $('#gender-txt');
		const $label_birthdate  = $('#birthdate-txt');
		const $label_mobile     = $('#mobile-txt');
		const $label_email      = $('#email-txt');
		const $label_address    = $('#present-address-txt');
		const $label_group      = $('#group-txt');
		const $label_dealership = $('#dealership-txt');
		const $label_position   = $('#position-txt');
		const $label_date_hired = $('#date-hired-txt');
		const $label_duties     = $('#duties-txt');

		const $label_username   = $('#username-txt');
		const $label_password   = $('#password-txt');
		const $label_user_type  = $('#user_type-txt');
		
		$firstname.on('change', function() {
			$label_firstname.text($(this).val());
		});

		$middlename.on('change', function() {
			$label_middlename.text($(this).val());
		});

		$lastname.on('change', function() {
			$label_lastname.text($(this).val());
		});

		$gender.on('click', function() {
			$label_gender.text($(this).val());
		});

		$mobile.on('change', function() {
			$label_mobile.text($(this).val());
		});

		$email.on('change', function() {
			$label_email.text($(this).val());

			$account_username.val($(this).val());
			$label_username.text($(this).val());
		});

		$present_address.on('change', function() {
			$label_address.text($(this).val());
		});

		$group.select2({placeholder: "Select Group"});

		$dealership.select2({placeholder: 'Select Dealer'});

		$position.select2({placeholder: "Select Position"});

		$group.on('change', function() {
			$label_group.text($('#group option:selected').text());
		});

		$dealership.on('change', function() {
			$label_dealership.text($('#dealership option:selected').text());
		});

		$position.on('change', function() {
			$label_position.text($('#position option:selected').text());
		});

		$date_hired.on('change', function() {
			$label_date_hired.text($(this).val());
		});

		$duties.on('change', function() {
			$label_duties.text($(this).val());
		});

		$account_username.on('change', function() {
			$label_username.text($(this).val());
		});

		$account_password.on('change', function() {
			$label_password.text('*'.repeat($(this).val().length));
		});

		$account_user_type.select2({placeholder: 'Select Type'});

		$account_user_type.on('change', function() {
			$label_user_type.text($(this).val());
		})

		$edu_add.on('click', function() {
			let markup = '<tr>';
					markup += '<td>';
						markup += '<select class="form-control m-select2 level" name="level[]">';
							markup += '<option></option>';
							markup += '<option>High School</option>';
							markup += '<option>College</option>';
							markup += '<option>Others</option>';
						markup += '</select>';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control institution" type="text" name="institution[]">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control" type="text" name="degree[]">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control school-year" type="text" placeholder="Select date" name="school-year[]">';
					markup += '</td>';

					markup += '<td><i class="la la-close"></i></td>';

				markup += '</tr>';

			$ed_table.append(markup);

			$('.school-year').datepicker({
				todayHighlight: true,
				orientation: "bottom left",
				templates: {
					leftArrow: '<i class="la la-angle-left"></i>',
					rightArrow: '<i class="la la-angle-right"></i>'
				}
			});

			$('.level').select2({placeholder: 'Select level'});
		});

		$('.level').select2({placeholder: 'Select level'});

		$emp_add.on('click', function() {
			let markup = '<tr>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control prev-company" type="text" name="prev-company[]">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control prev-address" type="text" name="prev-address[]">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control prev-position" type="text" name="prev-position[]">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control prev-inclusive-date" name="prev-inc-date[]" type="text" placeholder="mm/dd/yyyy - mm/dd/yyyy">';
					markup += '</td>';

					markup += '<td><i class="la la-close"></i></td>';

				markup += '</tr>';

			$pre_table.append(markup);

			$('.prev-inclusive-date').inputmask({
				mask: "*{1,2}[/*{1,2}][/*{1,4}] - *{1,2}[/*{1,2}][/*{1,4}]",
			});
		});

		$tra_add.on('click', function() {
			let markup = '<tr>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control training-title" type="text" name="training-title[]">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control training-trainer" type="text" name="training-trainer[]">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control training-venue" type="text" name="training-venue[]">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control training-date" type="text" placeholder="Select date" name="training-date[]">';
					markup += '</td>';

					markup += '<td><i class="la la-close"></i></td>';

				markup += '</tr>';

			$tra_table.append(markup);

			$('.training-date').datepicker({
				todayHighlight: true,
				orientation: "bottom left",
				templates: {
					leftArrow: '<i class="la la-angle-left"></i>',
					rightArrow: '<i class="la la-angle-right"></i>'
				}
			});
		});

		$('.prev-inclusive-date').inputmask({
			mask: "*{1,2}[/*{1,2}][/*{1,4}] - *{1,2}[/*{1,2}][/*{1,4}]",
		});

		$('.school-year').datepicker({
			todayHighlight: true,
			orientation: "bottom left",
			templates: {
				leftArrow: '<i class="la la-angle-left"></i>',
				rightArrow: '<i class="la la-angle-right"></i>'
			}
		});

		$('#date-hired').datepicker({
			todayHighlight: true,
			orientation: "bottom left",
			templates: {
				leftArrow: '<i class="la la-angle-left"></i>',
				rightArrow: '<i class="la la-angle-right"></i>'
			}
		});

		$('.training-date').datepicker({
			todayHighlight: true,
			orientation: "bottom left",
			templates: {
				leftArrow: '<i class="la la-angle-left"></i>',
				rightArrow: '<i class="la la-angle-right"></i>'
			}
		});

		$('.level').select2({placehoder: 'Select Level'});

		$birthdate.datepicker({
			// Date now minus 18 years
			endDate: new Date($.now() - (18 * 31556952000)),
			templates: {
				leftArrow: '<i class="la la-angle-left"></i>',
				rightArrow: '<i class="la la-angle-right"></i>'
			}
		});

		$birthdate.on('change', function() {
			let birthdate   = new Date($(this).val());
			let currentDate = new Date();

			let yearDiff = Math.ceil(currentDate.getFullYear() - birthdate.getFullYear());

			if (currentDate.getMonth() >= birthdate.getMonth())
			{
				$age.val(yearDiff)
			}
			else
			{
				yearDiff = yearDiff - 1;
				$age.val(yearDiff);
			}

			$label_birthdate.text($(this).val());
		});


		$("#mobile").inputmask("mask", {
            "mask": "(0999) 999-9999"
        });

		$(document).on('click', '.la-close', function() {
			let self = $(this);

			// Remove the closest table row
			self.closest('tr').remove();
		});
	}

	return {
		initialize: function() {
			init();
		}
	};
}();

$(document).ready(function() {
	RecordsData.initialize();
});