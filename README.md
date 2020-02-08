# Login-System-
PHP Login system with reset password

# Create Tables
CREATE TABLE users (
    idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NUll,
    uidUsers TINYTEXT NOT NULL,
    emailUsers TINYTEXT NOT NULL,
    pwdUsers LONGTEXT NOT NULL
);
