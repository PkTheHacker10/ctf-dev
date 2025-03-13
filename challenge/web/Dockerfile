# Importing ubuntu image docker hub
FROM ubuntu:20.04 

ENV DEBIAN_FRONTEND=noninteractive  

RUN apt update && apt install -y tzdata python3 sudo apache2 php libapache2-mod-php netcat-traditional iproute2 net-tools dnsutils iputils-ping wget && \
    ln -fs /usr/share/zoneinfo/UTC /etc/localtime && \
    dpkg-reconfigure -f noninteractive tzdata
    ENV DEBIAN_FRONTEND=noninteractive  

WORKDIR /var/www/html  

# copying src to /var/www/html/
COPY src/ /var/www/html/

# Setting full permissions to uploads 4
RUN chmod -R 777 /var/www/html/s3cr3t-dev/uploads 

# Change ownership to www-data
RUN chown -R www-data:www-data /var/www/html

# Create a user `alex`[develeper of ruhina]
RUN useradd -m -s /bin/bash alex && echo "alex:password" | chpasswd 

# Making 'alex' to run sudo -l
# COPY src/sudoers /etc/sudoers  
# RUN chmod 440 /etc/sudoers

# # Copying entrypoint.sh to 
# COPY entrypoint.sh /entrypoint.sh 

# # Adding execution permission to entrypoint file
# RUN chmod +x /entrypoint.sh 

# # Exposing port 80 to access web service 
# EXPOSE 80 

# ENTRYPOINT ["/entrypoint.sh"]