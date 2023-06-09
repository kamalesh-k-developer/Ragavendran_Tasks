
function validatePassword(){
  
    var password = document.getElementById("passwords").value;
    var confirmPassword = document.getElementById("ipassword").value;
    
    if (password != confirmPassword) {
      document.getElementById("message") .innerHTML= "password doesnot match" ;
      document.getElementById("message") .style.color = "Red";
      document.getElementById("ipassword") .style.borderBlockColor= "Red" ;
      document.getElementById("ipassword") .style.boxShadow= "none" ;
      document.getElementById("sub") .disabled = true;
      
      

      return false;
    }
    else{
        document.getElementById("message") .innerHTML = "password match";
        document.getElementById("message") .style.color = "green";
        document.getElementById("ipassword") .style.borderBlockColor= "green" ;
      document.getElementById("ipassword") .style.boxShadow= "none" ;
      document.getElementById("sub") .disabled = false;
 
      
      
        return true;

    }
   
  }