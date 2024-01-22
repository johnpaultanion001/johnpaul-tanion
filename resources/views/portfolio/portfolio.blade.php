
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="https://cdn0.iconfinder.com/data/icons/business-and-management-round-flat-icons/500/portfolio-512.png">
  <link rel="icon" type="image/png" href="https://cdn0.iconfinder.com/data/icons/business-and-management-round-flat-icons/500/portfolio-512.png">
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
  <style>
    .project_img{
        width: 100%;
        height: 250px;
    }
  </style>
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
            <a class="nav-link"  href="javascript:void(0)" onclick="scrollToPortfolio()">Projects</a>
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
            <a class="nav-link" rel="tooltip" title="Follow me" data-placement="bottom" href="https://www.linkedin.com/in/john-paul-tanion-b85a021b3/" target="_blank">
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
          <img src="../assets/img/tanion.jpg" alt="">
        </div>
        <h3 class="title">John Paul Tanion</h3>
        <p class="category">Web Developer</p>

      </div>
    </div>
    <!-- portfolio -->
    <div class="section section-portfolio">
      <div class="container">
        <div class="button-container">
          <a target="_blank" href="/assets/resume/Johnpaul_Tanion.pdf" rel="tooltip" title="Download my resume" class="btn btn-primary btn-round btn-lg text-uppercase">My Resume</a>
          <a href="https://www.facebook.com/johnpaul.tanion.773" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Facebook">
             <i class="fab fa-facebook-square"></i>
          </a>
          <a href="https://github.com/johnpaultanion001" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Github">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <h3 class="title text-center">My Projects</h3>
          </div>
          <!-- Tab panes -->
          <div class="section section-examples" >
              <div class="container text-center">
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="project_detail" style="cursor: pointer;" content="pos">
                            <img src="assets/img/projects/p1.png" alt="Image" class="img-raised project_img">
                        </div>
                        <a href="http://jewelandnickle.supsofttech.com/login" target="_black" class="btn btn-info btn-round text-uppercase btn-wd font-weight-bold">Live Preview</a>
                        <button class="btn btn-primary btn-round text-uppercase btn-wd project_detail font-weight-bold" content="pos">Details</button>
                      </div>
                      <div class="col-md-6">
                        <div class="project_detail" style="cursor: pointer;" content="map">
                            <img src="assets/img/projects/p2.png" alt="Image" class="img-raised project_img">
                        </div>
                        <a href="https://jrf-remittance-tracker-map.supsofttech.com/login" target="_black" class="btn btn-info btn-round text-uppercase btn-wd font-weight-bold">Live Preview</a>
                        <button class="btn btn-round btn-primary text-uppercase btn-wd project_detail font-weight-bold"  content="map">Details</button>
                      </div>
                      <div class="col-md-6 mx-auto mt-2">
                        <div class="project_detail" style="cursor: pointer;" content="brgy">
                            <img src="assets/img/projects/p3.png" alt="Image" class="img-raised project_img">
                        </div>
                        <a href="http://e-barangay.supsofttech.com/" target="_black" class="btn btn-info btn-round text-uppercase btn-wd  font-weight-bold">Live Preview</a>
                        <button class="btn btn-round btn-primary text-uppercase btn-wd project_detail font-weight-bold"  content="brgy">Details</button>
                      </div>
                      <div class="col-md-6 mx-auto mt-2">
                        <div class="project_detail" style="cursor: pointer;" content="attendance">
                            <img src="assets/img/projects/p4.png" alt="Image"  class="img-raised project_img">
                        </div>
                        <a href="http://jewelandnickle.supsofttech.com/login" target="_black" class="btn btn-info btn-round text-uppercase btn-wd font-weight-bold">Live Preview</a>
                        <button class="btn btn-round btn-primary text-uppercase btn-wd project_detail font-weight-bold"  content="attendance">Details</button>
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

            <div class="col-xl-6">
              <div class="card" style="height: 400px;">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange">
                      <div class="col">
                        <h6>Work Experience</h6>
                      </div>
                    </ul>
                  </div>
                  <div class="card-body">
                      <ul>
                        <li>
                          <h6>2022 - 2023</h6>
                          <h6>Web Developer</h6>
                          <span>SoftsupTech</span> <br>
                          <span>Developed web applications using laravel framework and Creation REST API . Maintaining the application and support for technical errors</span>
                        </li>
                        <li>
                          <h6>2018 - 2022</h6>
                          <h6>Software Quality Analyst</h6>
                          <span>RealPage Phil. Inc.</span> <br>
                          <span>I am in charge of quality control of the company system assuring that there are no errors and maintaining the system's usability.</span>
                        </li>
                      </ul>
                  </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card" style="height: 400px;">
                <div class="card-header">
                  <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange">
                  <h6>Skillset</h6>
                  </ul>
                </div>
                <div class="card-body">
                      <ul>
                        <li>
                         <h6> Web Development</h6>
                          <p><span class="badge badge-default"> PHP (LARAVEL)</span>
                          <span class="badge badge-success">Ajax</span>
                          <span class="badge badge-warning">Rest API</span>
                          <span class="badge badge-success">My SQL</span>
                          <span class="badge badge-primary">CSS (Bootstarp)</span>
                          <span class="badge badge-primary">Javascript (Jquery)</span></p>
                        </li>
                        <li>
                         <h6> App Development</h6>
                          <p><span class="badge badge-default"> Flutter</span>
                          <span class="badge badge-success">Dio</span>
                          <span class="badge badge-warning">Provider</span>
                          <span class="badge badge-success">SQlite</span>
                          <span class="badge badge-primary">Firebase</span>
                        </li>
                      </ul>
                      <div class="text-center mt-4 mr-auto">
                        <a target="_blank" href="/assets/resume/Johnpaul_Tanion.pdf" rel="tooltip" title="Download my resume" class="btn btn-primary btn-round btn-lg">Download My Resume</a>
                      </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card" style="height: 300px;">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange">
                      <div class="col">
                        <h6>Achievements</h6>
                      </div>
                    </ul>
                  </div>
                  <div class="card-body">
                      <ul>
                        <li><h6> Participating in UnionBankHackathon 2018 At Makati city And Top 16 </h6></li> <br>
                        <li><h6> Participating in DICT YOUTHHACK MNL 2018 At Makati city </h6></li>
                      </ul>
                  </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card" style="height: 300px;">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange">
                      <div class="col">
                        <h6>Educational Background</h6>
                      </div>
                    </ul>
                  </div>
                  <div class="card-body">
                    <ul>
                          <li>
                            <h6>2018 - 2023</h6>
                            <h6>BS  Information Technology</h6>
                            <span>ICCT Colleges Inc. | Antipolo Campus</span>
                          </li>
                          <br>
                          <li>
                            <h6>2016 - 2018</h6>
                            <h6>ICT strand | Senior High</h6>
                            <span>STI Colleges Cainta | Main Campus</span>
                          </li>
                    </ul>
                  </div>
              </div>
            </div>


          </div>
        </div>
    </div>
    <div class="page-header section-contact clear-filter " filter-color="orange">
        <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>

            <div class="row m-3">
              <div class="col-xl-12">
                <h3 class="title">Want to work with me?</h3>
                <p class="description">Your project is very important to me.</p>
              </div>
              <div class="col-xl-5 mx-auto">
                <div class="card card-login card-plain">

                  <i  class="description loading-form now-ui-icons loader_refresh spin"></i>
                  <form  method="post" id="myForm" class="form">
                    @csrf
                      <div class="card-body">
                          <div class="input-group no-border input-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="now-ui-icons users_circle-08"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name..." required>
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
                            <input type="email" placeholder="You Email..." id="email" name="email" class="form-control" required/>
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

        <footer class="footer">
          <div class="container">
                <div class="text-center">
                            <a target="_blank" href="https://www.facebook.com/johnpaul.tanion.773" class="btn btn-primary btn-icon btn-facebook btn-round btn" rel="tooltip" title="Follow me on Facebook">
                                <i class="fab fa-facebook-square text-white "></i>
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/in/john-paul-tanion-b85a021b3/" class="btn btn-primary btn-icon btn-linkedin btn btn-round" rel="tooltip" title="Follow me">
                                <i class="fab fa-linkedin text-white "></i>
                            </a>
                            <a target="_blank" href="https://github.com/johnpaultanion001" class="btn btn-primary btn-icon btn-github btn-round btn" rel="tooltip" title="Follow me on Github">
                                <i class="fab fa-github text-white "></i>
                            </a>
                </div>
            <nav>
              <ul>
                <li>
                    <b> <i class="now-ui-icons location_pin text-primary"></i> Antipolo City , Rizal</b>
                </li>
                <li>
                    <b>    <i class="now-ui-icons tech_mobile text-primary"></i> 0977 666 88 20</b>
                </li>
                <li>
                    <b> <a href="mailto:johnpaultanion001@gmail.com" style="text-decoration: none; color: #fff;"><i class="now-ui-icons ui-1_email-85 text-primary"></i> Johnpaultanion001@gmail.com</b> </a>
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

    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up" id="title"></h4>
          </div>
          <div class="modal-body">
            <p id="detail" style="color: #111;">

            </p>

              <h5>Sample Images</h5>
              <div id="images_section" class="row">
                <div class="col-md-6 mt-2">
                  <img src="assets/img/projects/no-image.png" alt="Image" class="img-raised">
                </div>
                <div class="col-md-6 mt-2">
                  <img src="assets/img/projects/no-image.png" alt="Image" class="img-raised">
                </div>
                <div class="col-md-6 mt-2">
                  <img src="assets/img/projects/no-image.png" alt="Image" class="img-raised">
                </div>
                <div class="col-md-6 mt-2">
                  <img src="assets/img/projects/no-image.png" alt="Image" class="img-raised">
                </div>
              </div>
              <h5 class="mt-5">Sample Accounts</h5>
              <h6>For testing purposes, please use this account.</h6>
              <div id="credentials_section" class="row">
                <div class="col-md-6">
                  <div class="card bg-primary">
                    <div class="card-body text-white">
                      <b>ROLE: MANAGER</b> <br>
                      <b>UN: manager@manager.com</b> <br>
                      <b>PS: password</b>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card bg-info">
                    <div class="card-body text-white">
                      <b>ROLE: CASHIER</b> <br>
                      <b>UN: cashier@cashier.com</b> <br>
                      <b>PS: password</b>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <a id="btn_live_preview" href="" target="_blank" class="btn btn-primary text-uppercase font-weight-bold">Live Preview</a>
            <a id="btn_source_code" href="" target="_blank" class="btn btn-info text-uppercase font-weight-bold">Source Code</a>
          </div>
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
                    $('#action_button').val('Sending');
                    $('#action_button').attr('disabled', true);
                },
                success:function(data){
                    $('#action_button').val('Send Message');
                    $('#action_button').attr('disabled', false);
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

    $(document).on('click', '.project_detail', function(){
        $('#myModal').modal('show');
        var content = $(this).attr('content');
        var title;
        var detail;
        var images;
        var credentials;
        var live_preview;
        var source_code;

        if(content == 'pos'){
          title = "POS AND INVENTORY SYSTEM";
          detail = 'This project is a  <b class="text-uppercase"> POINT OF SALES AND INVENTORY SYSTEM </b> for a <b class="text-uppercase"> JEWEL & NICKEL STORE </b>. It was created using PHP (Laravel Framework), AJAX Request, Jquery, Bootstrap 5, HTML, and CSS.';
          images = new Array("assets/img/projects/p1-image1.png", "assets/img/projects/p1-image2.png", "assets/img/projects/p1-image3.png" , "assets/img/projects/p1.png");
          credentials =
                [
                    {
                        bg:'bg-primary',
                        role:'Manager',
                        un:'manager@manager.com',
                        ps:'password',
                    },
                    {
                        bg:'bg-info',
                        role:'Cashier',
                        un:'cashier@cashier.com',
                        ps:'password',
                    },
                ];
          live_preview = 'http://jewelandnickle.supsofttech.com/login';
          source_code  = 'https://github.com/johnpaultanion001/softdrinks-updated';
        }
        if(content == 'map'){
          title = "REMITTANCE SYSTEM";
          detail = 'This is a thesis project it is a <b class="text-uppercase"> remittance system </b> for a <b class="text-uppercase">JAPAN REMIT FINANCE CO.,LTD,</b> It was created using PHP(Laravel Framwork), AJAX Request , Jquery , Bootstrap 5, HTML , CSS';
          images = new Array("assets/img/projects/p2-image1.png", "assets/img/projects/p2-image2.png", "assets/img/projects/p2-image3.png" , "assets/img/projects/p2.png");
          credentials =
                [
                    {
                        bg:'bg-primary',
                        role:'Admin',
                        un:'admin@admin.com',
                        ps:'password',
                    },
                    {
                        bg:'bg-info',
                        role:'User',
                        un:'user@user.com',
                        ps:'password',
                    },
                ];
          live_preview = 'http://jrf-remittance-tracker-map.supsofttech.com/login';
          source_code  = 'https://github.com/johnpaultanion001/Japan-Remit-Finance-Co.-Ltd';
        }
        if(content == 'brgy'){
          title = "E-BARANGAY PORTAL";
          detail = 'This is a my thesis project it is a <b class="text-uppercase">  E- Barangay Portal </b> serves as an online gateway in serving residents seamlessly by providing a more accessible and hassle-free way of processing and requesting documents online. With E-Barangay Portal, you can easily create an account, make a document request, track and manage your requested document and contact our staff all made online through our portal. It was created using PHP(Laravel Framwork), AJAX Request , Jquery , Bootstrap 5, HTML , CSS';
          images = new Array("assets/img/projects/p3-image1.png", "assets/img/projects/p3-image2.png", "assets/img/projects/p3-image3.png" , "assets/img/projects/p3.png");
          credentials =
                [
                    {
                        bg:'bg-primary',
                        role:'Admin',
                        un:'admin@admin.com',
                        ps:'password',
                    },
                    {
                        bg:'bg-info',
                        role:'Resident',
                        un:'johnpaultanion001@gmail.com',
                        ps:'password',
                    },
                    {
                        bg:'bg-success',
                        role:'Staff',
                        un:'staff@staff.com',
                        ps:'password',
                    },
                ];
          live_preview = 'http://e-barangay.supsofttech.com/';
          source_code  = 'https://github.com/johnpaultanion001/capstone_v1';
        }
        if(content == 'attendance'){
          title = "ATTENDANCE PORTAL";
          detail = 'This is a my thesis project it is a <b class="text-uppercase">  Attendance Portal </b> serves as an online gateway to provide a record for attendance. With Attendance Portal, you can easily create an account, make a events, track and manage your attendance all made online through our portal. It was created using PHP(Laravel Framwork), AJAX Request , Jquery , Bootstrap 5, HTML , CSS';
          images = new Array("assets/img/projects/p4-image1.png", "assets/img/projects/p4-image2.png", "assets/img/projects/p4-image3.png" , "assets/img/projects/p4.png");
          credentials =
                [
                    {
                        bg:'bg-primary',
                        role:'Admin',
                        un:'admin@admin.com',
                        ps:'password',
                    },
                    {
                        bg:'bg-info',
                        role:'member',
                        un:'user@user.com',
                        ps:'password',
                    },
                ];
          live_preview = 'http://attendance.supsofttech.com/';
          source_code  = 'https://github.com/johnpaultanion001/capstone_v1';
        }

        $('#title').html(title);
        $('#detail').html(detail);
        var image = '';
        $.each(images, function(key,value){
            image += '<div class="col-md-6 mt-2">';
              image +=  '<img src="'+value+'" alt="Image" class="img-raised">';
            image +=  '</div>';
        });
        $('#images_section').empty().append(image);

        var credential = '';
        $.each(credentials, function(key,value){
          credential +=  '<div class="col-md-6 mx-auto">';
          credential +=     '<div class="card '+value.bg+'">'
          credential +=       '<div class="card-body text-white">'
          credential +=         '<b class="text-uppercase">ROLE: '+value.role+'</b> <br>'
          credential +=         '<b>UN: '+value.un+'</b> <br>'
          credential +=         '<b>PS: '+value.ps+'</b>'
          credential +=       '</div>'
          credential +=     '</div>'
          credential +=  '</div>'
        });
        $('#credentials_section').empty().append(credential);
        $('#btn_live_preview').attr('href',live_preview);
        $('#btn_source_code').attr('href',source_code);

    });
    </script>
</body>

</html>
