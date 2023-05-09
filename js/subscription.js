// // EMAIL VALIDATION
// $(document).on('submit','#userForm',function(e)
// {
//     e.preventDefault();
//            var regEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
//     var email = $('#email').val();          
//        if(email.trim() == '' ) {          
//   $('#emailError').text('Please enter email.').removeClass('hidden');
//   $('#nameError').text('').addClass('hidden');
//         $('#email').focus();
//         return false;
//     } else if(email.trim() != '' && !regEmail.test(email)) {          
//   $('#emailError').text('Please enter a valid email.').removeClass('hidden');
//   $('#nameError').text('').addClass('hidden');
//         $('#email').focus();
//         return false;
//     } 
//     else {      

//         alert("I am now going to backend.");
//         // AJAX
//         // $.ajax(
//         //     {
//         //         method:"POST",
//         //         url: "../actions/subs.php",
//         //         data:$(this).serialize(),
//         //         beforeSend: function() 
//         //         {
//         //             $("#subloader").show();
//         //         },
//         //         success: function(data)
//         //         {
//         //         $('#msgsub').html(data);
//         //         $("#subloader").hide();
//         //         $('#userForm').find('input').val('');
//         //         $('#form_area').hide();
//         //         }
//         //     }
//         // );
//     }
// });