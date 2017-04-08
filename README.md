# Simple-Shopping-Cart-PHP-Symfony-2.8-Doctrine-ORM-
This a so simple shopping cart using symfony 2.8 and doctrine ORM for control database which is MYSQL.

# Cart Project:

Its so simple one using symfony2 and mysql database using Doctrine ORM to handle database requests.

# Requirements:
  - Linux >= 14.04
  - PHP  >= 5.4
  - MYSQL
  - LAMP server
  

# Features: 

  - you can create an account or login using your username and password.
  - add some products to your shopping cart.
  - edit item quantity.
  - delete some item from it.
  - clear all your shopping cart.

# Run it:

        - You should install symfony 2.8 on your pc please do it right now:
                
                 sudo mkdir -p /usr/local/bin
                 sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
                 sudo chmod a+x /usr/local/bin/symfony
        
       -  Then download or clone the project folder.
       
       - Run :
              cd /var/www/YOUR-FOLDER-NAME
              composer install
         after composer finish of install all vendors you should go to 
               <  /app/config/parameters.yml   > and add at te end of the file this line
               admin_skin: skin-blue
       
       -  You will find in the project folder file named ==>>  cart.sql
           create database call it [cart] and then import this file to it
           if you wanna name database any other name so do it but before start project go to
                  <  /app/config/parameters.yml   >
              Then change the database data by your data.
           
           
        - you can # run it # now using two methods:
          1- do this:
              sudo chmod 777 -R /var/www/project-name
              cd /var/www/project-name
              php app/console server:run
          2- And that's the prefered for me:
              by creating { <  Virtual host to it > }
              you can do it by follow this link :
                  ===>  https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-14-04-lts
                        ( please, keep this site with you its an awesome reference )
              
              or by follow my next instructions:
                    sudo nautilus     ==>  to open your file browser as  [sudo] 
                    now go to file system --> computer go to /etc/apache2/sites-available
                    and copy   000-default.conf  file and paste it then rename it 
                    to whatever you want let's say   it will be    {{  cart.conf }}
                    then open it and remove all text in it and put next one:
                    
                        <VirtualHost *:80>
                              ServerAdmin raafat@gmail.com
                                DocumentRoot "/var/www/YOUR-FOLDER-NAME/web"
                                ServerName cart.dev
                                ServerAlias www.cart.dev
                                <Directory "/var/www/YOUR-FOLDER-NAME/web">
                                    Options Indexes FollowSymLinks
                                    AllowOverride All
                                    Require all granted  
                                </Directory>

                              ErrorLog ${APACHE_LOG_DIR}/error.log
                              CustomLog ${APACHE_LOG_DIR}/access.log combined
                          </VirtualHost>
                      
                      then save it and close it and then go back to your   /etc/  folder
                      find hosts file then edit it and add to it this line
                         127.0.1.1     cart.dev
                      save it and close.
                      Finally do this:
                          sudo a2ensite cart.conf
                          sudo service apache2 restart
                      
                # Now go to your browser and type #cart.dev  it will open project for you to start the project 
                type
                    cart.dev/app_dev.php/products

# Used for it:

Am using adminLTE for making this design and to make login and register using FOSUser bundles.
Here is there url to study them :
      https://github.com/avanzu/AdminThemeBundle
      http://symfony.com/doc/master/bundles/FOSUserBundle/index.html
      
Please Leave comments and anything you want to say. 
I hope this simple work helping you to understand basics.

Code is structured and commented so i think you will understand it.

Thank you
              
