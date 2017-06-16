LOAD DATA INFILE 'CM-AGENT BOOKINGS.csv'
INTO TABLE bookings
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
(agent_name, booking_id, travelers_full_name, museum_booked, @date_time_variable)
SET date = STR_TO_DATE(@date_time_variable, '%d-%b-%Y');