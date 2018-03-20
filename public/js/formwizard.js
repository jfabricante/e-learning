const FormWizard = function() {
	// Base elements
	const wizardEl = $('#m_wizard');
	const formEl   = $('#m_form');
	let validator;
	let wizard;

	const initFormWizard = function() {
		// initialized form wizard
		wizard = wizardEl.mWizard({
			startStep: 1
		});

		wizard.on('beforeNext', function(wizard) {
			if (validator.form() !== true) {
				return false; // don't 
			}
		})

		wizard.on('change', function(wizard) {
			mApp.scrollTop();
		});
	}

	const initValidation = function() {
		validator = formEl.validate({
			// Validate visible fields
			ignore: ":hidden",

			// Validation rules
			rules: {
				firstname: {
					required: true
				},
				middlename: {
					required: true
				},
				lastname: {
					required: true
				},
				gender: {
					required: true
				},
				birthdate: {
					required: true
				},
				height: {
					required: true
				},
				weight: {
					required: true
				},
				mobile: {
					required: true
				},
				religion: {
					required: true
				},
				'present-address': {
					required: true
				},
				'level[]': {
					required: true
				},
				'institution[]': {
					required: true
				},
				'school-year[]': {
					required: true
				},
				group: {
					required: true
				},
				dealership: {
					required: true
				},
				position: {
					required: true
				},
				'date-hired': {
					required: true
				},
				duties: {
					required: true
				},
				account_username: {
					required: true
				},
				account_password: {
					required: true
				},
				account_user_type: {
					required: true
				}
			},

			messages: {
				accept: {
					required: "You must accept the Terms and Conditions agreement!"
				} 
			},

			invalidHandler: function(event, validator) {     
                mApp.scrollTop();

                swal({
                    "title": "", 
                    "text": "There are some errors in your submission. Please correct them.", 
                    "type": "error",
                    "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                });
            },

			submitHandler: function (form) {

			}
		});
	}

	const initSubmit = function() {
		const btn = formEl.find('[data-wizard-action="submit"]');

		// App Url
		// const appUrl = "{{ url('/') }}";

		btn.on('click', function(e) {
			e.preventDefault();

			if (validator.form()) {
				//== See: src\js\framework\base\app.js
				mApp.progress(btn);
				//mApp.block(formEl); 

				//== See: http://malsup.com/jquery/form/#ajaxSubmit
				formEl.ajaxSubmit({
					url: appUrl + '/handle_store',
					// url: appUrl + '/users/store',
					type: 'POST',
					success: function(response) {
						console.log(response)
						mApp.unprogress(btn);
						//mApp.unblock(formEl);

						swal({
							"title": "", 
							"text": "The application has been successfully submitted!", 
							"type": "success",
							"confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
						});
					}
				});
			}
		});
	}

	return {
		initialized: function() {

			initFormWizard(); 
			initValidation();
			initSubmit();
		}
	};

}();

$(document).ready(function() {
	FormWizard.initialized();
});