<template>
  <!-- Start footer area -->
  <footer id="footer" class="footer-area bg-2 bg-opacity-black-90">
    <div class="footer-top pt-110 pb-80">
      <div class="container">
        <div class="row">
          <!-- footer-address -->
          <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-1">
            <div class="footer-widget">
              <h6 class="footer-titel">GET IN TOUCH</h6>
              <ul class="footer-address">
                <li>
                  <div class="address-icon">
                    <img src="vue/images/location-2.png" alt />
                  </div>
                  <div class="address-info">
                    <span>9600 Great Hills Trl,</span>
                    <span>#150w Austin TX 78759</span>
                  </div>
                </li>
                <li>
                  <div class="address-icon">
                    <img src="vue/images/phone-3.png" alt />
                  </div>
                  <div class="address-info">
                    <span>Telephone : +0 123-456-7890</span>
                    <span>Telephone : +0 123-456-7890</span>
                  </div>
                </li>
                <li>
                  <div class="address-icon">
                    <img src="vue/images/world.png" alt />
                  </div>
                  <div class="address-info">
                    <span>Email : connect@homeinsiders.com</span>
                    <span>
                      Web :
                      <a href="#" target="_blank">www.homeinsiders.com</a>
                    </span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- footer-latest-news -->
          <div class="col-xl-6 col-lg-5 col-12 order-3 order-lg-2 mt-md-30">
            <div class="footer-widget middle">
              <h6 class="footer-titel">AGENT INFORMATION</h6>
              <ul class="footer-latest-news">
                <li>
                  <div class="latest-news-info">
                    <h6>Sarah Renwick</h6>
                    <p>Realtor, License #643621</p>
                  </div>
                </li>
                <li>
                  <h6 class="footer-titel">BROKER INFORMATION</h6>
                  <div class="latest-news-info">
                    <h6>Sheila Dunagan</h6>
                    <p>
                      9600 Great Hills Trl #150w Ausitn TX 78759
                      <br />Broker, License #617831
                    </p>
                  </div>
                </li>
              </ul>
              <a href="#">
                <img src="vue/images/exp-reality.png" alt />
              </a>
              <a href="#">
                <img src="vue/images/realtor_logo.png" alt />
              </a>
              <a href="#">
                <img src="vue/images/eql-home.png" alt />
              </a>
            </div>
          </div>
          <!-- footer-contact -->
          <div class="col-xl-3 col-lg-4 col-md-6 col-12 order-2 order-lg-3 mt-sm-30">
            <div class="footer-widget">
              <h6 class="footer-titel">QUICK CONTACT</h6>
              <div class="footer-contact">
                <p>Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor</p>
                <form @submit.prevent="ContactUs" @keydown="form.onKeydown($event)">
                  <input
                    type="email"
                    name="email"
                    required
                    v-model="form.email"
                    :class="{ 'is-invalid': form.errors.has('email') }"
                    placeholder="Type your E-mail address..."
                  />
                  <textarea
                    name="message"
                    v-model="form.message"
                    :class="{ 'is-invalid': form.errors.has('message') }"
                    required
                    placeholder="Write here..."
                  ></textarea>
                  <button type="submit" value="send">Send</button>
                </form>
                <p class="form-messege"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="policy text-center">
          <p>
            <a href="#">Information About Brokerage Services</a>&nbsp;&nbsp; | &nbsp;&nbsp;
            <a href="#">Consumer Protection Notice</a>&nbsp;&nbsp; | &nbsp;&nbsp;
            <a href="#">Privacy Policy</a>
          </p>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="copyright text-center">
              <p>
                Copyright &copy;
                <a href="#">
                  <b>HomeInsiders Group</b>
                </a>. All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer area -->
</template>

<script>
export default {
  data() {
    return {
      form: new Form({
        email: "",
        message: ""
      })
    };
  },
  methods: {
    ContactUs() {
      // Submit the form via a POST request
      this.form.post("/api/contact-us").then(({ data }) => {
        console.log(data);
        if (data == "success") {
          swal({
            title: "Enquiry Posted Succesfully!",
            text: "You Enquiry has been sended to Admin",
            icon: "success",
            button: "Done"
          });
        }
      });
    }
  },
  mounted() {
    
  }
};
</script>
