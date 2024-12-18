$(document).ready(function() {
    $('#registrationForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            success: function(response) {
                // Display the response from the server
                $('body').html(response);
            },
            error: function() {
                alert('An error occurred. Please try again.');
            }
        });
    });
});