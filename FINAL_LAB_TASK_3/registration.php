<!DOCTYPE html>
<html>

<head>
    <title>
        Registration
    </title>

</head>


<body>
    <div>
        <?php
        if (isset($_GET['error'])) {
            echo $_GET['error'];
        } ?>
    </div>
    <form action="registration_handler.php" method="POST">

        <table>
            Registration
            <tr>
                <td>
                    <label for="id">ID :</label>
                    <input type="text" name="id" id="id" required>
                    <br>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" required>
                    <br>
                    <label for="confirmPassword">confirm Password :</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" required>
                    <br>

                    <label for="name">name :</label>
                    <input type="text" name="name" id="name" required>
                    <br>

                    <label for="email">email :</label>
                    <input type="email" name="email" id="email" required>
                    <br>
                    <label for="userType">USER TYPE :</label>
                    <select name="userType" id="userType" required>
                        <option value="user">USER</option>
                        <option value="admin">ADMIN</option>
                    </select>
                    <br>





                    <input type="button" name="submit" value="submit" id="submitId">


                </td>
            </tr>
        </table>
    </form>
    <script src="ajax.js"></script>
    <script>
        let responseText = null
        const submitButtonEl = document.getElementById("submitId");
        console.log(submitButtonEl);



        const valueList = ['id', 'password', 'confirmPassword', 'name', 'email', 'userType'];

        const sendObject = {};

        const formToObject = () => {
            for (const val of valueList) {
                console.log(val)
                sendObject[val] = document.querySelector(`#${val}`).value;
            }
            console.log(sendObject);

        }






        const regiHandler = event => {
            formToObject()
            ajaxPost('registration_handler.php', sendObject, (res) => {
                responseText = res
                console.log(res);
            });

        }
        submitButtonEl.addEventListener("click", regiHandler)
    </script>
</body>



</html>