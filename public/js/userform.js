var UserForm = function() {

	var init = function() {
		// Select box
		const $group      = $('#group');
		const $dealership = $('#dealership');

		$group.on('change', function() {
			let self = $(this);

			$.post( appUrl + '/dealer', {"_token": csrf_token, group: self.val()})
			.done(function(response) {
				console.log(response);

				if (response)
				{
					$dealership.empty();
					$dealership.select2({
						placeholder: 'Select Dealer',
						data: response
					});
				}
				else
				{
					$dealership.empty();
				}
			});
		});
	}

	return {
		initialize: function() {
			init();
		}
	}
}();

$(document).ready(function() {
	UserForm.initialize();
});