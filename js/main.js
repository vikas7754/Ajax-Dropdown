$(document).ready(function () {
  $("#form").submit(function (e) {
    let dataString = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "getData.php",
      dataType: "json",
      data: dataString,
      cache: false,
      success: function (carData) {
        if (carData.length !== 0) {
          console.log(carData);
          let str = "";
          for (let i = 0; i < carData.length; i++) {
            str += "<li>" + JSON.stringify(carData[i]) + "</li>";
          }
          $("#error").text("");
          document.getElementById("content").innerHTML = str;
        } else {
          console.log("No data found");
          $("#error").text("No data found");
          $("#content").text("");
        }
      },
    });
    e.preventDefault();
  });
});
