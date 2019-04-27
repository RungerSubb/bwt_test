/**
 *  ajax-request function
 */
$('form').submit(function(e) {
    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize(),
        dataType: 'json',
        success: function (data) {
            if(data.success) {
                if (data.tag == 'feedback') {
                    document.getElementById('success-body').innerHTML = 'Thanks for you feedback!';
                    $('#success-wind').modal('show');
                }
                else if(data.tag == 'quit'){
                    setGuestView();
                }
                else{
                    setUserView(data);
                }
            }
            else {
                document.getElementById('fail-body').innerHTML = 'Server answer: ' + data.message;
                $('#fail').modal('show');
            }
        }
    });
    e.preventDefault();
})

function setUserView(data){
    let guestElements = $('.guest');
    $.each(guestElements, function () {
        $(this).addClass("d-none");
    })
    let userElements = $('.user');
    $.each(userElements, function () {
        $(this).removeClass("d-none");
    })
    $('#info-name').val(data.name);
    $('#info-lastName').val(data.lastName);
    $('#info-email').val(data.email);

    $('#feedback-email').val(data.email);
    $('#feedback-name').val(data.name);
    $('#feedback-email').prop("disabled", true);
    $('#feedback-name').prop("disabled", true);
}
function setGuestView() {
    let guestElements = $('.user');
    $.each(guestElements, function () {
        $(this).addClass("d-none");
    })
    let userElements = $('.guest');
    $.each(userElements, function () {
        $(this).removeClass("d-none");
    })
    $('#feedback-email').val('');
    $('#feedback-name').val('');
    $('#feedback-email').prop("disabled", false);
    $('#feedback-name').prop("disabled", false);
}