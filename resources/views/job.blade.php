<!doctype html>
<html lang="en">
  
<!-- Mirrored from uigaint.com/demo/html/anfra_2/job-2/job-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jan 2022 23:48:12 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SICS 2.1</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- External Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />

    <!-- Custom Css --> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/job-2.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="../images/favicon.png">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/icon-114x114.png">
  </head>
  <body>
    <div class="ugf-wraper">
      <div class="ugf-nav-wrap">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-sm-8">
              <div class="ugf-nav">
                <div class="logo-wrap">
                  <img src="images/logo.png" class="logo" alt="">
                  <img src="images/logo-half.png" class="logo-half" alt="">
                </div>
                <div class="job-wrap">
                  <h3>Each one aid one Jamb ID system</h3>
                  <ul>
                    <li><img src="images/map-marker.png" alt="">FCT Abuja </li>
                    <li><img src="images/clock.png" alt="">ipyramidtech</li>
                  </ul>
                </div>
                {{-- <p class="salary">Salary Range: <strong>$(500 - 1500)</strong></p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-7 col-sm-8">
            <div class="ufg-job-application-wrapper">
              <form action="https://uigaint.com/demo/html/anfra_2/job-2/job-2-complete.html" class="job-application-form">
                <div class="input-type-block">
                  <h4>Personal information</h4>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="input-label" for="fName"><span>*</span>First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Jhon">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="input-label" for="lName"><span>*</span>Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname"  placeholder="Smith">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="input-label" for="inputMail"><span>*</span>Email Address</label>
                    <input type="email" class="form-control" id="mail" name="mail" placeholder="example@domain.com">
                  </div>
                  <div class="form-group">
                    <label class="input-label" for="inputPhone"><span>*</span>Phone Number</label>
                    <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="+91 123 456 789">
                  </div>
                  <div class="form-group">
                    <label class="input-label" for="inputMail"><span>*</span>state</label>
                    <select class="form-control" onchange="toggleLGA(this);" id="state" name="state" >
                      <option value="" selected="selected">Select State</option>
                      <option value="Abia">Abia</option>
                      <option value="Adamawa">Adamawa</option>
                      <option value="AkwaIbom">AkwaIbom</option>
                      <option value="Anambra">Anambra</option>
                      <option value="Bauchi">Bauchi</option>
                      <option value="Bayelsa">Bayelsa</option>
                      <option value="Benue">Benue</option>
                      <option value="Borno">Borno</option>
                      <option value="Cross River">Cross River</option>
                      <option value="Delta">Delta</option>
                      <option value="Ebonyi">Ebonyi</option>
                      <option value="Edo">Edo</option>
                      <option value="Ekiti">Ekiti</option>
                      <option value="Enugu">Enugu</option>
                      <option value="FCT">FCT</option>
                      <option value="Gombe">Gombe</option>
                      <option value="Imo">Imo</option>
                      <option value="Jigawa">Jigawa</option>
                      <option value="Kaduna">Kaduna</option>
                      <option value="Kano">Kano</option>
                      <option value="Katsina">Katsina</option>
                      <option value="Kebbi">Kebbi</option>
                      <option value="Kogi">Kogi</option>
                      <option value="Kwara">Kwara</option>
                      <option value="Lagos">Lagos</option>
                      <option value="Nasarawa">Nasarawa</option>
                      <option value="Niger">Niger</option>
                      <option value="Ogun">Ogun</option>
                      <option value="Ondo">Ondo</option>
                      <option value="Osun">Osun</option>
                      <option value="Oyo">Oyo</option>
                      <option value="Plateau">Plateau</option>
                      <option value="Rivers">Rivers</option>
                      <option value="Sokoto">Sokoto</option>
                      <option value="Taraba">Taraba</option>
                      <option value="Yobe">Yobe</option>
                      <option value="Zamfara">Zamafara</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="input-label" for="inputMail"><span>*</span>Local government</label>
                    <select class="form-control select-lga" name="lga" id="lga" >
                      <option value="">select</option>
                    </select>
                  </div>
                  <div class="form-group check-gender">
                    <span class="lebel-text"><span>*</span>Select Gender</span>
                    <div class="custom-radio">
                      <input type="radio" name="gender" value="male" class="custom-control-input" id="male">
                      <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-radio">
                      <input type="radio" name="gender" class="custom-control-input" value="female" id="female">
                      <label class="custom-control-label" for="female">Female</label>
                    </div>
                  </div>
                </div>
                <div class="input-type-block">
                  <div class="form-group">
                    <div class="custom-file">
                      <p class="input-label"><span>*</span> Upload Resume <span class="text">( File accepted: jpg,png - Max size : 5mb )</span></p>
                      <input type="file" class="custom-file-input form-control" name="userprofile" id="userprofile">
                      <label class="custom-file-label" for="validatedCustomFile"><span class="file-return">No file choosen</span></label>
                    </div>
                  </div>  
                  <div class="form-group">
                    <div class="custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="terms">
                      <label class="custom-control-label" for="terms">I accept the <a href="#">Term of Conditions</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                  </div>
                </div>
                <button class="btn">Submit Application</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lga.min.js') }}"></script>


    <script src="{{ asset('js/custom.js') }}"></script>
  </body>

<!-- Mirrored from uigaint.com/demo/html/anfra_2/job-2/job-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jan 2022 23:48:18 GMT -->
</html>
