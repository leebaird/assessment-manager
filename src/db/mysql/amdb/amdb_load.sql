load data local infile "data/test.sql"
into table indicators
columns terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;
