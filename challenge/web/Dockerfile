# Importing ubuntu image docker hub
FROM ubuntu:20.04 

# Disabling Interactive mode
ENV DEBIAN_FRONTEND=noninteractive  

# Installing dependencies for ctf.
RUN apt update && apt install -y tzdata python3 sudo apache2 php libapache2-mod-php netcat-traditional iproute2 net-tools dnsutils iputils-ping wget && \
    ln -fs /usr/share/zoneinfo/UTC /etc/localtime && \
    dpkg-reconfigure -f noninteractive tzdata
    ENV DEBIAN_FRONTEND=noninteractive  

# Configuring /var/www/html as working dir 
WORKDIR /var/www/html  

# copying src to /var/www/html/
COPY src/ /var/www/html/

# Copying Secret.txt file to /var/www/html/
COPY src/ctf-files/secret.txt /var/www/html/.secret.txt
RUN chown -R www-data:www-data /var/www/html/.secret.txt 

#Copying ctf site config
COPY src/sys_files/my-ctf.conf /etc/apache2/sites-available/my-ctf.conf

# Copying entrypoint.sh to 
COPY entrypoint.sh /.entrypoint.sh 

# Change ownership to www-data
RUN chown -R www-data:www-data /var/www/html

# Setting full permissions to uploads 4
RUN chmod -R 777 /var/www/html/s3cr3t-dev/uploads 

# Create a user `alex`[develeper of ruhina]
RUN useradd -m -s /bin/bash alex && echo "alex:ThisIsTheStrongestPasswordInTheWorld@123" | chpasswd 

# Copying 'alex' to run sudo -l
COPY src/sys_files/sudoers /etc/sudoers  
RUN chmod 440 /etc/sudoers

# Configuring site

RUN a2dissite 000-default.conf
RUN a2ensite my-ctf.conf
RUN service apache2 restart

# Exposing credentials in backup.sh file
RUN mkdir /rce 
COPY src/ctf-files/backup.sh /rce/backup.sh

RUN chown -R www-data:www-data /rce/backup.sh

# Placing User flag
COPY src/ctf-files/user.txt /home/alex/.user.txt
RUN chown alex:alex /home/alex/.user.txt

# Placing Root flag
COPY src/ctf-files/root.txt /root/.root.txt
RUN chown root:root /root/.root.txt

# Adding execution permission to entrypoint file
RUN chmod +x /.entrypoint.sh 

# Exposing port 80 to access web service 
EXPOSE 80 

ENTRYPOINT ["/.entrypoint.sh"]
