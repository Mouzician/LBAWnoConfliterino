  function Increase(nome) {
      
    //alert(nome);
    var y = document.getElementById(nome).innerHTML;
      
    var z = document.getElementById(nome + "price").innerHTML;
      
    var x = document.getElementById(nome + "hidden").value;
      
    //alert(z);

    document.getElementById(nome).innerHTML = Number(y) + 1 ;
    document.getElementById(nome + "price").innerHTML = Number(z) + Number(x);
      
          var sum = 0;
       var qt = 0;
        $('.item__price').each(function(){
        sum += parseFloat($(this).text());  //Or this.innerHTML, this.innerText
    });

        $(".sum").text(sum);
        $(".taxes").text(sum*0.05);
        $(".total").text(sum + sum*0.05);

      }

 function Decrease(nome) {
     
        var y = document.getElementById(nome).innerHTML;
     
        var z = document.getElementById(nome + "price").innerHTML;
      
        var x = document.getElementById(nome + "hidden").value;
     
     if(y <= 1){
           
        alert("A quantidade não pode ser inferior a zero!"); 
     }
     
     else{
         
        document.getElementById(nome).innerHTML = Number(y) - 1 ;
        document.getElementById(nome + "price").innerHTML = Number(z) - Number(x);
         
           var sum = 0;
       var qt = 0;
        $('.item__price').each(function(){
        sum += parseFloat($(this).text());  //Or this.innerHTML, this.innerText
    });

        $(".sum").text(sum);
        $(".taxes").text(sum*0.05);
        $(".total").text(sum + sum*0.05);
     }
  } 

function CheckItOut() {
    
    var num = document.getElementById("checkoutt").innerHTML;
    
    var n = Number(num).toFixed(2);

    
    window.open('view_payment.php?price='+n, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=500, left=500, width=800, height=500");

    
}
