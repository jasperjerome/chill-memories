$(document).ready(function() {

    // itinerary create form
    $('#itinerary-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting the traditional way
        
        $.ajax({
            url: '/app/itinerary/store',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                // console.log(response);
                if(response.success) {
                    console.log('Itinerary Created Successfully');
                    
                    // Clear the form
                    $('#itinerary-form')[0].reset();
                } else {
                    alert('There was an error creating the itinerary');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                console.error('Status:', status);
                console.error('Response:', xhr.responseText);
                alert('There was an error creating the itinerary. Check the console for more details.');
            }
        });
    });




});