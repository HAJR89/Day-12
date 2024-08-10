<!DOCTYPE html>
<html lang="en">
    <head>
        <body>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="calculation.php">Calculation</a></li>
                    <li><a href="registration.php">Registration</a></li>
                </ul>
            </nav>
            <form action="welcome.php" method="post">
                <label for="fullname">Full Name:</label>
                <input type="text" name="fullname" id="fullname" required>
                
                <label for="age">age:</label>
                <input type="number" name="age" id="age" required>
                
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone" required>

                 <input type="submit" value="Register">
            </Form>
    </body>
</html>
