<?php include 'header.php'?>

    <div class="page-title-area title-img-one">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="page-title-text">
            <h2>Appointment</h2>
            <ul>
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <i class="icofont-simple-right"></i>
              </li>
              <li>Appointment</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

   

    <div class="contact-form contact-form-two contact-form-three " style="margin-top:150px">
      <div class="container">
        <div class="contact-wrap">
          <form id="contactForm" class>
            <h2>Get An Appointment</h2>
            <div class="row">
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
                  <input
                    type="text"
                    name="msg_subject"
                    id="msg_subject"
                    class="form-control"
                    required
                    data-error="Please enter your subject"
                    placeholder="Subject"
                  />
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
                    placeholder="Case Description"
                  ></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12 col-lg-12">
                <div class="text-center">
                  <button type="submit" class="contact-btn">Submit Case</button>
                </div>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include 'footer.php'?>