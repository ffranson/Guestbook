<?php
$page_title = "Anthony's guestbook";
$content_title = 'Guestbook';
$content_desc = 'To connect with me, please fill out this form.';
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/305/guestbook/includes/headerTest.html";
include ($path);

?>

<!-- Guestbook form-->
<form id="contact-info" action="thank_you.php" method="post">

    <!--  1. CONTACT INFORMATION  -->
    <fieldset class="form-group border p-2 border-secondary">
        <legend>Contact Information</legend>
        <div class="form-group">
            <label for="fname" class="err" id="fname_label">First Name<span class="requiredErrMsg">Required</span></label>
            <input type="text" class="input_field form-control" id="fname" name="fname" aria-label="first name"
                   placeholder="Enter first name">
            <!--                <span class="err" id="err-fname">Please enter first name</span>-->
        </div>
        <div class="form-group">
            <label for="lname" class="err" id="lname_label">Last Name<span class="requiredErrMsg">Required</span></label>
            <input type="text" class="input_field form-control" id="lname" name="lname" aria-label="last name"
                   placeholder="Enter last name">
            <!--                <span class="err" id="err-lname">Please enter last name</span>-->

        </div>
        <div class="form-group">
            <label for="job-title" class="err">Job Title<span class="requiredErrMsg">Required</span></label>
            <input type="text" class="input_field form-control" id="job_title" name="job_title" aria-label="job title"
                   placeholder="Enter job title">
            <!--                <span class="err" id="err-fname">Please enter first name</span>-->
        </div>
        <div class="form-group">
            <label for="company" class="err">Company<span class="requiredErrMsg">Required</span></label>
            <input type="text" class="input_field form-control" id="company" name="company" aria-label="company"
                   placeholder="Enter your company">
            <!--                <span class="err" id="err-fname">Please enter first name</span>-->
        </div>
        <!--                <div class="container form-group custom-control-inline">-->
        <div class="form-group">
            <label for="linkedin_url" class="err">LinkedIn Url<span class="requiredErrMsg">Required</span></label>
            <input type="text" class="input_field form-control" id="linkedin_url" name="linkedin_url" aria-label="linkedin url"
                   placeholder="Enter your LinkedIn URL">
        </div>
        <div class="form-group">
            <label for="email" class="err">Email address<span class="requiredErrMsg">Required</span></label>
            <input type="text" class="input_field form-control" id="email" name="email" aria-label="linkedin url"
                   placeholder="Enter your LinkedIn URL">
        </div>
        <!--                <span class="err" id="err-fname">Please enter first name</span>-->
        <!--                </div>-->
    </fieldset>
    <br>
    <!--  2. HOW WE MET  -->
    <fieldset class="form-group border p-2 border-secondary">
        <legend>How we met</legend>
        <div class="container">
            <!--                <form>-->
            <div class="form-group">
                <!--                        <label for="sel1">Select list (select one):</label>-->
                <label for="how_we_met" class="err">Select<span class="requiredErrMsg">Required</span></label>
                <select class="input_field form-control" id="how_we_met" onchange="specifyHwm()">
                    <option value="none">One of these choices</option>
                    <option value="have_not_met">We haven't met</option>
                    <option value="school">College</option>
                    <option value="work">Work</option>
                    <option value="gym">LA Fitness</option>
                    <option value="career fair">Career fair</option>
                    <option value="other">Other - please specify below</option>
                </select>
                <!--                <br>-->
                <div class="mt-3" id="specify_how_we_met_div">
                    <label for="specify_how_we_met" class="err">Specify how we met<span class="requiredErrMsg">Required</span></label>
                    <input type="text" class="input_field form-control" id="specify_how_we_met" name="specify_how_we_met" aria-label="specify how we met">
                </div>
                <div class="mt-3">
                    <label for="message_input">Message</label>
                    <textarea class="input_field form-control" id="message_input" name="message_input" aria-label="message input" ></textarea>
                </div>
            </div>
            <!--                </form>-->
        </div>
    </fieldset>
    <br>

    <!--    3. MAILING LIST-->
    <fieldset class="form-group border p-2 border-secondary">
        <legend>Mailing list</legend>
        <div class="form-group">
            <!--                    <div class="custom-control custom-switch">-->
            <!--                        <input class="custom-control-input" type="checkbox" id="mailing-list" name="mailing-list">-->
            <!--                        <label class="custom-control-label" for="mailing-list">Please add me to your mailing list!</label>-->
            <!--                    </div>-->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="mailing-list" name="mailing-list" onchange="showEmailFormat()">
                <label class="form-check-label" for="mailing-list">Please add me to your mailing list!</label>
            </div>


            <div class="form-group" id="email_format">
                <br>
                <label>Please select an email format:</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="mailing_html" type="radio" name="email_type" checked>
                    <label class="custom-control-label" for="mailing_html">HTML</label>
                </div>

                <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="mailing_text" type="radio" name="email_type">
                    <label class="custom-control-label" for="mailing_text">Text</label>
                </div>
            </div>

        </div>
    </fieldset>


    <!--    4. SUBMIT BUTTON-->
    <div class="text-right pb-5">
        <button class="btn btn-primary btn-lg" type="submit" id="submit">Submit Form</button>
    </div>
</form>
</div>





<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/305/guestbook/includes/footerTest.html";
include ($path);
?>
