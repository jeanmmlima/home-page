#!/bin/bash

##### DEVELOPED BY JEAN ######

user="user"
senha="#Senha123#"
db="teste"
#sql="select * from reserva"
sql="UPDATE reserva SET ativo = 0 WHERE data < CURDATE()"

/usr/bin/mysql -u $user -p$senha -D $db -e "$sql"