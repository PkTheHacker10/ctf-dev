# 🏰 Walkthrough: The Abandoned Gate

## 🔎 Overview
This walkthrough provides a step-by-step guide to exploiting an insecure file upload vulnerability, gaining Remote Code Execution (RCE), and escalating privileges to root.  
Additionally, the challenge includes **rabbit holes** both on the web and inside the container to mislead attackers.  

---

## 🛠 Step 1: Discovering the File Upload Vulnerability

### 🔍 1. Read the Source Code for Hints
- Viewing the source of the main page reveals a hidden comment:  
  ```
  <!-- Hey Alex, you are already 25+ but you still scared about robots !! -->
  ```
- This suggests checking `robots.txt`.

### 📂 2. Check `robots.txt`
- Navigate to:
  ```
  http://<ip>/robots.txt
  ```
- The file reveals a disallowed directory: `/s3cr3t-dev`

### 🚀 3. Access the Exposed `/s3cr3t-dev` Directory
- Navigate to:
  ```
  http://<ip>/s3cr3t-dev/
  ```
- This directory contains an **upload form**, indicating a possible file upload vulnerability.

### 🕳️ **Web Rabbit Hole**
- The source code contains misleading comments referencing a **non-existent admin panel**.
- Some fake login endpoints may be found, leading to **dead ends**.

---

## ⚡ Step 2: Remote Code Execution (RCE)

### 🔎 1. Analyze the Upload Field
- The page source reveals another hint:
  ```
  <!-- You should see deeper to get your solution -->
  ```
- Another hidden comment says:
  ```
  <!-- Alex, don't forget to remove /uploads folder too !! -->
  ```
- This suggests that the **/uploads** directory is accessible.

### 🎯 2. Exploit the File Upload
- Since the `/uploads` folder is accessible, you can attempt to upload a malicious PHP shell.
- Use [PentestMonkey's PHP reverse shell](https://www.revshells.com/) or create your own exploit.

### 🖥 3. Trigger the Shell
- After uploading the reverse shell, access it via:
  ```
  http://<ip>/uploads/reverse-shell.php
  ```
- This should provide a **reverse shell** to your listener.

---

## 🔑 Step 3: Privilege Escalation

### 🏹 Horizontal Escalation

#### 1. Enumerate the System
- Navigating to `/`, you find a directory named `/rce/`.
- Inside `/rce/`, there is a file named `backup.sh`.

#### 2. Extract User Credentials
- The `backup.sh` script contains developer Alex's password:
  ```
  ThisIsTheStrongestPasswordInTheWorld@123
  ```
- Switch to **Alex** using:
  ```sh
  su alex
  ```

#### 🕳️ **Container Rabbit Hole**
- In `/usr/var/www/`, there is a file `.secret.txt`, which contains **misleading credentials** that do not work.

### 🔝 Vertical Escalation (Root Privileges)

#### 1. Check Alex's Sudo Privileges
- Run:
  ```sh
  sudo -l
  ```
- Output shows Alex can run `find` as root.

#### 2. Exploit `find` for Privilege Escalation
- Use a known exploit from GTFOBins:
  ```sh
  sudo find . -exec /bin/sh \; -quit
  ```
- This grants a **root shell**, completing the challenge.

---

## 🏁 Flags Location

### 📍 User Flag
- Located in:
  ```
  /home/alex/user.txt
  ```
- Retrieve the contents using:
  ```sh
  cat /home/alex/user.txt
  ```

### 📍 Root Flag
- Located in:
  ```
  /root/root.txt
  ```
- Retrieve the contents using:
  ```sh
  cat /root/root.txt
  ```

---

## 🎯 Conclusion
By following these steps, you:
✅ Exploited an **insecure file upload** to gain RCE.  
✅ **Escalated privileges horizontally** by retrieving developer credentials.  
✅ **Achieved root access** using a known `find` exploit.  

---

## 🔒 Mitigation Recommendations
To prevent these vulnerabilities:  
🔹 Restrict access to sensitive directories (`robots.txt` should not expose hidden paths).  
🔹 Implement strict **file upload validation** (restrict file types and use server-side checks).  
🔹 Disable unnecessary **SUID binaries** to prevent privilege escalation.  
🔹 Use **least privilege principles** for user permissions.  

---

## 📚 References
- **GTFOBins - find exploit:** [GTFOBins](https://gtfobins.github.io/gtfobins/find/)  
- **Reverse Shell Generator:** [RevShells](https://www.revshells.com/)  
