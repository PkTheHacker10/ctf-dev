# Importing ubuntu image docker hub
FROM ubuntu:20.04 

# Running update & upgrade and installing requirements for ctf .
RUN apt update && apt install -y apache2 php libapache2-mod-php netcat-traditional python3 sudo

# copying src to /var/www/html/
COPY src/ /var/www/html/

# Disable intractive prompts 
ENV DEBIAN_FRONTEND=noninteractiv

# Setting full permissions so uploads 
RUN chmod -R 777 /var/www/html/uploads 

#Change ownership to www-data
RUN chown -R www-data:www-data /var/www/html

# Create a user `alex`[develeper of ruhina]
RUN useradd -m -s /bin/bash alex && echo "alex:password" | chpasswd 

# Making 'alex' to run sudo -l
COPY sudoers /etc/sudoers  
RUN chmod 440 /etc/sudoer

# Copying entrypoint.sh to 
COPY entrypoint.sh /entrypoint.sh 

# Adding execution permission to entrypoint file
RUN chmod +x /entrypoint.sh 

# Exposing port 80 to access web service 
EXPOSE 80 

ENTRYPOINT ["/entrypoint.sh"]