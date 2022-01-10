-- DROP USER IF EXISTS 'homestead';
-- CREATE USER 'homestead'@'%';
-- CREATE DATABASE IF NOT EXISTS `homestead`;
-- GRANT ALL PRIVILEGES ON homestead.* TO 'homestead'@'%' IDENTIFIED BY 'secret';
--  --------------your new NewDB----------------------
-- CREATE DATABASE IF NOT EXISTS `testing`;
-- GRANT ALL PRIVILEGES ON testing.* TO 'homestead'@'%' IDENTIFIED BY 'secret';


--create databases
CREATE DATABASE IF NOT EXISTS `primary`;
CREATE DATABASE IF NOT EXISTS `secondary`;

--create root user and grant rights
CREATE USER 'root'@'localhost' IDENTIFIED BY 'secret';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'%';


-- maria-db:
--     image: mariadb:10.5.9
--     container_name: 'maria-db'
--     restart: unless-stopped
--     ports:
--       - '8040:3306'
--     environment:
--       MYSQL_ROOT_PASSWORD: 'secret'
--     volumes:
--       - db_data:/var/lib/mysql
--       - ./docker/maria-db:/docker-entrypoint-initdb.d
--     networks:
--       - proxynet