function showSuggestion(str){
    



    if(str.length == 0){
        $("#output-field").html("");
    } else {
        $.ajax({
            type: "POST",
            url: "./dict_suggest.php",
            data: {
                string: str
            },
            dataType: "json",
            success: function (response) {
                console.log(response['content']);
                $("#output-field").html(response['content']);
            },
            error: function (response) {
                console.log("Error: ");
                console.log(response);
            }
        });
    }
}


$(document).ready(function () {
    $("#input-field").keyup(function (e) {
        e.preventDefault();
        showSuggestion(e.currentTarget.value);
    });
});