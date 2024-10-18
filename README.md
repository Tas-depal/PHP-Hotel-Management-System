# Steps to Run the project
- For Linux Users:
  
  - Install php7.4-cli 
    - `sudo apt install php7.4-cli`
      
  - Database
    - Postgres
      - Install php-pgsql
        - `sudo apt-get install php-pgsql`
          
      - To start postgres
          - `sudo service postgresql start`
            
      - Start Pg-terminal and insert the following commands:      
          
        - Start pg terminal:
          - `sudo -u postgres psql`
          
        - Create db:
          - create database `yourdbname`;
          
        - Create user:
          - create user `yourusername` with encrypted password `'yourpassword'`;          
          
        - Grant privileges:
          - grant all privileges on database `yourdbname` to `yourusername`;
          
        - To create role:
          - Alter ROLE `yourusername` WITH SUPERUSER CREATEDB CREATEROLE LOGIN;
         
        - Add db config to config.php:
          - $host_name = "localhost";
          - $username = `"yourusername"`;
          - $password = `"yourpassword"`;
          - $dbname = `"yourdbname"`;
          - $results_per_page = 4;

        - Locate php.ini file
          - Run the following command:
            - `php --ini`
            - It will reveal the path of the file
            - Open the file and change the following
              - `;extension=pgsql` => `extension=pgsql`
                
    - Run the following services:
      - Apache2
        - `sudo service apache2 restart`
          
        - If not installed then run the following command:
          - `sudo apt-get update`
          - `sudo apt-get install apache2`
          
      - Nginx
        - sudo service nginx restart
          
        - If not installed then run the following command:
          - `sudo apt-get update`
          - `sudo apt-get install nginx`
           
      - Finally start the php-server by running the following command:
        - `php -S 127.0.0.1:8000`
          

# You are all set to run the project!!


            
            
