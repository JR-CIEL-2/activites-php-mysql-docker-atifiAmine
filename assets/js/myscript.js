var inputs = document.getElementsByTagName("input");

function verifierFormulaire(){
    
    verifierName();
    verifierFirst_Name();
    verifierEmail();
    verifPassword();

    function verifierName(Name){
        var Name = inputs[0];
        if (Name.value=== ''){
            Name.classList.add('is-invalid');
            Name.classList.remove('is-valid');
            alert("Veuillez entrer un nom");
        }else{
            Name.classList.add('is-valid');
            Name.classList.remove('is-invalid');
        }
    }

    function verifierFirst_Name(First_Name){
        var First_Name = inputs[1];
        if (First_Name.value=== ''){
            First_Name.classList.add('is-invalid');
            First_Name.classList.remove('is-valid');
            alert("Veuillez entrer un prénom");
        }else{
            First_Name.classList.add('is-valid');
            First_Name.classList.remove('is-invalid');
        }
    }


    function verifierEmail(Email){
        var Email = inputs[2];
        if (Email.value.length>7 && Email.value.includes("@")){
            Email.classList.add('is-valid');
            Email.classList.remove('is-invalid');
        }else{
            Email.classList.add('is-invalid');
            Email.classList.remove('is-valid');
        }
    }
        

    function verifPassword(password){
        var password = inputs[3];
        if(password.value.length<8){
            password.classList.add('is-invalid');
            password.classList.remove('is-valid');
            alert("veuiullez entrer un mot de passe de 8 caractères minimum");
        }else{
            password.classList.add('is-valid');
            password.classList.remove('is-invalid');
        }


    }


    

}
