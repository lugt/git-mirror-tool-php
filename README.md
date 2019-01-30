# git-mirror-tool-php

Git mirror tool with PHP (push, pull stuff)


# Getting Started

## Prerequisites:

Nginx(Httpd also okay, however not recommmended), PHP-FPM (php-cgi for httpd)  
After installed the prerequisites properly and Nginx server running , you may start with:  

## Downloading and Install

/usr/local/nginx/html represents where your nginx webroot dir is located  

```

cd /usr/local/nginx/html
git clone https://github.com/lugt/git-mirror-tool-php mirror

```

## Configuration

After cloning, you may try to edit the update.php within, replace 

```
pull_dir("/home/xc5/git/html");
pull_dir("/home/xc5/git/xcalibyte");
```

with the correct location to your repo needed to be auto-updated.

Also replace the `cdsuifninuo23ioidnsvnuvdbicdnnjcjssdcn` with the secret value you may randomly choose,
say `XXXXXXXsecretvalueXXXXXX`;


Upon completion, you shall view the page under  
`http://yourhost.com/mirror/update.php?XXXXXXXsecretvalueXXXXXX=1`
and see the following message 

```
***************************************************
*** Pulling /home/xc5/git/html ****
***************************************************


...


---- Pull Dir (/home/xc5/git/html) Success ----
```

## Integrate with Gitlab.com / Gitlab WebHook / Github.com

Goto your repo's settings page on whichever git services you are using.
And and the `http://yourhost.com/mirror/update.php?XXXXXXXsecretvalueXXXXXX=1` 
as a webhook to your repo upon push events.

Upon this step, your configurations are in effect now, you may test this mechanism by uploading some commit to the repo and see of the web-dir has been changed.


# Introduction

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

