echo "      ######################################"
echo "      ##     Container build started      ##" 
echo "      ######################################"

cd web && sudo docker build  --tag my-ctf .

echo "      ######################################"
echo "      ##     Container build completed    ##" 
echo "      ######################################"


sudo docker run -d --name ctf-room my-ctf

echo "      ######################################"
echo "      ##        Container Running         ##" 
echo "      ######################################"

echo you can access it via http://<container-ip>
