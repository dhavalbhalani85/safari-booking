<?php

/**
 * WordPress settings API demo class
 *
 * @author Tareq Hasan
 */
if ( !class_exists('WeDevs_Settings_API_Test' ) ):
class WeDevs_Settings_API_Test {

    private $settings_api;

    function __construct() {
        $this->settings_api = new WeDevs_Settings_API;

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();
    }

    function admin_menu() {
        add_options_page( 'Safari Booking Settings', 'Safari Booking Settings', 'delete_posts', 'safari_booking_settings', array($this, 'plugin_page') );
    }

    function get_settings_sections() {
        $sections = array(
            array(
                'id'    => 'safari_booking_basic_settings',
                'title' => __( 'Basic Settings', 'wedevs' )
            )
        );
        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = array(
            'safari_booking_basic_settings' => array(
                array(
                    'name'              => 'razor_pay_key_id',
                    'label'             => __( 'Razor pay key id', 'wedevs' ),
                    'desc'              => __( '', 'wedevs' ),
                    'placeholder'       => __( 'Razor pay key id', 'wedevs' ),
                    'type'              => 'text',
                    'default'           => '',
                    'sanitize_callback' => 'sanitize_text_field'
                ),
                array(
                    'name'              => 'razor_pay_key_secret',
                    'label'             => __( 'Razor pay key secret', 'wedevs' ),
                    'desc'              => __( '', 'wedevs' ),
                    'placeholder'       => __( 'Razor pay key secret', 'wedevs' ),
                    'type'              => 'text',
                    'default'           => '',
                    'sanitize_callback' => 'sanitize_text_field'
                ),
                array(
                    'name'    => 'payumoney_mode',
                    'label'   => __( 'PayUmoney Mode', 'wedevs' ),
                    'desc'    => __( '', 'wedevs' ),
                    'type'    => 'select',
                    'default' => 'sandbox',
                    'options' => array(
                        'sandbox' => 'Sandbox',
                        'production'  => 'Production'
                    )
                ),
                array(
                    'name'              => 'payumoney_key',
                    'label'             => __( 'PayUmoney Key', 'wedevs' ),
                    'desc'              => __( '', 'wedevs' ),
                    'placeholder'       => __( 'PayUmoney key', 'wedevs' ),
                    'type'              => 'text',
                    'default'           => '',
                    'sanitize_callback' => 'sanitize_text_field'
                ),
                array(
                    'name'              => 'payumoney_salt',
                    'label'             => __( 'PayUmoney Salt', 'wedevs' ),
                    'desc'              => __( '', 'wedevs' ),
                    'placeholder'       => __( 'PayUmoney salt', 'wedevs' ),
                    'type'              => 'text',
                    'default'           => '',
                    'sanitize_callback' => 'sanitize_text_field'
                ),
                array(
                    'name'              => 'adult_price_indian',
                    'label'             => __( 'Adult Price (Indian)', 'wedevs' ),
                    'desc'              => __( 'Fixed price for number any of adults', 'wedevs' ),
                    'placeholder'       => __( '0', 'wedevs' ),
                    'min'               => 0,
                    'max'               => 1000000,
                    'step'              => '0.01',
                    'type'              => 'number',
                    'default'           => '0',
                    'sanitize_callback' => 'floatval'
                ),
                array(
                    'name'              => 'adult_price_foreigner',
                    'label'             => __( 'Adult Price (Foreigner)', 'wedevs' ),
                    'desc'              => __( 'Fixed price for number any of adults', 'wedevs' ),
                    'placeholder'       => __( '0', 'wedevs' ),
                    'min'               => 0,
                    'max'               => 1000000,
                    'step'              => '0.01',
                    'type'              => 'number',
                    'default'           => '0',
                    'sanitize_callback' => 'floatval'
                ),
                array(
                    'name'              => 'child_price',
                    'label'             => __( 'Child Price', 'wedevs' ),
                    'desc'              => __( 'Per child price', 'wedevs' ),
                    'placeholder'       => __( '0', 'wedevs' ),
                    'min'               => 0,
                    'max'               => 1000000,
                    'step'              => '0.01',
                    'type'              => 'number',
                    'default'           => '0',
                    'sanitize_callback' => 'floatval'
                ),
                array(
                    'name'    => 'payment_page',
                    'label'   => __( 'Select Payment Page', 'wedevs' ),
                    'desc'    => __( 'Select the payment page and put this <strong>[payment_form]</strong> shortcode anywhere you want on that page.', 'wedevs' ),
                    'type'    => 'pages',
                ),
                array(
                    'name'    => 'thank_you_page',
                    'label'   => __( 'Select thank you Page', 'wedevs' ),
                    'desc'    => __( 'Select the thank you page and put this <strong>[thank_you_form]</strong> shortcode anywhere you want on that page.', 'wedevs' ),
                    'type'    => 'pages',
                ),
                array(
                    'name'              => 'admin_email',
                    'label'             => __( 'Admin email for recieve booking email', 'wedevs' ),
                    'desc'              => __( '', 'wedevs' ),
                    'placeholder'       => __( 'Admin email address', 'wedevs' ),
                    'type'              => 'text',
                    'default'           => '',
                    'sanitize_callback' => 'sanitize_text_field'
                ),
                array(
                    'name'              => 'gir_jungle_trail_timing',
                    'label'             => __( 'Gir jungle trail timing', 'wedevs' ),
                    'desc'              => __( 'Checked time slot will be available. unchecked will not available.', 'wedevs' ),
                    'type'              => 'multicheck',
                    'options'            => array(
                        '06:00 am to 09:00 am' => '06:00 am to 09:00 am',
                        '8:30 am to 11:30 am' => '8:30 am to 11:30 am',
                        '4:00 pm to 7:00 pm' => '4:00 pm to 7:00 pm'
                    )
                ),
                array(
                    'name'              => 'devalia_park_timing',
                    'label'             => __( 'Devalia park timing', 'wedevs' ),
                    'desc'              => __( 'Checked time slot will be available. unchecked will not available.', 'wedevs' ),
                    'type'              => 'multicheck',
                    'options'            => array(
                        '7:00 am to 7:55 am' => '7:00 am to 7:55 am',
                        '8:00 am to 8:55 am' => '8:00 am to 8:55 am',
                        '9:00 am to 9:55 am' => '9:00 am to 9:55 am',
                        '10:00 am to 10:55 am' => '10:00 am to 10:55 am',
                        '3:00 pm to 3:55 pm' => '3:00 pm to 3:55 pm',
                        '4:00 pm to 4:55 pm' => '4:00 pm to 4:55 pm',
                        '5:00 pm to 5:55 pm' => '5:00 pm to 5:55 pm'
                    )
                ),
                array(
                    'name'    => 'setup',
                    'label'   => __( 'Setup', 'wedevs' ),
                    'desc'        => __( '
                        <strong>This 5 shortcode displayed below are available in this plugin to user proper functionality of safari booking process.</strong>
                        <div style="margin: 10px 0;"><code>[booking_form]</code> This shorcode will display basic booking fields.</div>
                        <div style="margin: 10px 0;"><code>[booking_form_gir_jungle]</code> This shorcode will display basic booking fields for gir jungle.</div>
                        <div style="margin: 10px 0;"><code>[booking_form_devalia_park]</code> This shorcode will display basic booking fields for devalia park.</div>
                        <div style="margin: 10px 0;"><code>[payment_form]</code> This shorcode will display basic booking info and fields for adults and child.</div>
                        <div style="margin: 10px 0;"><code>[booking_thank_you]</code> This shorcode will display booking information after customer booking.</div>
                    ', 'wedevs' ),
                    'type'        => 'html'
                ),
            )
        );

        return $settings_fields;
    }

    function plugin_page() {
        echo '<div class="wrap">';

        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();

        echo '</div>';

        /*if( isset( $_POST['safari_booking_basic_setting'] ) ){
            echo '<pre>'; print_r( $_POST ); echo '</pre>';
        }*/
        //print('<pre>'.print_r( $_POST, true ).'</pre>');
        if( isset( $_POST['submit_gir_disable_date'] ) ){
        	$submit_data = json_encode( $_POST );
        	$submit_data_arr = json_decode( $submit_data, true );
        	update_option( 'gir_disbale_dates', $submit_data_arr['group-a'] );
        	//print('<pre>'.print_r( $submit_data_arr, true ).'</pre>');
        }
        if( isset( $_POST['submit_devalia_disable_date'] ) ){
        	$submit_data = json_encode( $_POST );
        	$submit_data_arr = json_decode( $submit_data, true );
        	update_option( 'devalia_disbale_dates', $submit_data_arr['group-b'] );
        	//print('<pre>'.print_r( $submit_data_arr, true ).'</pre>');
        }
        ?>
        <div class="wrap">
            <div class="metabox-holder">
                <div id="gir_booking_disable_dates" class="safari_booking_disable_dates">
                	<h3>Disbale Dates for Gir jungle trail</h3>
                	<form method="post" class="repeater">
                		<div data-repeater-list="group-a">
	                		<?php
	                		$gir_time_arr = array(
	                			'06:00 am to 09:00 am' => '06:00 am to 09:00 am',
		                        '8:30 am to 11:30 am' => '8:30 am to 11:30 am',
		                        '4:00 pm to 7:00 pm' => '4:00 pm to 7:00 pm'
	                		);
	                		$gir_disbale_dates = get_option( 'gir_disbale_dates', true );
	                		if( is_array( $gir_disbale_dates ) && !empty( $gir_disbale_dates ) ){
	                			foreach ( $gir_disbale_dates as $key => $date_record ) {
	                				//print('<pre>'.print_r( $date_record, true ).'</pre>');
	                				?>
	                				<div class="card" data-repeater-item>
										<div class="fields">
											<div class="form-group">
												<label class="control-label">Disable Date</label>
												<input type="text" class="datepicker form-control" name="disbale_date" autocomplete="off" value="<?php echo $date_record['disbale_date'] ?>" />
											</div>
											<div class="form-group form-check">
												<?php if( !empty( $gir_time_arr ) ){ ?>
													<?php foreach ( $gir_time_arr as $time_val => $time_label ) { ?>
														<label class="form-check-label">
						                                    <input type="checkbox" class="form-check-input" name="gir_jungle_trail_timing" value="<?php echo $time_val; ?>" <?php echo ( in_array( $time_val, $date_record['gir_jungle_trail_timing'] ) ? 'checked' : '' ); ?>><?php echo $time_label; ?>
														</label>
													<?php } ?>
												<?php } ?>
				                            </div>
											<input data-repeater-delete type="button" class="button button-primary" value="Delete"/>
										</div>
									</div>
									<?php
	                			}
	                		} else {
		                		?>
								<div class="card" data-repeater-item>
									<div class="fields">
										<div class="form-group">
											<label class="control-label">Disable Date</label>
											<input type="text" class="datepicker form-control" name="disbale_date" autocomplete="off" />
										</div>
										<div class="form-group form-check">
											<?php if( !empty( $gir_time_arr ) ){ ?>
												<?php foreach ( $gir_time_arr as $time_val => $time_label ) { ?>
													<label class="form-check-label">
					                                    <input type="checkbox" class="form-check-input" name="gir_jungle_trail_timing" value="<?php echo $time_val; ?>"><?php echo $time_label; ?>
													</label>
												<?php } ?>
											<?php } ?>
			                            </div>
										<input data-repeater-delete type="button" class="button button-primary" value="Delete"/>
									</div>
								</div>
							<?php } ?>
						</div>
						<input data-repeater-create type="button" class="button button-primary" value="Add Dates"/>
						<input type="submit" name="submit_gir_disable_date" class="button button-primary" value="Submit Gir Dates">
                	</form>
                </div>
                <div id="devalia_booking_disable_dates" class="safari_booking_disable_dates">
                	<h3>Disbale Dates for Devalia park</h3>
                	<form method="post" class="repeater_devalia">
                		<div data-repeater-list="group-b">
	                		<?php
	                		$devalia_time_arr = array(
	                			'7:00 am to 7:55 am' => '7:00 am to 7:55 am',
		                        '8:00 am to 8:55 am' => '8:00 am to 8:55 am',
		                        '9:00 am to 9:55 am' => '9:00 am to 9:55 am',
		                        '10:00 am to 10:55 am' => '10:00 am to 10:55 am',
		                        '3:00 pm to 3:55 pm' => '3:00 pm to 3:55 pm',
		                        '4:00 pm to 4:55 pm' => '4:00 pm to 4:55 pm',
		                        '5:00 pm to 5:55 pm' => '5:00 pm to 5:55 pm'
	                		);
	                		$devalia_disbale_dates = get_option( 'devalia_disbale_dates', true );
	                		//print('<pre>'.print_r( $devalia_disbale_dates, true ).'</pre>');
	                		if( is_array( $devalia_disbale_dates ) && !empty( $devalia_disbale_dates ) ){
	                			foreach ( $devalia_disbale_dates as $key => $date_record ) {
	                				//print('<pre>'.print_r( $date_record, true ).'</pre>');
	                				?>
	                				<div class="card" data-repeater-item>
										<div class="fields">
											<div class="form-group">
												<label class="control-label">Disable Date</label>
												<input type="text" class="datepicker form-control" name="disbale_date" autocomplete="off" value="<?php echo $date_record['disbale_date'] ?>" />
											</div>
											<div class="form-group form-check">
												<?php if( !empty( $devalia_time_arr ) ){ ?>
													<?php foreach ( $devalia_time_arr as $time_val => $time_label ) { ?>
														<label class="form-check-label">
						                                    <input type="checkbox" class="form-check-input" name="devalia_park_timing" value="<?php echo $time_val; ?>" <?php echo ( in_array( $time_val, $date_record['devalia_park_timing'] ) ? 'checked' : '' ); ?>><?php echo $time_label; ?>
														</label>
													<?php } ?>
												<?php } ?>
				                            </div>
											<input data-repeater-delete type="button" class="button button-primary" value="Delete"/>
										</div>
									</div>
									<?php
	                			}
	                		} else {
		                		?>
								<div class="card" data-repeater-item>
									<div class="fields">
										<div class="form-group">
											<label class="control-label">Disable Date</label>
											<input type="text" class="datepicker form-control" name="disbale_date" autocomplete="off" />
										</div>
										<div class="form-group form-check">
											<?php if( !empty( $devalia_time_arr ) ){ ?>
												<?php foreach ( $devalia_time_arr as $time_val => $time_label ) { ?>
													<label class="form-check-label">
					                                    <input type="checkbox" class="form-check-input" name="devalia_park_timing" value="<?php echo $time_val; ?>"><?php echo $time_label; ?>
													</label>
												<?php } ?>
											<?php } ?>
			                            </div>
										<input data-repeater-delete type="button" class="button button-primary" value="Delete"/>
									</div>
								</div>
							<?php } ?>
						</div>
						<input data-repeater-create type="button" class="button button-primary" value="Add Dates"/>
						<input type="submit" name="submit_devalia_disable_date" class="button button-primary" value="Submit Devalia Dates">
                	</form>
                </div>
            </div>
        </div>
        <?php
    }

    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    function get_pages() {
        $pages = get_pages();
        $pages_options = array();
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }

        return $pages_options;
    }

}
endif;

new WeDevs_Settings_API_Test();