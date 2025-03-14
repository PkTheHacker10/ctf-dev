# The Abandoned Gate

## Category
**Web Exploitation** (File Upload → RCE → Privilege Escalation)

## Difficulty
**Medium**

---

## Challenge Description
This challenge focuses on identifying and exploiting a file upload vulnerability that leads to Remote Code Execution (RCE) and privilege escalation. The application includes an insecure file upload mechanism that can be abused to gain unauthorized access to the system. Participants must locate the vulnerable upload point, exploit it to obtain a shell, and escalate their privileges to gain full control over the system.
---

## Objectives
1. **Find the Abandoned Gate[file upload functionality]** 
2. **upload the exploit [php]** .
3. **Trigger the exploit to Take a Reverse Shell** – Exploit the vulnerability to gain a remote shell.
4. **Escalate Privileges to root** – Gain root access through privilege escalation.

---

## Setup Dependency
- Docker

Ensure you have **Docker** installed on your system. You can download it from [Docker's official site](https://docs.docker.com/get-started/get-docker/).

---

## Setup Guide

### Method 1: Automated Setup
Run the provided `setup.sh` script to automate the container build and execution:
```sh
cd ctf-dev/challenge
sudo ./setup.sh
```
## Method 2: Manual Deployment
Follow these steps to set up the challenge manually:
```
cd ctf-dev/challenge/web
sudo docker build -t my-ctf .
sudo docker run -d --name ctf-room my-ctf
```
You should find your docker ip to access the web to test this vulnerability
you can get it by this command

```
sudo docker exec ctf-room ifconfig
```
Now you can be able to access it via " http://container-ip " from your host

## Steps to remove stop and remove container 
```
sudo docker stop ctf-room 
sudo docker rm ctf-room
```

## Detailed Walkthough 
You can read the walkthrough for challenge solution from WALKTHROUGH.md
