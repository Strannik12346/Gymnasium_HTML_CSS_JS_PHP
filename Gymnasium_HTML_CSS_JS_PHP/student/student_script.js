function Effect1(){
  $("#content2,#content3,#content4,#content5").hide();
  $("#content1:hidden").show();
}
function Effect2(){
  $("#content1,#content3,#content4,#content5").hide();
  $("#content2:hidden").show();
}
function Effect3(){
 $("#content1,#content2,#content4,#content5").hide();
 $("#content3:hidden").show();
}
function Effect4(){
 $("#content1,#content2,#content3,#content5").hide();
 $("#content4:hidden").show();
}
function Effect5(){
 $("#content1,#content2,#content3,#content4").hide();
 $("#content5:hidden").show();
}
function Exit(){
 window.location.href = "../../index.php";
}
function mainExit(){
 window.location.href = "../index.php";
}
function Quit(){
 window.location.href = "../start/student_authorization_page.php";
}