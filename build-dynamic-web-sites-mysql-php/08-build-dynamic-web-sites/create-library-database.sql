# Create sample library database

# Start from scratch
drop database if exists library;
create database library;
use library;

# Create the tables

create table borrowers
(  borrowerid int not null primary key auto_increment,
   name varchar(100) not null,
   address varchar(100) not null
) engine = innodb;

create table books
(  bookid int not null primary key auto_increment,
   title varchar(100) not null,
   author varchar(100) not null,
   onloan boolean,
   duedate date,
   borrowerid int,
   foreign key (borrowerid) references borrowers(borrowerid)
) engine = innodb;
 
# Populate the tables with some sample data

insert into borrowers values
  (100, 'Homer Simpson', '742 Evergreen Terrace, Springfield'),
  (101, 'John Doe', '54 High Street, Bagshot'),
  (102, 'Jane Smith', '5 Church Lane, Hambridge'),
  (103, 'Henry Higgins', '14 Mayfair');

insert into books values
  (null, 'Harry Potter and the Goblet of Fire', 'J.K. Rowling', false, null, null),
  (null, 'Harry Potter and the Half-Blood Prince', 'J.K. Rowling', false, null, null),
  (null, 'Wind in the Willows', 'Kenneth Grahame', false, null, null),
  (null, 'Great Expectations', 'Charles Dickens', false, null, null),
  (null, 'A Christmas Carol', 'Charles Dickens', false, null, null),
  (null, 'Knots and Crosses', 'Ian Rankin', false, null, null),
  (null, 'The Hanging Garden', 'Ian Rankin', false, null, null),
  (null, 'Othello', 'William Shakespeare', true, "2013-11-29", 102),
  (null, 'Twelfth Night', 'William Shakespeare', false, null, null),
  (null, 'Macbeth', 'William Shakespeare', false, null, null),
  (null, 'King Henry V', 'William Shakespeare', false, null, null),
  (null, 'Java in a Nutshell', 'David Flanagan', false, null, null),
  (null, 'Modern Operating Systems', 'Andy Tanenbaum', false, null, null),
  (null, 'Linux System Programming', 'Robert Love', false, null, null),
  (null, 'SUSE Linux', 'Chris Brown', false, null, null),
  (null, 'PHP and MySQL', 'Welling and Thomson', false, null, null),
  (null, 'High Performance MySQL', 'Schwartz et al', false, null, null),
  (null, 'PHP 5 for Dummies', 'Janet Valade', false, null, null),
  (null, 'Computer Security', 'Stallings and Brown', false, null, null),
  (null, 'Network Security Essentials', 'William Stallings', false, null, null),
  (null, 'The Casual Vacancy', 'J. K. Rowling', false, null, null),
  (null, 'Home Plumbing Manual', 'Andy Blackwell', true, "2013-12-6", 101),
  (null, 'Self-sufficiency Home Brewing', 'John Parkes', false, null, null),
  (null, 'Notes From a Small Island', 'Bill Bryson', false, null, null),
  (null, 'A Short History of Nearly Everything', 'Bill Bryson', false, null, null),
  (null, 'A Walk in the Woods', 'Bill Bryson', true, "2013-11-23", 100),
  (null, 'The Lost Continent', 'Bill Bryson', false, null, null),
  (null, 'So Long, and Thanks for all the Fish', 'Douglas Adams', false, null, null),
  (null, 'Life, the Universe and Everything', 'Douglas Adams', false, null, null),
  (null, 'The Salmon of Doubt', 'Douglas Adams', false, null, null),
  (null, 'The Girl with the Dragon Tattoo', 'Stieg Larsson', false, null, null),
  (null, 'The Girl who Played with Fire', 'Stieg Larsson', false, null, null),
  (null, 'The Deans Watch', 'Elizabeth Goudge', false, null, null),
  (null, 'Pilgrims Inn', 'Elizabeth Goudge', false, null, null),
  (null, 'The Colour of Magic', 'Terry Pratchett', false, null, null),
  (null, 'Dodger', 'Terry Pratchett', true, "2013-11-25", 101),
  (null, 'The Light Fantastic', 'Terry Pratchett', false, null, null),
  (null, 'Childhoods End', 'Arthur C. Clarke', true, "2013-11-20", 103),
  (null, 'Rendezvous with Rama', 'Arthur C. Clarke', false, null, null),
  (null, '2001: A Space Odyssey', 'Arthur C. Clarke', false, null, null),
  (null, 'I, Robot', 'Isaac Asimov', false, null, null),
  (null, 'The Caves of Steel', 'Isaac Asimov', false, null, null),
  (null, 'Dune', 'Frank Herbert', false, null, null),
  (null, 'Pilgrim\'s Progress', 'John Bunyan', false, null, null);
