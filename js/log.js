// validate login form using js file

    //customer name, email, password, country, city, contact.
    function validate() {  
        var email = document.reg_form.email;
        var password = document.reg_form.password;

        if (email.value.length <= 0) {  
            alert("Email is required");  
            email.focus();  
            return false;  
        } 
        if (password.value.length <= 0) {  
            alert("Password is required");  
            password.focus();  
            return false;  
        }  
        return false;
    } 
         

// regular expression for form validation.
// validate email
    function validate() {
        // checking for empty feilds in email 
        let emailTest = document.myForm.email.value.search(/^(?=.\d)(?=.[!@#$%^&])(?=.[a-z])(?=.*[A-Z]).{8,}$/)
        if (document.myForm.email.value == "" || emailTest == -1) {
            alert("Enter a valid email!");
            document.myForm.email.focus();
            return false;
        }
    }