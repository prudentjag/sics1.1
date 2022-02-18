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
                    <li><img src="images/clock.png" alt=""><a href="/ids">Cards</a> </li>
                    <li class="viewsort"><img src="images/clock.png" alt="">sort cards</li>
                    <li>
                      <form action="/sort" method="post" class="sortclass">
                        @csrf
                        <div class="form-group">
                          <select class="form-control" name="date" id="date" >
                            <option value="">select</option>
                            @foreach ($date as $dates)
                              <option value="{{ $dates->dateofissue }}">{{ $dates->dateofissue }}</option>
                            @endforeach
                          </select>
                      </div>
                      <button type="submit" class="btn">fetch</button>
                      </form>
                    </li>
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
              <form action="" class="job-application-form" id="idform" enctype='multipart/form-data'>
                @csrf
                <div class="input-type-block">
                  <h4>Personal information</h4>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="input-label" for="fName"><span>*</span>First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Jhon">
                        <span class="text-danger error-text fname_error" >
                            <strong></strong>
                        </span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="input-label" for="lName"><span>*</span>Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname"  placeholder="Smith">
                        <span class="text-danger error-text lname_error" >
                            <strong></strong>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="input-label" for="inputMail"><span>*</span>Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com">
                    <span class="text-danger error-text email_error" >
                        <strong></strong>
                    </span>
                  </div>
                  <div class="form-group">
                    <label class="input-label" for="inputPhone"><span>*</span>Phone Number</label>
                    <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="+91 123 456 789">
                    <span class="text-danger error-text inputPhone_error" >
                        <strong></strong>
                    </span>
                  </div>
                  <div class="form-group">
                    <label class="input-label" for="inputPhone"><span>*</span>Date of issue</label>
                    <input type="date" class="form-control" id="dateofissue" name="dateofissue" >
                    <span class="text-danger error-text inputPhone_error" >
                        <strong></strong>
                    </span>
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
                    <span class="text-danger error-text state_error" >
                        <strong></strong>
                    </span>
                  </div>
                  
                  <div class="form-group">
                    <label class="input-label" for="inputMail"><span>*</span>Local government</label>
                    <select class="form-control select-lga" name="lga" id="lga" >
                      <option value="">select</option>
                    </select>
                    <span class="text-danger error-text lga_error" >
                        <strong></strong>
                    </span>
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
                      <p class="input-label"><span>*</span> Upload Resume <span class="text">( File accepted: pdf. doc/ docx - Max size : 150kb )</span></p>
                      <input type="file" class="custom-file-input form-control" id="validatedCustomFile"  name="userprofile">
                      <label class="custom-file-label" for="validatedCustomFile"><span class="file-return">No file choosen</span></label>
                      <span class="text-danger error-text userprofile_error" >
                        <strong></strong>
                    </span>
                    </div>
                  </div>  
                  <div class="form-group">
                    <div class="custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="terms">
                      <label class="custom-control-label" for="terms">I accept the <a href="#">Term of Conditions</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn">Submit Application</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquerys.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lga.min.js') }}"></script>


    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      $("#idform").on("submit", function (event) {
      event.preventDefault();
      $.ajax({
          url: "/create",
          method: "POST",
          data: new FormData(this),
          dataType: "JSON",
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              if (data.code === 1) {
                  Swal.fire("Good job!", data.msg, "success");
              } else {
                $.each(data.error, function (prefix,val) {
                        $("span"+prefix+ "_error").text(val[0])
                    });
                  Swal.fire({
                      icon: "error",
                      title: "Oops...",
                      text: data.msg,
                  });
              }
          },
      });
  });
    </script>
  </body>

<!-- Mirrored from uigaint.com/demo/html/anfra_2/job-2/job-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jan 2022 23:48:18 GMT -->
</html>
