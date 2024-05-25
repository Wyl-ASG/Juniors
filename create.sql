DROP DATABASE IF EXISTS dreamers_database;
CREATE DATABASE dreamers_database;
USE dreamers_database;


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
  event_starttime timestamp NOT NULL,
  event_endtime timestamp NOT NULL,
  event_capacity varchar(30) NOT NULL,
  event_description varchar(255) NOT NULL,
  constraint event_pk primary key (event_id),
  constraint event_fk foreign key(organiser_username)
  references organiser (organiser_username)
);









