
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  {{ trans('panel.site_title') }}
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="profile-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
     
      <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip" title="My name is Jonhpaul Tanion" data-placement="bottom" >
        {{ trans('panel.site_title') }}
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link"  href="javascript:void(0)" onclick="scrollToPortfolio()">My Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="javascript:void(0)" onclick="scrollToAbout()">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToContact()">Contact Me</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow me on Facebook" data-placement="bottom" href="https://www.facebook.com/johnpaul.tanion.773" target="_blank">
            <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow me" data-placement="bottom" href="/" target="_blank">
            <i class="fab fa-linkedin text-white "></i>
              <p class="d-lg-none d-xl-none">Linkedin</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow me on Github" data-placement="bottom" href="https://github.com/johnpaultanion001" target="_blank">
              <i class="fab fa-github text-white "></i>
              <p class="d-lg-none d-xl-none">Github</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter page-header-small" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('../assets/img/bg12.jpg');">
      </div>
      <div class="container">
        <div class="photo-container">
          <img src="../assets/img/johnpaul.png" alt="">
        </div>
        <h3 class="title">John Paul Tanion</h3>
        <p class="category">Web Developer / Student</p>
       
      </div>
    </div>
    <!-- portfolio -->
    <div class="section section-portfolio">
      <div class="container">
        <div class="button-container">
          <a target="_blank" href="/assets/resume/resume.docx" rel="tooltip" title="Download my resume" class="btn btn-primary btn-round btn-lg">My Resume</a>
          <a href="https://www.facebook.com/johnpaul.tanion.773" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Facebook">
             <i class="fab fa-facebook-square"></i>
          </a>
          <a href="https://github.com/johnpaultanion001" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Github">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <h3 class="title text-center">My Portfolio</h3>
          </div>
          <!-- Tab panes -->
          <div class="section section-examples" >
              <div class="container text-center">
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">
                        <a href="examples/landing-page.html" target="_blank">
                            <img src="assets/img/landing.jpg" alt="Image" class="img-raised">
                        </a>
                        <a href="/" class="btn btn-outline-default btn-primary btn-round">Live Preview</a>
                        <a href="/" class="btn btn-outline-default btn-primary btn-round">Documentation</a>
                      </div>
                      <div class="col-md-6">
                        <a href="examples/profile-page.html" target="_blank">
                            <img src="assets/img/profile.jpg" alt="Image" class="img-raised">
                        </a>
                        <a href="/" class="btn btn-outline-default btn-primary btn-round">Live Preview</a>
                        <a href="/" class="btn btn-outline-default btn-primary btn-round">Documentation</a>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!-- about -->
    <div class="section-about section-nucleo-icons clear-filter" filter-color="orange">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 text-white">
              <h3 class="title text-center">About Me</h3>
              <h5 class="description text-white">To know something new and enhance my skills in a dynamic and stable workplace.
                                And to gain new experience and to utilize my interpersonal skills to achieve my goals.</h5>

            </div>
            <div class="col-md-10 ml-auto col-xl-6 mr-auto">
              
            <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange">
                  <div class="col">
                    <h6>Educational Background</h6>
                  </div>
                  <div class="col text-right">
                    <a data-toggle="tab" href="#achievements" role="tab">
                    <i class="now-ui-icons business_briefcase-24"></i> Achievements
                    </a>
                  </div>
                  
                    
                  </ul>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane active" id="educ" role="tabpanel">
                      <h6>College</h6>
                      <p>Bachelor of Science in Computer Science At ICCT Colleges in Antipolo Branch And I am now 2yr college.</p>
                      <h6>Senior High</h6>
                      <p>Information and Communication Technology Strand And i graduate at Sti Ortigas Cainta.</p>
                      
                    </div>
                    <div class="tab-pane" id="achievements" role="tabpanel">
                      <p> Participating in UnionBankHackathon 2018 At Makati city And Top 16 </p>
                      <p> Participating in DICT YOUTHHACK MNL 2018 At Makati city </p>
                      <a data-toggle="tab" href="#educ" role="tab">
                      <i class="now-ui-icons business_briefcase-24"></i> Educational Background </a> 
                    </div>
                  </div>
                </div>
              </div>
            
             
            </div>
            <div class="col-md-10 ml-auto col-xl-6 mr-auto">
              
              <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange">
                      <div class="col">
                        <h6>Other Info.</h6>
                      </div>
                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="educ" role="tabpanel">
                        
                          <p><i class="now-ui-icons location_pin text-primary"></i> Cadiz st. No 69 Sitio Eldorado , Brgy Sanjose Antipolo City , Rizal</p>
                        
                          <p> <i class="now-ui-icons tech_mobile text-primary"></i> 0977 666 88 20 </p>
                        
                          <p><a href="mailto:Johnpaultanion001@gmail.com" style="text-decoration: none;"><i class="now-ui-icons ui-1_email-85 text-primary"></i> Johnpaultanion001@gmail.com</a></p>
                          <div class="text-center col-md-12 col-lg-8">
                            <a target="_blank" href="https://www.facebook.com/johnpaul.tanion.773" class="btn btn-primary btn-icon btn-facebook btn-round btn" rel="tooltip" title="Follow me on Facebook">
                              <i class="fab fa-facebook-square text-white "></i>
                            </a>
                            <a target="_blank" href="/" class="btn btn-primary btn-icon btn-linkedin btn btn-round" rel="tooltip" title="Follow me">
                              <i class="fab fa-linkedin text-white "></i>
                            </a>
                            <a target="_blank" href="https://github.com/johnpaultanion001" class="btn btn-primary btn-icon btn-github btn-round btn" rel="tooltip" title="Follow me on Github">
                              <i class="fab fa-github text-white "></i>
                            </a>
                          </div>
                        </div>
                     
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-md-10 ml-auto col-xl-6 mr-auto">
             
              <!-- Tabs with Background on Card -->
              <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange">
                  <h6>My studies</h6>
                  </ul>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="home1" role="tabpanel">
                    <p><span class="badge badge-default"> Laravel Framwork (PHP)</span>
                    <span class="badge badge-success">My SQL</span>
                    <span class="badge badge-warning">Rest API</span>
                    <span class="badge badge-primary">Bootstarp</span>
                    <span class="badge badge-success">Ajax</span>
                    <span class="badge badge-info">Vue</span>
                    <span class="badge badge-warning">C# Windows Form</span>
                    <span class="badge badge-danger">Vb.Net Windows Form</span></p>
                    
                    </div>
                  
                  </div>
                </div>
              </div>
              <!-- End Tabs on plain Card -->
            </div>
            <div class="col-md-10 ml-auto col-xl-6 text-center mt-4 mr-auto">
                
            <a target="_blank" href="/assets/resume/resume.docx" rel="tooltip" title="Download my resume" class="btn btn-primary btn-round btn-lg">Download My Resume</a>
              
            </div>
          </div>
        </div>
      </div>









    <div class="page-header section-contact clear-filter " filter-color="orange">
      <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
        <div class="content">
          <div class="container">
         
            <div class="card card-login card-plain">
              <h3 class="title">Want to work with me?</h3>
              <p class="description">Your project is very important to me.</p>
              <i  class="loading-form now-ui-icons loader_refresh spin"></i>
              <form  method="post" id="myForm" class="form">
              @csrf
                  <div class="card-body">
                      <div class="input-group no-border input-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="now-ui-icons users_circle-08"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name...">
                        <span class="invalid-feedback" role="alert">
                            <strong id="error-name"></strong>
                        </span>
                      </div>
                      <div class="input-group no-border input-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="now-ui-icons ui-1_email-85"></i>
                          </span>
                        </div>
                        <input type="email" placeholder="You Email..." id="email" name="email" class="form-control" />
                        <span class="invalid-feedback" role="alert">
                            <strong id="error-email"></strong>
                        </span>
                      </div>
                      
                      <div class="input-group no-border input-lg">
                        <textarea class="form-control" id="message" name="message" rows="4" cols="80" placeholder="Type a message..."></textarea>
                        <span class="invalid-feedback" role="alert">
                            <strong id="error-message"></strong>
                        </span>
                      </div>
                      <div class="send-button">
                        <input type="submit" name="action_button" id="action_button" class="btn btn-primary btn-round btn-block btn-lg" value="Send Message" />
                        
                      </div>
                  </div>
              </form>
            </div>
          
          </div>
        </div>   
        <footer class="footer">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="/">
                JONHPAULSITE
              </a>
            </li>
            <li>
              <a href="javascript:void(0)" onclick="scrollToPortfolio()">My Portfolio</a>
            </li>
            <li>
              <a href="javascript:void(0)" onclick="scrollToAbout()">About Me</a>
            </li>
            <li>
              <a href="javascript:void(0)" onclick="scrollToContact()">Contact Me</a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>
          <a href="/" class="text-uppercase">{{ trans('panel.site_title') }}</a>
        </div>
      </div>
          
      
    </footer>
    <div id="success-alert"  class="rounded-left col-4 alert text-white fade show fixed-bottom" data-dismiss="alert" style="margin-left: 65%; z-index: 9999;" role="alert">
    </div>
    
    </div>  
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
    <script>
      $(document).ready(function() {
        $('.loading-form').hide();
     
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
       
        
      });

      function scrollToPortfolio() {

        if ($('.section-portfolio').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-portfolio').offset().top
          }, 1000);
        }
      }
      function scrollToContact() {
        if ($('.section-contact').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-contact').offset().top
          }, 1000);
        }
      }
      function scrollToAbout() {
        if ($('.section-about').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-about').offset().top
          }, 1000);
        }
      }

      $('#myForm').on('submit', function(event){
          event.preventDefault();
          var action_url = "{{ route('msg.store') }}";
          var type = "POST";

                $.ajax({
                    url: action_url,
                    method:type,
                    data:$(this).serialize(),
                    dataType:"json",
                    beforeSend:function(){
                        $('.loading-form').show();
                    },
                    success:function(data){
                        var html = '';
                        $('.loading-form').hide();
                        if(data.errors){
                            $.each(data.errors, function(key,value){
                                if(key == $('#'+key).attr('id')){
                                    $('#'+key).addClass('is-invalid')
                                    $('#error-'+key).text(value)
                                }
                            })
                        }
                        if(data.success){
                            $('#myForm')[0].reset();
                            $('.form-control').removeClass('is-invalid');
                            $('#success-alert').addClass('bg-primary');
                            $('#success-alert').html('<strong>' + data.success + '</strong>');
                            $("#success-alert").fadeTo(5000, 500).slideUp(500, function(){
                                $("#success-alert").slideUp(500);
                            });
                            
                        }
                       
                    }
                });
            });
    </script>
</body>

</html>