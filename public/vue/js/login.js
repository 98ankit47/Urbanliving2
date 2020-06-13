if (function(e, o, s) {
        var a, n = e.getElementsByTagName(o)[0];
        e.getElementById(s) || ((a = e.createElement(o)).id = s, a.src = "//connect.facebook.net/en_US/sdk.js", n.parentNode.insertBefore(a, n))
    }(document, "script", "facebook-jssdk"), "undefined" != typeof SocialLoginVars) var facebookAppId = SocialLoginVars.social.facebookAppId;
facebookAppId && (window.fbAsyncInit = function() {
        FB.init({
            appId: facebookAppId,
            cookie: !0,
            xfbml: !0,
            version: "v5.0"
        }), window.FB = FB
    }),
    function(e) {
        "use strict";
        var o = {};

        function s() {
            var o = e(".login-opener"),
                s = e(".login-register-holder");
            if (e(document.body).on("open_user_login_trigger", function() {
                    s.fadeIn(300), s.addClass("opened")
                }), o) {
                var a = e(".login-register-content");
                o.on("click", function(e) {
                    e.preventDefault(), s.fadeIn(300), s.addClass("opened")
                }), s.on("click", function(e) {
                    s.hasClass("opened") && (s.fadeOut(300), s.removeClass("opened"))
                }), a.on("click", function(e) {
                    e.stopPropagation()
                }), e(window).on("keyup", function(e) {
                    s.hasClass("opened") && 27 == e.keyCode && (s.fadeOut(300), s.removeClass("opened"))
                }), a.tabs()
            }
        }

        function a() {
            e(".login-form").on("submit", function(o) {
                o.preventDefault();
                var s = {
                    action: "membership_login_user",
                    security: e(this).find("#login-security").val(),
                    login_data: e(this).serialize()
                };
                return i({
                    status: "sent",
                    message: e(this).find("#login-form-submitted").val()
                }), e.ajax({
                    type: "POST",
                    data: s,
                    url: GlobalVars.vars.AjaxUrl,
                    success: function(e) {
                        var o;
                        i(o = JSON.parse(e)), "success" == o.status && (window.location = o.redirect)
                    }
                }), !1
            })
        }

        function n() {
            e(".register-form").on("submit", function(o) {
                o.preventDefault();
                var s = {
                    action: "membership_register_user",
                    security: e(this).find("#register-security").val(),
                    register_data: e(this).serialize()
                };
                return i({
                    status: "sent",
                    message: e(this).find("#register-form-submitted").val()
                }), e.ajax({
                    type: "POST",
                    data: s,
                    url: GlobalVars.vars.AjaxUrl,
                    success: function(e) {
                        var o;
                        i(o = JSON.parse(e)), "success" == o.status && (window.location = o.redirect)
                    }
                }), !1
            })
        }

        function t() {
            var o = e(".reset-pass-form");
            o.on("submit", function(s) {
                s.preventDefault();
                var a = {
                    action: "membership_user_lost_password",
                    user_login: o.find("#user_reset_password_login").val()
                };
                i({
                    status: "sent",
                    message: e(this).find("#password-form-submitted").val()
                }), e.ajax({
                    type: "POST",
                    data: a,
                    url: GlobalVars.vars.AjaxUrl,
                    success: function(e) {
                        var o = JSON.parse(e);
                        i(o), "success" == o.status && (window.location = o.redirect)
                    }
                })
            })
        }

        function i(o) {
            var s = e(".membership-response-holder"),
                a = _.template(e(".membership-response-template").html())({
                    messageClass: "sent" === o.status ? "membership-message-sent" : "success" === o.status ? "membership-message-succes" : "membership-message-error",
                    message: o.message
                });
            s.html(a)
        }

        function r() {
            e(".facebook-login-holder").on("submit", function(o) {
                o.preventDefault(), window.FB.login(function(o) {
                    var s;
                    "connected" === (s = o).status ? (console.log("Welcome! Fetching information from Facebook..."), FB.api("/me", "GET", {
                        fields: "id, name, email, link, picture"
                    }, function(o) {
                        var s = e(".facebook-login-holder [name^=nonce_facebook_login]").val();
                        o.nonce = s, o.image = o.picture.data.url;
                        var a = {
                            action: "membership_check_facebook_user",
                            response: o
                        };
                        e.ajax({
                            type: "POST",
                            data: a,
                            url: GlobalVars.vars.AjaxUrl,
                            success: function(e) {
                                var o;
                                i(o = JSON.parse(e)), "success" == o.status && (window.location = o.redirect)
                            }
                        })
                    })) : "not_authorized" === s.status ? console.log("Please log into this app") : console.log("Please log into Facebook")
                }, {
                    scope: "email, public_profile"
                })
            })
        }

        function d() {
            if ("undefined" != typeof SocialLoginVars) var o = SocialLoginVars.social.googleClientId;
            o ? gapi.load("auth2", function() {
                window.auth2 = gapi.auth2.init({
                    client_id: o
                }), e(".google-login-holder").on("submit", function(o) {
                    o.preventDefault(), window.auth2.signIn(),
                        function() {
                            if (window.auth2.isSignedIn.get()) {
                                var o = window.auth2.currentUser.get(),
                                    s = o.getBasicProfile(),
                                    a = e(".google-login-holder [name^=nonce_google_login]").val(),
                                    n = {
                                        id: s.getId(),
                                        name: s.getName(),
                                        email: s.getEmail(),
                                        image: s.getImageUrl(),
                                        link: "https://plus.google.com/" + s.getId(),
                                        nonce: a
                                    },
                                    t = {
                                        action: "membership_check_google_user",
                                        response: n
                                    };
                                e.ajax({
                                    type: "POST",
                                    data: t,
                                    url: GlobalVars.vars.AjaxUrl,
                                    success: function(e) {
                                        var o;
                                        i(o = JSON.parse(e)), "success" == o.status && (window.location = o.redirect)
                                    }
                                })
                            }
                        }()
                })
            }) : e(".google-login-holder").on("submit", function(e) {
                e.preventDefault()
            })
        }
        "undefined" != typeof (modules.socialLogin = o), o.UserLogin = a, o.UserRegister = n, o.UserLostPassword = t, o.InitLoginWidgetModal = s, o.InitFacebookLogin = r, o.InitGooglePlusLogin = d, o.RenderAjaxResponseMessage = i, e(document).ready(function() {
            s(), a(), n(), t()
        }), e(window).load(function() {
            r(), d(),
                function() {
                    e(".membership-main-wrapper");
                    var o = e(".page-template-user-dashboard .content"),
                        s = e(".page-footer"),
                        a = 0;
                    !body.hasClass("header-transparent") && windowWidth > 1024 && (a = a + GlobalVars.vars.MenuAreaHeight + GlobalVars.vars.LogoAreaHeight);
                    s.length > 0 && (a += s.outerHeight());
                    if (windowWidth > 1024) {
                        var n = windowHeight - a;
                        o.css({
                            "min-height": n + "px"
                        })
                    }
                }()
        }), e(window).resize(function() {}), e(window).scroll(function() {})
    }(jQuery),
    function(e) {
        "use strict";
        var o = {};

        function s() {
            a(), e(document.body).on("membership_favorites_trigger", function() {
                a()
            })
        }

        function a() {
            e(".membership-item-favorites").on("click", function(o) {
                o.preventDefault();
                var s, a, n, t = e(this);
                void 0 !== t.data("item-id") && (s = t.data("item-id")), a = t, n = {
                    action: "membership_add_item_to_favorites",
                    item_id: s
                }, e.ajax({
                    type: "POST",
                    data: n,
                    url: GlobalVars.vars.AjaxUrl,
                    success: function(e) {
                        var o = JSON.parse(e);
                        "success" == o.status && (a.hasClass("icon-only") || a.find("span").text(o.data.message), a.find(".favorites-icon").removeClass("fa-heart fa-heart-o").addClass(o.data.icon))
                    }
                })
            })
        }
        modules.membershipFavorites = o, o.nDocumentReady = s, e(document).ready(s)
    }(jQuery);; /*!