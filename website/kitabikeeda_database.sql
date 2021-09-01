//creating the database//
create database kitabikeeda;

//creating the admin table//
create table admin(user_id varchar(20),password varchar(20));
describe admin;
+----------+-------------+------+-----+---------+-------+
| Field    | Type        | Null | Key | Default | Extra |
+----------+-------------+------+-----+---------+-------+
| user_id  | varchar(20) | YES  |     | NULL    |       |
| password | varchar(20) | YES  |     | NULL    |       |
+----------+-------------+------+-----+---------+-------+

//creating the user table//
create table user(customer_id varchar(20) primary key, email varchar(30),password varchar(20));
describe user;
+-------------+-------------+------+-----+---------+-------+
| Field       | Type        | Null | Key | Default | Extra |
+-------------+-------------+------+-----+---------+-------+
| customer_id | varchar(20) | NO   | PRI | NULL    |       |
| email       | varchar(30) | YES  |     | NULL    |       |
| password    | varchar(20) | YES  |     | NULL    |       |
+-------------+-------------+------+-----+---------+-------+

//creating the books table//
create table books(book_name varchar(40),author varchar(50),price int(11), quantity int(11) default 100);
describe books;
+-----------+-------------+------+-----+---------+-------+
| Field     | Type        | Null | Key | Default | Extra |
+-----------+-------------+------+-----+---------+-------+
| book_name | varchar(40) | YES  |     | NULL    |       |
| author    | varchar(50) | YES  |     | NULL    |       |
| price     | int(11)     | YES  |     | NULL    |       |
| quantity  | int(11)     | YES  |     | 100     |       |
+-----------+-------------+------+-----+---------+-------+de

//creating the cart table//
create table cart(customer_id varchar(20),Quantity int(10), book_name varchar(50), Foreign key(customer_id) REFERENCES user(customer_id));
describe cart;
+-------------+-------------+------+-----+---------+-------+
| Field       | Type        | Null | Key | Default | Extra |
+-------------+-------------+------+-----+---------+-------+
| customer_id | varchar(20) | YES  | MUL | NULL    |       |
| Quantity    | int(10)     | YES  |     | NULL    |       |
| book_name   | varchar(50) | YES  |     | NULL    |       |
+-------------+-------------+------+-----+---------+-------+



//inserting value to admin//
insert into admin(user_id,password) values('root','root');

//inserting values to books//
MariaDB [hello]> insert into books(book_name,author,price) values('A thousand Splendid Suns','Khaled Hosseini',250);
Query OK, 1 row affected (0.067 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Agastha Christie','Agastha Christie',400);
Query OK, 1 row affected (0.077 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Ahimsa','Supriya Kelkar',200);
Query OK, 1 row affected (0.056 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('All the bright places','Jennifer Niven',210);
Query OK, 1 row affected (0.059 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('An Abundance of Katherines','John Green',200);
Query OK, 1 row affected (0.069 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Best Kept Secret','Jeffery Archer',400);
Query OK, 1 row affected (0.081 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Dan Brown','Dan Brown',550);
Query OK, 1 row affected (0.057 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('George Orwell','George Orwell',1020);
Query OK, 1 row affected (0.055 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Gone Girl','Gillian Flynn',150);
Query OK, 1 row affected (0.129 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Gone Girl','Mitch ',500);
Query OK, 1 row affected (0.045 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Have a little faith','Mitch Albon',500);
Query OK, 1 row affected (0.076 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Like Smoke','Paro Anand',325);
Query OK, 1 row affected (0.044 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Lolita,Mein Kampf,anne frank','multiple',550);
Query OK, 1 row affected (0.082 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Mightier than the sword','Jeffery Archer',500);
Query OK, 1 row affected (0.062 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Millenium','Stiege Larsson',6000);
Query OK, 1 row affected (0.110 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('multiple','Paula Hawkins',150);
Query OK, 1 row affected (0.059 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('On the Come Up','Angie Thomas',2100);
Query OK, 1 row affected (0.076 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Only Time will tell','Jeffery Archer',170);
Query OK, 1 row affected (0.057 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Postscript','Cecilia Ahern',120);
Query OK, 1 row affected (0.085 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Selection','Keira Cass',1000);
Query OK, 1 row affected (0.058 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('shadow and bone','Leigh Bardugo',400);
Query OK, 1 row affected (0.056 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Target 3 Billions','A.P.J Abdul Kalam',175);
Query OK, 1 row affected (0.121 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('The Essential Rumi','Coleman Barks',400);
Query OK, 1 row affected (0.073 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('The Greatest Story','Leo Tolstoy',200);
Query OK, 1 row affected (0.062 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('The help','Kathryn Stockett',150);
Query OK, 1 row affected (0.062 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('the hunger games','Suzane Collins',300);
Query OK, 1 row affected (0.077 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('The Kite Runner','Khaled Hosseini',300);
Query OK, 1 row affected (0.083 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('The hunger games','Suzane Collins',300);
Query OK, 1 row affected (0.054 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('The hunger games','Suzane Collins',300);
Query OK, 1 row affected (0.057 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('The Reluctant Fundamentalist','Mohsin Hamid',300);
Query OK, 1 row affected (0.085 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('The Wasted Vigil','Nadeem Aslam',210);
Query OK, 1 row affected (0.074 sec)

MariaDB [hello]> insert into books(book_name,author,price) values('Vanara','Anand Neelkantan',200);

// books table items//
 select * from books;
+------------------------------+-------------------+-------+----------+
| book_name                    | author            | price | quantity |
+------------------------------+-------------------+-------+----------+
| A thousand Splendid Suns     | Khaled Hosseini   |   250 |      100 |
| Agastha Christie             | Agastha Christie  |   400 |      100 |
| Ahimsa                       | Supriya Kelkar    |   200 |      100 |
| All the bright places        | Jennifer Niven    |   210 |      100 |
| An Abundance of Katherines   | John Green        |   200 |      100 |
| Best Kept Secret             | Jeffery Archer    |   400 |      100 |
| Dan Brown                    | Dan Brown         |   550 |      100 |
| George Orwell                | George Orwell     |  1020 |      100 |
| Gone Girl                    | Gillian Flynn     |   150 |      100 |
| Have a little faith          | Mitch Albon       |   500 |      100 |
| Like Smoke                   | Paro Anand        |   325 |      100 |
| Lolita,Mein Kampf,anne frank | multiple          |   550 |      100 |
| Mightier than the sword      | Jeffery Archer    |   500 |      100 |
| Millenium                    | Stiege Larsson    |  6000 |      100 |
| multiple                     | Paula Hawkins     |   150 |      100 |
| On the Come Up               | Angie Thomas      |  2100 |      100 |
| Only Time will tell          | Jeffery Archer    |   170 |      100 |
| Postscript                   | Cecilia Ahern     |   120 |      100 |
| Selection                    | Keira Cass        |  1000 |      100 |
| shadow and bone              | Leigh Bardugo     |   400 |      100 |
| Target 3 Billions            | A.P.J Abdul Kalam |   175 |      100 |
| The Essential Rumi           | Coleman Barks     |   400 |      100 |
| The Greatest Story           | Leo Tolstoy       |   200 |      100 |
| The help                     | Kathryn Stockett  |   150 |      100 |
| The Kite Runner              | Khaled Hosseini   |   300 |      100 |
| The hunger games             | Suzane Collins    |   300 |      100 |
| The Reluctant Fundamentalist | Mohsin Hamid      |   300 |      100 |
| The Wasted Vigil             | Nadeem Aslam      |   210 |      100 |
| Vanara                       | Anand Neelkantan  |   200 |      100 |
+------------------------------+-------------------+-------+----------+

