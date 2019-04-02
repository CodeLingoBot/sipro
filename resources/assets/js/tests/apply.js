import $ from "jquery";

$(function() {
function make(email) {
    const span = $("<span class='badge badge-secondary'>" + email + "</span>");
    const button = $("<button data-email='" + email + "' class='btn btn-sm btn-danger'>x</button>");
    button.click(function() {
        const email = $(this).data('email');
        $(this).parent().remove();
        process($('#siproTextAreaEmails').val().split('\n').filter(function(value) {
            return value !== email;
        }));
    });
    span.append("<input type='hidden' name='email[]' value='" + email + "'>");
    span.append(button);
    return span;
}

function process(emails) {
    if (emails && emails.length > 0) {
        $('#siproTextAreaEmails').val(emails.join('\n'));
        $('#siproSendButton').removeAttr("disabled");
    }
}

$("#siproAddButton").click(function() {
    const emails = window.siPro.extractEmails($('#siproTextAreaEmails').val());
    const badgesContent = $('#siproEmailsBadges');
    $(emails).each(function(_index, email) {
        if (badgesContent.find('button[data-email="' + email + '"]').length === 0)
            badgesContent.append(make(email));
    });
    process(emails);
});
});