-- Sumber yang kami gunakan
-- database: https://i.stack.imgur.com/3kk8x.png
-- UI: https://semantic-ui.com
-- PHP : native
-- Referensi Lain: https://www.academia.edu/11315880/PERANCANGAN_BASIS_DATA_APLIKASI_PEMESANAN_TIKET_PESAWAT_ONLINE

-- buat schema database 

create database atol_flight;
use atol_flight;

create table flight_class
(
    flight_class_id int primary key,
    class varchar(15) not null
)
Engine=InnoDB;

create table passanger
(
    passanger_id int primary key,
    first_name varchar(50) not null,
    last_name varchar(50),
    born date,
    address varchar(100),
    city varchar(50),
    zip varchar(6),
    state varchar(50) not null,
    phone varchar(20),
    email varchar(100)
)
Engine=InnoDB;

create table airplane
(
    airplane_id int primary key,
    producer varchar(50) not null,
    type varchar(50)
)
Engine=InnoDB;

create table booking_status
(
    booking_status_id int primary key,
    status varchar(50)not null
)
Engine=InnoDB;

create table flight
(
    flight_number int primary key,
    airplane_id int not null,
    departure_city varchar(50) not null,
    destination Varchar(50) not null,
    departure_time time not null,
    departure_date date not null,
    arrival_time time not null,
    arrival_date date not null,

    CONSTRAINT fk_airplane FOREIGN KEY(airplane_id) REFERENCES airplane(airplane_id)

)
Engine=InnoDB;

create table booking
(
    booking_id int primary key,
    passanger_id int not null,
    flight_number int not null,
    flight_class_id int not null,
    seat_number varchar(5) not null,
    reser_status int not null,

    CONSTRAINT fk_passanger FOREIGN KEY(passanger_id) REFERENCES passanger(passanger_id),
    CONSTRAINT fk_flight FOREIGN KEY(flight_number) REFERENCES flight(flight_number),
    CONSTRAINT fk_booking_status FOREIGN KEY(reser_status) REFERENCES booking_status(booking_status_id),
    CONSTRAINT fk_flight_class FOREIGN KEY(flight_class_id) REFERENCES flight_class(flight_class_id)

)
Engine=InnoDB;

create table payment(
    payment_id int primary key,
    booking_id int not null,
    payment_amount double,
    payment_date TIMESTAMP,

    CONSTRAINT fk_booking FOREIGN KEY(booking_id) REFERENCES booking(booking_id)

)Engine=InnoDB;