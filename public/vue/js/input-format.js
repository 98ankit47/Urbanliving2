$(document).ready(function () {
	// console.log(htmlWidth);
	var row = 1;
	var htmlWidth = document.getElementById('ul-web').clientWidth;
	if (htmlWidth < 415){
		row = 2;
	}
	shareForm = '\
		  <div class="col-md-10 col-sm-12 col-sx-12 c-center regular-share">\
            <div class="form-group share-message" id="share-message">\
              <label for="share-message" class="hide c-font-uppercase">Your Message</label>\
              <textarea id="share-send-message" class="form-control c-square c-theme share-send-message c-border-grey-3 input-md" rows="'+row+'" tabindex="5" placeholder="YOUR MESSAGE">FOR MORE INFORMATION PLEASE CALL 713-868-7226 TO SPEAK WITH AN HOMEINSIDERS CONSULTANT</textarea>\
            </div>\
          </div>\
          <div class="col-md-2 col-sm-3 col-xs-12 c-center regular-share-btn">\
            <div class="form-groupn c-bg-dark">\
              <a href="javascript:;" onclick="shareEmail()" class="btn btn-sm c-btn-square c-btn-signup btn-register width-100per c-btn-border-1x c-font-thin" id="share-email-btn">\
                <p class="">SEND</p>\
              </a>\
            </div>\
          </div>';
	document.getElementById('share-message').innerHTML = shareForm;
});

function showResetPassword() {
	if($('.urban-living-container').hasClass('c-auth-open')){
		$('.urban-living-container.c-auth-open .authentication .log-in').removeClass('show-login');
		$('.urban-living-container.c-auth-open .authentication .share-email').removeClass('show-share-email');
		$('.urban-living-container.c-auth-open .authentication .sign-up').removeClass('show-signup');
		$('.urban-living-container.c-auth-open .authentication .reset-password').removeClass('show-forgot-password');
    	$('.urban-living-container .authentication .share-sms').removeClass('show-share-sms');
		$('.urban-living-container .reset-password').addClass('show-reset-password');
	}else{
		$('.urban-living-container').addClass('c-auth-open');
		$('.c-layout-page').addClass('c-auth-open');
		$('.urban-living-container .reset-password').addClass('show-reset-password');
	}
	resetSideMenu();
}

function showForgotPassword() {
	if($('.urban-living-container').hasClass('c-auth-open')){
		$('.urban-living-container.c-auth-open .authentication .log-in').removeClass('show-login');
		$('.urban-living-container.c-auth-open .authentication .share-email').removeClass('show-share-email');
		$('.urban-living-container.c-auth-open .authentication .sign-up').removeClass('show-signup');
		$('.urban-living-container.c-auth-open .authentication .reset-password').removeClass('show-reset-password');
    	$('.urban-living-container .authentication .share-sms').removeClass('show-share-sms');
		$('.urban-living-container .forgot-password').addClass('show-forgot-password');
	}else{
		$('.urban-living-container').addClass('c-auth-open');
		$('.c-layout-page').addClass('c-auth-open');
		$('.urban-living-container .forgot-password').addClass('show-forgot-password');
	}
	resetSideMenu();
}

function showLogin(e) {
	// console.log(e);
	if($('.urban-living-container').hasClass('c-auth-open')){
		$('.urban-living-container.c-auth-open .authentication .sign-up').removeClass('show-signup');
		$('.urban-living-container.c-auth-open .authentication .share-email').removeClass('show-share-email');
		$('.urban-living-container.c-auth-open .authentication .forgot-password').removeClass('show-forgot-password');
		$('.urban-living-container.c-auth-open .authentication .reset-password').removeClass('show-reset-password');
    	$('.urban-living-container .authentication .share-sms').removeClass('show-share-sms');
		$('.urban-living-container .log-in').addClass('show-login');

	}else{
		$('.urban-living-container').addClass('c-auth-open');
		$('.c-layout-page').addClass('c-auth-open');
		$('.urban-living-container .log-in').addClass('show-login');
	}
	resetSideMenu();
	// console.log(modalArr);
	modalArr = e;
	updateModalLS();
		// sessionStorage.setItem('modal', 'save');
	// if (e == 'save'){
	// }
}

function showRegister(){
	if($('.urban-living-container').hasClass('c-auth-open')){
		$('.urban-living-container.c-auth-open .authentication .log-in').removeClass('show-login');
		$('.urban-living-container.c-auth-open .authentication .forgot-password').removeClass('show-forgot-password');
		$('.urban-living-container.c-auth-open .authentication .share-email').removeClass('show-share-email');
		$('.urban-living-container.c-auth-open .authentication .reset-password').removeClass('show-reset-password');
    	$('.urban-living-container .authentication .share-sms').removeClass('show-share-sms');
		$('.urban-living-container .sign-up').addClass('show-signup');
	}else{
		$('.urban-living-container').addClass('c-auth-open');
		$('.c-layout-page').addClass('c-auth-open');
		$('.urban-living-container .sign-up').addClass('show-signup');
	}
	resetSideMenu();
}

$(document).ready(function(){
	$('.ul-bed-option').on('click',function(){
		if ($('.ul-bed-option-list').hasClass('c-beds-list-show')) {
			$('.ul-bed-option-list').removeClass('c-beds-list-show');
		} else {
			$('.ul-bed-option-list').addClass('c-beds-list-show');
		}
		resetSideMenu();
	})

	$('.bedSelect').on('click',function(){
		if ($('.ul-bed-option-list').hasClass('c-beds-list-show')) {
			$('.ul-bed-option-list').removeClass('c-beds-list-show');
		} else {
			$('.ul-bed-option-list').addClass('c-beds-list-show');
		}
		resetSideMenu();
	})

	$('.c-login').on('click',function(){
		showLogin('login');
	})

	$('.c-signout').on('click',function(){
		signout();
	})

	$('.c-signup').on('click',function(){
		showRegister();
	})

	$('.c-password').on('click',function(){
		showForgotPassword();
	})

	$('.c-close').on('click',function(){
		if($('.urban-living-container.c-auth-open .authentication .sign-up').hasClass('show-signup')){
			resetSignUpForm();
			$('.urban-living-container .sign-up').removeClass('show-signup');
		}
		if($('.urban-living-container.c-auth-open .authentication .log-in').hasClass('show-login')){
			$('.urban-living-container .log-in').removeClass('show-login');
			// $('#login-form').removeClass('hide');
			document.getElementById('login-message').innerHTML = '';
		}
		if($('.urban-living-container.c-auth-open .authentication .forgot-password').hasClass('show-forgot-password')){
		 	$('.urban-living-container .forgot-password').removeClass('show-forgot-password');
			// $('#forgot-form').removeClass('hide');
			document.getElementById('forgot-message').innerHTML = '';
		}
		if($('.urban-living-container.c-auth-open .authentication .reset-password').hasClass('show-reset-password')){
			resetPasswordResetForm();
 			$('.urban-living-container .reset-password').removeClass('show-reset-password');
		}
		if($('.urban-living-container.c-auth-open .authentication .share-sms').hasClass('show-share-sms')){
			resetShareSMSForm();
			$('.urban-living-container .share-sms').removeClass('show-share-sms');
		}
		if($('.urban-living-container.c-auth-open .authentication .share-email').hasClass('show-share-email')){
		 	resetShareEmailForm();
    		$('.urban-living-container .share-email').removeClass('show-share-email');
		}
		$('.urban-living-container').removeClass('c-auth-open');
		$('.c-layout-page').removeClass('c-auth-open');
		$('.auth-form').removeClass('hidden');
		$('.signup-control').removeClass('hidden');
		resetSideMenu();
	})

	$('.c-search').on('click',function(){
		if($('.urban-living-container').hasClass('c-search-shown')){
			$('.urban-living-container').removeClass('c-search-shown');
			$('.c-search-container').addClass('hide');
		}else{
			$('.urban-living-container').addClass('c-search-shown');
			$('.c-search-container').removeClass('hide');
		}
		resetSideMenu();
	})

	$('.c-account').on('click',function(){
		go2Page('dashboard');
	})

	// showFilter();
});

function resetSignUpForm(){
	$('#signup-firstname').val('');
	$('#signup-lastname').val('');
	$('#signup-email').val('');
	$('#signup-password').val('');
	$('#signup-form, .signup-control').removeClass('hidden');
	// $('.urban-living-container .sign-up').removeClass('show-signup');
	document.getElementById('signup-message').innerHTML = '';
}

function resetPasswordResetForm(){
	$('#reset-password').val('');
	$('#reset-confirm-password').val('');
	$('#forgot-password-form').removeClass('hidden');
 	// $('.urban-living-container .reset-password').removeClass('show-reset-password');
	document.getElementById('reset-message').innerHTML = '';
}

var placeholderText = 'FOR MORE INFORMATION PLEASE CALL 713-868-7226 TO SPEAK WITH AN URBAN LIVING CONSULTANT';
function resetShareEmailForm(){
	// $('#share-sender-name').val('');
    // $('#share-sender-email').val('');
    $('#share-receiver-name').val('');
    $('#share-receiver-email').val('');
    $('#share-send-message').val(placeholderText);
    $('#share-email-form, #share-message').removeClass('hide');
    // $('.urban-living-container .share-email').removeClass('show-share-email');
	document.getElementById('share-email-message').innerHTML = '';
}

function resetShareSMSForm(){
	$('#share-sms-form').val('');
    $('#share-receiver-phone').val('');
	$('#share-send-text').val(placeholderText);
    $('#share-sms-form').removeClass('hide');
	// $('.urban-living-container .share-sms').removeClass('show-share-sms');
	document.getElementById('share-result-message').innerHTML = '';
}

function resetTourForm(){
	$('#tour-name').val('');
	$('#tour-email').val('');
	$('#tour-cellphone').val('');
	$('#tour-message').val('');
	$('.datepicker-box, .timepicker-box, .name-box, .email-box, .phone-box, .message-box, .tour-submit').addClass('hide');
}

function resetSideMenu(){
	$('.c-quick-sidebar-toggler .c-line').removeClass('hide');
}

function phoneFormatter() {
 $(' input[type="phone"]').attr({ placeholder : '___-___-____' });
  $('input[tabindex="phoneNumber"]').on('input', function() {
    var number = $(this).val().replace(/[^\d]/g, '')
    if (number.length == 7) {
      number = number.replace(/(\d{3})(\d{4})/, "$1-$2");
    } else if (number.length == 10) {
      number = number.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
     
    }
    $(this).val(number)
    $('input[type="phone"]').attr({ maxLength : 10 });
  });
};

function checkPhoneNumnber(ev){
	var arr = ev.target.value.split(',');
	//var number = ev.target.value;
	var number = arr[arr.length - 1];
	
  // console.log('before'+number);
  number = number.replace(/-/g,'');
  isCheckNum = isNaN(number);
  // console.log('after'+number);
  var item = $('#'+ev.target.id);
  //item.attr({ maxLength : 10 });
  var isNum = false;
  if (ev.keyCode >= 48 && ev.keyCode <= 57){
  	isNum = true;
  	// console.log('48-57');
  }
  if (ev.keyCode >= 96 && ev.keyCode <=  105){
  	isNum = true;
  	// console.log('96-105');
  } 
  if (ev.keyCode == 229 && ev.key == 'Unidentified'){
  	isNum = true;
  	// console.log('229-Unidentified');
  } 
  if (ev.keyCode == 8 && ev.key == 'Backspace'){
  	isNum = true;
  	// console.log('8-Backspace');
  }
  if (ev.keyCode == 188 && ev.key == ','){
	  isNum = true;
	  //number+=',';
  }
  // console.log(number.length);
  if (ev.keyCode != 188 && ev.key != ',' && number.length > 10){
  	isNum = false;
  }
  // console.log(isCheckNum);
  if (isCheckNum){
  	isNum = false;
  }

  if (isNum){ // || ev.keyCode == 189 || ev.keyCode == 109){
    if (number.length == 10) {
      number = number.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
    }
    //item.val(number);
	arr[arr.length - 1] = number;
	item.val(arr.join(','));
  	item.removeClass('has-error');
  }else{
  	item.addClass('has-error');
  	if (number.length > 10){
  		number = number.substr(0,10);
  		number = number.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
		arr[arr.length - 1] = number;
		item.val(arr.join(','));
		//item.val(number);
  	}else{
		item.val(arr.join(','));
		//item.val('');
  	}
  	// console.log('error');
	// number = '';
  	return;
  }
}