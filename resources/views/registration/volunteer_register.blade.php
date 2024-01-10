<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>

<head>
  <title>Basket Brigade / Valunteer Register</title>
  <style>
    body {
      background: #fff;
      height: 100vh;
      margin: 0;
    }

    .tab {
      display: none;
    }



    .formify-bg-cover {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
    }

    .container {
      max-width: 1260px;
      margin: 0 auto;
    }

    .col-12 {
      flex: 0 0 auto;
      width: 100%;
    }

    .formify-form__layout--v11 {
      gap: 40px;
    }

    .formify-form__layout {

      display: flex;
      overflow: hidden;
    }

    .formify-form__banner.formify-form__banner--v11 {
      align-items: start;
      justify-content: initial;
      padding-top: 140px !important;
    }

    .formify-form__banner {
      display: flex !important;
      flex-direction: column;
      justify-content: center;
      min-height: 100vh;
      align-items: center;
      padding: 100px;
    }


    .formify-form__banner--inner {
      display: flex;
      flex-direction: column;
      gap: 40px;
      max-width: 750px;
    }

    .formify-form__layout div {
      position: relative;
    }

    .formify-form__banner--title.formify-form__banner--title-v2 {
      font-size: 90px;
      font-weight: 700;
      line-height: 90px;
      text-shadow: 4px 4px 4px #000000ab;
    }

    .formify-form__banner--title {
      color: #fff;
      margin-bottom: 30px;
      font-size: 28px;
    }

    .formify-form__bdoner {
      display: flex;
      align-items: center;
      gap: 25px;
    }

    .img {
      height: auto;
      max-width: 100%;
    }

    .formify-form__bdoner-content {
      color: #fff;
    }

    .formify-form__layout--column {
      min-width: 50% !important;
      max-width: 50% !important;
    }

    .formify-form__area.formify-form__area--v11 {
      padding: 0;
      padding-top: 100px;
      justify-content: end;
      align-items: end;
    }

    .formify-form__area {
      display: flex;
      flex-direction: column;
      padding: 50px 150px;
      align-items: center;
    }

    .formify-form__inner--v11 {
      padding: 40px;
      border-radius: 4px;
      background: #FFF;
      box-shadow: 0px 4px 40px 0px rgba(0, 0, 0, 0.15);
      min-width: 520px;
    }

    .formify-form__inner {
      display: flex;
      flex-direction: column;
      gap: 40px;
      max-width: 500px;
    }

    .row {
      --bs-gutter-x: 1.5rem;
      --bs-gutter-y: 0;
      display: flex;
      flex-wrap: wrap;
      margin-top: calc(-1 * var(--bs-gutter-y));
      margin-right: calc(-.5 * var(--bs-gutter-x));
      margin-left: calc(-.5 * var(--bs-gutter-x));
    }

    .formify-forms__title {
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 1px solid #E5E5E5;
    }

    .formify-forms__title.formify-forms__title--small {
      font-size: 16px;
      font-weight: 600;
    }

    .formify-forms .form-group {
      position: relative;
    }

    .formify-mg-top-20 {
      margin-top: 20px !important;
    }

    .formify-forms__method {
      display: flex;
      gap: 30px;
    }

    .formify-forms__checkbox {
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
    }

    .formify-checkbox-v2[type="checkbox"] {
      border-radius: 100px !important;
      width: 20px !important;
      height: 20px !important;
    }

    .input[type="checkbox"] {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      outline: none;
      cursor: pointer;
      position: relative;
      padding: 0 !important;
      background: transparent !important;
      width: 15px;
      height: 15px;
      border: 1px solid red;
      border-radius: 3px;
      margin-right: 12px;
    }

    .formify-forms input {
      color: #4B5563 !important;
      display: flex;
      align-items: center;
      width: 35rem;
      height: 2rem;
      border-bottom: 1px solid #242424 !important;
      border-radius: 3px;
    }

    .checkbox {
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
    }

    h2.congrats-text {
      font-size: 17px;
      font-weight: 500;
      line-height: 1.4;
      margin: 20px 0px 25px 0px;
    }

    h2.congrats-ftr-text {
      font-size: 16px;
      font-weight: 400;
      line-height: 1.4;
      margin: 30px 0px;
    }

    h3.age-ver {
      font-size: 17px;
      font-weight: 400;
      padding: 5px;
      margin: 10px 0px 20px 0px;
    }

    h3.registered-alert {
      font-size: 17px;
      font-weight: 400;
      padding: 5px;
      margin: 10px 0px 40px 0px;
    }

    input.plchldr {
      width: 30rem;
      padding: 10px 0px 10px 20px;
      height: 20px;
    }

    h4.plchldr-name {
      font-size: 17px;
      font-weight: 600;
    }

    p.formify-form__banner--text.formify-form__banner--text-v2 {
      font-size: 32px;
      font-weight: 600;
      color: #fff;
      text-shadow: 3px 3px 5px #0000007d;
      background-color: #f23d3d;
      /*        height: 43px;*/
      padding: 4px 0px 3px 25px;
      width: 425px;
      border-radius: 4px;
    }

    .form-checkbox {
      display: flex;
    }

    .formify-btn {
      background-color: #f23d3d;
      padding: 10px 40px 10px 40px;
      border: none;
      border-radius: 4px;
      box-shadow: 2px 2px 8px #00000052;
    }

    a.clear-form {
      text-decoration: none;
      color: #ff2d2d;
      float: right;
      font-size: 15px;
    }

    .formify-forms__button {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    input#form {
      margin-right: 8px;
    }

    label.m-0 {
      font-size: 14px;
    }

    .col-md-8.col-lg-6 {
      flex: 0 0 auto;
      width: 560px;
      background-color: #fff;
      padding: 40px 20px 40px 20px;
      height: 740px;
      border-radius: 4px;
      margin-top: 6rem;
    }

    .formify-form__layout {
      display: flex;
      overflow: hidden;
      align-content: center;
      justify-content: center;
      align-items: center;
      width: 1350px;
      margin: auto;
    }

    .form-control {
      padding: 0.6rem 0.75rem !important;
    }

    h3.top-tag {
      font-size: 16px;
      font-weight: 500;
      margin: 25px 0px 20px 0px;
    }

    .vnumgf {
      color: rgb(217, 48, 37);
      padding-left: 0.25em;
    }

    h3.Driving {
      font-size: 16px;
      font-weight: 500;
    }

    h2.Driving-text {
      font-size: 15px;
      font-weight: 400;
      line-height: 1.2;
    }

    h4.your-dtl {
      font-size: 16px;
      font-weight: 500;
    }

    span.bold-text {
      font-weight: 500;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      color: #fff;
      background-color: #f23d3d !important;
    }

    .btn-primary {
      color: #fff;
      background-color: #f23d3d !important;
      border-color: #f23d3d !important;
    }
  </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>



<body>
  <div class="body-bg formify-donate-layout1">
    <section class="formify-form formify-bg-cover" style="background-image:url('./assets_oldcode/img/background-2.jpg');">
      <div class="formify-form__layout formify-form__layout--v11 formify-bg-none">
        <div class="formify-form__banner--content">
          <h2 formify-form__banner--title formify-form__banner--title-v2">
            <p class="formify-form__banner--text formify-form__banner--text-v2">ABLY Volunteer Sign Up</p>
          </h2>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
              <form action="" method="post" id="form1">

                <!-- Email ~ -->
                <div class="tab">
                  <div class="mb-3">
                    <h2 class="congrats-text"> CONGRATULATIONS onjoining the ABLY Team.</h2>
                    <span>Please use this form to sign up to join us for Basket Brigade UK on Saturday 23rd December 2023.<br /></span>
                    <span>Please complete one form per adult (16 and over).<br /></span>
                    <span>We will not be able to allow entry to anyone on the day who has not registered and / or who is unaccompanied by an adult.<br /></span>
                  </div>
                  <div class="mb-3">
                    <label for="inputEmail">Email<span class="vnumgf">*</span></label>
                    <input class="form-control" type="email" id="inputEmail" name="email" placeholder="Email address" required>
                  </div>
                  <div class="mb-3">
                    <span>The venue for this year is Woodside High School (<a href="#">N22 5QJ</a>). Before you begin signing up, please confirm that you are able to attend at this venue on 23rd December.</span>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="checkbox1" required>
                      <label class="form-check-label" for="checkbox1">I can attend Woodside High School, N22 5QJ on Saturday 23rd December from</label>
                    </div>
                  </div>
                </div>
                <!-- ~ Email -->

                <!-- Your details ~ -->
                <div class="tab">
                  <h4 class="your-dtl">Your details</h4>
                  <div class="mb-3">
                    <label for="field4">First name<span class="vnumgf" id="i8" aria-label="Required question">*</span></label>
                    <input type="text" name="first_name" class="form-control" id="field4" placeholder="First name" required>
                  </div>
                  <div class="mb-3">
                    <label for="field5">Surname<span class="vnumgf" id="i8" aria-label="Required question">*</span></label>
                    <input type="text" name="surename" class="form-control" id="field5" placeholder="Last name" required>
                  </div>
                  <div class="mb-3">
                    <label for="field5">Mobile Phone number<span class="vnumgf" id="i8" aria-label="Required question">*</span></label>
                    <input type="tel" name="mobile" class="form-control" id="field5" placeholder="Mobile number" required>
                  </div>
                  <h3 class="top-tag">Would you like to join the Basket Brigade UK mailing list?<span class="vnumgf" id="i8" aria-label="Required question">*</span></h3>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="radio11" required>
                    <label class="form-check-label" for="radio11">
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="radio12" required>
                    <label class="form-check-label" for="radio12">
                      No
                    </label>
                  </div>
                  <h3 class="top-tag">Do you agree with our terms and conditions and accept the Basket Brigade UK Disclaimer?<span class="vnumgf" id="i8" aria-label="Required question"> *</span></h3>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkbox2" required>
                    <label class="form-check-label" for="checkbox2">I can attend Woodside High School, N22 5QJ on Saturday 23rd December from</label>
                  </div>
                </div>
                <!-- ~ Your details -->

                <div class="tab">
                  <div class="mb-3">
                    <h3 class="Driving">Under 16s</h3>
                    <h3 class="top-tag">
                      Would you like to bring any under 16s with you on the day?
                      <span class="vnumgf" id="i8" aria-label="Required question">*</span>
                    </h3>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="radio21" required>
                      <label class="form-check-label" for="radio21">
                        Yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="radio22" required>
                      <label class="form-check-label" for="radio22">
                        No
                      </label>
                    </div>
                  </div>
                </div>

                <!-- Child 1 - details ~ -->
                <div class="tab">
                  <div class="mb-3">
                    <h3 class="Driving">Child 1 - details</h3>
                    <h3 class="top-tag">
                      Please register your child (under 16s).<br />
                      People under 16s will need to be accompanied on the day by an adult.
                    </h3>
                  </div>
                  <div class="mb-3">
                    <label for="field4">Child 1 - Full Name<span class="vnumgf" id="i8" aria-label="Required question"> *</span></label>
                    <input type="text" name="first_name1" class="form-control" id="field4" placeholder="Full name" required>
                  </div>
                  <div class="mb-3">
                    <label for="field4">Child 1 - Date of Birth <span class="vnumgf" id="i8" aria-label="Required question"> *</span></label>
                    <input type="date" name="first_name2" class="form-control" id="field4" placeholder="Full name" required>
                  </div>
                  <h3 class="top-tag">Would you like to bring a second child? <span class="vnumgf" id="i8" aria-label="Required question"> *</span></h3>
                  <div class="check-box-area">
                    <div class="form-checkbox">
                      <input type="radio" id="form" name="check-box" value="form">
                      <label class="yes1" for="checkbox">Yes</a></label>
                    </div>
                  </div>
                  <div class="check-box-area">
                    <div class="form-checkbox">
                      <input type="radio" id="form" name="check-box" value="form">
                      <label class="no1" for="checkbox">No</a></label>
                    </div>
                  </div>
                </div>
                <!-- ~ Child 1 - details -->

                <!-- Child 2 - details ~ -->

                <div class="tab" id="step3b">
                  <div class="mb-3">
                    <h3 class="Driving">Child 2 - details</h3>
                    <h3 class="top-tag">
                      Please register your 2nd child (under 16s).<br />
                      People under 16 will need to be accompanied on the day by an adult.
                    </h3>
                  </div>
                  <div class="mb-3">
                    <label for="field4">Child 2 - Full Name<span class="vnumgf" id="i8" aria-label="Required question"> *</span></label>
                    <input type="text" name="first_name3" class="form-control" id="field4" placeholder="Full name" required>
                  </div>
                  <div class="mb-3">
                    <label for="field4">Child 2 - Date of Birth<span class="vnumgf" id="i8" aria-label="Required question"> *</span></label>
                    <input type="date" name="first_name4" class="form-control" id="field4" placeholder="Full name" required>
                  </div>
                </div>
                <!-- ~ Child 2 - details -->

                <!-- Driving ~ -->
                <div class="tab">
                  <div class="mb-3">
                    <h3 class="Driving">Driving</h3>
                    <h3 class="top-tag">This means you're the actual driver (if you're a passenger in a car, select no). This also includes drivers that are not delivering as well as those delivering, so that we have an idea on required car parking. We can only guarantee parking for those drivers willing to deliver baskets.</h3>
                  </div>
                  <h3 class="top-tag"> Will you be driving to the event? <span class="vnumgf" id="i8" aria-label="Required question"> *</span></h3>
                  <div class="check-box-area">
                    <div class="form-checkbox">
                      <input type="radio" id="form" name="is_driving" value="1">
                      <label class="yes1" for="checkbox"> Yes - I will be behind the wheel </a></label>
                    </div>
                  </div>
                  <div class="check-box-area">
                    <div class="form-checkbox">
                      <input type="radio" id="form" name="is_driving" value="0">
                      <label class="no1" for="checkbox"> No - I will not be driving (please select this option if you will be a passenger in a car) </a></label>
                    </div>
                  </div>
                </div>
                <!-- ~ Driving -->

                <!-- Vehicle Details ~ -->
                <div class="tab">
                  <div class="mb-3">
                    <h3 class="Driving">Vehicle Details</h3>
                    <h3 class="Driving">What is the registration of the car you will be driving to the event?<span class="vnumgf" id="i8" aria-label="Required question"> *</span></h3>
                    <label for="field5"></label>
                    <input type="text" name="car_registration" class="form-control" id="field5"><br>
                    <h3 class="Driving">Is your vehicle ULEZ-compliant?<span class="vnumgf" id="i8" aria-label="Required question"> *</span><br>
                      You can check your vehicle here: <a href="https://tfl.gov.uk/modes/driving/check-your-vehicle/" target="_blank">https://tfl.gov.uk/modes/driving/check-your-vehicle/</a>
                    </h3>
                    <div class="check-box-area">
                      <div class="form-checkbox">
                        <input type="radio" id="form" name="is_ULEZ" value="1">
                        <label class="yes1" for="checkbox"> Yes </a></label>
                      </div>
                    </div>
                    <div class="check-box-area">
                      <div class="form-checkbox">
                        <input type="radio" id="form" name="is_ULEZ" value="0">
                        <label class="no1" for="checkbox"> No </a></label>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <h3 class="Driving">Would you like to deliver baskets on the day (Reindeer's)?<span class="vnumgf" id="i8" aria-label="Required question"> *</span></h3>
                    <div class="check-box-area">
                      <div class="form-checkbox">
                        <input type="radio" id="form" name="is_delivering_basket" value="1">
                        <label class="yes1" for="checkbox"> Yes I'm a Reindeer </a></label>
                      </div>
                    </div>
                    <div class="check-box-area">
                      <div class="form-checkbox">
                        <input type="radio" id="form" name="is_delivering_basket" value="0">
                        <label class="no1" for="checkbox"> No (I'm an Elf) </a></label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ~ Vehicle Details -->

                <!-- Deliveries ~ -->
                <div class="tab">
                  <div class="mb-3">
                    <h3 class="Driving">Deliveries</h3>
                    <h3 class="Driving">We are ALWAYS short of deliver drivers and so we would really encourage people to offer to do a delivery. Drivers willing to deliver will be released early, starting from 1pm for WAVE 1 until 3pm for WAVE 4. We ask that you are as flexible as possible with where you can deliver. Delivering the baskets can be a beautiful and humbling experience. We need delivering drivers to be checked in by 10am at the latest.</h3>

                    <h3 class="Driving">Have you delivered for Basket Brigade before?
                      <span class="vnumgf" id="i8" aria-label="Required question"> *</span>
                    </h3>

                    <div class="check-box-area">
                      <div class="form-checkbox">
                        <input type="radio" id="form" name="have_delivered" value="1">
                        <label class="yes1" for="checkbox"> Yes </a></label>
                      </div>
                    </div>

                    <div class="check-box-area">
                      <div class="form-checkbox">
                        <input type="radio" id="form" name="have_delivered" value="0">
                        <label class="no1" for="checkbox"> No </a></label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ~ Deliveries -->

                <!-- Delivery locations ~ -->


                <div class="tab">
                  <div class="mb-3">
                    <h3 class="Driving">Delivery locations</h3>
                    <h3 class="Driving">Please indicate the three boroughs you would like to deliver to.
                      We will try our best to allocate baskets based on preferences but this is not always possible.</h3>
                    <h3 class="Driving">The list now shows those Boroughs that we still need drivers for. Sorry if the Borough you'd like is not on the list, it means we don't have any remaining nominations for that Borough.</h3>
                    <h3 class="Driving">IF NO Boroughs are selected then we'll assume you're happy to deliver to any borough.
                    </h3>

                    <h3 class="Driving">How many baskets would you like to deliver?
                      (A standard boot can take 4 - 6 without stacking)

                      <span class="vnumgf" id="i8" aria-label="Required question"> *</span>
                    </h3>
                    <div class="container p-2">
                      <div class="row">
                        <fieldset id="group2" class="d-flex">
                          <div class="col-md-1">
                            <input type="radio" value="value1" name="group2">1
                          </div>
                          <div class="col-md-1">
                            <input type="radio" value="value2" name="group2">2
                          </div>
                          <div class="col-md-1">
                            <input type="radio" value="value3" name="group2">3
                          </div>
                          <div class="col-md-1">
                            <input type="radio" value="value4" name="group2">4
                          </div>
                          <div class="col-md-1">
                            <input type="radio" value="value5" name="group2">5
                          </div>
                          <div class="col-md-1">
                            <input type="radio" value="value6" name="group2">6
                          </div>
                          <div class="col-md-1">
                            <input type="radio" value="value7" name="group2">7
                          </div>
                          <div class="col-md-1">
                            <input type="radio" value="value8" name="group2">8
                          </div>
                          <div class="col-md-1">
                            <input type="radio" value="value9" name="group2">9
                          </div>
                          <div class="col-md-1">
                            <input type="radio" value="value10" name="group2">10
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <h3 class="Driving">If needed, would you be able to take a few more?
                      <span class="vnumgf" id="i8" aria-label="Required question"> *</span>
                    </h3>

                    <div class="check-box-area">
                      <div class="form-checkbox">
                        <input type="radio" id="form" name="more" value="form">
                        <label class="yes1" for="checkbox"> Yes </a></label>
                      </div>
                    </div>

                    <div class="check-box-area">
                      <div class="form-checkbox">
                        <input type="radio" id="form" name="more" value="form">
                        <label class="no1" for="checkbox"> No </a></label>
                      </div>
                    </div>
                    <h3 class="Driving">The Delivery Map</h3>
                    <h3 class="Driving">Showing where we most need delivery drivers
                      The Numbers (1- 4) represent the WAVE, those delivering in Wave 1 will be released first, then 2, 3 and finally 4. </h3>
                    <span>
                      Please select your FIRST choice preference for delivery location
                      <span class="vnumgf" id="i8" aria-label="Required question"> *</span>
                    </span>
                    <select id="selectbox1">
                      <option value="">Select an option&hellip;</option>
                      <option value="Any borough - I don't mind!">Any borough - I don't mind!</option>
                      <option value="Barking and Dagenham">Barking and Dagenham</option>
                      <option value="barney">Barney</option>
                      <option value="Bexley">Bexley</option>
                      <option value="Brent">Brent</option>
                      <option value="Bromley">Bromley</option>
                      <option value="barney">Barney</option>
                      <option value="Bexley">Bexley</option>
                      <option value="Camden">Camden</option>
                      <option value="City of London">City of London</option>
                      <option value="Croydon">Croydon</option>
                      <option value="Ealing">Ealing</option>
                      <option value="Enfield">Enfield</option>
                      <option value="Greenwich">Greenwich</option>
                      <option value="Hackney">Hackney</option>
                      <option value="Hammersmith and Fulham">Hammersmith and Fulham</option>
                      <option value="Haringey">Haringey</option>
                      <option value="Harrow">Harrow</option>
                      <option value="Hillingdon">Hillingdon</option>
                      <option value="Havering">Havering</option>
                      <option value="Hownslow">Hownslow</option>
                      <option value="Islington">Islington</option>
                      <option value="Kingston and Chelsea">Kingston and Chelsea</option>
                      <option value="Kingston upon Thames">Kingston upon Thames</option>
                      <option value="Lambeth">Lambeth</option>
                      <option value="Lewisham">Lewisham</option>
                      <option value="Merton">Merton</option>
                      <option value="Newham">Newham</option>
                      <option value="Redbridge">Redbridge</option>
                      <option value="Richmond Upon Thames">Richmond Upon Thames</option>
                      <option value="southwark">southwark</option>
                      <option value="Tower Hamlets">Tower Hamlets</option>
                      <option value="Waltham Forest">Waltham Forest</option>
                      <option value="Wandsworth">Wandsworth</option>
                      <option value="City of Westminster">City of Westminster</option>
                    </select>
                    <div>
                      Please select your SECOND choice preference for delivery location
                      <span class="vnumgf" id="i8" aria-label="Required question">*</span>
                    </div>
                    <select id="selectbox2">
                      <option value="">Select an option&hellip;</option>
                      <option value="Any borough - I don't mind!">Any borough - I don't mind!</option>
                      <option value="Barking and Dagenham">Barking and Dagenham</option>
                      <option value="barney">Barney</option>
                      <option value="Bexley">Bexley</option>
                      <option value="Brent">Brent</option>
                      <option value="Bromley">Bromley</option>
                      <option value="barney">Barney</option>
                      <option value="Bexley">Bexley</option>
                      <option value="Camden">Camden</option>
                      <option value="City of London">City of London</option>
                      <option value="Croydon">Croydon</option>
                      <option value="Ealing">Ealing</option>
                      <option value="Enfield">Enfield</option>
                      <option value="Greenwich">Greenwich</option>
                      <option value="Hackney">Hackney</option>
                      <option value="Hammersmith and Fulham">Hammersmith and Fulham</option>
                      <option value="Haringey">Haringey</option>
                      <option value="Harrow">Harrow</option>
                      <option value="Hillingdon">Hillingdon</option>
                      <option value="Havering">Havering</option>
                      <option value="Hownslow">Hownslow</option>
                      <option value="Islington">Islington</option>
                      <option value="Kingston and Chelsea">Kingston and Chelsea</option>
                      <option value="Kingston upon Thames">Kingston upon Thames</option>
                      <option value="Lambeth">Lambeth</option>
                      <option value="Lewisham">Lewisham</option>
                      <option value="Merton">Merton</option>
                      <option value="Newham">Newham</option>
                      <option value="Redbridge">Redbridge</option>
                      <option value="Richmond Upon Thames">Richmond Upon Thames</option>
                      <option value="southwark">southwark</option>
                      <option value="Tower Hamlets">Tower Hamlets</option>
                      <option value="Waltham Forest">Waltham Forest</option>
                      <option value="Wandsworth">Wandsworth</option>
                      <option value="City of Westminster">City of Westminster</option>
                    </select>
                    <div>Please select your THIRD choice preference for delivery location
                      <span class="vnumgf" id="i8" aria-label="Required question"> *</span>
                    </div>
                    <select id="selectbox3">
                      <option value="">Select an option&hellip;</option>
                      <option value="Any borough - I don't mind!">Any borough - I don't mind!</option>
                      <option value="Barking and Dagenham">Barking and Dagenham</option>
                      <option value="barney">Barney</option>
                      <option value="Bexley">Bexley</option>
                      <option value="Brent">Brent</option>
                      <option value="Bromley">Bromley</option>
                      <option value="barney">Barney</option>
                      <option value="Bexley">Bexley</option>
                      <option value="Camden">Camden</option>
                      <option value="City of London">City of London</option>
                      <option value="Croydon">Croydon</option>
                      <option value="Ealing">Ealing</option>
                      <option value="Enfield">Enfield</option>
                      <option value="Greenwich">Greenwich</option>
                      <option value="Hackney">Hackney</option>
                      <option value="Hammersmith and Fulham">Hammersmith and Fulham</option>
                      <option value="Haringey">Haringey</option>
                      <option value="Harrow">Harrow</option>
                      <option value="Hillingdon">Hillingdon</option>
                      <option value="Havering">Havering</option>
                      <option value="Hownslow">Hownslow</option>
                      <option value="Islington">Islington</option>
                      <option value="Kingston and Chelsea">Kingston and Chelsea</option>
                      <option value="Kingston upon Thames">Kingston upon Thames</option>
                      <option value="Lambeth">Lambeth</option>
                      <option value="Lewisham">Lewisham</option>
                      <option value="Merton">Merton</option>
                      <option value="Newham">Newham</option>
                      <option value="Redbridge">Redbridge</option>
                      <option value="Richmond Upon Thames">Richmond Upon Thames</option>
                      <option value="southwark">southwark</option>
                      <option value="Tower Hamlets">Tower Hamlets</option>
                      <option value="Waltham Forest">Waltham Forest</option>
                      <option value="Wandsworth">Wandsworth</option>
                      <option value="City of Westminster">City of Westminster</option>
                    </select>
                  </div>

                </div>
                <!-- ~ Delivery locations -->

                <!-- Basket Brigade UK Donations ~ -->
                <div class="tab">
                  <div class="mb-3">
                    <h3 class="Driving">Basket Brigade UK Donations</h3>
                    <h2 class="Driving-text"> To participate in Basket Brigade UK, we ask that you make a small donation.
                      Please enter an amount below, minimum is £10.
                      It cost just £15 to provide a basket to feed 4 people with a special meal this Christmas.</h2>
                  </div>

                  <h3 class="Driving">Please enter an amount (10GBP min) - £ <span class="vnumgf" id="i8" aria-label="Required question"> *</span></h3>
                  <label for="field5"></label>
                  <input type="number" name="field5" min="10" class="form-control" id="field5" placeholder="Enter an amount" required><br>

                  <div class="mb-3">

                    <h3 class="Driving">Gift Aid<br>
                      Boost your donation by 25p of Gift Aid for every £1 you donate</h3><br>
                    <h3 class="Driving">Would you like to Gift Aid your donation? <span class="vnumgf" id="i8" aria-label="Required question"> *</span></h3>
                    <label for="field5"></label>

                    <div class="check-box-area">
                      <div class="form-checkbox">
                        <input type="radio" id="form" name="donation" value="form">
                        <label class="yes1" for="checkbox"> Yes </a></label>
                      </div>
                    </div>

                    <div class="check-box-area">
                      <div class="form-checkbox">
                        <input type="radio" id="form" name="donation" value="form">
                        <label class="no1" for="checkbox"> No </a></label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ~ Basket Brigade UK Donations -->

                <!-- Gift Aid ~ -->
                <div class="tab">
                  <div class="mb-3">
                    <h3 class="Driving">Gift Aid</h3>
                    <h2 class="Driving-text"> Gift Aid is reclaimed by the charity from the tax you pay for the current tax year. Your address is needed to identify you as a current UK taxpayer.</h2>
                  </div>

                  <h3 class="Driving">Home Address <span class="vnumgf" id="i8" aria-label="Required question"> *</span></h3>
                  <label for="field5"></label>
                  <input type="text" name="home_add" class="form-control" id="field5" placeholder="Home address" required><br>

                  <h3 class="Driving">Postcode <span class="vnumgf" id="i8" aria-label="Required question"> *</span></h3>
                  <label for="field5"></label>
                  <input type="text" name="post_code" class="form-control" id="field5" placeholder="Postcode" required>

                </div>
                <!-- ~ Gift Aid -->

                <div class="mb-3">
                  <div class="row justify-content-between">
                    <div class="col-auto">
                      <button class="btn btn-secondary" type="button" id="buttonBack">Back</button>
                    </div>
                    <div class="col-auto">
                      <button class="btn btn-primary" type="button" id="buttonNext">Next</button>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              </form>
            </div>
            <!--
          <nav>
            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
              <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">Step 1</a>
              <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#step2">Step 2</a>
              <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step3">Step 3</a>
              <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step4">Step 4</a>
              <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step3b">Step 3b</a>
              <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step3c">Step 3c</a>
              <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step4">Step 4</a>
               <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step4a">Step 4a</a>
                <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step4b">Step 4b</a>
                 <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step4c">Step 4c</a>
              <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step5">Step 5</a>
              <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step6">Step 6</a>

            </div>
          </nav>
        -->
          </div>
        </div>
      </div>
    </section>
  </div>


  <!-- ---------------------------------new code---------------------------------------------- -->




  <!-- JavaScript and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <!-- JavaScript for validations only -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <!-- Our script! :) -->
  <script src="../assets/js/enchanter.js"></script>
  <script type="text/javascript">
    var buttonBack = $("#buttonBack");
    var buttonNext = $("#buttonNext");
    var form = $("#form1");
    var tabs = document.getElementsByClassName("tab");

    var currentTab = 0;
    showTab(currentTab);

    function showTab(index) {
      tabs[index].style.display = "block";

      if (index === 0) {
        buttonBack.css('display', 'none');
      } else {
        buttonBack.css('display', 'inline');
      }

      if (index === (tabs.length - 1)) {
        buttonNext.html("Submit");
      } else {
        buttonNext.html("Next");
      }
    }

    function moveTab(offset) {
      if (offset > 0 && !isFormValid()) {
        return;
      }

      if (currentTab === (tabs.length - 1)) {
        form.submit();
        return;
      }

      tabs[currentTab].style.display = "none";
      currentTab += offset;

      showTab(currentTab);
    }

    function isFormValid() {
      var result = true;
      var inputs = tabs[currentTab].getElementsByTagName('input');
      Array.from(inputs).forEach(input => {
        if (input.validity.valid === false) {
          input.className += " is-invalid";
          result = false;
        }
      });
      return result;
    }

    buttonBack.on('click', e => {
      moveTab(-1);
    });

    buttonNext.on('click', e => {
      moveTab(1);
    });

    //form.on('submit', 

    /*$('#registration').on('submit', e => {
      e.preventDefault();
    })

    var registrationForm = $('#registration');
    var formValidate = registrationForm.validate({
      errorClass: 'is-invalid',
      errorPlacement: () => false
    });

    const wizard = new Enchanter('registration', {}, {
      onNext: () => {
        if (!registrationForm.valid()) {
          formValidate.focusInvalid();
          return false;
        }
      }
    });*/
  </script>

</body>

</html>