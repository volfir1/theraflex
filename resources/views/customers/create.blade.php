<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <!-- Include Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #28a745;">

<div class="container p-3" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 10px;">
    <div class="card">
        <div class="card-body" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 10px;">
            <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
                @if($errors->any())
                    <div class="text-red-500 alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif    
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                </div>

                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" name="lname" required>
                </div>

                <div class="form-group">
                    <label for="phoneNum">Phone Number:</label>
                    <input type="text" class="form-control" id="phoneNum" name="phoneNum" required>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="showPasswordButton" onclick="togglePassword()">Show</button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="images">Profile Image:</label>
                    <input type="file" class="form-control-file" id="images" name="images">
                </div>

                <button type="submit" class="btn btn-success">Add Customer</button>
            </form>
        </div>
    </div>
</div>

<!-- Add Bootstrap JS and Popper.js scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>

</body>
</html>
