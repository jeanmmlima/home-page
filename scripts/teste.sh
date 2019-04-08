#!/bin/bash

##### DEVELOPED BY JEAN ######

user="user"
senha="#Senha123#"
db="teste"
sql="UPDATE reserva SET ativo = 0 WHERE data < CURDATE()"

/bin/echo $sql > /home/jean/public_html/html/home-page/scripts/text.txt