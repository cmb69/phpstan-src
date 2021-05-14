@echo OFF
setlocal DISABLEDELAYEDEXPANSION

"C:\Program Files\PHP\msmtp.exe" %* -C "C:\Program Files\PHP\msmtprc" -t -f "no-reply@unknown-sender.com" -F """"Unknown Sender""""
