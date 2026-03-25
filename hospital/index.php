<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> CURIS</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <style>
        .floating-chat {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        .chat-btn {
            background: #28a745;
            color: white;
            border: none;
            padding: 15px 25px;
            border-radius: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            font-size: 16px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .chat-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            background: #218838;
            text-decoration: none;
            color: white;
        }
        .chat-btn i {
            margin-right: 8px;
            font-size: 20px;
        }
        .chat-window {
            position: fixed;
            bottom: 100px;
            right: 20px;
            width: 350px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.2);
            display: none;
            z-index: 1000;
            overflow: hidden;
        }
        .chat-header {
            background: #28a745;
            color: white;
            padding: 15px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .close-chat {
            color: white;
            cursor: pointer;
            font-size: 20px;
        }
        .chat-messages {
            height: 300px;
            overflow-y: auto;
            padding: 15px;
        }
        .message {
            margin-bottom: 10px;
            padding: 8px 15px;
            border-radius: 15px;
            max-width: 80%;
            word-wrap: break-word;
        }
        .user-message {
            background: #e3f2fd;
            margin-left: auto;
            border-top-right-radius: 5px;
        }
        .bot-message {
            background: #f5f5f5;
            margin-right: auto;
            border-top-left-radius: 5px;
        }
        .chat-input {
            display: flex;
            padding: 15px;
            border-top: 1px solid #eee;
        }
        .chat-input input {
            flex: 1;
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 20px;
            margin-right: 10px;
            outline: none;
        }
        .chat-input button {
            background: #28a745;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            cursor: pointer;
        }
        .chat-input button:hover {
            background: #218838;
        }
    </style>
</head>

    <body>
    

    <!-- ################# Header Starts Here#######################--->
    
      <header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-sm-12 nav-img d-flex align-items-center justify-content-center">
                   <a href="index.php">
                       <img src="assets/images/hms img/Logo.png" alt="CURIS Logo">
                   </a>
                   <a data-toggle="collapse" data-target="#menu" href="#menu">
                       <i class="fas d-block d-md-none small-menu fa-bars"></i>
                   </a>
                </div>

                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about_us">About Us</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                            <li><a href="#logins">Logins</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint text-end">
                        <a class="btn btn-success" href="hms/user-login.php">Book an Appointment</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    
     <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
            </ol>


   


            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets\images\hms img\slider222.jpg" alt="First slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">WELCOME TO CURIS</h5>
            
                         
                    
                    </div>
                </div>
                
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets\images\hms img\new slider1.jpeg" alt="Second slide">
                      <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">WELCOME TO CURIS</h5>
            
                         
                    
                    </div>
              
                </div>

                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets\images\hms img\slide22.jpg" alt="Third slide">
                      <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">WELCOME TO CURIS</h5>
            
                         
                    
                    </div>
              
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    
  <!--  ************************* Logins ************************** -->
    
    
     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets\images\hms img\patient.jpeg" alt="">

                            <div class="blog-single-det">
                                <h6>Patient Login</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets\images\hms img\doctorlogin.jpeg" alt="">

                            <div class="blog-single-det">
                                <h6>Doctors login</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets\images\hms img\admin.jpeg" alt="">

                            <div class="blog-single-det">
                                <h6>Admin Login</h6>
                    
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    

                    
                    
                </div>
            </div>
            
        </div>
    </section>  







    <!-- ################# Our Departments Starts Here#######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Cardiology</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-brain"></i>
                        <h5>Neurology</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fa fa-eye"></i>
                        <h5>Opthamology</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-child"></i>
                        <h5>Padiatrics</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-tooth"></i>
                        <h5>Dental</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fa fa-stethoscope"></i>
                        <h5>ICU</h5>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fa fa-history"></i>
                        <h5>Operation Theatre</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fa fa-bed"></i>
                        <h5>Emergency Ward</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-pills"></i>
                        <h5>Pharmacy</h5>
                    </div>
                </div>
            </div>






        </div>

    </section>
    
    
  
    
    <!--  ************************* About Us Starts Here ************************** -->
        
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">
                
            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About Our Hospital</h3>
<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
while ($row=mysqli_fetch_array($ret)) {
?>

    <p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
            </div>
        </div>
    </section>    
    
    
            <!--  ************************* Gallery Starts Here ************************** -->
        <div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">

                <h2>Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Cardiology</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Neurology</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Opthamology</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Padiatrics</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">ICU</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Operation Theatre</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Emergency Ward</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Pharmacy</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets\images\hms img\cardiology.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets\images\hms img\neurology.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets\images\hms img\ophthalmology-.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets\images\hms img\padiatrics.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets\images\hms img\dental.jpeg" class="img-responsive">
            </div>

          

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets\images\hms img\ICU.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets\images\hms img\ot.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets\images\hms img\emergency (1).jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets\images\hms img\pharmacy.jpg" class="img-responsive">
            </div>

        </div>
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->       
    
    
     <!--  ************************* Contact Us Starts Here ************************** -->
    
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                </div>
            </form>
            </div>
     
        </div>
    </section>
    
    
    
    
    
    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">

<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
while ($row=mysqli_fetch_array($ret)) {
?>


                        <?php  echo $row['PageDescription'];?> <br>
                        Phone: <?php  echo $row['MobileNumber'];?> <br>
                        Email: <a href="mailto:<?php  echo $row['Email'];?>" class=""><?php  echo $row['Email'];?></a><br>
                        Timing: <?php  echo $row['OpenningTime'];?>
                    </address>

        <?php } ?>





                </div>
            </div>
        </div>
        

    </footer>
    <div class="floating-chat">
        <div class="chat-btn" onclick="toggleChat()">
            <i class="fas fa-comments"></i>
            <span>Chat with Us</span>
        </div>
        <div class="chat-window" id="chatWindow">
            <div class="chat-header">
                <span>Hospital Assistant</span>
                <span class="close-chat" onclick="toggleChat()">&times;</span>
            </div>
            <div class="chat-messages" id="chatMessages">
                <div class="message bot-message">Hello! How can I help you today?</div>
            </div>
            <div class="chat-input">
                <input type="text" id="userInput" placeholder="Type your message..." onkeypress="if(event.key === 'Enter') sendMessage()">
                <button onclick="sendMessage()">Send</button>
            </div>
        </div>
    </div>
    <div class="copy">
            <div class="container">
            CURIS
                
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>

    <script>
        function toggleChat() {
            const chatWindow = document.getElementById('chatWindow');
            chatWindow.style.display = chatWindow.style.display === 'none' ? 'block' : 'none';
            if (chatWindow.style.display === 'block') {
                document.getElementById('userInput').focus();
            }
        }

        function sendMessage() {
            const userInput = document.getElementById('userInput');
            const message = userInput.value.trim();
            
            if (message === '') return;

            // Add user message to chat
            addMessage(message, 'user');
            userInput.value = '';

            // Get bot response
            $.ajax({
                url: 'chatbot/chatbot.php',
                method: 'POST',
                data: { message: message },
                dataType: 'json',
                success: function(data) {
                    addMessage(data.response, 'bot');
                },
                error: function() {
                    addMessage("Sorry, there was an error processing your request.", 'bot');
                }
            });
        }

        function addMessage(message, sender) {
            const chatMessages = document.getElementById('chatMessages');
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${sender}-message`;
            messageDiv.textContent = message;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Initialize chat window display state
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('chatWindow').style.display = 'none';
        });
    </script>