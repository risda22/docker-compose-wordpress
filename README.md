# docker-compose-wordpress
Repo for Wordpress on Docker-compose.

Maintainer:

Risda Cahya Utami (risda.c.utami@gmail.com)

# Installation

Clone this repository on your local computer and checkout the appropriate branch e.g. 7.3.x. Run the docker-compose up -d.

    git clone https://github.com/risda22/docker-compose-wordpress.git
    cd docker-compose-wordpress
    nano docker-compose.yml
    
# How to run this docker-compose:

1. Change database on docker-compose.yml or creat your database for your wordpress.
     
        environment:
          MYSQL_DATABASE: wordpressdb
          MYSQL_USER: adminwp
          MYSQL_PASSWORD: adminwp
          MYSQL_ROOT_PASSWORD: root

2. How to build this docker-compose:

        docker-compose build -d


3. Change permission for folder html/wordpress 

        sudo chmod 777 html/wordpress

4. To install your wordpress, you must know port and network for databases. in this repository used "port 8085" for webservice and "port 3336" for mariadb or you can check with command :
   
        docker ps

5. For check network IP (see in your docker-compose.yml for name service)
   
        docker inspect <name service>  
        docker inspect wp
        docker inspect mariadb-wp
6.Install wordpress, type localhost:8085 or http://127.0.0.1:8085/wp-admin/setup-config.php klik Let's go ! > enter your database connection details (see in your docker-compose.yml don't forget to insert Database Host   with network database) > submmit and finish your installation steps.
 
7. Set permission back to 755 for security reasons

# How to get in container after run this docker-compose:

    docker exec -it wp /bin/bash
    docker exec -it mriadb-wp /bin/bash


