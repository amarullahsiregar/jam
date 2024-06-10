$(document).ready(function () {
  setInterval(function () {
    $("#time").load("timestamp.php");
  }, 1000);
});
