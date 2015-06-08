document.getElementById('cartao').style.display = 'none';
document.getElementById('payp').style.display = 'none';
document.getElementById('pays').style.display = 'none';

function xyz(){
    
    var e = document.getElementById("paymethod");
    var strUser = e.options[e.selectedIndex].text;
    //alert(strUser);

if(strUser == "Cartão de Crédito"){
    
    document.getElementById('payp').style.display = 'none';
   document.getElementById('pays').style.display = 'none';
   document.getElementById('cartao').style.display = 'block';
   
}

else if(strUser == 'Referência Multibanco'){
        
    document.getElementById('cartao').style.display = 'none';
    document.getElementById('payp').style.display = 'none';
    document.getElementById('pays').style.display = 'block';
    
        
}

else{
    
    document.getElementById('cartao').style.display = 'none';
    document.getElementById('pays').style.display = 'none';
    document.getElementById('payp').style.display = 'block';
    
    
}
    
}