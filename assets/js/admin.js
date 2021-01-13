$(document).ready(function(){
    
    generate_table();

    function generate_table (){
        $.ajax({
            url:`${base_url}api_getdata_table`,
            type:"GET",
            beforeSend: function(res){
                const html = "<tr><td colspan='7'><h3 class='text-center'>Processing...</h3></td></tr>"
                $("#user_table tbody").html(html);
            },
            success: function(res){
                let thedata = JSON.parse(res);
                let html = "";
                let tbldata = thedata.data.sort((a, b) => b - a);
                thedata.data.map(dta => {
                    html+= `
                        <tr>
                            <th scope="row">ID-${dta.user_id}</th>
                            <td>${dta.firstname}</td>
                            <td>${dta.lastname}</td>
                            <td>${dta.age}</td>
                            <td>${dta.gender}</td>
                            <td>${dta.date_added}</td>
                            <td>
                                <button data-id="${dta.user_id}" class="btn btn-success btn_edit">Edit</button>
                                <button data-id="${dta.user_id}" class="btn btn-danger btn_delete">Delete</button>
                            </td>
                        </tr>
                    `
                })
                $("#user_table tbody").html(html);
            }
        })
    }

    $("#form_add_user").submit(function(e){
        e.preventDefault()

        const password = $("#txtPassword").val();
        const username = $("#txtUsername").val();
        const checkPass = check_password(password);

        if(checkPass != "ok"){
            $("#alert_error_add").show().html(checkPass);
        }
        else if(username.length < 5){
            $("#alert_success_add").hide()
            $("#alert_error_add").show().html("Username must at least 5 letters");
        }
        else{
            $.get(`${base_url}api_get_all_user`, function(res){

                const result = JSON.parse(res);
                if(result.status == "success"){
                   const is_exist =  result.data.find(dta => dta.username.toLowerCase() == username.toLowerCase());
                
                   if(is_exist!= undefined){
                        $("#alert_error_add").show().html("Username is already used!");
                        $("#alert_success_add").hide()
                        return;
                   }
                }
                const con = confirm("Are you sure to save this user?");
                if(con){

                    const fdata = deserialize($('#form_add_user').serializeArray());
                    
                    $.post(`${base_url}api_save_user`, fdata , function (res){
                        const result = JSON.parse(res);
                        if(result.status == "success"){
                            $("#alert_success_add").show().html(result.message);
                            $("#alert_error_add").hide();
                            $("#form_add_user input, #form_add_user select").val("");
                            setTimeout(() => {
                                $("#add_modal").modal("hide")
                            }, 1000);
                            generate_table()
                        }
                    })
                }      
            })
           
        }
    })

    $(document).on("click", ".btn_edit", function(){
        const id = $(this).data("id");
    })

    $(document).on("click", ".btn_delete", function(){
        const id = $(this).data("id");

        const con = confirm ("Are you sure to delete this user?");
        if(con){

            $.post(`${base_url}api_delete_user`, {user_id : id}, function(res){
                const result = JSON.parse(res);
                if(result.status == "success"){
                    $("#alert_success_div").show().html("Deleted Successfully!");
                    generate_table()
                    setTimeout(() => {
                        $("#alert_success_div").hide()
                    }, 1500);
                }

            })

        }
    })

    $(document).on("click", ".btn-add_user", function(){
        $("#add_modal").modal()
    })

    function deserialize (arr){

        let res = {}
        
        arr.map(dta => {
            res[dta.name] = dta.value;
        })
        return res;

    }

    function check_password(pass){

        if(pass.length < 8){
            return "Password must be 8 characters!";
        }
        else if(pass.search(/\d/) == -1){
            return "Password must have a number!";
        }
        else if(!hasLetters(pass)){
            return "Password must have a letters!";
        }
        else if(!hasUppercase(pass)){
            return "Password must have a capital letter!";
        }
       
        return "ok";

    }

    function hasUppercase (pass){
        let res = false;
        for (let i = 0; i < pass.length; i++) {
            if(pass.charAt(i) == pass.charAt(i).toUpperCase() && isNaN(pass.charAt(i))){
                res = true
            }
        }
        return res;
    }

    function hasLetters (pass){
        let res = false;
        for (let i = 0; i < pass.length; i++) {
            if(isNaN(pass.charAt(i))){
                res = true;
            }
        }
        return res;
    }
})