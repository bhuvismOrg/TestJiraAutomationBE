



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">   
    <title>Temporary</title>
    <meta content="Temporary Cloud Storage and File Sharing Service poweredby tempCloud" name="description">
  <meta content="tempcloud,Bhuvan,bhuvan s m,Temporary Cloud, File sharing online" name="keywords">
     <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <link href="assets/img/Logo.png" rel="icon">
  <link href="assets/img/Logo.png" rel="apple-touch-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet"> 
  <link href="indexStyles.css" rel="stylesheet">
  <script>
  function loader(){
    var file = document.getElementById('file-upload').value
    var room = document.getElementById('roomid').value
    if(file && room){
      var load = document.getElementById('load')
      
        load.classList.add('sk-chase')
    }
       
  }

 
        $(document).ready(function(){


            $("#but_upload").click(function(){ 
                var fd = new FormData();
var files = $('#file')[0].files[0];
var filename = files.name;
fd.append('file',files);
       
        $.ajax({
            url:"https://tempcloud.ml/apiup.php",
            method:"POST",
            data : fd,
            contentType: false,
         processData: false,
            success:function(data){
              var link = "https://tempcloud.ml/apidown.php?name="+data+"&dname="+filename;
              getlink(link);
              
              
            }
        })
    
     
            });
            

         });
  
  </script>
   
</head>
<body>


  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="https://btemp.ml"><span>Btemp</span></a></h1>
        <small style="color: #fff">(Powered by <a href="https://tempcloud.ml">tempCloud</a>)</small>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">How it works</a></li>
          <li><a href="#upload">Upload</a></li>
          
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact Us</a></li>
      
          
        </ul>
      </nav>

    </div>
  </header>

  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="assets/img/fast.png" style="border-radius:50%;" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h4 style="color:white; font-family: Verdana, Geneva, Tahoma, sans-serif;" >Upload your files<br> and get access to it instantly which enables you to share the file with others  </h4>
        <div>
          <a href="#upload" class="btn-get-started scrollto">Upload</a>
      
        </div>
      </div>

    </div>
  </section>

<br>

<main id="main">
  <section id="about">
    <div class="container">

      <header class="section-header">
        <h3>How it works</h3>
        <p>Sharing files on Btemp is made much easier than ever</p>
      </header>

      <div class="row about-container">

        <div class="col-lg-6 content order-lg-1 order-2">
          <p>
            Just follow the only step to share your files
          </p>

          <div class="icon-box wow fadeInUp">
            <div class="icon"><i class="fa fa-cloud-upload"></i></div>
            <h4 class="title"><a href="#upload">Upload</a></h4>
            <p class="description"> Choose your file, then upload to our cloud.<br>We'll provide you a link which can be used <br> to access the file you just uploaded.</p>
          </div>

          

          <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
            <div class="icon"><i class="fa fa-exclamation-circle"></i></div>
            <h4 class="title">Note</h4>
            <p class="description">This is a temporary cloud service, your files will be deleted if not downloaded for last <b>7 days</b></p>
          </div>

        </div>

        <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
          <img src="assets/img/main.png" class="img-fluid" alt="">
        </div>
      </div>

      <section>
        <div class="container">
          
          <div class="row justify-content-center">
  
            <div class="col-lg-6 content order-lg-1 order-2" id="upload">
              <h3 id="upload"><b>Upload your file here!</b></h3>

              <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                <input type="file" id="file" name="file" /><br><br>
          <input type="button" class="btn btn-primary" value="Upload" data-dismiss="modal" role="button" data-toggle="modal" data-target="#link" id="but_upload">
                
                
                </div>
               
                </form>    
            </div>
            </div>
            </div>




      </section>
   
     <hr>








      <div class="row about-extra">
        <div class="col-lg-6 wow fadeInLeft">
          <img src="assets/img/sec.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
          <h4>Highly secure file transfer</h4>
          <p>
            Your files are always safe with us
          </p>
          <p>
            We ensure that your files are accessible only by the link provided by us.
          </p>
        </div>
      </div>

      <div class="row about-extra">
        <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
          <img src="assets/img/hiw.png" style="border-radius:50%;" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
          <h4>Fastest and most Efficient file transfer</h4>
          <p>
            Sharing files on Btemp and generating a shareable link is done within no time.
          </p>
          <p>
            Speed guaranteed with our servers having over 350Mbps network connection
          </p>
          <p>
            99.99% server uptime as promised 
          </p>
        </div>

      </div>

    </div>
  </section>

   
    
 <div id="services"></div>
  <section id="why-us" class="wow fadeIn">
    <div class="container">
      <header class="section-header">
        <h3>Why choose us?</h3>
        <p>Sharing files on Btemp is easier than ever</p>
      </header>

      <div class="row row-eq-height justify-content-center">

        <div class="col-lg-4 mb-4">
          <div class="card wow bounceInUp">
            <i class="fa fa-fast-forward"></i>
            <div class="card-body">
              <h5 class="card-title">Fast</h5>
              <p class="card-text">Speed guaranteed with our servers having over 350Mbps network connection</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card wow bounceInUp">
            <i class="fa fa-lock"></i>
            <div class="card-body">
              <h5 class="card-title">Secure</h5>
              <p class="card-text">We follow highest safety standards to ensure that your files are safe with us</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card wow bounceInUp">
            <i class="fa fa-tachometer"></i>
            <div class="card-body">
              <h5 class="card-title">Reliable</h5>
              <p class="card-text">99.99% server uptime as promised</p>
            </div>
          </div>
        </div>

      </div>

      <div class="row counters">

        <div class="col-lg-4 col-6 text-center">
          <span><?php echo $loadtime[0]*100 ?>%</span>
          <p>Server load</p>
        </div>

        <div class="col-lg-4 col-6 text-center">
          <span><?php echo shapeSpace_disk_usage(); ?></span>
          <p>Disk Usage</p>
        </div>

        <div class="col-lg-4 col-12 text-center">
          <span><?php echo shapeSpace_server_uptime(); ?> Hours</span>
          <p>Server uptime</p>
        </div>
      </div>

    </div>
  </section>

  <section id="contact">
    <div class="container-fluid">

      <div class="section-header">
        <h3>Reach out to us</h3>
      </div>

      <div class="row wow fadeInUp">


        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-5 info">
              <i class="ion-ios-location-outline"></i>
              <p>Mysuru, Karnataka - 570023</p>
            </div>
            <div class="col-md-4 info">
              <i class="ion-ios-email-outline"></i>
              <p><a href="mailto:me@bhuvan.me">me@bhuvan.me</a></p>
            </div>
            <div class="col-md-3 info">
              <i class="ion-ios-telephone-outline"></i>
              <p><a href="tel:9740411323">+91 9740411323</a></p>
            </div>
          </div>

          <!-- <div class="form">
            <form action="mail.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-lg-6">
                  <input type="email" class="form-control" name="from" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="body" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
            </form>
          </div> -->
        </div>

      </div>

    </div>
  </section>
</main>



<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-info">
          <h3>Btemp</h3>
          <p>Temporary Cloud Storage and Service powered by <a href="https://tempcloud.ml"><strong>tempCloud</strong></a></p>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">How it works</a></li>
        <li><a href="#upload">Upload</a></li>
        
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
            <strong>Phone:</strong> +919740411323<br>
            <strong>Email:</strong> me@bhuvan.me<br>
          </p>

          <div class="social-links">
            <a target="_blank" href="https://twitter.com/BhuvanSM1" class="twitter"><i class="fa fa-twitter"></i></a>
          
            <a target="_blank" href="https://www.instagram.com/bhuviism/" class="instagram"><i class="fa fa-instagram"></i></a>
            <a target="_blank" href="https://www.instagram.com/bhuviism/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a target="_blank" href="https://github.com/bhuvism" class="GitHib"><i class="fa fa-github"></i></a>
          </div>

        </div>
      </div>
    </div>
  </div>



  




  <div class="container">
    <div class="copyright">
     
    </div>
    <div class="credits">
      Developed by <a href="https://bhuvan.me/">Bhuvan S M</a><br>
      
    </div>
  </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
   

       

        <div class="modal fade" id="link" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"> Here's your shareable link  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <textarea name="text" class="form-control" id="mylink"></textarea>
        </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name="copy_btn" data-dismiss="modal" onclick="copytoCB2()">Copy to clipboard</button>
        </div>
        </div>
      </div>
    </div>
     <script>
            if ('serviceWorker' in navigator) {
              console.log("Will the service worker register?");
              navigator.serviceWorker.register('service-worker.js')
                .then(function(reg){
                  console.log("Yes, it did.");
                }).catch(function(err) {
                  console.log("No it didn't. This happened: ", err)
                });
            }
          </script>

    <script src="btemp.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/mobile-nav/mobile-nav.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

</body>
</html>
