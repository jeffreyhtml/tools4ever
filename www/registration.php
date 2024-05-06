<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<nav>
    <ul>
        <a href="tools_index.php">Overzicht tools</a>
        <a href="tools_create.php">Huidige pagina</a>
        <a href="registration.php"> Registratie</a>
        <a href="login.php">Login</a>
        
    </ul>
</nav>
    <form action="registration_procces.php" method="post">
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="firstname">First name</label>
            <input type="text" name="firstname" id="firstname">
        </div>

        <div>
            <label for="lastname">Last name</label>
            <input type="text" name="lastname" id="lastname">
        </div>

        <div>
            <label for="adress">Adress</label>
            <input type="text" name="adress" id="adress">
        </div>

        <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city">
        </div>

        <div>
            <label for="is_active">Actief</label>
            <input type="radio" name="status" id="is_active">

            <label for="is_not_active">Niet Actief</label>
            <input type="radio" name="status" id="is_not_active">
        </div>
        <div>
            <label for="role">Role</label>
            <select name="role" id="role">
                <option value="customer">Klant</option>
                <option value="employee">Employee</option>
                <option value="administration">Admin</option>
            </select>
        </div>

        <div>
            <button type="submit" name="submit">Registreer</button>
        </div>
    </form>
</body>

</html>