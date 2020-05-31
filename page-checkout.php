<?php get_header();?>
<section id="cart">
	<h1>Checkout</h1>
	<div class="component-wrapper">
    <div class="woocommerce"><div class="woocommerce-notices-wrapper">
</div>

<form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">

	<p>If you have a coupon code, please apply it below.</p>

	<p class="form-row form-row-first">
		<input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
	</p>

	<p class="form-row form-row-last">
		<button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
	</p>

	<div class="clear"></div>
</form>
<div class="woocommerce-notices-wrapper"></div>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="https://testdesign.fromgrievingtohealing.com/wordpress/checkout/" enctype="multipart/form-data" novalidate="novalidate">

	<h3>Order Information</h3>

	<nav>
		<a class="active" href="#">Personal Information</a>
		<a href="#" class="">Billing Address</a>
		<a href="#" class="">Payment Confirmation</a>
	</nav>



		<div class="woocommerce-billing-fields">

	<div id="personal-information" class=""><p class="form-row referral" id="referral_field" data-priority=""><label for="referral" class="">How did you hear about us?&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><select name="referral" id="referral" class="select " data-placeholder="">
							<option value="default" selected="selected">--Please select an option--</option><option value="search-engine">Search Engine</option><option value="referral">Referral</option><option value="facebook">Facebook</option><option value="twitter">Twitter</option><option value="linkedin">LinkedIn</option><option value="instagram">Instagram</option><option value="youtube">YouTube</option><option value="other">Other</option>
						</select></span></p><p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="1"><label for="billing_first_name" class="">First Name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="Dat" autocomplete="given-name"></span></p><p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="2"><label for="billing_last_name" class="">Last Name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="Nguyen" autocomplete="family-name"></span></p><p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="3"><label for="billing_phone" class="">Phone&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="+12406889903" autocomplete="tel"></span></p><p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="4"><label for="billing_email" class="">Email Address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="Dat_T_Nguyen@live.com" autocomplete="email username"></span></p><p class="form-row form-row-wide" id="billing_company_field" data-priority="5"><label for="billing_company" class="">Company Name&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="" autocomplete="organization"></span></p><button class="btn cont">CONTINUE</button></div>
	<div class="woocommerce-billing-fields__field-wrapper hidden-slide">
		<h4>Billing Address</h4>
		<p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="6"><label for="billing_country" class="">Country&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><select name="billing_country" id="billing_country" class="country_to_state country_select " autocomplete="country"><option value="">Select a country…</option><option value="AX">Åland Islands</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="PW">Belau</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, Saint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao S.A.R., China</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MK">North Macedonia</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="SX">Saint Martin (Dutch part)</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom (UK)</option><option value="US" selected="selected">United States (US)</option><option value="UM">United States (US) Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select><noscript><button type="submit" name="woocommerce_checkout_update_totals" value="Update country">Update country</button></noscript></span></p><p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="8"><label for="billing_address_1" class="">Street address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="House number and street name" value="4356 Thistlewood Terrace" autocomplete="address-line1" data-placeholder="House number and street name"></span></p><p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="9"><label for="billing_address_2" class="">Apartment, suite, unit etc.</label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" autocomplete="address-line2" data-placeholder="Apartment, suite, unit etc. (optional)"></span></p><p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-priority="10" data-o_class="form-row form-row-wide address-field validate-required"><label for="billing_city" class="">City&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="Burtonsville" autocomplete="address-level2"></span></p><p class="form-row form-row-wide address-field validate-required validate-state" id="billing_state_field" data-priority="7" data-o_class="form-row form-row-wide address-field validate-required validate-state"><label for="billing_state" class="">State&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><select name="billing_state" id="billing_state" class="state_select " autocomplete="address-level1" data-placeholder="Select an option…" data-input-classes=""><option value="">Select an option…</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option value="AA">Armed Forces (AA)</option><option value="AE">Armed Forces (AE)</option><option value="AP">Armed Forces (AP)</option></select></span></p><p class="form-row form-row-wide address-field validate-required validate-postcode" id="billing_postcode_field" data-priority="11" data-o_class="form-row form-row-wide address-field validate-required validate-postcode"><label for="billing_postcode" class="">ZIP&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="20866" autocomplete="postal-code"></span></p><button class="btn cont-2">CONTINUE</button></div>
<div id="payment" class="woocommerce-checkout-payment hidden-slide">
			<ul class="wc_payment_methods payment_methods methods">
			<li class="wc_payment_method payment_method_stripe">
	<input id="payment_method_stripe" type="radio" class="input-radio" name="payment_method" value="stripe" checked="checked" data-order_button_text="" style="display: none;">

	<label for="payment_method_stripe">
		Pay Securely via Stripe <img src="https://testdesign.fromgrievingtohealing.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" class="stripe-visa-icon stripe-icon" alt="Visa"><img src="https://testdesign.fromgrievingtohealing.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" class="stripe-amex-icon stripe-icon" alt="American Express"><img src="https://testdesign.fromgrievingtohealing.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" class="stripe-mastercard-icon stripe-icon" alt="Mastercard"><img src="https://testdesign.fromgrievingtohealing.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/discover.svg" class="stripe-discover-icon stripe-icon" alt="Discover"><img src="https://testdesign.fromgrievingtohealing.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/jcb.svg" class="stripe-jcb-icon stripe-icon" alt="JCB"><img src="http://localhost/wordpress/wp-content/plugins/woocommerce-gateway-stripe/assets/images/diners.svg" class="stripe-diners-icon stripe-icon" alt="Diners">	</label>
			<div class="payment_box payment_method_stripe">
			<div id="stripe-payment-data" data-panel-label="" data-email="" data-amount="" data-name="" data-full-name=" " data-currency="usd" data-allow-remember-me="true"><p>Pay with your credit card via Stripe. TEST MODE ENABLED. In test mode, you can use the card number 4242424242424242 with any CVC and a valid expiration date or check the <a href="https://stripe.com/docs/testing" target="_blank">Testing Stripe documentation</a> for more card numbers.</p>
<ul class="woocommerce-SavedPaymentMethods wc-saved-payment-methods" data-count="0"><li class="woocommerce-SavedPaymentMethods-new">
				<input id="wc-stripe-payment-token-new" type="radio" name="wc-stripe-payment-token" value="new" style="width:auto;" class="woocommerce-SavedPaymentMethods-tokenInput">
				<label for="wc-stripe-payment-token-new">Use a new payment method</label>
			</li></ul>		<fieldset id="wc-stripe-cc-form" class="wc-credit-card-form wc-payment-form" style="background:transparent;">

							<div class="form-row form-row-wide">
					<label for="stripe-card-element">Card Number <span class="required">*</span></label>
					<div class="stripe-card-group">
						<div id="stripe-card-element" class="wc-stripe-elements-field StripeElement empty"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: medium none !important; display: block !important; background: transparent none repeat scroll 0% 0% !important; position: relative !important; opacity: 1 !important;"><iframe allowtransparency="true" scrolling="no" name="__privateStripeFrame8" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-9e5b4ba6a9105b462555f64c83be70b9.html#style[base][color]=%23707779&amp;style[base][fontSize]=13px&amp;style[base][::placeholder][color]=%23fff&amp;style[complete][color]=%230a3780&amp;style[invalid][color]=%23ff7500&amp;betas[0]=payment_intent_beta_3&amp;componentName=cardNumber&amp;wait=false&amp;rtl=false&amp;keyMode=test&amp;origin=http%3A%2F%2Flocalhost&amp;referrer=http%3A%2F%2Flocalhost%2Fwordpress%2Fcart%2F&amp;controllerId=__privateStripeController3" title="Secure payment input frame" style="border: medium none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 15.6px;" frameborder="0"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: medium none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent none repeat scroll 0% 0% !important; pointer-events: none !important; font-size: 16px !important;"></div></div>

						<i class="stripe-credit-card-brand stripe-card-brand" alt="Credit Card"></i>
					</div>
				</div>

				<div class="form-row form-row-first">
					<label for="stripe-exp-element">Expiration Date <span class="required">*</span></label>

					<div id="stripe-exp-element" class="wc-stripe-elements-field StripeElement empty"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: medium none !important; display: block !important; background: transparent none repeat scroll 0% 0% !important; position: relative !important; opacity: 1 !important;"><iframe allowtransparency="true" scrolling="no" name="__privateStripeFrame9" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-9e5b4ba6a9105b462555f64c83be70b9.html#style[base][color]=%23707779&amp;style[base][fontSize]=13px&amp;style[base][::placeholder][color]=%23fff&amp;style[complete][color]=%230a3780&amp;style[invalid][color]=%23ff7500&amp;betas[0]=payment_intent_beta_3&amp;componentName=cardExpiry&amp;wait=false&amp;rtl=false&amp;keyMode=test&amp;origin=http%3A%2F%2Flocalhost&amp;referrer=http%3A%2F%2Flocalhost%2Fwordpress%2Fcart%2F&amp;controllerId=__privateStripeController3" title="Secure payment input frame" style="border: medium none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 15.6px;" frameborder="0"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: medium none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent none repeat scroll 0% 0% !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
				</div>

				<div class="form-row form-row-last">
					<label for="stripe-cvc-element">CVV/CVC <span class="required">*</span></label>
				<div id="stripe-cvc-element" class="wc-stripe-elements-field StripeElement empty"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: medium none !important; display: block !important; background: transparent none repeat scroll 0% 0% !important; position: relative !important; opacity: 1 !important;"><iframe allowtransparency="true" scrolling="no" name="__privateStripeFrame10" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-9e5b4ba6a9105b462555f64c83be70b9.html#style[base][color]=%23707779&amp;style[base][fontSize]=13px&amp;style[base][::placeholder][color]=%23fff&amp;style[complete][color]=%230a3780&amp;style[invalid][color]=%23ff7500&amp;betas[0]=payment_intent_beta_3&amp;componentName=cardCvc&amp;wait=false&amp;rtl=false&amp;keyMode=test&amp;origin=http%3A%2F%2Flocalhost&amp;referrer=http%3A%2F%2Flocalhost%2Fwordpress%2Fcart%2F&amp;controllerId=__privateStripeController3" title="Secure payment input frame" style="border: medium none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 15.6px;" frameborder="0"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: medium none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent none repeat scroll 0% 0% !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
				</div>
				<div class="clear"></div>

			<!-- Used to display form errors -->
			<div class="stripe-source-errors" role="alert"></div>
			<br>
						<div class="clear"></div>
		</fieldset>
		<p class="form-row woocommerce-SavedPaymentMethods-saveNew woocommerce-validated">
				<input id="wc-stripe-new-payment-method" name="wc-stripe-new-payment-method" type="checkbox" value="true" style="width:auto;">
				<label for="wc-stripe-new-payment-method" style="display:inline;">Save payment information to my account for future purchases.</label>
			</p></div>		</div>
	</li>
		</ul>
		<div class="woocommerce-form-coupon-toggle">

	<div class="woocommerce-info">
		Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a>	</div>
</div>

<div class="checkout_coupon woocommerce-form-coupon" method="post">
	<h4>Promo Code</h4>
	<label>If you have a coupon code, please apply it below.</label>
	<div class="wrapper">

		<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="">
		<button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
	</div>
	<div class="clear"></div>
</div>

	<div class="form-row place-order">
		<noscript>
			Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
		</noscript>

			<div class="woocommerce-terms-and-conditions-wrapper">
		<div class="woocommerce-privacy-policy-text"></div>
					<p class="form-row validate-required">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
				<input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms" id="terms">
					<span class="woocommerce-terms-and-conditions-checkbox-text">I've Read and Accept the <a href="#" class="woocommerce-terms-and-conditions-link" target="_blank">terms and conditions</a></span>&nbsp;<span class="required">*</span>
				</label>
				<input type="hidden" name="terms-field" value="1">
			</p>
			</div>


		<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>

		<input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="345d80dcc8"><input type="hidden" name="_wp_http_referer" value="/wordpress/?wc-ajax=update_order_review">	</div>
</div>


	</div>

</form></div>

<div class="woocommerce checkout-pg">
<form class="woocommerce-cart-form" action="https://fromgrievingtohealing.com/wordpress/cart/" method="post">

    <h3>Cart</h3>
    <h4>There are currently no items in your cart.</h4>
    <p style="text-align:center">Check out some of our programs below:</p>

   <ul><li><a href="<?php echo get_term_link(23, 'product_cat') ?>">
       <img src="<?php echo wp_get_attachment_url(86); ?>" alt="icon">
   <p>Group Programs</p></a></li>

   <li><a href="<?php echo get_term_link(24, 'product_cat') ?>">
       <img src="<?php echo wp_get_attachment_url(83); ?>" alt="icon">
   <p>1-on-1 Programs</p></a></li>

   <li><a href="<?php echo get_term_link(30, 'product_cat') ?>">
       <img src="<?php echo wp_get_attachment_url(82); ?>" alt="icon">
   <p>Weekend Programs</p></a></li>

   <li><a href="<?php echo get_term_link(26, 'product_cat') ?>">
       <img src="<?php echo wp_get_attachment_url(84); ?>" alt="icon">
   <p>Corporate Programs</p></a></li>

   <li><a href="<?php echo get_term_link(27, 'product_cat') ?>">
       <img src="<?php echo wp_get_attachment_url(87); ?>" alt="icon">
   <p>Online Programs</p></a></li>

   <li><a href="<?php echo get_permalink(105) ?>">
       <img src="<?php echo wp_get_attachment_url(85); ?>" alt="icon">
   <p>Información en Español</p></a></li>

</div></form>



</div>

</div>

<?php

$url = $_SERVER['REQUEST_URI'];
$orderID = substr($url, 25, 4);


echo "<div class='order-modal'><div class='container'><i class='fas close-modal fa-times'></i><div class='img-wrapper'><img src='" . wp_get_attachment_url(692) . "'></div><h3>Order Confirmed!</h3>
        <h4>Thank you! Your payment has been processed and you will receive a confirmation email shortly.</h4>". $orderID;
		

$order = wc_get_order($orderID);

foreach ($order->get_items() as $item_id => $item_data) {
    $product = $item_data->get_product();
    $product_name = $product->get_name();
    $item_quantity = $item_data->get_quantity();
    $item_total = $item_data->get_total();
    $str = strlen($product->get_title());
    $strMax = strlen($product->get_name());
	$strDif = ($strMax - $str) - 3;
	
	

    echo '<div class="row"><div class="major"><a href="' . $product->get_permalink() . '"><strong>' . $product->get_title() .
	'</strong></a><p>';

	if($product->get_type() === "variation") {
		echo substr($product->get_name(), - $strDif) ;
	} else {
		echo "One time payment $" . $product->get_price();
	}
	
	echo '</p></div><div class="minor">' . $item_data->get_quantity() .
        '</div></div>';
}
echo "<h4 class='total'>Total: <span>$" . number_format($order->get_total()) .
    "</span></h4><a class='btn close-modal' >CONTINUE BROWSING</a></div></div>";

?>


</section>



<?php get_footer();?>