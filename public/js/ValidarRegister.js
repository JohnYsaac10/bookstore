let textPhone=document.getElementById("inputPhone");
let texBoxx=document.getElementById("inputPassword");
let textPassword=document.getElementById("inputConfirm_password");

// validate password match with confirm password
textPassword.onkeyup = function(){
    var a = document.getElementById("inputPassword").value;
    if (a == "") {                                                          //-------------------
        document.getElementById("inputPassword").classList.add('is-invalid');
        document.getElementById("spanPassword").innerHTML = "Please enter Password";
        
    }else{
        document.getElementById("inputPassword").classList.remove('is-invalid');
        document.getElementById("spanPassword").innerHTML = "";
        
    }
    var b = document.getElementById("inputConfirm_password").value;
    if(a != b){
        document.getElementById("inputConfirm_password").classList.add('is-invalid');
        document.getElementById("spanConfirm_password").innerHTML = "Password do not match";
        
        
    }else{
        document.getElementById("inputConfirm_password").classList.remove('is-invalid');
        document.getElementById("spanConfirm_password").innerHTML = "";
        
    }

}

//validando numero en campo telefono
textPhone.onkeyup = function(){
    var lowerCaseLetters = /[a-z]/g;
    if(textPhone.value.match(lowerCaseLetters)) { 
        textPhone.classList.add("is-invalid");
    
    }else{
        textPhone.classList.remove("is-invalid");
    }
}
//   validando estructura de contrase;a


texBoxx.onkeyup = function(){
    let lc=true, cp=true, nm=true, c8=true;
    var lowerCaseLetters = /[a-z]/g;
    if(texBoxx.value.match(lowerCaseLetters)) { 
      texBoxx.classList.add("is-invalid");
      document.getElementById("lower").innerHTML= '';
      lc=true;
    }
    else{
      texBoxx.classList.add("is-invalid");
      document.getElementById("lower").innerHTML= 'lowercase, ';
      lc=false;
    }
  
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(texBoxx.value.match(upperCaseLetters)) { 
        texBoxx.classList.add("is-invalid");
        document.getElementById("upper").innerHTML= '';
        cp=true;
    }else{
        texBoxx.classList.add("is-invalid");
        document.getElementById("upper").innerHTML= 'uppercase, ';
        cp=false;
    }
  
    // Validate numbers
    var numbers = /[0-9]/g;
    if(texBoxx.value.match(numbers)) { 
        texBoxx.classList.add("is-invalid");
        document.getElementById("numero").innerHTML= '';
        nm=true;
    }else{
        texBoxx.classList.add("is-invalid");
        document.getElementById("numero").innerHTML= 'number, ';
        nm=false;
    }
  
    // Validate length
    if(texBoxx.value.length >= 8) {
        texBoxx.classList.add("is-invalid");
        document.getElementById("minimo").innerHTML= '';
        c8=true;
    } 
    else{
        texBoxx.classList.add("is-invalid");
        document.getElementById("minimo").innerHTML= 'Minimum 8 characters, ';
        c8=false;
    }

    if((lc && nm && c8 && cp)){
        texBoxx.classList.remove("is-invalid");
        texto.innerHTML= '';
    }
    
}



function validateForm(){
    
    let name, surmane, adress, phone, email, username, password, confirmpassword, equalpassword;
    var iname = document.getElementById("inputName").value;
    if (iname == "") {                                                          //-------------------
        document.getElementById("inputName").classList.add('is-invalid');
        document.getElementById("spanName").innerHTML = "Please enter Name";
        name= false;
    }
    else{
        document.getElementById("inputName").classList.remove('is-invalid');
        document.getElementById("spanName").innerHTML = "kaka";
        name= true;
    }
    var isurname = document.getElementById("inputSurname").value;
    if (isurname == "") {                                                          //-------------------
        document.getElementById("inputSurname").classList.add('is-invalid');
        document.getElementById("spanSurname").innerHTML = "Please enter Surname";
        surmane= false;
    }else{
        document.getElementById("inputSurname").classList.remove('is-invalid');
        document.getElementById("spanSurname").innerHTML = "kaka";
        surmane= true;
    }
    var iadress = document.getElementById("inputAdress").value;
    if (iadress == "") {                                                          //-------------------
        document.getElementById("inputAdress").classList.add('is-invalid');
        document.getElementById("spanAdress").innerHTML = "Please enter Adress";
        adress= false;
    }else{
        document.getElementById("inputAdress").classList.remove('is-invalid');
        document.getElementById("spanAdress").innerHTML = "";
        adress= true;
    }
    var iphone = document.getElementById("inputPhone").value;
    if (iphone == "") {                                                          //-------------------
        document.getElementById("inputPhone").classList.add('is-invalid');
        document.getElementById("spanPhone").innerHTML = "Please enter Phone";
        phone= false;
    }else{
        document.getElementById("inputPhone").classList.remove('is-invalid');
        document.getElementById("spanPhone").innerHTML = "";
        phone= true;
    }
    var iemail = document.getElementById("inputEmail").value;
    if (iemail == "") {                                                          //-------------------
        document.getElementById("inputEmail").classList.add('is-invalid');
        document.getElementById("spanEmail").innerHTML = "Please enter Email";
        email= false;
    }else{
        document.getElementById("inputEmail").classList.remove('is-invalid');
        document.getElementById("spanEmail").innerHTML = "";
        email= true;
    }
    var iusername = document.getElementById("inputUsername").value;
    if (iusername == "") {                                                          //-------------------
        document.getElementById("inputUsername").classList.add('is-invalid');
        document.getElementById("spanUsername").innerHTML = "Please enter User name";
        username=false;
    }else{
        document.getElementById("inputUsername").classList.remove('is-invalid');
        document.getElementById("spanUsername").innerHTML = "";
        username=true;
    }
    var a = document.getElementById("inputPassword").value;
    if (a == "") {                                                          //-------------------
        document.getElementById("inputPassword").classList.add('is-invalid');
        document.getElementById("spanPassword").innerHTML = "Please enter Password";
        password=false;
    }else{
        document.getElementById("inputPassword").classList.remove('is-invalid');
        document.getElementById("spanPassword").innerHTML = "";
        password=true;
    }
    var b = document.getElementById("inputConfirm_password").value;
    if (b == "") {                                                          //-------------------
        document.getElementById("inputConfirm_password").classList.add('is-invalid');
        document.getElementById("spanConfirm_password").innerHTML = "Please Confirm Password";
        confirmpassword= false; 
    }else{
        document.getElementById("inputConfirm_password").classList.remove('is-invalid');
        document.getElementById("spanConfirm_password").innerHTML = "";
        confirmpassword=true;
    }
    if(a != b){
        document.getElementById("inputConfirm_password").classList.add('is-invalid');
        document.getElementById("spanConfirm_password").innerHTML = "Password do not match";
        equalpassword=false
        
    }else{
        document.getElementById("inputConfirm_password").classList.remove('is-invalid');
        document.getElementById("spanConfirm_password").innerHTML = "";
        equalpassword=true;
    }

    if(!(name && surmane && adress && phone && email && username && password && confirmpassword && equalpassword)){
        return false;
        alert("return false");
    }
    
}
