<?php include 'header.php'?>

    <div class="page-title-area page-title-area-two title-img-one">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="page-title-text">
            <h2>Carrers</h2>
            <ul>
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <i class="icofont-simple-right"></i>
              </li>
              <li>Carrers</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-form contact-form-four pt-100 pb-100">
      

      <div class="container-fluid">
        <h1 style="text-align:center">Apply Here</h1>
        <form id="contactForm">
          <div class="row contact-wrap">
            <div class="col-sm-6 col-lg-6">
              <div class="form-group">
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="form-control"
                  required
                  data-error="Please enter your name"
                  placeholder="Your Full Name"
                />
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-6">
              <div class="form-group">
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control"
                  required
                  data-error="Please enter your email"
                  placeholder="Your Email"
                />
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-6">
              <div class="form-group">
                <input
                  type="text"
                  name="phone_number"
                  id="phone_number"
                  required
                  data-error="Please enter your number"
                  class="form-control"
                  placeholder="Your Phone"
                />
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-6">
              <div class="form-group">
              <select name="" class="form-control" id="" style="width: 100%;">
    <option  class="  " disabled selected style="display:none;">Select the post you want to apply for</option>
    <option value="">Internship</option>
    <option value="">Internship</option>
    <option value="">Internship</option>
    <option value="">Internship</option>
    <option value="">Internship</option>
</select>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <textarea
                  name="message"
                  class="form-control"
                  id="message"
                  cols="30"
                  rows="8"
                  required
                  data-error="Write your message"
                  placeholder="Enter Your Personal Description"
                ></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check agree-label">
                <input
                  name="gridCheck"
                  value="I agree to the terms and privacy policy."
                  class="form-check-input"
                  type="checkbox"
                  id="gridCheck"
                  required
                />
                <label class="form-check-label" for="gridCheck">
                  Accept
                  <a href="terms-condition.php">Terms & Conditions</a> And
                  <a href="privacy-policy.php">Privacy Policy.</a>
                </label>
                <div class="help-block with-errors gridCheck-error"></div>
              </div>
            </div>
            <div class="col-md-12 col-lg-12">
              <div class="text-center">
                <button type="submit" class="contact-btn">Submit Application</button>
              </div>
              <div id="msgSubmit" class="h3 text-center hidden"></div>
              <div class="clearfix"></div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30773484.55170563!2d61.0245165611659!3d19.69009515037612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1711954186827!5m2!1sen!2sin"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php include 'footer.php'?>