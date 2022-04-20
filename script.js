$(document).ready(function () {
  $.ajax({
    dataType: "JSON",
    type: "POST",
    url: "main.php",
  });
});
