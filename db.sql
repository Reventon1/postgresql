CREATE TABLE cpu
(
    id SERIAL PRIMARY KEY,
    name varchar(100),
    socket VARCHAR(100),
    frequency DECIMAL,
    cores INTEGER,
    price INTEGER,
    perf_points INTEGER

);

CREATE TABLE pc_config
(
    id SERIAL primary key,
    cpu_id INTEGER REFERENCES cpu (id),
    perf_points INTEGER,
    lnk varchar(100)
);

CREATE TABLE motherboard
(
    id SERIAL PRIMARY KEY,
    name varchar(100),
    socket VARCHAR(100),
    price INTEGER,
    perf_points INTEGER
);

CREATE TABLE ram
(
    id SERIAL PRIMARY KEY,
    name varchar(100),
    memory_freq INTEGER,
    mem_type INTEGER,
    price INTEGER,
    perf_points INTEGER
);

CREATE TABLE power_supply
(
    id SERIAL PRIMARY KEY,
    name varchar(100),
    power_count INTEGER,
    price INTEGER,
    perf_points INTEGER
);

CREATE TABLE storage
(
    id SERIAL PRIMARY KEY,
    name varchar(100),
    memory INTEGER,
    type INTEGER,
    price INTEGER,
    perf_points INTEGER

);

CREATE TABLE cooling
(
    id SERIAL PRIMARY KEY,
    name varchar(100),
    type varchar(50),
    price INTEGER,
    perf_points INTEGER
);

CREATE TABLE case_case
(
    id SERIAL PRIMARY KEY,
    name varchar(100),
    size varchar(100),
    price INTEGER,
    perf_points INTEGER
);

alter table pc_config
    add motherboard_id INTEGER REFERENCES motherboard (id);

alter table pc_config
    add ram_id INTEGER REFERENCES ram (id);

alter table pc_config
    add pwr_sup_id INTEGER REFERENCES power_supply (id);

alter table pc_config
    add storage_id INTEGER REFERENCES storage (id);

alter table pc_config
    add cooling_id INTEGER REFERENCES cooling (id);

alter table pc_config
    add case_id INTEGER REFERENCES case_case (id);