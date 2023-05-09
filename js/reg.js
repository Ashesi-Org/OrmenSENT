// validate registration form using js file

    //customer name, email, password, country, city, contact.
    function validate() {  
        var fname = document.reg_form.fname;  
        var email = document.reg_form.email;
        // var password = document.reg_form.password;
        var country = document.reg_form.country;
        var city = document.reg_form.city;
        var contact = document.reg_form.contact;

        if (fname.value.length <= 0) {  
            alert("Name is required");  
            fname.focus();  
            return false;  
        }
        if (email.value.length <= 0) {  
            alert("Email is required");  
            email.focus();  
            return false;  
        } 
        // if (password.value.length <= 0) {  
        //     alert("Password is required");  
        //     password.focus();  
        //     return false;  
        // } 
        if (country.value.length <= 0) {  
            alert("Country is required");  
            country.focus();  
            return false;  
        } 
        if (city.value.length <= 0) {  
            alert("City is required");  
            city.focus();  
            return false;  
        } 
        if (contact.value.length <= 0) {  
            alert("Contact is required");  
            contact.focus();  
            return false;  
        } 
        return false;
    }  


// regular expression for form validation.
    //customer name, email, password, country, city, contact.

    function validate() {
        // checking for empty feilds in name  
        let fnameTest = document.myForm.fullname.value.search(/^[a-zA-Z]{4,}(?: [a-zA-Z]+)?(?: [a-zA-Z]+)?$/)
        if (document.myForm.fullname.value == "" || fnameTest == -1) {
            alert("Name can only contain alphabets and spaces");
            document.myForm.fullname.focus();
            return false;
        }
    
        // validate email
        // checking for empty feilds in email 
        let emailTest = document.myForm.email.value.search(/^(?=.\d)(?=.[!@#$%^&])(?=.[a-z])(?=.*[A-Z]).{8,}$/)
        if (document.myForm.email.value == "" || emailTest == -1) {
            alert("Enter a valid email!");
            document.myForm.email.focus();
            return false;
        }
    
        // validate contact
        let contactTest = document.myForm.contact.value.search(/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/)
        if (document.myForm.contact.value == "" || contactTest == -1) {
            alert("Contact must be digits only");
            document.myForm.contact.focus();
            return false;
        }
        return (true);
    }
    

    



















  