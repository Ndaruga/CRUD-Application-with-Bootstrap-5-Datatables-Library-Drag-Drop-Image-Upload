<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editable forms with AJAX</title>

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

    <nav class="navbar justify-content-center fs-3 mb-3" style="background-color: #00ff5573;">
        PHP CRUDE application with AJAX
    </nav>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="text-body-secondary">
                <span class="h5">All users</span>
                <br>
                Manage all users 
            </div>
            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
            <i class="fa-solid fa-user-plus fa-sm"></i>
            Add New User
            </button>
        </div>
    </div>

    <!-- Add user offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" style="width: 600px;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Add User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form method="POST" id="insertForm">
                <div class="row mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="" placeholder="Jane">
                </div>
                <div class="row mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="Last_name" id="" placeholder="Doe">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="" placeholder="name@example.com">
                </div>
                <div class="row mb-3">
                    <label class="form-label">Upload Image</label>
                    <div class="col-2">
                        <img class="preview_img" src="images/default_profile.jpeg" alt="Default image">
                    </div>
                    <div class="col-10">
                        <div class="file-upload text-secondary">
                            <input type="file" class="image" name="image" accept="image/*">
                            <span class="fs-4 fw-2">Choose file...</span>
                            <span>or drag and drop file here</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>