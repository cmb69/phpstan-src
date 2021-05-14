@echo OFF
setlocal DISABLEDELAYEDEXPANSION

php -d memory_limit=3G -d disable_functions="" -d allow_url_fopen=on -f "%~dp0composer.phar" -- %*
