<html lang="en">

<head>
    <title>PalindromeTest-Noverita</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 50%;
            background-color: rgb(214, 236, 243);
        }

        .card:hover {
            box-shadow: 0 8px 40px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }

        .header {
            text-align: center;
            font-family: 'Acme', sans-serif;
            font-size: 20pt;
        }

        .body {
            font-family: 'Barlow Semi Condensed', sans-serif;
            font-size: 14pt;
        }
        .isi {
            font-family: 'Barlow Semi Condensed', sans-serif;
            font-size: 12pt;
            text-align: center;
        }

    </style>
    <div class="container pt-lg-5">
        <div class="card">
            <div class="card bg-info text-white">
                <div class="card-header">
                    <div class="header">PALINDROME TEST</div>
                </div>
            </div>

            <div class="card-body">
                <div class="body">Write down a sentence or number to see if it's a palindrome or not.<br>
                <p style="font-size: 8pt;"><b>note: please use lowercase for all the words.</b></p></div>
                <div class="isi">
                <div class="form-group" style="padding-top: 12px;">
                       <input type="text" id="input" name="string" placeholder="write here...">

                        <input type="button" class="btn btn-info" value="Check" onclick="checkPalindrome();">
                        <p id="hasil"></p>
                    </div>
            </div>
        </div>
        </div>
        <div class="isi">
            <script>
                function checkPalindrome() {
                    str = $("#input").val();
                    revStr = "";
                    i = str.length;
                    for (j = i; j >= 0; j--) {
                        revStr = revStr + str.charAt(j);
                    }
                    if (str == revStr) {
                        $("#hasil").text("The sentence/number is a Palindrome.");
                    } else {
                        $("#hasil").text("The sentence/number is not a Palindrome.");
                    }
                }
            </script>
            </div>
        </div>
    </div>

</body>

</html>
