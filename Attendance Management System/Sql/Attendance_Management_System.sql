/*Attendance Management System Databases*/
drop database if exists drbccchc;
create database drbccchc;
/*Change to the database*/
use drbccchc;
/*create tables*/
/*Login Table*/
drop table if exists login;
create table login(username varchar(100) primary key,
                   password varchar(100) not null);
/*Student Information Table*/
drop table if exists I_year;
create table I_year(stu_id varchar(20) primary key,
                    stu_name varchar(100) not null,
					stu_dept varchar(50) not null,
					stu_accademic_year varchar(20) not null,
					stu_staff_id varchar(20) not null,
					stu_room_id varchar(20));
drop table if exists II_year;
create table II_year(stu_id varchar(20) primary key,
                     stu_name varchar(100) not null,
					 stu_dept varchar(50) not null,
					 stu_accademic_year varchar(20) not null,
					 stu_staff_id varchar(20) not null,
					 stu_room_id varchar(20));
drop table if exists III_year;
create table III_year(stu_id varchar(20) primary key,
                      stu_name varchar(100) not null,
				      stu_dept varchar(50) not null,
					  stu_academic_year varchar(20) not null,
					  stu_staff_id varchar(20) not null,
					  stu_room_id varchar(20));
/*Staff Information Table*/
drop table if exists staff_information;
create table staff_information(staff_id varchar(20) primary key,	
                               staff_name varchar(100) not null,
                               staff_qualification varchar(50) not null,
                               staff_designation varchar(50) not null,
							   staff_experience int(10),
							   staff_room_id varchar(20));
/*Classes Table*/
drop table if exists rooms;
create table rooms(room_id varchar(20) primary key,
                   room_name varchar(20));
/*Attendance Report Calculate*/
drop table if exists attendance_report;
create table attendance_report(
                               attendance_staff_id varchar(20) not null,
							   attendace_staff_name varchar(100) not null,
							   attendace_stu_id varchar(20),
							   attendace_stu_name varchar(50) not null,
							   attendace_date date,
							   attendance_session int(10),
							   attendance_status varchar(20) not null,
							   attendace_percentage float,
							   primary key(attendace_stu_id,attendace_date,attendance_session));
