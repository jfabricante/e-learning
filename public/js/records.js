var RecordsData = function() {

	var init = function() {
		const $ed_table  = $('#educational-attainment tbody');
		const $pre_table = $('#previous-employment tbody');
		const $tra_table = $('#training-attended tbody');
		const $edu_add   = $('#edu-add');
		const $emp_add   = $('#emp-add');
		const $tra_add   = $('#tra-add');

		$edu_add.on('click', function() {
			let markup = '<tr>';
					markup += '<td>';
						markup += '<select class="m-input m-input--square form-control">';
							markup += '<option></option>';
							markup += '<option>High School</option>';
							markup += '<option>College</option>';
							markup += '<option>Others</option>';
						markup += '</select>';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control" type="text">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control" type="text">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control datepicker" type="text">';
					markup += '</td>';

					markup += '<td><i class="la la-close"></i></td>';

				markup += '</tr>';

			$ed_table.append(markup);

			$('.datepicker').datepicker({
				todayHighlight: true,
				orientation: "bottom left",
				templates: {
					leftArrow: '<i class="la la-angle-left"></i>',
					rightArrow: '<i class="la la-angle-right"></i>'
				}
			});
		});

		$emp_add.on('click', function() {
			let markup = '<tr>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control" type="text">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control" type="text">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control" type="text">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control inclusive-date" type="text" placeholder="mm/dd/yyyy - mm/dd/yyyy">';
					markup += '</td>';

					markup += '<td><i class="la la-close"></i></td>';

				markup += '</tr>';

			$pre_table.append(markup);

			$('.inclusive-date').inputmask({
				mask: "*{1,2}[/*{1,2}][/*{1,4}] - *{1,2}[/*{1,2}][/*{1,4}]",
			});
		});

		$tra_add.on('click', function() {
			let markup = '<tr>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control" type="text">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control" type="text">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control" type="text">';
					markup += '</td>';

					markup += '<td>';
						markup += '<input class="m-input m-input--square form-control training-date" type="text" placeholder="Select date">';
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

		$('.inclusive-date').inputmask({
			mask: "*{1,2}[/*{1,2}][/*{1,4}] - *{1,2}[/*{1,2}][/*{1,4}]",
		});

		$('.datepicker').datepicker({
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