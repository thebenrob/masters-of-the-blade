# barbershop-site

This is a demo website used during the Adobe Summit Labs.  'Masters of the Blade' is a fake site and made up brand and is in no way affiliated with Adobe Systems Inc.

## Prerequisites

* Git
* Docker

## Instructions for running Site on MacOS

1. Open Terminal
2. Edit your local host file as an Admin `sudo vi /etc/hosts`  _(enter admin password)_
3. Press the letter `i` to enter interactive or editing mode
4. Add the following as an entirely new line to the file:   `127.0.0.1            mastersoftheblade.site`
5. Press the `esc` key to exit interactive or editing mode
6. Save and close the file `:wq`
7. Change to the directory where you'd like to store the repository `~/Projects`
8. Clone the repo to your local machine:  `git clone git@git.corp.adobe.com:brobison/barbershop-site.git barbershop-site`
9. Change directory to the cloned site:  `cd barbershop-site`
10. Make sure Docker is running and then start the docker container

  ```bash
  docker run -d -p 8080:80 --name barbershop-site -v "$PWD":/var/www/html php:7.2-apache
  ```

11. Open a browser and go the the site [http://mastersoftheblade.site:8080](http://mastersoftheblade.site:8080) and you should see the fake site.

## Installing tags on the site

The site comes with tags already installed, you can ignore this or replace it with your own.

1. Obtain and copy the environment embed code
2. Navigate to the `includes` directory of the root folder, `cd ~/Projects/barbershop-site/includes`
3. Edit the `header.php` file using a text or code editor.
4. You'll see the embed code here already.  Replace it with your new one.  This file is included on each page of the site, so this will install tags throughout the entire site.
6. Save the file(s) and refresh the site in the browser.  View the source code to ensure it worked.

## Instructions on Stopping the Site

1. Open terminal
2. Issue the command `docker ps` to see the running containers
3. Copy the "Container ID" value
4. Stop the container using the following command: `docker stop [PASTE-CONTAINER-ID-HERE]`
5. Remove the container from the machine using the following command: `docker rm [PASTE-CONTAINER-ID-HERE]`

## Troubleshooting

Q: Why do I get a 403 error when loading the site in the browser?
A: You must be in the barbershop-site directory before you start up the docker container
