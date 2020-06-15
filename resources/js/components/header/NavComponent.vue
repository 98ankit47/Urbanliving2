<template>
  <div>
    <header class="main-header header-1">
      <div class="top-bar-wrapper bar-wrapper">
        <div class="container">
          <div class="top-bar-inner">
            <div class="row">
              <div class="top-bar-left bar-left col-md-6">
                <aside id="ere_widget_login_menu-2" class="widget ere_widget ere_widget_login_menu">
                  <a
                    href="javascript:void(0)"
                    class="login-link topbar-link"
                    data-toggle="modal"
                    data-target="#ere_signin_modal"
                  >
                    <i class="fa fa-user"></i>
                    <span class="hidden-xs" @click="showLoginModal">Login or Register</span>
                  </a>
                </aside>
                <aside id="text-9" class="submit-property-language widget widget_text">
                  <div class="textwidget">
                    <div class="submit-property">
                      <a href="#" title="Submit Property">
                        <i class="icon-office2 accent-color"></i> Submit Property
                      </a>
                    </div>
                    <div id="lang_sel">
                      <ul>
                        <li>
                          <a href="#" class="lang_sel_sel icl-en">
                            <img class="iclflag" src="vue/images/us.png" alt="en" title="English" />&nbsp;&nbsp;English
                          </a>
                          <ul>
                            <li class="icl-fr">
                              <a href="#">
                                <img
                                  class="iclflag"
                                  src="vue/images/fr.png"
                                  alt="fr"
                                  title="French"
                                />&nbsp;French
                              </a>
                            </li>
                            <li class="icl-de">
                              <a href="#">
                                <img
                                  class="iclflag"
                                  src="vue/images/de.png"
                                  alt="de"
                                  title="German"
                                />&nbsp;German
                              </a>
                            </li>
                            <li class="icl-ja">
                              <a href="#">
                                <img
                                  class="iclflag"
                                  src="vue/images/ja.png"
                                  alt="ja"
                                  title="Japanese"
                                />&nbsp;Japanese
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </aside>
              </div>
              <div class="top-bar-right bar-right col-md-6">
                <aside id="g5plus_social_profile-3" class="widget widget-social-profile">
                  <div class="social-profiles default light icon-small">
                    <a target="_blank" title="Facebook" href="#">
                      <img alt="Facebook" src="vue/images/facebook1.svg" />
                    </a>
                    <a target="_blank" title="Instagram" href="#">
                      <img alt="Instagram" src="vue/images/instagram1.svg" />
                    </a>
                    <a target="_blank" title="Twitter" href="#">
                      <img alt="Twitter" src="vue/images/twitter1.svg" />
                    </a>
                    <a target="_blank" title="Tiktok" href="#">
                      <img alt="Tiktok" src="vue/images/tiktok1.svg" />
                    </a>
                    <div class="clearfix"></div>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sticky-header" class="d-none d-md-block">
        <div class="container">
          <div class="header-above-inner container-inner clearfix">
            <div class="logo-header">
              <a
                class="no-sticky"
                href="index.html"
                title="HomeInsiders-Real Estate Listings, Homes For Sale, Housing Data"
              >
                <img
                  src="vue/images/Logo.png"
                  alt="HomeInsiders-Real Estate Listings, Homes For Sale, Housing Data"
                />
              </a>
            </div>
            <nav class="primary-menu">
              <ul id="main-menu" class="main-menu x-nav-menu">
                <li class="menu-item x-menu-item">
                  <a href="map-search.html" class="x-menu-a-text">
                    <span class="x-menu-text">Map Search</span>
                  </a>
                </li>

                <li class="menu-item x-menu-item">
                  <a href="developments.html" class="x-menu-a-text">
                    <span class="x-menu-text">Developments</span>
                  </a>
                </li>

                <li class="menu-item x-menu-item">
                  <a href="sell-your-home.html" class="x-menu-a-text">
                    <span class="x-menu-text">Sell your home</span>
                  </a>
                </li>

                <li class="menu-item x-menu-item">
                  <a href="neighborhoods.html" class="x-menu-a-text">
                    <span class="x-menu-text">Neighborhoods</span>
                  </a>
                </li>

                <li class="menu-item x-menu-item">
                  <a href="lending.html" class="x-menu-a-text">
                    <span class="x-menu-text">Lending</span>
                  </a>
                </li>

                <li class="menu-item x-menu-item">
                  <a href="about.html" class="x-menu-a-text">
                    <span class="x-menu-text">About</span>
                  </a>
                </li>

                <li class="menu-item x-menu-item">
                  <a href="contact.html" class="x-menu-a-text">
                    <span class="x-menu-text">Contact</span>
                  </a>
                </li>
              </ul>

              <div class="header-customize-wrapper header-customize-nav">
                <div class="header-customize-item item-custom-text">
                  <p class="contact-phone">
                    <i class="fa fa-phone"></i>123 456 789
                  </p>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
        <!-- Register and login modal begin -->
    <div class="modal modal-login fade" id="ere_signin_modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
          <ul class="nav nav-tabs">
            <li class="active">
              <a id="ere_login_modal_tab" href="#login" data-toggle="tab" class="active">Log in</a>
            </li>
            <li>
              <a id="ere_register_modal_tab" href="#register" data-toggle="tab">Register</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="login">
              <div class="ere-login-wrap">
                <div class="ere_messages message"></div>
                <form class="ere-login" @submit.prevent="loginUser">
                  <div class="form-group control-username">
                    <input
                      name="user_login"
                      class="form-control control-icon login_user_login"
                      placeholder="Email*"
                      type="text"
                      autocomplete="off"
                      v-model="form.email"
                      :class="{ 'is-invalid': form.errors.has('email') }">
                       <has-error :form="form" field="email"></has-error>
                  </div>
                  <div class="form-group control-password">
                    <input
                      name="user_password"
                      class="form-control control-icon"
                      placeholder="Password*"
                      type="password"
                      v-model="form.password"
                      :class="{ 'is-invalid': form.errors.has('password') }"
                    >
                    <has-error :form="form" field="password"></has-error>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="remember" type="checkbox" /> Remember me
                    </label>
                  </div>
                  <input type="hidden" name="ere_security_login" value="6072a8c42c" />
                  <input type="hidden" name="action" value="ere_login_ajax" />
                  <a href="javascript:void(0)" class="ere-reset-password">Lost password?</a>
                  <div class="ere-recaptcha-wrap clearfix">
                    <div class="ere-google-recaptcha"></div>
                  </div>
                  <button
                    type="submit"
                    class="ere-login-button btn btn-primary btn-block"
                  >Login</button>
                </form>
                <hr />
                <div class="wp-social-login-widget">
                  <div class="wp-social-login-connect-with">or Connect with Social Networks</div>
                  <div class="wp-social-login-provider-list">
                    <a
                      rel="nofollow"
                      href="#"
                      title="Login with Facebook"
                      class="wp-social-login-provider wp-social-login-provider-facebook"
                      data-provider="Facebook"
                    >
                      <img alt="Facebook" title="Login with Facebook" src="vue/images/facebook.svg" />
                    </a>
                    <a
                      rel="nofollow"
                      href="#"
                      title="Login with Twitter"
                      class="wp-social-login-provider wp-social-login-provider-twitter"
                      data-provider="Twitter"
                    >
                      <img alt="Twitter" title="Login with Twitter" src="vue/images/twitter.svg" />
                    </a>
                    <a
                      rel="nofollow"
                      href="#"
                      title="Login with Instagram"
                      class="wp-social-login-provider wp-social-login-provider-instagram"
                      data-provider="Instagram"
                    >
                      <img alt="Instagram" title="Login with Instagram" src="vue/images/instagram.svg" />
                    </a>
                    <a
                      rel="nofollow"
                      href="#"
                      title="Login with Tiktok"
                      class="wp-social-login-provider wp-social-login-provider-tiktok"
                      data-provider="Tiktok"
                    >
                      <img alt="Tiktok" title="Login with Tiktok" src="vue/images/tiktok2.svg" />
                    </a>
                  </div>

                  <h6 class="login-terms">
                    By creating an account you are accepting our
                    <a href>Terms &amp; Conditions</a>
                  </h6>
                  <div class="wp-social-login-widget-clearing"></div>
                </div>
              </div>
              <div class="ere-reset-password-wrap" style="display: none">
                <div class="ere-resset-password-wrap">
                  <div class="ere_messages message ere_messages_reset_password"></div>
                  <form>
                    <div class="form-group control-username">
                      <input
                        name="user_login"
                        class="form-control control-icon reset_password_user_login"
                        placeholder="Enter your username or email"
                        autocomplete="off"
                      />
                      <input type="hidden" name="ere_security_reset_password" value="dea58526fb" />
                      <input type="hidden" name="action" value="ere_reset_password_ajax" />
                      <div class="ere-recaptcha-wrap clearfix">
                        <div class="ere-google-recaptcha"></div>
                      </div>
                      <button
                        type="submit"
                        class="btn btn-primary btn-block ere_forgetpass"
                      >Get new password</button>
                    </div>
                  </form>
                </div>
                <a href="javascript:void(0)" class="ere-back-to-login">Back to Login</a>
              </div>
            </div>
            <div class="tab-pane" id="register">
              <div class="ere-register-wrap">
                <div class="ere_messages message"></div>
                <form class="ere-register" @submit.prevent="register">
                  <div class="form-group control-username">
                    <input
                      name="username"
                      class="form-control control-icon"
                      type="text"
                      placeholder="Username"
                      v-model="form.username"
                      :class="{ 'is-invalid': form.errors.has('username') }"
                    >
                     <has-error :form="form" field="username"></has-error>
                  </div>
                  <div class="form-group control-email">
                    <input
                      name="email"
                      type="email"
                      class="form-control control-icon"
                      placeholder="Email"
                      v-model="form.email"
                      :class="{ 'is-invalid': form.errors.has('email') }"
                    >
                    <has-error :form="form" field="email"></has-error>
                  </div>
                  <div class="form-group control-password">
                    <input
                      name="password"
                      class="form-control control-icon"
                      placeholder="Password"
                      type="password"
                      v-model="form.password"
                      :class="{ 'is-invalid': form.errors.has('password') }"
                    >
                    <has-error :form="form" field="password"></has-error>
                  </div>
                  <div class="form-group control-ere-password">
                    <input
                      name="confirm_password"
                      class="form-control control-icon"
                      placeholder="Retype Password"
                      type="password"
                      v-model="form.c_password"
                      :class="{'is-invalid':form.errors.has('confirm_password')}"
                    >
                    <has-error :form="form" field="confirm_password"></has-error>
                  </div>
                  <select name="user_register_role" id="user_register_role">
                    <option value="owner">Owner/Buyer/Tenant</option>
                    <option value="agent">Agent</option>
                    <option value="agency">Agency</option>
                  </select>
                  <button
                    type="submit"
                    class="ere-register-button btn btn-primary btn-block"
                  >Register</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data(){
    return{
      form: new Form({
        email: '',
        password: '',
        remember: false,
        username:'',
        c_password:''
      })
    }
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    showLoginModal() {
      $('#ere_signin_modal').modal('show');
    },
    loginUser(){
      // Submit the form via a POST request
      this.form.post('api/user/login')
        .then(({ data }) => { console.log(data) }) 
    },
    register(){
      this.form.post('api/user/register').then(({data})=>{
        console.log(data);
      })
    }
  }
};
</script>
