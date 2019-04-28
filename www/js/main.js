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
                    $('#success-body').html("Thanks for you feedback!");
                    $('#success-wind').modal('show');
                    $('#feedback-message').val('');
                    if($('#info-email') != null)
                        $('#fdb-all').append(data.fdb);
                }
                else {
                    if(data.tag == 'register'){
                        $('#success-body').html(data.message);
                        $('#success-wind').modal('show');
                    }
                    location.reload();
                }

            }
            else {
                $('#fail-body').html('Server answer: ' + data.message);
                $('#fail').modal('show');
            }
        }
    });
    e.preventDefault();
})

/**
 *  show content which may be hidden for guests
 */
