#!/bin/bash

##### DEVELOPED BY JEAN ######

user="user"
senha="#Senha123#"
db="teste"
sql="UPDATE reserva SET ativo = 0 WHERE data < CURDATE()"

mysql -u $user -p$senha -D $db -e "$sql"