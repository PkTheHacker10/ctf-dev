echo "      ######################################"
echo "      ##     Container build started      ##" 
echo "      ######################################"

cd web && sudo docker build  --tag ctf .

echo "      ######################################"
echo "      ##     Container build completed    ##" 
echo "      ######################################"


sudo docker run -d --name ctf-room ctf

echo "      ######################################"
echo "      ##        Container Running         ##" 
echo "      ######################################"

# HOST machine configuration
#----------------------------#
# Installl ngnix for reverse proxy 
# Run to get ip address of the running container
    # sudo docker exec -it ctf-room ifconfig
# Sudo nano /etc/nginx/sites-available/rev-proxy.conf and add this  
            # server {
            #     listen 80;
            #     server_name <your_host_ip>;

            #     location / {
            #         proxy_pass http://<container_ip>:80;
            #         proxy_set_header Host $host;
            #         proxy_set_header X-Real-IP $remote_addr;
            #         proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
            #         proxy_set_header X-Forwarded-Proto $scheme;
            #     }
            # }

# Now you can access it via your host at port 80
# NOTE: If apache is running on port 80 it may cause errors so it is good to stop the apache until this test.

# TO stop container (once you complete) run this 
    # sudo docker stop ctf-room     
# TO remmove container (once you complete) run this 
    # sudo docker rm ctf-room