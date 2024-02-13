@extends('theme.main')

@section('pagecss')
 <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
  
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endsection

@section('content')
<div class="content-wrap bg-white py-5 py-lg-6">
    <div class="container">
        <h3>Contact Details</h3>
        <div class="row">
            {!! $page->contents !!}
            <div class="col-lg-12">
                @if(session()->has('success'))
                    <div class="style-msg successmsg">
                        <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Success!</strong> {{ session()->get('success') }}</div>
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="style-msg errormsg">
                        <div class="sb-msg"><i class="icon-remove"></i><strong>Error!</strong> {{ session()->get('error') }}</div>
                    </div>
                @endif

                <h3>Leave Us a Message</h3>
                <p><strong>Note:</strong> Please do not leave required fields (*) empty.</p>
                <div class="form-style fs-sm">
                   <form action="{{ route('contact-us-post') }}" method="POST" class="row">
                        @method('POST')
                        @csrf
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="inquiryType" class="fw-semibold text-initial nols">Inquiry Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="inquiryType" name="inquirytype">
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Employee Inquiry">Employee Inquiry</option>
                                    <option value="Brand or Product Concern">Brand or Product Concern</option>
                                    <option value="Website Feedback">Website Feedback</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="firstName" class="fw-semibold text-initial nols">First Name <span class="text-danger">*</span></label>
                                <input type="text" id="firstName" class="form-control form-input" name="firstname" placeholder="Enter your first name" required/>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="lastName" class="fw-semibold text-initial nols">Last Name <span class="text-danger">*</span></label>
                                <input type="text" id="lastName" class="form-control form-input" name="lastname" placeholder="Enter your last name" required/>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="contactNumber" class="fw-semibold text-initial nols">Contact Number <span class="text-danger">*</span></label>
                                <input type="number" id="contact" class="form-control form-input" name="contact" placeholder="Landline or Mobile" required/>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="emailAddress" class="fw-semibold text-initial nols">E-mail Address <span class="text-danger">*</span></label>
                                <input type="email" id="email" class="form-control form-input" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="email@domain.com" required/>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="message" class="fw-semibold text-initial nols">Message <span class="text-danger">*</span></label>
                                <textarea name="message" id="message" class="form-control form-input textarea" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-check mb-4">
                                <input class="form-check-input mt-2" type="checkbox" id="consentemail" name="consentemail" required>
                                <label class="font-secondary fw-normal text-initial nols mb-1" for="consentemail">
                                    I have read and agree to the Data Privacy Policy  <a href="/privacy-policy" target="_blank"><i class="icon-line-info ms-1 color"></i></a>
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <script src="https://www.google.com/recaptcha/api.js?hl=en" async="" defer="" ></script>
                                <div class="g-recaptcha" data-sitekey="{{ \Setting::info()->google_recaptcha_sitekey }}"></div>
                                <label class="control-label text-danger" for="g-recaptcha-response" id="catpchaError" style="display:none;font-size: 14px;"><i class="fa fa-times-circle-o"></i>The Captcha field is required.</label></br>
                                @if($errors->has('g-recaptcha-response'))
                                    @foreach($errors->get('g-recaptcha-response') as $message)
                                        <label class="control-label text-danger" for="g-recaptcha-response"><i class="fa fa-times-circle-o"></i>{{ $message }}</label></br>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="d-flex flex-column flex-lg-row">
                                <button type="submit" class="button button-custom button-large button-circle mt-2 noleftmargin d-block d-lg-inline-block w-100 w-lg-auto clearfix h-bg-color-2 mn-wd-150">Submit</button>
                                <button type="reset" class="button button-default button-dark button-large button-circle mt-2 noleftmargin d-block d-lg-inline-block w-100 w-lg-auto clearfix mn-wd-150">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pagejs')
<script>
    $('#contactUsForm').submit(function (evt) {
        let recaptcha = $("#g-recaptcha-response").val();
        if (recaptcha === "") {
            evt.preventDefault();
            $('#catpchaError').show();
            return false;
        }
    });

    /** form validations **/
    $(document).ready(function () {
        //called when key is pressed in textbox
        $('#contact').keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            var charCode = (e.which) ? e.which : event.keyCode
            if (charCode != 43 && charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;

        });
    });
</script>
@endsection
