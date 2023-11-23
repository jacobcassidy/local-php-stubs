<?php
/**
 * Generated stub declarations for Gravity PDF using https://github.com/php-stubs/generator
 * @see https://github.com/GravityPDF/gravity-pdf (Source)
 * @see https://gravitypdf.com/ (Plugin)
 * @see https://github.com/jacobcassidy/php-stubs/gravity-pdf-stubs.php (Stubs File)
 */

namespace {
    class GF_Zapier
    {
        public static function get_instance()
        {
        }
        public function get_body_key($body, $label)
        {
        }
    }
}
namespace GFPDF\Tests {
    /**
     * Test Gravity PDF Interfaces
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.0
     */
    /**
     * Test all helper Interfaces are standardised
     *
     * @since 4.0
     * @group interfaces
     */
    class Test_Interfaces extends \WP_UnitTestCase
    {
        /**
         * Ensure our actions interface
         *
         * @since 4.0
         */
        public function test_actions_interface()
        {
        }
        /**
         * Ensure our filter interface
         *
         * @since 4.0
         */
        public function test_filters_interface()
        {
        }
    }
    /**
     * Test Gravity AJAX Functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.0
     */
    /**
     *
     * Tests all Ajax calls
     * For speed, non ajax calls of class-ajax.php are tested in test-ajax-others.php
     * Ajax tests are not marked risky when run in separate processes and wp_debug
     * disabled. But, this makes tests slow so non ajax calls are kept separate
     *
     * @group ajax
     */
    class Test_PDF_Ajax extends \WP_Ajax_UnitTestCase
    {
        /**
         * The Gravity Form ID assigned to the imported form
         *
         * @var integer
         *
         * @since 4.0
         */
        public $form_id;
        /**
         * The Gravity Form PDF Settings ID loaded into the $form
         *
         * @var integer
         *
         * @since 4.0
         */
        public $pid = '555ad84787d7e';
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Fix for WordPress 4.7 which seems to close the MySQLi connection before
         * the class is correctly setup
         *
         * @since 4.1
         */
        public static function set_up_before_class()
        {
        }
        /**
         * Test our Gravity Forms PDF Settings configuration state change
         *
         * @class Model_Form_Settings
         *
         * @since 4.0
         */
        public function test_change_state_pdf_setting()
        {
        }
        /**
         * Ensure we correctly authorise the end user
         *
         * @class Model_Form_Settings
         *
         * @since 4.1
         */
        public function test_render_template_fields()
        {
        }
        /**
         * Test our Gravity Forms PDF Settings configuration duplication functionality
         *
         * @class Model_Form_Settings
         *
         * @since 4.0
         */
        public function test_duplicate_gf_pdf_settings()
        {
        }
        /**
         * Test our Gravity Forms PDF Settings configuration duplication functionality
         *
         * @class Model_Form_Settings
         *
         * @since 4.0
         */
        public function test_delete_gf_pdf_setting()
        {
        }
        /**
         * Testing Model_Templates.php wp_ajax_gfpdf_upload_template
         *
         * Because this AJAX endpoint is suppose to have a zip file POSTed,
         * and because we cannot mock \GravityPdf\Upload\File directly (see test-templates.php for specific tests)
         * we're just testing this endpoint requires authentication AND throws an error when
         * no file is posted.
         *
         * @since 4.1
         */
        public function test_ajax_process_uploaded_template()
        {
        }
        /**
         * Check that we can successfully delete a PDF template through this AJAX endpoint
         *
         * @since 4.1
         */
        public function test_ajax_process_delete_template()
        {
        }
        /**
         *
         * @since 4.1
         */
        public function test_ajax_process_build_template_options_html()
        {
        }
        public function test_ajax_process_license_deactivation()
        {
        }
        public function test_ajax_save_core_font()
        {
        }
    }
    /**
     * Test Gravity PDF deprecated classes / methods / functions
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.0
     */
    /**
     * Test all deprecated functionality
     *
     * @since 4.0
     * @group deprecated
     */
    class Test_Deprecated extends \WP_UnitTestCase
    {
        /**
         * Ensure all deprecated classes have appropriate fallbacks
         *
         * @since        4.0
         *
         * @dataProvider provider_deprecated
         */
        public function test_deprecated($class)
        {
        }
        /**
         * Test we have appropriate deprecated classes frm our v3 version
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_deprecated()
        {
        }
        /**
         * Check our v3 constants have been defined
         *
         * @since 4.0
         */
        public function test_constants()
        {
        }
        /**
         * Test the PDFRender::savePDF() method
         *
         * @since 4.0
         */
        public function test_render_save_pdf()
        {
        }
        /**
         * Test the PDFRender::prepare_ids function
         *
         * @since 4.0
         */
        public function test_render_prepare_ids()
        {
        }
        /**
         * Test PDF_Common::get_ids()
         *
         * @since 4.0
         */
        public function test_common_get_ids()
        {
        }
        /**
         * Test PDF_Common::get_pdf_filename()
         *
         * @since 4.0
         */
        public function test_common_get_pdf_filename()
        {
        }
    }
    /**
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       5.0
     */
    /**
     * Test the model / controller for the Templates UI
     *
     * @since 5.0
     * @group queue
     */
    class Test_Pdf_Queue extends \WP_UnitTestCase
    {
        /**
         * @var Controller_Pdf_Queue
         * @since 5.0
         */
        public $controller;
        /**
         * @var Helper_Pdf_Queue
         * @since 5.0
         */
        public $queue;
        /**
         * @since 5.0
         */
        public $queue_mock;
        /**
         * The WP Unit Test Set up function
         *
         * @since 5.0
         */
        public function set_up()
        {
        }
        /**
         * Test our queue runs once when the function runs without any problems
         *
         * @since 5.0
         */
        public function test_queue_tasks()
        {
        }
        /**
         * Test our queue attempts to run up to three times when a function throws an exception
         *
         * @since 5.0
         */
        public function test_failed_queue_tasks()
        {
        }
        /**
         * Test our callback is passed the correct arguments
         *
         * @since 5.0
         */
        public function test_arguments_queue_tasks()
        {
        }
        /**
         * Ensure we disable the standard form submission notifications when a PDF is being attached
         *
         * @since 5.0
         */
        public function test_maybe_disable_notifications()
        {
        }
        /**
         * Test the form submission queue works as expected
         *
         * @since 5.0
         */
        public function test_queue_async_form_submission_tasks()
        {
        }
        /**
         * Test the resend notification queue works as expected
         *
         * @since 5.0
         */
        public function test_queue_async_resend_notification_tasks()
        {
        }
        /**
         * Test our queue dispatch runs only when the queue has data
         *
         * @since 5.0
         */
        public function test_queue_dispatch_resend_notification_tasks()
        {
        }
        /**
         * Test PDFs are cleaned up correctly
         *
         * @since 5.0
         */
        public function test_cleanup_pdfs()
        {
        }
    }
    /**
     * Test Gravity PDF Singleton Helper class
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.0
     */
    /**
     * @since 4.0
     * @group singleton
     */
    class Test_Singleton_Helper extends \WP_UnitTestCase
    {
        /**
         * Our Gravity PDF Data object
         *
         * @var Helper_Singleton
         *
         * @since 4.0
         */
        public $singleton;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Check our add_class() and get_class() methods functions correctly
         *
         * @since 4.0
         */
        public function test_singleton()
        {
        }
        /**
         * Ensure Gravity PDF correctly registers all our MVC classes
         *
         * @param string $expected
         * @param string $class
         *
         * @since        4.0
         * @dataProvider provider_registered_classes
         */
        public function test_registered_classes($expected, $class)
        {
        }
        /**
         * A data provider for our test_registered_classes() method
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_registered_classes()
        {
        }
        /**
         * Check that we can correctly remove actions / filters using the singleton classes
         *
         * @since 4.0
         */
        public function test_remove_actions_filters()
        {
        }
    }
}
namespace GFPDF\Statics {
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @package   GFPDF\Model
     *
     * @group     statics
     */
    class Test_Kses extends \WP_UnitTestCase
    {
        /**
         * @dataProvider provider_parse_pdf_tags_and_attributes
         */
        public function test_parse_pdf_tags_and_attributes($html)
        {
        }
        public function test_numeric_output()
        {
        }
        public function test_null_output()
        {
        }
        /**
         * @dataProvider provider_parse_pdf_tags_and_attributes
         */
        public function test_output_pdf_tags_and_attributes($html)
        {
        }
        public function provider_parse_pdf_tags_and_attributes() : array
        {
        }
        /**
         * @dataProvider provider_parse_cleaned
         */
        public function test_parse_cleaned($expected, $html)
        {
        }
        public function provider_parse_cleaned() : array
        {
        }
    }
}
namespace GFPDF\Tests {
    /**
     * Test Gravity PDF Installer functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the model / controller for the Installer
     *
     * @since 4.0
     * @group installer
     */
    class Test_Installer extends \WP_UnitTestCase
    {
        /**
         * Our Controller
         *
         * @var Controller_Install
         *
         * @since 4.0
         */
        public $controller;
        /**
         * Our Model
         *
         * @var Model_Install
         *
         * @since 4.0
         */
        public $model;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Test the appropriate actions are set up
         *
         * @since 4.0
         */
        public function test_actions()
        {
        }
        /**
         * Test the appropriate filters are set up
         *
         * @since 4.0
         */
        public function test_filters()
        {
        }
        /**
         * Check if the plugin has been installed (otherwise run installer) and the version number is up to date
         *
         * @since 4.0
         */
        public function test_install_status()
        {
        }
        /**
         * Test we are marking the plugin as installed correctly
         *
         * @since 4.0
         */
        public function test_install_plugin()
        {
        }
        /**
         * Check the multisite template location is set up correctly
         *
         * @since 4.0
         */
        public function test_multisite_template_location()
        {
        }
        /**
         * Check our folder structure is created as expected
         *
         * @since 4.0
         */
        public function test_create_folder_structures()
        {
        }
        /**
         * Check our rewrite rules get registered correctly
         *
         * @since 4.0
         */
        public function test_register_rewrite_rules()
        {
        }
    }
    /**
     * Test Gravity PDF Helper Misc Functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the Helper_Misc class
     *
     * @since 4.0
     * @group helper-misc
     */
    class Test_Helper_Misc extends \WP_UnitTestCase
    {
        /**
         * Our test class
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        public $misc;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Ensure we correctly determine when we are on a Gravity PDF admin page
         *
         * @since 4.0
         */
        public function test_is_gfpdf_page()
        {
        }
        /**
         * Check if we are on the current settings tab
         *
         * @since 4.0
         */
        public function test_is_gfpdf_settings_tab()
        {
        }
        /**
         * Check if our HTML DOM manipulator correctly adds the class "header-footer-img" to <img /> tags
         *
         * @param  $expected
         * @param  $html
         *
         * @since        4.0
         *
         * @dataProvider provider_test_fix_header_footer
         */
        public function test_fix_header_footer($expected, $html)
        {
        }
        protected function minify($html)
        {
        }
        /**
         * Dataprovider for our fix_header_footer method
         *
         * @since 4.0
         */
        public function provider_test_fix_header_footer()
        {
        }
        /**
         * Check if our HTML DOM manipulator correctly changes local URLs to Paths
         *
         * @since 4.0
         */
        public function test_fix_header_footer_path()
        {
        }
        /**
         * Check that we can push an associated array item onto the beginning of an existing array
         *
         * @since 4.0
         */
        public function test_array_unshift_assoc()
        {
        }
        /**
         * Test we are correctly stripping an extension from the end of a string
         *
         * @param  $expected
         * @param  $string
         * @param  $type
         *
         * @since        4.0
         *
         * @dataProvider provider_remove_extension_from_string
         */
        public function test_remove_extension_from_string($expected, $string, $type)
        {
        }
        /**
         * Data provider for our remove_extension_from_string method
         *
         * @return array
         *
         * @since  4.0
         */
        public function provider_remove_extension_from_string()
        {
        }
        /**
         * Test we correctly convert our v3 config data into the appropriate value
         *
         * @param  $expected
         * @param  $value
         *
         * @since        4.0
         *
         * @dataProvider provider_update_deprecated_config
         */
        public function test_update_deprecated_config($expected, $value)
        {
        }
        /**
         * Data provider for testing update_deprecated_config()
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_update_deprecated_config()
        {
        }
        /**
         * Check our contrast checker returns the correct contrasting colours
         *
         * @param string $expected The results we expect
         * @param string $hexcolor The colour to test
         *
         * @dataProvider provider_get_contrast
         * @since        4.0
         */
        public function test_get_contrast($expected, $hexcolor)
        {
        }
        /**
         * Data provider for testing get_contrast() method
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_get_contrast()
        {
        }
        /**
         * Check our contrast checker returns the correct contrasting colours
         *
         * @param string  $expected The results we expect
         * @param string  $hexcolor The colour to test
         * @param integer $diff     Whether to go lighter or darker
         *
         * @dataProvider provider_change_brightness
         * @since        4.0
         */
        public function test_change_brightness($expected, $hexcolor, $diff)
        {
        }
        /**
         * Data provider for testing provider_change_brightness() method
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_change_brightness()
        {
        }
        /**
         * Test the basics of the evaluate_conditional_logic() method
         * when used with show/hide logic
         *
         * @since 4.0
         */
        public function test_evaluate_conditional_logic()
        {
        }
        /**
         * Ensure we correctly return an appropriate class name based on the file path given
         *
         * @param string $expected The expected value
         * @param string $file     The test path
         *
         * @dataProvider provider_get_config_class_name
         *
         * @since        4.0
         */
        public function test_get_config_class_name($expected, $file)
        {
        }
        /**
         * Data provider for our get_config_class_name() test
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_get_config_class_name()
        {
        }
        /**
         * Check we correctly parse the hex code and spit out the correct background and border values
         *
         * @param string $expected
         * @param string $hex
         *
         * @dataProvider provider_get_background_and_border_contrast
         *
         * @since        4.0
         */
        public function test_get_background_and_border_contrast($expected, $hex)
        {
        }
        /**
         * Our test data for the get_background_and_border_contrast() method
         *
         * @return array
         */
        public function provider_get_background_and_border_contrast()
        {
        }
        /**
         * Check we are correctly getting our form fields by ID
         *
         * @since 4.0
         */
        public function test_get_fields_sorted_by_id()
        {
        }
        /**
         * Check if our backwards compatible settings conversion works correctly
         *
         * @since 4.0
         */
        public function test_backwards_compat_conversion()
        {
        }
        /**
         * Check if our backwards compatible output functions work correctly
         *
         * @since 4.0
         */
        public function test_backwards_compat_output()
        {
        }
        /**
         * Check our recursive in_array() method works as expected
         *
         * @param boolean $expected
         * @param boolean $strict
         * @param mixed   $needle
         * @param array   $haystack
         *
         * @dataProvider provider_in_array
         *
         * @since        4.0
         */
        public function test_in_array($expected, $strict, $needle, $haystack)
        {
        }
        public function provider_in_array()
        {
        }
        /**
         * Test that the everything inside a directory gets removed
         *
         * @since 4.0
         */
        public function test_cleanup_dir()
        {
        }
        public function test_rmdir()
        {
        }
    }
    /**
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       5.1
     */
    /**
     * @since 5.1
     * @group field-markup
     */
    class Test_Field_Markup extends \WP_UnitTestCase
    {
        /**
         * Verify the HTML Mark-up generated by the Repeater field
         */
        public function test_repeater_field_markup()
        {
        }
        public function test_consent_field()
        {
        }
        public function test_maximum_allowed_css_each_field()
        {
        }
    }
    /**
     * Test Gravity PDF Options API Class
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.0
     */
    /**
     * Test the WordPress Options API Implementation
     *
     * @since 4.0
     * @group options-api
     */
    class Test_Options_API extends \WP_UnitTestCase
    {
        /**
         * Our Gravity PDF Options API Object
         *
         * @var Helper_Options_Fields
         *
         * @since 4.0
         */
        public $options;
        /**
         * The Gravity Form ID we are working with
         *
         * @var integer
         *
         * @since  4.0
         */
        public $form_id;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Check if settings getter function works correctly
         *
         * @since 4.0
         */
        public function test_get_settings()
        {
        }
        /**
         * @since 4.2
         */
        public function test_update_settings()
        {
        }
        /**
         * Check if Gravity Forms PDF settings getter function works correctly
         *
         * @since 4.0
         */
        public function test_get_form_settings()
        {
        }
        /**
         * Check that any settings passed in through get_registered_settings() gets registered correctly
         *
         * @since 4.0
         */
        public function test_register_settings()
        {
        }
        /**
         * Check that we can successfully update a registered field item
         *
         * @since 4.0
         */
        public function test_update_registered_field()
        {
        }
        /**
         * Check the options list is returned correctly
         *
         * @since 4.0
         */
        public function test_get_registered_settings()
        {
        }
        /**
         * Test we can get the form's PDF settings
         *
         * @since 4.0
         */
        public function test_get_form_pdfs()
        {
        }
        /**
         * Test we can get individual PDF settings
         *
         * @since 4.0
         */
        public function test_get_pdf()
        {
        }
        /**
         * Test we can successfully add a new PDF setting
         *
         * @since 4.0
         */
        public function test_add_pdf()
        {
        }
        /**
         * Test we can make changes to individual PDF settings
         *
         * @since 4.0
         */
        public function test_update_pdf()
        {
        }
        /**
         * Test we can make delete individual PDF settings
         *
         * @since 4.0
         */
        public function test_delete_pdf()
        {
        }
        /**
         * Check user's can correctly tap into the appropriate filters triggered
         * during a get_pdf() call
         *
         * @since 4.0
         */
        public function test_get_pdf_filter()
        {
        }
        /**
         * Check user's can correctly tap into the appropriate filters triggered
         * during an add_pdf() call
         *
         * @since 4.0
         */
        public function test_add_pdf_filter()
        {
        }
        /**
         * Check user's can correctly tap into the appropriate filters triggered
         * during a update_pdf() call
         *
         * @since 4.0
         */
        public function test_update_pdf_filter()
        {
        }
        /**
         * Test we can get a single global PDF option
         *
         * @since 4.0
         */
        public function test_get_option()
        {
        }
        /**
         * Test we can update a single global PDF option
         *
         * @since 4.0
         */
        public function test_update_option()
        {
        }
        /**
         * Test we can delete a single global PDF option
         *
         * @since 4.0
         */
        public function test_delete_option()
        {
        }
        /**
         * Test the returned capabilities list
         *
         * @since 4.0
         */
        public function test_get_capabilities()
        {
        }
        /**
         * Test the returned paper size list
         *
         * @since 4.0
         */
        public function test_get_paper_size()
        {
        }
        /**
         * Test the installed fonts getter functionality
         *
         * @since 4.0
         */
        public function test_get_installed_fonts()
        {
        }
        /**
         * Add a custom font to our array
         *
         * @since 4.0
         */
        public function test_add_custom_fonts()
        {
        }
        /**
         * Test the custom font getter
         *
         * @since 4.0
         */
        public function test_get_custom_fonts()
        {
        }
        /**
         * Test the font display name getter
         *
         * @since 4.0
         */
        public function test_get_font_display_name()
        {
        }
        /**
         * Test the privileges getter
         *
         * @since 4.0
         */
        public function test_get_privileges()
        {
        }
        /**
         * Test we are correctly sanitizing our settings
         *
         * @since 4.0
         */
        public function test_settings_sanitize()
        {
        }
        /**
         * Test the trim sanitization function
         *
         * @param string $expected
         * @param string $input
         *
         * @since        4.0
         *
         * @dataProvider dataprovider_sanitize_trim
         */
        public function test_sanitize_trim_field($expected, $input)
        {
        }
        /**
         * Test data provider for our trim functionality (test_sanitize_trim_field)
         *
         * @return array The data to test
         *
         * @since  4.0
         */
        public function dataprovider_sanitize_trim()
        {
        }
        /**
         * Test the number sanitization function
         *
         * @param int $expected
         * @param string $input
         *
         * @since        4.0
         *
         * @dataProvider dataprovider_sanitize_number
         */
        public function test_sanitize_number_field($expected, $input)
        {
        }
        /**
         * Test data provider for our number functionality (test_sanitize_number_field)
         *
         * @return array The data to test
         *
         * @since  4.0
         */
        public function dataprovider_sanitize_number()
        {
        }
        /**
         * Test the paper size sanitization function
         *
         * @param array $expected
         * @param array $input
         *
         * @since        4.0
         *
         * @dataProvider dataprovider_sanitize_paper_size
         */
        public function test_sanitize_paper_size($expected, $input)
        {
        }
        /**
         * Test data provider for our number functionality (test_sanitize_number_field)
         *
         * @return array The data to test
         *
         * @since  4.0
         */
        public function dataprovider_sanitize_paper_size()
        {
        }
        /**
         * Test our global sanitization function
         *
         * @param string $type
         * @param string $value
         * @param string $expected
         *
         * @since        4.0
         *
         * @dataProvider provider_sanitize_all_fields
         */
        public function test_sanitize_all_fields($type, $value, $expected)
        {
        }
        /**
         * Test our sanitize_all_fields functions correctly
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_sanitize_all_fields()
        {
        }
        /**
         * Test our required sanitized field errors trigger
         *
         * @param string $type
         * @param array $value
         * @param bool $expected
         *
         * @since        4.0
         *
         * @dataProvider provider_sanitize_required_field
         */
        public function test_sanitize_required_field($type, $value, $expected)
        {
        }
        /**
         * Test our sanitize_required_field functions correctly
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_sanitize_required_field()
        {
        }
        /**
         * Test we can correctly get the field details
         *
         * @param array $input
         * @param string $expected
         *
         * @since        4.0
         *
         * @dataProvider provider_get_form_value
         *
         * @todo         checkbox, multicheck and conditionalLogic
         */
        public function test_get_form_value($input, $expected)
        {
        }
        /**
         * The data provider for test_get_form_value()
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_get_form_value()
        {
        }
        /**
         * @since 4.2
         */
        public function test_get_form_value_licensing()
        {
        }
    }
    /**
     * Any slow PDF-generation related tests should be included here. By default, this is excluded from the usual tests
     * Can be tested with: phpunit --group slow-pdf-processes
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the model / view / controller for the PDF Endpoint functionality
     *
     * @since 4.0
     * @group slow-pdf-processes
     */
    class Test_Slow_PDF_Processes extends \WP_UnitTestCase
    {
        /**
         * Our Settings Controller
         *
         * @var Controller_PDF
         *
         * @since 4.0
         */
        public $controller;
        /**
         * Our Settings Model
         *
         * @var Model_PDF
         *
         * @since 4.0
         */
        public $model;
        /**
         * Our Settings View
         *
         * @var View_PDF
         *
         * @since 4.0
         */
        public $view;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * @since 5.0
         */
        public function tear_down()
        {
        }
        /**
         * Test our PDF generator function works as expected
         * This function prepares all the details for generating a PDF and is our authentication layer
         *
         * Belongs to Model_PDF.php
         *
         * @since 4.0
         */
        public function test_process_pdf()
        {
        }
        /**
         * Check if the PDF is rendered and saved on disk correctly
         *
         * Belongs to Helper_PDF.php
         *
         * @since 4.0
         */
        public function test_process_and_save_pdf()
        {
        }
        /**
         * Check if the correct PDFs are saved on disk
         * Belongs to Model_PDF.php
         *
         * @since 4.0
         */
        public function test_maybe_save_pdf()
        {
        }
        /**
         * Test that we can successfully generate a PDF based on an entry and settings
         *
         * Belongs to View_PDF.php
         *
         * @since 4.0
         */
        public function test_generate_pdf()
        {
        }
        /**
         * Check if we should be always saving the PDF based on the settings
         *
         * Belongs to Model_PDF.php
         *
         * @since 4.0
         */
        public function test_maybe_always_save_pdf()
        {
        }
        /**
         * Check if we should attach a PDF to the current notification
         *
         * @param bool $expectation
         * @param array $notification
         * @param array $settings
         *
         * @since        4.0
         *
         * @dataProvider provider_maybe_attach_to_notification
         */
        public function test_maybe_attach_to_notification($expectation, $notification, $settings)
        {
        }
        /**
         * Data provider for test_maybe_attach_to_notification()
         *
         * @return array
         * @since 4.0
         */
        public function provider_maybe_attach_to_notification()
        {
        }
        /**
         * Verify a PDF is generated and the appropriate PDF path is returned
         *
         * Belongs to Model_PDF.php
         *
         * @since 4.0
         */
        public function test_generate_and_save_pdf()
        {
        }
        /**
         * Verify the appropriate variables are passed in and that a PDF is correctly generated
         *
         * Belongs to GPDFAPI class (found in api.php)
         *
         * @since 4.0
         */
        public function test_create_pdf()
        {
        }
        /**
         * Verify our deprecated GFPDF_Core_Model::gfpdfe_save_pdf() method
         * works as expected.
         */
        public function test_deprecated_save_pdf()
        {
        }
    }
    /**
     * Test Gravity PDF Class AutoLoader Class
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.0
     */
    /**
     * Test the PSR-4 Autoloader Implementation
     *
     * @since 4.0
     * @group autoloader
     */
    class Test_Autoloader extends \WP_UnitTestCase
    {
        /**
         * Ensure our auto initializer is firing correctly
         *
         * @param string $class
         *
         * @since        4.0
         *
         * @dataProvider provider_classes
         */
        public function test_classes($class)
        {
        }
        /**
         * A data provider to check the classes exist
         *
         * @return array Our test data
         *
         * @since 4.0
         */
        public function provider_classes()
        {
        }
        /**
         * Ensure our auto initializer is firing correctly and loading any interfaces
         *
         * @param string $class
         *
         * @since        4.0
         *
         * @dataProvider provider_interfaces
         */
        public function test_interface($class)
        {
        }
        /**
         * A data provider to check the classes exist
         *
         * @return array Our test data
         *
         * @since 4.0
         */
        public function provider_interfaces()
        {
        }
        /**
         * Check our composer files are loaded correctly
         *
         * @param string $class
         *
         * @since        4.0
         * @dataProvider provider_composer_dependencies
         */
        public function test_composer_dependencies($class)
        {
        }
        /**
         * Test we have appropriate composer classes loaded
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_composer_dependencies()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.2
     */
    /**
     * Test the logger helper works correctly
     *
     * @since 4.2
     * @group logger
     */
    class Test_Logger extends \WP_UnitTestCase
    {
        /**
         * @since 4.2
         */
        public function set_up()
        {
        }
        /**
         * @since 4.2
         */
        public function test_logger()
        {
        }
        /**
         * @since 4.2
         */
        public function test_register_gf_logger()
        {
        }
    }
    /**
     * Test Gravity PDF Helper_QueryPath class
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.0
     */
    /**
     * @since 4.0.3
     * @group querypath
     */
    class Test_QueryPath extends \WP_UnitTestCase
    {
        /**
         * Ensure we get a QueryPath object returned
         *
         * @since 4.0
         */
        public function test_QueryPath()
        {
        }
        public function test_utf8()
        {
        }
    }
    /**
     * Test Gravity PDF Settings Functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the model / view / controller for the Settings Page
     *
     * @since 4.0
     * @group settings
     */
    class Test_Settings extends \WP_UnitTestCase
    {
        /**
         * Our Settings Controller
         *
         * @var Controller_Settings
         * @since 4.0
         */
        public $controller;
        /**
         * Our Settings Model
         *
         * @var Model_Settings
         * @since 4.0
         */
        public $model;
        /**
         * Our Settings View
         *
         * @var View_Settings
         * @since 4.0
         */
        public $view;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Test the appropriate actions are set up
         *
         * @since 4.0
         */
        public function test_actions()
        {
        }
        /**
         * Test the appropriate filters are set up
         *
         * @since 4.0
         */
        public function test_filters()
        {
        }
        /**
         * Check the appropriate settings pages are loading
         *
         * @since 4.0
         */
        public function test_display_page()
        {
        }
        /**
         * Check only users with the appropriate permissions can edit the Gravity PDF options
         *
         * @since 4.0
         */
        public function test_edit_options_cap()
        {
        }
        /**
         * Check the tools tab gets hidden when the user permissions aren't high enough
         *
         * @since 4.0
         */
        public function test_disable_tools_on_view_cap()
        {
        }
        /**
         * Verify errors are highlighted appropriately
         *
         * @since 4.0
         */
        public function test_highlight_errors()
        {
        }
        /**
         * @since 4.2
         */
        public function test_register_addons_for_licensing()
        {
        }
        /**
         * @since 4.2
         */
        public function test_maybe_activate_licenses()
        {
        }
        /**
         * @param string $expected
         * @param array  $api
         *
         * @since        4.2
         * @dataProvider providerActivateLicense
         */
        public function test_activate_license($expected, $api)
        {
        }
        /**
         * @return array
         *
         * @throws Exception
         * @since 4.2
         */
        public function providerActivateLicense()
        {
        }
        /**
         * @param bool  $expected
         * @param array $api
         * @param int   $status
         *
         * @since        4.2
         * @dataProvider provider_deactivate_license_key
         */
        public function test_deactivate_license_key($expected, $api, $status)
        {
        }
        /**
         * @return array
         *
         * @since 4.2
         */
        public function provider_deactivate_license_key()
        {
        }
    }
}
namespace GFPDF\Helper {
    /**
     * An abstract class to assist with addon licensing
     */
    abstract class Helper_Abstract_Addon
    {
        /**
         * Holds our registered objects
         *
         * @var Helper_Singleton
         *
         * @since 4.2
         */
        public $singleton;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.2
         */
        protected $data;
        /**
         * Holds our Helper_Abstract_Options / Helper_Options_Fields object
         * Makes it easy to access global PDF settings and individual form PDF settings
         *
         * @var Helper_Options_Fields
         *
         * @since 4.2
         */
        protected $options;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.2
         */
        protected $log;
        /**
         * Give easy access to our notice helper
         *
         * @var Helper_Notices
         *
         * @since 4.2
         */
        protected $notices;
        /**
         * Holds the Easy Digital Download add-on ID
         *
         * @since 4.3
         */
        protected $edd_id = '';
        /**
         * Holds the Plugin Documentation Slug
         *
         * @since 4.3
         */
        protected $addon_documentation_slug = '';
        /**
         * Determine whether we should use a prefix for this add-ons global settings
         *
         * @since 6.5
         * @internal This has been added for backwards compatibility. Use self::enable_settings_prefix() after initialization to opt in
         */
        protected $use_settings_prefix = false;
        /**
         * Helper_Abstract_Addon constructor.
         *
         * @param string                $addon_slug
         * @param string                $addon_name
         * @param string                $author
         * @param string                $version
         * @param string                $path_to_main_plugin_file
         * @param Helper_Data           $data
         * @param Helper_Options_Fields $options
         * @param Helper_Singleton      $singleton
         * @param Helper_Logger         $log
         * @param Helper_Notices        $notices
         *
         * @since 4.2
         */
        public function __construct($addon_slug, $addon_name, $author, $version, $path_to_main_plugin_file, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Options_Fields $options, \GFPDF\Helper\Helper_Singleton $singleton, \GFPDF\Helper\Helper_Logger $log, \GFPDF\Helper\Helper_Notices $notices)
        {
        }
        /**
         * @return string Return the plugin slug
         *
         * @since 4.2
         */
        public final function get_slug()
        {
        }
        /**
         * @return string Return the plugin name
         *
         * @since 4.2
         */
        public final function get_name()
        {
        }
        /**
         * @return string Return the short name for the plugin
         *
         * @since 4.2
         */
        public function get_short_name()
        {
        }
        /**
         * @return string Return the plugin version
         *
         * @since 4.2
         */
        public final function get_version()
        {
        }
        /**
         * @return string Return the plugin author
         *
         * @since 4.2
         */
        public final function get_author()
        {
        }
        /**
         * @return string Return the plugin main file path
         *
         * @since 4.2
         */
        public final function get_main_plugin_file()
        {
        }
        /**
         * @param string $id
         *
         * @since 4.3
         */
        public final function set_edd_download_id($id)
        {
        }
        /**
         * @return string Return the EDD add-on ID
         *
         * @since 4.3
         */
        public final function get_edd_download_id()
        {
        }
        /**
         * @param string $slug
         *
         * @since 4.3
         */
        public final function set_addon_documentation_slug($slug)
        {
        }
        /**
         * @return string
         *
         * @since 4.3
         */
        public final function get_addon_documentation_slug()
        {
        }
        /**
         * Setup the add-on licensing and initialise any classes
         *
         * @param array $classes
         *
         * @since 4.2
         */
        public function init($classes = [])
        {
        }
        /**
         * This method handles the add-on update code
         *
         * Due to WordPress.org rules we cannot initialisation the updater code in the core plugin so add-ons that utilise
         * this class need to handle that code themselves.
         *
         * Official Gravity PDF add-ons should initialise the GFPDF\Helper\Licensing\EDD_SL_Plugin_Updater class
         * when the add-on license status is set to "active". You can check the status of the plugin
         * using the following:
         *
         * $license_info = $this->get_license_info();
         * if ( $license_info['status'] !== 'active' ) {
         *    return;
         * }
         *
         * The EDD_SL_Plugin_Updater should be initialised as follows:
         *
         * new EDD_SL_Plugin_Updater(
         *     $this->data->store_url,
         *   $this->get_main_plugin_file(),
         *   [
         *      'version'   => $this->get_version(),
         *      'license'   => $license_info['license'],
         *      'item_name' => $this->get_addon_name(),
         *      'author'    => $this->get_version(),
         *      'beta'      => false,
         *   ]
         * );
         *
         * @return void
         * @since 4.2
         *
         */
        public abstract function plugin_updater();
        /**
         * Register the add-on with Gravity PDF
         *
         * @Internal If you don't want the add-on licensing handled automatically in the UI override this method
         *
         * @since    4.2
         */
        protected function register_addon()
        {
        }
        /**
         * When Helper_Interface_Extension_Settings is used we'll auto-register any
         * settings the add-on includes
         *
         * @param array $settings
         *
         * @return array
         *
         * @since 4.2
         */
        public final function register_addon_fields($settings)
        {
        }
        /**
         * Allows add-ons to opt into using a prefix on the settings.
         *
         * @return void
         *
         * @since 6.5
         * @internal This was added for backwards compatibility in case user-land implemented global add-on settings
         */
        public function enable_settings_prefix() : void
        {
        }
        /**
         * Return the prefix to use for all add-on global settings
         *
         * @return string
         * @since 6.5
         */
        public function get_addon_settings_key() : string
        {
        }
        /**
         * Get all the global setting default values which is useful as a fallback if the setting doesn't yet exist in the DB
         *
         * @return array
         * @since 6.5
         */
        public function get_addon_settings_defaults() : array
        {
        }
        /**
         * Return all registered settings IDs, with or without the prefix string included
         *
         * @param bool $include_prefix
         *
         * @return array
         * @since 6.5
         */
        protected final function get_addon_settings_ids(bool $include_prefix = true) : array
        {
        }
        /**
         * Get all available settings for this add-on that are stored in the DB
         *
         * @return array an ID => Value paid, where ID does NOT include the setting prefix
         * @since 6.5
         */
        public final function get_addon_settings_values() : array
        {
        }
        /**
         * Get the add-on global setting from the DB, or return the fallback if it doesn't exist
         *
         * @param string $name The settings key name without the prefix
         * @param mixed $fallback A fallback value if the setting doesn't exist
         *
         * @return mixed
         * @since 6.5
         */
        public final function get_addon_setting_value(string $name, $fallback = '')
        {
        }
        /**
         * Get the add-on license information stored in the database (if any)
         *
         * @Internal If you don't want the add-on licensing handled automatically in the UI override this method
         *
         * @since    4.2
         */
        public function get_license_info()
        {
        }
        /**
         * Update the add-on license information stored in the database
         *
         * @param array $license_info
         *
         * @Internal If you don't want the add-on licensing handled automatically in the UI override this method
         *
         * @since    4.2
         */
        public function update_license_info($license_info)
        {
        }
        /**
         * Remove the license info and keys from the settings
         *
         * @since 4.2
         */
        public function delete_license_info()
        {
        }
        /**
         * @return string Returns the current add-on license key
         *
         * @since 4.2
         */
        public final function get_license_key()
        {
        }
        /**
         * @return string Returns the current add-on license status
         *
         * @since 4.2
         */
        public final function get_license_status()
        {
        }
        /**
         * @return string Returns the current add-on license message
         *
         * @since 4.2
         */
        public final function get_license_message()
        {
        }
        /**
         * Register our license check event one week into the future.
         *
         * @Internal Using wp_schedule_single_event() means we don't need to 1. Add a weekly interval to wp_schedule_event()
         *           and 2. Need to clear the scheduled hook when the plugin is deactivated
         *
         * @since    4.2
         */
        public final function maybe_schedule_license_check()
        {
        }
        /**
         * Makes an API call to check the status of the license and updates the license settings
         *
         * @Internal If you don't want the add-on licensing handled automatically in the UI override this method
         *
         * @since    4.2
         */
        public function schedule_license_check()
        {
        }
        /**
         * Include a license key prompt
         *
         * @since 4.3
         */
        public function license_registration()
        {
        }
        /**
         * Show row meta on the plugin screen.
         *
         * @param mixed $links Plugin Row Meta
         * @param mixed $file  Plugin Base file
         *
         * @return    array
         *
         * @since  1.0
         */
        public function plugin_row_meta($links, $file)
        {
        }
    }
}
namespace GFPDF\Tests {
    class Addon1 extends \GFPDF\Helper\Helper_Abstract_Addon
    {
        public function plugin_updater()
        {
        }
    }
    class Addon2 extends \GFPDF\Helper\Helper_Abstract_Addon
    {
        public function plugin_updater()
        {
        }
    }
    /**
     * Test Common Gravity Forms Functions
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the Gravity Forms functionality we rely on in Gravity PDF
     *
     * @since 4.0
     * @group gravity-forms
     */
    class Test_Gravity_Forms extends \WP_UnitTestCase
    {
        /**
         * The Gravity Form ID assigned to the imported form
         *
         * @var integer
         *
         * @since 4.0
         */
        public $form_id;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Test Gravity Form's GFFormsModel::get_form_meta( $form_id ) functionality
         *
         * @since 4.0
         */
        public function test_get_form_meta()
        {
        }
        /**
         * Test Gravity Form's GFFormsModel::update_form_meta( $form_id ) functionality
         *
         * @since 4.0
         */
        public function test_update_form_meta()
        {
        }
        /**
         * Test Gravity Form's rgpost() functionality
         * Will return the value in the $_POST array, or empty string if not
         *
         * @since 4.0
         */
        public function test_rgpost()
        {
        }
        /**
         * Test Gravity Form's rgget() functionality
         * Will return the value in the $_GET array, or empty string if not
         *
         * @since 4.0
         */
        public function test_rgget()
        {
        }
        /**
         * Test Gravity Form's rgempty() functionality which focuses on whether an array key exists
         * If not array is passed, it will use the $_POST data
         * If an array is passed as the first parameter it will check if the array is empty
         *
         * @since 4.0
         */
        public function test_rgempty()
        {
        }
        /**
         * Test Gravity Form's rgblank() functionality
         * Checks if the string is empty and doesn't equal 0 - which equates to true when calling empty()
         *
         * @since 4.0
         */
        public function test_rgblank()
        {
        }
        /**
         * Test Gravity Form's rgar() functionality
         * Will return the value in the passed $array, or empty string if not
         *
         * @since 4.0
         */
        public function test_rgar()
        {
        }
        /**
         * Test Gravity Form user privlages
         * i.e $gfpdf->gform->has_capability("gravityforms_edit_settings")
         *
         * @since 4.0
         */
        public function test_gf_privs()
        {
        }
        /**
         * Check the core classes exist
         *
         * @since 3.6
         */
        public function test_core_classes()
        {
        }
        /**
         * Check that RGFormsModel::get_form_meta() method works as expected
         *
         * @since 3.6
         */
        public function test_get_forms()
        {
        }
        /**
         * Test that RGFormsModel::get_lead() functionality works correctly
         *
         * @since 3.6
         */
        public function test_get_entry()
        {
        }
        /**
         * Test GF replace variables function (merge tags)
         * i.e GFCommon::replace_variables
         *
         * @param string $mergetag
         * @param string $value
         *
         * @since        3.6
         *
         * @dataProvider provider_mergetag_test
         */
        public function test_replace_variables($mergetag, $value)
        {
        }
        /**
         * Data provider for testing merge tags replace correctly
         *
         * @since 3.6
         */
        public function provider_mergetag_test()
        {
        }
        /**
         * Test that the correct IP is returned by the function
         *
         * @param String $ip  The test IP address
         * @param String $var The $_SERVER array key
         *
         * @dataProvider provider_ip_testing
         *
         * @since        3.6
         */
        public function run_ip_test($ip, $var)
        {
        }
        /**
         * The data provider for the run_ip_test() function
         *
         * @since 3.6
         */
        public function provider_ip_testing()
        {
        }
        /**
         * Test that GFCommon::$version will produce
         * the expected result.
         *
         * @since 3.6
         */
        public function test_gf_version()
        {
        }
    }
    /**
     * Test Gravity PDF MVC Abstraction classes
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.0
     */
    /**
     * Test the Controller / Model / View Abstract Class
     *
     * @since 4.0
     * @group mvc-abstracts
     */
    class Test_MVC_Abstracts extends \WP_UnitTestCase
    {
        /**
         * Our Gravity PDF controller object
         *
         * @var Controller_Settings
         *
         * @since 4.0
         */
        public $controller;
        /**
         * Our Gravity PDF model object
         *
         * @var Model_Settings
         *
         * @since 4.0
         */
        public $model;
        /**
         * Our Gravity PDF view object
         *
         * @var View_Settings
         *
         * @since 4.0
         */
        public $view;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Test the abstract controller methods
         *
         * @since 4.0
         */
        public function test_abstract_controller()
        {
        }
        /**
         * Test the abstract model methods
         *
         * @since 4.0
         */
        public function test_abstract_model()
        {
        }
        /**
         * Test the abstract view methods
         *
         * @since 4.0
         */
        public function test_abstract_view()
        {
        }
    }
    /**
     * Test Gravity PDF Uninstall functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the model / controller for the Uninstaller
     *
     * @since 6.0
     * @group uninstaller
     */
    class Test_Uninstaller extends \WP_UnitTestCase
    {
        /**
         * Our Controller
         *
         * @var Controller_Uninstaller
         *
         * @since 6.0
         */
        public $controller;
        /**
         * Our Model
         *
         * @var Model_Uninstall
         *
         * @since 6.0
         */
        public $model;
        /**
         * The WP Unit Test Set up function
         *
         * @since 6.0
         */
        public function set_up()
        {
        }
        /**
         * Check we are uninstalling correctly
         *
         * @since 4.0
         */
        public function test_uninstall_plugin()
        {
        }
        /**
         * Check we are removing all traces of our gfpdf options
         *
         * @since 4.0
         */
        public function test_remove_plugin_options()
        {
        }
        /**
         * Check we are successfully removing our GF PDF Settings
         *
         * @since 4.0
         */
        public function test_remove_plugin_form_settings()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       5.2
     */
    /**
     * @since 5.2
     * @group url-signer
     */
    class Test_Url_Signer extends \WP_UnitTestCase
    {
        /**
         * @throws InvalidExpiration|InvalidSignatureKey
         *
         * @since 5.2
         */
        public function test_sign_and_verify()
        {
        }
        public function test_random_password_filter_disabled()
        {
        }
    }
}
namespace GFPDF\Controller {
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_Controller_Upgrade_Routines
     *
     * @package GFPDF\Controller
     *
     * @group   controller
     * @group   upgrade
     */
    class Test_Controller_Upgrade_Routines extends \WP_UnitTestCase
    {
        /**
         * @var \GFPDF\Helper\Helper_Options_Fields
         */
        protected $options;
        public function set_up()
        {
        }
        public function test_6_0_0_background_process_upgrade_routine()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_Controller_Webhooks
     *
     * @package GFPDF\Controller
     *
     * @group   controller
     * @group   webhook
     */
    class Test_Controller_Webhooks extends \WP_UnitTestCase
    {
        /**
         * Test we add the PDF URLs to the Webhook request data when the request type is "all_fields"
         */
        public function test_webhook_request_data_all_fields()
        {
        }
        /**
         * Test that we do nothing if the request type isn't "all_fields"
         */
        public function test_webhook_request_data_select_fields()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_Controller_System_Report
     *
     * @package GFPDF\Controller
     *
     * @group   controller
     * @group   system-report
     */
    class Test_Controller_System_Report extends \WP_UnitTestCase
    {
        /**
         * @dataProvider data_gfpdf_system_status_items_php
         */
        public function test_system_report_php($table_index, $key)
        {
        }
        public function data_gfpdf_system_status_items_php()
        {
        }
        public function test_system_report_outdated_template()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_Controller_Zapier
     *
     * @package GFPDF\Controller
     *
     * @group   controller
     * @group   zapier
     */
    class Test_Controller_Zapier extends \WP_UnitTestCase
    {
        /**
         * @var Controller_Zapier
         */
        protected $controller;
        public function set_up()
        {
        }
        public function test_add_zapier_support_active_pdfs()
        {
        }
        public function test_add_zapier_support_conditional_logic()
        {
        }
        public function test_add_zapier_support_empty()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_Controller_Export_Entries
     *
     * @package GFPDF\Controller
     *
     * @group   controller
     * @group   export
     */
    class Test_Controller_Export_Entries extends \WP_UnitTestCase
    {
        public function test_add_pdfs_to_export_fields()
        {
        }
        public function test_no_add_pdfs_to_export_fields()
        {
        }
        public function test_get_export_field_unrelated_value()
        {
        }
        public function test_get_export_field_empty_pdf_value_if_failed_conditional_logic()
        {
        }
        public function test_get_export_field_pdf_value()
        {
        }
        public function test_get_export_field_empty_value()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_Controller_Custom_Fonts
     *
     * @package GFPDF\Controller
     *
     * @group   controller
     * @group   fonts
     */
    class Test_Controller_Custom_Fonts extends \WP_UnitTestCase
    {
        /**
         * @var Controller_Custom_Fonts
         */
        protected $controller;
        /**
         * @var Model_Custom_Fonts
         */
        protected $model;
        /**
         * @var string
         */
        protected $tmp_font_location;
        protected $test_fonts = [];
        protected $admin_user;
        protected $editor_user;
        public function set_up()
        {
        }
        public function tear_down()
        {
        }
        public function test_register_endpoints()
        {
        }
        public function test_get_all_items()
        {
        }
        public function test_add_item_success()
        {
        }
        public function test_add_item_permission_failed()
        {
        }
        public function test_add_item_basic_validation_failed()
        {
        }
        public function test_add_item_font_validation_failed()
        {
        }
        public function test_update_item_success()
        {
        }
        public function test_update_item_permission_failed()
        {
        }
        public function test_update_item_basic_validation_failed()
        {
        }
        public function test_update_item_invalid_font_id()
        {
        }
        public function test_update_item_font_validation_failed()
        {
        }
        public function test_delete_item_success()
        {
        }
        public function test_delete_item_with_font_reference_gone_success()
        {
        }
        public function test_delete_item_invalid_font_id()
        {
        }
        protected function set_all_file_params(\WP_REST_Request $request)
        {
        }
        public function test_get_absolute_font_path()
        {
        }
    }
}
namespace GFPDF\Tests {
    /**
     * Test Gravity PDF Helper_Field_Container class
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * @since 4.0
     * @group field-container
     */
    class Test_Field_Container extends \WP_UnitTestCase
    {
        /**
         * Our Helper_Field_Container
         *
         * @var Helper_Field_Container
         *
         * @since 4.0
         */
        public $container;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Check that full rows give the correct output
         *
         * @since 4.0
         */
        public function test_row()
        {
        }
        /**
         * Check that two-columns give the correct output
         *
         * @since 4.0
         */
        public function test_two_columns()
        {
        }
        /**
         * Check that three-columns give the correct output
         *
         * @since 4.0
         */
        public function test_three_columns()
        {
        }
        /**
         * Check that four-columns give the correct output
         *
         * @since 4.1
         */
        public function test_four_columns()
        {
        }
        /**
         * Check that two and three column layouts can intermingle
         *
         * @since 4.0
         */
        public function test_mixture()
        {
        }
        /**
         * Check that any skipped fields have their containers closed correctly
         *
         * @since 4.0
         */
        public function test_skipped_fields()
        {
        }
        /**
         * Check that the row closes when a class is present in a field
         *
         * @since 4.2
         */
        public function test_row_stopper()
        {
        }
        /**
         * Check if the current field is part of a multi-column row and it will fit into that row
         *
         * @since 4.0
         */
        public function test_does_fit_in_row()
        {
        }
        /**
         * Check if we should create a placeholder column
         *
         * @since 4.0
         */
        public function test_maybe_display_faux_column()
        {
        }
        /**
         * Ensure our Helper_Field_Container_Void class overrides all public methods in the parent class, with the
         * exception of the __construct method
         *
         * @since 4.0
         */
        public function test_helper_field_container_void()
        {
        }
    }
    /**
     * Test Gravity PDF Actions functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the model / view / controller for the Actions MVC
     *
     * @since 4.0
     *
     * @group actions
     */
    class Test_Actions extends \WP_UnitTestCase
    {
        /**
         * Our Controller
         *
         * @var Controller_Actions
         *
         * @since 4.0
         */
        public $controller;
        /**
         * Our Model
         *
         * @var Model_Actions
         *
         * @since 4.0
         */
        public $model;
        /**
         * Our View
         *
         * @var View_Actions
         *
         * @since 4.0
         */
        public $view;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Test the appropriate actions are set up
         *
         * @since 4.0
         */
        public function test_actions()
        {
        }
        /**
         * Test we are registering the required default routes
         *
         * @since 4.0
         */
        public function test_get_routes()
        {
        }
        /**
         * Test route notices are displayed correctly (verify capability, check for dismissal, check condition met)
         *
         * @since 4.0
         */
        public function test_route_notices()
        {
        }
        /**
         * Test route notices are displayed correctly (verify capability, check for dismissal, check condition met)
         *
         * @since 4.0
         */
        public function test_route_notices_fail_condition()
        {
        }
        /**
         * Test the route actions trigger correctly
         *
         * @since 4.0
         */
        public function test_route()
        {
        }
        /**
         * Check if the notice dismissal checker is accurate
         *
         * @since 4.0
         */
        public function test_is_notice_already_dismissed()
        {
        }
        /**
         * Check the core fonts installation prompt works as expected
         *
         * @since 5.0
         */
        public function test_core_fonts_condition()
        {
        }
        /**
         * Check our primary action button view generates correctly
         *
         * @since 4.0
         */
        public function test_get_action_buttons()
        {
        }
    }
    /**
     * Test Gravity PDF Templates Helper class
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.1
     */
    /**
     * @since 4.1
     *
     * @group helper-templates
     */
    class Test_Templates_Helper extends \WP_UnitTestCase
    {
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 4.1
         */
        public $templates;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.1
         */
        public function set_up()
        {
        }
        /**
         * Check the get_template_path() returns correct value
         *
         * @since 4.1
         */
        public function test_get_template_path()
        {
        }
        /**
         * Check the get_template_url() returns correct value
         *
         * @since 4.1
         */
        public function test_get_template_url()
        {
        }
        /**
         * Test the get_all_templates() functionality
         * By extension the get_unfiltered_template_list() and parse_unique_templates() are also tested
         *
         * @since 4.1
         */
        public function test_get_all_templates()
        {
        }
        /**
         * Test the get_all_templates_by_group() functionality
         *
         * @since 4.1
         */
        public function test_get_all_templates_by_group()
        {
        }
        /**
         * Check the is_template_compatible() method
         *
         * @since 4.1
         */
        public function test_is_template_compatible()
        {
        }
        /**
         * Check the maybe_add_template_compatibility_notice() returns correctly
         *
         * @since 4.1
         */
        public function test_maybe_add_template_compatibility_notice()
        {
        }
        /**
         * Check the get_all_template_info() returns the correct information
         *
         * Also checks get_template_info_by_path() and a side check for get_all_templates()
         */
        public function test_get_all_template_info()
        {
        }
        /**
         * Check we get the correct path to the PDF
         *
         * @since 4.1
         */
        public function test_get_template_path_by_id()
        {
        }
        /**
         * Check we get the expected results from get_template_info_by_id()
         *
         * @since 4.1
         */
        public function test_get_template_info_by_id()
        {
        }
        /**
         * Check we get all the correct files
         *
         * Tests get_template_path_by_id(), get_config_path_by_id() and get_template_image()
         *
         * @since 4.1
         */
        public function test_get_template_files_by_id()
        {
        }
        /**
         * Check if we are registering our core custom template appearance settings correctly
         *
         * Tests get_config_class(), load_template_config_file() and get_config_class_name()
         *
         * @since 4.1
         */
        public function test_get_template_configuration()
        {
        }
        /**
         * Test our PDF template headers are all registered
         *
         * @since 4.1
         */
        public function test_get_template_header_details()
        {
        }
        /**
         * Check we can correctly read the template headers
         *
         * @since 4.1
         */
        public function test_get_template_headers()
        {
        }
        /**
         * Check we can get the core PDF templates
         *
         * @since 4.1
         */
        public function test_get_plugin_pdf_templates()
        {
        }
        /**
         * Check we convert IDs into something human readable
         *
         * Tests human_readable_template_name()
         *
         * @param  $expected
         * @param  $name
         *
         * @since        4.1
         *
         * @dataProvider provider_human_readable
         */
        public function test_human_readable($expected, $name)
        {
        }
        /**
         * Data provider for human_readable test
         *
         * @return array
         *
         * @since  4.1
         */
        public function provider_human_readable()
        {
        }
        /**
         * Test we get the correct image, allowing for override in our PDF working directory
         *
         * Tests get_template_image()
         *
         * @since 4.1
         */
        public function test_get_template_image()
        {
        }
        /**
         * Check that the appropriate array keys are returned when getting the template arguments
         *
         * @since 4.1
         */
        public function test_get_template_args()
        {
        }
    }
    /**
     * Test Gravity PDF Endpoint Functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the model / view / controller for the PDF Endpoint functionality
     *
     * @since 4.0
     * @group pdf
     */
    class Test_PDF extends \WP_UnitTestCase
    {
        /**
         * Our Settings Controller
         *
         * @var Controller_PDF
         *
         * @since 4.0
         */
        public $controller;
        /**
         * Our Settings Model
         *
         * @var Model_PDF
         *
         * @since 4.0
         */
        public $model;
        /**
         * Our Settings View
         *
         * @var View_PDF
         *
         * @since 4.0
         */
        public $view;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Check if all the correct actions are applied
         *
         * @since 4.0
         */
        public function test_actions()
        {
        }
        /**
         * Check if all the correct filters are applied
         *
         * @since 4.0
         */
        public function test_filters()
        {
        }
        /**
         * Ensure we're cleaning up the tmp directory and set intervals
         *
         * @since 4.0
         */
        public function test_scheduled_tmp_cleanup()
        {
        }
        /**
         * Ensure our PDF endpoint listener is working correctly
         *
         * @since 4.0
         */
        public function test_process_pdf_endpoint()
        {
        }
        /**
         * Ensure our legacy PDF endpoint listener is working correctly
         *
         * @since 4.0
         */
        public function test_process_legacy_pdf_endpoint()
        {
        }
        /**
         * Ensure the correct error message is shown to the user
         *
         * @since 4.0
         */
        public function test_pdf_error()
        {
        }
        /**
         * Test if our public access middleware works as expected
         *
         * @since 4.0
         */
        public function test_middle_public_access()
        {
        }
        /**
         * Test the URL signing middleware works as expected
         *
         * @since 5.1
         */
        public function test_middle_signed_url_access()
        {
        }
        public function test_multisite_signed_url_access()
        {
        }
        /**
         * Test if our active PDF middleware works correctly
         *
         * @since 4.0
         */
        public function test_middle_active()
        {
        }
        /**
         * Test if our conditional logic middleware works correctly
         *
         * @since 4.0
         */
        public function test_middle_conditional()
        {
        }
        /**
         * Check if correct GF entry owner is determined
         *
         * @since 4.0
         */
        public function test_is_current_pdf_owner()
        {
        }
        /**
         * Check if our logged out restrictions are being applied correctly
         *
         * @since 4.0
         */
        public function test_middle_owner_restriction()
        {
        }
        /**
         * Check if our logged out timeout restrictions are being applied correctly
         *
         * @since 4.0
         */
        public function test_middle_logged_out_timeout()
        {
        }
        /**
         * Check if our logged out user has access to our PDF
         *
         * @since 4.0
         */
        public function test_middle_auth_logged_out_user()
        {
        }
        /**
         * Check if our logged in user has access to our PDF
         *
         * @since 4.0
         */
        public function test_middle_user_capability()
        {
        }
        /**
         * Check our PDF list is displaying correctly
         *
         * @since 4.0
         */
        public function test_view_pdf_entry_list()
        {
        }
        /**
         * Check that an array of PDFs gets correctly returned in the right format
         *
         * @since 4.0
         */
        public function test_get_pdf_display_list()
        {
        }
        /**
         * Check that our PDF name gets processed correctly
         * We'll unit test in more detail do_mergetags and strip_invalid_characters separately so just a quick run through here
         *
         * @since 4.0
         */
        public function test_get_pdf_name()
        {
        }
        /**
         * Check that the returned PDF URL is correct
         *
         * @param $pid
         * @param $id
         * @param $download
         * @param $print
         * @param $expected
         *
         * @since        4.0
         *
         * @dataProvider provider_get_pdf_url
         *
         */
        public function test_get_pdf_url($pid, $id, $download, $print, $expected)
        {
        }
        /**
         * The data provider for the test_get_pdf_url() function
         *
         * @since 4.0
         */
        public function provider_get_pdf_url()
        {
        }
        /**
         * Check that the returned PDF URL is correct
         *
         * @param $pid
         * @param $id
         * @param $download
         * @param $print
         * @param $expected
         *
         * @since        4.0
         *
         * @dataProvider provider_get_pdf_url_no_perma
         *
         */
        public function test_get_pdf_url_no_perma($pid, $id, $download, $print, $expected)
        {
        }
        /**
         * The data provider for the test_get_pdf_url() function
         *
         * @since 4.0
         */
        public function provider_get_pdf_url_no_perma()
        {
        }
        /**
         * Check if we are determining active PDFs correctly
         *
         * @param bool $expected
         * @param array $pdf
         *
         * @since        4.0
         *
         * @dataProvider provider_get_active_pdfs
         */
        public function test_get_active_pdfs($expected, $pdf)
        {
        }
        /**
         * Data provider for test_get_active_pdfs()
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_get_active_pdfs()
        {
        }
        /**
         * Check if the correct PDFs are attached to Gravity Forms notifications
         *
         * @since 4.0
         */
        public function test_notifications()
        {
        }
        /**
         * Check if our PDF exists on disk
         *
         * @since 4.0
         */
        public function test_does_pdf_exist()
        {
        }
        /**
         * Ensure the PDF output setting is correct
         *
         * @since 4.0
         */
        public function test_get_output_type()
        {
        }
        /**
         * Ensure the correct template path is returned
         *
         * @since 4.0
         */
        public function test_get_template_path()
        {
        }
        /**
         * Check our tmp directory is being cleaned up correctly
         *
         * @since 4.0
         */
        public function test_cleanup_tmp_dir()
        {
        }
        /**
         * Check that our PDF is cleaned up after the Gravity Forms entry save process
         *
         * @since 4.0
         */
        public function test_cleanup_pdf()
        {
        }
        /**
         * Test our custom fonts are registering correctly
         *
         * @since 4.0
         */
        public function test_register_custom_font_data_with_mPDF()
        {
        }
        /**
         * Check that any unregistered fonts will be autoloaded into mPDF
         *
         * @since 4.0
         */
        public function test_add_unregistered_fonts_to_mPDF()
        {
        }
        /**
         * Test that our field exists
         *
         * @since 4.0
         */
        public function test_check_field_exists()
        {
        }
        /**
         * Check we are replacing the array key correctly
         *
         * @since 4.0
         */
        public function test_replace_key()
        {
        }
        /**
         * Check the correct field class is being called
         *
         * @since 4.0
         */
        public function test_get_field_class()
        {
        }
        /**
         * Check our legacy configuration is being loaded correctly
         *
         * @since 4.0
         */
        public function test_get_legacy_config()
        {
        }
        /**
         * Test that we can successfully get the template filename
         *
         * @since        4.0
         *
         * @dataProvider provider_get_template_filename
         */
        public function test_get_template_filename($expected, $template)
        {
        }
        /**
         * Our data provider for getting View_PDF::get_template_filename()
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_get_template_filename()
        {
        }
        /**
         * Check that we're correctly process a valid HTML structure
         *
         * @since 4.0
         */
        public function test_process_html_structure()
        {
        }
        /**
         * Check our main html structure generator works correctly
         *
         * @since 4.0
         */
        public function test_generate_html_structure()
        {
        }
        /**
         * @since 4.2
         */
        public function test_field_middle_exclude()
        {
        }
        /**
         * @since 4.2
         */
        public function test_field_middle_conditional_fields()
        {
        }
        /**
         * @since 4.2
         */
        public function test_field_middle_product_fields()
        {
        }
        /**
         * @since 4.2
         */
        public function test_field_middle_html_fields()
        {
        }
        /**
         * @since 4.2
         */
        public function test_field_middle_blacklist()
        {
        }
        /**
         * Test a single field and check if the results are valid
         *
         * @since 4.0
         */
        public function test_process_field()
        {
        }
        /**
         * Test if the form title should be displayed
         *
         * @since 4.0
         */
        public function test_show_form_title()
        {
        }
        /**
         * Test if we should be displaying the page name
         *
         * @since 4.0
         */
        public function test_display_page_name()
        {
        }
        /**
         * Check that our backwards compatibility filters work as expected
         *
         * @since 4.0
         */
        public function test_apply_backwards_compatibility_filters()
        {
        }
        /**
         * Check that our PDF settings get preprocessed correctly
         *
         * @since 4.0
         */
        public function test_preprocess_template_arguments()
        {
        }
        /**
         * Verify our core HTML output is accurate for the input settings we include
         *
         * @since 4.0
         */
        public function test_core_template_options()
        {
        }
        /**
         * Check that our backwards compatible Tier 2 add-on works as expected
         *
         * @since 4.0
         */
        public function test_handle_legacy_tier_2_processing()
        {
        }
        /**
         * @since 5.1.1
         */
        public function test_kses()
        {
        }
    }
    /**
     * Test Gravity PDF Loader Class
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the initial boot-up plugin phase
     *
     * @since 4.0
     * @group pre-checks
     */
    class Test_Pre_Checks extends \WP_UnitTestCase
    {
        /**
         * Our Gravity PDF object used in tests
         *
         * @var GFPDF_Major_Compatibility_Checks
         *
         * @since 4.0
         */
        public $gravitypdf;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Ensure correct constants are called
         *
         * @since 4.0
         */
        public function test_constants()
        {
        }
        /**
         * Ensure our auto initializer is firing correctly
         *
         * @since 4.0
         */
        public function test_init()
        {
        }
        /**
         * Test our min WordPress version is working correctly
         *
         * @param string $min_version
         * @param string $test_wp_version
         * @param bool $expected
         *
         * @since        4.0
         *
         * @dataProvider provider_version
         */
        public function test_check_wordpress($min_version, $test_wp_version, $expected)
        {
        }
        /**
         * Test our min Gravity Forms version is working correctly
         *
         * @param string $min_version
         * @param string $test_gf_version
         * @param bool $expected
         *
         * @since        4.0
         *
         * @dataProvider provider_version
         */
        public function test_check_gravityforms($min_version, $test_gf_version, $expected)
        {
        }
        /**
         * Ensure we are getting the correct memory (in bytes) based on the PHP ini setting
         *
         * @param string $memory
         * @param string $bytes
         *
         * @since        4.0
         *
         * @dataProvider provider_memory
         */
        public function test_convert_ini_memory($memory, $bytes)
        {
        }
        /**
         * Ensure we are getting the correct memory (in mb) based on the PHP ini setting
         *
         * @param string $memory
         * @param string $bytes
         *
         * @since        4.0
         *
         * @dataProvider provider_memory
         */
        public function test_get_ram($memory, $bytes)
        {
        }
        /**
         * Check if we meet the minimum RAM requirements
         *
         * @param string $memory
         * @param bool $expected
         *
         * @since        4.0
         *
         * @dataProvider provider_memory_minimum
         */
        public function test_check_ram($memory, $expected)
        {
        }
        /**
         * Check that our notice is being correctly called
         *
         * @since 4.0
         */
        public function test_loader_notice()
        {
        }
        /**
         * A data provider for any tests that need to check PHP memory
         *
         * @return array Our test data
         *
         * @since 4.0
         */
        public function provider_memory()
        {
        }
        /**
         * A data provider to check we meet the minimum memory requirements
         *
         * @return array Our test data
         *
         * @since 4.0
         */
        public function provider_memory_minimum()
        {
        }
        /**
         * A data provider for any tests that need version number checks
         *
         * @return array Our test data
         *
         * @since 4.0
         */
        public function provider_version()
        {
        }
    }
    /**
     * Test Gravity PDF Helper Misc Functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the GPDFAPI class
     *
     * @since 4.0
     * @group api
     */
    class Test_API extends \WP_UnitTestCase
    {
        /**
         * Check the correct class is returned
         *
         * @param string $expected
         * @param string $method
         *
         * @since        4.0
         *
         * @dataProvider provider_classes
         */
        public function test_get_class($expected, $method)
        {
        }
        /**
         * The data provider passing in our class getter methods and expected values
         *
         * @since 4.0
         */
        public function provider_classes()
        {
        }
        /**
         * Check we can get a form's PDF settings
         *
         * @since 4.0
         */
        public function test_get_form_pdfs()
        {
        }
        /**
         * Check we can get a form's PDF settings
         *
         * @since 6.0
         */
        public function test_get_entry_pdfs()
        {
        }
        /**
         * Check we are returning the correct class when called
         *
         * @since 4.0
         */
        public function test_get_pdf_class()
        {
        }
        /**
         * Verify our API returns the correct classes
         *
         * @since 4.0
         */
        public function test_get_mvc_class()
        {
        }
        /**
         * Check we can add a new PDF
         *
         * @since 4.0
         */
        public function test_add_update_delete()
        {
        }
        /**
         * Check we can get the global Gravity PDF settings
         *
         * @since 4.0
         */
        public function test_get_plugin_settings()
        {
        }
        /**
         * Ensure we generate the product table correctly
         *
         * @since 4.0
         */
        public function test_product_table()
        {
        }
        /**
         * Ensure we generate the likert table correctly
         *
         * @since 4.0
         */
        public function test_likert_table()
        {
        }
        /**
         * Test we can add our font correctly
         *
         * @since 4.1
         */
        public function test_add_pdf_font()
        {
        }
        public function test_add_pdf_font_duplicate()
        {
        }
        /**
         * Test we can correctly delete the font
         *
         * @since 4.1
         */
        public function test_delete_pdf_font()
        {
        }
        /**
         * @since 5.0
         */
        public function test_get_form_data()
        {
        }
    }
    /**
     * Test Gravity PDF Bootstrap Class
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.0
     */
    /**
     * Test the Bootstrap / Main Router
     *
     * @since 4.0
     * @group bootstrap
     */
    class Test_Bootstrap extends \WP_UnitTestCase
    {
        /**
         * Our Gravity PDF Router object
         *
         * @var Router
         *
         * @since 4.0
         */
        public $loader;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Test the global bootstrap actions are applied
         *
         * @since 4.0
         */
        public function test_actions()
        {
        }
        /**
         * Test the global bootstrap filters are applied
         *
         * @since 4.0
         */
        public function test_filters()
        {
        }
        /**
         * Check the required helper classes are loaded into the Router
         *
         * @param string $expected
         * @param string $property
         *
         * @since        4.0
         *
         * @dataProvider provider_dependant_helper_classes
         */
        public function test_dependant_helper_classes($expected, $property)
        {
        }
        /**
         * Returns the test data for our test_dependant_helper_classes
         * Test the $log property in another test
         *
         * @return array
         *
         * @since 4.0
         */
        public function provider_dependant_helper_classes()
        {
        }
        /**
         * Test that any Gravity PDF scripts are automatically loading when GF is in no conflict mode
         *
         * @since 4.0
         */
        public function test_auto_noconflict_gfpdf_js()
        {
        }
        /**
         * Test that any Gravity PDF styles are automatically loading when GF is in no conflict mode
         *
         * @since 4.0
         */
        public function test_auto_noconflict_gfpdf_css()
        {
        }
        /**
         * Check the logger is setting up correctly
         *
         * @since 4.0
         */
        public function test_setup_logger()
        {
        }
        /**
         * Test backwards compatibility function for our v3 default PDF templates
         *
         * @since 4.0
         */
        public function test_get_default_config_data()
        {
        }
        /**
         * @since 4.2
         */
        public function test_licensing_requirements()
        {
        }
    }
}
namespace GFPDF\Model {
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_Model_Pdf_Meta_Box
     *
     * @package GFPDF\Model
     *
     * @group   model
     * @group   pdf
     */
    class Test_Model_Pdf_Meta_Box extends \WP_UnitTestCase
    {
        /**
         * @var Controller_PDF
         */
        protected $controller;
        /**
         * @var Model_PDF
         */
        protected $model;
        /**
         * @var View_PDF
         */
        protected $view;
        /**
         * The WP Unit Test Set up function
         */
        public function set_up()
        {
        }
        /**
         * Create our testing data
         */
        protected function create_form_and_entries()
        {
        }
        /**
         * Check our PDF detail list is displaying correctly
         */
        public function test_view_pdf_entry_detail_success()
        {
        }
        /**
         * Check our PDF detail list is displaying correctly when there is no entry passed
         */
        public function test_view_pdf_entry_detail_fail()
        {
        }
        /**
         * Check if Metabox registration is working properly
         */
        public function test_register_pdf_meta_box_success()
        {
        }
        /**
         * Check if Metabox registration is working properly when there is no active PDFs
         */
        public function test_register_pdf_meta_box_fail()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_Model_Custom_Fonts
     *
     * @package   GFPDF\Model
     *
     * @group     model
     * @group     fonts
     */
    class Test_Model_Custom_Fonts extends \WP_UnitTestCase
    {
        /**
         * @var Model_Custom_Fonts
         */
        public $model;
        public function set_up()
        {
        }
        public function tear_down()
        {
        }
        /**
         * @dataProvider data_check_font_name_valid
         */
        public function test_check_font_name_valid(bool $expected, string $name)
        {
        }
        public function data_check_font_name_valid() : array
        {
        }
        /**
         * @dataProvider data_check_font_id_valid
         */
        public function test_check_font_id_valid(bool $expected, string $id)
        {
        }
        public function data_check_font_id_valid() : array
        {
        }
        public function test_get_custom_fonts()
        {
        }
        public function test_get_font_by_id_success()
        {
        }
        public function test_get_font_by_id_exception()
        {
        }
        public function test_update_font()
        {
        }
        public function test_delete_font_success()
        {
        }
        public function test_delete_font_exception()
        {
        }
        public function test_get_unique_id()
        {
        }
        /**
         * @dataProvider data_has_unique_font_id
         */
        public function test_has_unique_font_id(bool $expected, string $id)
        {
        }
        public function data_has_unique_font_id() : array
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_Model_System_Report
     *
     * @package GFPDF\Model
     *
     * @group   model
     * @group   pdf
     */
    class Test_Model_System_Report extends \WP_UnitTestCase
    {
        /**
         * @var Model_System_Report
         */
        protected $model;
        /**
         * The WP Unit Test Set up function
         */
        public function set_up()
        {
        }
        public function test_get_report_structure()
        {
        }
        public function test_move_gravitypdf_active_plugins_to_gf_addons()
        {
        }
        protected function data_test_move_gravitypdf_active_plugins_to_gf_addons()
        {
        }
        public function test_public_tmp_directory_access()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_Model_Mergetags
     *
     * @package   GFPDF\Model
     *
     * @group     model
     * @group     tags
     */
    class Test_Model_Mergetags extends \WP_UnitTestCase
    {
        /**
         * @var Controller_Shortcodes
         */
        public $controller;
        /**
         * @var Model_Shortcodes
         */
        public $model;
        public function set_up()
        {
        }
        /**
         * Test the appropriate filters are set up
         */
        public function test_filters()
        {
        }
        /**
         * Check we correctly load the form's PDF mergetags in the correct format
         */
        public function test_add_mergetags()
        {
        }
        public function provider_standard_pdf_mergetags_no_permalinks() : array
        {
        }
        public function provider_modifier_pdf_mergetags_no_permalinks() : array
        {
        }
        /**
         * Check we correctly convert our PDF mergetag with permalinks enabled
         *
         * @param string $expected
         * @param string $text
         * @param bool   $encode
         *
         * @dataProvider provider_standard_pdf_mergetags_permalinks
         * @dataProvider provider_modifier_pdf_mergetags_permalinks
         */
        public function test_process_pdf_mergetags_permalink($expected, $text, $encode = true)
        {
        }
        /**
         * Check we correctly convert our PDF mergetag with permalinks disabled
         *
         * @param string $expected
         * @param string $text
         * @param bool   $encode
         *
         * @dataProvider provider_standard_pdf_mergetags_no_permalinks
         * @dataProvider provider_modifier_pdf_mergetags_no_permalinks
         */
        public function test_process_pdf_mergetags($expected, $text, $encode = true)
        {
        }
        public function provider_standard_pdf_mergetags_permalinks() : array
        {
        }
        public function provider_modifier_pdf_mergetags_permalinks() : array
        {
        }
        /**
         * Check for signed URL when processing merge tag
         *
         * @param string $text
         *
         * @dataProvider provider_signed_modifier_pdf_mergetags
         */
        public function test_process_pdf_mergetags_signed_no_permalink($text)
        {
        }
        /**
         * Check for signed URL when processing merge tag
         *
         * @param string $text
         *
         * @dataProvider provider_signed_modifier_pdf_mergetags
         */
        public function test_process_pdf_mergetags_signed_permalink($text)
        {
        }
        public function provider_signed_modifier_pdf_mergetags() : array
        {
        }
        public function test_add_field_map_choices()
        {
        }
        public function test_process_field_value()
        {
        }
        /* Test if fields does not contain Entry Properties label. */
        public function test_empty_field_map_choices()
        {
        }
        /* Test if there are no pdf template included on the form . */
        public function test_no_pdf_template()
        {
        }
    }
}
namespace GFPDF\View {
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_View_System_Report
     *
     * @package GFPDF\View
     *
     * @group   view
     * @group   system-report
     */
    class Test_View_System_Report extends \WP_UnitTestCase
    {
        /**
         * @var View_System_Report
         */
        protected $view;
        public function set_up()
        {
        }
        public function test_memory_limit_success()
        {
        }
        public function test_temp_folder_protected_success()
        {
        }
        public function test_allow_url_fopen_success()
        {
        }
        public function test_get_icon()
        {
        }
        public function test_maybe_get_active_icon()
        {
        }
    }
}
namespace GFPDF\Tests {
    /**
     * Test our custom template $form_data array
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the Gravity Forms functionality we rely on in Gravity PDF
     *
     * @since 4.0
     * @group form-data
     */
    class Test_Form_Data extends \WP_UnitTestCase
    {
        /**
         * The Gravity Form
         *
         * @var array
         *
         * @since 4.0
         */
        public $form;
        /**
         * The Gravity Form entries imported
         *
         * @var array
         *
         * @since 4.0
         */
        public $entries = [];
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Do basic tests on the form data array
         *
         * @since 4.0
         */
        public function test_basic_form_data()
        {
        }
        /**
         * Test all the misc data
         * Most of this blank in our test form so we'll just check all the fields exist for the moment
         *
         * @todo  expand unit test later
         *
         * @since 4.0
         */
        public function test_misc_form_data()
        {
        }
        /**
         * Check the field descriptions are being loads
         *
         * @since 4.0
         */
        public function test_field_descriptions()
        {
        }
        /**
         * Check the $form_data['field'] key exists
         *
         * @since 4.0
         */
        public function test_field()
        {
        }
        /**
         * Check the single field outputs the correct information
         *
         * @since 4.0
         */
        public function test_field_single()
        {
        }
        /**
         * Check the paragraph field outputs the correct information
         *
         * @since 4.0
         */
        public function test_field_paragraph()
        {
        }
        /**
         * Check the dropdown field outputs the correct information
         *
         * @since 4.0
         */
        public function test_dropdown()
        {
        }
        /**
         * Check the multiselect field outputs the correct information
         *
         * @since 4.0
         */
        public function test_multiselect()
        {
        }
        /**
         * Check the number field outputs the correct information
         *
         * @since 4.0
         */
        public function test_field_number()
        {
        }
        /**
         * Test that number fields will use the local currency set in the entry
         */
        public function test_field_number_currency()
        {
        }
        /**
         * Check the checkbox field outputs the correct information
         *
         * @since 4.0
         */
        public function test_checkbox()
        {
        }
        /**
         * Check the radio field outputs the correct information
         *
         * @since 4.0
         */
        public function test_radio_button()
        {
        }
        /**
         * Check the hidden field outputs the correct information
         *
         * @since 4.0
         */
        public function test_hidden_field()
        {
        }
        /**
         * Check the name field outputs the correct information
         *
         * @since 4.0
         */
        public function test_name_field()
        {
        }
        /**
         * Check the date field outputs the correct information
         *
         * @since 4.0
         */
        public function test_date_field()
        {
        }
        /**
         * Check the time field outputs the correct information
         *
         * @since 4.0
         */
        public function test_time_field()
        {
        }
        /**
         * Check the phone field outputs the correct information
         *
         * @since 4.0
         */
        public function test_phone_field()
        {
        }
        /**
         * Check the address field outputs the correct information
         *
         * @since 4.0
         */
        public function test_address_field()
        {
        }
        /**
         * Check the website field outputs the correct information
         *
         * @since 4.0
         */
        public function test_website_field()
        {
        }
        /**
         * Check the email field outputs the correct information
         *
         * @since 4.0
         */
        public function test_email_field()
        {
        }
        /**
         * Check the upload field outputs the correct information
         *
         * @since 4.0
         */
        public function test_upload_field()
        {
        }
        /**
         * Check the list field outputs the correct information
         *
         * @since 4.0
         */
        public function test_list_field()
        {
        }
        /**
         * Check the poll field outputs the correct information
         *
         * @since 4.0
         */
        public function test_poll_field()
        {
        }
        /**
         * Check the quiz field outputs the correct information
         *
         * @since 4.0
         */
        public function test_quiz_field()
        {
        }
        /**
         * Check the survey field outputs the correct information
         *
         * @since 4.0
         */
        public function test_survey_basic_field()
        {
        }
        /**
         * Check the post field outputs the correct information
         *
         * @since 4.0
         */
        public function test_post_fields()
        {
        }
        /**
         * Check the basic product field outputs the correct information
         *
         * @since 4.0
         */
        public function test_basic_product_fields()
        {
        }
        /**
         * Check the HTML description outputs the correct information
         *
         * @since 4.0
         */
        public function test_html_block()
        {
        }
        /**
         * Check the list field outputs the correct information
         *
         * @since 4.0
         */
        public function test_list_field_block()
        {
        }
        /**
         * Check the signature field outputs the correct information
         *
         * @since 4.0
         */
        public function test_signature_blocks()
        {
        }
        /**
         * Check the survey likert field outputs the correct information
         *
         * @since 4.0
         */
        public function test_survey_likert_fields()
        {
        }
        /**
         * Check the survey rank field outputs the correct information
         *
         * @since 4.0
         */
        public function test_survey_rank_fields()
        {
        }
        /**
         * Check the survey rating field outputs the correct information
         *
         * @since 4.0
         */
        public function test_survey_rating_fields()
        {
        }
        /**
         * Check the $form_data['product'] array outputs the correct information
         *
         * @since 4.0
         */
        public function test_product_data()
        {
        }
        /**
         * Check the $form_data['products_totals'] outputs the correct information
         *
         * @since 4.0
         */
        public function test_product_totals()
        {
        }
        /**
         * Check the $form_data['quiz'] key exists
         *
         * @since 4.0
         */
        public function test_quiz_exists()
        {
        }
        /**
         * Check the $form_data['quiz']['config'] contains the correct information
         *
         * @since 4.0
         */
        public function test_quiz_config()
        {
        }
        /**
         * Check the $form_data['quiz']['results'] key
         *
         * @since 4.0
         */
        public function test_quiz_results()
        {
        }
        /**
         * Check the $form_data['quiz']['global'] key
         *
         * @since 4.0
         */
        public function test_quiz_globals()
        {
        }
        /**
         * Check the $form_data['survey'] key exists
         *
         * @since 4.0
         */
        public function test_survey_key()
        {
        }
        /**
         * Check the global survey data correct
         *
         * @since 4.0
         */
        public function test_survey_global_data()
        {
        }
        /**
         * Check the global likert data correct
         *
         * @since 4.0
         */
        public function test_survey_likert_data()
        {
        }
        /**
         * Check the global rank data correct
         *
         * @since 4.0
         */
        public function test_survey_rank_data()
        {
        }
        /**
         * Check the global rating data correct
         *
         * @since 4.0
         */
        public function test_survey_rating_data()
        {
        }
        /**
         * Check the poll data key
         *
         * @since 4.0
         */
        public function test_poll_data()
        {
        }
        /**
         * Ensure the empty fields in the $form_data array produce the expected results
         *
         * @since 4.0
         */
        public function test_empty_fields()
        {
        }
        /**
         * Ensure the Product data calculations are correct when using Euros (or similar comma/decimal switched currency)
         */
        public function test_euro_product_data()
        {
        }
        /**
         * Test the Gravity Forms Consent field form data
         */
        public function test_consent_field_data()
        {
        }
        /**
         * Test the Gravity Forms Repeater field form data
         */
        public function test_repeater_field_data()
        {
        }
        /**
         * Test if the section title shows correctly for a repeater field
         *
         * @since 6.4
         */
        public function test_repeater_maybe_show_section_title()
        {
        }
    }
    /**
     * Test Gravity PDF Abstract Addon functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.2
     */
    /**
     * Class Test_Addon
     *
     * @package GFPDF\Tests
     *
     * @since   4.2
     *
     * @group   addon
     */
    class Test_Addon extends \WP_UnitTestCase
    {
        /**
         * Our test class
         *
         * @var Helper_Abstract_Addon
         *
         * @since 4.2
         */
        public $addon;
        /**
         * Our 2nd test class
         *
         * @var Helper_Abstract_Addon
         *
         * @since 6.5
         */
        public $addon2;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.2
         */
        public function set_up()
        {
        }
        /**
         * @since 4.2
         */
        public function test_get_slug()
        {
        }
        /**
         * @since 4.2
         */
        public function test_get_name()
        {
        }
        /**
         * @since 4.2
         */
        public function test_get_version()
        {
        }
        /**
         * @since 4.2
         */
        public function test_get_author()
        {
        }
        /**
         * @since 4.2
         */
        public function test_get_main_plugin_file()
        {
        }
        /**
         * @since 4.2
         */
        public function test_init()
        {
        }
        /**
         * @since 4.2
         */
        public function test_license_info()
        {
        }
        /*
         * @since 4.2
         */
        public function test_get_license_key()
        {
        }
        /*
         * @since 4.2
         */
        public function test_get_license_status()
        {
        }
        /*
         * @since 4.2
         */
        public function test_get_license_message()
        {
        }
        /**
         * @since 4.2
         */
        public function test_maybe_schedule_license_check()
        {
        }
        /**
         * @since 4.2
         */
        public function test_schedule_license_check()
        {
        }
        /**
         * @since 4.2
         */
        public function test_auto_register_global_fields_fallback()
        {
        }
        /**
         * @since 6.5
         */
        public function test_auto_register_global_fields_with_prefix()
        {
        }
        /**
         * @since 6.5
         */
        public function test_get_addon_settings_defaults()
        {
        }
        /**
         * @since 6.5
         */
        public function test_get_addon_settings_values()
        {
        }
        /**
         * @since 6.5
         */
        public function test_get_addon_setting_value()
        {
        }
    }
    /**
     * Test class which extends Helper_Abstract_Addon
     */
    class Addon extends \GFPDF\Helper\Helper_Abstract_Addon
    {
        public function plugin_updater()
        {
        }
    }
}
namespace GFPDF\Helper {
    /**
     * A simple interface to standardise how actions and filters should be applied in classes
     *
     * @since 4.2
     */
    interface Helper_Interface_Extension_Settings
    {
        /**
         * Return an array of fields that should be registered in the addon. See Helper_Options_Fields for examples of
         * defining fields
         *
         * @Internal All fields should be prefixed with the add-on slug.
         *
         * @return array
         * @since    4.2
         * @internal From 6.5 all settings keys / IDs should be prefixed with Helper_Abstract_Addon::get_addon_settings_key()
         */
        public function get_global_addon_fields();
    }
}
namespace GFPDF\Tests {
    class Addon_Fields extends \GFPDF\Helper\Helper_Abstract_Addon implements \GFPDF\Helper\Helper_Interface_Extension_Settings
    {
        public function plugin_updater()
        {
        }
        public function get_global_addon_fields()
        {
        }
    }
    class SubAddon
    {
        public $run = false;
        public function init()
        {
        }
    }
    /**
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       5.5
     */
    /**
     * @since 5.2
     * @group mpdf
     */
    class Test_Helper_Mpdf extends \WP_UnitTestCase
    {
        /**
         * @since 5.2
         */
        public function test_extends()
        {
        }
        /**
         * @since 5.2
         */
        public function test_set_import_use()
        {
        }
        /**
         * @since 5.2
         */
        public function test_write_html()
        {
        }
    }
    /**
     * Test Gravity PDF Data Helper Class
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.0
     */
    /**
     * Test the PSR-4 Autoloader Implementation
     *
     * @since 4.0
     * @group data-helper
     */
    class Test_Data_Helper extends \WP_UnitTestCase
    {
        /**
         * Our Gravity PDF Data object
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        public $data;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Check if our getter / setter is functional with different data types
         *
         * @param string $key
         * @param string $val
         *
         * @since        4.0
         *
         * @dataProvider provider_setter
         */
        public function test_setter($key, $val)
        {
        }
        /**
         * Check if our isset and unset magic methods work correctly
         *
         * @param string $key
         * @param string $val
         *
         * @since        4.0
         *
         * @dataProvider provider_setter
         */
        public function test_isset($key, $val)
        {
        }
        /**
         * Ensure data accessed is returned by reference
         *
         * @since 4.0
         */
        public function test_by_reference()
        {
        }
        /**
         * A data provider used to check the getter / setter functionality is working correctly
         *
         * @return array Our test data
         *
         * @since 4.0
         */
        public function provider_setter()
        {
        }
        /**
         * Test the localised script data
         *
         * @since 4.0
         */
        public function test_localised_script()
        {
        }
    }
    /**
     * Test Gravity PDF Templates Functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the model / controller for the Templates UI
     *
     * @since 4.1
     * @group templates
     */
    class Test_Templates extends \WP_UnitTestCase
    {
        /**
         * Our Templates Controller
         *
         * @var Controller_Templates
         * @since 4.1
         */
        public $controller;
        /**
         * Our Templates Model
         *
         * @var Model_Templates
         * @since 4.1
         */
        public $model;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.1
         */
        public function set_up()
        {
        }
        /**
         * Test the appropriate actions are set up
         *
         * @since 4.1
         */
        public function test_actions()
        {
        }
        /**
         * Test we correctly move a file using
         *
         * @since 4.1
         */
        public function test_move_template_to_tmp_dir()
        {
        }
        /**
         * Get if we get the expected results
         *
         * @param string $expected
         * @param string $zip_path
         *
         * @since        4.1
         *
         * @dataProvider provider_get_unzipped_dir_name
         */
        public function test_get_unzipped_dir_name($expected, $zip_path)
        {
        }
        /**
         * Data Provider for test_get_unzipped_dir_name()
         *
         * @return array
         *
         * @since 4.1
         */
        public function provider_get_unzipped_dir_name()
        {
        }
        /**
         * Verify we can correctly unzip an archive and check there are valid PDF templates within
         * said archive.
         *
         * Tested: unzip_and_verify_templates() and check_for_valid_pdf_templates()
         *
         * @since 4.1
         */
        public function test_unzip_and_verify_templates()
        {
        }
        /**
         * Check we can get information about our PDF templates
         *
         * @since 4.1
         */
        public function test_get_template_info()
        {
        }
        /**
         * Check our unzipped directory is correctly cleaned up
         *
         * @since 4.1
         */
        public function cleanup_template_files()
        {
        }
    }
    /**
     * Test Gravity PDF Shortcode functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the model / view / controller for the Shortcode MVC
     *
     * @since 4.0
     * @group shortcodes
     */
    class Test_Shortcode extends \WP_UnitTestCase
    {
        /**
         * Our Controller
         *
         * @var Controller_Shortcodes
         *
         * @since 4.0
         */
        public $controller;
        /**
         * Our Model
         *
         * @var Model_Shortcodes
         *
         * @since 4.0
         */
        public $model;
        /**
         * Our View
         *
         * @var View_Shortcodes
         *
         * @since 4.0
         */
        public $view;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Test the appropriate filters are set up
         *
         * @since 4.0
         */
        public function test_filters()
        {
        }
        /**
         * Test the appropriate shortcodes are set up
         *
         * @since 4.0
         */
        public function test_shortcodes()
        {
        }
        /**
         * Test the gravitypdf shortcodes render as expected
         *
         * @since 4.0
         */
        public function test_gravitypdf_shortcode()
        {
        }
        /**
         * Test we're correctly handling the Gravity Forms text confirmation method and including the entry ID
         *
         * @since 4.0
         */
        public function test_gravitypdf_confirmation()
        {
        }
        /**
         * Test we're correctly handling the Gravity Forms notifications method and including the entry ID
         *
         * @since 4.0
         */
        public function test_gravitypdf_notification()
        {
        }
        /**
         * Test we can correctly update shortcode attributes easily
         *
         * @since 4.0
         */
        public function test_add_shortcode_attr()
        {
        }
        /**
         * Verify we're replacing a shortcode with the correct URL for the redirect confirmation
         *
         * @since 4.0
         */
        public function test_gravitypdf_redirect_confirmation()
        {
        }
        /**
         * @since 5.1
         */
        public function test_gravitypdf_redirect_confirmation_shortcode_processing()
        {
        }
        /**
         * Verify we can return a parsed version of the shortcode information
         *
         * @since 4.0
         */
        public function test_get_shortcode_information()
        {
        }
        /**
         * Check our no entry ID view displays correctly
         *
         * @since 4.0
         */
        public function test_no_entry_id()
        {
        }
        /**
         * Check our invalid PDF view displays correctly
         *
         * @since 4.0
         */
        public function test_invalid_pdf_config()
        {
        }
        /**
         * Check our inactive PDF view displays correctly
         *
         * @since 4.0
         */
        public function test_pdf_not_active()
        {
        }
        /**
         * Check our failed conditional logic view displays correctly
         *
         * @since 4.0
         */
        public function test_conditional_logic_not_met()
        {
        }
        /**
         * Check our display GF shortcode view displays correctly
         *
         * @since 4.0
         */
        public function test_display_gravitypdf_shortcode()
        {
        }
    }
}
namespace GFPDF\Helper {
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     */
    class Test_Helper_Field_Container_Gf25 extends \WP_UnitTestCase
    {
        /**
         * @var Helper_Field_Container_Gf25
         */
        protected $class;
        public function set_up()
        {
        }
        /**
         * Verify running a big chunk of HTML through QueryPath doesn't break our markup in unexpected days
         * @dataProvider provider_close
         */
        public function test_close($expected) : void
        {
        }
        public function provider_close()
        {
        }
        protected function minify($html)
        {
        }
        public function test_css_grid_insertion()
        {
        }
    }
}
namespace GFPDF\Helper\Fields {
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2022, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     * @group   fields
     */
    class Test_Field_Product extends \WP_UnitTestCase
    {
        /**
         * @var array
         */
        public $form;
        /**
         * @var array
         */
        public $entry_id;
        /**
         * @var array
         */
        public $entry;
        /**
         * @var Field_Product
         */
        public $pdf_field;
        public function set_up()
        {
        }
        public function test_grouped_default_html()
        {
        }
        public function test_grouped_disabled_qty_html()
        {
        }
        public function test_grouped_linked_quantity_html()
        {
        }
        public function test_grouped_option_html()
        {
        }
        protected function set_products($field)
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     * @group   fields
     */
    class Test_Field_Post_Category extends \WP_UnitTestCase
    {
        /**
         * @var array
         */
        public $form;
        /**
         * @var \GF_Field_Post_Category
         */
        public $gf_field;
        /**
         * @var Field_Post_Category
         */
        public $pdf_field;
        public function set_up()
        {
        }
        public function test_html()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     * @group   fields
     */
    class Test_Field_Survey extends \WP_UnitTestCase
    {
        /**
         * @var array
         */
        public $form;
        /**
         * @var \GF_Field_Survey
         */
        public $gf_field;
        /**
         * @var Field_Survey
         */
        public $pdf_field;
        public function set_up()
        {
        }
        public function test_html()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     * @group   fields
     */
    class Test_Field_Post_Custom_Field extends \WP_UnitTestCase
    {
        /**
         * @var array
         */
        public $form;
        /**
         * @var \GF_Field_Post_Custom_Field
         */
        public $gf_field;
        /**
         * @var Field_Post_Category
         */
        public $pdf_field;
        public function set_up()
        {
        }
        public function test_html()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     * @group   fields
     */
    class Test_Field_Section extends \WP_UnitTestCase
    {
        public $form;
        public $gf_field;
        public $pdf_field;
        public function set_up()
        {
        }
        public function test_exclude_description_markup_if_empty()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2022, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     * @group   fields
     */
    class Test_Field_Products extends \WP_UnitTestCase
    {
        /**
         * @var array
         */
        public $form;
        /**
         * @var Field_Product
         */
        public $pdf_field;
        /**
         * @var array
         */
        public $entry;
        public function set_up()
        {
        }
        public function test_value()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2022, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     * @group   fields
     */
    class Test_Field_Option extends \WP_UnitTestCase
    {
        /**
         * @var array
         */
        public $form;
        /**
         * @var array
         */
        public $entry;
        /**
         * @var Field_Product
         */
        public $pdf_field;
        public function set_up()
        {
        }
        public function test_get_option_html()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     * @group   fields
     */
    class Test_Field_Consent extends \WP_UnitTestCase
    {
        public $form;
        public $gf_field;
        public $pdf_field;
        public function set_up()
        {
        }
        public function test_if_has_consent()
        {
        }
        public function test_if_has_not_consent()
        {
        }
        public function test_if_skip_when_not_consented()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     * @group   fields
     */
    class Test_Field_Signature extends \WP_UnitTestCase
    {
        /**
         * @var array
         */
        public $form;
        /**
         * @var \GF_Field_Signature
         */
        public $gf_field;
        public function set_up()
        {
        }
        public function test_html_with_windows_drive_path()
        {
        }
        public function test_html_with_windows_unc_path()
        {
        }
        public function test_html_with_linux_path()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @package GFPDF\Helper\Fields
     *
     * @group   helper
     * @group   fields
     */
    class Test_Field_Form extends \WP_UnitTestCase
    {
        public $form;
        public $gf_field;
        public $pdf_field;
        public function set_up()
        {
        }
        public function test_unique_ids()
        {
        }
    }
}
namespace {
    class GP_Field_Nested_Form extends \GF_Field
    {
        public $type = 'form';
    }
}
namespace GFPDF\Helper\Fields {
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_FlushCache
     *
     * @package GFPDF\Helper\Fonts
     *
     * @group   helper
     * @group   fields
     */
    class Test_Field_Radio extends \WP_UnitTestCase
    {
        public $form;
        public $gf_field;
        public $pdf_field;
        public function set_up()
        {
        }
        public function test_is_empty()
        {
        }
        public function test_value_with_empty_value()
        {
        }
        public function test_form_data_with_empty_value()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     * @group   fields
     */
    class Test_Field_Post_Image extends \WP_UnitTestCase
    {
        /**
         * @var array
         */
        public $form;
        /**
         * @var \GF_Field_Post_Image
         */
        public $gf_field;
        public function set_up()
        {
        }
        public function test_html_with_windows_drive_path()
        {
        }
        public function test_html_with_windows_unc_path()
        {
        }
        public function test_html_with_linux_path()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * @group   helper
     * @group   fields
     */
    class Test_Field_Poll extends \WP_UnitTestCase
    {
        /**
         * @var array
         */
        public $form;
        /**
         * @var \GF_Field_Poll
         */
        public $gf_field;
        /**
         * @var Field_Poll
         */
        public $pdf_field;
        public function set_up()
        {
        }
        public function test_html()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_FlushCache
     *
     * @package GFPDF\Helper\Fonts
     *
     * @group   helper
     * @group   fields
     */
    class Test_Field_Select extends \WP_UnitTestCase
    {
        public $form;
        public $gf_field;
        public $pdf_field;
        public function set_up()
        {
        }
        public function test_is_empty()
        {
        }
        public function test_is_empty_true()
        {
        }
        public function test_is_empty_false()
        {
        }
        public function test_value_with_empty_value()
        {
        }
        public function test_form_data_with_empty_value()
        {
        }
    }
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_Field_Repeater
     *
     *
     * @group   helper
     * @group   fields
     */
    class Test_Field_Repeater extends \WP_UnitTestCase
    {
        public $form;
        public $entry;
        public $pdf_field;
        public function set_up()
        {
        }
        /**
         * Test the Gravity PDF Repeater field add_entry_meta method with an invalid/valid $entry structure.
         */
        public function test_repeater_add_entry_meta_method()
        {
        }
        public function test_get_repeater_form_data()
        {
        }
        public function test_unique_ids()
        {
        }
    }
}
namespace GFPDF\Helper\Fonts {
    /**
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     */
    /**
     * Class Test_FlushCache
     *
     * @package GFPDF\Helper\Fonts
     *
     * @group   helper
     * @group   fonts
     */
    class Test_FlushCache extends \WP_UnitTestCase
    {
        public function test_flush_cache()
        {
        }
    }
}
namespace GFPDF\Tests {
    /**
     * Test Gravity PDF Form Settings Functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.0
     */
    /**
     * Test the model / view / controller for the Form Settings Page
     *
     * @since 4.0
     * @group form-settings
     */
    class Test_Form_Settings extends \WP_UnitTestCase
    {
        /**
         * Our Forms Settings Controller
         *
         * @var Controller_Form_Settings
         *
         * @since 4.0
         */
        public $controller;
        /**
         * Our Form Settings Model
         *
         * @var Model_Form_Settings
         *
         * @since 4.0
         */
        public $model;
        /**
         * Our Form Settings View
         *
         * @var View_Form_Settings
         *
         * @since 4.0
         */
        public $view;
        /**
         * The Gravity Form ID assigned to the imported form
         *
         * @var integer
         *
         * @since 4.0
         */
        public $form_id;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Test the appropriate actions are set up
         *
         * @since 4.0
         */
        public function test_actions()
        {
        }
        /**
         * Test the appropriate filters are set up
         *
         * @since 4.0
         */
        public function test_filters()
        {
        }
        /**
         * Test the Controller_Form_Settings maybe_save_pdf_settings() method
         *
         * @since 4.0
         */
        public function test_maybe_save_pdf_settings()
        {
        }
        /**
         * Test the process_list_view() method correctly renders the view
         * or throws an error when the user doesn't have the correct capabilities
         *
         * @since 4.0
         */
        public function test_process_list_view()
        {
        }
        /**
         * Test the show_edit_view() method correctly renders the view
         * or throws an error when the user doesn't have the correct capabilities
         *
         * @since 4.0
         */
        public function test_show_edit_view()
        {
        }
        /**
         * Check our validation method correctly functions
         *
         * @since 4.0
         */
        public function test_validation_error()
        {
        }
        /**
         * Check our process submission permissions, sanitization and save / update functionality works correctly
         *
         * @since 4.0
         */
        public function test_process_submission()
        {
        }
        /**
         * Test our sanitize filters are correctly firing for each section type
         *
         * @since 4.0
         */
        public function test_settings_sanitize()
        {
        }
        /**
         * Check that .pdf is correctly removed from all filenames
         *
         * @param string $expected
         * @param string $string
         *
         * @since        4.0
         *
         * @dataProvider provider_strip_filename
         */
        public function test_strip_filename_extension($expected, $string)
        {
        }
        /**
         * A data provider for our strip filename test
         *
         * @return array Our test data
         * @since 4.0
         */
        public function provider_strip_filename()
        {
        }
        /**
         * Check if we are registering our custom template appearance settings
         *
         * @since 4.0
         */
        public function test_register_custom_appearance_settings()
        {
        }
        /**
         * Check if we are registering our custom template appearance settings correctly
         *
         * @since 4.0
         */
        public function test_setup_custom_appearance_settings()
        {
        }
        /**
         * Check if we are registering our core custom template appearance settings correctly
         *
         * @since 4.0
         */
        public function test_setup_core_custom_appearance_settings()
        {
        }
        /**
         * Check we are decoding the json data successfully
         *
         * @since 4.0
         */
        public function test_decode_json()
        {
        }
        /**
         * Check we can successfully update the notification field data
         *
         * @since 4.0
         */
        public function test_register_notifications()
        {
        }
        /**
         * Check we correctly output the appropriate information
         *
         * @since 4.0
         */
        public function test_register_template_group()
        {
        }
    }
    /**
     * Test Gravity PDF Actions functionality
     *
     * @package     Gravity PDF
     * @copyright   Copyright (c) 2023, Blue Liquid Designs
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       4.0
     */
    /**
     * Test the Helper_Notices class
     *
     * @since 4.0
     * @group notices
     */
    class Test_Notices extends \WP_UnitTestCase
    {
        /**
         * Our notice object
         *
         * @var Helper_Notices
         *
         * @since 4.0
         */
        public $notices;
        /**
         * The WP Unit Test Set up function
         *
         * @since 4.0
         */
        public function set_up()
        {
        }
        /**
         * Test the appropriate actions are set up
         *
         * @since 4.0
         */
        public function test_actions()
        {
        }
        /**
         * Check we can correctly add a notice
         *
         * @since 4.0
         */
        public function test_add_notice()
        {
        }
        /**
         * Check we can correctly add an error
         *
         * @since 4.0
         */
        public function test_add_error()
        {
        }
        /**
         * Ensure we can clear notices correctly
         *
         * @since 4.0
         */
        public function test_clear()
        {
        }
        /**
         * Ensure we display / process errors and notices correctly
         *
         * @since 4.0
         */
        public function test_process()
        {
        }
        public function test_html_notice()
        {
        }
        /**
         * Testing hooks form gform_admin_messages and gform_admin_error_messages
         **/
        public function test_gform_admin_messages_hooks()
        {
        }
        public function test_empty_set_gravitypdf_errors()
        {
        }
        public function test_empty_set_gravitypdf_notices()
        {
        }
        /* Test if reset_gravityforms_messages always return empty. */
        public function test_reset_gravityforms_messages()
        {
        }
        /* Non Filter tests, make sure that errors and messages were properly merged and return. */
        public function test_set_gravitypdf_notices()
        {
        }
        public function test_set_gravitypdf_error()
        {
        }
    }
}
namespace {
    /**
     * Gravity PDF Unit Tests Bootstrap
     *
     * @since 4.0
     */
    class GravityPDF_Unit_Tests_Bootstrap
    {
        /** @var string directory where wordpress-tests-lib is installed */
        public $wp_tests_dir;
        /** @var string testing directory */
        public $tests_dir;
        /** @var string plugin directory */
        public $plugin_dir;
        /**
         * @var array GF Form array
         */
        public $form = [];
        /**
         * @var array GF Entry array
         */
        public $entry = [];
        /**
         * @var  array $form_data
         */
        public $form_data = [];
        /**
         * Setup the unit testing environment
         *
         * @since 4.0
         */
        public function __construct()
        {
        }
        /**
         * Load Addon Mocks
         *
         * @since 6.3
         */
        public function mocks()
        {
        }
        /**
         * Load Gravity Forms and Gravity PDF
         *
         * @since 4.0
         */
        public function load()
        {
        }
        /**
         * Create our Gravity Form stubs for use in our tests
         *
         * @since 4.0
         */
        public function create_stubs()
        {
        }
    }
    /**
     *
     * Our initialisation class
     * Check all the dependancy requirements are met, otherwise fallback and show appropriate user error
     *
     * @since 4.0
     */
    class GFPDF_Major_Compatibility_Checks
    {
        /**
         * The plugin's required Gravity Forms version
         *
         * @var string
         *
         * @since 4.0
         */
        public $required_gf_version = '2.5';
        /**
         * The plugin's required WordPress version
         *
         * @var string
         *
         * @since 4.0
         */
        public $required_wp_version = '5.3';
        /**
         * The plugin's required PHP version
         *
         * @var string
         *
         * @since 4.0
         */
        public $required_php_version = '7.3';
        /**
         * Whether to offer a downgrade notice or not
         *
         * @var bool
         *
         * @since 6.0
         */
        protected $offer_downgrade = \false;
        /**
         * Set our required variables for a fallback and attempt to initialise
         *
         * @param string $basename Plugin basename
         * @param string $path     The plugin path
         *
         * @since    4.0
         */
        public function __construct($basename = '', $path = '')
        {
        }
        /**
         * Load the plugin
         *
         * @since 4.0
         */
        public function init()
        {
        }
        /**
         * Check if dependencies are met and load plugin, otherwise display errors
         *
         * @since 4.0
         */
        public function plugins_loaded()
        {
        }
        /**
         * Check if WordPress version is compatible
         *
         * @return boolean Whether compatible or not
         *
         * @since 4.0
         */
        public function is_compatible_wordpress_version()
        {
        }
        /**
         * Check if Gravity Forms version is compatible
         *
         * @return boolean Whether compatible or not
         *
         * @since 4.0
         */
        public function check_gravity_forms()
        {
        }
        /**
         * Check if PHP version is compatible
         *
         * @return boolean Whether compatible or not
         *
         * @since 4.0
         */
        public function check_php()
        {
        }
        /**
         * Check if PHP MB String enabled
         *
         * @return boolean Whether compatible or not
         *
         * @since 4.0
         */
        public function check_mb_string()
        {
        }
        /**
         * Check if MB String Regex enabled
         *
         * @return boolean Whether compatible or not
         *
         * @since 4.0
         */
        public function check_mb_string_regex()
        {
        }
        /**
         * Check if PHP GD Library installed
         *
         * @return boolean Whether compatible or not
         *
         * @since 4.0
         */
        public function check_gd()
        {
        }
        /**
         * Check if PHP DOM / libxml installed
         *
         * @return boolean Whether compatible or not
         *
         * @since 4.0
         */
        public function check_dom()
        {
        }
        /**
         * Check if minimum RAM requirements met
         *
         * @param string $ram The PHP RAM setting
         *
         * @return boolean Whether compatible or not
         *
         * @since 4.0
         */
        public function check_ram($ram)
        {
        }
        /**
         * Get the available system memory
         *
         * @param string $ram The PHP RAM setting
         *
         * @return integer The calculated RAM
         *
         * @since 4.0
         */
        public function get_ram($ram)
        {
        }
        /**
         * Convert .ini file memory to bytes
         *
         * @param string $memory The .ini memory limit
         *
         * @return integer The calculated memory limit in bytes
         */
        public function convert_ini_memory($memory)
        {
        }
        /**
         * Helper function to easily display error messages
         *
         * @since 4.0
         */
        public function display_notices()
        {
        }
        /**
         * @since 6.0
         */
        public function notice_body_content()
        {
        }
        /**
         * Adds a 'hidden' menu item that is activated when the user elects to rollback
         *
         * @since 6.0
         */
        public function admin_rollback_menu()
        {
        }
        /**
         * Roll Gravity PDF back to the latest v5 release
         *
         * @since 6.0
         */
        public function rollback()
        {
        }
    }
    /**
     * An easy-to-use API developers can use to work with Gravity PDF
     *
     * See https://docs.gravitypdf.com/v6/developers/api/whats-it-for/ for more information about this API
     *
     * @since 4.0
     */
    final class GPDFAPI
    {
        /**
         * Returns our public logger class which uses Monolog (a PSR-3 compatible logging interface - https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
         *
         * Log messages can be added with any of the following:
         *
         * $gfpdf->log->debug( $message, [$parameters = array()] )
         * $gfpdf->log->info( $message, [$parameters = array()] )
         * $gfpdf->log->notice( $message, [$parameters = array()] )
         * $gfpdf->log->warning( $message, [$parameters = array()] )
         * $gfpdf->log->error( $message, [$parameters = array()] )
         * $gfpdf->log->critical( $message, [$parameters = array()] )
         * $gfpdf->log->alert( $message, [$parameters = array()] )
         * $gfpdf->log->emergency( $message, [$parameters = array()] )
         *
         * When in production Gravity PDF will only log to a file when the Gravity Forms Logging plugin is enabled and Gravity PDF is set to "Log errors only" ($log->addError() or higher) or "Log all messages" ($log->addNotice() or higher)
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_log_class/ for more information about this method
         *
         * @return \Psr\Log\LoggerInterface
         *
         * @since 4.0
         */
        public static function get_log_class()
        {
        }
        /**
         * Returns our public notice queue system to make it easy to display errors and messages to the user.
         *
         * Usage:
         * $notices->add_notice( String $message );
         * $notices->add_error( String $error );
         *
         * This taps into the 'admin_notices' or 'network_admin_notices' WordPress hooks so you need to add your notices before then.
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_notice_class/ for more information about this method
         *
         * @return \GFPDF\Helper\Helper_Notices
         *
         * @since 4.0
         */
        public static function get_notice_class()
        {
        }
        /**
         * Returns our public data class which we use to store important global information related to Gravity PDF
         *
         * This uses PHP magic methods __set() and __get() to access and store information.
         *
         * Usage:
         *
         * $data->title; //returns "Gravity PDF"
         * $data->title = 'Gravity PDF 4.0'; //sets $data->title to "Gravity PDF 4.0"
         *
         * Note: Our __get() magic method returns variables by reference
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_data_class for more information about this method
         *
         * @return \GFPDF\Helper\Helper_Data
         *
         * @since 4.0
         */
        public static function get_data_class()
        {
        }
        /**
         * Returns our access layer class for all Gravity PDF Settings (both global and form specific)
         *
         * Note: Most relevant methods have been broken our and are avaiable through the GPDFAPI directly (GPDFAPI::get_pdf, GPDFAPI::get_plugin_settings ect)
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_options_class/ for more information about this method
         *
         * @return \GFPDF\Helper\Helper_Options_Fields
         *
         * @since 4.0
         */
        public static function get_options_class()
        {
        }
        /**
         * Returns our miscellaneous methods (or common methods) used throughout the plugin.
         *
         * Usage:
         *
         * $misc->is_gfpdf_page();
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_misc_class/ for more information about this method
         *
         * @return \GFPDF\Helper\Helper_Misc
         *
         * @since 4.0
         */
        public static function get_misc_class()
        {
        }
        /**
         * Returns our templates methods used throughout the plugin.
         *
         * Usage:
         *
         * $templates->get_all_templates();
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_templates_class/ for more information about this method
         *
         * @return \GFPDF\Helper\Helper_Templates
         *
         * @since 4.1
         */
        public static function get_templates_class()
        {
        }
        /**
         * Returns our abstracted Gravity Forms API class we use throughout the plugin
         *
         * While you could just use the GFAPI directly, some methods in this class have been cache-optimised and are specifically tuned for Gravity PDF.
         * Note: not all the methods in the GFAPI are implimented.
         *
         * Usage:
         *
         * $gform->get_form( $form_id );
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_form_class/ for more information about this method
         *
         * @return \GFPDF\Helper\Helper_Form
         *
         * @since 4.0
         */
        public static function get_form_class()
        {
        }
        /**
         * Returns the original Model/View/Controller class we initialised in our /src/bootstrap.php file
         *
         * This method acts like a faux singleton provider (but none of our classes are static or singletons themselves - hence the 'faux') as you get the originally initialised class back
         *
         * This is very useful when you want to remove any filters / actions we set in a controller's add_filters() or add_actions() methods
         * You can also use to to easily access any public methods in our classes
         *
         * Note: This method only returns Controller_ / Model_ / View_  classes. Use the other methods above to access our Helper_ classes
         *
         * Usage:
         *
         * $class = GPDFAPI::get_mcv_class( 'Controller_PDF' );
         *
         * //if we have a class returned
         * if( $class !== false ) {
         *     //remove a middleware filter
         *     remove_filter( 'gfpdf_pdf_middleware', array( $class, 'middle_active' ), 10 );
         * }
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_mvc_class/ for more information about this method
         *
         * @param string $class_name The name of one of our MVC classes (no namespace)
         *
         * @return object|bool Will return your object if found, otherwise false
         *
         * @since 4.0
         */
        public static function get_mvc_class($class_name)
        {
        }
        /**
         * Returns a new instance of one of our PDF generating code (model or view)
         *
         * @param  string $type Type of class to return. Valid options include 'view' or 'model'
         *
         * @return object|WP_Error
         *
         * @since  4.0
         */
        public static function get_pdf_class($type = 'view')
        {
        }
        /**
         * Gets a list of current PDFs setup for a particular Gravity Form
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_form_pdfs/ for more information about this method
         *
         * @param  int $form_id The Gravity Form ID
         *
         * @return array|WP_Error Array of PDF settings or WP_Error
         *
         * @since 4.0
         */
        public static function get_form_pdfs($form_id)
        {
        }
        /**
         * Gets a list of current PDFs setup for a particular Entry
         * This differs from \GPDFAPI::get_form_pdfs() as it'll filter out any PDFs that don't pass the conditional logic
         * for the current entry.
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_entry_pdfs/ for more information about this method
         *
         * @param int $entry_id The Gravity Forms Entry ID
         *
         * @return array|WP_Error Array of PDFs available to the entry or WP_Error
         *
         * @since 6.0
         */
        public static function get_entry_pdfs($entry_id)
        {
        }
        /**
         * Gets a specific Gravity Form PDF configuration
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_pdf/ for more information about this method
         *
         * @param  integer $form_id The Gravity Form ID
         * @param  string  $pdf_id  The PDF ID
         *
         * @return array|WP_Error Array of PDF settings or WP_Error
         * @since 4.0
         */
        public static function get_pdf($form_id, $pdf_id)
        {
        }
        /**
         * Add a new PDF to a Gravity Form
         *
         * See https://docs.gravitypdf.com/v6/developers/api/add_pdf/ for more information about this method
         *
         * @param integer $form_id  The Gravity Form ID
         * @param array   $settings The settings for the PDF
         *
         * @return boolean / String The PDF ID on success, false on failure
         *
         * @since 4.0
         */
        public static function add_pdf($form_id, $settings = [])
        {
        }
        /**
         * Updates an existing Gravity Form PDF. Passing an empty $settings array will delete the PDF
         *
         * See https://docs.gravitypdf.com/v6/developers/api/update_pdf/ for more information about this method
         *
         * @param  integer $form_id  The Gravity Form ID
         * @param  string  $pdf_id   The PDF ID
         * @param  array   $settings The settings for the PDF
         *
         * @return boolean           True on success, false on failure
         *
         * @since  4.0
         */
        public static function update_pdf($form_id, $pdf_id, $settings = [])
        {
        }
        /**
         * Deletes a specific Gravity Form PDF configuration
         *
         * See https://docs.gravitypdf.com/v6/developers/api/delete_pdf/ for more information about this method
         *
         * @param  integer $form_id The Gravity Form ID
         * @param  string  $pdf_id  The PDF ID
         *
         * @return boolean          True on success, false on failure
         *
         * @since  4.0
         */
        public static function delete_pdf($form_id, $pdf_id)
        {
        }
        /**
         * Retrieve an array of the global Gravity PDF settings (this doesn't include individual form configuration details - see GPDFAPI::get_form_pdfs)
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_plugin_settings/ for more information about this method
         *
         * @return array
         *
         * @since 4.0
         */
        public static function get_plugin_settings()
        {
        }
        /**
         * Get an option from the global Gravity PDF settings. If it doesn't exist the $default value will be returned
         *
         * See https://docs.gravitypdf.com/v6/developers/api/get_plugin_option/ for more information about this method
         *
         * @param string $key     The Gravity PDF option key
         * @param mixed  $default What's returned if the option doesn't exist
         *
         * @return mixed
         *
         * @since 4.0
         */
        public static function get_plugin_option($key, $default = '')
        {
        }
        /**
         * Add a new Global option to Gravity PDF
         *
         * If option already exists a WP_Error is returned
         * In most cases you'll want to use GPDFAPI::update_plugin_option() instead
         *
         * See https://docs.gravitypdf.com/v6/developers/api/add_plugin_option/ for more information about this method
         *
         * @param string $key The option key to add
         * @param mixed  $value
         *
         * @return boolean|WP_Error
         *
         * @since 4.0
         */
        public static function add_plugin_option($key, $value)
        {
        }
        /**
         * Updates a Gravity PDF global option. Will create option if it doesn't exist.
         *
         * If $value is falsy (determined by empty() ) the option is deleted.
         *
         * See https://docs.gravitypdf.com/v6/developers/api/update_plugin_option/ for more information about this method
         *
         * @param string $key The option key to update
         * @param mixed  $value
         *
         * @return boolean|WP_Error
         *
         * @since 4.0
         */
        public static function update_plugin_option($key, $value)
        {
        }
        /**
         * Delete's a Gravity PDF global option.
         *
         * See https://docs.gravitypdf.com/v6/developers/api/delete_plugin_option/ for more information about this method
         *
         * @param string $key The option key to delete
         *
         * @return boolean
         *
         * @since 4.0
         */
        public static function delete_plugin_option($key)
        {
        }
        /**
         * When provided the Gravity Form entry ID and PDF ID, this method will correctly generate the PDF, save it to disk,
         * trigger appropriate actions and return the absolute path to the PDF.
         *
         * See https://docs.gravitypdf.com/v6/developers/api/create_pdf/ for more information about this method
         *
         * @param  integer $entry_id The Gravity Form entry ID
         * @param  string  $pdf_id   The Gravity PDF ID number (the pid number in the URL when viewing a setting in the admin area)
         *
         * @return mixed            Return the full path to the PDF, or a WP_Error on failure
         *
         * @since 4.0
         */
        public static function create_pdf($entry_id, $pdf_id)
        {
        }
        /**
         * Generates the current entry's HTML product table
         *
         * See https://docs.gravitypdf.com/v6/developers/api/product_table/ for more information about this method
         *
         * @param  array   $entry  The Gravity Form entry
         * @param  boolean $return Whether to output or return the HTML
         *
         * @return string|void     The product table or null
         *
         * @since  4.0
         */
        public static function product_table($entry, $return = \false)
        {
        }
        /**
         * Generates a likert table
         *
         * See https://docs.gravitypdf.com/v6/developers/api/likert_table for more information about this method
         *
         * @param  array   $entry    The Gravity Form entry
         * @param  integer $field_id The likert field ID
         * @param  boolean $return   Whether to output or return the HTML
         *
         * @return Mixed    The likert table or null
         *
         * @since  4.0
         */
        public static function likert_table($entry, $field_id, $return = \false)
        {
        }
        /**
         * Returns an array of all installed fonts
         *
         * @return array
         *
         * @since 4.3
         */
        public static function get_pdf_fonts()
        {
        }
        /**
         * Installs a PDF font on the file system
         *
         * See https://docs.gravitypdf.com/v6/developers/api/add_pdf_font/ for more information about this method
         *
         * @param array $font The font information to add.
         *
         * This array needs to be in the following format:
         *
         * Array (
         *   'font_name'   => 'Lato',
         *   'regular'     => '/full/path/to/font/Lato-Regular.ttf',
         *   'italics'     => '/full/path/to/font/Lato-Italic.ttf',
         *   'bold'        => '/full/path/to/font/Lato-Bold.ttf',
         *   'bolditalics' => '/full/path/to/font/Lato-BoldItalic.ttf',
         * )
         *
         * Only the 'font_name' and 'regular' keys are required.
         * All fonts should be referenced with the full server path.
         * Currently, only .ttf fonts are supported.
         * The font name can only contain alphanumeric characters, or a space
         *
         * @return bool|WP_Error
         *
         * @since 4.1
         */
        public static function add_pdf_font($font)
        {
        }
        /**
         * Deletes one of the v4 fonts that is installed
         *
         * See https://docs.gravitypdf.com/v6/developers/api/delete_pdf_font for more information about this method
         *
         * @param string $font_id The font that should be deleted
         *
         * @return bool|WP_Error
         *
         * @Internal In 6.0 the method signature was changed from $font_name to $font_id. This ensures accuracy, as multiple
         * fonts can now contain the same name in the 6.0 release.
         *
         * @since    4.1
         */
        public static function delete_pdf_font($font_id)
        {
        }
        /**
         * Return the $form_data array used in custom PDF templates
         *
         * @param int $entry_id
         *
         * @return array|WP_Error
         *
         * @since 4.4
         */
        public static function get_form_data($entry_id)
        {
        }
    }
}
namespace GFPDF\Statics {
    /**
     * @since 6.4.0
     */
    class Kses
    {
        /**
         * Echo the HTML after escaping using wp_kses()
         *
         * @param string $html
         *
         * @return void
         *
         * @since 6.4.0
         */
        public static function output($html) : void
        {
        }
        /**
         * Returns the HTML after escaping using wp_kses()
         *
         * @param string $html
         *
         * @return string
         *
         * @since 6.4.0
         */
        public static function parse($html)
        {
        }
        /**
         * Get all allowed HTML tags that will be passed to wp_kses() when building HTML for the PDFs
         *
         * @param array|null $tags An array of existing tags to pass to wp_kses(), or null to use the allowed "post" context tags
         *
         * @return array
         *
         * @since 6.4.0
         */
        public static function get_allowed_pdf_tags($tags = null)
        {
        }
        /**
         * Add additional inline style properties that are valid in PDFs
         *
         * @param array $styles
         *
         * @return array
         *
         * @since 6.4.0
         */
        public static function get_allowed_pdf_styles($styles)
        {
        }
        /**
         * A custom list of allowed protocols in the PDF
         *
         * @param array|null $protocols
         *
         * @return array
         *
         * @since 6.4.2
         */
        public static function get_allowed_pdf_protocols($protocols = null)
        {
        }
    }
    /**
     * Class _Queue_Callbacks
     *
     * @package GFPDF\Helper
     *
     * @since   5.0
     */
    class Queue_Callbacks
    {
        /**
         * Generate and save a PDF to disk
         *
         * @param $entry_id
         * @param $pdf_id
         *
         * @throws Exception
         *
         * @since 5.0
         */
        public static function create_pdf($entry_id, $pdf_id)
        {
        }
        /**
         * Send a Gravity Forms notification
         *
         * @param int   $form_id
         * @param int   $entry_id
         * @param array $notification
         *
         * @throws Exception
         * @since 5.0
         */
        public static function send_notification($form_id, $entry_id, $notification)
        {
        }
        /**
         * Cleanup PDFs saved to disk
         *
         * @param $form_id
         * @param $entry_id
         *
         * @throws Exception
         *
         * @since 5.0
         */
        public static function cleanup_pdfs($form_id, $entry_id)
        {
        }
    }
}
namespace GFPDF\Helper {
    /**
     * A simple interface to standardise how actions and filters should be applied in classes
     *
     * @since 4.0
     */
    interface Helper_Interface_Actions
    {
        /**
         * Apply any actions needed for the settings page
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_actions();
    }
    /**
     * A simple interface to standardise how actions and filters should be applied in classes
     *
     * @since 4.0
     */
    interface Helper_Interface_Filters
    {
        /**
         * Apply any actions needed for the settings page
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_filters();
    }
}
namespace GFPDF {
    /**
     * @since 4.0
     */
    class Router implements \GFPDF\Helper\Helper_Interface_Actions, \GFPDF\Helper\Helper_Interface_Filters
    {
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        public $log;
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        public $gform;
        /**
         * Holds our Helper_Notices object
         * which we can use to queue up admin messages for the user
         *
         * @var Helper_Notices
         *
         * @since 4.0
         */
        public $notices;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        public $data;
        /**
         * Holds our Helper_Abstract_Options / Helper_Options_Fields object
         * Makes it easy to access global PDF settings and individual form PDF settings
         *
         * @var Helper_Options_Fields
         *
         * @since 4.0
         */
        public $options;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        public $misc;
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 4.0
         */
        public $templates;
        /**
         * Makes our MVC classes sudo-singletons by allowing easy access to the original objects
         * through `$singleton->get_class();`
         *
         * @var Helper_Singleton
         *
         * @since 4.0
         */
        public $singleton;
        /**
         * Add user depreciation notice for any methods not included in current object
         *
         * @param string $name      The function name to be called
         * @param array  $arguments An enumerated array containing the parameters passed to the $name'ed method
         *
         * @since 4.0
         */
        public function __call($name, $arguments)
        {
        }
        /**
         * Add user depreciation notice for any methods not included in current object
         *
         * @param string $name      The function name to be called
         * @param array  $arguments An enumerated array containing the parameters passed to the $name'ed method
         *
         * @since  4.0
         */
        public static function __callStatic($name, $arguments)
        {
        }
        /**
         * Fired on the `after_setup_theme` action to initialise our plugin
         *
         * We do this on this hook instead of plugins_loaded so that users can tap into all our actions and filters
         * directly from their theme (usually the functions.php file).
         *
         * @since 4.0
         */
        public static function initialise_plugin()
        {
        }
        /**
         * Setup our plugin functionality
         * Note: This method runs during the `after_setup_theme` action
         *
         * @since 4.0
         */
        public function init()
        {
        }
        /**
         * Add required plugin actions
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_actions()
        {
        }
        /**
         * Add required plugin filters
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_filters()
        {
        }
        /**
         * Show action links on the plugin screen.
         *
         * @param mixed $links Plugin Action links
         *
         * @return    array
         *
         * @since 4.0
         */
        public function plugin_action_links($links)
        {
        }
        /**
         * Show row meta on the plugin screen.
         *
         * @param mixed $links Plugin Row Meta
         * @param mixed $file  Plugin Base file
         *
         * @return    array
         *
         * @since  4.0
         */
        public function plugin_row_meta($links, $file)
        {
        }
        /**
         * If on a Gravity Form page add a new class
         *
         * @param array $classes
         *
         * @return string
         * @since 4.0
         *
         */
        public function add_body_class($classes)
        {
        }
        /**
         * Register all css and js which can be enqueued when needed
         *
         * @return void
         * @since 4.0
         *
         */
        public function register_assets()
        {
        }
        /**
         * Load any assets that are needed
         *
         * @return void
         * @since 4.0.4
         *
         */
        public function load_admin_assets()
        {
        }
        /**
         * Insert our own styles into the TinyMCE editor
         *
         * @param array $mce_init
         *
         * @return array
         *
         * @since 4.4
         */
        public function tinymce_styles($mce_init)
        {
        }
        /**
         * Auto no-conflict any preloaded scripts that begin with 'gfpdf_'
         *
         * @param array $items The current list of no-conflict scripts
         *
         * @return array
         * @since 4.0
         *
         */
        public function auto_noconflict_scripts($items)
        {
        }
        /**
         * Auto no-conflict any preloaded styles that begin with 'gfpdf_'
         *
         * @param array $items The current list of no-conflict styles
         *
         * @return array
         * @since 4.0
         *
         */
        public function auto_noconflict_styles($items)
        {
        }
        /**
         * Bootstrap our settings API for use
         *
         * @return void
         *
         * @return 4.0
         */
        public function init_settings_api()
        {
        }
        /**
         * Register our admin settings
         *
         * @return void
         *
         * @return 4.0
         */
        public function setup_settings_fields()
        {
        }
        /**
         * Loads our Gravity PDF installer classes
         *
         * @return void
         * @since 4.0
         *
         */
        public function installer()
        {
        }
        /**
         * @since 6.0
         */
        public function upgrade_routine() : void
        {
        }
        /**
         * Include Settings Page functionality
         *
         * @return void
         * @since 4.0
         *
         */
        public function gf_settings()
        {
        }
        /**
         * Include Form Settings (PDF) functionality
         *
         * @return void
         * @since 4.0
         *
         */
        public function gf_form_settings()
        {
        }
        /**
         * Include PDF Display functionality
         *
         * @return void
         * @since 4.0
         *
         */
        public function pdf()
        {
        }
        /**
         * Include PDF Shortcodes functionality
         *
         * @return void
         * @since 4.0
         *
         */
        public function shortcodes()
        {
        }
        /**
         * Include PDF Mergetag functionality
         *
         * @return void
         * @since 4.1
         *
         */
        public function mergetags()
        {
        }
        /**
         * Include one-time actions functionality
         *
         * @return void
         * @since 4.0
         *
         */
        public function actions()
        {
        }
        /**
         * Include template manager functionality
         *
         * @return void
         * @since 4.0
         *
         */
        public function template_manager()
        {
        }
        /**
         * Initialise our core font AJAX handler
         *
         * @return void
         * @since 5.0
         *
         */
        public function load_core_font_handler()
        {
        }
        /**
         * Initialise our custom font handler
         * @since 5.0
         *
         */
        public function load_custom_font_handler() : void
        {
        }
        /**
         * Initialise our debug code
         *
         * @return void
         * @since 5.1
         *
         */
        public function load_debug()
        {
        }
        /**
         * Initialise our system status code
         *
         * @return void
         * @since 5.3
         *
         */
        public function check_system_status()
        {
        }
        /**
         * @since 6.0
         */
        public function export() : void
        {
        }
        /**
         * @since 6.0
         */
        public function webhooks() : void
        {
        }
        /**
         * @since 6.3
         */
        public function zapier() : void
        {
        }
        /**
         * Detect any Gravity PDF messages and add to our notice system
         *
         * @since 6.0
         */
        public function add_admin_messages()
        {
        }
        /**
         * Initialise our background PDF processing handler
         *
         * @return void
         * @since 5.0
         *
         */
        public function async_pdfs()
        {
        }
        /**
         * Backwards compatibility with our early v3 templates
         *
         * @param $form_id
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_config_data($form_id)
        {
        }
        /**
         * Add backwards compatibility with v3.x.x default PDF template files
         * This function will now pull the PDF configuration details from our query variables / or our backwards compatible URL params method
         *
         * @param integer $form_id The Gravity Form ID
         *
         * @return array The matched configuration being requested
         *
         * @since 4.0
         */
        public function get_default_config_data($form_id)
        {
        }
    }
}
namespace GFPDF\Exceptions {
    /**
     * Class GravityPdfException
     *
     * @package GFPDF\Exceptions
     *
     * @since   6.0
     */
    class GravityPdfException extends \Exception
    {
    }
    /**
     * Class GravityPdfIdException
     *
     * @package GFPDF\Exceptions
     *
     * @since   6.0
     */
    class GravityPdfIdException extends \GFPDF\Exceptions\GravityPdfException
    {
    }
    /**
     * Class GravityPdfDomainException
     *
     * @package GFPDF\Exceptions
     *
     * @since 6.0
     */
    class GravityPdfDomainException extends \DomainException
    {
    }
    /**
     * Class GravityPdfFontNotFoundException
     *
     * @package GFPDF\Exceptions
     *
     * @since 6.0
     */
    class GravityPdfFontNotFoundException extends \GFPDF\Exceptions\GravityPdfDomainException
    {
    }
    /**
     * Class GravityPdfShortcodeEntryIdException
     *
     * @package GFPDF\Exceptions
     *
     * @since   5.2
     */
    class GravityPdfShortcodeEntryIdException extends \GFPDF\Exceptions\GravityPdfException
    {
    }
    /**
     * Class GravityPdfShortcodePdfConditionalLogicFailedException
     *
     * @package GFPDF\Exceptions
     *
     * @since   5.2
     */
    class GravityPdfShortcodePdfConditionalLogicFailedException extends \GFPDF\Exceptions\GravityPdfException
    {
    }
    /**
     * Class GravityPdfRuntimeException
     *
     * @package GFPDF\Exceptions
     *
     * @since   6.0
     */
    class GravityPdfRuntimeException extends \RuntimeException
    {
    }
    /**
     * Class GravityPdfShortcodePdfInactiveException
     *
     * @package GFPDF\Exceptions
     *
     * @since   5.2
     */
    class GravityPdfShortcodePdfInactiveException extends \GFPDF\Exceptions\GravityPdfException
    {
    }
    /**
     * Class GravityPdfShortcodePdfConfigNotFoundException
     *
     * @package GFPDF\Exceptions
     *
     * @since   5.2
     */
    class GravityPdfShortcodePdfConfigNotFoundException extends \GFPDF\Exceptions\GravityPdfException
    {
    }
    /**
     * Class GravityPdfDatabaseUpdateException
     *
     * @package GFPDF\Exceptions
     *
     * @since 6.0
     */
    class GravityPdfDatabaseUpdateException extends \GFPDF\Exceptions\GravityPdfRuntimeException
    {
    }
    /**
     * Class GravityPdfModelNotUpdatedException
     *
     * @package GFPDF\Exceptions
     *
     * @since 6.0
     */
    class GravityPdfModelNotUpdatedException extends \GFPDF\Exceptions\GravityPdfException
    {
    }
}
namespace GFPDF\Helper {
    /**
     * A simple abstract class controllers can extent to share similar variables
     *
     * @since 4.0
     */
    abstract class Helper_Abstract_Controller
    {
        /**
         * Classes will store a model object
         *
         * @var object
         *
         * @since 4.0
         */
        public $model = null;
        /**
         * Classes will store a view object
         *
         * @var object
         *
         * @since 4.0
         */
        public $view = null;
        /**
         * Each controller should have an initialisation function
         *
         * @since 4.0
         */
        public abstract function init();
    }
}
namespace GFPDF\Controller {
    /**
     * Class Controller_Debug
     *
     * @package GFPDF\Controller
     *
     * @since   5.1
     */
    class Controller_Debug extends \GFPDF\Helper\Helper_Abstract_Controller implements \GFPDF\Helper\Helper_Interface_Actions, \GFPDF\Helper\Helper_Interface_Filters
    {
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 5.1
         */
        protected $data;
        /**
         * Holds our Helper_Abstract_Options / Helper_Options_Fields object
         * Makes it easy to access global PDF settings and individual form PDF settings
         *
         * @var Helper_Abstract_Options
         *
         * @since 5.1
         */
        protected $options;
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 5.1
         */
        protected $templates;
        /**
         * Controller_Debug constructor.
         *
         * @param Helper_Data             $data
         * @param Helper_Abstract_Options $options
         * @param Helper_Templates        $templates
         */
        public function __construct(\GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Templates $templates)
        {
        }
        /**
         * Initialise our class defaults
         *
         * @since 5.1
         */
        public function init()
        {
        }
        /**
         * @since 5.1
         */
        public function add_actions()
        {
        }
        /**
         * @since 5.1
         */
        public function add_filters()
        {
        }
        /**
         * If Debug Mode is toggled on, flush the transient cache
         *
         * @param array $oldvalue
         * @param array $value
         *
         * @since 5.1
         */
        public function maybe_flush_transient_cache($oldvalue, $value)
        {
        }
        /**
         * If debug mode enabled, enable PDF stats.
         *
         * @param Mpdf $mpdf
         *
         * @return Mpdf
         *
         * @throws MpdfException
         * @since 5.1
         */
        public function maybe_add_pdf_stats($mpdf)
        {
        }
    }
    /**
     * Controller_Settings
     * A general class for the global PDF settings
     *
     * @since 4.0
     */
    class Controller_Settings extends \GFPDF\Helper\Helper_Abstract_Controller implements \GFPDF\Helper\Helper_Interface_Actions, \GFPDF\Helper\Helper_Interface_Filters
    {
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Notices object
         * which we can use to queue up admin messages for the user
         *
         * @var Helper_Notices
         *
         * @since 4.0
         */
        protected $notices;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param Helper_Abstract_Model|Model_Settings $model   Our Settings Model the controller will manage
         * @param Helper_Abstract_View|View_Settings   $view    Our Settings View the controller will manage
         * @param Helper_Abstract_Form                 $gform   Our abstracted Gravity Forms helper functions
         * @param LoggerInterface                      $log     Our logger class
         * @param Helper_Notices                       $notices Our notice class used to queue admin messages and errors
         * @param Helper_Data                          $data    Our plugin data store
         * @param Helper_Misc                          $misc    Our miscellaneous class
         *
         * @since 4.0
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Model $model, \GFPDF\Helper\Helper_Abstract_View $view, \GFPDF\Helper\Helper_Abstract_Form $gform, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Notices $notices, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Initialise our class defaults
         *
         * @return void
         * @since 4.0
         *
         */
        public function init()
        {
        }
        /**
         * Apply any actions needed for the settings page
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_actions()
        {
        }
        /**
         * Apply any filters needed for the settings page
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_filters()
        {
        }
        /**
         * Display the settings page for Gravity PDF
         *
         * @return void
         * @since 4.0
         *
         */
        public function display_page()
        {
        }
        /**
         * Check our current user has the correct capability
         *
         * @return string
         * @since 4.0
         *
         */
        public function edit_options_cap()
        {
        }
        /**
         * Return our custom capability
         *
         * @param array $nav The existing settings navigation
         *
         * @return array
         * @since 4.0
         *
         */
        public function disable_tools_on_view_cap($nav)
        {
        }
    }
    /**
     * Class Controller_Webhooks
     *
     * @package GFPDF\Controller
     */
    class Controller_Webhooks
    {
        /**
         * @since 6.0
         */
        public function init() : void
        {
        }
        /**
         * Include the Gravity PDF URLs in the "All Fields" Webhook request
         *
         * @since 6.0
         */
        public function webhook_request_data(array $request_data, array $feed, array $entry) : array
        {
        }
    }
    /**
     * Class Controller_Custom_Fonts
     *
     * @package GFPDF\Controller
     */
    class Controller_Custom_Fonts extends \GFPDF\Helper\Helper_Abstract_Controller
    {
        /**
         * @var LoggerInterface
         * @since 6.0
         */
        protected $log;
        /**
         * @var Helper_Abstract_Form
         * @since 6.0
         */
        protected $gform;
        /**
         * @var string The absolute path to the Custom Fonts directory on the server
         * @since 6.0
         */
        protected $font_dir_path;
        /**
         * @var string
         * @since 6.0
         */
        protected $filesystem;
        /**
         * @var string
         * @since 6.0
         */
        protected $file;
        /**
         * @var string[] List of the standard font keys used when saving settings
         * @since 6.0
         */
        protected $font_keys = ['regular', 'italics', 'bold', 'bolditalics'];
        public function __construct(\GFPDF\Model\Model_Custom_Fonts $model, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Abstract_Form $gform, string $font_dir_path, string $filesystem = 'GFPDF_Vendor\\GravityPdf\\Upload\\Storage\\FileSystem', string $file = 'GFPDF_Vendor\\GravityPdf\\Upload\\File')
        {
        }
        /**
         * @since 6.0
         */
        public function init() : void
        {
        }
        /**
         * Register the Font CRUD REST API endpoints
         *
         * @since 6.0
         */
        public function register_endpoints() : void
        {
        }
        /**
         * @return string[]
         *
         * @since 6.0
         */
        public function get_font_keys() : array
        {
        }
        /**
         * Get a numerical array of all custom installed fonts
         *
         * @since 6.0
         */
        public function get_all_items() : array
        {
        }
        /**
         * Our `Create` CRUD for custom fonts
         *
         * @return array|WP_Error
         *
         * @since 6.0
         */
        public function add_item(\WP_REST_Request $request)
        {
        }
        /**
         * Our `Update` CRUD for custom fonts
         *
         * This endpoint acts like a PATCH request, and data that isn't passed won't be updated
         *
         * @return array|WP_Error
         *
         * @since 6.0
         */
        public function update_item(\WP_REST_Request $request)
        {
        }
        /**
         * @param WP_REST_Request $request
         *
         * @return void|WP_Error
         *
         * @since 6.0
         */
        public function delete_item(\WP_REST_Request $request)
        {
        }
        /**
         * @since 6.0
         */
        public function get_absolute_font_path(string $name) : string
        {
        }
        /**
         * Return any uploaded file details with a key matching the `font_keys`
         *
         * @since 6.0
         */
        protected function get_uploaded_font_files(\WP_REST_Request $request) : array
        {
        }
        /**
         * Validate font files and move from tmp to custom font directory
         *
         * @param array $files Accepts array returned by self::get_uploaded_font_files()
         *
         * @return array New font file details (may include a renamed font file)
         *
         * @since 6.0
         */
        protected function move_fonts_to_font_dir(array $files) : array
        {
        }
        /**
         * @param string $file The filename of the font to be deleted
         *
         * @return bool
         * @since 6.0
         */
        protected function delete_font_file(string $file) : bool
        {
        }
        /**
         * A validation callback for the REST API
         *
         * @since 6.0
         */
        protected function check_empty_string(string $input) : bool
        {
        }
        /**
         * A permissions callback for the REST API endpoints
         *
         * @since 6.0
         */
        protected function check_permissions() : bool
        {
        }
        /**
         * Checks through all the font files for OTL support
         *
         * @param array $files Accepts array returned by self::get_uploaded_font_files()
         *
         * @return bool If supported for all fonts return true, false otherwise.
         */
        protected function does_fonts_support_otl(array $files) : bool
        {
        }
    }
    /**
     * Class Controller_System_Report
     *
     * @package GFPDF\Controller
     *
     * @since   5.3
     */
    class Controller_System_Report extends \GFPDF\Helper\Helper_Abstract_Controller
    {
        /**
         * @var Model_System_Report
         */
        public $model;
        /**
         * @var View_System_Report
         */
        public $view;
        public function __construct(\GFPDF\Helper\Helper_Abstract_Model $model, \GFPDF\Helper\Helper_Abstract_View $view)
        {
        }
        /**
         * Initialise our class defaults
         *
         * @since 5.3
         */
        public function init()
        {
        }
        /**
         * Apply filters needed for the system status page
         *
         * @since 5.3
         */
        public function add_filters()
        {
        }
        /**
         * Include the add-on table in the PHP Server Environment system status.
         *
         * @param array $system_report
         *
         * @return array
         * @since 5.3
         */
        public function system_report($system_report)
        {
        }
    }
    /**
     * Class Controller_Export_Entries
     *
     * @package GFPDF\Controller
     */
    class Controller_Export_Entries
    {
        /**
         * @since 6.0
         */
        public function init() : void
        {
        }
        /**
         * Include active PDFs for the form in the Entry Export list
         *
         * @since 6.0
         */
        public function add_pdfs_to_export_fields(array $form) : array
        {
        }
        /**
         * If exporting a PDF, get the URL for the entry (if valid)
         *
         * @param string           $value
         * @param int              $form_id
         * @param string|int|float $field_id
         *
         * @return string The URL, or an empty string
         *
         * @since 6.0
         */
        public function get_export_field_value($value, int $form_id, $field_id, array $entry)
        {
        }
    }
    /**
     * Controller_Templates
     * A general class for handling AJAX template actions
     *
     * @since 4.1
     */
    class Controller_Templates extends \GFPDF\Helper\Helper_Abstract_Controller implements \GFPDF\Helper\Helper_Interface_Actions
    {
        /**
         * Controller_Templates constructor.
         *
         * Setup our class by injecting all our dependencies
         *
         * @param Helper_Abstract_Model $model
         *
         * @since 4.1
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Model $model)
        {
        }
        /**
         * Setup our class
         *
         * @since 4.1
         */
        public function init()
        {
        }
        /**
         * Add AJAX hooks for templates
         *
         * @since 4.1
         */
        public function add_actions()
        {
        }
    }
    /**
     * Controller_Mergetags
     * Handles the PDF display and authentication
     *
     * @since 4.1
     */
    class Controller_Mergetags extends \GFPDF\Helper\Helper_Abstract_Controller implements \GFPDF\Helper\Helper_Interface_Filters
    {
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param Helper_Abstract_Model|Model_Shortcodes $model Our Shortcodes Model the controller will manage
         *
         * @since 4.0
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Model $model)
        {
        }
        /**
         * Initialise our class defaults
         *
         * @return void
         * @since 4.1
         *
         */
        public function init()
        {
        }
        /**
         * Apply any filters needed for the settings page
         *
         * @return void
         * @since 4.1
         *
         */
        public function add_filters()
        {
        }
    }
    /**
     * Class Controller_Zapier
     *
     * @package GFPDF\Controller
     */
    class Controller_Zapier
    {
        /**
         * @since 6.3
         */
        public function init() : void
        {
        }
        /**
         * Add PDF URLs to the Zapier body array
         *
         * @param array $body  An associative array containing the request body that will be sent to Zapier.
         * @param array $feed  The Feed Object currently being processed.
         * @param array $entry The Entry Object currently being processed.
         *
         * @return array
         *
         * @since 6.3
         */
        public function add_zapier_support($body, $feed, $entry)
        {
        }
    }
}
namespace {
    /**
     * Controller_Update
     * Basic class to set up activation and deactivation functionality
     *
     * @since 4.0
     */
    class Controller_Activation
    {
        /**
         * Run plugin deactivation functionality
         *
         * @return void
         * @since 4.0
         *
         */
        public static function deactivation()
        {
        }
    }
}
namespace GFPDF\Controller {
    /**
     * Class Helper_Uninstaller
     *
     * @package GFPDF\Helper
     */
    class Controller_Uninstaller extends \GFPDF\Helper\Helper_Abstract_Controller
    {
        /**
         * @var self
         */
        protected static $instance;
        /**
         * @var Helper_Form
         */
        protected $gform;
        /**
         * @var Model_Uninstall $model
         */
        public $model;
        public static function get_instance() : \GFPDF\Controller\Controller_Uninstaller
        {
        }
        public function __construct(\GFPDF\Helper\Helper_Abstract_Model $model, \GFPDF\Helper\Helper_Abstract_View $view, \GFPDF\Helper\Helper_Form $gform)
        {
        }
        /**
         * Only register our uninstaller with Gravity Forms when on the uninstall admin page
         *
         * @since 6.0
         */
        public function init()
        {
        }
        /**
         * Display in the uninstall UI
         *
         * @since 6.0
         */
        public function get_short_title() : string
        {
        }
        /**
         * Display in the uninstall UI
         *
         * @since 6.0
         */
        public function get_menu_icon() : string
        {
        }
        /**
         * Verify the current user can uninstall capabilities for Gravity PDF
         *
         * @since 6.0
         */
        public function current_user_can_uninstall() : bool
        {
        }
        /**
         * Output the uninstall UI
         *
         * @since 6.0
         */
        public function render_uninstall()
        {
        }
        /**
         * Run the uninstaller after verifying capabilities
         *
         * @since 6.0
         */
        public function uninstall_addon()
        {
        }
        /**
         * Polyfill method so GF doesn't complain when handling the uninstall UI
         *
         * @since 6.0
         */
        public function method_is_overridden($name) : bool
        {
        }
    }
    /**
     * Controller_PDF
     * Handles the PDF display and authentication
     *
     * @since 4.0
     */
    class Controller_Shortcodes extends \GFPDF\Helper\Helper_Abstract_Controller implements \GFPDF\Helper\Helper_Interface_Filters
    {
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         * @since 4.0
         */
        protected $log;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param Helper_Abstract_Model|Model_Shortcodes $model Our Shortcodes Model the controller will manage
         * @param Helper_Abstract_View|View_Shortcodes   $view  Our Shortcodes View the controller will manage
         * @param LoggerInterface                        $log   Our logger class
         *
         * @since 4.0
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Model $model, \GFPDF\Helper\Helper_Abstract_View $view, \Psr\Log\LoggerInterface $log)
        {
        }
        /**
         * Initialise our class defaults
         *
         * @return void
         * @since 4.0
         *
         */
        public function init()
        {
        }
        /**
         * Apply any filters needed for the settings page
         *
         * @return void
         * @since 4.0
         */
        public function add_filters()
        {
        }
        /**
         * Register our shortcodes
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_shortcodes()
        {
        }
    }
    /**
     * Class Controller_Save_Core_Fonts
     *
     * @package GFPDF\Controller
     *
     * @since   5.0
     */
    class Controller_Pdf_Queue extends \GFPDF\Helper\Helper_Abstract_Controller implements \GFPDF\Helper\Helper_Interface_Actions, \GFPDF\Helper\Helper_Interface_Filters
    {
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 5.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 5.0
         */
        protected $log;
        /**
         * @var Model_PDF
         *
         * @since 5.0
         */
        protected $model_pdf;
        /**
         * @var Helper_Pdf_Queue
         *
         * @since 5.0
         */
        protected $queue;
        /**
         * Determines if our PDF queue should execute
         *
         * @var bool
         *
         * @since 5.0
         */
        protected $disable_queue = false;
        /**
         * Set up our dependencies
         *
         * @param Helper_Pdf_Queue $queue
         * @param Model_PDF        $model_pdf
         * @param LoggerInterface  $log Our logger class
         *
         * @since 5.0
         */
        public function __construct(\GFPDF\Helper\Helper_Pdf_Queue $queue, \GFPDF\Model\Model_PDF $model_pdf, \Psr\Log\LoggerInterface $log)
        {
        }
        /**
         * Initialise our class defaults
         *
         * @return void
         * @since 5.0
         *
         */
        public function init()
        {
        }
        /**
         * Apply any actions needed for the welcome page
         *
         * @return void
         * @since 5.0
         *
         */
        public function add_actions()
        {
        }
        /**
         * @return void
         * @since 5.0
         *
         */
        public function add_filters()
        {
        }
        /**
         * Only process notifications that occur on form submission
         *
         * @param bool  $is_disabled
         * @param array $notification
         * @param array $form
         * @param array $entry
         *
         * @return bool
         *
         * @since 5.0
         */
        public function maybe_disable_submission_notifications($is_disabled, $notification, $form, $entry)
        {
        }
        /**
         * Only process notifications that occur when resending notifications
         *
         * @param bool  $is_disabled
         * @param array $notification
         * @param array $form
         * @param array $entry
         *
         * @return bool
         *
         * @since 5.0
         */
        public function maybe_disable_resend_notifications($is_disabled, $notification, $form, $entry)
        {
        }
        /**
         * Check if there are any PDFs that need to be sent with the notifications and disable so we can process in the background
         *
         * @param bool  $default
         * @param array $notification
         * @param array $form
         * @param array $entry
         *
         * @return bool
         *
         * @since 5.0
         */
        public function do_we_disable_notification($default, $notification, $form, $entry)
        {
        }
        /**
         * Queue all PDFs/Notifications during form submission and dispatch
         *
         * @param $entry
         * @param $form
         *
         * @since 5.0
         */
        public function queue_async_form_submission_tasks($entry, $form)
        {
        }
        /**
         * Push jobs to our background process queue when resending notifications
         *
         * @param $notification
         * @param $form
         * @param $entry
         *
         * @since 5.0
         */
        public function queue_async_resend_notification_tasks($notification, $form, $entry)
        {
        }
        /**
         * If we have any jobs in our background process queue after resending the notifications, dispatch them
         *
         * @since 5.0
         */
        public function queue_dispatch_resend_notification_tasks()
        {
        }
        /**
         * Create and dispatch an async queue that will generate the PDFs and send the submission notification(s)
         * Filters are also available for devs to run processes before or after the tasks
         *
         * We use static callbacks to keep the queue database size small (queues are stored in the options table)
         *
         * @param $entry
         * @param $form
         * @param $notifications
         *
         * @return array
         * @since 5.0
         *
         */
        protected function get_queue_tasks($entry, $form, $notifications = [])
        {
        }
        /**
         * Get all active notifications who's conditional logic has been met
         *
         * @param $form
         * @param $entry
         *
         * @return array
         *
         * @since 5.0
         */
        protected function get_active_notifications($form, $entry)
        {
        }
        /**
         * Queue up the PDFs that should always be saved to disk, or should be attached to one of the notifications
         *
         * @param array $notifications
         * @param array $pdfs
         * @param array $form
         * @param array $entry
         *
         * @return array
         *
         * @since 5.0
         */
        protected function queue_pdfs($notifications, $pdfs, $form, $entry)
        {
        }
        /**
         * Queue up the notifications that we delayed because PDFs needed to be attached to them
         *
         * @param array $notifications
         * @param array $pdfs
         * @param array $form
         * @param array $entry
         *
         * @return array
         *
         * @since 5.0
         */
        protected function queue_notifications($notifications, $pdfs, $form, $entry)
        {
        }
        /**
         * Return the PDF queue ID used for logging
         *
         * @param $form
         * @param $entry
         * @param $pdf
         *
         * @return string
         *
         * @since 5.0
         */
        protected function get_queue_id($form, $entry, $pdf)
        {
        }
    }
    /**
     * Controller_Installer
     * Controls the installation and uninstallation of Gravity PDF
     *
     * @since 4.0
     */
    class Controller_Install extends \GFPDF\Helper\Helper_Abstract_Controller implements \GFPDF\Helper\Helper_Interface_Actions, \GFPDF\Helper\Helper_Interface_Filters
    {
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Notices object
         * which we can use to queue up admin messages for the user
         *
         * @var Helper_Notices
         *
         * @since 4.0
         */
        protected $notices;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param Helper_Abstract_Model|Model_Install $model   Our Install Model the controller will manage
         * @param Helper_Abstract_Form                $gform   Our Install View the controller will manage
         * @param LoggerInterface                     $log     Our logger class
         * @param Helper_Notices                      $notices Our notice class used to queue admin messages and errors
         * @param Helper_Data                         $data    Our plugin data store
         * @param Helper_Misc                         $misc    Our miscellaneous methods
         *
         * @since 4.0
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Model $model, \GFPDF\Helper\Helper_Abstract_Form $gform, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Notices $notices, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Initialise our class defaults
         *
         * @return void
         * @since 4.0
         *
         */
        public function init()
        {
        }
        /**
         * Apply any actions needed for the settings page
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_actions()
        {
        }
        /**
         * Apply any filters needed for the settings page
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_filters()
        {
        }
        /**
         * Set up data related to the plugin setup and installation
         *
         * @return void
         *
         * @since 4.0
         */
        public function setup_defaults()
        {
        }
        /**
         * Check the software has been installed on this website before and
         * the version numbers are in sync
         *
         * @return void
         *
         * @since 4.0
         */
        public function check_install_status()
        {
        }
        /**
         * Determine if we should be saving the PDF settings
         *
         * @since 4.0
         */
        public function maybe_uninstall()
        {
        }
    }
    /**
     * Controller_Actions
     * Controller to trigger anything that requires a one-time user interaction
     * Examples include a configuration importer, or a promo
     *
     * @since 4.0
     */
    class Controller_Actions extends \GFPDF\Helper\Helper_Abstract_Controller implements \GFPDF\Helper\Helper_Interface_Actions
    {
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Notices object
         * which we can use to queue up admin messages for the user
         *
         * @var Helper_Notices
         *
         * @since 4.0
         */
        protected $notices;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param Helper_Abstract_Model|Model_Actions $model   Our Actions Model the controller will manage
         * @param Helper_Abstract_View|View_Actions   $view    Our Actions View the controller will manage
         * @param Helper_Abstract_Form                $gform   Our abstracted Gravity Forms helper functions
         * @param LoggerInterface                     $log     Our logger class
         * @param Helper_Notices                      $notices Our notice class used to queue admin messages and errors
         *
         * @since 4.0
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Model $model, \GFPDF\Helper\Helper_Abstract_View $view, \GFPDF\Helper\Helper_Abstract_Form $gform, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Notices $notices)
        {
        }
        /**
         * Initialise our class defaults
         *
         * @return void
         * @since 4.0
         *
         */
        public function init()
        {
        }
        /**
         * Apply any actions
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_actions()
        {
        }
        /**
         * Holds our one-time action routes
         *
         * Routes should contain the following keys: action, action_text, condition, process, view, capability
         * action: The action ID to be processed
         * action_text: The text used in our main button
         * condition: The function or method to call to determine if a notice should be displayed (Boolean)
         * process: The function to handle a successful action. On success the disable_route() method should be called
         * view: The function used to display the notice content
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_routes()
        {
        }
        /**
         * Setup our route notices, if they should be enabled
         *
         * @return void
         *
         * @since 4.0
         */
        public function route_notices()
        {
        }
        /**
         * Run appropriate events
         *
         * @return void
         *
         * @since 4.0
         */
        public function route()
        {
        }
    }
    /**
     * Class Controller_Upgrade_Routines
     *
     * @package GFPDF\Controller
     */
    class Controller_Upgrade_Routines
    {
        /**
         * @var Helper_Abstract_Options
         */
        protected $options;
        /**
         * @var Helper_Data
         */
        protected $data;
        public function __construct(\GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Data $data)
        {
        }
        /**
         * @since 6.0
         */
        public function init() : void
        {
        }
        /**
         * @since 6.0
         */
        public function maybe_run_upgrade(string $old_version, string $current_version) : void
        {
        }
        /**
         * Update Background Processing values to new Toggle button format
         *
         * @since 6.0
         */
        protected function update_background_processing_values() : void
        {
        }
        /**
         * Remove legacy settings in the custom fonts data
         *
         * @since 6.0
         */
        protected function upgrade_custom_fonts()
        {
        }
    }
    /**
     * Controller_Form_Settings
     * Controls the individual form PDF settings pages
     *
     * @since 4.0
     */
    class Controller_Form_Settings extends \GFPDF\Helper\Helper_Abstract_Controller implements \GFPDF\Helper\Helper_Interface_Actions, \GFPDF\Helper\Helper_Interface_Filters
    {
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Abstract_Options / Helper_Options_Fields object
         * Makes it easy to access global PDF settings and individual form PDF settings
         *
         * @var Helper_Options_Fields
         *
         * @since 4.0
         */
        protected $options;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.2
         */
        protected $gform;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param Helper_Abstract_Model|Model_Form_Settings $model   Our Form Model the controller will manage
         * @param Helper_Abstract_View|View_Form_Settings   $view    Our Form View the controller will manage
         * @param Helper_Data                               $data    Our plugin data store
         * @param Helper_Abstract_Options                   $options Our options class which allows us to access any settings
         * @param Helper_Misc                               $misc    Our miscellaneous methods
         * @param Helper_Form                               $form    Out Gravity Forms object
         *
         * @since 4.0
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Model $model, \GFPDF\Helper\Helper_Abstract_View $view, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Form $form)
        {
        }
        /**
         * Initialise our class defaults
         *
         * @return void
         * @since 4.0
         *
         */
        public function init()
        {
        }
        /**
         * Apply any actions needed for the settings page
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_actions()
        {
        }
        /**
         * Apply any filters needed for the settings page
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_filters()
        {
        }
        /**
         * Determine if we should be saving the PDF settings
         *
         * @since 4.0
         */
        public function maybe_save_pdf_settings()
        {
        }
        /**
         * Processes / Setup the form settings page.
         *
         * @return void
         * @since 4.0
         *
         */
        public function display_page()
        {
        }
        /**
         * Store our TinyMCE init settings for use in our AJAX wp_editor calls
         *
         * @param array $settings The current TinyMCE Settings
         *
         * @return array Original Settings
         *
         * @since 4.0
         */
        public function store_tinymce_settings($settings)
        {
        }
        /**
         * Updating the form can sometimes remove the PDF configuration if the original editor begins work after the PDF is saved.
         * This usually occurs when multiple browser windows are open, and we'll fetch the current PDF settings before saving the form data.
         *
         * @internal https://github.com/GravityPDF/gravity-pdf/issues/640
         * @internal https://github.com/GravityPDF/gravity-pdf/issues/1464
         *
         * @param array  $form
         * @param int    $form_id
         * @param string $meta_name
         *
         * @return array
         *
         * @since 4.2
         */
        public function clear_cached_pdf_settings($form, $form_id, $meta_name)
        {
        }
    }
    /**
     * Class Controller_Save_Core_Fonts
     *
     * @package GFPDF\Controller
     *
     * @since   5.0
     */
    class Controller_Save_Core_Fonts extends \GFPDF\Helper\Helper_Abstract_Controller implements \GFPDF\Helper\Helper_Interface_Actions
    {
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 5.0
         */
        protected $log;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 5.0
         */
        protected $data;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 5.0
         */
        protected $misc;
        /**
         * @var string
         *
         * @since 5.0
         */
        protected $github_repo = 'https://raw.githubusercontent.com/GravityPDF/mpdf-core-fonts/master/';
        /**
         * Set up our dependencies
         *
         * @param LoggerInterface $log  Our logger class
         * @param Helper_Data     $data Our plugin data store
         * @param Helper_Misc     $misc Our miscellaneous class
         *
         * @since 5.0
         */
        public function __construct(\Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Initialise our class defaults
         *
         * @return void
         * @since 5.0
         *
         */
        public function init()
        {
        }
        /**
         * Apply any actions needed for the welcome page
         *
         * @return void
         * @since 5.0
         *
         */
        public function add_actions()
        {
        }
        /**
         * An AJAX endpoint that handles authentication and downloading the core font
         *
         * @return void
         * @since 5.0
         *
         */
        public function save_core_font()
        {
        }
        /**
         * Stream files from remote server and save them locally
         *
         * @return bool
         * @since 5.0
         *
         */
        protected function download_and_save_font()
        {
        }
    }
    /**
     * Controller_PDF
     * Handles the PDF display and authentication
     *
     * @since 4.0
     */
    class Controller_PDF extends \GFPDF\Helper\Helper_Abstract_Controller implements \GFPDF\Helper\Helper_Interface_Actions, \GFPDF\Helper\Helper_Interface_Filters
    {
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param Helper_Abstract_Model|Model_PDF $model Our PDF Model the controller will manage
         * @param Helper_Abstract_View|View_PDF   $view  Our PDF View the controller will manage
         * @param Helper_Abstract_Form            $gform Our abstracted Gravity Forms helper functions
         * @param LoggerInterface                 $log   Our logger class
         * @param Helper_Misc                     $misc  Our miscellaneous class
         *
         * @since 4.0
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Model $model, \GFPDF\Helper\Helper_Abstract_View $view, \GFPDF\Helper\Helper_Abstract_Form $gform, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Initialise our class defaults
         *
         * @return void
         * @since 4.0
         *
         */
        public function init()
        {
        }
        /**
         * Apply any actions needed for the settings page
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_actions()
        {
        }
        /**
         * Apply any filters needed for the settings page
         *
         * @return void
         * @since 4.0
         *
         */
        public function add_filters()
        {
        }
        /**
         * Determines if we should process the PDF at this stage
         * Fires just before the main WP_Query is executed (we don't need it)
         *
         * @return void
         * @since 4.0
         *
         */
        public function process_pdf_endpoint()
        {
        }
        /**
         * Determines if we should process the legacy PDF endpoint at this stage (the one with $_GET variables)
         * Fires just before the main WP_Query is executed (we don't need it)
         *
         * @return void
         * @since 4.0
         *
         */
        public function process_legacy_pdf_endpoint()
        {
        }
        /**
         * @since 5.1.1
         */
        public function add_pre_pdf_hooks()
        {
        }
        /**
         * @since 5.1.1
         */
        public function remove_pre_pdf_hooks()
        {
        }
        /**
         * Prevent the PDF Endpoints being indexed
         *
         * @since 5.2
         */
        public function prevent_index()
        {
        }
        /**
         * Disables the Siteground HTML Minifier when generating PDFs for the browser
         *
         * @since 5.1.5
         *
         * @see   https://github.com/GravityPDF/gravity-pdf/issues/863
         */
        public function sgoptimizer_html_minification_fix()
        {
        }
    }
}
namespace GFPDF\Helper {
    /**
     * A simple abstract class controllers can extent to share similar variables
     *
     * @since 4.0
     */
    abstract class Helper_Abstract_Model
    {
        /**
         * Add a controller setter function with type hinting to ensure compatibility
         *
         * @param Helper_Abstract_Controller $class The controller class
         *
         * @since 4.0
         */
        public final function setController(\GFPDF\Helper\Helper_Abstract_Controller $class)
        {
        }
        /**
         * Get the controller
         *
         * @return Helper_Abstract_Controller
         * @since 4.0
         *
         */
        public final function getController()
        {
        }
    }
}
namespace GFPDF\Model {
    /**
     * Class Model_Custom_Fonts
     *
     * @package GFPDF\Model
     *
     * @since   6.0
     */
    class Model_Custom_Fonts extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * @var Helper_Abstract_Options
         * @since 6.0
         */
        protected $options;
        public function __construct(\GFPDF\Helper\Helper_Abstract_Options $options)
        {
        }
        /**
         * A validation callback for the REST API
         *
         * @since 6.0
         */
        public function check_font_name_valid(string $name) : bool
        {
        }
        /**
         * A validation callback for the REST API
         *
         * @since 6.0
         */
        public function check_font_id_valid(string $name) : bool
        {
        }
        /**
         * Get a list of the custom fonts installed, indexed by the `id`
         *
         * @since 6.0
         */
        public function get_custom_fonts() : array
        {
        }
        /**
         * @param string $id
         *
         * @return array matches font
         * @throws GravityPdfIdException If no matching found can be found
         *
         * @since 6.0
         */
        public function get_font_by_id(string $id) : array
        {
        }
        /**
         * @param array $font An individual font setting like you'd find from the self::get_custom_fonts() method
         *
         * @return bool
         * @throws GravityPdfIdException Triggered if `id` already exists
         *
         * @since 6.0
         */
        public function add_font(array $font) : bool
        {
        }
        /**
         * @param array $font An individual font setting like you'd find from the self::get_custom_fonts() method
         *
         * @return bool
         *
         * @since 6.0
         */
        public function update_font(array $font) : bool
        {
        }
        /**
         * @param string $id The unique ID of the font to delete
         *
         * @return bool
         * @throws GravityPdfIdException Triggered if `id` already exists
         */
        public function delete_font(string $id) : bool
        {
        }
        /**
         * Checks if the ID already exists and, if so, suffixes the ID with a string until unique
         *
         * @return string The unique ID
         *
         * @since 6.0
         */
        public function get_unique_id(string $id) : string
        {
        }
        /**
         * @since 6.0
         */
        public function has_unique_font_id(string $id) : bool
        {
        }
        /**
         * @since 6.0
         */
        public function matches_reserved_font_id(string $id) : bool
        {
        }
        /**
         * @since 6.0
         */
        public function matches_core_font_id(string $id) : bool
        {
        }
        /**
         * @since 6.0
         */
        public function matches_custom_font_id(string $id) : bool
        {
        }
        /**
         * @since 6.0
         */
        public function get_font_short_name(string $name) : string
        {
        }
    }
    /**
     * Model_System_Report
     *
     * A general class for System Report
     *
     * @since 6.0
     */
    class Model_System_Report extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * @var Helper_Abstract_Options
         *
         * @since 6.0
         */
        protected $options;
        /**
         * @var Helper_Data
         *
         * @since 6.0
         */
        protected $data;
        /**
         * @var LoggerInterface
         *
         * @since 6.0
         */
        protected $log;
        /**
         * @var Helper_Misc
         *
         * @since 6.0
         */
        protected $misc;
        /**
         * @var GFPDF_Major_Compatibility_Checks
         *
         * @since 6.0
         */
        protected $status;
        /**
         * @var Helper_Templates
         *
         * @since 6.0
         */
        protected $templates;
        public function __construct(\GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Data $data, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Misc $misc, \GFPDF_Major_Compatibility_Checks $status, \GFPDF\Helper\Helper_Templates $templates)
        {
        }
        /**
         * Build Gravity PDF System Report array.
         *
         * @since 6.0
         */
        public function build_gravitypdf_report() : array
        {
        }
        /**
         * Set up array structure of Gravity PDF System Report
         *
         * @since 6.0
         */
        public function get_report_structure() : array
        {
        }
        /**
         * Move the Gravity PDF plugins from Active Plugins section to Add-Ons
         *
         * @since 6.0
         */
        public function move_gravitypdf_active_plugins_to_gf_addons(array $system_report) : array
        {
        }
        /**
         * Get array report structure of Gravity PDF System Report
         *
         * @return array
         * @since 6.0
         */
        protected function get_report_items() : array
        {
        }
        /**
         * Returns text and dashicon for Memory Limit
         *
         * @since 6.0
         */
        protected function get_memory_limit() : array
        {
        }
        /**
         * @since 6.0
         */
        protected function get_allow_url_fopen() : array
        {
        }
        /**
         * Returns the mark up once the temp folder test is completed.
         *
         * @since 6.0
         */
        protected function check_temp_folder_permission() : array
        {
        }
        /**
         * Check if we can publicly access a file in the PDF Temporary folder
         *
         * @since 6.0
         */
        public function test_public_tmp_directory_access() : bool
        {
        }
        /**
         * @since 6.0
         */
        protected function is_temporary_folder_writable() : array
        {
        }
        /**
         * Display a warning if the Core template overrides are out of date
         *
         * @since 6.0
         */
        protected function check_core_template_override_versions() : array
        {
        }
        /**
         * Get all the template version numbers
         *
         * @param array $templates List of template path.
         *
         * @return array
         *
         * @since 6.0
         */
        protected function get_template_versions(array $templates) : array
        {
        }
        /**
         * Prepare array for the system_report format
         *
         * @since 6.0
         */
        protected function prepare_report(array $item) : array
        {
        }
    }
    /**
     * Model_Actions
     *
     * Handles the grunt work for our PDF template manager
     *
     * @since 4.1
     */
    class Model_Templates extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 4.1
         */
        protected $templates;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.1
         */
        protected $log;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.1
         */
        protected $data;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.1
         */
        protected $misc;
        /**
         * Model_Templates constructor.
         *
         * @param Helper_Templates $templates
         * @param LoggerInterface  $log
         * @param Helper_Data      $data
         * @param Helper_Misc      $misc
         *
         * @since 4.1
         */
        public function __construct(\GFPDF\Helper\Helper_Templates $templates, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * AJAX Endpoint to handle the uploading of PDF templates
         *
         * @global string $_POST ['nonce'] a valid nonce
         *
         * @since 4.1
         */
        public function ajax_process_uploaded_template()
        {
        }
        /**
         * Execute the setUp method on any templates that implement it
         *
         * @param array $headers Contains the array returned from $this->get_template_info()
         *
         * @since 4.1
         */
        public function maybe_run_template_setup($headers = [])
        {
        }
        /**
         * AJAX Endpoint for deleting user-uploaded PDF templates
         *
         * @global string $_POST ['nonce'] a valid nonce
         * @global string $_POST ['id'] a valid PDF template ID
         *
         * @since 4.1
         */
        public function ajax_process_delete_template()
        {
        }
        /**
         * Deletes a PDF templates files
         *
         * @param string $template_id
         *
         * @throws Exception
         *
         * @since 4.1
         */
        public function delete_template($template_id)
        {
        }
        /**
         * AJAX Endpoint for building the template select box options (so we don't have to recreate the logic in React)
         *
         * @global string $_POST ['nonce'] a valid nonce
         *
         * @since 4.1
         */
        public function ajax_process_build_template_options_html()
        {
        }
        /**
         * Validations, renames and moves the uploaded zip file to an appropriate location
         *
         * @param File $file
         *
         * @return string The full path of the final resting place of the uploaded zip file
         *
         * @since 4.1
         */
        public function move_template_to_tmp_dir(\GFPDF_Vendor\GravityPdf\Upload\File $file)
        {
        }
        /**
         * Gets the full path to a new directory which is based on the zip file's unique name
         *
         * @param string $zip_path The full path to the zip file
         *
         * @return string
         *
         * @since 4.1
         */
        public function get_unzipped_dir_name($zip_path)
        {
        }
        /**
         * Extracts the zip file, checks there are valid PDF template files found and retrieves information about them
         *
         * @param string $zip_path The full path to the zip file
         *
         * @throws Exception Thrown if a PDF template file isn't valid
         *
         * @since 4.1
         */
        public function unzip_and_verify_templates($zip_path)
        {
        }
        /**
         * Sniffs the PHP file for signs that it's a valid Gravity PDF template file
         *
         * @param array $files The full paths to the PDF templates
         *
         * @throws Exception Thrown if file found not to be valid
         *
         * @since 4.1
         */
        public function check_for_valid_pdf_templates($files = [])
        {
        }
        /**
         * Get the PDF template info to pass to our application
         *
         * @param array $files
         *
         * @return array
         *
         * @since 4.1
         */
        public function get_template_info($files = [])
        {
        }
        /**
         * Remove the zip file and the unzipped directory
         *
         * @param string $zip_path The full path to the zip file
         *
         * @since 4.1
         */
        public function cleanup_template_files($zip_path)
        {
        }
    }
    /**
     *
     * Handles all the PDF Mergetag logic
     *
     * @since 4.1
     */
    class Model_Mergetags extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * @var Model_PDF
         *
         * @since 4.1
         */
        protected $pdf;
        /**
         * Holds our Helper_Abstract_Options / Helper_Options_Fields object
         * Makes it easy to access global PDF settings and individual form PDF settings
         *
         * @var Helper_Options_Fields
         *
         * @since 4.1
         */
        protected $options;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.1
         */
        protected $log;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.1
         */
        protected $misc;
        /**
         * @var Helper_Interface_Url_Signer
         * @since 6.0
         */
        protected $url_signer;
        /**
         * Model_Mergetags constructor.
         *
         * @param Helper_Abstract_Options $options
         * @param Model_PDF               $pdf
         * @param LoggerInterface         $log
         *
         * @since    4.1
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Model\Model_PDF $pdf, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Interface_Url_Signer $url_signer)
        {
        }
        /**
         * Add our PDF Merge tags to the merge tag selector
         * The PDF Merge tag format is {NAME:pdf:ID}
         *
         * The NAME is purely to help users identify what PDF the merge tag relates to
         * The ID is the PDF PID parameter
         *
         * @param array $tags    The current list of custom tags
         * @param int   $form_id The Gravity FOrm ID
         *
         * @return array
         *
         * @since 4.1
         */
        public function add_pdf_mergetags($tags, $form_id)
        {
        }
        /**
         * Replace the Gravity PDF merge tag ({NAME:pdf:ID}) with the associated PDF URL
         *
         * @param string $text       The string to convert
         * @param array  $form       The Gravity Form array
         * @param array  $entry      The Gravity Forms entry array
         * @param bool   $url_encode Whether to encode the URL or not
         *
         * @return string
         *
         * @since 4.1
         */
        public function process_pdf_mergetags($text, $form, $entry, $url_encode)
        {
        }
        /**
         * Add PDFs to the field map list
         *
         * @param array $fields
         * @param int   $form_id
         *
         * @return array
         *
         * @since 6.3
         */
        public function add_field_map_choices($fields, $form_id, $field_type, $exclude_field_types)
        {
        }
        /**
         * @param string $field_value
         * @param array  $form
         * @param array  $entry
         * @param int    $field_id
         *
         * @return string
         *
         * @since 6.3
         */
        public function process_field_value($field_value, $form, $entry, $field_id)
        {
        }
        /**
         * Convert gform_mailchimp_field_value parameter to be compatible with gform_addon_field_value.
         *
         * @param string $field_value
         * @param int    $form_id
         * @param int    $field_id
         * @param array $entry
         *
         * @return string
         *
         * @since 6.3.2
         */
        public function process_field_value_mailchimp($field_value, $form_id, $field_id, $entry)
        {
        }
    }
    /**
     * Model_Actions
     *
     * Handles the grunt work of our one-time actions
     *
     * @since 4.0
     */
    class Model_Actions extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Abstract_Options / Helper_Options_Fields object
         * Makes it easy to access global PDF settings and individual form PDF settings
         *
         * @var Helper_Options_Fields
         *
         * @since 4.0
         */
        protected $options;
        /**
         * Holds our Helper_Notices object
         * which we can use to queue up admin messages for the user
         *
         * @var Helper_Notices
         *
         * @since 4.0
         */
        protected $notices;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param Helper_Data             $data    Our plugin data store
         * @param Helper_Abstract_Options $options Our options class which allows us to access any settings
         * @param Helper_Notices          $notices Our notice class used to queue admin messages and errors
         *
         * @since 4.0
         */
        public function __construct(\GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Notices $notices)
        {
        }
        /**
         * Check if the current notice has already been dismissed
         *
         * @param string $type The current notice ID
         *
         * @return boolean       True if dismissed, false otherwise
         *
         * @since 4.0
         */
        public function is_notice_already_dismissed($type)
        {
        }
        /**
         * Mark the current notice as being dismissed
         *
         * @param string $type The current notice ID
         *
         * @return void
         *
         * @since 4.0
         */
        public function dismiss_notice($type)
        {
        }
        /**
         * Check if one of the core fonts exists in the fonts directory
         *
         * @return bool
         *
         * @since 5.0
         */
        public function core_font_condition()
        {
        }
        /**
         * Redirect user to our font installer tool
         *
         * @since 5.0
         */
        public function core_font_redirect()
        {
        }
    }
    /**
     * Model_Install
     *
     * Handles the grunt work of our installer / uninstaller
     *
     * @since 4.0
     */
    class Model_Install extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Holds our Helper_Notices object
         * which we can use to queue up admin messages for the user
         *
         * @var Helper_Notices
         *
         * @since 4.0
         */
        protected $notices;
        /**
         * @var Helper_Pdf_Queue
         *
         * @since 5.0
         */
        protected $queue;
        /**
         * @var Model_Uninstall
         *
         * @since 6.0
         */
        protected $uninstall;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param LoggerInterface      $log     Our logger class
         * @param Helper_Data          $data    Our plugin data store
         * @param Helper_Misc          $misc    Our miscellaneous class
         * @param Helper_Notices       $notices Our notice class used to queue admin messages and errors
         * @param Helper_Pdf_Queue     $queue
         *
         * @since 4.0
         */
        public function __construct(\Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Notices $notices, \GFPDF\Helper\Helper_Pdf_Queue $queue, \GFPDF\Model\Model_Uninstall $uninstall)
        {
        }
        /**
         * The Gravity PDF Installer
         *
         * @return void
         *
         * @since 4.0
         */
        public function install_plugin()
        {
        }
        /**
         * Get our permalink regex structure
         *
         * @return  string
         *
         * @since  4.0
         */
        public function get_permalink_regex()
        {
        }
        /**
         * Get the plugin working directory name
         *
         * @return string
         *
         * @since  4.0
         */
        public function get_working_directory()
        {
        }
        /**
         * Get a link to the plugin's settings page URL
         *
         * @return string
         *
         * @since  4.0
         */
        public function get_settings_url()
        {
        }
        /**
         * Get our current installation status
         *
         * @return  boolean
         *
         * @since  4.0
         */
        public function is_installed()
        {
        }
        /**
         * Used to set up our PDF template folder, tmp folder and font folder
         *
         * @since 4.0
         */
        public function setup_template_location()
        {
        }
        /**
         * If running a multisite we'll setup the path to the current multisite folder
         *
         * @return void
         * @since 4.0
         *
         */
        public function setup_multisite_template_location()
        {
        }
        /**
         * Create the appropriate folder structure automatically
         * The upload directory should have all appropriate permissions to allow this kind of manipulation
         * but devs who tap into the gfpdfe_template_location filter will need to ensure we can write to the appropriate folder
         *
         * @return void
         * @since 4.0
         *
         */
        public function create_folder_structures()
        {
        }
        /**
         * Register our PDF custom rewrite rules
         *
         * @return void
         * @since 4.0
         *
         */
        public function register_rewrite_rules()
        {
        }
        /**
         * Conditionally register the PDF custom rewrite rules
         *
         * @param array $tags
         *
         * @return array
         * @since 4.0
         *
         */
        public function register_rewrite_tags($tags)
        {
        }
        /**
         * Check if we need to force the rewrite rules to be flushed
         *
         * @param array $regex The rules to check
         *
         * @return void
         * @since 4.0
         *
         */
        public function maybe_flush_rewrite_rules($regex)
        {
        }
        /**
         * The Gravity PDF Uninstaller
         *
         * @deprecated 6.0
         *
         * @since 4.0
         */
        public function uninstall_plugin()
        {
        }
        /**
         * Remove and options stored in the database
         *
         * @deprecated 6.0
         *
         * @since 4.0
         */
        public function remove_plugin_options()
        {
        }
        /**
         * Remove all form settings from each individual form.
         * Because we stored out PDF settings with each form and have no index we need to individually load and forms and check them for Gravity PDF settings
         *
         * @deprecated 6.0
         *
         * @since 4.0
         */
        public function remove_plugin_form_settings()
        {
        }
        /**
         * Remove our PDF directory structure
         *
         * @deprecated 6.0
         *
         * @since 4.0
         */
        public function remove_folder_structure()
        {
        }
        /**
         * Deactivate Gravity PDF
         *
         * @deprecated 6.0
         *
         * @since 4.0
         */
        public function deactivate_plugin()
        {
        }
        /**
         * Safe redirect after deactivation
         *
         * @return void
         *
         * @since 4.0
         */
        public function redirect_to_plugins_page()
        {
        }
    }
}
namespace GFPDF\Helper {
    /**
     * Class Helper_Abstract_Pdf_Shortcode
     *
     * @package GFPDF\Helper
     *
     * @since   5.2
     */
    abstract class Helper_Abstract_Pdf_Shortcode extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * Set this constant to the Shortcode ID you're using
         *
         * @since 5.2
         */
        const SHORTCODE = '';
        /**
         * @var Helper_Abstract_Form
         * @since 5.2
         */
        protected $gform;
        /**
         * @var LoggerInterface
         * @since 5.2
         */
        protected $log;
        /**
         * @var Helper_Abstract_Options
         * @since 5.2
         */
        protected $options;
        /**
         * @var Helper_Misc
         * @since 5.2
         */
        protected $misc;
        /**
         * @var Helper_Interface_Url_Signer
         * @since 5.2
         */
        protected $url_signer;
        /**
         * Helper_Abstract_Pdf_Shortcode constructor.
         *
         * @param Helper_Abstract_Form        $gform
         * @param LoggerInterface             $log
         * @param Helper_Abstract_Options     $options
         * @param Helper_Misc                 $misc
         * @param Helper_Interface_Url_Signer $url_signer
         *
         * @since 5.2
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Form $gform, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Interface_Url_Signer $url_signer)
        {
        }
        /**
         * Generate the mark-up for the shortcode
         *
         * @param array $attributes The shortcode attributes specified
         *
         * @return string
         *
         * @since 4.0
         */
        public abstract function process($attributes);
        /**
         * Try get the Entry ID from specific $_GET keys
         *
         * @param int $entry_id
         *
         * @return int
         *
         * @throws GravityPdfShortcodeEntryIdException
         *
         * @since 5.2
         */
        protected function get_entry_id_if_empty($entry_id)
        {
        }
        /**
         * Get a valid PDF configuration
         *
         * @param int    $entry_id The Gravity Forms Entry ID
         * @param string $pdf_id   The Gravity PDF ID
         *
         * @return array
         *
         * @throws GravityPdfShortcodePdfConditionalLogicFailedException
         * @throws GravityPdfShortcodePdfConfigNotFoundException
         * @throws GravityPdfShortcodePdfInactiveException
         *
         * @since 5.2
         */
        protected function get_pdf_config($entry_id, $pdf_id)
        {
        }
        /**
         * Auto-inject the entry ID into the [gravitypdf] shortcode when merge tags are processed
         *
         * @param string $html  The text to be processed
         * @param array  $form  The Gravity Form array
         * @param array  $entry The Gravity Form entry information
         *
         * @return string
         *
         * @since 6.3
         */
        public function gravitypdf_process_during_merge_tag_replacement($html, $form, $entry)
        {
        }
        /**
         * Update our Gravity Forms "Text" Confirmation Shortcode to include the current entry ID
         *
         * @param string|array $confirmation The confirmation text
         * @param array        $form         The Gravity Form array
         * @param array        $entry        The Gravity Form entry information
         *
         * @return string|array               The confirmation text
         *
         * @since 4.0
         *
         * @depecated 6.3. Processing handled automatically when merge tags processed
         * @see Helper_Abstract_Pdf_Shortcode::gravitypdf_process_during_merge_tag_replacement()
         */
        public function gravitypdf_confirmation($confirmation, $form, $entry)
        {
        }
        /**
         * Update our Gravity Forms Notification Shortcode to include the current entry ID
         *
         * @param array $notification The notification
         * @param array $form         The Gravity Form array
         * @param array $entry        The Gravity Form entry information
         *
         * @return array               The notification
         *
         * @since 4.0
         *
         * @depecated 6.3. Processing handled automatically when merge tags processed
         * @see Helper_Abstract_Pdf_Shortcode::gravitypdf_process_during_merge_tag_replacement()
         */
        public function gravitypdf_notification($notification, $form, $entry)
        {
        }
        /**
         * Add basic GravityView support and parse the Custom Content field for the [gravitypdf] shortcode
         * This means users can copy and paste our sample shortcode without having to worry about an entry ID being passed.
         *
         * @param string $html
         *
         * @return string
         *
         * @since 4.0
         */
        public function gravitypdf_gravityview_custom($html)
        {
        }
        /**
         * Check for the shortcode and add the entry ID to it
         *
         * @param string $string   The text to search
         * @param int    $entry_id The entry ID to add to our shortcode
         *
         * @return string
         *
         * @since 4.0
         */
        protected function add_entry_id_to_shortcode($string, $entry_id)
        {
        }
        /**
         * Update a shortcode attributes
         *
         * @param array  $code  In individual shortcode array pulled in from the $this->get_shortcode_information() function
         * @param string $attr  The attribute to add / replace
         * @param string $value The new attribute value
         *
         * @return array
         *
         * @since 4.0
         */
        public function add_shortcode_attr($code, $attr, $value)
        {
        }
        /**
         * Check if user is currently submitting a new confirmation redirect URL in the admin area,
         * if so replace any shortcodes with a version that will be correctly saved and generated
         *
         * @param array $form Gravity Form Array
         *
         * @return array
         *
         * @since 4.0
         */
        public function gravitypdf_redirect_confirmation($form)
        {
        }
        /**
         * If a Redirect Confirmation, convert the Gravity PDF shortcode to it's URL form, if one exists
         *
         * @param string|array $confirmation
         * @param array        $form
         * @param array        $entry
         *
         * @return string|array
         *
         * @since 5.1
         */
        public function gravitypdf_redirect_confirmation_shortcode_processing($confirmation, $form, $entry)
        {
        }
        /**
         * Search for any shortcodes in the text and return any matches
         *
         * @param string $shortcode The shortcode to search for
         * @param string $text      The text to search in
         *
         * @return array             The shortcode information
         *
         * @since 4.0
         */
        public function get_shortcode_information($shortcode, $text)
        {
        }
    }
}
namespace GFPDF\Model {
    /**
     * Handles all the PDF Shortcode logic
     *
     * @since 4.0
     */
    class Model_Shortcodes extends \GFPDF\Helper\Helper_Abstract_Pdf_Shortcode
    {
        /**
         * @since 5.2
         */
        const SHORTCODE = 'gravitypdf';
        /**
         * Generates a direct link to the PDF that should be generated
         * If placed in a confirmation the appropriate entry will be displayed.
         * A user also has the option to pass in an "entry" parameter to define the entry ID
         *
         * @param array $attributes The shortcode attributes specified
         *
         * @return string
         *
         * @since    4.0
         *
         * @internal Deprecated in 5.2. Use self::process()
         */
        public function gravitypdf($attributes)
        {
        }
        /**
         * Generates a direct link to the PDF that should be generated
         * If placed in a confirmation the appropriate entry will be displayed.
         * A user also has the option to pass in an "entry" parameter to define the entry ID
         *
         * @param array $attributes The shortcode attributes specified
         *
         * @return string
         *
         * @since 4.0
         */
        public function process($attributes)
        {
        }
    }
    /**
     * Model_PDF
     *
     * Handles all the PDF display logic
     *
     * @since 4.0
     */
    class Model_PDF extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Abstract_Options / Helper_Options_Fields object
         * Makes it easy to access global PDF settings and individual form PDF settings
         *
         * @var Helper_Options_Fields
         *
         * @since 4.0
         */
        protected $options;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Holds our Helper_Notices object
         * which we can use to queue up admin messages for the user
         *
         * @var Helper_Notices
         *
         * @since 4.0
         */
        protected $notices;
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 4.0
         */
        protected $templates;
        /**
         * @var Helper_Interface_Url_Signer
         *
         * @since 5.2
         */
        protected $url_signer;
        /**
         * Setup our view with the needed data and classes
         *
         * @param Helper_Abstract_Form        $gform   Our abstracted Gravity Forms helper functions
         * @param LoggerInterface             $log     Our logger class
         * @param Helper_Abstract_Options     $options Our options class which allows us to access any settings
         * @param Helper_Data                 $data    Our plugin data store
         * @param Helper_Misc                 $misc    Our miscellaneous class
         * @param Helper_Notices              $notices Our notice class used to queue admin messages and errors
         * @param Helper_Templates            $templates
         * @param Helper_Interface_Url_Signer $url_signer
         *
         * @since 4.0
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Form $gform, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Notices $notices, \GFPDF\Helper\Helper_Templates $templates, \GFPDF\Helper\Helper_Interface_Url_Signer $url_signer)
        {
        }
        /**
         * Our Middleware used to handle the authentication process
         *
         * @param string  $pid    The Gravity Form PDF Settings ID
         * @param integer $lid    The Gravity Form Entry ID
         * @param string  $action Whether the PDF should be viewed or downloaded
         *
         * @return WP_Error
         * @since 4.0
         *
         */
        public function process_pdf($pid, $lid, $action = 'view')
        {
        }
        /**
         * Apply filters to particular settings to maintain backwards compatibility
         * Note: If you want to modify the $settings array you should use the new "gfpdf_pdf_config" filter instead
         *
         * @param array $settings The PDF settings array
         * @param array $entry
         *
         * @return array           The $settings array
         *
         * @since  4.0
         */
        public function apply_backwards_compatibility_filters($settings, $entry)
        {
        }
        /**
         * Check if the current PDF trying to be viewed has public access enabled
         * If it does, we'll remove some of our middleware filters to allow this feature
         *
         * @param boolean|object $action
         * @param array          $entry    The Gravity Forms Entry
         * @param array          $settings The Gravity Form PDF Settings
         *
         * @return boolean|object
         *
         * @since 4.0
         */
        public function middle_public_access($action, $entry, $settings)
        {
        }
        /**
         * Check if a signed URL exists and validate. If it passes, disable the remaining middleware capabilities
         *
         * @param boolean|object $action
         * @param array          $entry    The Gravity Forms Entry
         * @param array          $settings The Gravity Form PDF Settings
         *
         * @return boolean|object
         *
         * @since 5.1
         */
        public function middle_signed_url_access($action, $entry, $settings)
        {
        }
        /**
         * Check if the current PDF trying to be viewed is active
         *
         * @param boolean|object $action
         * @param array          $entry    The Gravity Forms Entry
         * @param array          $settings The Gravity Form PDF Settings
         *
         * @return boolean|object
         *
         * @since 4.0
         */
        public function middle_active($action, $entry, $settings)
        {
        }
        /**
         * Check if the current PDF trying to be viewed has conditional logic which passes
         *
         * @param boolean|object $action
         * @param array          $entry    The Gravity Forms Entry
         * @param array          $settings The Gravity Form PDF Settings
         *
         * @return boolean|object
         *
         * @since 4.0
         */
        public function middle_conditional($action, $entry, $settings)
        {
        }
        /**
         * Check the "Restrict Logged Out User" global setting and validate it against the current user
         *
         * @param boolean|object $action
         * @param array          $entry    The Gravity Forms Entry
         * @param array          $settings The Gravity Form PDF Settings
         *
         * @return boolean|object
         *
         * @throws Exception
         * @since 4.0
         */
        public function middle_owner_restriction($action, $entry, $settings)
        {
        }
        /**
         * Check the "Logged Out Timeout" global setting and validate it against the current user
         *
         * @param boolean|object $action
         * @param array          $entry    The Gravity Forms Entry
         * @param array          $settings The Gravity Form PDF Settings
         *
         * @return boolean|object
         *
         * @throws Exception
         * @since 4.0
         */
        public function middle_logged_out_timeout($action, $entry, $settings)
        {
        }
        /**
         * Check if the current user attempting to access is the PDF owner
         *
         * @param array  $entry The Gravity Forms Entry
         * @param string $type  The authentication type we should use
         *
         * @return boolean
         *
         * @since 4.0
         */
        public function is_current_pdf_owner($entry, $type = 'all')
        {
        }
        /**
         * Check if the user is logged out and authenticate as needed
         *
         * @param boolean|object $action
         * @param array          $entry    The Gravity Forms Entry
         * @param array          $settings The Gravity Form PDF Settings
         *
         * @return boolean|object
         *
         * @throws Exception
         * @since 4.0
         */
        public function middle_auth_logged_out_user($action, $entry, $settings)
        {
        }
        /**
         * Check the "User Restriction" global setting and validate it against the current user
         *
         * @param boolean|object $action
         * @param array          $entry    The Gravity Forms Entry
         * @param array          $settings The Gravity Form PDF Settings
         *
         * @return boolean|object
         *
         * @since 4.0
         */
        public function middle_user_capability($action, $entry, $settings)
        {
        }
        /**
         * Display PDF on Gravity Form entry list page
         *
         * @param integer $form_id  Gravity Form ID
         * @param integer $field_id Current field ID
         * @param mixed   $value    Current value of field
         * @param array   $entry    Entry Information
         *
         * @return void
         *
         * @since 4.0
         */
        public function view_pdf_entry_list($form_id, $field_id, $value, $entry)
        {
        }
        /**
         * Get a preformatted list of active PDFs with name and URL
         *
         * @param array $entry
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_pdf_display_list($entry)
        {
        }
        /**
         * Filter out inactive PDFs and those who don't meet the conditional logic
         *
         * @param array $pdfs  The PDF settings array
         * @param array $entry The current entry information
         *
         * @return array       The filtered PDFs
         *
         * @since 4.0
         */
        public function get_active_pdfs($pdfs, $entry)
        {
        }
        /**
         * Generate the PDF Name
         *
         * @param array $settings The PDF Form Settings
         * @param array $entry    The Gravity Form entry details
         *
         * @return string      The PDF Name
         *
         * @since  4.0
         */
        public function get_pdf_name($settings, $entry)
        {
        }
        /**
         * Create a PDF Link based on the current PDF settings and entry
         *
         * @param integer $pid      The PDF Form Settings ID
         * @param integer $id       The Gravity Form entry ID
         * @param boolean $download Whether the PDF should be downloaded or not
         * @param boolean $print    Whether we should mark the PDF to be printed
         * @param boolean $esc      Whether to escape the URL or not
         *
         * @return string       Direct link to the PDF
         *
         * @since  4.0
         */
        public function get_pdf_url($pid, $id, $download = false, $print = false, $esc = true)
        {
        }
        /**
         * Display the PDF links on the entry detailed section of the admin area
         *
         * @param array $args Combined form and entry array
         *
         * @return void
         *
         * @since  4.0
         */
        public function view_pdf_entry_detail($args)
        {
        }
        /**
         * Add the pdf meta box to the entry detail page.
         *
         * @param array $meta_boxes The properties for the meta boxes.
         * @param array $entry      The entry currently being viewed/edited.
         * @param array $form       The form object used to process the current entry.
         *
         * @return array
         *
         * @since 6.0
         */
        public function register_pdf_meta_box($meta_boxes, $entry, $form)
        {
        }
        /**
         * Check if the form has any PDFs, generate them and attach to the notification
         *
         * @param array $notifications Gravity Forms Notification Array
         * @param array $form
         * @param array $entry
         *
         * @return array
         *
         * @throws Exception
         * @since 4.0
         */
        public function notifications($notifications, $form, $entry)
        {
        }
        /**
         * Determine if the PDF should be attached to the current notification
         *
         * @param array $notification The Gravity Form Notification currently being processed
         * @param array $settings     The current Gravity PDF Settings
         * @param array $form         Added to 4.2
         * @param array $entry        Added to 4.2
         *
         * @return boolean
         *
         * @since 4.0
         */
        public function maybe_attach_to_notification($notification, $settings, $entry = [], $form = [])
        {
        }
        /**
         * Generate and save the PDF to disk
         *
         * @param array $entry    The Gravity Form entry array (usually passed in as a filter or pulled using GFAPI::get_entry( $id ) )
         * @param array $settings The PDF configuration settings for the particular entry / form being processed
         *
         * @return string|WP_Error           Return the full path to the PDF, or a WP_Error on failure
         *
         * @throws Exception
         * @since 4.0
         */
        public function generate_and_save_pdf($entry, $settings)
        {
        }
        /**
         * Generate and save PDF to disk
         *
         * @param Helper_PDF $pdf The Helper_PDF object
         *
         * @return boolean
         *
         * @throws Exception
         * @since 4.0
         */
        public function process_and_save_pdf(\GFPDF\Helper\Helper_PDF $pdf)
        {
        }
        /**
         * Check if the current PDF to be processed already exists on disk
         *
         * @param Helper_PDF $pdf The Helper_PDF Object
         *
         * @return boolean
         *
         * @since  4.0
         */
        public function does_pdf_exist(\GFPDF\Helper\Helper_PDF $pdf)
        {
        }
        /**
         * Generates our $data array
         *
         * @param array $entry The Gravity Form Entry
         *
         * @return array        The $data array
         *
         * @throws Exception
         * @since 4.0
         */
        public function get_form_data($entry)
        {
        }
        /**
         * Handles the loading and running of our legacy Tier 2 PDF templates
         *
         * @param Helper_PDF $pdf      The Helper_PDF object
         * @param array      $entry    The Gravity Forms raw entry data
         * @param array      $settings The Gravity PDF settings
         * @param array      $args     The data that should be passed directly to a PDF template
         *
         * @return bool
         *
         * @since 4.0
         */
        public function handle_legacy_tier_2_processing(\GFPDF\Helper\Helper_PDF $pdf, $entry, $settings, $args)
        {
        }
        /**
         * Return our general $data information
         *
         * @param array $form  The Gravity Form
         * @param array $entry The Gravity Form Entry
         *
         * @return array        The $data array
         *
         * @since 4.0
         */
        public function get_form_data_meta($form, $entry)
        {
        }
        /**
         * Pull the Quiz Results into the $form_data array
         *
         * @param array $form  The Gravity Form
         * @param array $entry The Gravity Form Entry
         *
         * @return array        The results
         *
         * @since  4.0
         */
        public function get_quiz_results($form, $entry)
        {
        }
        /**
         * Pull the Survey Results into the $form_data array
         *
         * @param array $form  The Gravity Form
         * @param array $entry The Gravity Form Entry
         *
         * @return array        The results
         *
         * @since  4.0
         */
        public function get_survey_results($form, $entry)
        {
        }
        /**
         * Pull the Poll Results into the $form_data array
         *
         * @param array $form  The Gravity Form
         * @param array $entry The Gravity Form Entry
         *
         * @return array        The results
         *
         * @since  4.0
         */
        public function get_poll_results($form, $entry)
        {
        }
        /**
         * Pass in a Gravity Form Field Object and get back a Gravity PDF Field Object
         *
         * @param GF_Field         $field    Gravity Form Field Object
         * @param array          $form     The Gravity Form Array
         * @param array          $entry    The Gravity Form Entry
         * @param Field_Products $products A Field_Products Object
         *
         * @return Helper_Abstract_Fields
         *
         * @throws Exception
         * @since 4.0
         */
        public function get_field_class($field, $form, $entry, \GFPDF\Helper\Fields\Field_Products $products)
        {
        }
        /**
         * Sniff the form fields and determine if there are any of the $type available
         *
         * @param string $type the field type we are looking for
         * @param array  $form the form array
         *
         * @return boolean       Whether there is a match or not
         *
         * @since 4.0
         */
        public function check_field_exists($type, $form)
        {
        }
        /**
         * Parse the Quiz Overall Results
         *
         * @param array $form   The Gravity Form
         * @param array $fields The quiz fields
         *
         * @return array         The parsed results
         *
         * @since 4.0
         */
        public function get_quiz_overall_data($form, $fields)
        {
        }
        /**
         * Swap out the array key
         *
         * @param array  $array           The array to be modified
         * @param string $key             The key to remove
         * @param string $replacement_key The new array key
         *
         * @return array        The modified array
         *
         * @since 4.0
         */
        public function replace_key($array, $key, $replacement_key)
        {
        }
        /**
         * Creates a PDF on every submission, except when the PDF is already created during the notification hook
         *
         * @param array $entry The GF Entry Details
         * @param array $form  The Gravity Form
         *
         * @return void
         *
         * @throws Exception
         * @since 4.0
         */
        public function maybe_save_pdf($entry, $form)
        {
        }
        /**
         * Determine if the PDF should be saved to disk
         *
         * @param array $settings The current Gravity PDF Settings
         * @param int   $form_id  The current Form ID
         *
         * @since 4.0
         */
        public function maybe_always_save_pdf(array $settings, int $form_id = 0) : bool
        {
        }
        /**
         * Trigger Post PDF Generation Action
         *
         * @param array      $form     The Gravity Form
         * @param array      $entry    The Gravity Form Entry
         * @param array      $settings The Gravity PDF Settings
         * @param Helper_PDF $pdf      The Helper_PDF object
         *
         * @since 5.2
         */
        public function trigger_post_save_pdf($form, $entry, $settings, $pdf)
        {
        }
        /**
         * Clean-up our tmp directory every 24 hours
         *
         * @return void
         *
         * @since 4.0
         */
        public function cleanup_tmp_dir()
        {
        }
        /**
         * Triggered after the Gravity Form entry is updated
         *
         * @param array $form
         * @param int   $entry_id
         */
        public function cleanup_pdf_after_submission($form, $entry_id)
        {
        }
        /**
         * Remove the generated PDF from the server to save disk space
         *
         * @param array $entry The GF Entry Data
         * @param array $form  The Gravity Form
         *
         * @return void
         *
         * @internal  In future we may give the option to cache PDFs to save on processing power
         *
         * @since     4.0
         */
        public function cleanup_pdf($entry, $form)
        {
        }
        /**
         * Clean-up any PDFs stored on disk before we resend any notifications
         *
         * @param array $form    The Gravity Forms object
         * @param array $entries An array of Gravity Form entry IDs
         *
         * @return array We tapped into a filter so we need to return the form object
         * @since 4.0
         *
         */
        public function resend_notification_pdf_cleanup($form, $entries)
        {
        }
        /**
         * An mPDF filter which will register our custom font data with mPDF
         *
         * @param array $fonts The registered fonts
         *
         * @return array
         *
         * @since 4.0
         */
        public function register_custom_font_data_with_mPDF($fonts)
        {
        }
        /**
         * Read all fonts from our fonts directory and auto-load them into mPDF if they are not found
         *
         * @param array $fonts The registered fonts
         *
         * @return array
         * @since 4.0
         */
        public function add_unregistered_fonts_to_mPDF($fonts)
        {
        }
        /**
         * Attempts to find a configuration which matches the legacy routing method
         *
         * @param array $config
         *
         * @return mixed
         *
         * @since  4.0
         */
        public function get_legacy_config($config)
        {
        }
        /**
         * Do any preprocessing to our arguments before they are sent to the template
         *
         * @param array $args
         *
         * @return array
         *
         * @since  4.0
         */
        public function preprocess_template_arguments($args)
        {
        }
        /**
         * Skip over any fields with a class of "exclude"
         *
         * @param bool     $action
         * @param GF_Field $field
         * @param array    $entry
         * @param array    $form
         * @param array    $config
         *
         * @return bool
         *
         * @since 4.2
         */
        public function field_middle_exclude($action, $field, $entry, $form, $config)
        {
        }
        /**
         * Determine if we should skip fields hidden with conditional logic
         *
         * @param bool     $action
         * @param GF_Field $field
         * @param array    $entry
         * @param array    $form
         * @param array    $config
         *
         * @return bool
         *
         * @since 4.2
         */
        public function field_middle_conditional_fields($action, $field, $entry, $form, $config)
        {
        }
        /**
         * Determine if we should skip product fields (by default they are grouped at the end of the form)
         *
         * @param bool     $action
         * @param GF_Field $field
         * @param array    $entry
         * @param array    $form
         * @param array    $config
         *
         * @return bool
         *
         * @since 4.2
         */
        public function field_middle_product_fields($action, $field, $entry, $form, $config)
        {
        }
        /**
         * Determine if we should skip HTML fields
         *
         * @param bool     $action
         * @param GF_Field $field
         * @param array    $entry
         * @param array    $form
         * @param array    $config
         *
         * @return bool
         *
         * @since 4.2
         */
        public function field_middle_html_fields($action, $field, $entry, $form, $config)
        {
        }
        /**
         * Check if the field is on our blacklist and skip
         *
         * @param bool           $action
         * @param GF_Field       $field
         * @param array          $entry
         * @param array          $form
         * @param array          $config
         * @param Field_Products $products
         * @param array          $blacklisted
         *
         * @return bool
         *
         * @since 4.2
         */
        public function field_middle_blacklist($action, $field, $entry, $form, $config, $products, $blacklisted)
        {
        }
        /**
         * Set the watermark font to the current PDF font
         *
         * @param Mpdf  $mpdf
         * @param array $form
         * @param array $entry
         * @param array $settings
         *
         * @return Mpdf
         *
         * @since 5.0
         */
        public function set_watermark_font($mpdf, $form, $entry, $settings)
        {
        }
        /**
         * Replace any Gravity Perk Populate Anything live merge tags with their standard equivalent (i.e without the @ symbol)
         * Include support for the `fallback` option
         *
         * @param string $text
         * @param array  $form
         * @param array  $entry
         *
         * @return string
         *
         * @since 5.3
         */
        public function process_gp_populate_anything($text, $form, $entry)
        {
        }
        /**
         * At the end of the PDF generation, remove filter to replace merge tags for Gravity Perk Populate Anything
         *
         * @since 5.3
         */
        public function disable_gp_populate_anything()
        {
        }
        /**
         * At the start of the PDF generation, filter all Gravity Perk Populate Anything merge tag replacement calls
         *
         * @since 5.3
         */
        public function enable_gp_populate_anything()
        {
        }
    }
    /**
     * Model_Welcome_Screen
     *
     * A general class for About / Intro Screen
     *
     * @since 4.0
     */
    class Model_Settings extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * Errors with the global form submission process are stored here
         *
         * @var array
         *
         * @since    4.0
         *
         * @Internal Deprecated method
         */
        public $form_settings_errors;
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Notices object
         * which we can use to queue up admin messages for the user
         *
         * @var Helper_Notices
         *
         * @since 4.0
         */
        protected $notices;
        /**
         * Holds our Helper_Abstract_Options / Helper_Options_Fields object
         * Makes it easy to access global PDF settings and individual form PDF settings
         *
         * @var Helper_Options_Fields
         *
         * @since 4.0
         */
        protected $options;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 4.0
         */
        protected $templates;
        /**
         * Set up our dependencies
         *
         * @param Helper_Abstract_Form    $gform   Our abstracted Gravity Forms helper functions
         * @param LoggerInterface         $log     Our logger class
         * @param Helper_Notices          $notices Our notice class used to queue admin messages and errors
         * @param Helper_Abstract_Options $options Our options class which allows us to access any settings
         * @param Helper_Data             $data    Our plugin data store
         * @param Helper_Misc             $misc    Our miscellaneous class
         * @param Helper_Templates        $templates
         *
         * @since 4.0
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Form $gform, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Notices $notices, \GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Templates $templates)
        {
        }
        /**
         * If any errors have been passed back from the options.php page we will highlight the actual fields that caused them
         *
         * @param array $settings The get_registered_fields() array
         *
         * @return array
         *
         * @since 4.0
         */
        public function highlight_errors($settings)
        {
        }
        /**
         * Turn capabilities into more friendly strings
         *
         * @param string $cap The wordpress-style capability
         *
         * @return string
         *
         * @since 4.0
         */
        public function style_capabilities($cap)
        {
        }
        /**
         * Gets all the template information for use with our JS template selector
         *
         * @param array $strings
         *
         * @return array
         *
         * @since 4.1
         */
        public function get_template_data($strings)
        {
        }
        /**
         * Include License fields in the PDF Settings for each registered add-on
         *
         * @param array $fields The licensing fields
         *
         * @return array
         *
         * @since 4.2
         */
        public function register_addons_for_licensing($fields)
        {
        }
        /**
         * Check the current add-on license key status and do an API call if the status isn't already active and the
         * license key has been included. Update special hidden "message" and "license" fields with API response
         *
         * @param array $input The $_POST data provided by the Settings API
         *
         * @return array
         *
         * @since 4.2
         */
        public function maybe_active_licenses($input)
        {
        }
        /**
         * Do API call to GravityPDF.com to activate the current add-on license key
         *
         * @param Helper_Abstract_Addon $addon       The current add-on class (stored in $data->addon)
         * @param string                $license_key The current license key for this add-on
         *
         * @return array The API response and license status
         *
         * @since 4.2
         */
        protected function activate_license(\GFPDF\Helper\Helper_Abstract_Addon $addon, $license_key)
        {
        }
        /**
         * An AJAX endpoint for processing license deactivations
         *
         * @Internal Expected parameters include:
         *           $_POST['addon_name']
         *           $_POST['license']
         *
         * @since    4.2
         */
        public function process_license_deactivation()
        {
        }
        /**
         * Do API call to GravityPDF.com to deactivate add-on license
         *
         * @param Helper_Abstract_Addon $addon
         * @param string                $license_key
         *
         * @return bool
         *
         * @since 4.2
         */
        public function deactivate_license_key(\GFPDF\Helper\Helper_Abstract_Addon $addon, $license_key)
        {
        }
        /**
         * Removes the current font's TTF files from our font directory
         *
         * @param array $fonts The font config
         *
         * @since  4.0
         *
         * @deprecated Removed in 6.0. Use GPDFAPI::delete_pdf_font()
         */
        public function remove_font_file($fonts)
        {
        }
        /**
         * Check that the font name passed conforms to our expected naming convention
         *
         * @param string $name The font name to check
         *
         * @since 4.0
         *
         * @deprecated Moved in 6.0. Use Model_Custom_Fonts::check_font_name_valid()
         */
        public function is_font_name_valid($name)
        {
        }
        /**
         * Query our custom fonts options table and check if the font name already exists
         *
         * @param string     $name The font name to check
         * @param int|string $id   The configuration ID (if any)
         *
         * @since 4.0
         *
         * @deprecated Removed in 6.0. Font names no longer need to be unique
         */
        public function is_font_name_unique($name, $id = '')
        {
        }
        /**
         * Handles the database updates required to save a new font
         *
         * @param array $fonts
         *
         * @since 4.0
         *
         * @deprecated Moved in 6.0 to Model_Custom_Fonts::add_font()
         */
        public function install_fonts($fonts)
        {
        }
        /**
         * AJAX Endpoint for saving the custom font
         *
         * @since 4.0
         *
         * @deprecated Moved in 6.0. Use GPDFAPI::add_pdf_font()
         */
        public function save_font()
        {
        }
        /**
         * AJAX Endpoint for deleting a custom font
         *
         * @since 4.0
         *
         * @deprecated Moved in 6.0. Use GPDFAPI::delete_pdf_font()
         */
        public function delete_font()
        {
        }
        /**
         * Validate user input and save as new font
         *
         * @param array $font The four font fields to be processed
         *
         * @since 4.0
         *
         * @deprecated Removed in 6.0. Use GPDFAPI::add_pdf_font()
         */
        public function process_font($font)
        {
        }
        /**
         * Find the font unique ID from the font name
         *
         * @param string $font_name
         *
         * @since 4.1
         *
         * @deprecated Removed in 6.0. Font names no longer linked to IDs.
         */
        public function get_font_id_by_name($font_name)
        {
        }
        /**
         * Create a file in our tmp directory and check if it is publicly accessible (i.e no .htaccess protection)
         *
         * @since 4.0
         *
         * @deprecated Functionality removed in 6.0
         */
        public function check_tmp_pdf_security()
        {
        }
        /**
         * Create a file in our tmp directory and verify if it's protected from the public
         *
         * @return boolean
         *
         * @since 4.0
         *
         * @deprecated Moved in 6.0. Use Model_System_Report::test_public_tmp_directory_access()
         */
        public function test_public_tmp_directory_access()
        {
        }
    }
    /**
     * Class Model_Uninstall
     *
     * @package GFPDF\Model
     *
     * @since   6.0
     */
    class Model_Uninstall extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * @var Helper_Form
         *
         * @since 6.0
         */
        protected $gform;
        /**
         * @var LoggerInterface
         *
         * @since 6.0
         */
        protected $log;
        /**
         * @var Helper_Data
         *
         * @since 6.0
         */
        protected $data;
        /**
         * @var Helper_Misc
         *
         * @since 6.0
         */
        protected $misc;
        /**
         * @var Helper_Notices
         *
         * @since 6.0
         */
        protected $notices;
        /**
         * @var Helper_Pdf_Queue
         *
         * @since 6.0
         */
        protected $queue;
        public function __construct(\GFPDF\Helper\Helper_Abstract_Form $gform, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Notices $notices, \GFPDF\Helper\Helper_Pdf_Queue $queue)
        {
        }
        /**
         * The Gravity PDF Uninstaller
         *
         * @since 6.0
         */
        public function uninstall_plugin()
        {
        }
        /**
         * Remove and options stored in the database
         *
         * @since 6.0
         */
        public function remove_plugin_options()
        {
        }
        /**
         * Remove all form settings from each individual form.
         * Because we stored out PDF settings with each form and have no index we need to individually load and forms and check them for Gravity PDF settings
         *
         * @since 6.0
         */
        public function remove_plugin_form_settings()
        {
        }
        /**
         * Remove our PDF directory structure
         *
         * @since 6.0
         */
        public function remove_folder_structure()
        {
        }
        /**
         * Deactivate Gravity PDF
         *
         * @since 6.0
         */
        public function deactivate_plugin()
        {
        }
    }
    /**
     * Model_Form_Settings
     *
     * A general class for About / Intro Screen
     *
     * @since 4.0
     */
    class Model_Form_Settings extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Abstract_Options / Helper_Options_Fields object
         * Makes it easy to access global PDF settings and individual form PDF settings
         *
         * @var Helper_Options_Fields
         *
         * @since 4.0
         */
        protected $options;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Holds our Helper_Notices object
         * which we can use to queue up admin messages for the user
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $notices;
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 4.0
         */
        protected $templates;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param Helper_Abstract_Form    $gform   Our abstracted Gravity Forms helper functions
         * @param LoggerInterface         $log     Our logger class
         * @param Helper_Data             $data    Our plugin data store
         * @param Helper_Abstract_Options $options Our options class which allows us to access any settings
         * @param Helper_Misc             $misc    Our miscellaneous class
         * @param Helper_Notices          $notices Our notice class used to queue admin messages and errors
         * @param Helper_Templates        $templates
         *
         * @since 4.0
         */
        public function __construct(\GFPDF\Helper\Helper_Abstract_Form $gform, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Notices $notices, \GFPDF\Helper\Helper_Templates $templates)
        {
        }
        /**
         * Add the form settings tab.
         *
         * Override this function to add the tab conditionally.
         *
         * @param array $tabs The list of existing tags
         *
         * @return array modified list of $tabs
         *
         * @since 4.0
         */
        public function add_form_settings_menu($tabs)
        {
        }
        /**
         * Setup the PDF Settings List View Logic
         *
         * @param integer $form_id The Gravity Form ID
         *
         * @return void
         *
         * @since 4.0
         */
        public function process_list_view($form_id)
        {
        }
        /**
         * Setup the PDF Settings Add/Edit View Logic
         *
         * @param integer $form_id The Gravity Form ID
         * @param integer $pdf_id  The PDF configuration ID
         *
         * @return void
         *
         * @since 4.0
         */
        public function show_edit_view($form_id, $pdf_id)
        {
        }
        /**
         * Update our notification form settings which is specific to the PDF Form Settings Page (i.e we need an actual $form object which isn't present when we originally register the settings)
         *
         * @param array $notifications The current form notifications
         *
         * @return void
         *
         * @since 4.0
         */
        public function register_notifications($notifications)
        {
        }
        /**
         * Validate, Sanitize and Update PDF settings
         *
         * @param integer $form_id The Gravity Form ID
         * @param string|bool $pdf_id  The PDF configuration ID
         *
         * @return boolean
         *
         * @since 4.0
         */
        public function process_submission($form_id, $pdf_id)
        {
        }
        /**
         * Similar to Helper_Abstract_Options->settings_sanitize() except we don't need as robust validation and error checking
         *
         * @param array $input Fields to process
         *
         * @return array         Sanitized fields
         *
         * @since 4.0
         */
        public function settings_sanitize($input = [])
        {
        }
        /**
         * Apply gfield_error class when validation fails, highlighting field blocks with problems
         *
         * @param array $fields Array of fields to process
         *
         * @return array|false         Modified list of fields
         *
         * @since 4.0
         */
        public function validation_error($fields)
        {
        }
        /**
         * Do further checks to see if the custom PDF size should in fact be marked as an error
         * Because it is dependant on the paper size option in some cases it shouldn't be highlighted
         *
         * @param boolean $skip  Whether to skip error highlighting checks
         * @param array   $field The Gravity Form field
         * @param array   $input The user input
         *
         * @return boolean
         *
         * @since  4.0
         */
        public function check_custom_size_error_highlighting($skip, $field, $input)
        {
        }
        /**
         * If the PDF ID exists (either POST or GET) and we have a template with a config file
         * we will load any fields loaded in the config file
         *
         * @param array $settings Any existing settings loaded
         *
         * @return array
         *
         * @since  4.0
         */
        public function register_custom_appearance_settings($settings)
        {
        }
        /*
         * To allow for correct backwards compatibility with our v3 templates we need to hide the font, size and colour
         * information when selected. To allow this behaviour we're going to assign a 'data-template_group' attribute
         * to the template select box which our JS can pick up and use to toggle those fields
         *
         * @param array $settings The current PDF settings
         *
         * @return array
         *
         * @since 4.0
         */
        /**
         * Check if we are on the Form Settings Edit page and gets the appropriate template name
         *
         * @return string The current saved PDF template
         *
         * @since 4.0
         */
        public function get_template_name_from_current_page()
        {
        }
        /**
         * Load our custom appearance settings (if needed)
         *
         * @param object $class    The template configuration class
         * @param array  $settings Any current settings
         *
         * @return array
         *
         * @since 4.0
         */
        public function setup_custom_appearance_settings($class, $settings = [])
        {
        }
        /**
         * Setup any core fields that are registered to the PDF template
         *
         * @param array                   $settings          Any current settings
         * @param Helper_Interface_Config $class             The template configuration class
         * @param array                   $template_settings Loaded configuration array
         *
         * @return array
         *
         * @since 4.0
         */
        public function setup_core_custom_appearance_settings(array $settings, \GFPDF\Helper\Helper_Interface_Config $class, array $template_settings)
        {
        }
        public function register_template_group($settings)
        {
        }
        /**
         * Auto strip the .pdf extension when sanitizing
         *
         * @param string $value The value entered by the user
         * @param string $key   The field to be parsed
         *
         * @return string        The sanitized data
         */
        public function parse_filename_extension($value, $key)
        {
        }
        /**
         * Auto decode the JSON conditional logic string
         *
         * @param string $value The value entered by the user
         * @param string $key   The field to be parsed
         *
         * @return array|string        The sanitized data
         */
        public function decode_json($value, $key)
        {
        }
        /**
         * AJAX Endpoint for deleting PDF Settings
         *
         * @return string JSON
         *
         * @internal param $_POST ['nonce'] a valid nonce
         * @internal param $_POST ['fid'] a valid form ID
         * @internal param $_POST ['pid'] a valid PDF ID
         *
         * @since    4.0
         */
        public function delete_gf_pdf_setting()
        {
        }
        /**
         * AJAX Endpoint for duplicating PDF Settings
         *
         * @return string JSON
         *
         * @internal param $_POST ['nonce'] a valid nonce
         * @internal param $_POST ['fid'] a valid form ID
         * @internal param $_POST ['pid'] a valid PDF ID
         *
         * @since    4.0
         */
        public function duplicate_gf_pdf_setting()
        {
        }
        /**
         * AJAX Endpoint for changing the PDF Settings state
         *
         * @return string JSON
         *
         * @internal param $_POST ['nonce'] a valid nonce
         * @internal param $_POST ['fid'] a valid form ID
         * @internal param $_POST ['pid'] a valid PDF ID
         *
         * @since    4.0
         */
        public function change_state_pdf_setting()
        {
        }
        /**
         * AJAX Endpoint for rendering the template field settings options
         *
         * @return string JSON
         *
         * @internal param $_POST ['template'] the template to select
         *
         * @since    4.0
         */
        public function render_template_fields()
        {
        }
    }
}
namespace GFPDF\Helper {
    /**
     * A simple abstract class view can extent to share similar variables
     *
     * @since 4.0
     */
    abstract class Helper_Abstract_View extends \GFPDF\Helper\Helper_Abstract_Model
    {
        /**
         * Each object should have a view name
         *
         * @var string
         *
         * @since 4.0
         */
        protected $view_type = null;
        /**
         * Enable a private data cache we can set and retrieve information from
         *
         * @var array
         *
         * @since 4.0
         */
        protected $data_cache = [];
        /**
         * Automatically define our constructor which will set our data cache
         *
         * @param array $data An array of data to pass to the view
         *
         * @since 4.0
         */
        public function __construct($data = [])
        {
        }
        /**
         * Triggered when invoking inaccessible methods in an object context
         * Use it to load in our view
         *
         * @param string $name      Template name to load
         * @param array  $arguments Pass in additional parameters to the template view if needed
         *
         * @return string
         *
         * @since 4.0
         */
        public final function __call($name, $arguments)
        {
        }
        /**
         * Get the full path to the current view
         *
         * @return string The path
         *
         * @since 4.0.1
         */
        public final function get_view_dir_path()
        {
        }
        /**
         * Load a view file based on the filename and type
         *
         * @param string  $filename The filename to load
         * @param array   $args     Variables to pass to the included file
         * @param boolean $output   Whether to automatically display the included file or return it's output as a String
         *
         * @return string|WP_Error           The loaded file, or WP_ERROR
         *
         * @since 4.0
         */
        protected final function load($filename, $args = [], $output = true)
        {
        }
    }
}
namespace GFPDF\View {
    /**
     * Controls the Gravity PDF Shortcode View / Display
     *
     * @since 4.0
     */
    class View_Shortcodes extends \GFPDF\Helper\Helper_Abstract_View
    {
        /**
         * Set the view's name
         *
         * @var string
         *
         * @since 4.0
         */
        protected $view_type = 'Shortcodes';
        /**
         * Shortcode Error: Entry ID not passed through the shortcode - directly or through the URL.
         *
         * @return string The error message
         *
         * @since 4.0
         */
        public function no_entry_id()
        {
        }
        /**
         * Shortcode Error: Entry ID, Form ID or PDF ID mismatch. Cannot get PDF configuration.
         *
         * @return string The error message
         *
         * @since 4.0
         */
        public function invalid_pdf_config()
        {
        }
        /**
         * Shortcode Error: PDF configuration not active
         *
         * @return string The error message
         *
         * @since 4.0
         */
        public function pdf_not_active()
        {
        }
        /**
         * Shortcode Error: PDF Conditional Logic not met
         *
         * @return string The error message
         *
         * @since 4.0
         */
        public function conditional_logic_not_met()
        {
        }
        /**
         * Generate the Gravity PDF link
         *
         * @param array $attr The parameters
         *
         * @return string       The Shortcode Markup
         *
         * @since 4.0
         */
        public function display_gravitypdf_shortcode($attr)
        {
        }
    }
    /**
     * View_PDF
     *
     * A general class for PDF display
     *
     * @since 4.0
     */
    class View_PDF extends \GFPDF\Helper\Helper_Abstract_View
    {
        /**
         * Set the view's name
         *
         * @var string
         *
         * @since 4.0
         */
        protected $view_type = 'PDF';
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Abstract_Options / Helper_Options_Fields object
         * Makes it easy to access global PDF settings and individual form PDF settings
         *
         * @var Helper_Abstract_Options
         * @since 4.0
         */
        protected $options;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 4.0
         */
        protected $templates;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param array                            $data_cache An array of data to pass to the view
         * @param Helper_Form|Helper_Abstract_Form $gform      Our abstracted Gravity Forms helper functions
         * @param LoggerInterface                  $log        Our logger class
         * @param Helper_Abstract_Options          $options    Our options class which allows us to access any settings
         * @param Helper_Data                      $data       Our plugin data store
         * @param Helper_Misc                      $misc       Our miscellaneous methods
         * @param Helper_Templates                 $templates
         *
         * @since 4.0
         */
        public function __construct(array $data_cache, \GFPDF\Helper\Helper_Abstract_Form $gform, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Templates $templates)
        {
        }
        /**
         * Our PDF Generator
         *
         * @param array $entry    The Gravity Forms Entry to process
         * @param array $settings The Gravity Form PDF Settings
         *
         * @return void
         *
         * @since 4.0
         */
        public function generate_pdf($entry, $settings)
        {
        }
        /**
         * Ensure a PHP extension is added to the end of the template name
         *
         * @param string $name The PHP template
         *
         * @return string
         *
         * @since  4.0
         */
        public function get_template_filename($name)
        {
        }
        /**
         * Start the PDF HTML Generation Process
         *
         * @param array                 $entry  The Gravity Forms Entry Array
         * @param Helper_Abstract_Model $model
         * @param array                 $config Any configuration data passed in
         *
         * @return string The generated HTML
         *
         * @throws Exception
         * @since 4.0
         */
        public function process_html_structure($entry, \GFPDF\Helper\Helper_Abstract_Model $model, $config = [])
        {
        }
        /**
         * Build our HTML structure
         *
         * @param array                 $entry  The Gravity Forms Entry Array
         * @param Helper_Abstract_Model $model
         * @param array                 $config Any configuration data passed in
         *
         * @throws Exception
         * @since 4.0
         */
        public function generate_html_structure($entry, \GFPDF\Helper\Helper_Abstract_Model $model, $config = [])
        {
        }
        /**
         * Handle our field loader and display the generated HTML
         *
         * @param GF_Field               $field    The field to process
         * @param array                  $entry    The Gravity Form Entry
         * @param array                  $form     The Gravity Form Field
         * @param array                  $config   The user-passed configuration data
         * @param Field_Products         $products A Field_Products Object
         * @param Helper_Field_Container $container
         * @param Helper_Abstract_Model  $model
         *
         * @since 4.0
         */
        public function process_field(\GF_Field $field, $entry, $form, $config, \GFPDF\Helper\Fields\Field_Products $products, \GFPDF\Helper\Helper_Field_Container $container, \GFPDF\Helper\Helper_Abstract_Model $model)
        {
        }
        /**
         * If enabled, we'll show the Gravity Form Title in the document
         *
         * @param boolean $show_title Whether or not to show the title
         * @param array   $form       The Gravity Form array
         *
         * @return void
         *
         * @since 4.0
         */
        public function show_form_title($show_title, $form)
        {
        }
        /**
         * Output the current page name HTML
         *
         * @param integer                $page The current page number
         * @param array                  $form The form array
         * @param Helper_Field_Container $container
         *
         * @since    4.0
         */
        public function display_page_name($page, $form, \GFPDF\Helper\Helper_Field_Container $container)
        {
        }
        /**
         * Automatically render our core PDF fields and add styles in templates to simplify there usage for users
         *
         * @param string $html The current HTML template being processed
         * @param array  $form
         * @param array  $entry
         * @param array  $settings
         *
         * @return string
         * @since 4.0
         */
        public function autoprocess_core_template_options($html, $form, $entry, $settings)
        {
        }
        /**
         * Loads the core template styles and runs it through a filter
         *
         * @param array $entry    The Gravity Form entry being processed
         * @param array $settings The current PDF settings
         *
         * @return string
         *
         * @since 4.0
         */
        public function get_core_template_styles($settings, $entry)
        {
        }
        /**
         * Load our core PDF template settings
         *
         * @param array $settings Current PDF Settings being processed
         * @param array $form Current form being processed (added in 6.5)
         * @param array $entry Current form being processed (added in 6.5)
         *
         * @return string|WP_Error
         *
         * @since 4.0
         */
        public function load_core_template_styles($settings, $form = [], $entry = [])
        {
        }
        /**
         * Allow PDF HTML Mark-up when using wp_kses_post() during PDF generation
         *
         * @param array $tags
         *
         * @return array
         *
         * @since 5.1.1
         */
        public function allow_pdf_html($tags)
        {
        }
        /**
         * Allow PDF CSS Mark-up when using wp_kses_post() during PDF generation
         *
         * @param array $styles
         *
         * @return array
         *
         * @since 5.1.1
         */
        public function allow_pdf_css($styles)
        {
        }
        /**
         * @param array $form_data
         *
         * @return void
         *
         * @since 6.4.0
         */
        public function maybe_view_form_data($form_data)
        {
        }
    }
    /**
     * Class View_GravityForm_Settings_Markup
     *
     * @package GFPDF\View
     */
    class View_GravityForm_Settings_Markup extends \GFPDF\Helper\Helper_Abstract_View
    {
        const ENABLE_PANEL_TITLE = 1;
        const DISABLE_PANEL_TITLE = 0;
        /**
         * @var string
         */
        protected $view_type = 'GravityForms';
        /**
         * @param array $sections
         * @param bool $echo
         *
         * @return string
         */
        public function do_settings_sections($sections, $echo = false)
        {
        }
        /**
         * @param array $args
         * @param bool $echo
         *
         * @return string
         */
        public function fieldset($args, $echo = false)
        {
        }
        /**
         * @param string $id
         * @param int    $output_title
         *
         * @return string
         */
        public function do_settings_fields($id, $output_title = self::DISABLE_PANEL_TITLE)
        {
        }
        /**
         * @param string $id
         * @param int    $output_title
         *
         * @since 6.4.0
         */
        public function output_settings_fields(string $id, int $output_title = self::DISABLE_PANEL_TITLE) : void
        {
        }
        /**
         * @param $id
         *
         * @return array|mixed
         */
        public function get_section_fields($id)
        {
        }
        /**
         * @param       $section_id
         * @param array $overrides
         *
         * @return array
         */
        public function do_settings_fields_as_individual_fieldset($section_id, $overrides = [])
        {
        }
        /**
         * @param     $field
         * @param int $output_title
         * @param bool $echo
         *
         * @return bool|string|WP_Error
         */
        public function get_field_content($field, int $output_title = self::DISABLE_PANEL_TITLE, bool $echo = false)
        {
        }
        /**
         * @param $html
         *
         * @return string
         */
        public function get_tooltip_markup($html)
        {
        }
    }
    class View_System_Report extends \GFPDF\Helper\Helper_Abstract_View
    {
        /**
         * @var string
         * @since 6.0
         */
        protected $markup_yes = '<mark class="yes"><span class="dashicons dashicons-yes"></span></mark>';
        /**
         * @var string
         * @since 6.0
         */
        protected $markup_no = '<mark class="error"><span class="dashicons dashicons-no"></span></mark>';
        /**
         * @var string
         * @since 6.0
         */
        protected $markup_warning = '<mark style="color: #F15A2B"><span class="dashicons dashicons-warning"></span></mark>';
        /**
         * Set the view's name
         *
         * @var string
         *
         * @since 6.0
         */
        protected $view_type = 'SystemReport';
        /**
         * @since 6.0
         */
        public function maybe_get_active_icon(bool $results) : string
        {
        }
        /**
         * @since 6.0
         */
        public function get_icon(bool $results) : string
        {
        }
        /**
         * @param int|float $memory
         *
         * @return string
         *
         * @since 6.0
         */
        public function memory_limit_markup($memory) : string
        {
        }
        /**
         * @since 6.0
         */
        public function get_allow_url_fopen(bool $allow_url_fopen) : string
        {
        }
        /**
         * @since 6.0
         */
        public function get_temp_folder_protected(bool $is_protected) : string
        {
        }
        /**
         * Prepare message for outdated template file(s)
         *
         * @param string $path The path to the outdated PDF template file
         * @param string $template_version The current version of the outdated PDF template file
         * @param string $core_version The latest Core template version
         *
         * @since 6.0
         */
        public function get_template_check_message(string $path, string $template_version, string $core_version) : array
        {
        }
        /**
         * Prepare message on how to update outdated template file(s)
         *
         * @since 6.0
         */
        public function get_template_upgrade_message() : string
        {
        }
    }
    /**
     * Controls the Gravity PDF Actions Display
     *
     * @since 4.0
     */
    class View_Actions extends \GFPDF\Helper\Helper_Abstract_View
    {
        /**
         * Set the view's name
         *
         * @var string
         *
         * @since 4.0
         */
        protected $view_type = 'Actions';
        /**
         * Add our primary button and an opt-our dismissal button
         *
         * @param string $type        The action ID
         * @param string $button_text The primary button text
         * @param string $dismissal   Whether the dismissal button should be shown. Valid arguments are 'enabled' or 'disabled'
         *
         * @return string              The action_buttons HTML
         *
         * @since 4.0
         */
        public function get_action_buttons($type, $button_text, $dismissal = 'enabled')
        {
        }
        /**
         * Load our Core Font Installer
         *
         * @param string $type        The action ID
         * @param string $button_text The primary button text
         *
         * @return string              The notice HTML
         *
         * @since 5.0
         */
        public function core_font($type, $button_text)
        {
        }
    }
    /**
     * View_Form_Settings
     *
     * @since 4.0
     */
    class View_Form_Settings extends \GFPDF\Helper\Helper_Abstract_View
    {
        /**
         * Set the view's name
         *
         * @var string
         *
         * @since 4.0
         */
        protected $view_type = 'FormSettings';
        public function add_edit($vars)
        {
        }
    }
    /**
     * View_Settings
     *
     * A general class for About / Intro Screen
     *
     * @since 4.0
     */
    class View_Settings extends \GFPDF\Helper\Helper_Abstract_View
    {
        /**
         * Set the view's name
         *
         * @var string
         *
         * @since 4.0
         */
        protected $view_type = 'Settings';
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Abstract_Options / Helper_Options_Fields object
         * Makes it easy to access global PDF settings and individual form PDF settings
         *
         * @var Helper_Options_Fields
         *
         * @since 4.0
         */
        protected $options;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 4.0
         */
        protected $templates;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param array                            $data_cache An array of data to pass to the view
         * @param Helper_Form|Helper_Abstract_Form $gform      Our abstracted Gravity Forms helper functions
         * @param LoggerInterface                  $log        Our logger class
         * @param Helper_Abstract_Options          $options    Our options class which allows us to access any settings
         * @param Helper_Data                      $data       Our plugin data store
         * @param Helper_Misc                      $misc       Our miscellaneous class
         * @param Helper_Templates                 $templates
         *
         * @since 4.0
         */
        public function __construct(array $data_cache, \GFPDF\Helper\Helper_Abstract_Form $gform, \Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Templates $templates)
        {
        }
        /**
         * Load the Welcome Tab tabs
         *
         * @return string
         * @since 4.0
         *
         * @deprecated 6.4
         */
        public function tabs()
        {
        }
        /**
         * Display the sub menu for the global settings
         *
         * @since 6.4
         */
        public function sub_menu()
        {
        }
        /**
         * Set up our settings navigation
         *
         * @return array The navigation array
         *
         * @since 4.0
         */
        public function get_available_tabs()
        {
        }
        /**
         * Pull the general details and display
         *
         * @return void
         *
         * @since 4.0
         */
        public function general()
        {
        }
        /**
         * Pull the license details and displays
         *
         * @return void
         *
         * @since 4.2
         */
        public function license()
        {
        }
        /**
         * Display the extensions settings page
         *
         * @return void
         *
         * @since 4.2
         */
        public function extensions()
        {
        }
        /**
         * Display the help settings page
         *
         * @return void
         *
         * @since 6.0
         */
        public function help()
        {
        }
        /**
         * Pull the tools details and show
         *
         * @return void
         *
         * @since 4.0
         */
        public function tools()
        {
        }
        /**
         * Add Gravity Forms Tooltips
         *
         * @param array $tooltips The existing tooltips
         *
         * @return string
         * @since 4.0
         *
         */
        public function add_tooltips($tooltips)
        {
        }
    }
    class View_Uninstaller extends \GFPDF\Helper\Helper_Abstract_View
    {
        /**
         * Set the view's name
         *
         * @var string
         *
         * @since 6.0
         */
        protected $view_type = 'Uninstaller';
    }
}
namespace GFPDF\Helper {
    /**
     * A simple interface to standardise how actions and filters should be applied in classes
     *
     * @since 4.0
     */
    interface Helper_Interface_Config
    {
        /**
         * Classes should return a key => value array with the template settings
         * The array should be multidimensional with the top-level keys being either "core" or "fields"
         * The "core" array will allow boolean values to be passed to enable core features, such as "headers", "footers" or "backgrounds"
         * The "fields" array allows a template to load in custom fields. It is based on our \GFPDF\Helper\Helper_Abstract_Options Settings API
         * See the Helper_Options_Fields::register_settings() method for the exact fields that can be passed in
         *
         * @return array
         * @since 4.0
         *
         */
        public function configuration();
    }
    /**
     * Class Helper_Interface_Config_Settings
     *
     * @package GFPDF\Helper
     */
    interface Helper_Interface_Config_Settings
    {
        /**
         * Setter
         *
         * @since 6.0
         */
        public function set_settings(array $settings);
        /**
         * Getter
         *
         * @since 6.0
         */
        public function get_settings() : array;
    }
    /**
     * Class Helper_Abstract_Config_Settings
     *
     * @package GFPDF\Helper
     */
    abstract class Helper_Abstract_Config_Settings implements \GFPDF\Helper\Helper_Interface_Config_Settings
    {
        /**
         * @var array Holds the current PDF settings
         * @since 6.0
         */
        protected $settings = [];
        /**
         * Setter
         *
         * @since 6.0
         */
        public function set_settings(array $settings)
        {
        }
        /**
         * Getter
         *
         * @since 6.0
         */
        public function get_settings() : array
        {
        }
    }
}
namespace GFPDF\Templates\Config {
    /**
     * The configuration class name should be the same name as the PHP template file name with the following modifications:
     *     The file extension is omitted (.php)
     *     Any hyphens (-) should be replaced with underscores (_)
     *     The class name should be in sentence case (the first character of each word separated by a hyphen (-) or underscore (_) should be uppercase)
     *
     * For instance, a template called core-simple.php or core_simple.php would have a configuration class of "Core_Simple"
     *
     * This naming convention is very important, otherwise the software cannot correctly load the configuration
     *
     * @since 4.0
     */
    class Zadani extends \GFPDF\Helper\Helper_Abstract_Config_Settings implements \GFPDF\Helper\Helper_Interface_Config
    {
        /**
         * Return the templates configuration structure which control what extra fields will be shown in the "Template" tab when configuring a form's PDF.
         *
         * The fields key is based on our \GFPDF\Helper\Helper_Abstract_Options Settings API
         *
         * See the Helper_Options_Fields::register_settings() method for the exact fields that can be passed in
         *
         * @return array The array, split into core components and custom fields
         * @since 4.0
         */
        public function configuration()
        {
        }
    }
    /**
     * The configuration class name should be the same name as the PHP template file name with the following modifications:
     *     The file extension is omitted (.php)
     *     Any hyphens (-) should be replaced with underscores (_)
     *     The class name should be in sentence case (the first character of each word separated by a hyphen (-) or underscore (_) should be uppercase)
     *
     * For instance, a template called core-simple.php or core_simple.php would have a configuration class of "Core_Simple"
     *
     * This naming convention is very important, otherwise the software cannot correctly load the configuration
     *
     * @since 4.0
     */
    class Rubix extends \GFPDF\Helper\Helper_Abstract_Config_Settings implements \GFPDF\Helper\Helper_Interface_Config
    {
        /**
         * Return the templates configuration structure which control what extra fields will be shown in the "Template" tab when configuring a form's PDF.
         *
         * The fields key is based on our \GFPDF\Helper\Helper_Abstract_Options Settings API
         *
         * See the Helper_Options_Fields::register_settings() method for the exact fields that can be passed in
         *
         * @return array The array, split into core components and custom fields
         * @since 4.0
         */
        public function configuration()
        {
        }
    }
    /**
     * The configuration class name should be the same name as the PHP template file name with the following modifications:
     *     The file extension is omitted (.php)
     *     Any hyphens (-) should be replaced with underscores (_)
     *     The class name should be in sentence case (the first character of each word separated by a hyphen (-) or underscore (_) should be uppercase)
     *
     * For instance, a template called core-simple.php or core_simple.php would have a configuration class of "Core_Simple"
     *
     * This naming convention is very important, otherwise the software cannot correctly load the configuration
     *
     * @since 4.0
     */
    class Focus_Gravity extends \GFPDF\Helper\Helper_Abstract_Config_Settings implements \GFPDF\Helper\Helper_Interface_Config
    {
        /**
         * Return the templates configuration structure which control what extra fields will be shown in the "Template" tab when configuring a form's PDF.
         *
         * The fields key is based on our \GFPDF\Helper\Helper_Abstract_Options Settings API
         *
         * See the Helper_Options_Fields::register_settings() method for the exact fields that can be passed in
         *
         * @return array The array, split into core components and custom fields
         * @since 4.0
         */
        public function configuration()
        {
        }
    }
    /**
     * The configuration class name should be the same name as the PHP template file name with the following modifications:
     *     The file extension is omitted (.php)
     *     Any hyphens (-) should be replaced with underscores (_)
     *     The class name should be in sentence case (the first character of each word separated by a hyphen (-) or underscore (_) should be uppercase)
     *
     * For instance, a template called core-simple.php or core_simple.php would have a configuration class of "Core_Simple"
     *
     * This naming convention is very important, otherwise the software cannot correctly load the configuration
     *
     * @since 4.0
     */
    class Blank_Slate extends \GFPDF\Helper\Helper_Abstract_Config_Settings implements \GFPDF\Helper\Helper_Interface_Config
    {
        /**
         * Return the templates configuration structure which control what extra fields will be shown in the "Template" tab when configuring a form's PDF.
         *
         * The fields key is based on our \GFPDF\Helper\Helper_Abstract_Options Settings API
         *
         * See the Helper_Options_Fields::register_settings() method for the exact fields that can be passed in
         *
         * @return array The array, split into core components and custom fields
         * @since 4.0
         */
        public function configuration()
        {
        }
    }
    /**
     * The configuration class name should be the same name as the PHP template file name with the following modifications:
     *     The file extension is omitted (.php)
     *     Any hyphens (-) should be replaced with underscores (_)
     *     The class name should be in sentence case (the first character of each word separated by a hyphen (-) or underscore (_) should be uppercase)
     *
     * For instance, a template called core-simple.php or core_simple.php would have a configuration class of "Core_Simple"
     *
     * This naming convention is very important, otherwise the software cannot correctly load the configuration
     *
     * @since 4.0
     */
    class Legacy implements \GFPDF\Helper\Helper_Interface_Config
    {
        /**
         * Return the configuration structure.
         *
         * The fields key is based on our \GFPDF\Helper\Helper_Abstract_Options Settings API
         * See the register_settings() method for the exact fields that can be passed in
         *
         * @return array The array, split into core components and custom fields
         *
         * @since 4.0
         */
        public function configuration()
        {
        }
    }
}
namespace GFPDF\Helper {
    /**
     * @since 5.2
     */
    class Helper_Mpdf extends \GFPDF_Vendor\Mpdf\Mpdf
    {
        /**
         * Added for backwards compatibility as it was removed in mPDF 8.0
         *
         * @since 5.2
         */
        public function SetImportUse()
        {
        }
        /**
         * @param int    $pageNumber The page number.
         * @param null   $crop_x     mPDF 8.0 removed this parameter
         * @param null   $crop_y     mPDF 8.0 removed this parameter
         * @param int    $crop_w     mPDF 8.0 removed this parameter
         * @param int    $crop_h     mPDF 8.0 removed this parameter
         * @param string $boxName    The page boundary to import.
         *
         * @return string A unique string identifying the imported page.
         * @throws CrossReferenceException
         * @throws PdfParserException
         * @throws PdfTypeException
         *
         * @since 5.2
         */
        public function importPage($pageNumber = 1, $crop_x = null, $crop_y = null, $crop_w = 0, $crop_h = 0, $boxName = 'CropBox')
        {
        }
        /**
         * Draws an imported page or a template onto the page or another template.
         *
         * Omit one of the size parameters (width, height) to calculate the other one automatically in view to the aspect
         * ratio.
         *
         * @param mixed           $tpl    The template id
         * @param float|int|array $x      The abscissa of upper-left corner. Alternatively you could use an assoc array
         *                                with the keys "x", "y", "width", "height", "adjustPageSize".
         * @param float|int       $y      The ordinate of upper-left corner.
         * @param float|int|null  $width  The width.
         * @param float|int|null  $height The height.
         * @param bool            $adjustPageSize
         *
         * @return array The size
         * @see   Fpdi::getTemplateSize()
         *
         * @since 5.2
         */
        public function useTemplate($tpl, $x = 0, $y = 0, $width = null, $height = null, $adjustPageSize = false)
        {
        }
        /**
         * Write HTML code to the document
         *
         * Also used internally to parse HTML into buffers
         *
         * @param string $html
         * @param int    $mode  Use HTMLParserMode constants. Controls what parts of the $html code is parsed.
         * @param bool   $init  Clears and sets buffers to Top level block etc.
         * @param bool   $close If false leaves buffers etc. in current state, so that it can continue a block etc.
         *
         * @throws MpdfException
         * @since 5.2
         */
        public function WriteHTML($html, $mode = \GFPDF_Vendor\Mpdf\HTMLParserMode::DEFAULT_MODE, $init = true, $close = true)
        {
        }
    }
    /**
     * A simple interface to standardise how install and delete functionality is executed
     *
     * @since 4.0
     */
    interface Helper_Interface_Setup_TearDown
    {
        /**
         * This method will be triggered when a new PDF template is installed.
         * It should contain any additional install code required.
         *
         * @return void
         *
         * @since 4.1
         */
        public function setUp();
        /**
         * This method will be triggered when a PDF template is deleted.
         * It should contain any additional delete code required, like the removal
         * of non-core files (i.e anything besides the template, template image and template config)
         *
         * @return void
         *
         * @since 4.1
         */
        public function tearDown();
    }
    /**
     * Helper fields can be extended to allow each Gravity Form field type to be displayed correctly
     * We found the default GF display functionality isn't quite up to par for the Gravity PDF requirements
     *
     * @since 4.0
     */
    abstract class Helper_Abstract_Fields
    {
        /**
         * Contains the field array
         *
         * @var array|object
         *
         * @since 4.0
         */
        public $field;
        /**
         * Contains the form information
         *
         * @var array
         *
         * @since 4.0
         */
        public $form;
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        public $gform;
        /**
         * Contains the entry information
         *
         * @var array
         *
         * @since 4.0
         */
        public $entry;
        /**
         * Used to cache the $this->value() results
         *
         * @var array
         *
         * @since 4.0
         */
        protected $cached_results;
        /**
         * As come fields can have multiple field types we'll use $fieldObject to store the object
         *
         * @var object
         *
         * @since 4.0
         */
        public $fieldObject;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        public $misc;
        /**
         * Set up the object
         * Check the $entry is an array, or throw exception
         * The $field is validated in the child classes
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Echo the HTML content when calling self::html()
         *
         * @return void
         *
         * @since 6.4.0
         */
        public final function enable_output() : void
        {
        }
        /**
         * Do not echo the HTML content when calling self::html()
         *
         * @return void
         *
         * @since 6.4.0
         */
        public final function disable_output() : void
        {
        }
        /**
         * Checks if the output should be echoed or not
         *
         * @return bool
         *
         * @since 6.4.0
         */
        public final function get_output() : bool
        {
        }
        /**
         * Control the getting and setting of the cache
         *
         * @param mixed $value is passed in it will set a new cache
         *
         * @return mixed The current cached_results
         *
         * @since 4.0
         */
        public final function cache($value = null)
        {
        }
        /**
         * Check if we currently have a cache
         *
         * @return boolean True is we have a cache and false if we do not
         *
         * @since 4.0
         */
        public final function has_cache()
        {
        }
        /**
         * Reset the cache
         *
         * @since 4.0
         */
        public final function remove_cache()
        {
        }
        /**
         * Used to process the Gravity Forms value extracted from the entry array
         * Each value is then passed to the value method set up by the child objects
         *
         * @since 4.0
         */
        public final function get_value()
        {
        }
        /**
         * Return the current field label
         *
         * @return string
         *
         * @since 4.2
         */
        public final function get_label()
        {
        }
        /**
         * Used to check if the current field has a value
         *
         * @return boolean Return true if the field is empty, false if it has a value
         * @internal Child classes can override this method when dealing with a specific use case
         *
         * @since    4.0
         *
         */
        public function is_empty()
        {
        }
        /**
         * Standardised method for returning the field's correct $form_data['field'] keys
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Get the default HTML output for this field
         *
         * @param string  $value      The field value to be displayed
         * @param boolean $show_label Whether or not to show the field's label
         *
         * @return string
         * @since 4.0
         *
         */
        public function html($value = '', $show_label = true)
        {
        }
        /**
         * Used to process the Gravity Forms value extracted from the entry
         *
         * @since 4.0
         */
        public abstract function value();
        /**
         * Prevent user-data shortcodes from being processed by the PDF templates
         *
         * @param string $value The text to be converted
         *
         * @return string
         *
         * @since 4.0
         */
        public function encode_tags($value)
        {
        }
        /**
         * To avoid mPDF memory errors trying to determine the CSS specificity we will limit the field to 8 user classes
         *
         * @see https://github.com/mpdf/mpdf/issues/1753
         *
         * @return string
         *
         * @since 6.5
         */
        public function get_field_classes() : string
        {
        }
    }
    /**
     * Interface Helper_Interface_Url_Signer
     *
     * @package GFPDF\Helper
     */
    interface Helper_Interface_Url_Signer
    {
        /**
         * Sign a URL with a secret token
         *
         * @param string $url
         * @param string $expiration
         *
         * @return string
         *
         * @since 5.2
         */
        public function sign($url, $expiration);
        /**
         * Verify if the signed URL is valid
         *
         * @param string $url
         *
         * @return bool
         *
         * @since 5.2
         */
        public function verify($url);
    }
    /**
     * Class Helper_Url_Signer
     *
     * @package GFPDF\Helper
     */
    class Helper_Url_Signer implements \GFPDF\Helper\Helper_Interface_Url_Signer
    {
        /**
         * Sign a URL with a secret token
         *
         * @param string $url
         * @param string $expiration
         *
         * @return string
         *
         * @throws InvalidSignatureKey
         * @throws InvalidExpiration
         * @since 5.2
         */
        public function sign($url, $expiration)
        {
        }
        /**
         * Verify if the signed URL is valid
         *
         * @param string $url
         *
         * @return bool
         *
         * @since 5.2
         */
        public function verify($url)
        {
        }
        /**
         * Generates a random 64-character string for use as the secret key
         *
         * @return string
         *
         * @since 6.4.0
         */
        protected function generate_secret_key() : string
        {
        }
    }
    /**
     * Class Helper_Templates
     *
     * @package GFPDF\Helper
     *
     * @since   4.1
     */
    class Helper_Templates
    {
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.1
         */
        protected $log;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.1
         */
        protected $data;
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.3
         */
        protected $gform;
        /**
         * Setup our class by injecting all our dependencies
         *
         * @param LoggerInterface      $log  Our logger class
         * @param Helper_Data          $data Our plugin data store
         * @param Helper_Abstract_Form $gform
         *
         * @since 4.1
         */
        public function __construct(\Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Abstract_Form $gform)
        {
        }
        /**
         * Check if running single or multisite and return the working directory path
         *
         * @return string Path to working directory
         *
         * @since 4.1
         */
        public function get_template_path()
        {
        }
        /**
         * Check if running single or multisite and return the working directory URL
         *
         * @return string URL to working directory
         *
         * @since 4.1
         */
        public function get_template_url()
        {
        }
        /**
         * Gets the full list of available PDF templates
         *
         * @return array
         *
         * @since 4.1
         */
        public function get_all_templates()
        {
        }
        /**
         * Get a multi-dimensional array with the PDF template files
         *
         * @return array
         *
         * @since 4.1
         */
        public function get_unfiltered_template_list()
        {
        }
        /**
         * Parse our installed PDF template files
         *
         * @return array The array of templates
         *
         * @since 4.1
         */
        public function get_all_templates_by_group()
        {
        }
        /**
         * Checks if the version is compatible with Gravity PDF
         *
         * @param int|float|string $required_version The version to check against
         *
         * @return bool
         *
         * @since 4.1
         */
        public function is_template_compatible($required_version)
        {
        }
        /**
         * Appends a compatibility notice to the template name if current version of Gravity PDF isn't compatible
         *
         * @param string           $template_name    The template ID (the PDF template basename)
         * @param string|int|float $required_version The minimum required version of Gravity PDF the template needs to run
         *
         * @return string
         *
         * @since 4.1
         */
        public function maybe_add_template_compatibility_notice($template_name, $required_version)
        {
        }
        /**
         * Get template header info for all PDF templates
         *
         * @return array
         *
         * @since 4.1
         */
        public function get_all_template_info()
        {
        }
        /**
         * Get the PDF template path by the template name
         *
         * @param string  $template_id  The PDF template name/ID
         * @param boolean $include_core Whether to check in the core plugin template folder
         *
         * @return string The full path to the matching template
         *
         * @throws Exception
         *
         * @since 4.1
         */
        public function get_template_path_by_id($template_id, $include_core = true)
        {
        }
        /**
         * Get the template information based on the template file's basename (without .php)
         *
         * @param string $template_id The PDF template basename (eg. zadani)
         *
         * @return array The template information
         *
         * @since 4.1
         */
        public function get_template_info_by_id($template_id)
        {
        }
        /**
         * Get an array of the current template files on the server
         *
         * @param string $template_id
         *
         * @return array The full path to all files related to the current PDF template
         *
         * @throws Exception
         *
         * @internal This only includes the base PDF template and associated config and image files
         *           Any additional files aren't automatically cleaned up and should be removed
         *           from the PDF template configuration's tearDown() method.
         *
         * @since    4.1
         */
        public function get_template_files_by_id($template_id)
        {
        }
        /**
         * Gets the PDF template header information and returns it in a parsed format
         *
         * @param string $template_path The full path to the PDF template file
         * @param string $cache_name    The ID of the transient we should check first
         * @param int    $cache_time    How long in microseconds until the transient expires (default 1 week)
         *
         * @return array
         *
         * @since 4.1
         */
        public function get_template_info_by_path($template_path, $cache_name = '', $cache_time = 604800)
        {
        }
        /**
         * Flush the template transient cache, when required
         *
         * @since 5.1
         */
        public function flush_template_transient_cache()
        {
        }
        /**
         * The key / value parsing of the expected PDF template header in v4
         *
         * @return array
         *
         * @since 4.1
         */
        public function get_template_header_details()
        {
        }
        /**
         * Returns an array of the current PDF templates shipped with Gravity PDF
         *
         * @return array
         *
         * @since 4.1
         */
        public function get_core_pdf_templates()
        {
        }
        /**
         * Gets the full path to the template's config file (if any)
         *
         * @param string $template_id
         * @param bool   $include_core
         *
         * @return string
         *
         * @throws Exception
         *
         * @since 4.1
         */
        public function get_config_path_by_id($template_id, $include_core = true)
        {
        }
        /**
         * Attempts to load the current template configuration (if any)
         * We first look in the PDF_EXTENDED_TEMPLATE directory (in case a user has overridden the file)
         * Then we try and load the core configuration file
         *
         * @param string $template_id The template config to load
         *
         * @return object
         *
         * @since 4.1
         */
        public function get_config_class($template_id)
        {
        }
        /**
         * Load our template configuration file, if it exists
         *
         * @param string $file The file to load
         *
         * @return object
         *
         * @throws Exception
         * @since 4.1
         *
         */
        public function load_template_config_file($file)
        {
        }
        /**
         * Takes a full path to the file and converts it to the appropriate class name
         * This follows the simple rules the file basename has its hyphens and spaces are converted to underscores
         * then gets converted to sentence case using the underscore as a delimiter
         *
         * @param string $file The path to a file
         *
         * @return string
         *
         * @since 4.1
         */
        public function get_config_class_name($file)
        {
        }
        /**
         * Converts a name into something a human can more easily read
         *
         * @param string $name The string to convert
         *
         * @return string
         *
         * @since  4.1
         */
        public function human_readable_template_name($name)
        {
        }
        /**
         * Do a lookup for the current template image (if any) and return the url
         *
         * @param string $template     The template name to look for
         * @param string $type         Either 'url' or 'path'
         * @param bool   $include_core Whether to include the core PDF templates
         *
         * @return string Full URL to image
         *
         * @since 4.1
         */
        public function get_template_image($template, $type = 'url', $include_core = true)
        {
        }
        /**
         * Get the arguments array that should be passed to our PDF Template
         *
         * @param array  $form       The Gravity Form array
         * @param array  $fields     The Gravity Form fields array, with the field ID as the array key
         * @param array  $entry      Gravity Form Entry The Gravity Forms entry array
         * @param array  $form_data  The form data array, formatted form the $entry array
         * @param array  $settings   PDF Settings The current PDF settings
         * @param object $config     The current PDF template configuration class
         * @param array  $legacy_ids An array of multiple entry IDs for legacy templates only
         *
         * @return array
         *
         * @since 4.1
         */
        public function get_template_arguments($form, $fields, $entry, $form_data, $settings, $config, $legacy_ids)
        {
        }
    }
    /**
     * Class to set up the settings api callbacks
     *
     * Pulled straight from the Easy Digital Download register-settings.php file (props to Pippin and team)
     * and modified to suit our requirements
     *
     * @since 4.0
     */
    abstract class Helper_Abstract_Options implements \GFPDF\Helper\Helper_Interface_Filters
    {
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 4.0
         */
        protected $templates;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Holds our Helper_Notices object
         * which we can use to queue up admin messages for the user
         *
         * @var Helper_Notices
         *
         * @since 4.0
         */
        protected $notices;
        /**
         * Helper_Abstract_Options constructor.
         *
         * @param LoggerInterface      $log
         * @param Helper_Abstract_Form $gform
         * @param Helper_Data          $data
         * @param Helper_Misc          $misc
         * @param Helper_Notices       $notices
         * @param Helper_Templates     $templates
         *
         * @since 4.0
         */
        public function __construct(\Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Notices $notices, \GFPDF\Helper\Helper_Templates $templates)
        {
        }
        /**
         * Returns an array of registered fields
         *
         * @return array
         *
         * @since 4.0
         */
        public abstract function get_registered_fields();
        /**
         * Initialise the options API
         *
         * @return void
         *
         * @since 4.0
         */
        public function init()
        {
        }
        /**
         * Add our filters
         *
         * @return void
         *
         * @since 4.0
         */
        public function add_filters()
        {
        }
        /**
         * Get the plugin's settings from the database
         *
         * @return  void
         * @since 4.0
         *
         */
        public function set_plugin_settings()
        {
        }
        /**
         * @param array $new_settings
         *
         * @Internal This option key is managed by WordPress Settings API. You cannot store info here that isn't already registered.
         *           through $this->register_settings()
         *
         * @since    4.2
         */
        public function update_settings($new_settings)
        {
        }
        /**
         * Add all settings sections and fields
         *
         * @param array $fields Fields that should be registered
         *
         * @return void
         * @since 4.0
         *
         */
        public function register_settings($fields = [])
        {
        }
        /**
         * Update a current registered settings
         *
         * @param string $group_id     The top-level group we're updating
         * @param string $setting_id   The section group we're updating
         * @param string $option_id    The option we are updating
         * @param mixed  $option_value The new option value
         *
         * @return boolean              True on success, false on failure
         *
         * @since  4.0
         */
        public function update_registered_field($group_id, $setting_id, $option_id, $option_value)
        {
        }
        /**
         * Get Settings
         *
         * Retrieves all plugin settings
         *
         * @return array GFPDF settings
         * @since 4.0
         *
         */
        public function get_settings()
        {
        }
        /**
         * Get form settings if on that page in the admin area (by having ID and PID set in the $_GET or $_POST variables)
         * Use get_pdf( $form_id, $pdf_id ) if you want to get a particular PDF setting
         *
         * @return array The stored form settings
         *
         * @since 4.0
         */
        public function get_form_settings()
        {
        }
        /**
         * Get Form Settings
         *
         * Retrieves all form PDF settings
         *
         * @param integer $form_id The Gravity Form ID
         *
         * @return array|WP_Error An array of GFPDF settings, or WP_Error
         * @since 4.0
         *
         */
        public function get_form_pdfs($form_id)
        {
        }
        /**
         * Get pdf config
         *
         * Looks to see if the specified setting exists, returns default if not
         *
         * @param integer $form_id The Gravity Form ID
         *
         * @param string  $pdf_id  The Gravity Form PDF ID
         *
         * @return array|WP_Error
         * @since 4.0
         *
         */
        public function get_pdf($form_id, $pdf_id)
        {
        }
        /**
         * Create a new PDF configuration option for that form
         *
         * @param integer $form_id The form ID
         * @param array   $pdf     The settings array
         *
         * @return mixed
         *
         * @since 4.0
         */
        public function add_pdf($form_id, $pdf = [])
        {
        }
        /**
         * Update an pdf config
         *
         * Updates a Gravity PDF setting value in both the db and the global variable.
         * Warning: Passing in an empty, false or null string value will remove
         *          the key from the gfpdf_options array.
         *
         * @param integer         $form_id   The Gravity Form ID
         * @param string          $pdf_id    The PDF Setting ID
         * @param bool|int|string $pdf       The PDF settings array
         * @param bool            $update_db Whether we should just update the local PDF settings array, or update the DB as well
         * @param bool            $filters   Whether we should apply the update filters
         *
         * @return bool True if updated, false if not.
         * @since    4.0
         *
         */
        public function update_pdf($form_id, $pdf_id, $pdf = '', $update_db = true, $filters = true)
        {
        }
        /**
         * Remove an option
         *
         * Removes an Gravity PDF setting value in both the db and the global variable.
         *
         * @param integer $form_id The Gravity Form ID
         * @param string  $pdf_id  The Gravity Form PDF ID
         *
         * @return bool|WP_Error True if updated, false if not.
         * @since    4.0
         *
         */
        public function delete_pdf($form_id, $pdf_id)
        {
        }
        /**
         * Get a global setting option
         *
         * Looks to see if the specified setting exists, returns default if not
         *
         * @param string $key     The options key to get
         * @param bool   $default The default option value if the key isn't found
         *
         * @return mixed
         * @since 4.0
         *
         */
        public function get_option($key = '', $default = false)
        {
        }
        /**
         * Update a global setting option
         *
         * Updates a Gravity PDF setting value in both the db and the global variable.
         * Warning: Passing in an empty, false or null string value will remove
         *          the key from the gfpdf_options array.
         *
         * @param string          $key   The Key to update
         * @param string|bool|int $value The value to set the key to
         *
         * @return boolean True if updated, false if not.
         * @since 4.0
         *
         */
        public function update_option($key = '', $value = false)
        {
        }
        /**
         * Remove a global setting option
         *
         * Removes an Gravity PDF setting value in both the db and the global variable.
         *
         * @param string $key The Key to delete
         *
         * @return boolean True if updated, false if not.
         * @since 4.0
         *
         */
        public function delete_option($key = '')
        {
        }
        /**
         * Get a list of user capabilities
         *
         * @return array The array of roles available
         *
         * @since 4.0
         */
        public function get_capabilities()
        {
        }
        /**
         * Return our paper size
         *
         * @return array The array of paper sizes available
         *
         * @since 4.0
         */
        public function get_paper_size()
        {
        }
        /**
         * Parse our installed font files
         *
         * @return array The array of fonts
         *
         * @since 4.0
         */
        public function get_installed_fonts()
        {
        }
        /**
         * If any custom fonts add them to our font list
         *
         * @param array $fonts Current font list
         *
         * @return array The list of custom fonts installed in a preformatted array
         *
         * @since 4.0
         */
        public function add_custom_fonts($fonts = [])
        {
        }
        /**
         * Get a list of the custom fonts installed
         *
         * @return array
         *
         * @since 4.0
         *
         * @deprecated
         */
        public function get_custom_fonts()
        {
        }
        /**
         * Get font shortname we can use an in array
         *
         * @param string $name The font name to convert
         *
         * @since  4.0
         *
         * @deprecated
         */
        public function get_font_short_name($name) : string
        {
        }
        /**
         * Get the font's display name from the font key
         *
         * @param string $font_key The font key to search for
         *
         * @return mixed (String / Object)           The font display name or WP_Error
         *
         * @since 4.0
         *
         * @deprecated
         */
        public function get_font_display_name($font_key)
        {
        }
        /**
         * Parse our PDF privileges
         *
         * @return array The array of privilages
         *
         * @since 4.0
         */
        public function get_privilages()
        {
        }
        /**
         * Settings Sanitization
         *
         * Adds a settings error (for the updated message)
         * Run on admin options.php page
         *
         * @param array $input The value inputted in the field
         *
         * @return array $input Sanitized value
         *
         * @since 4.0
         *
         */
        public function settings_sanitize($input = [])
        {
        }
        /**
         * Sanitize text / textarea fields
         *
         * @param string $input The field value
         *
         * @return string $input Sanitized value
         * @since 4.0
         *
         */
        public function sanitize_trim_field($input)
        {
        }
        /**
         * Sanitize number fields
         *
         * @param string $input The field value
         *
         * @return string $input Sanitized value
         * @since 4.0
         *
         */
        public function sanitize_number_field($input)
        {
        }
        /**
         * Converts negative numbers to positive numbers
         *
         * @param array $input The unsanitized paper size
         *
         * @return array        The sanitized paper size
         *
         * @since 4.0
         */
        public function sanitize_paper_size($input)
        {
        }
        /**
         * Sanitize all fields depending on type
         *
         * @param mixed  $value    The field's user input value
         * @param string $key      The settings key
         * @param array  $input    All user fields
         * @param array  $settings The field settings
         *
         * @return string|array $input Sanitized value
         * @since 4.0
         *
         */
        public function sanitize_all_fields($value, $key, $input, $settings)
        {
        }
        /**
         * Sanitize all required fields
         *
         * @param mixed  $value    The field's user input value
         * @param string $key      The settings key
         * @param array  $input    All user fields
         * @param array  $settings The field settings
         *
         * @return string $input Sanitized value
         * @since 4.0
         *
         */
        public function sanitize_required_field($value, $key, $input, $settings)
        {
        }
        /**
         * Gets the correct option value based on the field type
         *
         * @param array $args The field articles
         *
         * @return string|array       The current value for that particular field
         *
         * @since  4.0
         */
        public function get_form_value($args = [])
        {
        }
        /**
         * Checkbox Callback
         *
         * Renders checkboxes.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function checkbox_callback($args)
        {
        }
        /**
         * Multicheck Callback
         *
         * Renders multiple checkboxes.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function multicheck_callback($args)
        {
        }
        /**
         * Radio Callback
         *
         * Renders radio boxes.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function radio_callback($args)
        {
        }
        /**
         * Text Callback
         *
         * Renders text fields.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function text_callback($args)
        {
        }
        /**
         * License Callback
         *
         * Renders a license field.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.2
         *
         */
        public function license_callback($args)
        {
        }
        /**
         * Number Callback
         *
         * Renders number fields.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function number_callback($args)
        {
        }
        /**
         * Textarea Callback
         *
         * Renders textarea fields.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function textarea_callback($args)
        {
        }
        /**
         * Password Callback
         *
         * Renders password fields.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function password_callback($args)
        {
        }
        /**
         * Select Callback
         *
         * Renders select fields.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function select_callback($args)
        {
        }
        /**
         * Build our option groups for the select box
         *
         * @param array        $options The list of options that should be displayed
         * @param array|string $value   The selected option
         * @param bool         $echo    To output or echo the content
         *
         * @return string|void
         *
         * @since 4.1
         */
        public function build_options_for_select($options, $value, $echo = false)
        {
        }
        /**
         * Rich Editor Callback
         *
         * Renders rich editor fields.
         *
         * @param array  $args       Arguments passed by the setting
         *
         * @since 4.0
         *
         * @global float $wp_version The WordPress Version
         */
        public function rich_editor_callback($args)
        {
        }
        /**
         * Upload Callback
         *
         * Renders upload fields.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function upload_callback($args)
        {
        }
        /**
         * Color picker Callback
         *
         * Renders color picker fields.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function color_callback($args)
        {
        }
        /**
         * Add a button callback.
         *
         * Renders a button onto the settings field.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function button_callback($args)
        {
        }
        /**
         * @param $args
         *
         * @since 6.0
         */
        public function toggle_callback($args)
        {
        }
        /**
         * Gravity Forms Conditional Logic Callback
         *
         * Renders the GF Conditional logic container
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function conditional_logic_callback($args)
        {
        }
        /**
         * Render a hidden field
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function hidden_callback($args)
        {
        }
        /**
         * Render the custom paper size functionality
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function paper_size_callback($args)
        {
        }
        /**
         * Descriptive text callback.
         *
         * Renders descriptive text onto the settings field.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function descriptive_text_callback($args)
        {
        }
        /**
         * Hook Callback
         *
         * Adds a do_action() hook in place of the field
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function hook_callback($args)
        {
        }
        /**
         * Missing Callback
         *
         * If a public function is missing for settings callbacks alert the user.
         *
         * @param array $args Arguments passed by the setting
         *
         * @return void
         * @since 4.0
         *
         */
        public function missing_callback($args)
        {
        }
        /**
         * Creates jQuery toggle functionality for the current field
         *
         * @param String $toggle The text to be used in the toggle
         * @param String $html   The field HTML
         * @param String $value  Whether the field currently has a value
         *
         * @return String         The modified HTML
         */
        public function create_toggle_input($toggle, $html, $value)
        {
        }
        /**
         * Creates jQuery toggle functionality for the current field
         *
         * @param string $toggle The text to be used in the toggle
         * @param string $value  Whether the field currently has a value
         *
         * @return void
         *
         * @since 6.4
         */
        public function start_toggle_input($toggle, $value)
        {
        }
        /**
         * Close the toggle input container
         *
         * @return void
         *
         * @since 6.4
         */
        public function end_toggle_input()
        {
        }
    }
    /**
     * A simple abstract class controllers can extent to share similar variables
     *
     * @since 4.0
     */
    class Helper_PDF_List_Table extends \WP_List_Table
    {
        /**
         * Our Gravity Form array
         *
         * @var array
         *
         * @since 4.0
         */
        public $form;
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 4.0
         */
        protected $templates;
        /**
         * Setup our class with appropriate data
         *
         * @param array                $form  The Gravity Forms object
         * @param Helper_Abstract_Form $gform Our abstracted Gravity Forms API
         * @param Helper_Misc          $misc
         * @param Helper_Templates     $templates
         *
         * @since    4.0
         */
        public function __construct($form, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Templates $templates)
        {
        }
        /**
         * Return the columns that should be used in the list table
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * Get the name of the default primary column.
         *
         * @return string Name of the default primary column, in this case, 'name'
         *
         * @since 4.0
         */
        protected function get_default_primary_column_name()
        {
        }
        /**
         * Prepares the list of items for displaying.
         *
         * @since 4.0
         */
        public function prepare_items()
        {
        }
        /**
         * Display our table
         *
         * @since 4.0
         */
        public function display()
        {
        }
        /**
         * Output the single table row
         *
         * @param object $item The table row being processed
         *
         * @since 4.0
         */
        public function single_row($item)
        {
        }
        /**
         * Default column handler
         *
         * Used when no public method exists for the column being processed
         * For developers who want to include additional columns using the `gfpdf_pdf_list_columns` filter
         * there's also an action you can tap into to output the correct column information
         *
         * @param array  $item The table row being processed
         *
         * @param string $column
         *
         * @since 4.0
         */
        public function column_default($item, $column)
        {
        }
        /**
         * Custom public function for displaying the 'cb' column
         * Used to handle active / inactive PDFs
         *
         * @param array $item The table row being processed
         *
         * @since 4.0
         */
        public function column_cb($item)
        {
        }
        /**
         * Custom public function for displaying the 'notifications' column
         * Display comma separated list of active notifications, otherwise display 'None'
         *
         * @param array $item The table row being processed
         *
         * @since 4.0
         */
        public function column_notifications($item)
        {
        }
        /**
         * Translates the template raw name to a user-friendly name
         *
         * @param array $item The table row being processed
         *
         * @since 4.0
         */
        public function column_shortcode($item)
        {
        }
        /**
         * Translates the template raw name to a user-friendly name
         *
         * @param array $item The table row being processed
         *
         * @since 4.0
         */
        public function column_template($item)
        {
        }
        /**
         * Add column actions to allow edit, duplication and deletion
         *
         * @param array $item The table row being processed
         *
         * @since 4.0
         */
        public function column_name($item)
        {
        }
        /**
         * Copy to display when no PDF configuration options exist
         *
         * @since 4.0
         */
        public function no_items()
        {
        }
    }
    /**
     * @since 4.3
     */
    trait Helper_Trait_Logger
    {
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.3
         */
        protected $logger;
        /**
         * @param LoggerInterface $log
         *
         * @since 4.3
         */
        public function set_logger(\Psr\Log\LoggerInterface $log)
        {
        }
        /**
         * @return LoggerInterface
         *
         * @since 4.3
         */
        public function get_logger()
        {
        }
    }
    /**
     * Abstract class to abstract some of the Gravity Forms functionality
     *
     * @since 4.0
     */
    abstract class Helper_Abstract_Form
    {
        /**
         * Get the form plugins current version
         *
         * @return string
         *
         * @since 4.0
         */
        public abstract function get_version();
        /**
         * Get form plugin's path
         *
         * @return string
         *
         * @since 4.0
         */
        public abstract function get_plugin_path();
        /**
         * Get form plugin's URL
         *
         * @return string
         *
         * @since 4.0
         */
        public abstract function get_plugin_url();
        /**
         * Get form plugin's form array
         *
         * @param integer $form_id
         *
         * @return mixed
         *
         * @since 4.0
         */
        public abstract function get_form($form_id);
        /**
         * Get form plugin's current forms array
         *
         * @return mixed
         *
         * @since 4.0
         */
        public abstract function get_forms();
        /**
         * Get form plugin's form array
         *
         * @param array|object $form The form object to be updated
         *
         * @return mixed
         *
         * @since 4.0
         */
        public abstract function update_form($form);
        /**
         * Get the entry based on the ID
         *
         * @param integer $entry_id
         *
         * @return mixed
         *
         * @since 4.0
         */
        public abstract function get_entry($entry_id);
        /**
         * Get multiple entries from multiple forms based on search criteria
         *
         * @param integer|array $form_ids        The ID's of the form or an array of ideas.
         * @param array         $search_criteria An array containing the search criteria
         * @param array|null    $sorting         An array containing the sort criteria
         * @param array|null    $paging          Use to limit the number of entries returned
         *
         * @return mixed
         *
         * @since 4.0
         */
        public abstract function get_entries($form_ids, $search_criteria = [], $sorting = null, $paging = null);
        /**
         * Update the current entry object
         *
         * @param object $entry The entry to be updated
         *
         * @return mixed
         *
         * @since 4.0
         */
        public abstract function update_entry($entry);
        /**
         * Get all custom form plugin capabilities added to WordPress, if any
         *
         * @return array
         *
         * @since 4.0
         */
        public abstract function get_capabilities();
        /**
         * Check if the user has the capability passed
         *
         * @param string       $capability
         * @param integer|null $user_id
         *
         * @return boolean            True if successful, false if failed
         *
         * @since 4.0
         */
        public abstract function has_capability($capability, $user_id = null);
        /**
         * Replace all the tag fields (that represent the field data) in the string
         *
         * @param string $string The string to process
         * @param array  $form   The Gravity Form array
         * @param array  $entry  The Gravity Form Entry Array
         *
         * @return string
         *
         * @since 4.0
         */
        public abstract function process_tags($string, $form, $entry);
    }
    /**
     * Class Helper_Pdf_Queue
     *
     * @package GFPDF\Helper
     */
    class Helper_Pdf_Queue extends \GF_Background_Process
    {
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 5.0
         */
        protected $log;
        /**
         * @var string
         *
         * @since 5.0
         */
        protected $action = 'gravitypdf';
        /**
         * Helper_Pdf_Queue constructor.
         *
         * @param LoggerInterface $log
         *
         * @since 4 .4
         */
        public function __construct(\Psr\Log\LoggerInterface $log)
        {
        }
        /**
         * Add a getter for the stored async data
         *
         * @return array
         *
         * @since 5.0
         */
        public function get_data()
        {
        }
        /**
         * Process our PDF queue as a background process
         *
         * @param array $callbacks [ 'func' => callback, 'args' => array ]
         *
         * @return array|false Return false if our queue has completed, otherwise return the remaining callbacks
         *
         * @since 5.0
         */
        public function task($callbacks)
        {
        }
    }
    /**
     * @since 4.0
     */
    class Helper_PDF
    {
        /**
         * Holds our PDF Object
         *
         * @var Mpdf
         *
         * @since 4.0
         */
        protected $mpdf;
        /**
         * Holds our Gravity Form array
         *
         * @var array
         *
         * @since 4.0
         */
        protected $form;
        /**
         * Holds our Gravity Form Entry Details
         *
         * @var array
         *
         * @since 4.0
         */
        protected $entry;
        /**
         * Holds our PDF Settings
         *
         * @var array
         *
         * @since 4.0
         */
        protected $settings;
        /**
         * Controls how the PDF should be output.
         * Whether to display it in the browser, force a download, or save it to disk
         *
         * @var string
         *
         * @since 4.0
         */
        protected $output = 'DISPLAY';
        /**
         * Holds the predetermined paper size
         *
         * @var string|array
         *
         * @since 4.0
         */
        protected $paper_size;
        /**
         * Holds our paper orientation in mPDF flavour
         *
         * @var string
         *
         * @since 4.0
         */
        protected $orientation;
        /**
         * Holds the full path to the PHP template to load
         *
         * @var string
         *
         * @since 4.0
         */
        protected $template_path;
        /**
         * Holds the PDF filename that should be used
         *
         * @var string
         *
         * @since 4.0
         */
        protected $filename = 'document.pdf';
        /**
         * Holds the path the PDF should be saved to
         *
         * @var string
         *
         * @since 4.0
         */
        protected $path;
        /**
         * Whether to force the print dialog when the PDF is opened
         *
         * @var boolean
         *
         * @since 4.0
         */
        protected $print = false;
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Holds our Helper_Misc object
         * Makes it easy to access common methods throughout the plugin
         *
         * @var Helper_Misc
         *
         * @since 4.0
         */
        protected $misc;
        /**
         * Holds our Helper_Templates object
         * used to ease access to our PDF templates
         *
         * @var Helper_Templates
         *
         * @since 4.0
         */
        protected $templates;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 5.0
         */
        protected $log;
        /**
         * Initialise our class
         *
         * @param array                $entry    The Gravity Form Entry to be processed
         * @param array                $settings The Gravity PDF Settings Array
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Data          $data
         * @param Helper_Misc          $misc
         * @param Helper_Templates     $templates
         * @param LoggerInterface      $log
         *
         * @since 4.0
         */
        public function __construct($entry, $settings, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Data $data, \GFPDF\Helper\Helper_Misc $misc, \GFPDF\Helper\Helper_Templates $templates, \Psr\Log\LoggerInterface $log)
        {
        }
        /**
         * A public method to start our PDF creation process
         *
         * @return void
         *
         * @throws Exception
         * @since 4.0
         */
        public function init()
        {
        }
        /**
         * Render the HTML to our PDF
         *
         * @param array  $args Any arguments that should be passed to the PDF template
         * @param string $html By pass the template  file and pass in a HTML string directly to the engine. Optional.
         *
         * @return void
         *
         * @throws MpdfException
         * @throws Exception
         * @since 4.0
         */
        public function render_html($args = [], $html = '')
        {
        }
        /**
         * Create the PDF
         *
         * @return string
         *
         * @throws MpdfException
         * @since 4.0
         */
        public function generate()
        {
        }
        /**
         * Save the PDF to our tmp directory
         *
         * @param string $raw_pdf_string The generated PDF to be saved
         *
         * @return string|boolean The full path to the file or false if failed
         *
         * @throws Exception
         *
         * @since  4.0
         */
        public function save_pdf($raw_pdf_string)
        {
        }
        /**
         * Get the correct path to the PHP template we should load into mPDF
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function set_template()
        {
        }
        /**
         * Gets the current directory template files are being included from.
         * This is set in the set_template() method
         *
         * @return string
         *
         * @since 4.0
         */
        public function get_template_path()
        {
        }
        /**
         * Public endpoint to allow users to control how the generated PDF will be displayed
         *
         * @param string $type Only display, download or save options are valid
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function set_output_type($type)
        {
        }
        /**
         * Get the current PDF output type as per the set_output_type() method.
         *
         * @return string
         *
         * @since 4.0
         */
        public function get_output_type()
        {
        }
        /**
         * Set the PDF meta data, including title, author, creator and subject
         *
         * @since 4.0
         */
        protected function set_metadata()
        {
        }
        /**
         * Public Method to mark the PDF document creator
         *
         * @param string $text The PDF Creator
         *
         * @since 4.0
         */
        public function set_creator($text = '')
        {
        }
        /**
         * Public Method to set how the PDF should be displayed when first open
         *
         * @param mixed  $mode   A string or integer setting the zoom mode
         * @param string $layout The PDF layout format
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function set_display_mode($mode = 'fullpage', $layout = 'continuous')
        {
        }
        /**
         * Public Method to allow the print dialog to be display when PDF is opened
         *
         * @param boolean $print Whether the PDF should open the print dialog every time the PDF is opened
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function set_print_dialog($print = true)
        {
        }
        /**
         * Generic PDF JS Setter function
         *
         * @param string $js The PDF Javascript to execute
         *
         * @since 4.0
         */
        public function set_JS($js)
        {
        }
        /**
         *
         * Get the current Gravity Form Entry
         *
         * @return array
         * @since 4.0
         */
        public function get_entry()
        {
        }
        /**
         * Get the current PDF Settings
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_settings()
        {
        }
        /**
         * Get the current PDF Name
         *
         * @return string
         *
         * @since 4.0
         */
        public function get_filename()
        {
        }
        /**
         * Generate the PDF filename used
         *
         * @param string $filename The PDF filename you want to use
         *
         * @since 4.0
         */
        public function set_filename($filename)
        {
        }
        /**
         * Get the current PDF path
         *
         * @return string
         *
         * @since 4.0
         */
        public function get_path()
        {
        }
        /**
         * Sets the path the PDF should be saved to
         *
         * @param string $path
         *
         * @return void
         *
         * @since 4.0
         */
        public function set_path($path = '')
        {
        }
        /**
         * Gets the absolute path to the PDF
         *
         * Works with our legacy Tier 2 add-on without adding a filter because we have stuck with the same naming convention
         *
         *
         * @return string The full path and filename of the PDF
         *
         * @since 4.0
         */
        public function get_full_pdf_path()
        {
        }
        /**
         * Initialise our mPDF object
         *
         * @return void
         *
         * @throws MpdfException
         * @since 4.0
         */
        protected function begin_pdf()
        {
        }
        /**
         * @return Mpdf
         */
        public function get_pdf_class()
        {
        }
        /**
         * Set up the paper size and orientation
         *
         * @throws Exception
         *
         * @since 4.0
         */
        protected function set_paper()
        {
        }
        /**
         * Set our paper size using pre-defined values
         *
         * @param string $size The paper size to be set
         *
         * @since 4.0
         */
        protected function set_paper_size($size)
        {
        }
        /**
         * Set our custom paper size which will be a 2-key array signifying the
         * width and height of the paper stock
         *
         * @throws Exception
         *
         * @since 4.0
         */
        protected function set_custom_paper_size()
        {
        }
        /**
         * Ensure the custom paper size has the correct values
         *
         * @param array $size
         *
         * @return array
         *
         * @since  4.0
         */
        protected function get_paper_size($size)
        {
        }
        /**
         * Set the page orientation based on the paper size selected
         *
         * @param boolean $custom Whether a predefined paper size was used, or a custom size
         *
         * @return void
         *
         * @since 4.0
         */
        protected function set_orientation($custom = false)
        {
        }
        /**
         * Load our PHP template file and return the buffered HTML
         *
         * @param array $args Any arguments that should be passed to the PDF template file
         *
         * @return string The buffered HTML to pass into mPDF
         *
         * @since 4.0
         */
        protected function load_html($args = [])
        {
        }
        /**
         * Allow site admins to view the RAW HTML if needed
         *
         * @param string $html The HTML that should be output to the browser
         *
         * @return void
         *
         * @since 4.0
         */
        protected function maybe_display_raw_html($html)
        {
        }
        /**
         * Prompt the print dialog box
         *
         * @return void
         *
         * @since 4.0
         */
        protected function show_print_dialog()
        {
        }
        /**
         * Sets the image DPI in the PDF
         *
         * @return void
         *
         * @since 4.0
         */
        protected function set_image_dpi()
        {
        }
        /**
         * Sets the text direction in the PDF (RTL support)
         *
         * @return void
         *
         * @since 4.0
         */
        protected function set_text_direction()
        {
        }
        /**
         * Set the correct PDF Format
         * Normal, PDF/A-1b or PDF/X-1a
         *
         * @return void
         *
         * @since 4.0
         */
        protected function set_pdf_format()
        {
        }
        /**
         * Add PDF Security, if able
         *
         * @return void
         *
         * @since 4.0
         */
        protected function set_pdf_security()
        {
        }
        /**
         * Ensure the PDF doesn't get cached
         *
         * @since 4.0
         */
        protected function prevent_caching()
        {
        }
    }
    /**
     * @since 4.0
     *
     * @property string  $short_title                     The plugin's short title used with Gravity Forms
     * @property string  $title                           The plugin's main title used with Gravity Forms
     * @property string  $slug                            The plugin's slug used with Gravity Forms
     * @property boolean $is_installed                    If the plugin has been successfully installed
     * @property string  $permalink                       The plugin's PDF permalink regex
     * @property string  $working_folder                  The plugin's working directory name
     * @property string  $settings_url                    The plugin's URL to the settings page
     * @property string  $memory_limit                    The current PHP memory limit
     * @property string  $upload_dir                      The current path to the WP upload directory
     * @property string  $upload_dir_url                  The current URL to the WP upload directory
     * @property string  $store_url                       The URL of our online store
     * @property array   $form_settings                   A cache of the current form's PDF settings
     * @property array   $addon                           An array of current active / registered add-ons
     * @property string  $template_location               The current path to the PDF working directory
     * @property string  $template_location_url           The current URL to the PDF working directory
     * @property string  $template_font_location          The current path to the PDF font directory
     * @property string  $template_tmp_location           The current path to the PDF tmp location
     * @property string  $mpdf_tmp_location               The current path to the mPDF tmp directory (including fonts)
     * @property string  $multisite_template_location     The current path to the multisite PDF working directory
     * @property string  $multisite_template_location_url The current URL to the multisite PDF working directory
     * @property string  $template_transient_cache        The ID for the template header transient cache
     * @property bool    $allow_url_fopen                 The current PHP allow_url_fopen ini setting status
     *
     */
    class Helper_Data
    {
        /**
         * @since 6.0
         */
        public const REST_API_BASENAME = 'gravity-pdf/';
        /**
         * PHP Magic Method __set()
         * Run when writing data to inaccessible properties
         *
         * @param string $name  Name of the property being interacted with
         * @param mixed  $value Data to assign to the $name property
         *
         * @since 4.0
         */
        public function __set($name, $value)
        {
        }
        /**
         * PHP Magic Method __get()
         * Run when reading data from inaccessible properties
         *
         * @param string $name Name of the property being interacted with
         *
         * @return mixed        The data assigned to the $name property is returned
         *
         * @throws \Exception
         *
         * @since 4.0
         */
        public function &__get($name)
        {
        }
        /**
         * PHP Magic Method __isset()
         * Triggered when isset() or empty() is called on inaccessible properties
         *
         * @param string $name Name of the property being interacted with
         *
         * @return boolean       Whether property exists
         *
         * @since 4.0
         */
        public function __isset($name)
        {
        }
        /**
         * PHP Magic Method __isset()
         * Triggered when unset() is called on inaccessible properties
         *
         * @param string $name Name of the property being interacted with
         *
         * @return void
         *
         * @since 4.0
         */
        public function __unset($name)
        {
        }
        /**
         * Set up any default data that should be stored
         *
         * @return void
         *
         * @since 3.8
         */
        public function init()
        {
        }
        /**
         * Set up our short title, long title and slug used in settings pages
         *
         * @return  void
         *
         * @since  4.0
         */
        public function set_plugin_titles()
        {
        }
        /**
         * Set up addon array for use tracking active addons
         *
         * @since 3.8
         */
        public function set_addon_details()
        {
        }
        /**
         * Gravity PDF add-ons should register their details with this method so we can handle the licensing centrally
         *
         * @param Helper_Abstract_Addon $class The plugin bootstrap class
         *
         * @since 4.2
         */
        public function add_addon(\GFPDF\Helper\Helper_Abstract_Addon $class)
        {
        }
        public function addon_license_responses($addon_name)
        {
        }
        /**
         * A key-value array to be used in a localized script call for our Gravity PDF javascript files
         *
         * @param Helper_Abstract_Options $options
         * @param Helper_Abstract_Form    $gform
         *
         * @return array
         *
         * @since  4.0
         */
        public function get_localised_script_data(\GFPDF\Helper\Helper_Abstract_Options $options, \GFPDF\Helper\Helper_Abstract_Form $gform)
        {
        }
    }
    /**
     * Class Helper_Sha256_Url_Signer
     *
     * @package GFPDF\Helper
     */
    class Helper_Sha256_Url_Signer extends \GFPDF_Vendor\Spatie\UrlSigner\BaseUrlSigner
    {
        /**
         * Generate a token to identify the secure action.
         *
         * @param string $url
         * @param string $expiration
         *
         * @return string
         */
        protected function createSignature($url, $expiration)
        {
        }
    }
    /**
     * @since 4.0
     */
    class Helper_Singleton
    {
        /**
         * Add the already-initialised class to our singleton data store for later use
         *
         * @param object $class
         *
         * @since 4.0
         */
        public function add_class($class)
        {
        }
        /**
         * Retrieve the desired class
         *
         * @param string $name
         *
         * @return object|bool
         *
         * @since 4.0
         *
         */
        public function get_class($name)
        {
        }
    }
    /**
     * @since 4.0
     */
    class Helper_Field_Container
    {
        /**
         * Holds the current width of our container based on the field passed in
         * The value is out of 100
         *
         * @var integer
         *
         * @since 4.0
         */
        protected $current_width = 0;
        /**
         * Boolean value to tell if the element is currently opened
         *
         * @var boolean
         *
         * @since 4.0
         */
        protected $currently_open = false;
        /**
         * Matches class names to width percentages
         *
         * @var array
         *
         * @since 4.0
         */
        protected $class_map = ['gf_left_half' => 50, 'gf_right_half' => 50, 'gf_left_third' => 33.3, 'gf_middle_third' => 33.3, 'gf_right_third' => 33.3, 'gf_first_quarter' => 25, 'gf_second_quarter' => 25, 'gf_third_quarter' => 25, 'gf_fourth_quarter' => 25];
        /**
         * The HTML tag used when opening the container
         *
         * @var string
         *
         * @since 4.0
         */
        protected $open_tag = '<div class="row-separator">';
        /**
         * The HTML tag used when closing the container
         *
         * @var string
         *
         * @since 4.0
         */
        protected $close_tag = '</div>';
        /**
         * Whether to enable/disable the faux column feature
         *
         * @var bool
         *
         * @since 5.0
         */
        protected $faux_column = true;
        /**
         * The Gravity Form fields we should not wrap in a container
         *
         * @var array
         *
         * @since 4.0
         */
        protected $skip_fields = ['page', 'section', 'html'];
        /**
         * Classes which will automatically begin a new row
         *
         * @var array
         *
         * @since 4.2
         */
        protected $row_stopper_classes = ['pagebreak'];
        /**
         * Holds the number of times a new row has been open
         *
         * @var int
         *
         * @since 4.0
         */
        protected $counter = 0;
        /**
         * Set up the object
         *
         * @param array $config Allow user to override the open / close tag and which fields are skipped
         *
         * @since 4.0
         */
        public function __construct($config = [])
        {
        }
        /**
         * Handles the opening and closing of our container
         *
         * @param GF_Field $field The Gravity Form field currently being processed
         *
         * @return void
         *
         * @since 4.0
         */
        public function generate(\GF_Field $field)
        {
        }
        /**
         * Close the current container if still open.
         * This is usually called publicly after the form loop
         *
         * @return void
         *
         * @since 4.0
         */
        public function close()
        {
        }
        /**
         * Will check if the current field will fit in the open row, or if a new row needs to be open
         * to accommodate the field.
         *
         * @param GF_Field $field The Gravity Form field currently being processed
         *
         * @return boolean
         *
         * @since 4.0
         */
        public function does_fit_in_row(\GF_Field $field)
        {
        }
        /**
         * Output placeholder HTML if empty or hidden field is part of CSS Ready Class columns
         * and the row is currently open and the field will fit in that row without opening another row
         *
         * @param GF_Field $field The Gravity Form field currently being processed
         *
         * @return void
         */
        public function maybe_display_faux_column(\GF_Field $field)
        {
        }
        /**
         * Open the container
         *
         * @param GF_Field $field The Gravity Form field currently being processed
         *
         * @return void
         *
         * @since 4.0
         */
        protected function handle_closed_container(\GF_Field $field)
        {
        }
        /**
         * Determine if we should close a container based on its classes
         *
         * @param GF_Field $field The Gravity Form field currently being processed
         *
         * @return void
         *
         * @since 4.0
         */
        protected function handle_open_container(\GF_Field $field)
        {
        }
        /**
         * Process our skipped Gravity Form fields (close the container if needed)
         *
         * @param GF_Field $field The Gravity Form field currently being processed
         *
         * @return boolean true if we processed a skipped field, false otherwise
         *
         * @since 4.0
         */
        protected function process_skipped_fields(\GF_Field $field)
        {
        }
        /**
         * Remove any mapped classes from our skipped fields
         *
         * @param GF_Field $field The Gravity Form field currently being processed
         *
         * @return void
         *
         * @since  4.0
         */
        protected function strip_field_of_any_classmaps(\GF_Field $field)
        {
        }
        /**
         * Output the open tag
         *
         * @return void
         *
         * @since 4.0
         */
        protected function open_container()
        {
        }
        /**
         * Output the close tag
         *
         * @return void
         *
         * @since 4.0
         */
        protected function close_container()
        {
        }
        /**
         * Mark our class as currently being open
         *
         * @return void
         *
         * @since 4.0
         */
        protected function start()
        {
        }
        /**
         * Reset our class back to its original state
         *
         * @return void
         *
         * @since 4.0
         */
        protected function reset()
        {
        }
        /**
         * Increment our current field width
         *
         * @param string $classes The field classes
         *
         * @return void
         *
         * @since  4.0
         */
        protected function increment_width($classes)
        {
        }
        /**
         * Loop through all classes and return our class map if found, or 100
         *
         * @param String $classes The field classes
         *
         * @return integer The field width based on assigned class
         *
         * @since  4.0
         */
        protected function get_field_width($classes)
        {
        }
        /**
         * Checks if the row counter is currently odd or even
         *
         * @return string
         *
         * @since 4.0
         */
        protected function is_row_odd_or_even()
        {
        }
        /**
         * Increases the internal row counter
         *
         * @return void
         *
         * @since 4.0
         */
        protected function increment_row_counter()
        {
        }
        /**
         * Get a list of classes assigned to the field
         *
         * @param string $classes
         *
         * @return array
         *
         * @since 4.2
         */
        protected function get_field_classes($classes)
        {
        }
        /**
         * Check if the field has a row stopping class
         *
         * @param GF_Field $field
         *
         * @return bool
         *
         * @since 4.2
         */
        protected function does_field_have_stopper_class(\GF_Field $field)
        {
        }
    }
    /**
     * @since 4.0
     */
    class Helper_Field_Container_Void extends \GFPDF\Helper\Helper_Field_Container
    {
        /*
         * Empty method easily disables Helper_Field_Container functionality
         *
         * @return void
         *
         * @since 4.0
         */
        public function generate(\GF_Field $field)
        {
        }
        /**
         * Empty method easily disables Helper_Field_Container functionality
         *
         * @return void
         *
         * @since 4.0
         */
        public function close()
        {
        }
        /**
         * Empty method easily disables Helper_Field_Container functionality
         *
         * @param GF_Field $field
         *
         * @return void
         *
         * @since 4.0
         */
        public function does_fit_in_row(\GF_Field $field)
        {
        }
        /**
         * Empty method easily disables Helper_Field_Container functionality
         *
         * @param GF_Field $field
         *
         * @return void
         *
         * @since 4.0
         */
        public function maybe_display_faux_column(\GF_Field $field)
        {
        }
    }
    /**
     * An abstract class to assist with logging
     */
    class Helper_Logger
    {
        /**
         * @var string
         *
         * @since 4.2
         */
        protected $slug;
        /**
         * @var string
         *
         * @since 4.2
         */
        protected $name;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.2
         */
        protected $log;
        /**
         * Helper_Logger constructor.
         *
         * @param string $slug
         * @param string $name
         *
         * @since 4.2
         */
        public function __construct($slug, $name)
        {
        }
        /**
         * Returns the logger instance, and initiates it if needed
         *
         * @return Logger
         *
         * @since 4.2
         */
        public function get_logger()
        {
        }
        /**
         * Register our plugin with Gravity Form's Logger
         *
         * @param array $loggers
         *
         * @return array
         *
         * @since 4.2
         */
        public function register_logger_with_gf($loggers)
        {
        }
        /**
         * Initialise our logging class (we're using Monolog instead of Gravity Form's KLogger)
         * and set up appropriate handlers based on the logger settings
         *
         * @return void
         *
         * @since 4.2
         */
        protected function setup_logger()
        {
        }
        /**
         * Setup Gravity Forms logging, if currently enabled by the user
         *
         * @return void
         *
         * @since 4.2
         */
        protected function setup_gravityforms_logging()
        {
        }
    }
    /**
     * Helper fields can be extended to allow each Gravity Form field type to be displayed correctly
     * We found the default GF display functionality isn't quite up to par for the Gravity PDF requirements
     *
     * @since 4.0
     */
    abstract class Helper_Abstract_Field_Products extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Our products class which handles all Gravity Form products fields in bulk
         *
         * @var Field_Products
         */
        protected $products;
        /**
         * Store our products class for later user
         *
         * @param Field_Products $products
         *
         * @since 4.3
         */
        public function set_products(\GFPDF\Helper\Fields\Field_Products $products)
        {
        }
        /**
         * @return Field_Products
         *
         * @since 4.3
         */
        public function get_products()
        {
        }
        /**
         * Prepare the product field form data fields
         *
         * @param string $name
         * @param string $value
         *
         * @return array
         *
         * @since 4.3
         */
        protected function set_form_data($name, $value)
        {
        }
    }
    /**
     * @since 4.0
     */
    class Helper_QueryPath extends \GFPDF_Vendor\QueryPath\QueryPath
    {
        /**
         * Parse HTML5 documents as strings
         *
         * This uses HTML5-PHP to parse the document. In actuality, this parser does
         * a fine job with pre-HTML5 documents in most cases, though really old HTML
         * (like 2.0) may have some substantial quirks.
         *
         * @param mixed       $html     A document as a HTML string.
         *
         * @param string      $selector A CSS3 selector.
         *
         * @param array       $options
         *                              An associative array of options, which is passed on into HTML5-PHP. Note
         *                              that the standard QueryPath options may be ignored for this function,
         *                              since it uses a different parser.
         *
         * @return DomQuery
         *
         * @throws QueryPath\Exception
         * @since 4.0.3
         */
        public function html5($html = '', $selector = '', $options = [])
        {
        }
    }
}
namespace GFPDF\Helper\Fields {
    /**
     * @since 4.3
     */
    class Field_Shipping extends \GFPDF\Helper\Helper_Abstract_Field_Products
    {
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.3
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.3
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since    4.3
         */
        public function value()
        {
        }
    }
    /**
     * @since 4.3
     */
    class Field_Discount extends \GFPDF\Helper\Helper_Abstract_Field_Products
    {
        /**
         * @return bool
         *
         * @since 4.3
         */
        public function is_empty()
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.3
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.3
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since    4.3
         *
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Time extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Default extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Survey extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Used to check if the current field has a value
         *
         * @since    4.0
         */
        public function is_empty()
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         *
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * @since 4.3
     */
    class Field_Quantity extends \GFPDF\Helper\Helper_Abstract_Field_Products
    {
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.3
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.3
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string
         *
         * @since    4.3
         *
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Fileupload extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Products extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Checks if the form has any products
         *
         * @return boolean
         *
         * @since 4.0.2
         */
        public function is_empty()
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Gravity Forms handles product fields in bulk as they are all linked together to get the order totals
         * This class is used to handle this in bulk
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_V3_Products extends \GFPDF\Helper\Fields\Field_Products
    {
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @throws Exception
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
    }
    /**
     * @since 4.3
     */
    class Field_Tax extends \GFPDF\Helper\Helper_Abstract_Field_Products
    {
        /**
         * @return bool
         *
         * @since 4.3
         */
        public function is_empty()
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.3
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.3
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since    4.3
         *
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Tos extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Always display this field in the PDF
         *
         * @return bool
         * @since    4.2
         *
         */
        public function is_empty()
        {
        }
        /**
         * Actually check if the field has a value
         *
         * @return bool
         * @since 4.2
         *
         */
        public function is_field_empty()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Number extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * @since 4.3
     */
    class Field_Option extends \GFPDF\Helper\Helper_Abstract_Field_Products
    {
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.3
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.3
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get a HTML list of the product's selected options
         *
         * @param array  $options A list of the selected products
         * @param string $html    Pass in an existing HTML, or default to blank
         *
         * @return string         The finalised HTML
         *
         * @since 4.3
         */
        public function get_option_html($options, $html = '')
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since    4.3
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Post_Image extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         *
         */
        public function form_data()
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Hidden extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_List extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 5.1
     */
    class Field_Repeater extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 5.1
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Return the form data
         *
         * @return array
         *
         * @throws Exception
         * @since 5.1
         */
        public function form_data()
        {
        }
        /**
         * Recursively get the form data array
         *
         * @param array $data
         * @param array $value The current Repeater entry data
         * @param array $field The current Repeater Field
         *
         * @return array
         * @throws Exception
         * @since 5.1
         */
        public function get_repeater_form_data($data, $value, $field)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @throws Exception
         * @since 5.1
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Output the Repeater HTML
         *
         * @param array $value The current Repeater entry data
         * @param GF_Field_Repeater $field The current Repeater Field
         *
         * @throws Exception
         * @since 5.1
         */
        public function get_repeater_html($value, $field)
        {
        }
        /**
         * Allow the Repeater fields to act as an entry by padding the needed values for entry.
         *
         * @param array $item
         *
         * @return array
         *
         * @since 6.4
         */
        public function add_entry_meta($item)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 5.1
         */
        public function value()
        {
        }
        /**
         * Check if the section title should show based on if the repeater field was filled out
         *
         * @param bool              $is_top_level
         * @param GF_Field_Repeater $field
         * @param mixed             $value
         *
         * @return bool
         *
         * @since 6.4
         */
        public function maybe_show_section_title(bool $is_top_level, \GF_Field_Repeater $field, $value) : bool
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Likert extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Used to check if the current field has a value
         *
         * @since    4.0
         */
        public function is_empty()
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Signature extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Used to check if the current field has a value
         *
         * @since    4.0
         */
        public function is_empty()
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 5.1
     */
    class Field_Consent extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 5.1
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 5.1
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 5.1
         */
        public function value()
        {
        }
        /**
         * Get Consent Mark-up
         *
         * @param string $label
         *
         * @return string
         *
         * @since 5.2
         */
        protected function get_consented_markup($label)
        {
        }
        /**
         * Get Non Consent Markup
         *
         * @return string
         *
         * @since 5.2
         */
        protected function get_non_consent_markup()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Post_Tags extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Standardised method for returning the field's correct $form_data['field'] keys
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Email extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Radio extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Checks if the selected Radio button value is defined by the site owner (standard radio options)
         * or by the end user (through the "other" option).
         *
         * @param string $value The user-selected radio button value
         *
         * @return bool Returns true if value is user-defined, or false otherwise
         *
         * @since 4.0.1
         */
        protected function is_user_defined_value($value)
        {
        }
        /**
         * Check if the value is empty. Optional filter to check both the value and the label
         *
         * @return bool
         *
         * @since 6.1
         */
        public function is_empty()
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Chainedselect extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Standardised method for returning the field's correct $form_data['field'] keys
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_V3_List extends \GFPDF\Helper\Fields\Field_List
    {
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Post_Category extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Used to check if the current field has a value
         *
         * @since    4.0
         */
        public function is_empty()
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Section extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Used to check if the current field has a value
         *
         * @throws Exception
         * @since 4.0
         */
        public function is_empty()
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_V3_Section extends \GFPDF\Helper\Fields\Field_Section
    {
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Post_Title extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Rank extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Html extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Poll extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Used to check if the current field has a value
         *
         * @since    4.0
         */
        public function is_empty()
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Multiselect extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Date extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.5
     */
    class Field_Slim_Post extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.5
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since 4.5
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Address extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Check if the Address field is empty, based off the active sub-form fields
         * This prevents problems with addresses showing when country or state fields are disabled but defaults are used
         *
         * return boolean Return true if the field is empty, false if it has a value
         *
         * @since 4.0
         */
        public function is_empty()
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Text extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * @since 4.3
     */
    class Field_Product extends \GFPDF\Helper\Helper_Abstract_Field_Products
    {
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.3
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.3
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since    4.3
         *
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Quiz extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Post_Custom_Field extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Used to check if the current field has a value
         *
         * @since 4.0
         */
        public function is_empty()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Return the correct form data information for the selected fields
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Post_Content extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Creditcard extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Select extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Check if the value is empty. Optional filter to check both the value and the label
         *
         * @return bool
         *
         * @since 6.1
         */
        public function is_empty()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Phone extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Post_Excerpt extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Website extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 5.1
     */
    class Field_Form extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 5.1
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @throws Exception
         * @since 5.1
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Output a nested form entry
         *
         * @param array $form
         * @param array $entry
         *
         * @return false|string
         *
         * @throws Exception
         * @since 5.1
         */
        public function get_repeater_html($form, $entry)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 5.1
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Name extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.5
     */
    class Field_Slim extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.5
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since 4.5
         */
        public function value()
        {
        }
    }
    /**
     * @since 4.3
     */
    class Field_Subtotal extends \GFPDF\Helper\Helper_Abstract_Field_Products
    {
        /**
         * @return bool
         *
         * @since 4.3
         */
        public function is_empty()
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.3
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.3
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since    4.3
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Checkbox extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Coupon extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * @since 4.3
     */
    class Field_Total extends \GFPDF\Helper\Helper_Abstract_Field_Products
    {
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.3
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.3
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return array
         *
         * @since    4.3
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Rating extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Return the HTML form data
         *
         * @return array
         *
         * @since 4.0
         */
        public function form_data()
        {
        }
        /**
         * Display the HTML version of this field
         *
         * @param string $value
         * @param bool   $label
         *
         * @return string
         *
         * @since 4.0
         */
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
    /**
     * Controls the display and output of a Gravity Form field
     *
     * @since 4.0
     */
    class Field_Textarea extends \GFPDF\Helper\Helper_Abstract_Fields
    {
        /**
         * Check the appropriate variables are parsed in send to the parent construct
         *
         * @param object               $field The GF_Field_* Object
         * @param array                $entry The Gravity Forms Entry
         *
         * @param Helper_Abstract_Form $gform
         * @param Helper_Misc          $misc
         *
         * @throws Exception
         *
         * @since 4.0
         */
        public function __construct($field, $entry, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Misc $misc)
        {
        }
        public function html($value = '', $label = true)
        {
        }
        /**
         * Get the standard GF value of this field
         *
         * @return string|array
         *
         * @since 4.0
         */
        public function value()
        {
        }
    }
}
namespace GFPDF\Helper\Licensing {
    /**
     * Allows plugins to use their own update API.
     *
     * @author  Easy Digital Downloads
     * @version 1.9.2
     */
    class EDD_SL_Plugin_Updater
    {
        /**
         * Class constructor.
         *
         * @param string $_api_url     The URL pointing to the custom API endpoint.
         * @param string $_plugin_file Path to the plugin file.
         * @param array  $_api_data    Optional data to send with API calls.
         *
         * @uses hook()
         *
         * @uses plugin_basename()
         */
        public function __construct($_api_url, $_plugin_file, $_api_data = null)
        {
        }
        /**
         * Set up WordPress filters to hook into WP's update process.
         *
         * @return void
         * @uses add_filter()
         *
         */
        public function init()
        {
        }
        /**
         * Check for Updates at the defined API endpoint and modify the update array.
         *
         * This function dives into the update API just when WordPress creates its update array,
         * then adds a custom API call and injects the custom plugin data retrieved from the API.
         * It is reassembled from parts of the native WordPress plugin update code.
         * See wp-includes/update.php line 121 for the original wp_update_plugins() function.
         *
         * @param array $_transient_data Update array build by WordPress.
         *
         * @return array Modified update array with custom plugin data.
         * @uses api_request()
         *
         */
        public function check_update($_transient_data)
        {
        }
        /**
         * Get repo API data from store.
         * Save to cache.
         *
         * @return \stdClass
         */
        public function get_repo_api_data()
        {
        }
        /**
         * Show the update notification on multisite subsites.
         *
         * @param string $file
         * @param array  $plugin
         */
        public function show_update_notification($file, $plugin)
        {
        }
        /**
         * Updates information on the "View version x.x details" page with custom data.
         *
         * @param mixed  $_data
         * @param string $_action
         * @param object $_args
         *
         * @return object $_data
         * @uses api_request()
         *
         */
        public function plugins_api_filter($_data, $_action = '', $_args = null)
        {
        }
        /**
         * Disable SSL verification in order to prevent download update failures
         *
         * @param array  $args
         * @param string $url
         *
         * @return object $array
         */
        public function http_request_args($args, $url)
        {
        }
        /**
         * If available, show the changelog for sites in a multisite install.
         */
        public function show_changelog()
        {
        }
        /**
         * Get the version info from the cache, if it exists.
         *
         * @param string $cache_key
         *
         * @return object
         */
        public function get_cached_version_info($cache_key = '')
        {
        }
        /**
         * Adds the plugin version information to the database.
         *
         * @param string $value
         * @param string $cache_key
         */
        public function set_version_info_cache($value = '', $cache_key = '')
        {
        }
    }
}
namespace GFPDF\Helper {
    /**
     * Class to set up the settings api fields
     *
     * @since 4.0
     */
    class Helper_Options_Fields extends \GFPDF\Helper\Helper_Abstract_Options implements \GFPDF\Helper\Helper_Interface_Filters
    {
        /**
         * Add our filters
         *
         * @return void
         *
         * @since 4.0
         */
        public function add_filters()
        {
        }
        /**
         * Retrieve the array of registered fields
         *
         * @return array
         * @since 4.0
         *
         */
        public function get_registered_fields()
        {
        }
        /**
         * Enable advanced templating field if the user has our legacy premium plugin installed
         *
         * Dev notice: We're going to rewrite and rename the Tier 2 premium add-on and utilise template headers to automatically handle
         * advanced templates without the need for user intervention, which is why this method doesn't have a filter to manually
         * enable it.
         *
         * @param array $settings The 'form_settings_advanced' array
         *
         * @return array
         *
         * @since 4.0
         *
         */
        public function get_advanced_template_field($settings)
        {
        }
        /**
         * Enable the Master Password field.
         *
         * This isn't enabled by default because it's very simple for end users to bypass if needed.
         * If you need to prevent unauthorised access to the generated PDFs you should
         * use the standard password instead as that will prevent the PDF being viewed by anyone without your password.
         *
         * @param array $settings The 'form_settings_advanced' array
         *
         * @return array
         *
         * @since 4.2
         */
        public function get_master_password_field($settings)
        {
        }
        /**
         * Return the optional template-specific form title field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_form_title_display_field()
        {
        }
        /**
         * Return the optional template-specific page names field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_page_names_display_field()
        {
        }
        /**
         * Return the optional template-specific HTML field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_html_display_field()
        {
        }
        /**
         * Return the optional template-specific section content field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_section_content_display_field()
        {
        }
        /**
         * Return the optional template-specific hidden field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_conditional_display_field()
        {
        }
        /**
         * Return the optional template-specific empty field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_empty_display_field()
        {
        }
        /**
         * Return the optional template-specific header field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_header_field()
        {
        }
        /**
         * Return the optional template-specific first page header field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_first_page_header_field()
        {
        }
        /**
         * Return the optional template-specific footer field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_footer_field()
        {
        }
        /**
         * Return the optional template-specific first page footer field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_first_page_footer_field()
        {
        }
        /**
         * Return the optional template-specific background color field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_background_color_field()
        {
        }
        /**
         * Return the optional template-specific background image field
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_background_image_field()
        {
        }
    }
}
namespace GFPDF\Helper\Fonts {
    class LocalFilesystem extends \GFPDF_Vendor\GravityPdf\Upload\Storage\FileSystem
    {
        protected function moveUploadedFile(string $source, string $destination) : bool
        {
        }
    }
    class TtfFontValidation implements \GFPDF_Vendor\GravityPdf\Upload\ValidationInterface
    {
        /**
         * Error message
         *
         * @var string
         *
         * @since 6.0
         */
        protected $message = 'Invalid ttf font file: %s';
        /**
         * Validate the uploaded file is a valid, readable, TTF font file
         *
         * @param FileInfoInterface $file
         *
         * @throws MpdfException
         * @throws \GFPDF_Vendor\Mpdf\Exception\FontException
         * @since 6.0
         */
        public function validate(\GFPDF_Vendor\GravityPdf\Upload\FileInfoInterface $file) : void
        {
        }
    }
    /**
     * Class SupportsOtl
     *
     * @package GFPDF\Helper\Fonts
     *
     * @since 6.0
     */
    class SupportsOtl
    {
        /**
         * @var string
         */
        protected $font_directory_path;
        public function __construct(string $font_directory_path)
        {
        }
        /**
         * Processes the font file to see if it supports OTL tables
         *
         * @param string $file The filename of a font file to check
         *
         * @since 6.0
         */
        public function supports_otl(string $file) : bool
        {
        }
    }
    class LocalFile extends \GFPDF_Vendor\GravityPdf\Upload\File
    {
        /**
         * @return bool
         * @throws \Exception
         *
         * @since 6.4
         */
        public function isValid() : bool
        {
        }
    }
    /**
     * Class FlushCache
     *
     * @package GFPDF\Helper\Fonts
     *
     * @since 6.0
     */
    class FlushCache
    {
        /**
         * Deletes the mPDF tmp directory
         *
         * @since 6.0
         */
        public static function flush() : void
        {
        }
    }
}
namespace GFPDF\Helper {
    /**
     * Class to set up the settings api fields
     *
     * @since 4.0
     */
    class Helper_Form extends \GFPDF\Helper\Helper_Abstract_Form
    {
        /**
         * Get the form plugins current version
         *
         * @return string
         *
         * @since 4.0
         */
        public function get_version()
        {
        }
        /**
         * Get form plugin's path
         *
         * @return string
         *
         * @since 4.0
         */
        public function get_plugin_path()
        {
        }
        /**
         * Get form plugin's URL
         *
         * @return string
         *
         * @since 4.0
         */
        public function get_plugin_url()
        {
        }
        /**
         * Adds a new form and returns the newly-added form ID
         *
         * @param array $form The form object to add
         *
         * @return integer|object The ID if successful, or a WP_Error
         * @since 4.0
         *
         */
        public function add_form($form)
        {
        }
        /**
         * Deletes a form by ID
         *
         * @param integer $form_id The form ID to remove
         *
         * @return boolean|WP_Error
         * @since 4.0
         *
         */
        public function delete_form($form_id)
        {
        }
        /**
         * Get form plugin's form array
         * The GFAPI has a performance problem when using GFAPI::get_form() and makes a database call each time to get the `is_active`, `date_created`, or `is_trash` data.
         * We're bypassing the API to prevent that problem but the array doesn't include the aforementioned fields. Once the issue is resolved we'll look at switching back.
         *
         * @param integer $form_id
         *
         * @return mixed
         *
         * @since 4.0
         */
        public function get_form($form_id)
        {
        }
        /**
         * Get form plugin's current forms array
         *
         * @return mixed
         *
         * @since 4.0
         */
        public function get_forms()
        {
        }
        /**
         * Get form plugin's form array
         *
         * @param array|object $form The form object to be updated
         *
         * @return mixed
         *
         * @since 4.0
         */
        public function update_form($form)
        {
        }
        /**
         * Get the entry based on the ID
         *
         * @param integer $entry_id
         *
         * @return mixed
         *
         * @since 4.0
         */
        public function get_entry($entry_id)
        {
        }
        /**
         * Get multiple entries from multiple forms based on search criteria
         *
         * @param integer|array $form_ids        The ID's of the form or an array of ideas.
         * @param array         $search_criteria An array containing the search criteria
         * @param array|null    $sorting         An array containing the sort criteria
         * @param array|null    $paging          Use to limit the number of entries returned
         *
         * @return mixed
         *
         * @since 4.0
         */
        public function get_entries($form_ids, $search_criteria = [], $sorting = null, $paging = null)
        {
        }
        /**
         * Update the current entry object
         *
         * @param array|object $entry The entry to be updated
         *
         * @return mixed
         *
         * @since 4.0
         */
        public function update_entry($entry)
        {
        }
        /**
         * Get all custom form plugin capabilities added to WordPress, if any
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_capabilities()
        {
        }
        /**
         * Check if the user has the capability passed
         *
         * @param string|array $capability
         * @param integer|null $user_id
         *
         * @return boolean            True if successful, false if failed
         *
         * @since 4.0
         */
        public function has_capability($capability, $user_id = null)
        {
        }
        /**
         * Replace all the Merge Tag data in the string
         *
         * @param string $string The string to process
         * @param array  $form   The Gravity Form array
         * @param array  $entry  The Gravity Form Entry Array
         *
         * @return string
         *
         * @since 4.0
         */
        public function process_tags($string, $form, $entry)
        {
        }
    }
    /**
     * @since  4.0
     */
    class Helper_Misc
    {
        /**
         * Holds the abstracted Gravity Forms API specific to Gravity PDF
         *
         * @var Helper_Form
         *
         * @since 4.0
         */
        protected $gform;
        /**
         * Holds our log class
         *
         * @var LoggerInterface
         *
         * @since 4.0
         */
        protected $log;
        /**
         * Holds our Helper_Data object
         * which we can autoload with any data needed
         *
         * @var Helper_Data
         *
         * @since 4.0
         */
        protected $data;
        /**
         * Store required classes locally
         *
         * @param LoggerInterface      $log
         * @param Helper_Abstract_Form $gform
         * @param Helper_Data          $data
         *
         * @since 4.0
         */
        public function __construct(\Psr\Log\LoggerInterface $log, \GFPDF\Helper\Helper_Abstract_Form $gform, \GFPDF\Helper\Helper_Data $data)
        {
        }
        /**
         * Check if the current admin page is a Gravity PDF page
         *
         * @return boolean
         * @since 4.0
         *
         */
        public function is_gfpdf_page()
        {
        }
        /**
         * Check if we are on the current global settings page / tab
         *
         * @param string $name The current page ID to check
         *
         * @return boolean
         * @since 4.0
         *
         */
        public function is_gfpdf_settings_tab($name)
        {
        }
        /**
         * Gravity Forms has a 'type' for each field.
         * Based on that type, attempt to match it to Gravity PDFs field classes
         *
         * @param string $type The field type we are looking up
         *
         * @return string|boolean       The Fully Qualified Namespaced Class we matched, or false
         *
         * @since 4.0
         */
        public function get_field_class($type)
        {
        }
        /**
         * Manipulate header and footer for more consistent display in PDF
         *
         * Changes made include:
         *
         * 1. Apply wpautop to content
         *
         * 2. Apply wp_kses_post to content
         *
         * 3. mPDF currently has no cascading CSS ability to target 'inline' elements. Fix image display issues in header / footer
         * by adding a specific class name we can target
         *
         * 4. Convert any image URLs to local path where applicable
         *
         * 5. Strips out page breaks
         *
         * @param string $html The HTML to parse
         *
         * @return string
         */
        public function fix_header_footer($html)
        {
        }
        /**
         * Convert image URLs to local path (where able) and add specific class names to images for better
         * targeting in Mpdf
         *
         * @param string $html
         *
         * @return string
         *
         * @since 7.0.4
         */
        public function fix_header_footer_images($html)
        {
        }
        /**
         * Processes a hex colour and returns an appropriately contrasting black or white
         *
         * @param string $hexcolor The Hex to be inverted
         *
         * @return string
         *
         * @since    4.0
         */
        public function get_contrast($hexcolor)
        {
        }
        /**
         * Change the brightness of the passed in colour
         *
         * $diff should be negative to go darker, positive to go lighter and
         * is subtracted from the decimal (0-255) value of the colour
         *
         * @param string  $hexcolor Hex colour to be modified
         * @param integer $diff     amount to change the color
         *
         * @return string hex colour
         *
         * @since    4.0
         */
        public function change_brightness($hexcolor, $diff)
        {
        }
        /**
         * Pass in a background colour and get the appropriate contrasting background and border colour
         *
         * @param string $background_hex Hex colour to get contrast of
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_background_and_border_contrast($background_hex)
        {
        }
        /**
         * Push an associative array onto the beginning of an existing array
         *
         * @param array  $array The array to push onto
         * @param string $key   The key to use for the newly-pushed array
         * @param mixed  $val   The value being pushed
         *
         * @return array  The modified array
         *
         * @since 4.0
         */
        public function array_unshift_assoc($array, $key, $val)
        {
        }
        /**
         * This function recursively deletes all files and folders under the given directory, and then the directory itself
         * equivalent to Bash: rm -r $dir
         *
         * @param string $dir The path to be deleted
         * @param bool   $delete_top_level_dir Add ability to leave the top-level directory as-is. Added in 6.3.1
         *
         * @return bool|WP_Error
         *
         * @since 4.0
         */
        public function rmdir($dir, bool $delete_top_level_dir = true)
        {
        }
        /**
         * Wrapper function for rmdir() which ensures the top-level directory is not deleted
         *
         * @param string $path
         *
         * @since 4.0
         *
         * @internal Changed behaviour in 6.3.1 so the top-level directory is never deleted
         */
        public function cleanup_dir($path)
        {
        }
        /**
         * This function recursively copies all files and folders under a given directory
         * equivalent to Bash: cp -R $dir
         *
         * @param string $source      The path to be copied
         * @param string $destination The path to copy to
         *
         * @return boolean|WP_Error
         *
         * @since 4.0
         */
        public function copyr($source, $destination)
        {
        }
        /**
         * Get a path relative to the root WP directory, provided a user hasn't moved the wp-content directory outside the ABSPATH
         *
         * @param string $path    The relative path
         * @param string $replace What ABSPATH should be replaced with
         *
         * @return string
         *
         * @since 4.0
         */
        public function relative_path($path, $replace = '')
        {
        }
        /**
         * Modified version of get_upload_path() which just focuses on the base directory
         * no matter if single or multisite installation
         * We also only needed the basedir and baseurl so stripped out all the extras
         *
         * @return array Base dir and url for the upload directory
         *
         * @since 4.0
         */
        public function get_upload_details()
        {
        }
        /**
         * Attempt to convert the current URL to an internal path
         *
         * @param string $url The Url to convert
         *
         * @return string|boolean      Path on success or false on failure
         *
         * @since  4.0
         */
        public function convert_url_to_path($url)
        {
        }
        /**
         * Attempt to convert the current path to a URL
         *
         * @param string $path The path to convert
         *
         * @return string|boolean      Url on success or false
         *
         * @since  4.0
         */
        public function convert_path_to_url($path)
        {
        }
        /**
         * Remove any characters that are invalid in filenames (mostly on Windows systems)
         *
         * @param string $name The string / name to process
         *
         * @return string
         *
         * @since 4.0
         */
        public function strip_invalid_characters($name)
        {
        }
        /**
         * Backwards compatibility that allows multiple IDs to be passed to the renderer
         *
         * @param integer $entry_id The fallback ID if none present
         * @param array   $settings The current PDF settings
         *
         * @return array
         *
         * @since 4.0
         */
        public function get_legacy_ids($entry_id, $settings)
        {
        }
        /**
         * Add support for the third-party plugin GF Multi Currency
         * https://github.com/ilanco/gravity-forms-multi-currency
         *
         * @return void
         *
         * @since 4.0
         */
        public function maybe_add_multicurrency_support()
        {
        }
        /**
         * Remove an extension from the end of a string
         *
         * @param string $string
         * @param string $type The extension to remove from the end of the string
         *
         * @return string
         *
         * @since 4.0
         */
        public function remove_extension_from_string($string, $type = '.pdf')
        {
        }
        /**
         *  Convert our v3 boolean values into 'Yes' or 'No' responses
         *
         * @param mixed $value
         *
         * @return mixed
         *
         * @since  4.0
         */
        public function update_deprecated_config($value)
        {
        }
        /**
         * Determine if the logic should show or hide the item
         *
         * @param array $logic
         * @param array $entry The Gravity Forms entry object
         *
         * @return boolean Will always return true if item should be shown, or false if should be hidden
         *
         * @since 4.0
         */
        public function evaluate_conditional_logic($logic, $entry)
        {
        }
        /**
         * Takes a Gravity Form ID and returns the list of fields which can be accessed using their ID
         *
         * @param integer $form_id The Gravity Form ID
         *
         * @return array The field array ordered by the field ID
         *
         * @since 4.0
         */
        public function get_fields_sorted_by_id($form_id)
        {
        }
        /**
         * Converts the 4.x settings array into a compatible 3.x settings array
         *
         * @param array $settings The 4.x settings to be converted
         * @param array $form     (since 4.0.6) The Gravity Forms array
         * @param array $entry    (since 4.0.6) The Gravity Forms entry
         *
         * @return array           The 3.x compatible settings
         *
         * @since 4.0
         */
        public function backwards_compat_conversion($settings, $form, $entry)
        {
        }
        /**
         * Converts the 4.x output to into a compatible 3.x type
         *
         * @param string $type
         *
         * @return string
         *
         * @since 4.0
         */
        public function backwards_compat_output($type = '')
        {
        }
        /**
         * Check if the Gravity Forms GFEntryDetail class exists, otherwise load it
         *
         * @since 4.0
         */
        public function maybe_load_gf_entry_detail_class()
        {
        }
        /**
         * A recursive function that will search a multidimensional array for the value
         *
         * @param mixed $needle   The value to search for
         * @param array $haystack The multidimensional array to search in
         * @param bool  $strict   Pass `true` to match for the value and type, false for just the type.
         *
         * @return bool True when found, false otherwise
         */
        public function in_array($needle, $haystack, $strict = true)
        {
        }
        /**
         * Ensure an extension is added to the end of the name
         *
         * @param string $name      The PHP template
         *
         * @param string $extension The extension that should be added to the filename
         *
         * @return string
         *
         * @since  4.1
         */
        public function get_file_with_extension($name, $extension = '.php')
        {
        }
        /**
         * Check the Nonce and any user capabilities required before all AJAX requests
         * If once of these fails the appropriate response code will be sent
         *
         * @param string      $endpoint_desc The name of the endpoint currently being processed (for the log)
         * @param string|bool $capability    The capability name the logged in user is required to run this endpoint, or false if no authentication needed
         * @param string      $nonce_name    The name of the Nonce our $_POST['nonce'] should be checked against
         *
         * @since 4.1
         */
        public function handle_ajax_authentication($endpoint_desc, $capability = 'gravityforms_edit_settings', $nonce_name = 'gfpdf_ajax_nonce')
        {
        }
    }
    /**
     * @since 4.0
     */
    class Helper_Notices implements \GFPDF\Helper\Helper_Interface_Actions
    {
        /**
         * Holds any notices that we've triggered
         *
         * @var array
         *
         * @since 4.0
         */
        protected $notices = [];
        /**
         * Holds any errors that we've triggered
         *
         * @var array
         *
         * @since 4.0
         */
        protected $errors = [];
        /**
         * @since 4.0
         */
        public function init() : void
        {
        }
        /**
         * Apply any actions needed to implement notices
         *
         * @since 4.0
         */
        public function add_actions() : void
        {
        }
        /**
         * Override GF notices on Gravity PDF pages
         *
         * @since 6.5
         */
        public function maybe_remove_non_pdf_messages() : void
        {
        }
        /**
         * Determine which notice should be triggered
         *
         * @since 4.0
         */
        protected function get_notice_type() : string
        {
        }
        /**
         * Public endpoint for adding a new notice
         *
         * @param string $notice The message to be queued
         * @param string $class  The class that should be included with the notice box
         *
         * @since 4.0
         */
        public function add_notice(string $notice, string $class = '') : void
        {
        }
        /**
         * Public endpoint for adding a new notice
         *
         * @param string $error The error message that should be added
         * @param string $class Any class names that should apply to the error
         *
         * @since    4.0
         */
        public function add_error(string $error, string $class = '')
        {
        }
        /**
         * Check if we currently have a notice
         *
         * @since 4.0
         */
        public function has_notice() : bool
        {
        }
        /**
         * Check if we currently have an error
         *
         * @since 4.0
         */
        public function has_error() : bool
        {
        }
        /**
         * Remove all notices / errors
         *
         * @param string $type Switch to remove all messages, errors or just notices. Valid arguments are 'all', 'notices', 'errors'
         *
         * @since 4.0
         */
        public function clear(string $type = 'all') : void
        {
        }
        /**
         * Process our admin notice and error messages
         *
         * @since 4.0
         */
        public function process() : void
        {
        }
        /**
         * Generate the HTML used to display the notice / error
         *
         * @param string $text  The message to be displayed
         * @param string $class The class name (updated / error)
         *
         * @since 4.0
         */
        protected function html(string $text, string $class = 'updated') : void
        {
        }
        /**
         * Reset Gravity Forms messages
         *
         * @param array $messages The registered Gravity Forms messages
         *
         * @return array $this->errors
         *
         * @since 6.5
         */
        public function reset_gravityforms_messages($messages) : array
        {
        }
        /**
         * Merge notices with the current Gravity Forms notice messages.
         *
         * @param array $messages The message to be displayed
         *
         * @return array
         *
         * @since 6.5
         */
        public function set_gravitypdf_notices($messages) : array
        {
        }
        /**
         * Merge error with the current Gravity Forms error messages.
         *
         * @param array $errors The message to be displayed
         *
         * @return array
         *
         * @since 6.5
         */
        public function set_gravitypdf_errors($errors) : array
        {
        }
    }
    /**
     * @since 6.0
     */
    class Helper_Field_Container_Gf25 extends \GFPDF\Helper\Helper_Field_Container
    {
        const GRID_COLUMN_WIDTH = 100 / 12;
        /**
         * The Gravity Form fields we should not wrap in a container
         *
         * @var array
         *
         * @since 6.0
         */
        protected $skip_fields = ['page', 'section', 'hidden'];
        protected $end_of_row = false;
        /**
         * Handles the opening and closing of our container
         *
         * @param GF_Field $field The Gravity Form field currently being processed
         *
         * @return void
         *
         * @since 6.0
         */
        public function generate(\GF_Field $field)
        {
        }
        /**
         * Will check if the current field will fit in the open row, or if a new row needs to be open
         * to accommodate the field.
         *
         * @param GF_Field $field The Gravity Form field currently being processed
         *
         * @return boolean
         *
         * @since 6.0
         */
        public function does_fit_in_row(\GF_Field $field)
        {
        }
        /**
         * @param GF_Field $field The Gravity Form field currently being processed
         */
        public function maybe_display_faux_column(\GF_Field $field)
        {
        }
        /**
         * Close the current container if still open.
         * This is usually called publicly after the form loop
         *
         * @since 6.0
         */
        public function close() : void
        {
        }
        /**
         * Open the container
         *
         * @param GF_Field $field The Gravity Form field currently being processed
         *
         * @since 6.0
         */
        protected function handle_closed_container(\GF_Field $field)
        {
        }
        /**
         * Determine if we should close a container based on its classes
         *
         * @param GF_Field $field The Gravity Form field currently being processed
         *
         * @return void
         *
         * @since 6.0
         */
        protected function handle_open_container(\GF_Field $field)
        {
        }
        /**
         * Mark our class as currently being open
         *
         * @since 6.0
         */
        protected function start()
        {
        }
        /**
         * Reset our class back to its original state
         *
         * @since 6.0
         */
        protected function reset()
        {
        }
        /**
         * Increment our current field width
         *
         * @param GF_Field $field
         *
         * @return void
         *
         * @since  4.0
         */
        protected function increment_width($field)
        {
        }
        /**
         * Convert the field grid span to a width out of 100
         *
         * @param GF_Field $field
         *
         * @return integer The field width based on assigned class
         *
         * @since  6.0
         */
        protected function get_field_width($field)
        {
        }
    }
}
namespace {
    /**
     * Add's an easy deprecated class abstract fallback
     *
     * @since 4.0
     */
    abstract class GFPDF_Deprecated_Abstract
    {
        /**
         * Add user deprecated notice for missing methods
         *
         * @param string $name      The function name to be called
         * @param array  $arguments An enumerated array containing the parameters passed to the $name'ed method
         *
         * @since  4.0
         *
         */
        public function __call($name, $arguments)
        {
        }
        /**
         * Add user deprecated notice for missing methods
         *
         * @param string $name      The function name to be called
         * @param array  $arguments An enumerated array containing the parameters passed to the $name'ed method
         *
         * @since  4.0
         *
         */
        public static function __callStatic($name, $arguments)
        {
        }
    }
    /**
     * Add backwards compatibility support for our main core class
     *
     * @since 3.0
     */
    class GFPDF_Core extends \GFPDF_Deprecated_Abstract
    {
        /**
         * Setup our v3 template location constants
         *
         * @since 4.0
         */
        public function setup_constants()
        {
        }
        /**
         * Create aliases of our template path and URLs to match v3
         *
         * @since 4.0
         */
        public function setup_deprecated_paths()
        {
        }
    }
    /**
     * Add backwards compatibility support for our PDF generator
     *
     * @since 3.0
     */
    class PDFRender extends \GFPDF_Deprecated_Abstract
    {
        /**
         * Saves the PDF to disk
         *
         * @param string  $raw_pdf_string
         * @param string  $filename
         * @param integer $id
         *
         * @return string Returns the path to the file
         *
         * @throws Exception
         *
         * @since 3.0
         */
        public function savePDF($raw_pdf_string, $filename, $id)
        {
        }
        /**
         * Handles backwards compatibility support for our Tier 2 add on
         *
         * @param integer $form_id   The Gravity Form ID
         * @param integer $lead_id   The Gravity Form Entry ID
         * @param string  $template  The PDF template name
         * @param integer $id        The spliced form ID and entry ID
         * @param string  $output    The PDF output method
         * @param string  $filename  The PDF filename
         * @param array   $arguments The v3 arguments that get passed to the template
         * @param array   $args      The v4 arguments that get passed to the template
         *
         * @return integer The Gravity Form ID
         * @since 4.0
         *
         */
        public static function prepare_ids($form_id, $lead_id, $template, $id, $output, $filename, $arguments, $args)
        {
        }
    }
    /**
     * Add backwards compatibility support for our common class
     *
     * @since 3.0
     */
    class PDF_Common extends \GFPDF_Deprecated_Abstract
    {
        /**
         * Takes over for setup_ids() but is now called much earlier in the process
         *
         * @return boolean
         *
         * @since 4.0
         */
        public static function get_ids()
        {
        }
        /**
         * Get the base upload directory details
         *
         * @return array
         *
         * @since 3.0
         */
        public static function get_upload_dir()
        {
        }
        /**
         * Convert merge tags to real Gravity Form values
         *
         * @param string  $string
         * @param integer $form_id
         * @param integer $lead_id
         *
         * @return string
         *
         * @since 3.0
         */
        public static function do_mergetags($string, $form_id, $lead_id)
        {
        }
        /**
         * Allow users to view the $form_data array, if it exists
         *
         * @param array $form_data
         *
         * @since 4.0
         */
        public static function view_data($form_data)
        {
        }
        /**
         * Get $_POST key, or return nothing
         *
         * @param string $name Key Name
         *
         * @return string
         *
         * @since 3.0
         */
        public static function post($name)
        {
        }
        /**
         * Get $_GET key, or return nothing
         *
         * @param string $name Key Name
         *
         * @return string
         *
         * @since 3.0
         */
        public static function get($name)
        {
        }
        /**
         * Get the name of the PDF based on the Form and the submission
         *
         * @param integer $form_id
         * @param integer $lead_id
         *
         * @return string
         *
         * @since 3.0
         */
        public static function get_pdf_filename($form_id, $lead_id)
        {
        }
        /**
         * Remove any characters that are invalid in filenames (mostly on Windows systems)
         *
         * @param string $name The string / name to process
         *
         * @return string
         *
         * @since 4.0
         */
        public static function remove_invalid_characters($name)
        {
        }
        /**
         * Prevent deprecated warning for legacy Tier 2 templates
         *
         * @since 3.0
         */
        public static function setup_ids()
        {
        }
    }
    /**
     * Add deprecated functionality for generating our standard PDF HTML
     *
     * @since 3.0
     */
    class GFPDFEntryDetail extends \GFPDF_Deprecated_Abstract
    {
        /**
         * First legacy wrapper to generate our PDF HTML layout
         *
         * @param array   $form The Gravity Form array
         * @param array   $lead The Gravity Form entry
         * @param boolean $allow_display_empty_fields
         * @param boolean $show_html
         * @param boolean $show_page_name
         * @param boolean $return
         *
         * @return string  If $return is `true` the generated HTML will be returned
         *
         * @throws Exception
         * @since 3.0
         */
        public static function lead_detail_grid($form, $lead, $allow_display_empty_fields = \false, $show_html = \false, $show_page_name = \false, $return = \false)
        {
        }
        /**
         * Second legacy wrapper to generate our PDF HTML layout
         *
         * @param array $form   The Gravity Form array
         * @param array $lead   The Gravity Form entry
         * @param array $config The PDF Configuration
         *
         * @return string        If $config['meta']['echo'] is false the HTML will be returned
         *
         * @throws Exception
         * @since 3.7
         */
        public static function do_lead_detail_grid($form, $lead, $config = [])
        {
        }
        /**
         * Loop through our form and output the results
         *
         * @param array $form   The Gravity Form array
         * @param array $lead   The Gravity Form entry
         * @param array $config The PDF Configuration
         *
         * @return array|void
         *
         * @throws Exception
         * @since 4.0
         */
        public static function generate_v3_html_structure($form, $lead, $config)
        {
        }
        /**
         * Replaces the v4 HTML structure with the legacy v3 code to prevent backwards compatibility problems
         *
         * @param string  $html  The original field HTML which we'll be discarding
         * @param string  $value The field value
         * @param boolean $show_label
         * @param boolean $label Whether to show or hide the field's label
         * @param object  $field
         *
         * @return string
         *
         * @since 4.0
         */
        public static function legacy_html_format($html, $value, $show_label, $label, $field)
        {
        }
        /**
         * Replace some of our Gravity PDF fields with legacy versions to match the old HTML structure
         *
         * @param object $class The original Gravity PDF field class being processed
         * @param object $field The Gravity Form field object being processed
         * @param array  $entry The current Gravity Form array of entry data
         *
         * @return object
         *
         * @throws Exception
         * @since 4.0
         */
        public static function load_legacy_html_classes($class, $field, $entry)
        {
        }
        /**
         * Our default template used a number of legacy classes.
         * To keep backwards compatible, we will manually assign when needed.
         *
         * @param GF_Field $field The Gravity Form Fields
         *
         * @return void (classes are passed by reference)
         *
         * @since 4.0
         */
        public static function load_legacy_css(\GF_Field $field)
        {
        }
        /**
         * Get the $form_data array
         *
         * @param array $form The Gravity Form array
         * @param array $lead The Gravity Form entry
         *
         * @return array
         *
         * @since 3.0
         */
        public static function lead_detail_grid_array($form, $lead)
        {
        }
        /**
         * Generate a standard Gravity Forms product table based on the form / entry data
         *
         * @param array $form The Gravity Form array
         * @param array $lead The Gravity Form entry
         *
         * @return void
         *
         * @since 3.0
         */
        public static function product_table($form, $lead)
        {
        }
        /**
         * Public method for outputting likert (survey addon field)
         *
         * @param array   $form     The Gravity Form array
         * @param array   $lead     The Gravity Form entry
         * @param integer $field_id The field ID to output
         *
         * @return string
         *
         * @since 3.0
         */
        public static function get_likert($form, $lead, $field_id)
        {
        }
    }
    /**
     * Classes included for backwards compatibility
     *
     * @since 3.0
     */
    class PDFGenerator extends \GFPDF_Deprecated_Abstract
    {
    }
    class GFPDFE_DATA extends \GFPDF_Deprecated_Abstract
    {
    }
    class GFPDF_InstallUpdater extends \GFPDF_Deprecated_Abstract
    {
    }
    class GFPDF_Notices extends \GFPDF_Deprecated_Abstract
    {
    }
    class PDF_Generator extends \GFPDF_Deprecated_Abstract
    {
    }
    class GFPDF_Core_Model extends \GFPDF_Deprecated_Abstract
    {
        /**
         * This method will save any PDFs assigned to a form to disk
         *
         * @param $entry
         * @param $form
         *
         * @since 3.0
         */
        public static function gfpdfe_save_pdf($entry, $form)
        {
        }
    }
    class GFPDF_Settings_Model extends \GFPDF_Deprecated_Abstract
    {
    }
    class GFPDF_Settings extends \GFPDF_Deprecated_Abstract
    {
    }
    /**
     * Class mPDF
     *
     * Allow our legacy software to still function even though the \mPDF class no longer exists (see \GFPDF_Vendor\Mpdf\Mpdf)
     *
     * @since 5.0
     * phpcs:disable PEAR.NamingConventions.ValidClassName.StartWithCapital
     */
    class mPDF
    {
        /* phpcs:enable */
        protected $mpdf;
        /**
         * mPDF constructor.
         *
         * @param string $mode
         * @param string $format
         * @param int    $default_font_size
         * @param string $default_font
         * @param int    $mgl
         * @param int    $mgr
         * @param int    $mgt
         * @param int    $mgb
         * @param int    $mgh
         * @param int    $mgf
         * @param string $orientation
         *
         * @throws MpdfException
         * @since 5.0
         */
        public function __construct($mode = '', $format = 'A4', $default_font_size = 0, $default_font = '', $mgl = 15, $mgr = 15, $mgt = 16, $mgb = 16, $mgh = 9, $mgf = 9, $orientation = 'P')
        {
        }
        /**
         * Allow the relaying of method calls to the new Mpdf class
         *
         * @param $name
         * @param $arguments
         *
         * @return mixed
         *
         * @since 5.0
         */
        public function __call($name, $arguments)
        {
        }
        /**
         * Allow the relaying of property calls to the new Mpdf class
         *
         * @param $name
         *
         * @return mixed
         *
         * @since 5.1.2
         */
        public function __get($name)
        {
        }
        /**
         * @param int $type
         *
         * @Internal Removed from Mpdf v7
         *
         * @since    5.0
         */
        public function SetAutoFont($type = 0)
        {
        }
    }
}
namespace {
    /**
     * Override certain pluggable functions so we can unit test them correctly
     *
     * @since 4.0
     */
    function auth_redirect()
    {
    }
    /* Define custom config to override the URL used for the test site */
    \define('WP_TESTS_CONFIG_FILE_PATH', '/var/www/html/wp-content/plugins/gravity-pdf/tests/phpunit/wp-tests-config.php');
    // https://github.com/docker-library/wordpress/issues/588 (WP-CLI will load this file 2x)
    function getenv_docker($env, $default)
    {
    }
    // ** Database settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    \define('DB_NAME', \getenv_docker('WORDPRESS_DB_NAME', 'wordpress'));
    /** Database username */
    \define('DB_USER', \getenv_docker('WORDPRESS_DB_USER', 'example username'));
    /** Database password */
    \define('DB_PASSWORD', \getenv_docker('WORDPRESS_DB_PASSWORD', 'example password'));
    /**
     * Docker image fallback values above are sourced from the official WordPress installation wizard:
     * https://github.com/WordPress/WordPress/blob/f9cc35ebad82753e9c86de322ea5c76a9001c7e2/wp-admin/setup-config.php#L216-L230
     * (However, using "example username" and "example password" in your database is strongly discouraged.  Please use strong, random credentials!)
     */
    /** Database hostname */
    \define('DB_HOST', \getenv_docker('WORDPRESS_DB_HOST', 'mysql'));
    /** Database charset to use in creating database tables. */
    \define('DB_CHARSET', \getenv_docker('WORDPRESS_DB_CHARSET', 'utf8'));
    /** The database collate type. Don't change this if in doubt. */
    \define('DB_COLLATE', \getenv_docker('WORDPRESS_DB_COLLATE', ''));
    /**#@+
     * Authentication unique keys and salts.
     *
     * Change these to different unique phrases! You can generate these using
     * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
     *
     * You can change these at any point in time to invalidate all existing cookies.
     * This will force all users to have to log in again.
     *
     * @since 2.6.0
     */
    \define('AUTH_KEY', \getenv_docker('WORDPRESS_AUTH_KEY', '5b55eccbe48bbe154df6c78be8a9ddc8badffc11'));
    \define('SECURE_AUTH_KEY', \getenv_docker('WORDPRESS_SECURE_AUTH_KEY', '437da7392c518609ce51e442f51cc6703d1531b2'));
    \define('LOGGED_IN_KEY', \getenv_docker('WORDPRESS_LOGGED_IN_KEY', '5252a278cc1f656c6b757f52c9437019172547c0'));
    \define('NONCE_KEY', \getenv_docker('WORDPRESS_NONCE_KEY', '2df5e822b8d63af679ac8162dd295280bf9197e7'));
    \define('AUTH_SALT', \getenv_docker('WORDPRESS_AUTH_SALT', '8447685b361d578953aa59374bb83d7aadb1c628'));
    \define('SECURE_AUTH_SALT', \getenv_docker('WORDPRESS_SECURE_AUTH_SALT', '8ca985cafecda23a69052a4121224f104f305aa2'));
    \define('LOGGED_IN_SALT', \getenv_docker('WORDPRESS_LOGGED_IN_SALT', 'ada0e8de86483e0bd481e08893621ece25807721'));
    \define('NONCE_SALT', \getenv_docker('WORDPRESS_NONCE_SALT', '6cb425be8ca3eb2fd3ec199c7aa6062e3dfc00da'));
    // (See also https://wordpress.stackexchange.com/a/152905/199287)
    /**#@-*/
    /**
     * WordPress database table prefix.
     *
     * You can have multiple installations in one database if you give each
     * a unique prefix. Only numbers, letters, and underscores please!
     */
    $table_prefix = \getenv_docker('WORDPRESS_TABLE_PREFIX', 'wp_');
    /**
     * For developers: WordPress debugging mode.
     *
     * Change this to true to enable the display of notices during development.
     * It is strongly recommended that plugin and theme developers use WP_DEBUG
     * in their development environments.
     *
     * For information on other constants that can be used for debugging,
     * visit the documentation.
     *
     * @link https://wordpress.org/support/article/debugging-in-wordpress/
     */
    \define('SCRIPT_DEBUG', \false);
    \define('WP_ENVIRONMENT_TYPE', 'local');
    \define('WP_PHP_BINARY', 'php');
    \define('WP_TESTS_EMAIL', 'admin@example.org');
    \define('WP_TESTS_TITLE', 'Test Blog');
    \define('WP_TESTS_DOMAIN', \getenv_docker('WORDPRESS_URL', 'http://localhost:8889/'));
    \define('WP_SITEURL', \getenv_docker('WORDPRESS_URL', 'http://localhost:8889/'));
    \define('WP_HOME', \getenv_docker('WORDPRESS_URL', 'http://localhost:8889/'));
    \define('WP_DEBUG', \true);
    \define('WP_DEBUG_DISPLAY', \true);
    \define('WP_DEBUG_LOG', '/var/www/html/wp-content/plugins/gravity-pdf/tmp/debug.log');
    \define('ABSPATH', '/var/www/html/');
    \define('WP_DEFAULT_THEME', 'default');
    /*
     * Set base constants we'll use throughout the plugin
     */
    \define('PDF_EXTENDED_VERSION', '6.7.2');
    /* the current plugin version */
    \define('PDF_PLUGIN_DIR', \plugin_dir_path(__FILE__));
    /* plugin directory path */
    \define('PDF_PLUGIN_URL', \plugin_dir_url(__FILE__));
    /* plugin directory url */
    \define('PDF_PLUGIN_BASENAME', \plugin_basename(__FILE__));
    /** @var $args array */
    $is_download = $args['view'] === 'download';
    /**
     * @var    $settings array
     * @var    $form     array
     * @var    $entry    array
     * @global $gfpdf
     */
    $font = $settings['font'] ?? 'DejavuSansCondensed';
    /** @var $args array */
    $download = $args['view'] === 'download';
    /** @var $args array */
    /* assign list_items object to variable for easier access */
    $list_items = $args['list_items'];
    /**
     * All Gravity PDF templates have access to the following variables:
     *
     * @var array  $form      The current Gravity Form array
     * @var array  $entry     The raw entry data
     * @var array  $form_data The processed entry data stored in an array
     * @var array  $settings  The current PDF configuration
     * @var array  $fields    An array of Gravity Form fields which can be accessed with their ID number
     * @var array  $config    The initialised template config class – eg. /config/zadani.php
     * @var object $gfpdf     The main Gravity PDF object containing all our helper classes
     * @var array  $args      Contains an array of all variables - the ones being described right now - passed to the template
     */
    /*
     * Load up our template-specific appearance settings
     */
    $value_border_colour = $settings['zadani_border_colour'] ?? '#CCCCCC';
    /**
     * Set up our configuration array to control what is and is not shown in the generated PDF
     *
     * @var array
     */
    $html_config = ['settings' => $settings, 'meta' => [
        'echo' => \true,
        /* whether to output the HTML or return it */
        'exclude' => \true,
        /* whether we should exclude fields with a CSS value of 'exclude'. Default to true */
        'empty' => $show_empty,
        /* whether to show empty fields or not. Default is false */
        'conditional' => $enable_conditional,
        /* whether we should skip fields hidden with conditional logic. Default to true. */
        'show_title' => $show_form_title,
        /* whether we should show the form title. Default to true */
        'section_content' => $show_section_content,
        /* whether we should include a section breaks content. Default to false */
        'page_names' => $show_page_names,
        /* whether we should show the form's page names. Default to false */
        'html_field' => $show_html,
        /* whether we should show the form's html fields. Default to false */
        'individual_products' => \false,
        /* Whether to show individual fields in the entry. Default to false - they are grouped together at the end of the form */
        'enable_css_ready_classes' => \true,
    ]];
    /**
     * All Gravity PDF templates have access to the following variables:
     *
     * @var array  $form      The current Gravity Form array
     * @var array  $entry     The raw entry data
     * @var array  $form_data The processed entry data stored in an array
     * @var array  $settings  The current PDF configuration
     * @var array  $fields    An array of Gravity Form fields which can be accessed with their ID number
     * @var array  $config    The initialised template config class – eg. /config/zadani.php
     * @var object $gfpdf     The main Gravity PDF object containing all our helper classes
     * @var array  $args      Contains an array of all variables - the ones being described right now - passed to the template
     */
    /*
     * Load up our template-specific appearance settings
     */
    $container_background_color = $settings['rubix_container_background_colour'] ?? '#eeeeee';
    /**
     * Set up our configuration array to control what is and is not shown in the generated PDF
     *
     * @var array
     */
    $html_config = ['settings' => $settings, 'meta' => [
        'echo' => \true,
        /* whether to output the HTML or return it */
        'exclude' => \true,
        /* whether we should exclude fields with a CSS value of 'exclude'. Default to true */
        'empty' => $show_empty,
        /* whether to show empty fields or not. Default is false */
        'conditional' => $enable_conditional,
        /* whether we should skip fields hidden with conditional logic. Default to true. */
        'show_title' => $show_form_title,
        /* whether we should show the form title. Default to true */
        'section_content' => $show_section_content,
        /* whether we should include a section breaks content. Default to false */
        'page_names' => $show_page_names,
        /* whether we should show the form's page names. Default to false */
        'html_field' => $show_html,
        /* whether we should show the form's html fields. Default to false */
        'individual_products' => \false,
        /* Whether to show individual fields in the entry. Default to false - they are grouped together at the end of the form */
        'enable_css_ready_classes' => \true,
    ]];
    /**
     * All Gravity PDF templates have access to the following variables:
     *
     * @var array  $form      The current Gravity Form array
     * @var array  $entry     The raw entry data
     * @var array  $form_data The processed entry data stored in an array
     * @var array  $settings  The current PDF configuration
     * @var array  $fields    An array of Gravity Form fields which can be accessed with their ID number
     * @var array  $config    The initialised template config class – eg. /config/zadani.php
     * @var object $gfpdf     The main Gravity PDF object containing all our helper classes
     * @var array  $args      Contains an array of all variables - the ones being described right now - passed to the template
     */
    /*
     * Load up our template-specific appearance settings
     */
    $misc = \GPDFAPI::get_misc_class();
    /**
     * Set up our configuration array to control what is and is not shown in the generated PDF
     *
     * @var array
     */
    $html_config = ['settings' => $settings, 'meta' => [
        'echo' => \true,
        /* whether to output the HTML or return it */
        'exclude' => \true,
        /* whether we should exclude fields with a CSS value of 'exclude'. Default to true */
        'empty' => $show_empty,
        /* whether to show empty fields or not. Default is false */
        'conditional' => $enable_conditional,
        /* whether we should skip fields hidden with conditional logic. Default to true. */
        'show_title' => $show_form_title,
        /* whether we should show the form title. Default to true */
        'section_content' => $show_section_content,
        /* whether we should include a section breaks content. Default to false */
        'page_names' => $show_page_names,
        /* whether we should show the form's page names. Default to false */
        'html_field' => $show_html,
        /* whether we should show the form's html fields. Default to false */
        'individual_products' => \false,
        /* Whether to show individual fields in the entry. Default to false - they are grouped together at the end of the form */
        'enable_css_ready_classes' => \true,
    ]];
    /**
     * Set up our configuration array to control what is and is not shown in the generated PDF
     *
     * @var array
     */
    $html_config = ['settings' => $settings, 'meta' => [
        'echo' => \true,
        /* whether to output the HTML or return it */
        'exclude' => \true,
        /* whether we should exclude fields with a CSS value of 'exclude'. Default to true */
        'empty' => $show_empty,
        /* whether to show empty fields or not. Default is false */
        'conditional' => $enable_conditional,
        /* whether we should skip fields hidden with conditional logic. Default to true. */
        'show_title' => $show_form_title,
        /* whether we should show the form title. Default to true */
        'section_content' => $show_section_content,
        /* whether we should include a section breaks content. Default to false */
        'page_names' => $show_page_names,
        /* whether we should show the form's page names. Default to false */
        'html_field' => $show_html,
        /* whether we should show the form's html fields. Default to false */
        'individual_products' => \false,
        /* Whether to show individual fields in the entry. Default to false - they are grouped together at the end of the form */
        'enable_css_ready_classes' => \true,
    ]];
}
