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

            <div class="csc-default">
                <div class="csc-header csc-header-n4"><h1>Contact Form</h1></div>
                <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads1909414000000097283 method='POST'
                      onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>
                    {{--<div style="display:none;"><input type="hidden" name="Title*:" id="mailformTitle*:" value=""><input--}}
                                {{--type="hidden" name="html_enabled" id="mailformhtml_enabled" value="1"><input--}}
                                {{--type="hidden"--}}
                                {{--name="subject"--}}
                                {{--id="mailformsubject"--}}
                                {{--value="Request from the CARBOLITE GERO website"><input--}}
                                {{--name="requiredFields" type="hidden"--}}
                                {{--value="Company\x2FOrganisation,Title,Name,First_Name,address,postcode,city,Country,Email,Phone,Request"><input--}}
                                {{--type="hidden" name="locationData" value="2380319:tt_content:90094"></div>--}}
                    <!-- Do not remove this code. -->
                    <input type='text' style='display:none;' name='xnQsjsdp'
                           value='40380622beee77c7a7f9ca99e7a3a010d5975d89fed22a020b8c40d044511c85'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD'
                           value='7f8bfc673685e0b61448e282b2c7901c99b4c268d3f773945a27a2fe00244874'/>
                    <input type='text' style='display:none;' name='actionType' value='TGVhZHM='/>

                    <input type='text' style='display:none;' name='returnURL'
                           value='http&#x3a;&#x2f;&#x2f;furnace-tech.com&#x2f;submit_ok'/>
                    <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'>
                    <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'>
                    <!-- Do not remove this code. -->
                    <input type='text' style='display:none;' id='Pre_url' name='LEADCF4' value="{{url()->previous()}}">
                    <select style='display:none;' name='LEADCF3'>
                        <option value='-None-'>-无-</option>
                        <option selected value='&#x79d1;&#x4f73;'>科佳</option>
                        <option value='&#x666e;&#x6cf0;'>普泰</option>
                    </select>
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
                        <input type="text" name="Company" id="mailformCompany/Organisation" size="20"
                               value="" class="rform-input"></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"><label for="mailformIndustry">Industry:</label></div>
                        <select name="Industry" id="mailformIndustry" size="1">
                            <option value="-None-" selected="selected">Please choose ...</option>
                            <option value="Material">Materials</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Physics">Physics</option>
                            <option value="food">Food / Feedstuffs</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Mining&#x20;industry">Coal / Coke / Iron Ore</option>
                            <option value="Other">Others</option>
                        </select></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformTitle">Title*:</label></div>
                        <select name="Salutation" id="mailformTitle" size="1">
                            <option value="-None-" selected="selected">Please choose ...</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                            <option value="Mr">Mr</option>
                            <option value="Dr">Dr</option>
                            <option value="Prof">Prof</option>
                        </select></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformName">Last name*:</label></div>
                        <input type="text" name="Last Name" id="mailformName" size="20" value="" class="rform-input"></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformFirst_Name">First
                                name*:</label></div>
                        <input type="text" name="First Name" id="mailformFirst_Name" size="20" value=""
                               class="rform-input"></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformaddress">Address*:</label>
                        </div>
                        <input type="text" name="Street" id="mailformaddress" size="20" value="" class="rform-input">
                    </div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformpostcode">Postcode*:</label>
                        </div>
                        <input type="text" name="Zip Code" id="mailformpostcode" size="20" value="" class="rform-input">
                    </div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformcity">City*:</label></div>
                        <input type="text" name="City" id="mailformcity" size="20" class="rform-input"></div>
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
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformEmail">E-mail*</label></div>
                        <input type="text" name="Email" id="mailformEmail" size="20" value="" class="rform-input"></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformPhone">Phone*:</label></div>
                        <input type="text" name="Phone" id="mailformPhone" size="20" value="" class="rform-input"></div>
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
                        </div> <textarea name="Description" id="mailformRequest" cols="20" rows="8"></textarea></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-label">How did you get to know about Carbolite Gero?*</div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"></div>
                        <select name="Lead Source" id="mailformGet_to_know" size="1">
                            <option value="-None-" selected="selected">Please choose ...</option>
                            <option value="Internet&#x20;&#x28;search&#x20;engine&#x29;">Internet (search engine)
                            </option>
                            <option value="YouTube&#x2f;Video&#x20;portal">YouTube/Video portal</option>
                            <option value="SNS">SNS</option>
                            <option value="Colleague">Colleague</option>
                            <option value="Existing&#x20;customer">Existing customer
                            </option>
                            <option value="Exhibition">Exhibition</option>
                            <option value="Advertisement">Advertisement</option>
                            <option value="Application&#x20;report">Application report
                            </option>
                            <option value="Buyers&#x27;&#x20;guide">Buyers' guide</option>
                            <option value="Sales&#x20;person">Sales person</option>
                            <option value="Others">Others</option>
                        </select></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-label">Others</div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow rform-check">
                        <div class="rform-check"><input type="checkbox"  name="LEADCF102"
                                                        id="mailformappointment" class="rform-checkbox"></div>
                        <div class="rform-labelfield"><label for="mailformappointment">Please call me to discuss my
                                request</label></div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow rform-check">
                        <div class="rform-check"><input type="checkbox"  name="Email Opt Out"
                                                        id="mailformsubscribe_carbolite" class="rform-checkbox"></div>
                        <div class="rform-labelfield"><label for="mailformsubscribe_carbolite">Please do not include me in your
                                newsletter mailing list</label></div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"></div>
                        <input type="submit" name="formtype_mail" id="mailformformtype_mail" value="Submit"
                               class="rform-submitbutton"></div>

                    <script>
                        var mndFileds = new Array('Company', 'First Name', 'Last Name', 'Email', 'Phone', 'Lead Source', 'Industry', 'City', 'Country', 'Description', 'Salutation');
                        var fldLangVal = new Array('公司', '名', '姓', '邮箱', '电话', '线索来源', '行业', '城市', '国家/地区', '描述', '称呼');
                        var name = '';
                        var email = '';

                        function checkMandatory() {
                            for (i = 0; i < mndFileds.length; i++) {
                                var fieldObj = document.forms['WebToLeads1909414000000097283'][mndFileds[i]];
                                if (fieldObj) {
                                    if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                                        if (fieldObj.type == 'file') {
                                            alert('请选择文件进行上传');
                                            fieldObj.focus();
                                            return false;
                                        }
                                        alert(fldLangVal[i] + ' 不能为空');
                                        fieldObj.focus();
                                        return false;
                                    } else if (fieldObj.nodeName == 'SELECT') {
                                        if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                            alert(fldLangVal[i] + ' 不能为空');
                                            fieldObj.focus();
                                            return false;
                                        }
                                    } else if (fieldObj.type == 'checkbox') {
                                        if (fieldObj.checked == false) {
                                            alert('Please accept  ' + fldLangVal[i]);
                                            fieldObj.focus();
                                            return false;
                                        }
                                    }
                                    try {
                                        if (fieldObj.name == 'Last Name') {
                                            name = fieldObj.value;
                                        }
                                    } catch (e) {
                                    }
                                }
                            }
                            trackVisitor();
                        }
                    </script>
                </form>
            </div>
            <div class="csc-default">
                <div>
                    <div class="rform rform-comment">
                        <div class="rform rform-inputrow">*mandatory fields</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop