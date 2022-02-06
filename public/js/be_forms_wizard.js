/*
 *  Document   : be_forms_wizard.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Forms Wizard Page
 */

// Form Wizard, for more examples you can check out https://github.com/VinceG/twitter-bootstrap-wizard
class pageFormsWizard {
    /*
     * Init Wizard Defaults
     *
     */
    static initWizardDefaults() {
        jQuery.fn.bootstrapWizard.defaults.tabClass = 'nav nav-tabs';
        jQuery.fn.bootstrapWizard.defaults.nextSelector = '[data-wizard="next"]';
        jQuery.fn.bootstrapWizard.defaults.previousSelector = '[data-wizard="prev"]';
        jQuery.fn.bootstrapWizard.defaults.firstSelector = '[data-wizard="first"]';
        jQuery.fn.bootstrapWizard.defaults.lastSelector = '[data-wizard="lsat"]';
        jQuery.fn.bootstrapWizard.defaults.finishSelector = '[data-wizard="finish"]';
        jQuery.fn.bootstrapWizard.defaults.backSelector = '[data-wizard="back"]';
    }

    /*
     * Init Simple Wizard functionality
     *
     */
    static initWizardSimple() {
        jQuery('.js-wizard-simple').bootstrapWizard({
            onTabShow: (tab, nav, index) => {
                let percent = ((index + 1) / nav.find('li').length) * 100;

                // Get progress bar
                let progress = nav.parents('.block').find('[data-wizard="progress"] > .progress-bar');

                // Update progress bar if there is one
                if (progress.length) {
                    progress.css({width: percent + 1 + '%'});
                }
            }
        });
    }

    /*
     * Init Validation Wizard functionality
     *
     */
    static initWizardValidation() {
        // Load default options for jQuery Validation plugin
        One.helpers('validation');

        // Get forms
        let formValidation = jQuery('.js-wizard-validation-form');
        let formValidation2 = jQuery('.js-wizard-validation2-form');
        let formValidation3 = jQuery('.js-wizard-validation3-form');

        // Prevent forms from submitting on enter key press
        formValidation.add(formValidation2).on('keyup keypress', e => {
            let code = e.keyCode || e.which;

            if (code === 13) {
                if (e.target.tagName.toLowerCase() !== 'textarea') {
                    e.preventDefault();
                    return false;
                }
            }
        });

        // Init form validation on validation wizard form
        let validator = formValidation.validate({
            rules: {
                'biodata[fname]': {
                    required: true,
                    minlength: 2
                },
                'biodata[lname]': {
                    required: true,
                    minlength: 2
                },
                'biodata[dob]': {
                    required: true,
                    minlength: 2
                },
                'name': {
                    required: true,
                    minlength: 2
                },
                'email': {
                    required: true,
                    email: true
                },
                'password': {
                    required: true,
                    minlength: 8
                },
                'password_confirmation': {
                    required: true,
                    minlength: 8,
                    equalTo: '#password'
                },
            },
            messages: {
                'biodata[fname]': {
                    required: 'Please enter a firstname',
                    minlength: 'First name must consist of at least 2 characters'
                },
                'biodata[lname]': {
                    required: 'Please enter a last name',
                    minlength: 'Lastname must consist of at least 2 characters'
                },
                'biodata[dob]': {
                    required: 'Please enter your date of birth',
                    minlength: 'Lastname must consist of at least 2 characters'
                },
                'name': {
                    required: 'Please enter your username',
                    minlength: 'Username must consist of at least 2 characters'
                },
                'email': 'Please enter a valid email address'
                ,
                'password': 'Enter password',
                'password_confirmation': 'Passwords donot match'

            }
        });

        // Init form validation on validation 2 wizard form
        let validator2 = formValidation2.validate({
            rules: {
                'wizard-validation2-firstname': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation2-lastname': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation2-email': {
                    required: true,
                    email: true
                },
                'wizard-validation2-bio': {
                    required: true,
                    minlength: 5
                },
                'wizard-validation2-location': {
                    required: true
                },
                'wizard-validation2-skills': {
                    required: true
                },
                'wizard-validation2-terms': {
                    required: true
                }
            },
            messages: {
                'wizard-validation2-firstname': {
                    required: 'Please enter a firstname',
                    minlength: 'Your firtname must consist of at least 2 characters'
                },
                'wizard-validation2-lastname': {
                    required: 'Please enter a lastname',
                    minlength: 'Your lastname must consist of at least 2 characters'
                },
                'wizard-validation2-email': 'Please enter a valid email address',
                'wizard-validation2-bio': 'Let us know a few thing about yourself',
                'wizard-validation2-skills': 'Please select a skill!',
                'wizard-validation2-terms': 'You must agree to the service terms!'
            }
        });
        // Init form validation on validation 2 wizard form
        let validator3 = formValidation3.validate({
            rules: {
                'wizard-validation2-firstname': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation2-lastname': {
                    required: true,
                    minlength: 2
                },
                'wizard-validation2-email': {
                    required: true,
                    email: true
                },
                'wizard-validation2-bio': {
                    required: true,
                    minlength: 5
                },
                'wizard-validation2-location': {
                    required: true
                },
                'wizard-validation2-skills': {
                    required: true
                },
                'wizard-validation2-terms': {
                    required: true
                }
            },
            messages: {
                'wizard-validation2-firstname': {
                    required: 'Please enter a firstname',
                    minlength: 'Your firtname must consist of at least 2 characters'
                },
                'wizard-validation2-lastname': {
                    required: 'Please enter a lastname',
                    minlength: 'Your lastname must consist of at least 2 characters'
                },
                'wizard-validation2-email': 'Please enter a valid email address',
                'wizard-validation2-bio': 'Let us know a few thing about yourself',
                'wizard-validation2-skills': 'Please select a skill!',
                'wizard-validation2-terms': 'You must agree to the service terms!'
            }
        });

        // Init wizard with validation
        jQuery('.js-wizard-validation').bootstrapWizard({
            tabClass: '',
            onTabShow: (tab, nav, index) => {
                let percent = ((index + 1) / nav.find('li').length) * 100;

                // Get progress bar
                let progress = nav.parents('.block').find('[data-wizard="progress"] > .progress-bar');

                // Update progress bar if there is one
                if (progress.length) {
                    progress.css({width: percent + 1 + '%'});
                }
            },
            onNext: (tab, nav, index) => {
                if (!formValidation.valid()) {
                    validator.focusInvalid();

                    return false;
                }
            },
            onTabClick: (tab, nav, index) => {
                jQuery('a', nav).blur();

                return false;
            }
        });

        // Init wizard with validation 2
        jQuery('.js-wizard-validation2').bootstrapWizard({
            tabClass: 'nav nav-pills',
            onTabShow: (tab, nav, index) => {
                let percent = ((index + 1) / nav.find('li').length) * 100;

                // Get progress bar
                let progress = nav.parents('.block').find('[data-wizard="progress"] > .progress-bar');

                // Update progress bar if there is one
                if (progress.length) {
                    progress.css({width: percent + 1 + '%'});
                }
            },
            onNext: (tab, nav, index) => {
                if (!formValidation2.valid()) {
                    validator2.focusInvalid();

                    return false;
                }
            },
            onTabClick: (tab, nav, index) => {
                jQuery('a', nav).blur();

                return false;
            },
            onFinish: (tab, nav, index) => {
                console.log("form finised")
                return false;
            }
        });
        // Init wizard with validation 3
        jQuery('.js-wizard-validation3').bootstrapWizard({
            tabClass: 'nav nav-pills',
            onTabShow: (tab, nav, index) => {
                let percent = ((index + 1) / nav.find('li').length) * 100;

                // Get progress bar
                let progress = nav.parents('.block').find('[data-wizard="progress"] > .progress-bar');

                // Update progress bar if there is one
                if (progress.length) {
                    progress.css({width: percent + 1 + '%'});
                }
            },
            onNext: (tab, nav, index) => {
                if (!formValidation3.valid()) {
                    validator3.focusInvalid();

                    return false;
                }
            },
            onTabClick: (tab, nav, index) => {
                jQuery('a', nav).blur();

                return false;
            },
            onFinish: (tab, nav, index) => {
                console.log("form finised")
                return false;
            }
        });
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.initWizardDefaults();
        this.initWizardSimple();
        this.initWizardValidation();
    }
}

// Initialize when page loads
jQuery(() => {
    pageFormsWizard.init();
});
