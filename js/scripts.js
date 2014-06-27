function allnumeric(inputtxt)  
   {  
      var numbers = /^[0-9]+$/;  
      if(inputtxt.value.match(numbers))  
      {  
      alert('Your Registration number has accepted....');  
      document.form1.age.focus();  
      return true;  
      }  
      else  
      {  
      alert('Please input numeric characters only');  
      document.form1.age.focus();  
      return false; 
	  
      }  
   }  
