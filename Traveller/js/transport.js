var transport_btn = $("#search_transport_btn");
transport_btn.click(function () {
  var transport_type = $("#transport").val();
  var from_location = $("#from_location").val();
  $.ajax({
    url: "../controller/AjaxController.php",
    method: "post",
    data: {
      vehicle_type: transport_type,
      from_location: from_location,
    },
    success: function (response) {
      $(".search_result").empty().html(response);
    },
  });
});
