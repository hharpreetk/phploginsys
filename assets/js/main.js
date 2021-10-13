$(document).on("submit", "form.form-signup", function (event) {
  // prevent default
  event.preventDefault();

  var _form = $(this);
  var _error_msg = $(".js-error", _form);
  var _success_msg = $(".js-success", _form);
  $email = $("input[name='email']", _form).val();
  $password = $("input[name='password']", _form).val();
  $confirm_password = $("input[name='confirm_password']", _form).val();
  var dataObj = {
    email: $email,
    password: $password,
    cpassword: $confirm_password,
  };

  if (dataObj.email.length < 6) {
    _error_msg.html("Please enter a valid email address.").show();
    return false;
  } else if (dataObj.password.length < 11) {
    _error_msg
      .html("Please enter a password that is atleast 11 characters long.")
      .show();
    return false;
  } else if (dataObj.cpassword != dataObj.password) {
    _error_msg.html("Passwords do not match.").show();
    return false;
  }

  _error_msg.hide();
  _success_msg.hide();

  $.ajax({
    type: "POST",
    url: "/ajax/signup.php",
    data: dataObj,
    dataType: "json",
    async: true,
  })
    .done(function ajaxDone(data) {
      // Whatever data is
      //show error message
      if (data.error_msg !== undefined) {
        _error_msg.html(data.error_msg);
        if (data.error_link !== undefined && data.error_link === "signin") {
          _error_msg.append(
            '<a href="/signin" class="alert-link fw-normal mx-2">Sign In here</a>'
          );
        }
        _error_msg.show();
      } else if (data.success_msg !== undefined) {
        _form.trigger("reset");
        _success_msg
          .html(
            data.success_msg +
              '<a href="/signin" class="alert-link fw-normal mx-2">Sign In here</a>'
          )
          .show();
      }
    })
    .fail(function ajaxFailed(e) {
      // This failed
    })
    .always(function ajaxAlwaysDoThis(data) {
      //always
    });

  return false;
});

$(document).on("submit", "form.form-signin", function (event) {
  // prevent default
  event.preventDefault();

  var _form = $(this);
  var _error_msg = $(".js-error", _form);
  $email = $("input[name='email']", _form).val();
  $password = $("input[name='password']", _form).val();
  var dataObj = {
    email: $email,
    password: $password,
  };

  if (dataObj.email.length < 6) {
    _error_msg.html("Please enter a valid email address.").show();
    return false;
  } else if (dataObj.password.length < 11) {
    _error_msg
      .html("Please enter a password that is atleast 11 characters long.")
      .show();
    return false;
  }

  _error_msg.hide();

  $.ajax({
    type: "POST",
    url: "/ajax/signin.php",
    data: dataObj,
    dataType: "json",
    async: true,
  })
    .done(function ajaxDone(data) {
      // Whatever data is
      //show error message
      if (data.error_msg !== undefined) {
        _error_msg.html(data.error_msg);
        if (data.error_link !== undefined && data.error_link === "signup") {
          _error_msg.append(
            '<a href="/signup" class="alert-link fw-normal mx-2">Create one here</a>'
          );
        }

        _error_msg.show();
      } else if (data.redirect !== undefined) {
        _form.trigger("reset");
        window.location = data.redirect;
      }
    })
    .fail(function ajaxFailed(e) {
      // This failed
    })
    .always(function ajaxAlwaysDoThis(data) {
      //always
    });

  return false;
});

$(document).on("submit", "form.form-resetpassword", function (event) {
  // prevent default
  event.preventDefault();

  var _form = $(this);
  var _error_msg = $(".js-error", _form);
  var _success_msg = $(".js-success", _form);
  $email = $("input[name='email']", _form).val();
  $password = $("input[name='password']", _form).val();
  $confirm_password = $("input[name='confirm_password']", _form).val();
  var dataObj = {
    email: $email,
    password: $password,
    cpassword: $confirm_password,
  };

  if (dataObj.email.length < 6) {
    _error_msg.html("Please enter a valid email address.").show();
    return false;
  } else if (dataObj.password.length < 11) {
    _error_msg
      .html("Please enter a password that is atleast 11 characters long.")
      .show();
    return false;
  } else if (dataObj.cpassword != dataObj.password) {
    _error_msg.html("Passwords do not match.").show();
    return false;
  }

  _error_msg.hide();
  _success_msg.hide();

  $.ajax({
    type: "POST",
    url: "/ajax/password.php",
    data: dataObj,
    dataType: "json",
    async: true,
  })
    .done(function ajaxDone(data) {
      // Whatever data is
      //show error message
      if (data.error_msg !== undefined) {
        _error_msg.html(data.error_msg).show();
      } else if (data.success_msg !== undefined) {
        _form.trigger("reset");
        _success_msg
          .html(
            data.success_msg +
              '<a href="/signin" class="alert-link fw-normal mx-2">Sign In here</a>'
          )
          .show();
      }
    })
    .fail(function ajaxFailed(e) {
      // This failed
    })
    .always(function ajaxAlwaysDoThis(data) {
      //always
    });

  return false;
});
