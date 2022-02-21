<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="connect.php" method="POST">
        <table>
            <tr>
                <td>
                    username:
                </td>
                <td>
                    <input type="text" name="username" required>
                </td>
            </tr>
            <tr>
                <td>
                    password:
                </td>
                <td>
                    <input type="number" name="password" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Login" name="submitted">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>