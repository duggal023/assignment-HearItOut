The following files are according to the assignment sent by HeartItOut.
As this signup and a login page requires a database connected to it, the following commands with be,
required to be put as query in the local database.



CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)

If it is being run on a webhosting service, edit the username password and the following database name in the config.php file.


Thank You