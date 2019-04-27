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

                }
                else{
                    $('#t11').addClass('d-none');
                    $('#t12').removeClass('d-none');
                    $('#t21').addClass('d-none');
                    $('#t22').removeClass('d-none');
                    $('#nav-first-tab').removeClass('d-none');
                    $('#nav-second-tab').innerHTML = 'Weather';
                    $('#nav-third-tab').innerHTML = 'Feedback list';
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

