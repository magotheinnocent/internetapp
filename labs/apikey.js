$(document).ready(function(){
    $('#api-key-btn').click(function (event) {
        var confirm_key = confirm("You are about to generate a new api key");
        if(!confirm_key){
            return;
        }
        $.ajax({
            url: "private_page.php",
            type: "post",
            success: function (data) {
                if (data['success'] == 1){
                    $('#api_key').val(data['message']);
                }
                else{
                    alert("Something went wrong. Please try again");
                }
            }
        });
    });
});