       var sum = 0;
       var qt = 0;
        $('.item__price').each(function(){
        sum += parseFloat($(this).text());  //Or this.innerHTML, this.innerText
    });
         $('#quantity').each(function(){
        qt += parseFloat($(this).text());  //Or this.innerHTML, this.innerText
    });	

        $(".sum").text(sum);
        $(".taxes").text(sum*0.05);
        $(".total").text(sum + sum*0.05);

       /*$(document).ready(
            function() {
                setInterval(function() {
                    var randomnumber = Math.floor(Math.random() * 100);
                    $('.item__price').text(randomnumber);
                }, 3000);
            });*/

       var elem = document.querySelectorAll( '#' + quantity);
       var text = elem[0].innerHTML;
