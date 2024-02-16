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
        confirmButtonColor: '#3377ff',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Success',
                text: 'Logout Successfully',
                timer: 2000,
                icon: 'success',
                showConfirmButton: false
            }).then(function() {
                // Use a relative path for the redirect
                window.location = '../Validations/logoutValidate.php';
            });
        }
    });
}
