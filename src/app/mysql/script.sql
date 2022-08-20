create table orders
(
    id     int auto_increment
        primary key,
    sku    varchar(255) not null,
    name   varchar(255) not null,
    price  int          not null,
    size   varchar(255) null,
    height varchar(255) null,
    width  varchar(255) null,
    length varchar(255) null,
    weight varchar(255) null
);
