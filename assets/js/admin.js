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

    $(document).on("click", ".btn_edit", function(){
        const id = $(this).data("id");
    })

    $(document).on("click", ".btn_delete", function(){
        const id = $(this).data("id");
    })

    $(document).on("click", ".btn-add_user", function(){
        $("#add_modal").modal()
    })

})