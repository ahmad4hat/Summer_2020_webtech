<!DOCTYPE html>
<html>

<head>
    <title>
        login
    </title>

</head>

<body>
    <form action="registration_handler.php" method="POST">

        <table>
            Registration
            <tr>
                <td>
                    <label for="id"> USER ID :</label>
                    <input type="text" name="id" id="id" required>
                    <br>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" required>
                    <br>


                    <input type="submit" name="submit" value="submit">


                </td>
            </tr>
        </table>
    </form>
</body>

</html>