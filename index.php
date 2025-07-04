	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practice Page</title>
  <meta charset="utf-8">
  <link rel="icon" href="images/rs_logo.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    function openWindow() {
        myWin = window.open("http://www.qaclickacademy.com/", "myWin", "width=1200, height=600, top=100, left=100, scrollbars=yes, resizable=yes");
    }
    function myFunction() {
        myWin = window.open("http://www.qaclickacademy.com/", "myWin", "width=1200, height=600, top=100, left=100, scrollbars=yes, resizable=yes");
    }
    function displayAlert() {
        var value = document.getElementById("name").value;
        alert("Hello " + value + ", share this practice page and share your knowledge");
        document.getElementById("name").value = "";
    }
    function displayConfirm() {
        var value = document.getElementById("name").value;
        confirm("Hello " + value + ", Are you sure you want to confirm?")
        document.getElementById("name").value = "";
    }
    function hideElement() {
        var x = document.getElementById("displayed-text");
        //style.visibility = "hidden";
        x.style.display = "none";
    }
    function showElement() {
        var x = document.getElementById("displayed-text");
        //style.visibility = "visible";
        x.style.display = "block";
    }
</script>
<style type="text/css">

.footer_top_agile_w3ls {
        padding: 3em 0;
    }
    .footer_top_agile_w3ls {
        padding: 2em 0;
    }
.footer_top_agile_w3ls {
    background: #eee;
    padding: 4em 0;
}
    h1 {
        margin-bottom: 30px;
    }
    select {
        font-size: 14px;
        width: 120px;
        height: 30px;
        border: 2px solid #39949a;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
    }
    .dropbtn {
            background-color: #39949a; /* #4CAF50; */
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
    }
    .btn-style {
            background-color: #39949a;
            color: white;
            padding: 10px;
            font-size: 14px;
            border: none;
            cursor: pointer;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
    }
    /* The container <div> - needed to position the mouse-hover content */
    .mouse-hover {
            /* position: relative;
            display: inline-block; */
    }
    /* mouse-hover Content (Hidden by Default) */
    .mouse-hover-content {
            display: none;
        position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }
    /* Links inside the mouse-hover */
    .mouse-hover-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
    }
    /* Change color of mouse-hover links on hover */
    .mouse-hover-content a:hover {
        background-color: #f1f1f1
    }
    /* Show the mouse-hover menu on hover */
    .mouse-hover:hover .mouse-hover-content {
            display: block;
    }
    /* Change the background color of the mouse-hover button when the mouse-hover content is shown */
    .mouse-hover:hover .dropbtn {
        background-color: #3e8e41;
    }
    fieldset {
        font-size: 14px;
        /* border: 2px solid #000; */
        /*padding: 1em;*/
        padding: .2em;
        border-radius: 0.5em;
    }
    legend {
        font-size: 14px;
        width: auto;
        color: #fff;
        background: #2b3636;
        padding: 0.25em 1em;
        border-radius: 1em;
    }
    /* One radio button per line */
    label {
            display: block;
            cursor: pointer;
            line-height: 2;
            font-size: 1em;
    }
    body {
            font-family:"Trebuchet MS", Arial, sans-serif;
        }
        #product{
            font-family:"Trebuchet MS", Arial, sans-serif;
            width:400px;
            border-collapse:separate;
        /* border-spacing:10px; */
        /* margin-left: 200px; */
        }
    #product td, #product th{
        border:1px solid #39949a; /* #4CAF50; */
        padding:3px 7px 2px 7px;
        font-size:1em;
    }
        #product th{
        font-size:1.1em;
        padding-top:5px;
        padding-bottom:4px;
        background-color: #39949a;
        color: #fff;
        color: antiquewhite
    }
    .left-align {
        float: left;
        }
    .right-align{
            font-family:"Trebuchet MS", Arial, sans-serif;
            /*width:400px; */
            /*margin-left: 100px;*/
            float: right;
        }
        .cen-align{
            font-family:"Trebuchet MS", Arial, sans-serif;
            /*width:400px; */
            margin-left: 150px;
        margin-right: 100px;
            float: left;
        }
    .cen-left-align{
            font-family:"Trebuchet MS", Arial, sans-serif;
            /*width:400px; */
            margin-left: 70px;
        margin-right: 30px;
            float: left;
        }
    .cen-right-align{
            font-family:"Trebuchet MS", Arial, sans-serif;
            /*width:400px; */
            margin-left: 60px;
        margin-right: 30px;
            float: left;
    }
        .block{
        width: 900px;
            position: relative;
            display: inline-block;
            margin: 0px 0px 2px 20px;
            margin-top: 2px;
            margin-bottom: 20px;
            margin-left: 20px;
            text-align: justify;
            border-bottom: .5px solid;
            border-bottom-color: #2b3636;
        }
        .table-display{
            width:400px;
            padding: .5em;
            margin: 0px 20px 20px 10px;
        }
        .default-row-spacer{
            margin-bottom: 10px;
        }
        .large-row-spacer{
            margin-bottom: 20px;
        }
    inputs:-webkit-input-placeholder {
        color: #b5b5b5;
    }
    inputs-moz-placeholder {
        color: #b5b5b5;
    }
    .inputs {
        background: #f5f5f5;
        font-size: 14px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        border: none;
        padding: 13px 10px;
        /* width: 270px; */
        margin-bottom: 20px;
        box-shadow: inset 0 2px 3px rgba( 0, 0, 0, 0.1 );
        clear: both;
    }
    .inputs:focus {
        background: #fff;
        box-shadow: 0 0 0 3px #39949a, inset 0 2px 3px rgba( 0, 0, 0, 0.2 ), 0px 5px 5px rgba( 0, 0, 0, 0.15 );
        outline: none;
    }
	legend.switch-tab {
    margin-bottom: 15px;
}
a#opentab {
    color: white!important;
}
    /*Following style is for Computer, Laptops*/
    @media screen and (min-width: 900px) {
        .logoClass{
            margin: -50px 250px 0px -650px;
			width:85px;
        }
        .header_style {
            height: 5px;
        }
    }
    /*Following style is for Mobile, Tabs*/
    @media only screen and (max-width: 900px) {
        .logoClass{
            margin: -40px 0px 0px -850px;
			width:85px;
        }
            .header_style {
            height: 5px;
            width:1000px;
        }
        .footer_style {
            width:1000px;
        }


        .alert_example{
            margin-top: -80px;
        }
      }  
</style>
<!-- footer Style -->
<style type="text/css">
    .gffoot ul {
            float: left;
            height: 100%;
            padding-right: 10px;
            margin: 0;
            list-style: none;
            min-width: 177px;
        }
        .gf-t {
            width: 100%;
            margin-top: 20px;
            border-spacing: 0;
            border-collapse: collapse;
        }
        table {
            display: table;
            border-collapse: separate;
            border-spacing: 2px;
            border-color: grey;
        }
        .gh-w {
            line-height: 1;
            font-size: 14px;
            color: #333;
            font-family: "Helvetica neue",Helvetica,Arial,Sans-serif;
        }
        .gh-w {
            text-align: left;
        }
        #gf-BIG.gffoot li {
            margin-bottom: 12px;
            display: list-item;
            font-size: 12px;
        }
        a{
            color: #767676 !important;
        }     
        a:hover{
            color: #767676 !important;
        }
		.totalAmount {
			margin-left: 200px;
			font-weight: bold;
		}
		a.blinkingText {
			float: right;
			margin-top: -37px;
			font-weight:bold;
			padding:0px 10px;
			font-size:20px;
			background:#27b35f;
			color: #fff !important;
			animation: blink 1s linear infinite;
			text-decoration: underline;
			cursor: pointer;
		}
		@keyframes blink{
			0%{opacity: 0;}
			50%{opacity: 0.8;}
			100%{opacity: 1;}
		}
    </style>
    <!-- footer Style Ends -->
<!-- Autocomplete -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    var availableTags = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom (UK)", "United States (USA)", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"];
    $( "#autocomplete" ).autocomplete({
        maxResults: 10,
        minLength:2,
        source: availableTags,
    });
  } );
  </script>
  <!-- Autocomplete Ends -->
</head>
<body>
<header class="jumbotron text-center header_style" style="">
      <a href="https://www.rahulshettyacademy.com/"><img src="images/rs_logo.png" class="logoClass" ></a>
	  <a href="https://rahulshettyacademy.com/documents-request" class="blinkingText">Free Access to InterviewQues/ResumeAssistance/Material</a>
      <div style="text-align: right;margin-top: -30px;">
          <a href="https://www.rahulshettyacademy.com/"><button class="btn btn-primary">Home</button></a>
          <button class="btn btn-primary">Practice</button>	
          <button class="btn btn-primary">Login</button>
          <button class="btn btn-primary">Signup</button>
      </div>
</header>

    <h1>Practice Page</h1>
    <div class="block large-row-spacer">
        <div class="left-align" id="radio-btn-example">
            <fieldset>
                <legend>Radio Button Example</legend>
                <label for="radio1">
                <input  value="radio1" name="radioButton" class="radioButton" type="radio"> Radio1
                </label>
                <label for="radio2">
                <input  value="radio2" name="radioButton" class="radioButton" type="radio"> Radio2
                </label>
                <label for="radio3">
                <input  value="radio3" name="radioButton" class="radioButton" type="radio"> Radio3
                </label>
            </fieldset>
        </div>
        <div class="cen-left-align" id="select-class-example">
            <fieldset>
                <legend>Suggession Class Example</legend>
                <input type="text" id="autocomplete" class="inputs"  placeholder="Type to Select Countries">
            </fieldset>
        </div>
         <div class="cen-right-align">
            <fieldset>
                <legend>Dropdown Example</legend>
                <select  id="dropdown-class-example"  name="dropdown-class-example">
                     <option value="">Select</option>
                     <option value="option1">Option1</option>
                    <option value="option2">Option2</option>
                    <option value="option3">Option3</option>
                </select>
            </fieldset>
        </div> 
        <div class="right-align" id="checkbox-example">
            <fieldset>
                <legend>Checkbox Example</legend>
                <label for="bmw">
                <input id="checkBoxOption1" value="option1" name="checkBoxOption1" type="checkbox"> Option1
                </label>
                <label for="benz">
                <input id="checkBoxOption2" value="option2" name="checkBoxOption2" type="checkbox"> Option2
                </label>
                <label for="honda">
                <input id="checkBoxOption3" value="option3" name="checkBoxOption3" type="checkbox"> Option3
                </label>
            </fieldset>
        </div>
    </div>

    <div class="block large-row-spacer">
        <div class="left-align">
            <fieldset>
                <legend>Switch Window Example</legend>
                <button id="openwindow" class="btn-style class1" onclick="openWindow()">Open Window</button>
            </fieldset>
        </div>
        <div class="cen-align">
            <fieldset>
                <legend class="switch-tab">Switch Tab Example</legend>
                <a id="opentab" class="btn-style class1 class2" href="https://www.qaclickacademy.com" target="_blank">Open Tab</a>
            </fieldset>
        </div>
        <div class="">
            <fieldset class="pull-right">
                <legend>Switch To Alert Example</legend>
                <input id="name" name="enter-name" class="inputs" placeholder="Enter Your Name" type="text"><br />
                <input id="alertbtn" class="btn-style" value="Alert" onclick="displayAlert()" type="submit">
                <input id="confirmbtn" class="btn-style" value="Confirm" onclick="displayConfirm()" type="submit">
            </fieldset>
        </div>
		<br />
    </div>
	
    <div class="block large-row-spacer">
        <div class="left-align">
            <fieldset>
                <legend>Web Table Example</legend>
                <table id="product" name="courses" class="table-display" border="1">
                <tbody>
                <tr>
                    <th>Instructor</th>
                    <th>Course</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>Rahul Shetty</td>
                    <td>Selenium Webdriver with Java Basics + Advanced + Interview Guide</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Rahul Shetty</td>
                    <td>Learn SQL in Practical + Database Testing from Scratch</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Rahul Shetty</td>
                    <td>Appium (Selenium) - Mobile Automation Testing from Scratch</td>
                    <td>30</td>
                </tr>
                 <tr>
                    <td>Rahul Shetty</td>
                    <td>WebSecurity Testing for Beginners-QA knowledge to next level</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Rahul Shetty</td>
                    <td>Learn JMETER from Scratch - (Performance + Load) Testing Tool</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Rahul Shetty</td>
                    <td>WebServices / REST API Testing with SoapUI</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td>Rahul Shetty</td>
                    <td>QA Expert Course :Software Testing + Bugzilla + SQL + Agile</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Rahul Shetty</td>
                    <td>Master Selenium Automation in simple Python Language</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Rahul Shetty</td>
                    <td>Advanced Selenium Framework Pageobject, TestNG, Maven, Jenkins,C</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Rahul Shetty</td>
                    <td>Write effective QA Resume that will turn to interview call</td>
                    <td>0</td>
                </tr>
                
                </tbody>
                </table>
            </fieldset>
        </div>
        <div class="right-align">
            <fieldset>
                <legend>Element Displayed Example</legend>
                <input id="hide-textbox" class="btn-style class2" value="Hide" onclick="hideElement()" type="submit">
                <input id="show-textbox" class="btn-style class2" value="Show" onclick="showElement()" type="submit">
                <br><br>
                <input id="displayed-text" name="show-hide" class="inputs displayed-class" placeholder="Hide/Show Example" type="text">
            </fieldset>
            <fieldset>
                <legend>Web Table Fixed header</legend>
                <div class="tableFixHead"  style="overflow-y: auto; height: 195px;">
                  <table id="product">
                    <thead>
                      <tr>
                        <th style="position: sticky; top: 0;">Name</th>
                        <th style="position: sticky; top: 0;">Position</th>
                        <th style="position: sticky; top: 0;">City</th>
                        <th style="position: sticky; top: 0;">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr><td>Alex</td><td>Engineer</td><td>Chennai</td><td>28</td></tr>
                      <tr><td>Ben</td><td>Mechanic</td><td>Bengaluru</td><td>23</td></tr>
                      <tr><td>Dwayne</td><td>Manager</td><td>Kolkata</td><td>48</td></tr>
                      <tr><td>Ivory</td><td>Receptionist</td><td>Chennai</td><td>18</td></tr>
                      <tr><td>Jack</td><td>Engineer</td><td>Pune</td><td>32</td></tr>
                      <tr><td>Joe</td><td>Postman</td><td>Chennai</td><td>46</td></tr>
                      <tr><td>Raymond</td><td>Businessman</td><td>Mumbai</td><td>37</td></tr>
                      <tr><td>Ronaldo</td><td>Sportsman</td><td>Chennai</td><td>31</td></tr>
                      <tr><td>Smith</td><td>Cricketer</td><td>Delhi</td><td>33</td></tr>
                    </tbody>
                  </table>
                </div>
				<br/>
				<div class="totalAmount"> Total Amount Collected: 296 </div>
            </fieldset>
        </div>
    </div>
    <div class="block large-row-spacer">
        <div class="left-align">
            <fieldset style="margin-bottom:60px">
                <legend>Mouse Hover Example</legend>
                <div class="mouse-hover">
                    <button id="mousehover" class="btn btn-primary">Mouse Hover</button>
                    <div class="mouse-hover-content">
                        <a href="#top">Top</a>
                        <a href="">Reload</a>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="block large-row-spacer">
        <fieldset>
            <legend>iFrame Example</legend>
            <iframe id="courses-iframe" src="https://rahulshettyacademy.com/" name="iframe-name" style="width: 100%; height: 600px" scrolling="yes" marginwidth="0" marginheight="0" vspace="0" hspace="0" frameborder="0">
            </iframe>
        </fieldset>
    </div>
</body>

<!-- <footer class="jumbotron text-center header_style">
    <center>Copyright © 2019 QAClick Academy. All Rights Reserved. </center>
</footer> -->

<div id="gf-BIG" class=" footer_top_agile_w3ls gffoot footer_style" >
        <table class="gf-t">
            <tbody>
                <tr>
                    <td>
                        <ul>
                            <li class="gf-li"><h3><a href="#">Discount Coupons</a></h3></li>
                            <li class="gf-li"><a href="http://www.restapitutorial.com/" >REST API</a></li>
                            <li class="gf-li"><a href="https://www.soapui.org/" >SoapUI</a></li>
                            <li class="gf-li"><a href="https://www.udemy.com/course/mobile-automation-using-appiumselenium-3/?referralCode=C46BF551F5B9EAF08E10" >Appium</a></li>
                            <li class="gf-li"><a href="https://jmeter.apache.org/" >JMeter</a></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li class="gf-li"><h3><a href="#">Latest News</a></h3></li>
                            <li class="gf-li"><a href="https://rahulshettyacademy.com/brokenlink">Broken Link</a></li>
                            <li class="gf-li"><a href="#" >Dummy Content for Testing.</a></li>
                            <li class="gf-li"><a href="#" >Dummy Content for Testing.</a></li>
                            <li class="gf-li"><a href="#" >Dummy Content for Testing.</a></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li class="gf-li"><h3><a href="#">Contact info</a></h3></li>
                            <li class="gf-li"><a href="#" >Dummy Content for Testing.</a></li>
                            <li class="gf-li"><a href="#" >Dummy Content for Testing.</a></li>
                            <li class="gf-li"><a href="#" >Dummy Content for Testing.</a></li>
                            <li class="gf-li"><a href="#" >Dummy Content for Testing.</a></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li class="gf-li"><h3><a href="#">Social Media</a></h3></li>
                            <li class="gf-li"><a href="#" >Facebook</a></li>
                            <li class="gf-li"><a href="#" >Twitter</a></li>
                            <li class="gf-li"><a href="#" >Google+</a></li>
                            <li class="gf-li"><a href="#" >Youtube</a></li>
                        </ul>
                    </td>
                    
                </tr>
            </tbody>
        </table>

    </div>
					<!-- ==== CREDITS START == -->
					<div class="col-sm-8 right-align">
						&copy; 2019 Powered by<strong><a href='http://www.medianhconsulting.com' target="_blank"> Medianh Consulting</a></strong> 
					</div>
					<!-- ==== CREDITS END == -->
</html>
