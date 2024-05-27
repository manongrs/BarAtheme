$(document).ready(function() {
    $.ajax({
        url: 'fetch_books.php',
        method: 'GET',
        success: function(data) {
            $('#book-list').html(data);
        },
        error: function() {
            alert('Erreur lors du chargement des livres.');
        }
    });
});
