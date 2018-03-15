<?php
session_start();

             if(isset($_SESSION['id'])){
              $username=($_SESSION['username']);
              $userId=($_SESSION['id']);
            }
            else{
              header("Location:login.php");
            }

 $pagetitle="Home Page";
 include "includes/header.php";
      include "includes/slider.php";
      ?>
        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">VISHNU INSTITUTE OF TECHNOLOGY </span><span class="txt_orange">welcomes you</span>
                    <p class="txt_slogan">
                </div>	
            </div>
        </div>   
        

    <div id="templatemo-blog">
            <div class="container">
                <div class="row">
                 <?php include "includes/sidebar.php";?>
                <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                        <li>    
                        <div class="clearfix"> </div>
                        <p class="blog_text">
                           VISHNU INSTITUTE OF TECHNOLOGY having reputation with atmost developement of student education and Women welfare plans as this institute is locate in VISHNUPUR, BHIMAVARAM of West Godavari district it consists of several courses and Around 7 institutions with 5000 to 8000 people consisting .Several Activities have a scope to develope their skills and fulfill their passion.The authority of this institute are best in tutor and wellwishing this pupil growth in this society.  </p>
                            </li>
                        </ul>
                    </div>  
                </div>
              </div>
           </div>
    </div>
<?php include "includes/footer.php"; ?>