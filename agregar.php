<?php 
//AGREGAR CAMBIOS TODOS LOS CAMBIOS :
git add .
#AGREGAR UN CAMBIO EN PARTICULAS :
git add nombreArchivo.php

#COMENTAR LOS CAMBIOS :
git commit -m "comentario de cambio"
#SUBIR CAMBIO A LA RAMA :
git push origin rama

#AGREGAR CAMBIO A LA MASTER LOCAL :
git checkout master
git merge ramaconloscambios

#AGRAGAR CAMBIO A LA MASTER SERVICOR :
//ya una vez agregados a la local solo se hace push master server
git push origin master  


ONLY DEVELOP


 ?>