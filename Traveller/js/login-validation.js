var password = $("#password");
password.on("input", function () {
  var current_pass = password.val();
  var pattern = /[!@#$%&]/;

  if (!pattern.test(current_pass)) {

    $('#success_message_pass').empty();
    $("#error_message_pass")
      .empty()
      .html("<p>Password must contain at least one special character</p>");
  } else {
    $("#error_message_pass").empty();
    $("#success_message_pass")
      .empty()
      .html("<p>Password is containing one or more special character</p>");
  }
});


var email = $("#email");
email.on("input", function () {
  var current_email = email.val();
  var mail_pattern = /[@]/;

  if (!mail_pattern.test(current_email)) {
    $('#success_message_mail').empty();
    $("#error_message_mail")
      .empty()
      .html("<p>Invalid Mail</p>");
  } else {
    $("#error_message_mail").empty();
    $("#success_message_mail")
      .empty()
      .html("<p>Valid Mail</p>");
  }
});


