CREATE TABLE IF NOT EXISTS shedule.groups (
        id integer(11) NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(id),
        name varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS shedule.subjects (
        id INTEGER(11) NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(id),
        group_id INTEGER(11) NOT NULL,
        name varchar(255),
        FOREIGN KEY(group_id) 
          REFERENCES shedule.groups(id)
);
