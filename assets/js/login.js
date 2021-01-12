$(document).ready(function(){
    
    $(".login_form").submit(function(e){
        
        e.preventDefault();

        const username = $("#username").val();
        const password = $("#password").val();

        $.ajax({
            url:`${base_url}api_process_login`,
            type:"POST",
            data: {username: username, password: password},
            beforeSend: function(res){
                $("#btn_login").html("Processing...").attr("disabled", true);
            },
            success: function(res){
                const result = JSON.parse(res);

                console.log(result)
                $("#btn_login").html("Submit").attr("disabled", false);

                if(result.status != "success"){
                    $("#login_alert").show().find(".alert_message").html(result.message)
                }
                else{
                    window.location.href = `${base_url}dashboard`;
                }
            }
        })

    })


})