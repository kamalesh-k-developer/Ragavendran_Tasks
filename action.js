$(document).ready(function () {
  $("#manage_user").submit(function ( ) {
    e.preventDefault();

    $.ajax({
      url: "sub.php" ,
      data: $(this).serialize(),
      method: "POST",
      success: function (resp) {
        $("#error_msg").html(resp);
      },
    });
  });
});
