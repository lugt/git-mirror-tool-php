# git-mirror-tool-php

Git mirror tool with PHP (push, pull stuff)


# Getting Started

This is useful to host a CI server that respond to Gitlab / Github / Git Webhook,    
that automatically pull & push repo between mirrors and do some customizable things.  

Basically, It's just a PHP calling some command-line.   

# Security

There is no guaranteed security here, you are opt to establish some secure channel  
between your git server or keep some secret key between your server and this service 


for example your git integration hook might look like :

where you might want to check this secret value in the upload.php to   
makesure that this is not a DDoS attack going on.

```
http://example.com/path/to/upload.php?secretvalue=XXXXXXXXXXXXXX
```

# Prerequisites

You should use a PHP accessable server (httpd or nginx) and PHP itself (or php-fpm with Nginx)

On CentOS:
```
sudo yum install -y nginx httpd php php-fpm
```


On Ubuntu 16+
```
sudo apt install -y nginx httpd php php-fpm
```


# Contributor

@lugt


# Contributing

Feel free to change something or generalize this : ),
Submit a Pull-Request and I will know about your work.

