<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

 <style>
  .inputdec1{
    border: 1px solid #EEEEEE !important;
    border-radius: 0px !important;
    background-color: #EEEEEE !important;
    padding-top: 10px !important;
    padding-bottom: 10px !important;
  }
  .column2{
    margin-top: 5.3em !important;
    margin-left: 5em !important;
  }

  @media only screen and (max-width: 600px) {
  .column2 {
    margin-top: 1.3em !important;
    margin-left: 0em !important;
  }
}
  </style> 
  <body>

    @include('layouts.header')
    <div class="section my-lg-5 py-lg-5 my-md-3 my-2 py-2 py-md-2 ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 d-flex flex-column align-items-start">
                    {{-- FORM --}}
                    <h1 class="mt-1">Contact Us</h1>
                    <p class="my-lg-4 my-md-1 my-1">If you have any queries please use the form below or give us a call.</p>
                    <form class="row g-3 mt-1" action="{{ route('postcontact') }}" method="POST" novalidate enctype="multipart/form-data" >
                             @csrf
                        <div class="col-12">
                            <input value="" name="name" type="text" class="form-control inputdec1" id="inputName" placeholder="Full Name *" >
                          </div>
                        <div class="col-md-6">
                          <input value="" name="email" type="email" class="form-control inputdec1" id="inputEmail" placeholder="Email *">
                        </div>
                        <div class="col-md-6">                         
                          <input value="" name="phone_number" type="number" class="form-control inputdec1" id="inputNumber" placeholder="Contact ">
                        </div>
                        <div class="col-12">
                          <textarea  name="message" id="inputTextArea1" cols="30" rows="10" class="form-control inputdec1" placeholder="How can we help you? *" ></textarea>
                        </div>
                        <div class="col-12">
                          <button type="Submit" class="btn btn-primary" >Submit</button>
                        </div>
                      </form>

                </div>
                <div class="col-lg-6 col-md-12 col-12 ">
                    <div class="container d-flex flex-column align-items-start column2" >
                        <h4 class="fs-5">Gatwick Expert Airport Transfer</h4>
                        <p class="fs-6"> T Office: +44(0) 1737 652 452</p>
                        <p class="fs-6">T Mobile: +44(0) 7722593719</p>
                        <p class="fs-6">E: info@gatwickexpert.co.uk</p>
                        <p class="fs-6">W: www.gatwickexpert.co.uk </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>