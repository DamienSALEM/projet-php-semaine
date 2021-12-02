var today = new Date();
    var date = today.getDate() + ' / ' + (today.getMonth() + 1) + ' / ' + today.getFullYear();
    var time = today.getHours() + ":" + today.getMinutes();
    var dateTime = date + ' ' + time;
    document.getElementById("time").innerHTML = dateTime;

// function startTime() {
//     var today = new Date();
//     var h = today.getHours();
//     var m = today.getMinutes();
//     var s = today.getSeconds();
//     m = checkTime(m);
//     s = checkTime(s);
//     document.getElementById('time').innerHTML =
//     h + ":" + m + ":" + s;
//     var t = setTimeout(startTime, 500);
// }
// function checkTime(i) {
//     if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
//     return i;
// }

// setInterval(function(){ 
//     var today = new Date();
//     var date = today.getDate() + ' / ' + (today.getMonth() + 1) + ' / ' + today.getFullYear();
//     var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
//     var dateTime = date + ' ' + time;
//     document.getElementById("time").inanerHTML = dateTime;
// }, 1000);   


function EffacerReservation() {
  document.getElementById("reservations").deleteRow(1);
}

function EffacerArticle() {
    document.getElementById("articles").deleteRow(1);
  }


