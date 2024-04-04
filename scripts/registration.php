<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
    <div class="container">
        <h1>User Registration</h1>
        <form action="register_process.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <select id="department" name="department">
                    <option value="IT">Information Technology</option>
                    <option value="SE">Software Engineering</option>
                </select>
            </div>
            <div class="form-group">
                <label for="skills">Skills:</label><br>
                <input type="checkbox" id="programming" name="skills[]" value="Programming">
                <label for="programming">Programming</label><br>
                <input type="checkbox" id="networking" name="skills[]" value="Networking">
                <label for="networking">Networking</label><br>
                <input type="checkbox" id="database" name="skills[]" value="Database Management">
                <label for="database">Database Management</label><br>
            </div>
            <div class="form-group">
                <label for="experience">Years of Experience:</label><br>
                <input type="radio" id="exp1" name="experience" value="1-3">
                <label for="exp1">1-3 years</label><br>
                <input type="radio" id="exp2" name="experience" value="4-6">
                <label for="exp2">4-6 years</label><br>
                <input type="radio" id="exp3" name="experience" value="7+">
                <label for="exp3">7+ years</label><br>
            </div>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
