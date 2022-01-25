CREATE DATABASE sonarcube;
CREATE DATABASE cms;
CREATE DATABASE roomeo_db;
CREATE DATABASE keycloak;

CREATE ROLE sonarcube SUPERUSER CREATEDB CREATEROLE INHERIT LOGIN PASSWORD 'sonarcube';

CREATE extension IF NOT EXISTS "uuid-ossp";

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
