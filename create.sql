  
DROP DATABASE IF EXISTS dreamers_database;
CREATE DATABASE dreamers_database;
USE dreamers_database;

SET sql_mode = '';
-- table structure for dreamers database 
-- creating user database 
drop table if exists user; 
CREATE TABLE IF NOT EXISTS user (
  user_id varchar(30) NOT NULL,
  name_of_user varchar(30) NOT NULL,
  user_email varchar(30) NOT NULL,
  user_hpnum int(8) NOT NULL,
  user_password varchar(30) NOT NULL,
  user_location varchar(30) NOT NULL, -- aka north south east west central
  user_volunteerhours int(5) NULL,
  constraint user_pk primary key (user_id)
);

drop table if exists organiser; 
CREATE TABLE IF NOT EXISTS organiser (
  organiser_username varchar(30) NOT NULL,
  organiser_name varchar(30) NOT NULL,
  organiser_hpnum varchar(30) NOT NULL,
  organiser_email varchar(30) NOT NULL,
  organiser_pocname varchar(30) NOT NULL,
  organiser_pocnum int(8) NOT NULL,
  organiser_password varchar(30) NOT NULL,
  organiser_website varchar(30) NOT NULL,
  organiser_description varchar(30) NOT NULL,
  organiser_photo varchar(30) NOT NULL,
  constraint organiser_pk primary key (organiser_username)
);

drop table if exists event; 
CREATE TABLE IF NOT EXISTS event (
  event_id varchar(30) NOT NULL,
  event_name varchar(30) NOT NULL,
  organiser_username varchar(30) NOT NULL,
  event_location varchar(30) NOT NULL,
  event_date date NOT NULL,
  event_starttime Time NOT NULL,
  event_endtime Time NOT NULL,
  event_capacity varchar(30) NOT NULL,
  event_description varchar(255) NOT NULL,
  constraint event_pk primary key (event_id),
  constraint event_fk foreign key(organiser_username)
  references organiser (organiser_username)
);
insert into user values
('T0000001Z', 'Ama', 'ama@gmail.com', 91234567, 'password1','North', 3),
('T0000002Z', 'Bae', 'bae@gmail.com', 91234567, 'password1','South', 5),
('T0000003Z', 'Cal', 'cal@gmail.com', 91234567, 'password1','East',10),
('T0000004Z', 'Den', 'den@gmail.com', 91234567, 'password1','West', 10),
('T0000005Z', 'Ele', 'ele@gmail.com', 91234567, 'password1','Central', 80); 

insert into organiser values 
('kindnessmovement', 'Kindness Movement', '61234567', 'kind@gmail.com', 'Zon', '98765432', 'password2' ,'kindness.com', 'Kindness Movement is a kind company', 'kind.jpg'), 
('happycompany', 'Happy Company', '61234567', 'happy@gmail.com', 'Yas', '98765432', 'password2', 'happy.com', 'Happy company is a happy company', 'happy.jpg'), 
('goodcharity', 'Good Charity', '61234567', 'charity@gmail.com', 'Xan', '98765432', 'password2', 'charity.com', 'Good Charity is a good company', 'charity.jpg'); 

insert into event values 
('event01', 'Changing Lives', 'kindnessmovement', 'Yishun', '2024-10-02', '03:30:02', '06:30:02', 30, 'Help change lives'), 
('event02', 'Making Differences', 'happycompany', 'Woodlands', '2024-09-23', '10:15:30', '15:30:02', 20, 'Make a difference today'), 
('event03', 'Impacting Futures', 'goodcharity', 'Bishan', '2024-07-10', '18:03:00', '20:30:02', 50, 'Making an impact on the future'); 












