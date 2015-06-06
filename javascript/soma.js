  var sum = 0;
       var qt = 0;
        $('.item__price').each(function(){
        sum += parseFloat($(this).text());  //Or this.innerHTML, this.innerText
    });

        $(".sum").text(sum);
        $(".taxes").text(sum*0.05);
        $(".total").text(sum + sum*0.05);