CREATE DATABASE sonarcube;
-- Adira Ad1 Checking
CREATE DATABASE ad1_ca_report_dev;
CREATE DATABASE ad1_flowengine_dev;
CREATE DATABASE ad1_foundation_dev;
CREATE DATABASE ad1_idm_dev;
CREATE DATABASE ad1_gateway_dev;

CREATE ROLE ad1_ca_report_dev SUPERUSER CREATEDB CREATEROLE INHERIT LOGIN PASSWORD 'p@ssw0rd123';
CREATE ROLE ad1_flowengine_dev SUPERUSER CREATEDB CREATEROLE INHERIT LOGIN PASSWORD 'p@ssw0rd123';
CREATE ROLE ad1_foundation_dev SUPERUSER CREATEDB CREATEROLE INHERIT LOGIN PASSWORD 'p@ssw0rd123';
CREATE ROLE ad1_idm_dev SUPERUSER CREATEDB CREATEROLE INHERIT LOGIN PASSWORD 'p@ssw0rd123';
CREATE ROLE ad1_gateway_dev SUPERUSER CREATEDB CREATEROLE INHERIT LOGIN PASSWORD 'p@ssw0rd123';
CREATE ROLE sonarcube SUPERUSER CREATEDB CREATEROLE INHERIT LOGIN PASSWORD 'sonarcube';

--create user ad1_ca_report_dev with encrypted password 'p@ssw0rd123';
--grant all privileges on ad1_ca_report_dev to ad1_ca_report_dev;
--
--create user ad1_flowengine_dev with encrypted password 'p@ssw0rd123';
--grant all privileges on ad1_flowengine_dev to ad1_flowengine_dev;
--
--create user ad1_foundation_dev with encrypted password 'p@ssw0rd123';
--grant all privileges on ad1_foundation_dev to ad1_foundation_dev;
--
--create user ad1_idm_dev with encrypted password 'p@ssw0rd123';
--grant all privileges on ad1_idm_dev to ad1_idm_dev;
