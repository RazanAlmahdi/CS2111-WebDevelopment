window.onload = function()
{
  var myform = document.getElementById("mainForm");
 myform.onsubmit = function(e)
 {

   var allRequired = document.querySelectorAll(".required");
   var checkedValue = document.getElementById("myCheck").checked;
   var CBrequired = document.getElementById("CBrequired");

   for (var i=0; i<allRequired.length; i++)
   {
     if (allRequired[i].value == '' || allRequired[i].value == null)
     {
       allRequired[i].style.backgroundColor = "#FF0000";
       e.preventDefault();
     }
     else
       allRequired[i].style.backgroundColor = "#FFFFFF";
   }

   if (checkedValue==false)
   {
     CBrequired.style.backgroundColor = "#FF0000";
     e.preventDefault();
   }
   else
     CBrequired.style.backgroundColor = "#EBF4FB";
 }


 var required = document.getElementsByClassName("required");
 var checkbox = document.getElementById("myCheck");

 function myFun(required)
 {
   required.style.backgroundColor = "#FFFFFF";
 }

 for (let i = 0; i < required.length; i++)
 {
   required[i].addEventListener("keyup", () => myFun(required[i]));
 }

 checkbox.addEventListener('change', function() {
 if (this.checked) {
   checkbox.parentElement.style.backgroundColor="#EBF4FB";
 } else {
   checkbox.parentElement.style.backgroundColor="#FF0000";
 }
});

}
