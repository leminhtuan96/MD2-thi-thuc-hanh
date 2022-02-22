create database `thithuchanh`;
create table product (
                         id int primary key auto_increment,
                         name varchar(255),
                         price int,
                         quantity int,
                         date datetime,
                         description varchar(500),
                         category_id int,
                         foreign key (category_id) references categories(id)
);

create table categories (
                            id int primary key auto_increment,
                            name varchar(255)
);