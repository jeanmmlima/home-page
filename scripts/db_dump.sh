#!/bin/bash

######  DEVELPED BY JEAN LIMA #######

### SCRIPT PARA DUMP DO BANCO DE DADOS

mysqldump -u user -p#Senha123# teste | gzip > database_`date '+%d-%m-%Y'`.bak.sql.gz
