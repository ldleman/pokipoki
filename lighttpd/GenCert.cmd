@ECHO OFF

MKDIR cert

OpenSSL.exe req -config openssl.cnf -new -x509 -keyout cert/server.pem -out cert/server.pem -days 365 -nodes

ECHO.
ECHO Done generating self-signed certificate.
ECHO Press any key to continue...

PAUSE >NUL

EXIT