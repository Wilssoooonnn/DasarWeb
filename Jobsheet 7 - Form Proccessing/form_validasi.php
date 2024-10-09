<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form dengan AJAX</h1>
    <form id="myForm">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama">
        <span id="namaErr" style="color: red;"></span>
        <br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <span id="emailErr" style="color: red;"></span>
        <br><br>

        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <span id="passwordErr" style="color: red;"></span>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <div id="result"></div>

    <script>
        $(document).ready(function() {
            $('#myForm').submit(function(event) {
                event.preventDefault();

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                //
                $("#namaErr").html("");
                $("#emailErr").html("");
                $("#passwordErr").html("");


                if (nama === "") {
                    $("#namaErr").html("Nama harus diisi");
                    valid = false;
                }


                if (email === "") {
                    $("#emailErr").html("Email harus diisi");
                    valid = false;
                }


                if (password === "") {
                    $("#passwordErr").html("Password harus diisi");
                    valid = false;
                } else if (password.length < 8) {
                    $("#passwordErr").html("Password minimal harus 8 karakter");
                    valid = false;
                }


                if (valid) {
                    var formData = $(this).serialize();

                    $.ajax({
                        type: 'POST',
                        url: 'proses_validasi.php',
                        data: formData,
                        success: function(response) {
                            $('#result').html(response);
                        },
                        error: function() {
                            $('#result').html('Terjadi kesalahan dalam pengiriman data.');
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>