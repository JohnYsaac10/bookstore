function validateForm(){


  var x = document.getElementById("inputEmail").value;
  if (x == "") {
    document.getElementById("inputEmail").classList.add('is-invalid');
    document.getElementById("spanEmail").innerHTML = "Please enter email";
    return false;
  }
  else{
    document.getElementById("inputEmail").classList.remove('is-invalid');
    document.getElementById("spanEmail").innerHTML = "";
   // return false;
  }




  var y = document.getElementById("input_password").value;
  if (y == "") {
    document.getElementById("input_password").classList.add('is-invalid');
    document.getElementById("spanPassword").innerHTML = "Please enter Password";
    return false;
  }
  else{
    document.getElementById("input_password").classList.remove('is-invalid');
    document.getElementById("spanPassword").innerHTML = "";
    //return false;
  }



  

  
}

