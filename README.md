Cadastro-de-TVs v0.1
=============================
 Developed in PHP with YiiFramework, Bootstrap and MySQL (2013).
 
DEMO
=============================
	http://blpilla.net/exame/

REQUIREMENTS:
=============================
  PHP5 and MySQL PDO.


INSTALLATION
=============================
  EXTRACT FILES TO SERVER, EXECUTE SQL TABLES (TABLES.SQL) IN YOUR MYSQL DATABASE, AND RUN THE index.php IN YOUR BROWSER.


  DATABASE CONFIG IN: "cadastroTv/protected/config/main.php":

   ```php
     'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=test',
            'username' => 'root',
            'password' => '123456',
            'charset' => 'utf8'
        ),
		(...)
   ```

