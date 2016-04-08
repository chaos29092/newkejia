@extends('master')

    @section('content')
            <!-- Full-Width Area -->
    <div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent">


    </div>

    <!-- Content Area -->
    <div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
        <nav class="nav">
            <ul>
                <li><a href="contact-service">Contact & Service</a></li>
            </ul>
        </nav>
        <div class="tagcloud-container content"></div>
    </div>
    <div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
        <div class="grid-100 content">
            <h1>Contact & Service</h1>

            <div id="c90093" class="csc-default" style="margin-top:10px;margin-bottom:20px;">
                <div> Carbolite Gero products in the UK are distributed directly by Carbolite Gero Ltd. and in Germany
                    directly by Carbolite Gero GmbH &amp; Co. KG. (the two manufacturing sites). In all other countries
                    Carbolite Gero operates through&nbsp;a wide network of Verder Scientific daughter companies and
                    fully trained distributors. <br><br>Please choose your country from the map to find your local
                    contact or simply fill out the contact form below. <br>We will get in touch with you right away.
                </div>
            </div>

            <div id="c90094" class="csc-default">
                <div class="csc-header csc-header-n4"><h1>Contact Form</h1></div>
                <form action="http://www.carbolite-gero.com/contact-service/contact-form/carbolite-contact-form-completed/"
                      id="mailform8758" name="mailform8758" enctype="multipart/form-data" method="post"
                      onsubmit="return validateForm('mailform8758','Company\x2FOrganisation,Company\x2Forganisation\x2A\x3A,Title,Title\x2A\x3A,Name,Last\x20name\x2A\x3A,First_Name,First\x20name\x2A\x3A,address,Address\x2A\x3A,postcode,Postcode\x2A\x3A,city,City\x2A\x3A,Country,Country\x2A\x3A,_EMAIL,Email,E\x2Dmail\x2A,Phone,Phone\x2A\x3A,Request,Your\x20request\x2A\x3A','','','')">
                    <div style="display:none;"><input type="hidden" name="Title*:" id="mailformTitle*:" value=""><input
                                type="hidden" name="html_enabled" id="mailformhtml_enabled" value="1"><input
                                type="hidden"
                                name="subject"
                                id="mailformsubject"
                                value="Request from the CARBOLITE GERO website"><input
                                name="requiredFields" type="hidden"
                                value="Company\x2FOrganisation,Title,Name,First_Name,address,postcode,city,Country,Email,Phone,Request"><input
                                type="hidden" name="locationData" value="2380319:tt_content:90094"></div>
                    <div class="rform rform-inputrow rform-comment">
                        <div class="rform-labelfield">
                            <b>For Service Requests please use the <a href="service-spare-parts-request/index.html"
                                                                      class="external-link-new-window"
                                                                      alt="Service Form">Service Form</a></b>


                        </div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow">
                        <div class="rform-label">Contact data</div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformCompany/Organisation">Company/organisation*:</label>
                        </div>
                        <input type="text" name="Company/Organisation" id="mailformCompany/Organisation" size="20"
                               value="" class="rform-input"></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"><label for="mailformIndustry">Industry:</label></div>
                        <select name="Industry" id="mailformIndustry" size="1">
                            <option value="" selected="selected">Please choose ...</option>
                            <option value="LL:appdb.advanced_materials">Advanced Materials</option>
                            <option value="LL:appdb.aerospace">Aerospace</option>
                            <option value="LL:appdb.automotive">Automotive</option>
                            <option value="LL:appdb.chemistry">Chemistry</option>
                            <option value="LL:appdb.coal_coke">Coal / Coke / Iron Ore</option>
                            <option value="LL:appdb.energy_electronics">Energy / Electronics</option>
                            <option value="LL:appdb.food_feed">Food / Feedstuffs</option>
                            <option value="LL:appdb.others">Others</option>
                            <option value="LL:appdb.precious_metals">Precious Metals</option>
                            <option value="LL:appdb.research_academia">Research / Academia</option>
                            <option value="LL:appdb.technical_ceramics">Technical Ceramics</option>
                            <option value="LL:mailform_options.basic.other">Others</option>
                        </select></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformTitle">Title*:</label></div>
                        <select name="Title" id="mailformTitle" size="1">
                            <option value="" selected="selected">Please choose ...</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                            <option value="Mr">Mr</option>
                            <option value="Dr">Dr</option>
                            <option value="Prof">Prof</option>
                        </select></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformName">Last name*:</label></div>
                        <input type="text" name="Name" id="mailformName" size="20" value="" class="rform-input"></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformFirst_Name">First
                                name*:</label></div>
                        <input type="text" name="First_Name" id="mailformFirst_Name" size="20" value=""
                               class="rform-input"></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"><label for="mailformdepartment">Department:</label></div>
                        <input type="text" name="department" id="mailformdepartment" size="20" value=""
                               class="rform-input"></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformaddress">Address*:</label>
                        </div>
                        <input type="text" name="address" id="mailformaddress" size="20" value="" class="rform-input">
                    </div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformpostcode">Postcode*:</label>
                        </div>
                        <input type="text" name="postcode" id="mailformpostcode" size="20" value="" class="rform-input">
                    </div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformcity">City*:</label></div>
                        <input type="text" name="city" id="mailformcity" size="20" value="" class="rform-input"></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformCountry">Country*:</label>
                        </div>
                        <select name="Country" id="mailformCountry" size="1">
                            <option value="">Please choose ...</option>
                            <hr>
                            <option value="united_kingdom">United Kingdom</option>
                            <option value="united_states">United States</option>
                            <hr>
                            <option value="afghanistan">Afghanistan</option>
                            <option value="albania">Albania</option>
                            <option value="algeria">Algeria</option>
                            <option value="american_samoa">American Samoa</option>
                            <option value="andorra">Andorra</option>
                            <option value="angola">Angola</option>
                            <option value="antigua_and_barbuda">Antigua and Barbuda</option>
                            <option value="argentina">Argentina</option>
                            <option value="armenia">Armenia</option>
                            <option value="aruba">Aruba</option>
                            <option value="australia">Australia</option>
                            <option value="austria">Austria</option>
                            <option value="azerbaijan">Azerbaijan</option>
                            <option value="bahamas">Bahamas</option>
                            <option value="bahrain">Bahrain</option>
                            <option value="bangladesh">Bangladesh</option>
                            <option value="barbados">Barbados</option>
                            <option value="belarus">Belarus</option>
                            <option value="belgium">Belgium</option>
                            <option value="benin">Benin</option>
                            <option value="bermuda">Bermuda</option>
                            <option value="bolivia">Bolivia</option>
                            <option value="bosnia_and_herzegovina">Bosnia and Herzegovina</option>
                            <option value="botswana">Botswana</option>
                            <option value="brasil">Brazil</option>
                            <option value="british_indian_ocean_territory">British Indian Ocean Territory</option>
                            <option value="british_virgin_islands">British Virgin Islands</option>
                            <option value="bulgaria">Bulgaria</option>
                            <option value="burundi">Burundi</option>
                            <option value="cambodia">Cambodia</option>
                            <option value="cameroon">Cameroon</option>
                            <option value="canada">Canada</option>
                            <option value="central_african_republic">Central African Republic</option>
                            <option value="chad">Chad</option>
                            <option value="chile">Chile</option>
                            <option value="china">China</option>
                            <option value="colombia">Colombia</option>
                            <option value="congo">Congo</option>
                            <option value="costa_rica">Costa Rica</option>
                            <option value="croatia">Croatia</option>
                            <option value="cuba">Cuba</option>
                            <option value="cyprus">Cyprus</option>
                            <option value="czech_republic">Czech Republic</option>
                            <option value="denmark">Denmark</option>
                            <option value="djibouti">Djibouti</option>
                            <option value="dominican_republic">Dominican Republic</option>
                            <option value="ecuador">Ecuador</option>
                            <option value="egypt">Egypt</option>
                            <option value="el_salvador">El Salvador</option>
                            <option value="equatorial_guinea">Equatorial Guinea</option>
                            <option value="eritrea">Eritrea</option>
                            <option value="estonia">Estonia</option>
                            <option value="ethiopia">Ethiopia</option>
                            <option value="finland">Finland</option>
                            <option value="france">France</option>
                            <option value="french_guiana">French Guiana</option>
                            <option value="french_southern_territories">French Southern Territories</option>
                            <option value="gabon">Gabon</option>
                            <option value="georgia">Georgia</option>
                            <option value="germany">Germany</option>
                            <option value="ghana">Ghana</option>
                            <option value="greece">Greece</option>
                            <option value="guatemala">Guatemala</option>
                            <option value="haiti">Haiti</option>
                            <option value="honduras">Honduras</option>
                            <option value="hongkong">Hongkong</option>
                            <option value="hungary">Hungary</option>
                            <option value="iceland">Iceland</option>
                            <option value="india">India</option>
                            <option value="indonesia">Indonesia</option>
                            <option value="iran">Iran</option>
                            <option value="iraq">Iraq</option>
                            <option value="ireland">Ireland</option>
                            <option value="israel">Israel</option>
                            <option value="italy">Italy</option>
                            <option value="jamaica">Jamaica</option>
                            <option value="japan">Japan</option>
                            <option value="jordan">Jordan</option>
                            <option value="kazakhstan">Kazakhstan</option>
                            <option value="kenya">Kenya</option>
                            <option value="kuwait">Kuwait</option>
                            <option value="kyrgyzstan">Kyrgyzstan</option>
                            <option value="laos">Laos</option>
                            <option value="latvia">Latvia</option>
                            <option value="lebanon">Lebanon</option>
                            <option value="lesotho">Lesotho</option>
                            <option value="liberia">Liberia</option>
                            <option value="libya">Libya</option>
                            <option value="liechtenstein">Liechtenstein</option>
                            <option value="lithuania">Lithuania</option>
                            <option value="luxembourg">Luxembourg</option>
                            <option value="madagascar">Madagascar</option>
                            <option value="malawi">Malawi</option>
                            <option value="malaysia">Malaysia</option>
                            <option value="mali">Mali</option>
                            <option value="malta">Malta</option>
                            <option value="mauritius">Mauritius</option>
                            <option value="mazedonia">Mazedonia</option>
                            <option value="mexico">Mexico</option>
                            <option value="moldova">Moldova</option>
                            <option value="monaco">Monaco</option>
                            <option value="mongolia">Mongolia</option>
                            <option value="montenegro">Montenegro</option>
                            <option value="morocco">Morocco</option>
                            <option value="mozambique">Mozambique</option>
                            <option value="mayanmar">Myanmar</option>
                            <option value="namibia">Namibia</option>
                            <option value="nepal">Nepal</option>
                            <option value="netherlands">Netherlands</option>
                            <option value="new_zealand">New Zealand</option>
                            <option value="nicaragua">Nicaragua</option>
                            <option value="niger">Niger</option>
                            <option value="nigeria">Nigeria</option>
                            <option value="north_korea">North Korea</option>
                            <option value="norway">Norway</option>
                            <option value="oman">Oman</option>
                            <option value="pakistan">Pakistan</option>
                            <option value="paraguay">Paraguay</option>
                            <option value="peru">Peru</option>
                            <option value="philippines">Philippines</option>
                            <option value="poland">Poland</option>
                            <option value="portugal">Portugal</option>
                            <option value="puerto_rico">Puerto Rico</option>
                            <option value="qatar">Qatar</option>
                            <option value="republique_de_cote_divoire">Republic of Côte d'Ivoire</option>
                            <option value="romania">Romania</option>
                            <option value="russia">Russia</option>
                            <option value="rwanda">Rwanda</option>
                            <option value="saudi-arabia">Saudi-Arabia</option>
                            <option value="senegal">Senegal</option>
                            <option value="serbia">Serbia</option>
                            <option value="seychelles">Seychelles</option>
                            <option value="sierra_leone">Sierra Leone</option>
                            <option value="singapore">Singapore</option>
                            <option value="slovakia">Slovakia</option>
                            <option value="slowenia">Slovenia</option>
                            <option value="somalia">Somalia</option>
                            <option value="south_africa">South Africa</option>
                            <option value="republic_of_korea">South Korea</option>
                            <option value="spain">Spain</option>
                            <option value="sri_lanka">Sri Lanka</option>
                            <option value="sudan">Sudan</option>
                            <option value="swaziland">Swaziland</option>
                            <option value="sweden">Sweden</option>
                            <option value="switzerland">Switzerland</option>
                            <option value="syria">Syria</option>
                            <option value="taiwan">Taiwan</option>
                            <option value="tajikistan">Tajikistan</option>
                            <option value="tanzania">Tanzania</option>
                            <option value="thailand">Thailand</option>
                            <option value="gambia">The Gambia</option>
                            <option value="togo">Togo</option>
                            <option value="trinidad_and_tobago">Trinidad and Tobago</option>
                            <option value="tunesia">Tunisia</option>
                            <option value="turkey">Turkey</option>
                            <option value="turkmenistan">Turkmenistan</option>
                            <option value="uganda">Uganda</option>
                            <option value="ukraine">Ukraine</option>
                            <option value="united_arab_emirates">United Arab Emirates</option>
                            <option value="united_kingdom">United Kingdom</option>
                            <option value="united_states">United States</option>
                            <option value="uruguay">Uruguay</option>
                            <option value="us_virgin_islands">US Virgin Islands</option>
                            <option value="uzbekistan">Uzbekistan</option>
                            <option value="vanuatu">Vanuatu</option>
                            <option value="venezuela">Venezuela</option>
                            <option value="vietnam">Vietnam</option>
                            <option value="western_sahara">Western Sahara</option>
                            <option value="yemen">Yemen</option>
                            <option value="zambia">Zambia</option>
                            <option value="zimbabwe">Zimbabwe</option>
                            <hr>
                            <option value="other_country">Other country</option>
                        </select></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"><label for="mailformUS_STATE">State (USA):</label></div>
                        <select name="US_STATE" id="mailformUS_STATE" size="1">
                            <option value="">Please choose ...</option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="District of Columbia">District of Columbia</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Guam">Guam</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Northern Marianas Islands ">Northern Marianas Islands</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Virgin Islands">Virgin Islands</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                        </select></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformEmail">E-mail*</label></div>
                        <input type="text" name="Email" id="mailformEmail" size="20" value="" class="rform-input"></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformPhone">Phone*:</label></div>
                        <input type="text" name="Phone" id="mailformPhone" size="20" value="" class="rform-input"></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"><label for="mailformFax">Fax:</label></div>
                        <input type="text" name="Fax" id="mailformFax" size="20" value="" class="rform-input"></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-label">Request</div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow rform-comment">
                        <div class="rform-labelfield"><i>Please specify temperature and size requirements and fully
                                describe your application.</i></div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformRequest">Your request*:</label>
                        </div> <textarea name="Request" id="mailformRequest" cols="20" rows="5">
</textarea></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-label">How did you get to know about Carbolite Gero?*</div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"></div>
                        <select name="Get_to_know" id="mailformGet_to_know" size="1">
                            <option value="" selected="selected">Please choose ...</option>
                            <option value="LL:mailform_options.get_to_know.10_internet">Internet (search engine)
                            </option>
                            <option value="LL:mailform_options.get_to_know.20_youtube">YouTube/Video portal</option>
                            <option value="LL:mailform_options.get_to_know.30_colleague">Colleague</option>
                            <option value="LL:mailform_options.get_to_know.40_existing_customer">Existing customer
                            </option>
                            <option value="LL:mailform_options.get_to_know.50_exhibition">Exhibition</option>
                            <option value="LL:mailform_options.get_to_know.60_advertisement">Advertisement</option>
                            <option value="LL:mailform_options.get_to_know.70_application_note">Application report
                            </option>
                            <option value="LL:mailform_options.get_to_know.80_buyers_guide">Buyers' guide</option>
                            <option value="LL:mailform_options.get_to_know.90_salesperson">Sales person</option>
                            <option value="LL:mailform_options.basic.other">Others</option>
                        </select></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-label">Others</div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow rform-check">
                        <div class="rform-check"><input type="checkbox" value="1" name="appointment"
                                                        id="mailformappointment" class="rform-checkbox"></div>
                        <div class="rform-labelfield"><label for="mailformappointment">Please call me to discuss my
                                request</label></div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow rform-check">
                        <div class="rform-check"><input type="checkbox" value="1" name="subscribe_carbolite"
                                                        id="mailformsubscribe_carbolite" class="rform-checkbox"></div>
                        <div class="rform-labelfield"><label for="mailformsubscribe_carbolite">Please include me in your
                                newsletter mailing list</label></div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"></div>
                        <input type="submit" name="formtype_mail" id="mailformformtype_mail" value="Submit"
                               class="rform-submitbutton"></div>
                </form>
            </div>
            <div id="c158365" class="csc-default">
                <div>
                    <div class="rform rform-comment">
                        <div class="rform rform-inputrow">*mandatory fields</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop