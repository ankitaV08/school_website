<!DOCTYPE html>
<html>
    <head>
    <title> STUDENT INFORMATION TABLE </title>
        <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <style>
            * {
			outline: none;
			padding: 0;
			margin: 0;
            }
            
            a {
                outline: none !important;
            }
            
            body {
                background-color: #F5F5F5;
                color: #555;
                font-size: 1.7em;
                font-family: Arial, Helvetica, sans-serif;
                outline: none;
                padding: 0;
                margin: 0;
            }

            .header{
                margin-top:0;
                background:#222222;
            }

            .statusbar{
                margin-left:0;
            }
            nav ul {
                -webkit-font-smoothing: antialiased;
                list-style: none;
                margin : none;
                padding: 0;
                width: 100%;
            }
            
            nav li {
                float:left;
                margin : 0.5%;
                padding: 0;
                position: relative;
            }
            nav a {
                color: #FFFFFF;
                display: block;
                font: normal 13px/50px Arial, Helvetica, sans-serif;
                padding: 0 25px;
                text-align: center;
                text-decoration: none;
                -webkit-transition: all .25s ease;
                -moz-transition: all .25s ease;
                -ms-transition: all .25s ease;
                -o-transition: all .25s ease;
                transition: all .25s ease;
            }
            nav .dropdown {
                background:url('../images/arrow.jpg') no-repeat right center;
            }
            nav li:hover a {
                background: #088b03;
                color:#FFF;
            }
            nav li ul {
                float: left;
                left: 0;
                width:150%;
                opacity: 0;
                position: absolute;
                top: 35px;
                visibility: hidden;
                z-index: 1;
                -webkit-transition: all .25s ease;
                -moz-transition: all .25s ease;
                -ms-transition: all .25s ease;
                -o-transition: all .25s ease;
                transition: all .25s ease;
            }
            nav li:hover ul {
                opacity: 1;
                top: 50px;
                visibility: visible;
            }
            nav li ul li {
                float: none;
                width: 100%;
            }
            nav li ul a:hover {
                background: #bbb;
            }
            /* Clearfix */
            .cf:after, .cf:before {
                content: "";
                display: table;
            }
            .cf:after {
                clear: both;
            }

            
            #logoIN
            {
                background-color: #F5F5F5;
                margin-top:2%;
                margin-left:1%;
                height: 10%;
                width: 10%;
            }
            
            .logo
            {
                margin-top:-2.95%;
                font-size:300%;
                font-family:Palatino Linotype;
                color:darkgreen;
                margin-left:0;
            }
 /*           body{
                margin: 1%;
                font-family: Arial, Helvetica, sans-serif;
                color: darkslategrey;
                font-size: 2rem;
                background-color: ghostwhite;
            }   */
            h1
            {
                text-align: center;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-weight: bolder;
            }
            table{
                border-radius: 3px;
                border-style: double;
                border-width: 4px;
                border-color: darkcyan;
                margin-left: auto;
                margin-right: auto;
                align-self: center;
                padding : 3%;
                margin-left : 10%;
                margin-right : auto;
                background-color: gainsboro
            }
            td{

                max-height: 5%;
                border-style:solid;
                border-width:0rem;
                margin-left: auto;
                margin-right: auto;
                align-self: center;
                padding : 2%;
                margin: 3px;
                text-align: center;
                background-color: ghostwhite;
                font-weight: bolder;
                border-width: 2px;

            }
            th{
                text-align:center;
            }
            
            input[type=text], input[type=email], input[type=number]{
                width: 50%;
                padding: 6px 12px;
                margin: 5px 0;
                box-sizing:content-box;
            }
            input[type=submit], input[type=reset]{
                width: 15%;
                padding: 8px 12px;
                margin: 5px 0;
                box-sizing: border-box;
            }

            /* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .text {font-size: 11px}
		}


		.contact
		{
			height:265px;
			width:1345px;
			border-radius: 1345px 1345px 0px 0px;
			background:#8F9092;
		}
		
		.image
		{
			width:200px;
			height:200px;
			margin-left:600px;
			margin-top:-70px;
			border-radius : 80px 80px 80px 80px;
		}
		
		.contacts
		{
			margin-left:200px;
			padding: 0px 30px 0px 0px;
		}
		
		.phone
		{
			margin-top:-115px;
			text-align: right;
			margin-right:180px;
		}

        </style>

    </head>

    <body>
    <div style="background-color: darkgreen; color: #FFFFFF; margin: 2%; height: 15%; width: 100%;">
            <a href="index.html">
            <img id="logoIn" src="Images/logo.png" width="10%" 	height="10%" style="border:none;margin-left: 0%;"> </a>
                
   
            <div class="logo"  style="border:none; color: #FFFFFF;">
                <p style="margin-left:18%;"><strong> St Joseph's Co-Ed School, Bhopal </strong></p>
            
            </div>
        </div>
		
     <div class="header">  
        <nav>
            <ul class="cf">
				<li class="statusbar"><a href="index.html">Home</a>
				</li>
				
                <li class="statusbar"><a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp About Us</a>
                    <ul>
                        <li><a href="index.html">Brief History</a></li>
                        <li><a href="#">Principal's Desk</a></li>
                        <li><a href="#">Vision & Mission</a></li>
                        <li><a href="index.html">Facilities</a></li>
                        <li><a href="#">Awards</a></li>
                        <li class><a href="#">School Information </a></li>
                    </ul>
                </li>
                
                <li class="statusbar"><a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Academics</a>
                    <ul>
                        <li><a href="index.html">Curriculum</a></li>
                        <li><a href="#">Examination & Promotion</a></li>
                        <li><a href="#">Co-Curricular Activities</a></li>
                        <li><a href="index.html">Admission and Withdrawal</a></li>
                        <li><a href="#">Exposure Programmes</a></li>
                        <li><a href="#">Teacher Incharges </a></li>
                        <li><a href="#">Rules and regulations</a></li>
                        <li><a href="#">Time table</a></li>
                        <li><a href="index.html">Book-List 2020-2021</a></li>
                        <li><a href="#" class="dropdown">Activity Calendar</a>
                          <ul>
                                <li class="status bar"><a href="#">Kinder Garten</a></li>
                                <li class="statusbar"><a href="#">Primary</a></li>
                                <li class="statusbar"><a href="#">Secondary</a></li>
                          </ul>
                        </li>
                        
                    </ul>
                </li>

                <li class="statusbar"><a href="index.html">Sports Corner</a>
				</li>
				
                <li><a class="statusbar" href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Student's Corner</a>
                    <ul>
                        <li><a href="studentReg.php" target="_blank">Registration form</a></li>
                        <li><a href="studentInfo.php" target="_blank">Student Information</a></li>
                        <li><a href="#">Clubs</a></li>
                        <li><a href="#">EduTrips</a></li>
                        <li><a href="#">Scholarships and Awards</a></li>
                        <li><a href="#">Student Cabinet</a></li>
                        <li><a href="#">Achievements</a></li>
                    </ul>
                </li>

                <li><a class="statusbar" href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Login and Registration</a>
                	<ul>
                        <li><a href="#">School MIS</a></li>
                        <li><a href="#">School Automation</a></li>
                        <li><a href="teacherReg.php" target="_blank">Teacher's Registration</a></li>
                        <li><a href="classReg.php" target="_blank">Classroom Registration</a></li>
                    </ul>
                </li>

                <li><a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Contact Us</a>
				</li>

            </ul>
        </nav>
    </div>
    
        <br>
        <h1><b>STUDENT INFORMATION TABLE</b></h1><br>
        <table align="center" cellpadding = "10px"  class="col-lg-10">
            <thead>
              <tr>
                <th scope="col">SNo.</th>
                <th scope="col">STUDENT NAME</th>
                <th scope="col">STANDARD</th>
                <th scope="col">SECTION</th>
                <th scope="col">CLASS TEACHER</th>
                <th scope="col">CITY</th>
              </tr>
            </thead>
            
           <?php

               // session_start();
                //conect to db
               $db = mysqli_connect('localhost','root','','schooldb') or die("could not connect to database...");
                 // fetching from db and displaying data
                $result = mysqli_query($db,"SELECT * FROM students s inner join classes c on s.classno=c.cid inner join teachers t on c.t_id=t.empid");
    
                $sr=0;
                while($row=mysqli_fetch_array($result)){
                    $sr=$sr+1;
            ?>    
            <tbody>          
             <tr>
                <td><?php echo  $sr; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['standard']; ?></td>
                <td><?php echo $row['section']; ?></td>
                <td><?php echo $row['t_name']; ?></td>
                <td><?php echo $row['city']; ?></td>
            </tr>
            <?php  
                    
                } 
                mysqli_close($db);
            ?>              
            </tbody>
          </table>

          <div class="contact" style="margin-top: 50%; width:100%;">
	
            <img class="image" src="images/logo.png">
            <div style="width:60%;">
                <h1 style="text-align:center;"> Address </h1>
                <p class="contacts"> E-6, Arera Colony, <br>
                    Bhopal<br>
                    Madhya Pradesh - 466114 
                </p>
            </div>
            
            <div  class="phone">
                <h2 style="font-size:100%; margin-right:30%"> Contacts </h2>
                <p> You may contact us at our <br>info@stjosephcoed.org <br>Following phone numbers: <br>
                                <span style="margin-right:65px"> 0755 - 2565434   </span>  <br> 
                                <span style="margin-right:25px"> 0755 - 4295084 </span>
                </p>
            </div>
		
	      </div>
        

    </body>

</html>