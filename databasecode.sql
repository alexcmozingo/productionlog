CREATE TABLE production (
    dateprod date() not null
    firstname varchar(50) not null
    lastname varchar(50) not null
    discmodel varchar(50) not null
    plastic varchar(50) not null
    location varchar(50) not null
    shift varchar(50) not null
    line varchar(50) not null
    firsts varchar(50) not null
    seconds varchar(50) not null
    regrind varchar(50) not null
    waste varchar(50) not null

    $sql = "INSERT INTO production (date, location, shift, line, firstname, lastname, discmodel, plastic, firsts, seconds, regrind, waste) VALUES ('$date', '$location', '$shift', '$line', '$fname', '$lname', '$disc', '$plastic', '$firsts', '$seconds', '$regrind', '$waste');";


)