/**
 * Get data from smth
 *
 * @param obj_form current html-block
 */
function getData(obj_form) {
    let hData = {};
    $('input, select', obj_form).each(function () {
        if(this.name && this.name != ''){
                hData[this.name] = this.value;
                console.log('hData[' + this.name + '] = ' + hData[this.name]);
            }
            else return false;
    });
    return hData;

}
/**
 * register ajax-request
 */
function registerNewUser() {
    let postData = getData('#register-form');
    $.ajax({
        type: 'POST',
        async: false,
        data: postData,
        dataType: 'json',
        url: "/user/register/",
        success: function (data) {
            alert('result: ' + data.success);
        },

    });
}

/**
 * sign in ajax-request
 */
function loginUser(){
    let postData = getData('#login-form');
    $.ajax({
        type: 'POST',
        async: false,
        data: postData,
        dataType: 'json',
        url: "/user/login/",
        success: function (data) {
            alert('result: ' + data.success);
        },

    });
}


/**
 * show datepicker
 */
$('#birth-date').datepicker({
    uiLibrary: 'bootstrap4'
});


