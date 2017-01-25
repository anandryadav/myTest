$(document).ready(function() {
    $("#input").focus();
    $(function() {
        $("#submit").click(function() { 
            var n = $('#input').val();  
            //field validation           
            if (n.length == 0) {                
                $('#input').next('div.red').remove();
                $('#input').after('<div class="red">Field is Required</div>');
            }
            else{
                $('#input').next('div.red').remove();
                //fourmula for 
                var result = n*(n-1)/2 ;               
                $("#result").text(result);
            }     
        });
    });
       
});
