DROP TABLE roles;

CREATE TABLE roles (
id INT UNSIGNED auto_increment PRIMARY KEY,
createdAt datetime DEFAULT CURRENT_TIMESTAMP,
label VARCHAR(60) NOT NULL
);

INSERT INTO roles(label)
VALUES ("WHAT EVER")

SELECT * FROM roles;
