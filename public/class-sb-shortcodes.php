<?php
/**
 * SB_Shortcodes
 */
class SB_Shortcodes{
	
	function __construct(){
		add_shortcode( 'booking_form', array( $this, 'booking_form' ) );
		add_shortcode( 'booking_form_gir_jungle', array( $this, 'booking_form_gir_jungle' ) );
		add_shortcode( 'booking_form_devalia_park', array( $this, 'booking_form_devalia_park' ) );
		add_shortcode( 'payment_form', array( $this, 'payment_form' ) );
		add_shortcode( 'booking_thank_you', array( $this, 'booking_thank_you' ) );
	}

	public function booking_form( $atts ) {
		
		$safari_booking_basic_settings = get_option( 'safari_booking_basic_settings' );
		$payment_form_url = get_permalink( $safari_booking_basic_settings['payment_page'] );
	    $atts = shortcode_atts( array(
	        '' => '',
	    ), $atts, 'booking_form' );
	 	
	    ob_start();
	    ?>
	    <div class="Jungle-tab" style="display: none;">
	      	<ul class="nav nav-tabs tigertabs">
	        	<li class="active">
	          		<a href="#gir-jungle-trail-tab">Gir Jungle Trail Safari Booking</a>
	        	</li>
	        	<li class="">
	          		<a href="#devalia-park-tab">Devalia Park Safari Booking</a>
	        	</li>
	      	</ul>
	      	<!-- Tab panes -->
	      	<div class="tab-content tab-bg">
	        	<div id="gir-jungle-trail-tab" class="container tab-bg tab-pane active in">
	        		<div class="avialbility-error" style="color: red;display: none;margin-bottom: 30px !important;"></div>
	          		<form method="GET" action="<?php echo $payment_form_url; ?>" id="gir-jungle-trail-form" autocomplete="off" _lpchecked="1">
	            		<div class="form-group row">
	              			<label for="colFormLabelLg" class="col-sm-3">Date :</label>
	          				<div class="col-sm-9">
	            				<input type="text" class="form-control" name="date" id="gir-datepicker" value="<?php echo date('d-m-Y'); ?>" required="">
	          				</div>
	            		</div>
	            		<div class="form-group row">
	              			<label for="colFormLabelLg" class="col-sm-3">Timings :</label>
	              			<div class="col-sm-9">
	                			<select class="form-control" name="time" id="girtime" required="">
	                  				<option value="">---Please Select---</option>
	                  				<option value="06:00 am to 09:00 am">06:00 am to 09:00 am</option>
	                  				<option value="8:30 am to 11:30 am">8:30 am to 11:30 am</option>
	                  				<option value="4:00 pm to 7:00 pm">4:00 pm to 7:00 pm</option>
	                			</select>
	              			</div>
	            		</div>
	            		<div class="form-group row">
	              			<label for="colFormLabelLg" class="col-sm-3">Adult :</label>
	              			<div class="col-sm-9">
		                		<select class="form-control" name="adult" id="giradult" required="">
		                  			<option value="">---Please Select---</option>
		                  			<option value="1">1</option>
		                  			<option value="2">2</option>
		                  			<option value="3">3</option>
		                  			<option value="4">4</option>
		                  			<option value="5">5</option>
		                  			<option value="6">6</option>
		                		</select>
	              			</div>
	            		</div>
	            		<div class="form-group row">
	              			<label for="colFormLabelLg" class="col-sm-3">Child :</label>
	              			<div class="col-sm-9">
		                		<select class="form-control" name="child" id="girchild">
				              		<option value="">---Please Select---</option>
				              		<option value="1">1</option>
				              		<option value="2">2</option>
				              		<option value="3">3</option>
				              		<option value="4">4</option>
				              		<option value="5">5</option>
				              		<option value="6">6</option>
		                		</select>
		              		</div>
	            		</div>
	            		<button type="submit" class="btn btn-primary my-1 submit-dev-form" id="gir-jungle-trail-submit">Book Now</button>
	            		<input type="hidden" class="booking-type" name="type" value="gir-jungle-trail">
	          		</form>
	        	</div>
		        <div id="devalia-park-tab" class="container tab-bg tab-pane fade">
		        	<div class="avialbility-error" style="color: red;display: none;margin-bottom: 30px !important;"></div>
		          	<form id="devalia-park-form" method="GET" action="<?php echo $payment_form_url; ?>"> 
		            	<div class="form-group row">
		              		<label for="colFormLabelLg" class="col-sm-3">Date :</label>
		              		<div class="col-sm-9">
				                <input type="text" class="form-control" name="date" id="dev-datepicker" value="<?php echo date('d-m-Y'); ?>" required="">
		              		</div>
		            	</div>
		            	<div class="form-group row">
		              		<label for="colFormLabelLg" class="col-sm-3">Timings :</label>
		              		<div class="col-sm-9">
				                <select class="form-control" name="time" id="devtime" required="">
				                  	<option value="">---Please Select---</option>
				                  	<option value="7:00 am to 7:55 am">7:00 am to 7:55 am</option>
				                  	<option value="8:00 am to 8:55 am">8:00 am to 8:55 am</option>
				                  	<option value="9:00 am to 9:55 am">9:00 am to 9:55 am</option>
				                  	<option value="10:00 am to 10:55 am">10:00 am to 10:55 am</option>
				                  	<option value="3:00 pm to 3:55 pm">3:00 pm to 3:55 pm</option>
				                  	<option value="4:00 pm to 4:55 pm">4:00 pm to 4:55 pm</option>
				                  	<option value="5:00 pm to 5:55 pm">5:00 pm to 5:55 pm</option>
				                </select>
		              		</div>
		            	</div>
		            	<div class="form-group row">
		              		<label for="colFormLabelLg" class="col-sm-3">Adult :</label>
		              		<div class="col-sm-9">
				                <select class="form-control" name="adult" id="devadult" required="">
				                  	<option value="">---Please Select---</option>
				                  	<option value="1">1</option>
				                  	<option value="2">2</option>
				                  	<option value="3">3</option>
				                  	<option value="4">4</option>
				                  	<option value="5">5</option>
				                  	<option value="6">6</option>
				                </select>
		              		</div>
		            	</div>
		            	<div class="form-group row">
		              		<label for="colFormLabelLg" class="col-sm-3">Child :</label>
		              		<div class="col-sm-9">
				                <select class="form-control" name="child" id="devchild">
				                  	<option value="0">---Please Select---</option>
				                  	<option value="1">1</option>
				                  	<option value="2">2</option>
				                  	<option value="3">3</option>
				                  	<option value="4">4</option>
				                  	<option value="5">5</option>
				                  	<option value="6">6</option>
				                </select>
		              		</div>
		            	</div>
		            	<button type="submit" class="btn btn-primary my-1 submit-dev-form" id="devalia-park-submit">Book Now</button>
		            	<input type="hidden" class="booking-type" name="type" value="devalia-park">
		          	</form>
		        </div>
	      	</div>
	    </div>
	    <?php
	    $html = ob_get_clean();
	    return $html;
	}

	public function booking_form_gir_jungle( $atts ) {
		
		$safari_booking_basic_settings = get_option( 'safari_booking_basic_settings' );
		$payment_form_url = get_permalink( $safari_booking_basic_settings['payment_page'] );
	    $atts = shortcode_atts( array(
	        '' => '',
	    ), $atts, 'booking_form_gir_jungle' );
	 	
	    ob_start();
	    ?>
	    <div class="Jungle-tab" style="display: none;">
	      	<ul class="nav nav-tabs tigertabs">
	        	<li class="active" style="width: 100% !important;">
	          		<a href="#gir-jungle-trail-tab">Gir Jungle Trail Safari Booking</a>
	        	</li>
	      	</ul>
	      	<!-- Tab panes -->
	      	<div class="tab-content tab-bg">
	        	<div id="gir-jungle-trail-tab" class="container tab-bg tab-pane active in">
	        		<div class="avialbility-error" style="color: red;display: none;margin-bottom: 30px !important;"></div>
	          		<form method="GET" action="<?php echo $payment_form_url; ?>" id="gir-jungle-trail-form" autocomplete="off" _lpchecked="1">
	            		<div class="form-group row">
	              			<label for="colFormLabelLg" class="col-sm-3">Date :</label>
	          				<div class="col-sm-9">
	            				<input type="text" class="form-control" name="date" id="gir-datepicker" value="<?php echo date('d-m-Y'); ?>" required="">
	          				</div>
	            		</div>
	            		<div class="form-group row">
	              			<label for="colFormLabelLg" class="col-sm-3">Timings :</label>
	              			<div class="col-sm-9">
	                			<select class="form-control" name="time" id="girtime" required="">
	                  				<option value="">---Please Select---</option>
	                  				<option value="06:00 am to 09:00 am">06:00 am to 09:00 am</option>
	                  				<option value="8:30 am to 11:30 am">8:30 am to 11:30 am</option>
	                  				<option value="4:00 pm to 7:00 pm">4:00 pm to 7:00 pm</option>
	                			</select>
	              			</div>
	            		</div>
	            		<div class="form-group row">
	              			<label for="colFormLabelLg" class="col-sm-3">Adult :</label>
	              			<div class="col-sm-9">
		                		<select class="form-control" name="adult" id="giradult" required="">
		                  			<option value="">---Please Select---</option>
		                  			<option value="1">1</option>
		                  			<option value="2">2</option>
		                  			<option value="3">3</option>
		                  			<option value="4">4</option>
		                  			<option value="5">5</option>
		                  			<option value="6">6</option>
		                		</select>
	              			</div>
	            		</div>
	            		<div class="form-group row">
	              			<label for="colFormLabelLg" class="col-sm-3">Child :</label>
	              			<div class="col-sm-9">
		                		<select class="form-control" name="child" id="girchild">
				              		<option value="">---Please Select---</option>
				              		<option value="1">1</option>
				              		<option value="2">2</option>
				              		<option value="3">3</option>
				              		<option value="4">4</option>
				              		<option value="5">5</option>
				              		<option value="6">6</option>
		                		</select>
		              		</div>
	            		</div>
	            		<button type="submit" class="btn btn-primary my-1 submit-dev-form" id="gir-jungle-trail-submit">Book Now</button>
	            		<input type="hidden" class="booking-type" name="type" value="gir-jungle-trail">
	          		</form>
	        	</div>
	      	</div>
	    </div>
	    <?php
	    $html = ob_get_clean();
	    return $html;
	}

	public function booking_form_devalia_park( $atts ) {
		
		$safari_booking_basic_settings = get_option( 'safari_booking_basic_settings' );
		$payment_form_url = get_permalink( $safari_booking_basic_settings['payment_page'] );
	    $atts = shortcode_atts( array(
	        '' => '',
	    ), $atts, 'booking_form_devalia_park' );
	 	
	    ob_start();
	    ?>
	    <div class="Jungle-tab" style="display: none;">
	      	<ul class="nav nav-tabs tigertabs">
	        	<li class="active" style="width: 100% !important;">
	          		<a href="#devalia-park-tab">Devalia Park Safari Booking</a>
	        	</li>
	      	</ul>
	      	<!-- Tab panes -->
	      	<div class="tab-content tab-bg">
	        	<div id="devalia-park-tab" class="container tab-bg tab-pane fade">
		        	<div class="avialbility-error" style="color: red;display: none;margin-bottom: 30px !important;"></div>
		          	<form id="devalia-park-form" method="GET" action="<?php echo $payment_form_url; ?>"> 
		            	<div class="form-group row">
		              		<label for="colFormLabelLg" class="col-sm-3">Date :</label>
		              		<div class="col-sm-9">
				                <input type="text" class="form-control" name="date" id="dev-datepicker" value="<?php echo date('d-m-Y'); ?>" required="">
		              		</div>
		            	</div>
		            	<div class="form-group row">
		              		<label for="colFormLabelLg" class="col-sm-3">Timings :</label>
		              		<div class="col-sm-9">
				                <select class="form-control" name="time" id="devtime" required="">
				                  	<option value="">---Please Select---</option>
				                  	<option value="7:00 am to 7:55 am">7:00 am to 7:55 am</option>
				                  	<option value="8:00 am to 8:55 am">8:00 am to 8:55 am</option>
				                  	<option value="9:00 am to 9:55 am">9:00 am to 9:55 am</option>
				                  	<option value="10:00 am to 10:55 am">10:00 am to 10:55 am</option>
				                  	<option value="3:00 pm to 3:55 pm">3:00 pm to 3:55 pm</option>
				                  	<option value="4:00 pm to 4:55 pm">4:00 pm to 4:55 pm</option>
				                  	<option value="5:00 pm to 5:55 pm">5:00 pm to 5:55 pm</option>
				                </select>
		              		</div>
		            	</div>
		            	<div class="form-group row">
		              		<label for="colFormLabelLg" class="col-sm-3">Adult :</label>
		              		<div class="col-sm-9">
				                <select class="form-control" name="adult" id="devadult" required="">
				                  	<option value="">---Please Select---</option>
				                  	<option value="1">1</option>
				                  	<option value="2">2</option>
				                  	<option value="3">3</option>
				                  	<option value="4">4</option>
				                  	<option value="5">5</option>
				                  	<option value="6">6</option>
				                </select>
		              		</div>
		            	</div>
		            	<div class="form-group row">
		              		<label for="colFormLabelLg" class="col-sm-3">Child :</label>
		              		<div class="col-sm-9">
				                <select class="form-control" name="child" id="devchild">
				                  	<option value="0">---Please Select---</option>
				                  	<option value="1">1</option>
				                  	<option value="2">2</option>
				                  	<option value="3">3</option>
				                  	<option value="4">4</option>
				                  	<option value="5">5</option>
				                  	<option value="6">6</option>
				                </select>
		              		</div>
		            	</div>
		            	<button type="submit" class="btn btn-primary my-1 submit-dev-form" id="devalia-park-submit">Book Now</button>
		            	<input type="hidden" class="booking-type" name="type" value="devalia-park">
		          	</form>
		        </div>
	      	</div>
	    </div>
	    <?php
	    $html = ob_get_clean();
	    return $html;
	}

	public function payment_form( $atts ) {
		$safari_booking_basic_settings = get_option( 'safari_booking_basic_settings' );
		$thank_you_page_url = get_permalink( $safari_booking_basic_settings['thank_you_page'] );
	    $atts = shortcode_atts( array(
	        'thankyou_url' => '',
	    ), $atts, 'payment_form' );
	 	
	    ob_start();

	    if( !isset( $_GET['date'] ) || $_GET['date'] == '' ){
	    	return "Please select date to proceed further to booking.";
	    }

	    if( !isset( $_GET['time'] ) || $_GET['time'] == '' ){
	    	return "Please select time to proceed further to booking.";
	    }

	    if( isset( $_GET['date'] ) &&  $_GET['date'] != '' ){

	    	$today_date = date( 'Y-m-d' );
	    	$booking_date = date( 'Y-m-d', strtotime( $_GET['date'] ) );

	    	if( $booking_date < $today_date ){
	    		return "The booking date must be greater than today's date.";
	    	}

	    }

	    if( !isset( $_GET['adult'] ) || $_GET['adult'] == '' ){
	    	return "Please select 1 adult to proceed further to booking.";
	    }

	    $total_person = (int) $_GET['adult'] + (int) $_GET['child'];

	    if( $total_person > apply_filters( 'safari_booking_total_person_capacity', 7 ) ){
	    	return "Sorry, you can not select more than ".apply_filters( 'safari_booking_total_person_capacity', 7 )." passengers.";	
	    }

	    ?>
	    <div class="booking">
		    <div class="container">
		        <h1>
		        	<?php 
		        		if( isset( $_GET['type'] ) &&  $_GET['type'] == 'gir-jungle-trail' ){
				        	echo  "Gir Jungle Trail Booking";
				        }else{
				        	echo "Devalia Park Safari Booking";
				        }	
		        	?>
		    	</h1>
		        <div class="row">
		            <input type="hidden" id="submit-form-click" value="0">
		            <form method="post" id="payment_form">
		                <div class="col-sm-12">
		                    <div class="panel booking">
		                        <div class="panel-heading booking-title">Booking Person Details</div>
		                        <div class="panel-body">
		                            <div class="row">
		                                <div class="col-sm-3 col-xs-12 center">
		                                    <input type="hidden" name="date" value="<?php echo $_GET['date']; ?>">
		                                    <input type="hidden" name="time" value="<?php echo $_GET['time']; ?>">
		                                    <input type="hidden" name="adult" value="<?php echo $_GET['adult']; ?>">
		                                    <input type="hidden" name="child" value="<?php echo $_GET['child']; ?>">
		                                    <input type="hidden" name="type" value="<?php echo $_GET['type']; ?>">
		                                    <label for="bookingdate">Booking Date : </label>
		                                    <span><?php echo $_GET['date']; ?></span>
		                                </div>
		                                <div class="col-sm-3 col-xs-12">
		                                    <label for="bookingtime">Booking Timing : </label>
		                                    <span><?php echo $_GET['time']; ?></span>
		                                </div>
		                                <div class="col-sm-3 col-xs-12">
		                                    <label for="bookingtime">No. of Adult : </label>
		                                    <span><?php echo $_GET['adult']; ?></span>
		                                </div>
		                                <div class="col-sm-3 col-xs-12">
		                                    <label for="bookingtime">No. of Child : </label>
		                                    <span><?php echo $_GET['child']; ?></span>
		                                </div>
		                            </div>
		                            <div class="top-form">
		                                <div class="row">
		                                    <div class="form">
		                                        <div class="col-sm-4">
		                                            <div class="row">
		                                                <div class="col-sm-4">
		                                                    <label for="name">Name : </label>
		                                                </div>
		                                                <div class="col-sm-8">
		                                                    <input type="text" class="form-control" name="customer_name" placeholder="Name" required="">
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="row">
		                                                <div class="col-sm-4">
		                                                    <label for="mobile">Mobile No. : </label>
		                                                </div>
		                                                <div class="col-sm-8">
		                                                    <input type="number" class="form-control" name="mobile" placeholder="Mobile No." required="">
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="row">
		                                                <div class="col-sm-4">
		                                                    <label for="mobile">Email ID : </label>
		                                                </div>
		                                                <div class="col-sm-8">
		                                                    <input type="email" class="form-control" name="email" placeholder="Email ID" required="">
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-12">
		                                            <label for="mobile">Full Address : </label>
		                                            <textarea class="form-control" rows="3" name="address" placeholder="Full Address..." required=""></textarea>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="panel booking">
		                        <div class="panel-heading booking-title">Please fill out the Traveller Details</div>
		                        <div class="panel-body">
		                            <div class="traveller-details">
		                                <div class="row">
		                                    <div class="form-inline">
		                                    	<h5>Adult Details:</h5>
		                                    	<?php for ( $adult = 0; $adult < $_GET['adult']; $adult++) { ?>
			                                    	<div class="adult-row">
				                                        <div class="form-group number">
				                                            <span><?php echo $adult+1; ?></span>
				                                        </div>
				                                        <div class="form-group adult-heading">
				                                            Adult
				                                        </div>
				                                        <div class="form-group adult-name">
				                                            <input type="text" class="form-control" name="adults[<?php echo $adult; ?>][name]" placeholder="Full Name" required="">
				                                        </div>
				                                        <div class="form-group adult-age">
				                                            <!-- <input type="number" min="13" max="64" maxlength="3" class="form-control age1" name="age[]" placeholder="Age" required> -->
				                                            <input type="number" maxlength="3" class="form-control age1" name="adults[<?php echo $adult; ?>][age]" placeholder="Age" required="">
				                                        </div>
				                                        <div class="form-group adult-gender">
				                                            <select class="form-control gender1" name="adults[<?php echo $adult; ?>][gender]" required="">
				                                                <option value="">Gender</option>
				                                                <option value="Male">Male</option>
				                                                <option value="Female">Female</option>
				                                            </select>
				                                        </div>
				                                        <div class="form-group adult-nationality">
				                                            <select class="form-control nationality_select nationality_select_field nationality_div" name="adults[<?php echo $adult; ?>][nationality]" required="">
				                                                <option value="">Nationality</option>
				                                                <option value="Indian">Indian</option>
				                                                <option value="Foreigner">Foreigner</option>
				                                            </select>
				                                            <div class="select-state">
				                                                <select class="form-control state_select" name="adults[<?php echo $adult; ?>][state]" required="">
				                                                    <option value="">Select State</option>
				                                                    <option value="Andaman &amp; Nicobar Islands">Andaman &amp; Nicobar Islands</option>
				                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
				                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
				                                                    <option value="Assam">Assam</option>
				                                                    <option value="Bihar">Bihar</option>
				                                                    <option value="Chandigarh">Chandigarh</option>
				                                                    <option value="Chattisgarh">Chattisgarh</option>
				                                                    <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
				                                                    <option value="Daman &amp; Diu">Daman &amp; Diu</option>
				                                                    <option value="Delhi">Delhi</option>
				                                                    <option value="Goa">Goa</option>
				                                                    <option value="Gujarat">Gujarat</option>
				                                                    <option value="Haryana">Haryana</option>
				                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
				                                                    <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
				                                                    <option value="Jharkhand">Jharkhand</option>
				                                                    <option value="Karnataka">Karnataka</option>
				                                                    <option value="Kerala">Kerala</option>
				                                                    <option value="Lakshadweep">Lakshadweep</option>
				                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
				                                                    <option value="Maharashtra">Maharashtra</option>
				                                                    <option value="Manipur">Manipur</option>
				                                                    <option value="Meghalaya">Meghalaya</option>
				                                                    <option value="Mizoram">Mizoram</option>
				                                                    <option value="Nagaland">Nagaland</option>
				                                                    <option value="Odisha">Odisha</option>
				                                                    <option value="Poducherry">Poducherry</option>
				                                                    <option value="Punjab">Punjab</option>
				                                                    <option value="Rajasthan">Rajasthan</option>
				                                                    <option value="Sikkim">Sikkim</option>
				                                                    <option value="Tamil Nadu">Tamil Nadu</option>
				                                                    <option value="Telangana">Telangana</option>
				                                                    <option value="Tripura">Tripura</option>
				                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
				                                                    <option value="Uttarakhand">Uttarakhand</option>
				                                                    <option value="West Bengal">West Bengal</option>
				                                                </select>
				                                                <select style="display: none;" class="form-control country_select" name="adults[<?php echo $adult; ?>][country]" required="">
				                                                    <option value="">Select Country</option>
				                                                    <option value="Afghanistan">Afghanistan</option>
				                                                    <option value="Albania">Albania</option>
				                                                    <option value="Algeria">Algeria</option>
				                                                    <option value="American Samoa">American Samoa</option>
				                                                    <option value="Andorra">Andorra</option>
				                                                    <option value="Angola">Angola</option>
				                                                    <option value="Anguilla">Anguilla</option>
				                                                    <option value="Antarctica">Antarctica</option>
				                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
				                                                    <option value="Argentina">Argentina</option>
				                                                    <option value="Armenia">Armenia</option>
				                                                    <option value="Aruba">Aruba</option>
				                                                    <option value="Australia">Australia</option>
				                                                    <option value="Austria">Austria</option>
				                                                    <option value="Azerbaijan">Azerbaijan</option>
				                                                    <option value="Bahamas">Bahamas</option>
				                                                    <option value="Bahrain">Bahrain</option>
				                                                    <option value="Bangladesh">Bangladesh</option>
				                                                    <option value="Barbados">Barbados</option>
				                                                    <option value="Belarus">Belarus</option>
				                                                    <option value="Belgium">Belgium</option>
				                                                    <option value="Belize">Belize</option>
				                                                    <option value="Benin">Benin</option>
				                                                    <option value="Bermuda">Bermuda</option>
				                                                    <option value="Bhutan">Bhutan</option>
				                                                    <option value="Bolivia">Bolivia</option>
				                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
				                                                    <option value="Botswana">Botswana</option>
				                                                    <option value="Bouvet Island">Bouvet Island</option>
				                                                    <option value="Brazil">Brazil</option>
				                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
				                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
				                                                    <option value="Bulgaria">Bulgaria</option>
				                                                    <option value="Burkina Faso">Burkina Faso</option>
				                                                    <option value="Burundi">Burundi</option>
				                                                    <option value="Cambodia">Cambodia</option>
				                                                    <option value="Cameroon">Cameroon</option>
				                                                    <option value="Canada">Canada</option>
				                                                    <option value="Cape Verde">Cape Verde</option>
				                                                    <option value="Cayman Islands">Cayman Islands</option>
				                                                    <option value="Central African Republic">Central African Republic</option>
				                                                    <option value="Chad">Chad</option>
				                                                    <option value="Chile">Chile</option>
				                                                    <option value="China">China</option>
				                                                    <option value="Christmas Island">Christmas Island</option>
				                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
				                                                    <option value="Colombia">Colombia</option>
				                                                    <option value="Comoros">Comoros</option>
				                                                    <option value="Congo">Congo</option>
				                                                    <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
				                                                    <option value="Cook Islands">Cook Islands</option>
				                                                    <option value="Costa Rica">Costa Rica</option>
				                                                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>
				                                                    <option value="Croatia">Croatia</option>
				                                                    <option value="Cuba">Cuba</option>
				                                                    <option value="Cyprus">Cyprus</option>
				                                                    <option value="Czech Republic">Czech Republic</option>
				                                                    <option value="Denmark">Denmark</option>
				                                                    <option value="Djibouti">Djibouti</option>
				                                                    <option value="Dominica">Dominica</option>
				                                                    <option value="Dominican Republic">Dominican Republic</option>
				                                                    <option value="Ecuador">Ecuador</option>
				                                                    <option value="Egypt">Egypt</option>
				                                                    <option value="El Salvador">El Salvador</option>
				                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
				                                                    <option value="Eritrea">Eritrea</option>
				                                                    <option value="Estonia">Estonia</option>
				                                                    <option value="Ethiopia">Ethiopia</option>
				                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
				                                                    <option value="Faroe Islands">Faroe Islands</option>
				                                                    <option value="Fiji">Fiji</option>
				                                                    <option value="Finland">Finland</option>
				                                                    <option value="France">France</option>
				                                                    <option value="French Guiana">French Guiana</option>
				                                                    <option value="French Polynesia">French Polynesia</option>
				                                                    <option value="French Southern Territories">French Southern Territories</option>
				                                                    <option value="Gabon">Gabon</option>
				                                                    <option value="Gambia">Gambia</option>
				                                                    <option value="Georgia">Georgia</option>
				                                                    <option value="Germany">Germany</option>
				                                                    <option value="Ghana">Ghana</option>
				                                                    <option value="Gibraltar">Gibraltar</option>
				                                                    <option value="Greece">Greece</option>
				                                                    <option value="Greenland">Greenland</option>
				                                                    <option value="Grenada">Grenada</option>
				                                                    <option value="Guadeloupe">Guadeloupe</option>
				                                                    <option value="Guam">Guam</option>
				                                                    <option value="Guatemala">Guatemala</option>
				                                                    <option value="Guinea">Guinea</option>
				                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
				                                                    <option value="Guyana">Guyana</option>
				                                                    <option value="Haiti">Haiti</option>
				                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
				                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
				                                                    <option value="Honduras">Honduras</option>
				                                                    <option value="Hong Kong">Hong Kong</option>
				                                                    <option value="Hungary">Hungary</option>
				                                                    <option value="Iceland">Iceland</option>
				                                                    <option value="India">India</option>
				                                                    <option value="Indonesia">Indonesia</option>
				                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
				                                                    <option value="Iraq">Iraq</option>
				                                                    <option value="Ireland">Ireland</option>
				                                                    <option value="Israel">Israel</option>
				                                                    <option value="Italy">Italy</option>
				                                                    <option value="Jamaica">Jamaica</option>
				                                                    <option value="Japan">Japan</option>
				                                                    <option value="Jordan">Jordan</option>
				                                                    <option value="Kazakhstan">Kazakhstan</option>
				                                                    <option value="Kenya">Kenya</option>
				                                                    <option value="Kiribati">Kiribati</option>
				                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
				                                                    <option value="Korea, Republic of">Korea, Republic of</option>
				                                                    <option value="Kuwait">Kuwait</option>
				                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
				                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
				                                                    <option value="Latvia">Latvia</option>
				                                                    <option value="Lebanon">Lebanon</option>
				                                                    <option value="Lesotho">Lesotho</option>
				                                                    <option value="Liberia">Liberia</option>
				                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
				                                                    <option value="Liechtenstein">Liechtenstein</option>
				                                                    <option value="Lithuania">Lithuania</option>
				                                                    <option value="Luxembourg">Luxembourg</option>
				                                                    <option value="Macao">Macao</option>
				                                                    <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
				                                                    <option value="Madagascar">Madagascar</option>
				                                                    <option value="Malawi">Malawi</option>
				                                                    <option value="Malaysia">Malaysia</option>
				                                                    <option value="Maldives">Maldives</option>
				                                                    <option value="Mali">Mali</option>
				                                                    <option value="Malta">Malta</option>
				                                                    <option value="Marshall Islands">Marshall Islands</option>
				                                                    <option value="Martinique">Martinique</option>
				                                                    <option value="Mauritania">Mauritania</option>
				                                                    <option value="Mauritius">Mauritius</option>
				                                                    <option value="Mayotte">Mayotte</option>
				                                                    <option value="Mexico">Mexico</option>
				                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
				                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
				                                                    <option value="Monaco">Monaco</option>
				                                                    <option value="Mongolia">Mongolia</option>
				                                                    <option value="Montserrat">Montserrat</option>
				                                                    <option value="Morocco">Morocco</option>
				                                                    <option value="Mozambique">Mozambique</option>
				                                                    <option value="Myanmar">Myanmar</option>
				                                                    <option value="Namibia">Namibia</option>
				                                                    <option value="Nauru">Nauru</option>
				                                                    <option value="Nepal">Nepal</option>
				                                                    <option value="Netherlands">Netherlands</option>
				                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
				                                                    <option value="New Caledonia">New Caledonia</option>
				                                                    <option value="New Zealand">New Zealand</option>
				                                                    <option value="Nicaragua">Nicaragua</option>
				                                                    <option value="Niger">Niger</option>
				                                                    <option value="Nigeria">Nigeria</option>
				                                                    <option value="Niue">Niue</option>
				                                                    <option value="Norfolk Island">Norfolk Island</option>
				                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
				                                                    <option value="Norway">Norway</option>
				                                                    <option value="Oman">Oman</option>
				                                                    <option value="Pakistan">Pakistan</option>
				                                                    <option value="Palau">Palau</option>
				                                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
				                                                    <option value="Panama">Panama</option>
				                                                    <option value="Papua New Guinea">Papua New Guinea</option>
				                                                    <option value="Paraguay">Paraguay</option>
				                                                    <option value="Peru">Peru</option>
				                                                    <option value="Philippines">Philippines</option>
				                                                    <option value="Pitcairn">Pitcairn</option>
				                                                    <option value="Poland">Poland</option>
				                                                    <option value="Portugal">Portugal</option>
				                                                    <option value="Puerto Rico">Puerto Rico</option>
				                                                    <option value="Qatar">Qatar</option>
				                                                    <option value="Reunion">Reunion</option>
				                                                    <option value="Romania">Romania</option>
				                                                    <option value="Russian Federation">Russian Federation</option>
				                                                    <option value="Rwanda">Rwanda</option>
				                                                    <option value="Saint Helena">Saint Helena</option>
				                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
				                                                    <option value="Saint Lucia">Saint Lucia</option>
				                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
				                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
				                                                    <option value="Samoa">Samoa</option>
				                                                    <option value="San Marino">San Marino</option>
				                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
				                                                    <option value="Saudi Arabia">Saudi Arabia</option>
				                                                    <option value="Senegal">Senegal</option>
				                                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
				                                                    <option value="Seychelles">Seychelles</option>
				                                                    <option value="Sierra Leone">Sierra Leone</option>
				                                                    <option value="Singapore">Singapore</option>
				                                                    <option value="Slovakia">Slovakia</option>
				                                                    <option value="Slovenia">Slovenia</option>
				                                                    <option value="Solomon Islands">Solomon Islands</option>
				                                                    <option value="Somalia">Somalia</option>
				                                                    <option value="South Africa">South Africa</option>
				                                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
				                                                    <option value="Spain">Spain</option>
				                                                    <option value="Sri Lanka">Sri Lanka</option>
				                                                    <option value="Sudan">Sudan</option>
				                                                    <option value="Suriname">Suriname</option>
				                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
				                                                    <option value="Swaziland">Swaziland</option>
				                                                    <option value="Sweden">Sweden</option>
				                                                    <option value="Switzerland">Switzerland</option>
				                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
				                                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
				                                                    <option value="Tajikistan">Tajikistan</option>
				                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
				                                                    <option value="Thailand">Thailand</option>
				                                                    <option value="Timor-Leste">Timor-Leste</option>
				                                                    <option value="Togo">Togo</option>
				                                                    <option value="Tokelau">Tokelau</option>
				                                                    <option value="Tonga">Tonga</option>
				                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
				                                                    <option value="Tunisia">Tunisia</option>
				                                                    <option value="Turkey">Turkey</option>
				                                                    <option value="Turkmenistan">Turkmenistan</option>
				                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
				                                                    <option value="Tuvalu">Tuvalu</option>
				                                                    <option value="Uganda">Uganda</option>
				                                                    <option value="Ukraine">Ukraine</option>
				                                                    <option value="United Arab Emirates">United Arab Emirates</option>
				                                                    <option value="United Kingdom">United Kingdom</option>
				                                                    <option value="United States">United States</option>
				                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
				                                                    <option value="Uruguay">Uruguay</option>
				                                                    <option value="Uzbekistan">Uzbekistan</option>
				                                                    <option value="Vanuatu">Vanuatu</option>
				                                                    <option value="Venezuela">Venezuela</option>
				                                                    <option value="Viet Nam">Viet Nam</option>
				                                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
				                                                    <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
				                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
				                                                    <option value="Western Sahara">Western Sahara</option>
				                                                    <option value="Yemen">Yemen</option>
				                                                    <option value="Zambia">Zambia</option>
				                                                    <option value="Zimbabwe">Zimbabwe</option>
				                                                </select>
				                                            </div>
				                                        </div>
				                                        <div class="form-group adult-id">
				                                            <select class="form-control proof_select" name="adults[<?php echo $adult; ?>][id_proof]" required="">
				                                                <option value="">ID Proof</option>
				                                                <option value="Aadhar Card">Aadhar Card</option>
				                                                <option value="Voter ID">Voter ID</option>
				                                                <option value="Driving Licence">Driving Licence</option>
				                                                <option value="Passport">Passport</option>
				                                            </select>
				                                            <div class="select-state">
				                                                <input type="text" class="form-control" name="adults[<?php echo $adult; ?>][idnumber]" placeholder="Id Proof Number" required="">	
				                                            </div>
				                                        </div>
				                                        <div class="form-group adult-id-file upload">
				                                            <input type="file" title="This field is required. and the image Format Must Be JPG, JPEG, PNG and Maximum File Size Limit is 3MB." class="form-control idprooffile" required="required" accept=".png, .jpg, .jpeg" name="adults[<?php echo $adult; ?>]">
				                                            <div id="Div1">Upload (.jpg/.jpeg/.png) only. <br>size should be less then 8 MB </div>
				                                            <div class="alert" id="message" style="display: none"></div>
				                                        </div>
				                                        <input type="hidden" name="adults[<?php echo $adult; ?>][person_type]" value="adult">
				                                    </div>
			                                    <?php } ?>
		                                    </div>
		                                    <?php if( isset( $_GET['child'] ) && $_GET['child'] != '' && $_GET['child'] > 0 ){ ?>
			                                    <div class="form-inline second-row">
			                                        <hr>
			                                        <h5>Child Details:</h5>
			                                        <?php for ( $child = 0; $child < $_GET['child']; $child++) { ?>
				                                        <div class="child-row">
				                                            <div class="form-group child-span number">
				                                                <span><?php echo $child+1; ?></span>
				                                            </div>
				                                            <div class="form-group child-span adult-heading">
				                                                Child
				                                            </div>
				                                            <div class="form-group adult-name">
				                                                <input type="text" class="form-control" name="childs[<?php echo $child; ?>][name]" placeholder="Enter Full Name" required="">
				                                            </div>
				                                            <div class="form-group adult-age">
				                                                <input type="number" min="1" max="12" maxlength="2" class="form-control age2" name="childs[<?php echo $child; ?>][age]" placeholder="Age" required="">
				                                            </div>
				                                            <div class="form-group adult-gender">
				                                                <select class="form-control gender2" name="childs[<?php echo $child; ?>][gender]" required="">
				                                                    <option value="">Gender</option>
				                                                    <option value="Male">Male</option>
				                                                    <option value="Female">Female</option>
				                                                </select>
				                                            </div>
				                                            <div class="form-group adult-nationality">
				                                                <select class="form-control nationality_select nationality_select_field nationality_div" name="childs[<?php echo $child; ?>][nationality]" required="">
				                                                    <option value="">Nationality</option>
				                                                    <option value="Indian">Indian</option>
				                                                    <option value="Foreigner">Foreigner</option>
				                                                </select>
				                                                <div class="select-state">
				                                                    <select class="form-control state_select" name="childs[<?php echo $child; ?>][state]" required="">
				                                                        <option value="">Select State</option>
				                                                        <option value="Andaman &amp; Nicobar Islands">Andaman &amp; Nicobar Islands</option>
				                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
				                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
				                                                        <option value="Assam">Assam</option>
				                                                        <option value="Bihar">Bihar</option>
				                                                        <option value="Chandigarh">Chandigarh</option>
				                                                        <option value="Chattisgarh">Chattisgarh</option>
				                                                        <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
				                                                        <option value="Daman &amp; Diu">Daman &amp; Diu</option>
				                                                        <option value="Delhi">Delhi</option>
				                                                        <option value="Goa">Goa</option>
				                                                        <option value="Gujarat">Gujarat</option>
				                                                        <option value="Haryana">Haryana</option>
				                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
				                                                        <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
				                                                        <option value="Jharkhand">Jharkhand</option>
				                                                        <option value="Karnataka">Karnataka</option>
				                                                        <option value="Kerala">Kerala</option>
				                                                        <option value="Lakshadweep">Lakshadweep</option>
				                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
				                                                        <option value="Maharashtra">Maharashtra</option>
				                                                        <option value="Manipur">Manipur</option>
				                                                        <option value="Meghalaya">Meghalaya</option>
				                                                        <option value="Mizoram">Mizoram</option>
				                                                        <option value="Nagaland">Nagaland</option>
				                                                        <option value="Odisha">Odisha</option>
				                                                        <option value="Poducherry">Poducherry</option>
				                                                        <option value="Punjab">Punjab</option>
				                                                        <option value="Rajasthan">Rajasthan</option>
				                                                        <option value="Sikkim">Sikkim</option>
				                                                        <option value="Tamil Nadu">Tamil Nadu</option>
				                                                        <option value="Telangana">Telangana</option>
				                                                        <option value="Tripura">Tripura</option>
				                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
				                                                        <option value="Uttarakhand">Uttarakhand</option>
				                                                        <option value="West Bengal">West Bengal</option>
				                                                    </select>
				                                                    <select style="display: none;" class="form-control country_select" name="childs[<?php echo $child; ?>][country]" required="">
				                                                        <option value="">Select Country</option>
				                                                        <option value="Afghanistan">Afghanistan</option>
				                                                        <option value="Albania">Albania</option>
				                                                        <option value="Algeria">Algeria</option>
				                                                        <option value="American Samoa">American Samoa</option>
				                                                        <option value="Andorra">Andorra</option>
				                                                        <option value="Angola">Angola</option>
				                                                        <option value="Anguilla">Anguilla</option>
				                                                        <option value="Antarctica">Antarctica</option>
				                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
				                                                        <option value="Argentina">Argentina</option>
				                                                        <option value="Armenia">Armenia</option>
				                                                        <option value="Aruba">Aruba</option>
				                                                        <option value="Australia">Australia</option>
				                                                        <option value="Austria">Austria</option>
				                                                        <option value="Azerbaijan">Azerbaijan</option>
				                                                        <option value="Bahamas">Bahamas</option>
				                                                        <option value="Bahrain">Bahrain</option>
				                                                        <option value="Bangladesh">Bangladesh</option>
				                                                        <option value="Barbados">Barbados</option>
				                                                        <option value="Belarus">Belarus</option>
				                                                        <option value="Belgium">Belgium</option>
				                                                        <option value="Belize">Belize</option>
				                                                        <option value="Benin">Benin</option>
				                                                        <option value="Bermuda">Bermuda</option>
				                                                        <option value="Bhutan">Bhutan</option>
				                                                        <option value="Bolivia">Bolivia</option>
				                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
				                                                        <option value="Botswana">Botswana</option>
				                                                        <option value="Bouvet Island">Bouvet Island</option>
				                                                        <option value="Brazil">Brazil</option>
				                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
				                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
				                                                        <option value="Bulgaria">Bulgaria</option>
				                                                        <option value="Burkina Faso">Burkina Faso</option>
				                                                        <option value="Burundi">Burundi</option>
				                                                        <option value="Cambodia">Cambodia</option>
				                                                        <option value="Cameroon">Cameroon</option>
				                                                        <option value="Canada">Canada</option>
				                                                        <option value="Cape Verde">Cape Verde</option>
				                                                        <option value="Cayman Islands">Cayman Islands</option>
				                                                        <option value="Central African Republic">Central African Republic</option>
				                                                        <option value="Chad">Chad</option>
				                                                        <option value="Chile">Chile</option>
				                                                        <option value="China">China</option>
				                                                        <option value="Christmas Island">Christmas Island</option>
				                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
				                                                        <option value="Colombia">Colombia</option>
				                                                        <option value="Comoros">Comoros</option>
				                                                        <option value="Congo">Congo</option>
				                                                        <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
				                                                        <option value="Cook Islands">Cook Islands</option>
				                                                        <option value="Costa Rica">Costa Rica</option>
				                                                        <option value="Cote D'Ivoire">Cote D'Ivoire</option>
				                                                        <option value="Croatia">Croatia</option>
				                                                        <option value="Cuba">Cuba</option>
				                                                        <option value="Cyprus">Cyprus</option>
				                                                        <option value="Czech Republic">Czech Republic</option>
				                                                        <option value="Denmark">Denmark</option>
				                                                        <option value="Djibouti">Djibouti</option>
				                                                        <option value="Dominica">Dominica</option>
				                                                        <option value="Dominican Republic">Dominican Republic</option>
				                                                        <option value="Ecuador">Ecuador</option>
				                                                        <option value="Egypt">Egypt</option>
				                                                        <option value="El Salvador">El Salvador</option>
				                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
				                                                        <option value="Eritrea">Eritrea</option>
				                                                        <option value="Estonia">Estonia</option>
				                                                        <option value="Ethiopia">Ethiopia</option>
				                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
				                                                        <option value="Faroe Islands">Faroe Islands</option>
				                                                        <option value="Fiji">Fiji</option>
				                                                        <option value="Finland">Finland</option>
				                                                        <option value="France">France</option>
				                                                        <option value="French Guiana">French Guiana</option>
				                                                        <option value="French Polynesia">French Polynesia</option>
				                                                        <option value="French Southern Territories">French Southern Territories</option>
				                                                        <option value="Gabon">Gabon</option>
				                                                        <option value="Gambia">Gambia</option>
				                                                        <option value="Georgia">Georgia</option>
				                                                        <option value="Germany">Germany</option>
				                                                        <option value="Ghana">Ghana</option>
				                                                        <option value="Gibraltar">Gibraltar</option>
				                                                        <option value="Greece">Greece</option>
				                                                        <option value="Greenland">Greenland</option>
				                                                        <option value="Grenada">Grenada</option>
				                                                        <option value="Guadeloupe">Guadeloupe</option>
				                                                        <option value="Guam">Guam</option>
				                                                        <option value="Guatemala">Guatemala</option>
				                                                        <option value="Guinea">Guinea</option>
				                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
				                                                        <option value="Guyana">Guyana</option>
				                                                        <option value="Haiti">Haiti</option>
				                                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
				                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
				                                                        <option value="Honduras">Honduras</option>
				                                                        <option value="Hong Kong">Hong Kong</option>
				                                                        <option value="Hungary">Hungary</option>
				                                                        <option value="Iceland">Iceland</option>
				                                                        <option value="India">India</option>
				                                                        <option value="Indonesia">Indonesia</option>
				                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
				                                                        <option value="Iraq">Iraq</option>
				                                                        <option value="Ireland">Ireland</option>
				                                                        <option value="Israel">Israel</option>
				                                                        <option value="Italy">Italy</option>
				                                                        <option value="Jamaica">Jamaica</option>
				                                                        <option value="Japan">Japan</option>
				                                                        <option value="Jordan">Jordan</option>
				                                                        <option value="Kazakhstan">Kazakhstan</option>
				                                                        <option value="Kenya">Kenya</option>
				                                                        <option value="Kiribati">Kiribati</option>
				                                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
				                                                        <option value="Korea, Republic of">Korea, Republic of</option>
				                                                        <option value="Kuwait">Kuwait</option>
				                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
				                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
				                                                        <option value="Latvia">Latvia</option>
				                                                        <option value="Lebanon">Lebanon</option>
				                                                        <option value="Lesotho">Lesotho</option>
				                                                        <option value="Liberia">Liberia</option>
				                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
				                                                        <option value="Liechtenstein">Liechtenstein</option>
				                                                        <option value="Lithuania">Lithuania</option>
				                                                        <option value="Luxembourg">Luxembourg</option>
				                                                        <option value="Macao">Macao</option>
				                                                        <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
				                                                        <option value="Madagascar">Madagascar</option>
				                                                        <option value="Malawi">Malawi</option>
				                                                        <option value="Malaysia">Malaysia</option>
				                                                        <option value="Maldives">Maldives</option>
				                                                        <option value="Mali">Mali</option>
				                                                        <option value="Malta">Malta</option>
				                                                        <option value="Marshall Islands">Marshall Islands</option>
				                                                        <option value="Martinique">Martinique</option>
				                                                        <option value="Mauritania">Mauritania</option>
				                                                        <option value="Mauritius">Mauritius</option>
				                                                        <option value="Mayotte">Mayotte</option>
				                                                        <option value="Mexico">Mexico</option>
				                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
				                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
				                                                        <option value="Monaco">Monaco</option>
				                                                        <option value="Mongolia">Mongolia</option>
				                                                        <option value="Montserrat">Montserrat</option>
				                                                        <option value="Morocco">Morocco</option>
				                                                        <option value="Mozambique">Mozambique</option>
				                                                        <option value="Myanmar">Myanmar</option>
				                                                        <option value="Namibia">Namibia</option>
				                                                        <option value="Nauru">Nauru</option>
				                                                        <option value="Nepal">Nepal</option>
				                                                        <option value="Netherlands">Netherlands</option>
				                                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
				                                                        <option value="New Caledonia">New Caledonia</option>
				                                                        <option value="New Zealand">New Zealand</option>
				                                                        <option value="Nicaragua">Nicaragua</option>
				                                                        <option value="Niger">Niger</option>
				                                                        <option value="Nigeria">Nigeria</option>
				                                                        <option value="Niue">Niue</option>
				                                                        <option value="Norfolk Island">Norfolk Island</option>
				                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
				                                                        <option value="Norway">Norway</option>
				                                                        <option value="Oman">Oman</option>
				                                                        <option value="Pakistan">Pakistan</option>
				                                                        <option value="Palau">Palau</option>
				                                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
				                                                        <option value="Panama">Panama</option>
				                                                        <option value="Papua New Guinea">Papua New Guinea</option>
				                                                        <option value="Paraguay">Paraguay</option>
				                                                        <option value="Peru">Peru</option>
				                                                        <option value="Philippines">Philippines</option>
				                                                        <option value="Pitcairn">Pitcairn</option>
				                                                        <option value="Poland">Poland</option>
				                                                        <option value="Portugal">Portugal</option>
				                                                        <option value="Puerto Rico">Puerto Rico</option>
				                                                        <option value="Qatar">Qatar</option>
				                                                        <option value="Reunion">Reunion</option>
				                                                        <option value="Romania">Romania</option>
				                                                        <option value="Russian Federation">Russian Federation</option>
				                                                        <option value="Rwanda">Rwanda</option>
				                                                        <option value="Saint Helena">Saint Helena</option>
				                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
				                                                        <option value="Saint Lucia">Saint Lucia</option>
				                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
				                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
				                                                        <option value="Samoa">Samoa</option>
				                                                        <option value="San Marino">San Marino</option>
				                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
				                                                        <option value="Saudi Arabia">Saudi Arabia</option>
				                                                        <option value="Senegal">Senegal</option>
				                                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
				                                                        <option value="Seychelles">Seychelles</option>
				                                                        <option value="Sierra Leone">Sierra Leone</option>
				                                                        <option value="Singapore">Singapore</option>
				                                                        <option value="Slovakia">Slovakia</option>
				                                                        <option value="Slovenia">Slovenia</option>
				                                                        <option value="Solomon Islands">Solomon Islands</option>
				                                                        <option value="Somalia">Somalia</option>
				                                                        <option value="South Africa">South Africa</option>
				                                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
				                                                        <option value="Spain">Spain</option>
				                                                        <option value="Sri Lanka">Sri Lanka</option>
				                                                        <option value="Sudan">Sudan</option>
				                                                        <option value="Suriname">Suriname</option>
				                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
				                                                        <option value="Swaziland">Swaziland</option>
				                                                        <option value="Sweden">Sweden</option>
				                                                        <option value="Switzerland">Switzerland</option>
				                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
				                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
				                                                        <option value="Tajikistan">Tajikistan</option>
				                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
				                                                        <option value="Thailand">Thailand</option>
				                                                        <option value="Timor-Leste">Timor-Leste</option>
				                                                        <option value="Togo">Togo</option>
				                                                        <option value="Tokelau">Tokelau</option>
				                                                        <option value="Tonga">Tonga</option>
				                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
				                                                        <option value="Tunisia">Tunisia</option>
				                                                        <option value="Turkey">Turkey</option>
				                                                        <option value="Turkmenistan">Turkmenistan</option>
				                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
				                                                        <option value="Tuvalu">Tuvalu</option>
				                                                        <option value="Uganda">Uganda</option>
				                                                        <option value="Ukraine">Ukraine</option>
				                                                        <option value="United Arab Emirates">United Arab Emirates</option>
				                                                        <option value="United Kingdom">United Kingdom</option>
				                                                        <option value="United States">United States</option>
				                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
				                                                        <option value="Uruguay">Uruguay</option>
				                                                        <option value="Uzbekistan">Uzbekistan</option>
				                                                        <option value="Vanuatu">Vanuatu</option>
				                                                        <option value="Venezuela">Venezuela</option>
				                                                        <option value="Viet Nam">Viet Nam</option>
				                                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
				                                                        <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
				                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
				                                                        <option value="Western Sahara">Western Sahara</option>
				                                                        <option value="Yemen">Yemen</option>
				                                                        <option value="Zambia">Zambia</option>
				                                                        <option value="Zimbabwe">Zimbabwe</option>
				                                                    </select>
				                                                </div>
				                                            </div>
				                                            <div class="form-group adult-id">
				                                                <select class="form-control proof_select" name="childs[<?php echo $child; ?>][id_proof]" required="">
				                                                    <option value="">ID Proof</option>
				                                                    <option value="Aadhar Card">Aadhar Card</option>
				                                                    <option value="Voter ID">Voter ID</option>
				                                                    <option value="Driving Licence">Driving Licence</option>
				                                                    <option value="Passport">Passport</option>
				                                                </select>
				                                                <div class="select-state">
				                                                    <input type="text" class="form-control" name="childs[<?php echo $child; ?>][idnumber]" placeholder="Id Proof Number" required="">
				                                                </div>
				                                            </div>
				                                            <input type="hidden" name="childs[<?php echo $child; ?>][person_type]" value="child">
				                                        </div>
				                                    <?php } ?>
			                                    </div>
			                                <?php } ?>
		                                    <div class="note-finalpayment">
		                                        <p>Note: Final Payment Includes extra 3% of payable amount as Convenience Fee.</p>
		                                    </div>
		                                    <div class="cost-include">
		                                        <p>This Cost Includes : Permit I Jeep I Driver I Guide I Service Charges</p>
		                                    </div>
		                                    <div class="payment-button">
		                                        <ul class="list-inline">
		                                            <li><a href="#" onclick="return false;" class="btn btn-warning">Payable amount : <span id="lblTotal">₹<?php echo calculate_price( $_GET['adult'], $_GET['child'] ); ?></span>
		                                                </a>
		                                                <input type="hidden" name="total_amount" value="<?php echo calculate_price( $_GET['adult'], $_GET['child'] ); ?>" id="total_amount">
		                                                <input type="hidden" name="thankyou_url" value="<?php echo $thank_you_page_url; ?>" id="thankyou_url">
		                                            </li>
		                                            <li> 
		                                            	<?php wp_nonce_field(); ?>
		                                            	<button type="submit" id="pay-now" class="btn btn-success" style="cursor: pointer;">Pay Now</button>
		                                            </li>
		                                            <li><a href="<?php echo home_url(); ?>" class="btn btn-info">Go Back</a></li>
		                                        </ul>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>
		</div>
	    <?php
	    $html = ob_get_clean();
	    return $html;
	}
	public function booking_thank_you( $atts ){

		global $wpdb;

		$upload_dir = wp_upload_dir();

		$atts = shortcode_atts( array(
	        '' => '',
	    ), $atts, 'booking_thank_you' );
	 	
		$html = '';

	    if( isset( $_GET['booking_code'] ) && $_GET['booking_code'] != '' ){
			
			$safari_booking_table = $wpdb->prefix . 'safari_booking';
			
			$booking = $wpdb->get_row( "
				SELECT * FROM 
					$safari_booking_table 
				WHERE 
					booking_code = '".$_GET['booking_code']."' 
			",ARRAY_A );
			
			if( !empty( $booking ) ){

			    ob_start(); 

				?>
				<table class="thank-you" cellspacing="0" cellpadding="0" width="100%" style="margin: 0px auto; font-family: sans-serif; font-size: 15px; max-width: 580px;">
					<tbody>
						<!-- <tr>
							<td cellspacing="0" align="center"><a href="#" ><img src="logo.png" style="margin-bottom: -3px;" ></a></td>
						</tr> -->
						<tr>
							<td style="padding: 0; border: none!important; ">
								<table align="center" cellspacing="0" width="100%" style="background: #E09900; padding: 15px; border-radius: 15px 15px 0px 0px; margin: 0; border: none!important;" >
									<thead>
										<tr>
											<td align="center" style="color:#ffffff; font-size: 18px; " >Booking Details</td>
										</tr>
									</thead>
								</table>
								
							</td>
						</tr>
						<tr>
							<td style="padding: 0; ">
								<table width="100%" style="background: #ffffff; padding: 15px; border: 1px solid #efefef; font-size: 13px;" >
									<tbody>
										<tr>
											<td height=25><label style="font-weight: bold; padding-right: 15px;">Booking Code</label></td>
											<td height=25><label style="font-weight: bold; padding-right: 15px;"><?php echo $booking['booking_code']; ?></label></td>
										</tr>
										<!-- <tr>
											<td colspan="2" style="padding:0px;" ><hr style="border: 1px solid #efefef!important; border-width: 1px 0 0 0!important;padding-top: 0px; margin-top: 0px;"></td>
										</tr> -->
										<tr>
											<td height="25"><label style="font-weight: bold; padding-right: 15px;">Booking Date:</label> <value><?php echo date( 'd-m-Y', strtotime( $booking['booking_date'] ) ); ?></value></td>
											<td height="25"><label style="font-weight: bold; padding-right: 15px;">Booking Timing:</label> <value><?php echo $booking['booking_time']; ?></value></td>
										</tr>
										<tr>
											<td height="25"><label style="font-weight: bold; padding-right: 15px;">No. of Adult:</label> <value><?php echo $booking['no_of_adult']; ?></value></td>
											<td height="25"><label style="font-weight: bold; padding-right: 15px;">No. of Child:</label> <value><?php echo $booking['no_of_child']; ?></value></td>
										</tr>
										<tr>
											<td colspan="2" height="25"><label style="font-weight: bold; padding-right: 15px;">Name:</label> <value><?php echo $booking['name']; ?></value></td>
										</tr>
										<tr>
											<td colspan="2" height="25"><label style="font-weight: bold; padding-right: 15px;">Email:</label> <value><?php echo $booking['email']; ?></value></td>
										</tr>
										<tr>
											<td colspan="2" height="25"><label style="font-weight: bold; padding-right: 15px;">Mobile Number:</label> <value><?php echo $booking['mobile']; ?></value></td>
										</tr>
										<tr>
											<td colspan="2" height="25"><label style="font-weight: bold; padding-right: 15px;">Full Address:</label> <value><?php echo $booking['address']; ?></value></td>
										</tr>
										<!-- <tr>
											<td colspan="2" style="padding:0px;" ><hr style="border: 1px solid #efefef!important; border-width: 1px 0 0 0!important;padding-top: 0px; margin-top: 0px;"></td>
										</tr> -->
										
										<?php

										$safari_booking_customers_table = $wpdb->prefix . 'safari_booking_customers';
			
										$booking_customers = $wpdb->get_results( "
											SELECT * FROM 
												$safari_booking_customers_table 
											WHERE 
												booking_id = '".$booking['id']."'
											AND 
												person_type = 'adult' 
										",ARRAY_A );

										if( !empty( $booking_customers ) ){

											$i = 1;

											foreach ( $booking_customers as $key => $booking_customers_adult ) { 
												$proof_file = $upload_dir['baseurl'].'/safari_booking/'.$booking['id'].'/'.$booking_customers_adult['id'].'/'.$booking_customers_adult['proof_file'];
												?>

											<tr>
												<td colspan="2" style="padding-bottom: 20px;" ><strong>Adult Details</strong></td>
											</tr>
											<tr>
												<td height="25"><span style="font-weight: bold; padding-right: 15px;"><?php echo $i; ?></span><span>Adult</span></td>
												<td height="25"><label style="font-weight: bold padding-right: 15px;"><?php echo $booking_customers_adult['name']; ?></label><span></span></td>
											</tr>
											<tr>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">Age:</label><span><?php echo $booking_customers_adult['age']; ?></span></td>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">Gender:</label><span><?php echo $booking_customers_adult['gender']; ?></span></td>
											</tr>
											<tr>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">Nationality:</label><span><?php echo $booking_customers_adult['nationality']; ?></span></td>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">Select State:</label><span><?php echo $booking_customers_adult['state']; ?></span></td>
											</tr>
											<tr>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">ID Proof:</label><span><?php echo $booking_customers_adult['id_proof']; ?></span></td>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">ID Proof Number:</label><span><?php echo $booking_customers_adult['id_proof_number']; ?></span></td>
											</tr>
											<tr>
												<td colspan="2"><label style="font-weight: bold; padding-right: 15px;">ID Proof Photo:</label><img src="<?php echo $proof_file; ?>" style="width: 100px;display: block;"></td>
											</tr>

										<?php $i++; } } ?>

										<!-- <tr>
											<td colspan="2" style="padding:0px;"><hr style="border: 1px solid #efefef!important; border-width: 1px 0 0 0!important;padding-top: 0px; margin-top: 0px;"></td>
										</tr> -->

										<?php

										$safari_booking_customers_table = $wpdb->prefix . 'safari_booking_customers';
			
										$booking_customers = $wpdb->get_results( "
											SELECT * FROM 
												$safari_booking_customers_table 
											WHERE 
												booking_id = '".$booking['id']."'
											AND 
												person_type = 'child' 
										",ARRAY_A );

										if( !empty( $booking_customers ) ){

											$i = 1;

											foreach ( $booking_customers as $key => $booking_customers_child ) { ?>

											<tr>
												<td colspan="2" style="padding-bottom: 20px;" ><strong>Child Details</strong></td>
											</tr>
											<tr>
												<td height="25"><span style="font-weight: bold; padding-right: 15px;"><?php echo $i; ?></span><span>Child</span></td>
												<td height="25"><label style="font-weight: bold padding-right: 15px;"><?php echo $booking_customers_child['name']; ?></label><span></span></td>
											</tr>
											<tr>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">Age:</label><span><?php echo $booking_customers_child['age']; ?></span></td>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">Gender:</label><span><?php echo $booking_customers_child['gender']; ?></span></td>
											</tr>
											<tr>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">Nationality:</label><span><?php echo $booking_customers_child['nationality']; ?></span></td>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">Select State:</label><span><?php echo $booking_customers_child['state']; ?></span></td>
											</tr>
											<tr>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">ID Proof:</label><span><?php echo $booking_customers_child['id_proof']; ?></span></td>
												<td height=25><label style="font-weight: bold; padding-right: 15px;">ID Proof Number:</label><span><?php echo $booking_customers_child['id_proof_number']; ?></span></td>
											</tr>

										<?php $i++; } } ?>

										<tr>
											<td colspan="2" style="padding:0px;"><hr style="border: 1px solid #efefef!important; border-width: 1px 0 0 0!important;padding-top: 0px; margin-top: 0px;"></td>
										</tr>

										<tr>
											<td height=25><label style="font-weight: bold; padding-right: 15px;">Total:</label></td>
											<td height=25><label style="font-weight: bold; padding-right: 15px;">₹<?php echo $booking['amount']; ?></label></td>
										</tr>

									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<?php

				$html = ob_get_clean();

			}
	    }  

	    return $html;	
	}
}
new SB_Shortcodes();	
?>