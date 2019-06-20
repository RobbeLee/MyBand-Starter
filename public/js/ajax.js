let loadDocument = document.getElementById("loadDoc");
loadDocument.addEventListener('click', ajax);

function ajax() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("times__title").innerHTML = this.responseText;
      }
    };
    console.log("zover komt ie dan");
    xhttp.open("GET", "js/ajax_info.txt", true);
    xhttp.send();
    console.log("wouw");
  }