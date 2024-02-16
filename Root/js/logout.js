document.getElementById('logoutLink').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default behavior of the link

    confirmLogout();
});

function confirmLogout() {
    Swal.fire({
        title: 'Logout',
        text: 'Are you sure you want to logout from this website?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes, logout',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Success',
                text: 'Logout Successfully',
                icon: 'success'
            }).then(function() {
                // Redirect to logoutValidate.php on the server side
                window.location = '/Validations/logoutValidate.php';
            }); // Call logout function if confirmed
        }
    });
}
