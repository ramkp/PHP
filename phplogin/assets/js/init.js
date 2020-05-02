$(document).on("submit", "form.register-form", function(event) {
   event.preventDefault();
   var form = $(this);

   var data = {
       email: $("input[type='email']", form).val(),
       password: $("input[type='password']", form).val()
   };

   if (data.email.length < 6) {
       $(".register-error").text('Please enter a valid email').show();
       return false;
   } else if (data.password.length < 11) {
       $(".register-error").text("Please enter a password that is atleast 11 characters long").show();
       return false;
   }
   $(".register-error").hide();
   return false;
});