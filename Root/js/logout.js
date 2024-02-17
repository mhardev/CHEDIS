document.getElementById('logoutLink').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default behavior of the link
    confirmLogout();
});

function confirmLogout() {
    Swal.fire({
        title: 'Sign-Out',
        text: 'Are you sure you want to sign-out from this website?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes, sign-out',
        confirmButtonColor: '#3377ff',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Success',
                text: 'Sign-Out Successfully',
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