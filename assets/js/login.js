$(document).ready(function(){
    
    $(".login_form").submit(function(){
        
        $.ajax({
            url:`${base_url}/api_process_login`,
            type:"POST",
            data: {username: username, password: password},
            beforeSend: function(res){
                console.log("processing")
            },
            success: function(res){
                console.log(res)
                console.log("done")
            }
        })

    })


})