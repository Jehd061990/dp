@include('layouts/header')
<footer class="footer">
    <div class="container bottom_border">
    <div class="row">
    <div class=" col-sm-4 col-md col-sm-4  col-12" id="call_us">
    <h5 class="headin5_dp col_white_dp pt2" >Call us:</h5>
   
    <p class="mb10">Feel free to reach out to us! Our team is ready to assist you. Whether you have questions, need support, or simply want to connect, we're just a phone call away. </p>
    <p><i class="fa fa-phone"></i>  +02-79878949  </p>
    <p><i class="fa fa fa-envelope"></i> dwellingplans@gmail.com.ph  </p>
    
    
    </div>
    
    
    <div class=" col-sm-4 col-md  col-6 col" id="useful_links">
    <h5 class="headin5_dp col_white_dp pt2" >Useful links:</h5>
   
    <ul class="footer_ul_dp">
    <li><a href="#">About Us</a></li>
    <li><a href="#">Products</a></li>
    <li><a href="#">Projects</a></li>
    <li><a href="#">Our Team</a></li>
    <li><a href="#">Contact us</a></li>
    </ul>
  
    </div>
    
    
    <div class=" col-sm-4 col-md  col-6 col">
    <h5 class="headin5_dp col_white_dp pt2">Quick links:</h5>
 
    <ul class="footer_ul_dp">
    <li><a href="#">Testimonials</a></li>
    <li><a href="#">Privacy Policy</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Terms</a></li>
    </ul>
  
    </div>
    
    
    <div class=" col-sm-4 col-md  col-12 col">
    <h5 class="headin5_dp col_white_dp pt2">Follow us:</h5>
   
    
    <ul class="footer_ul2_dp">
    <img src="/img/icons/twitter.png">
    <img src="/img/icons/facebook.png">
    <img src="/img/icons/instagram.png"> <br/>
    <img src="/img/icons/linkedin.png">
    <img src="/img/icons/youtube.png">
    <img src="/img/icons/twitter (2).png">

    </ul>
   
    </div>
    </div>
    </div>
    
    
    <p class="text-center mt-4" id="copyright">Copyright @2024 | Designed by <a href="#">Dwelling Plans</a></p>
    
  
   
    </div>
    
    </footer>
    <style>
        .col_white_dp { color:#FFF;}
footer { width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ;}
.pt2 { padding-top:40px ; margin-bottom:20px ;}
footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
.mb10 { padding-bottom:15px ;}
.footer_ul_dp { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
.footer_ul_dp li {padding:0px 0px 5px 0px;}
.footer_ul_dp li a{ color:#CCC;}
.footer_ul_dp li a:hover{ color:#fff; text-decoration:none;}
.fleft { float:left;}
.padding-right { padding-right:10px; }

.footer_ul2_dp {margin:0px; list-style-type:none; padding:0px;}
.footer_ul2_dp li p { display:table; }
.footer_ul2_dp li a:hover { text-decoration:none;}
.footer_ul2_dp li i { margin-top:5px;}

.bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
.foote_bottom_ul_dp {
	list-style-type:none;
	padding:0px;
	display:table;
	margin-top: 10px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
}
.foote_bottom_ul_dp li { display:inline;}
.foote_bottom_ul_dp li a { color:#999; margin:0 12px;}

.social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
.social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
.social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li i {  width:20px; height:20px; text-align:center;}

#useful_links {
    margin-left: 150px;
}

img {
    width: 40px;
    margin-right: 10px;
    margin-top: 10px;

}

#call_us {
    margin-left: 70px;
}

@media only screen and (max-width: 950px) {

  footer {
    margin: 0;
    padding: 0;
    font-size: 10px;
    text-align: center;
  }
  #useful_links {
    margin-left: 0;
        }

#copyright {
    font-size: 10px;
        }

        #call_us {
    margin: auto;
    padding: 0;
   

        }

    
}

    </style>