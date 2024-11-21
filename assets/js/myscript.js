var inputs = document.getElementsByTagName("input");

function verifierFormulaire(){
    
    verifierName();
    verifierFirst_Name();
    verifierEmail();
    verifPassword();
    verifcase();
    

    function verifierName(){
        var Name = inputs[0];
        if (Name.value=== ''){
            Name.classList.add('is-invalid');
            Name.classList.remove('is-valid');
        }else{
            Name.classList.add('is-valid');
            Name.classList.remove('is-invalid');
        }
    }

    function verifierFirst_Name(){
        var First_Name = inputs[1];
        if (First_Name.value=== ''){
            First_Name.classList.add('is-invalid');
            First_Name.classList.remove('is-valid');
        }else{
            First_Name.classList.add('is-valid');
            First_Name.classList.remove('is-invalid');
        }
    }


    function verifierEmail(){
        var Email = inputs[2];
        if (Email.value.length>7 && Email.value.includes("@")){
            Email.classList.add('is-valid');
            Email.classList.remove('is-invalid');
        }else{
            Email.classList.add('is-invalid');
            Email.classList.remove('is-valid');
        }
    }
        

    function verifPassword(){
        var password = inputs[3];
        var erreur_message = document.querySelector(".text-danger");
        if(password.value.length<8){
            password.classList.add('is-invalid');
            password.classList.remove('is-valid');
            erreur_message.classList.remove("invisible");
            
        }else{
            password.classList.add('is-valid');
            password.classList.remove("is-invalid");
            erreur_message.classList.add("invisible");
        }
    }
    
    function verifcase(){
       var check = document.querySelector("input[type='checkbox']");
       if(check.checked){
        check.classList.add('is-valid');
        check.classList.remove('is-invalid');
    }else{
        check.classList.add('is-invalid');
        check.classList.remove('is-valid');
    }
       }
       
    }

verifierFormulaire();
    


