$( document ).ready(function() {
    $("#btn").click(
        function(){
            sendAjaxForm('ajax_form', 'AddForm');
            return false;
        }
    );
});

$( document ).ready(function() {
    $("#UpBtn").click(
        function(){
            sendAjaxForm('ajax_form_change', 'UpdateForm');
            return false; 
        }
    );
});

$( document ).ready(function() {
    $("#DeleteBtn").click(
        function(){
            sendAjaxForm('ajax_delete_form', 'DeleteForm');
            return false; 
        }
    );
});

function sendAjaxForm(ajax_form, url) {
    $.ajax({
        url:     url,
        type:     "POST",
        data: $("#"+ajax_form).serialize(),
        success: function(response) {
            location.reload();
        },
        error: function(response) {
            alert('Error');
        }
    });
}
