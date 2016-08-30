
<script>

const ResetPassword = document.getElementById('ResetPassword');
const btnResetPassword = document.getElementById('btnResetPassword');



//reset current users password

btnResetPassword.addEventListener('click', e=>{
 
var email = auth.currentUser.email;
const promise = auth.sendPasswordResetEmail(email);
 ResetPassword.innerHTML ="Password Reset Email Sent";

});

// persist and grab token on refresh or different page

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    user.getToken().then(function(data) {
      
    });
  }
});

</script>