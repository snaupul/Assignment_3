/* Web Design & Development Project
   
   Username - Admin
   Password - admin */
Create DATABASE joblister;
SHOW DATABASES;
Use joblister;
Create TABLE categories (
    id int(11) NOT NULL,
    name varchar(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;
ALTER TABLE categories ADD PRIMARY KEY (id);
ALTER TABLE categories MODIFY id int(11) NOT NULL AUTO_INCREMENT;
INSERT INTO categories (name) VALUES ('Business'), ('Technology'), ('Retail');


CREATE TABLE jobs (
    id int(11) NOT NULL,
    category_id int(11) NOT NULL,
    company varchar(255) NOT NULL,
    job_title varchar(255) NOT NULL,
    description varchar(255) NOT NULL,
    salary varchar(255) NOT NULL,
    location varchar(255) NOT NULL,
    contact_user varchar(255) NOT NULL,
    contact_email varchar(255) NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=latin1;
 
ALTER TABLE jobs ADD PRIMARY KEY (id);
ALTER TABLE jobs MODIFY id int(11) NOT NULL AUTO_INCREMENT;
INSERT INTO jobs (category_id, company, job_title, description, salary, location ,contact_user, contact_email) 
VALUES (1, 'Pepsico', 'Accountant', 'Must be CPA Qualified', '55k', 'Toronto', 'John Doe', 'john@gmail.com');
INSERT INTO jobs (category_id, company, job_title, description, salary, location ,contact_user, contact_email) 
VALUES (2, 'Microsoft', 'Developer', 'Must know PHP, JavaScript, C# and SQL', '80k', 'Waterloo', 'James Bond', 'james@gmail.com');

Create DATABASE loginsystem;
SHOW DATABASES;
Use loginsystem;
Create Table users (
	idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	uidUsers TINYTEXT NOT NULL,
	emailUsers TINYTEXT NOT NULL,
	pwdUsers LONGTEXT NOT NULL
);
INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES ('Admin', 'admin@gmail.com', 'admin');