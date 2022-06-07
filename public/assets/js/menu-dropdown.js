 $(document).ready(function() {
        $('#dropdownElement').click(function() {
            if($( "#dropdownElement a" ).hasClass( "active" )){
                $( "#dropdownElement a" ).removeClass("active");
                $('#dropdownElement ul').removeClass("dropdownElement-show");
                $('#dropdownElement ul').removeClass("show");
        

            }
            else{


        $('#dropdownElement a').addClass("active");
        $('#dropdownElement ul').addClass("dropdownElement-show");
        $('#dropdownElement ul').addClass("show");
        }
    });
    });