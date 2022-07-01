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


var mobile_no = $("#mobile_no");
mobile_no.on("input", function () {
  var current_no = mobile_no.val();
//   var no_pattern = /[0-9]/;


  if (current_no.length != 11) {
    $("#success_message_no").empty()
    $("#error_message_no")
      .empty()
      .html("<p>Invalid Number</p>");
  } else {
    $("#error_message_no").empty();
    $("#success_message_no")
      .empty()
      .html("<p>Valid Number</p>");
  }
});


var blood_group = $("#blood_group");
blood_group.on("input", function () {
  var current_group = blood_group.val();
  var group_array = ["A+","B+","AB+","AB-","A-","B-","O+","O-"];

  if (!group_array.includes(current_group)) {
    $("#success_message_blood").empty()
    $("#error_message_blood")
      .empty()
      .html("<p>Invalid Blood Group</p>");
  } else {
    $("#error_message_blood").empty();
    $("#success_message_blood")
      .empty()
      .html("<p>Valid Blood Group</p>");
  }
});