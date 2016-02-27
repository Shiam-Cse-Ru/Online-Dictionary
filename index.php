<!DOCTYPE html>
<html>
<head>
  
  <style >

.pa{

   width: 500px;
   height: 200px;
   border-radius: 5px 20px 5px;
   border: 3px solid #BADA55;
   padding-left: 100px;


}
.text{
   width: 540px;
   
  border-radius: 5px 20px 5px;
  border: 3px solid #BADA55;
padding-left: 50px;
color:#317eac;
}
.padding1{

padding-left: 80px;
padding-top: 80px;

}
.hint{

padding-left: 90px;

}
.bod{

border: 1px solid #BADA55;
  padding-bottom:300px;

}


.hra{

  padding-right: 50px;
}
  </style>

</head>
<body>
<div class="bod">
<marquee>English to Bengali Dictionary</marquee>
<div class="padding1">
<div class="pa">
<h3 style="color:#317eac;">English to Bengali Dictionary<br>

ইংরেজি টু বাংলা অভিধান</h3>
<div class="hra"><hr></div>

<form action=""> 
<p style="color:#317eac;"><b><font size="5">Search:</font></b> <input type="text" id="txt1" onkeyup="showHint(this.value)" size="50"></p>
</form></div></div>
<br>
<div class="hint"><div class="text"><p><br> <b style="font-size:130%;"><span id="txtHint"></span></b></p></div></div> 

</div>


<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("txtHint").innerHTML = xhttp.responseText;
    }
  }
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
</script>

</body>
</html>

