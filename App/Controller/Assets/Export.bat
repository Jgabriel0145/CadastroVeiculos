@echo off
cd\

cd C:\"Program Files"\MySQL\"MySQL Workbench 8.0"

echo -
echo -Este procedimento pode demorar alguns segundos.
echo -


mysqldump -hlocalhost -P3307 -uroot -petecjau db_veiculos --databases > C:\JoaoGabriel_Lucas_3DS\Backup\banco_backup.sql