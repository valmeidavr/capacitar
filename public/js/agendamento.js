       
    $("#hotels_id").change(function() {
        let id = $("#hotels_id").val();
        fetch(`/call_setores/${id}`)
        .then(response => response.json())
        .then(res => {
            $('#setors_id').empty();
            for (i=0; i < res.length; i++) {
                $('#setors_id').append("<option selected value='" + (res[i].id) + "'>" + (res[i].nome) + "</option>");
            }
            $('#setors_id').append("<option hidden value='NULL' selected> Selecione </option>");

        });   
    });
