
/*form validation*/
function validation()
{
 var user = document.getElementById('user').value;
   if(user == "")
   {
       document.getElementById('userr').innerHTML="**please write name**";
   }

   var cert = document.getElementById('cert').value;
   if(cert == "")
   {
       document.getElementById('certt').innerHTML="**enter your ID. no**";
   }

   var email = document.getElementById('email').value;
   if(email == "")
   {
       document.getElementById('emaill').innerHTML="**please enter your email**";
   }

   var phone = document.getElementById('phone').value;
   if(phone == "")
   {
       document.getElementById('phonee').innerHTML="**please write your phone no**";
   }

   var address = document.getElementById('address').value;
   if(address == "")
   {
       document.getElementById('addresss').innerHTML="**fill in your Address**";
   }

}
