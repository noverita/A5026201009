<html>

<head>
    <title> Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">
</head>
<style>
    .card-header {
        background-color: aquamarine;
    }

    .header {
        text-align: center;
        font-size: 24pt;
        color: darkslateblue;
        font-family: 'Hind', sans-serif;
    }
    .card-body{
        background-color: beige;
        font-family: 'Hind', sans-serif;
    }
    .kirim{
        width: 100%;
        background-color: darkolivegreen;
        font-family: 'Hind', sans-serif;
        color: aliceblue;
        font-size: 18pt;
    }
    .reset{
        width: 100%;
        background-color: rgb(190, 141, 6);
        font-family: 'Hind', sans-serif;
        color: aliceblue;
        font-size: 18pt;
    }
label.error {
    color: red;
    font-size: 10pt;
    display: block;
    margin-top: 10px;
    font-family: 'Hind', sans-serif;
}
</style>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="header"><b> REGISTRATION FORM</b></div>
            </div>
            <div class="card-body">
                <form id="regForm" action="https://youtube.com" method="GET">
                    <label for="name"><b> Name</b></label><br>
                    <input name="name" type="text" class="form-control" placeholder="your name here..."><br>

                    <label for="address"><b> Address</b></label><br>
                    <input name="address" type="text" class="form-control" placeholder="your address here..."><br>

                    <label for="email"><b> Email Address</b></label><br>
                    <input name="email" type="email" class="form-control" placeholder="your email here..."><br>

                    <label for="password"><b> Password</b></label><br>
                    <input name="password" type="password" class="form-control" placeholder="your password here..."
                        minlength="8" maxlength="16"><br>

                    <label for="telephone"><b> Telephone</b></label><br>
                    <input name="telephone" type="text" class="form-control" placeholder="your telephone here..."
                        minlength="7"><br>

                    <label for="course"><b> Select Your Course</b></label><br>
                    <select class="form-control" name="course">
                        <option value=""></option>
                        <option value="BTECH">BTECH</option>
                        <option value="BBA">BBA</option>
                        <option value="BCA">BCA</option>
                        <option value="B.COM">B.COM</option>
                        <option value="GEEKSFORGEEKS">GEEKSFORGEEKS</option>
                    </select><br>
                    <label for="zipcode"><b> Zip Code</b></label><br>
                    <input type="text" class="form-control" placeholder="your Zip Code here..." minlength="6"
                        maxlength="6" name="zipcode"><br>

                   <p> <input type="submit" value="Send" class="kirim"></p>
                    <p> <input type="reset" value="Reset" class="reset"></p>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#regForm").validate({
                rules: {
                    name: {
                        required: true,
                        lettersonly: true
                    },
                    address: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 8,
                        maxlength: 16
                    },
                    telephone: {
                        required: true,
                        number: true,
                        minlength: 7
                    },
                    course: {
                        required: true
                    },
                    zipcode: {
                        required: true,
                        number: true,
                        minlength: 6,
                        maxlength: 6
                    }

                },

                messages: {
                    name: {
                        required: "Name should be filled",
                        lettersonly: "Letters Requirred"
                    },
                    address: {
                        required: "Address should be filled"
                    },
                    email: {
                        required: "Email should be filled",
                        email: "The email should be in the format: xxxx@domain.tld",
                    },
                    password: {
                        required: "Password should be filled",
                        minlength: "Password should be between 8-16 characters",
                        maxlength: "Password should be between 8-16 characters"
                    },
                    telephone: {
                        required: "Telephone should be filled",
                        number: "Number required",
                        minlength: "Telephone number should be 7 or more digits"
                    },
                    course: {
                        required: "You have to choose one course"
                    },
                    zipcode: {
                        required: "Zip Code should be filled",
                        number: "Number required",
                        minlength: "Zipcode should be 6 digits",
                        maxlength: "Zipcode should be 6 digits"
                    }

                }
            });
        });


    </script>
</body>

</html>
