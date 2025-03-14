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
1. **Find the Abandoned Gate** – Discover the forgotten entrance hidden within the castle.
2. **upload your exploit [php]** – Deploy a trusted entity through the gate to establish control.
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
./setup.sh
```
## Method 2: Manual Deployment
Follow these steps to set up the challenge manually:
```
cd /src
sudo docker build -t my-ctf .
sudo docker run -it --name ctf-room my-ctf
```
## Detailed Walkthough 
You can read the walkthrough for challenge solution from WALKTHROUGH.md