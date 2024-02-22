//Add Admin Account//
document.getElementById('addConfirm').addEventListener('click', function() {
    // Assuming you have retrieved input values and constructed an object named inputData
    fetch('/Components/APIs/Accounts/addAdminAccounts.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(inputData),
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: data.message,
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message,
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'An unexpected error occurred.',
        });
    });
});


// Delete Admin Account//
function deleteAccount(adminId) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch('/Components/APIs/Accounts/deleteAdminAccounts.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                // Change 'same-origin' to 'include'
                credentials: 'include',
                body: `id=${adminId}&delete=true`,
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // You might want to refresh the page or update the UI here
                    Swal.fire(
                        'Deleted!',
                        'Your account has been deleted.',
                        'success'
                    );
                } else {
                    Swal.fire(
                        'Error!',
                        'An error occurred while deleting the account.',
                        'error'
                    );
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire(
                    'Error!',
                    'An error occurred while deleting the account.',
                    'error'
                );
            });
        }
    });
}

