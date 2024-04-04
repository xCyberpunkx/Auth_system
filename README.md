# Description
User Registration:

Users provide a username, email, and password through a registration form.
PHP validates the form inputs.
Passwords are encrypted using bcrypt before storing them in the database.
User data is inserted into the database.
User Login:

Users enter their username/email and password through a login form.
PHP verifies the credentials against the stored hashed password using password_verify.
If credentials match, a session is started to keep the user logged in.
Password Encryption:

Passwords are securely hashed using bcrypt before storing them in the database.
Session Management:

Sessions are used to track user authentication status and store relevant user information during their visit.
Logout:

Users can log out, which destroys the session and logs them out of the system.
