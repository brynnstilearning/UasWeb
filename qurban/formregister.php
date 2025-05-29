<!DOCTYPE html>
<html>
<head>
    <title>Form Register</title>
</head>
<body>
    <h2>REGISTER</h2>
    <form action="act_register.php" method="post">
        <table>
            <tr>
                <td>ID User :</td>
                <td><input type="text" name="id_user" required></td>
            </tr>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Ulangi Password :</td>
                <td><input type="password" name="ulang_password" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap :</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Level :</td>
                <td>
                    <select name="level" required>
                        <option value="">--Pilih Level--</option>
                        <option value="Admin">Admin</option>
                        <option value="Panitia">Panitia</option>
                        <option value="Warga">Warga</option>
                        <option value="Berqurban">Berqurban</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
