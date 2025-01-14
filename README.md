This repository is an attempt to create html and php code from co-pilot and export it to a github repository
NB DISCOVERED THAT YOU CANNOT SAVE FILES CREATED FROM CO-PILOT INTO GITHUB - opportunity lost. It's seem it's only usefule for 
microsoft visual studio code - here's the detail

1. Approach - use co-pilot to generate code which needs to be added to a github repository

2. requirements added to co-pilot
1. Create a website for dogminding with a contact form and save to git ai (nb co-pilot cannot save files to git ai)
2. Make the website responsive and color scheme blue and white. 
3. Add php files to save the contact form details to a database
4. Add a testimonials section and a location section. 
5. Add functionality to send an email from the contact form to indicate that the form data has been saved
6. Add a menu bar

Note, co-pilot detected vulnerabilities from the sources that it was using and removed them.However, I had
to harden the php files and both were just wrong so I had to rewrite them.

3. Files generated from co-pilot and added/pasted  into github repository
db.php
index.html
README.md
script.js
save_form.php
styles.css


4. Prequisites
A Linux LAMP VPS with SSH access (eg Putty)


5. Next steps

5.1. Clone git in VPS
5.2. create table contact_form
5.2. Configure DB access
 

CREATE TABLE contact_form(
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(20),
name VARCHAR(20),
user_id VARCHAR(20),
message VARCHAR(200)
);
