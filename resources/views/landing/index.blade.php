<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <title>AI-9</title>
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <link rel="icon" href="images/icon.png" type="image/png" sizes="16x16">
      <meta name="robots" content="index, follow" />
      <link rel="canonical" href="" />
      <link rel="stylesheet" type="text/css" href="css/landing.css" />
   </head>
   <body>
      <div class="wrapper">
         <div class="header-menu">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-lg fixed-top">
                  <a class="navbar-brand" href="#"><img class="img-fluid" src="images/logo.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                     <div class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <a class="nav-item nav-link active" href="https://www.onesmarter.com/">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="https://www.onesmarter.com/">About</a>
                        <a class="nav-item nav-link" href="https://www.onesmarter.com/">Product</a>
                        <a class="nav-item nav-link" href="https://www.onesmarter.com/">Contact</a>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
         <div class="header">
            <div class="container-custom">
               <div class="row">
                  <div class="col-md-6">
                     <div class="header-text">
                        <h1>Intelligent</h1>
                        <h2>I-9 Audits</h2>
                        <p>Remain I-9 compliant. Conduct bulk I-9 audits using our AI-driven software</p>
                        <button class="custom-btn">Request Information</button>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="layer-photo">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="featured bg-white">
            <div class="container-custom">
               <div class="row">
                  <div class="col-md-6 graphic">
                     <div class="text-right pr-5">
                        <img class="img-fluid" src="{{asset('images/graphic-01.png')}}" alt="">
                     </div>
                  </div>
                  <div class="col-md-6 introduction text-left">
                     <div class="title-who">
                        <h4>Who We Are</h4>
                     </div>
                     <h5 class="mt-4">Fast, Accurate, Low Cost AI-driven Pathway to I-9 Compliance.</h5>
                     <p>AI-9 uses pioneering deep learning, machine learning, and Natural Language Processing (NLP) algorithms to work for HR professionals. Our rapid assessment solution works with hand-written, scanned forms just as easily as with electronically completed I-9's and recognizes issues with remarkable accuracy. Our solutions can process high volumes of I-9's daily without compromising precision.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="services">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 items">
                     <span class="img-block">
                     <span class="faster-svg svg-icon medium"></span>
                     </span>
                     <h5>Faster Compliance</h5>
                     <p>Use our AI-engine and process each I-9 in as little as 135 second</p>
                  </div>
                  <div class="col-md-4 items">
                     <span class="img-block">
                     <span class="error-svg svg-icon"></span>
                     </span>
                     <h5>Reduce Errors</h5>
                     <p>Our intelligent system is built to learn and designed to reduce manual costs</p>
                  </div>
                  <div class="col-md-4 items">
                     <span class="img-block">
                     <span class="time-svg svg-icon"></span>
                     </span>
                     <h5>Reduce Time</h5>
                     <p>By automated examination of I-9 rules and forms; our engine reduces the need for staff to conduct manual audits</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row footer-main f-section">
            <div class="col-md-6 text-left footerForm-block">
               <div class="col-md-12 mb-5" id="request-mesage">
                  <h3>Request information</h3>
                  <h6>Tell us more about your needs and we will be happy to assist you.</h6>
               </div>
               <div class="col-md-12 mb-5" id="sucess-msg" style="display:none">
                  <h3>Your Enquiry is successfully submitted.</h3>
                  <h6>Our team will contact you soon. Thanks</h6>
               </div>
               <div class="col-md-12" id="request-save">
                  <form id="request-submit" role="form" method="POST">
                     @csrf
                     <div class="form-row request-form">
                        <div class="form-group col-md-6">
                           <label>First Name</label>
                           <input type="text" class="form-control" id="first_name" name="first_name">
                        </div>
                        <div class="form-group col-md-6">
                           <label>Email</label>
                           <input type="email" class="form-control" id="email" name="email">
                        </div>
                     </div>
                     <button type="submit" id="send-request" class="btn btn-primary">Send Request</button>
                  </form>
               </div>
            </div>
            <div class="col-md-6 video-block">
               <div class="playVideo">
                  <a id="playVideo" class="video-play-button" data-toggle="modal" data-target="#videoModal">
                    <span></span>
                  </a>
                </div>
            </div>
         </div>
         <div class="fotter" id="">
            <img src="assets/images/one-smarter.png" alt="" class="os">
            <div class="contentWrap">
               <div class="item contact text-left">
                  <h2><a href="+9373446241">+ 1 937 344 6241</a></h2>
                  <a href="mailto:care@onesmarter.com" class="small-text">care@onesmarter.com</a>
                  <p class="small-text">4031 Colonal Glenn Hwy Ste 100<br> Beavercreek, OH 45431</p>
               </div>
               <div class="item quicklinks">
                  <ul>
                     <li><a href="/workSamples/onesmarterdemo/pages/index.php?id=6" class="small-text">Terms Of Use</a></li>
                     <li><a href="/workSamples/onesmarterdemo/pages/index.php?id=1" class="small-text">Privacy Policy</a></li>
                  </ul>
               </div>
               <div class="item getintouch">
                  <ul>
                     <li><a href="https://www.facebook.com/One-Smarter-Inc-739555752885107/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="https://twitter.com/One_Smarter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a></li>
                     <li><a href="https://www.linkedin.com/company/one-smarter-inc?trk=top_nav_home" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                  <p class="small-text">© 2020 One Smarter, All Right Reserved</p>
               </div>
            </div>
         </div>
      </div>

      <!-- Modal -->
         <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <video width="" height="auto" controls="">
                     <source src="{{asset('images/onesmarterLife.mp4')}}" type="video/mp4">
                   </video>
               </div>
            </div>
            </div>
         </div>
      <script>
         var csrf_token = "{{ csrf_token() }}";
      </script>
      <script src="js/landing.js"></script>
   </body>
</html>