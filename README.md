# alif-task
simple task
Create the database with a 'alif-task' name

SQL
CREATE TABLE customers (
id int(11) NOT NULL AUTO_INCREMENT, phone_num int(13) NOT NULL, email varchar(255) NOT NULL, password varchar(255) NOT NULL, created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE products (
id int(11) NOT NULL AUTO_INCREMENT, product_name varchar(255) NOT NULL,price int(5) NOT NULL , PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE transactions (
id int(11) NOT NULL AUTO_INCREMENT, customer_id int(11) NOT NULL,product_id int(11) NOT NULL, product_name varchar(255) NOT NULL,product_price int(5) NOT NULL,created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (id)
) ENGINE=InnoDB;
