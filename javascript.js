    
    function validate() {
    
        var f_name = document.myForm.firstname.value;
        var f_regx = /^[A-Za-z ]{1,20}$/;
    
        var l_name = document.myForm.lastname.value;
        var l_regx1 = /^[A-Za-z ]{1,20}$/;
    
        var working_email = document.myForm.workemail.value;
        var E_regx = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    
        if (!f_regx.test(f_name)) {
            alert("Incorrect First Name");
            return false;
        }
    
        if (!l_regx1.test(l_name)) {
            alert("Incorrect Last Name");
            return false;
        }
    
        if (!E_regx.test(working_email)) {
            alert("Incorrect Email");
            return false;
        }
    
        return true;
    }
