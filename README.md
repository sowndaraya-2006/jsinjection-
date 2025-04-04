🛡 Vulnerable Web Application Demo
This project is a demonstration of common web application vulnerabilities such as SQL Injection (SQLi) and Cross-Site Scripting (XSS). It also includes a simple JavaScript greeting form and a sales chart using Chart.js. The purpose is to help learners understand security risks in web development and how vulnerable code looks in practice.

⚠️ Disclaimer
This project is intended for educational purposes only.
Do NOT deploy this code in a real or public-facing environment.
All vulnerabilities are intentional for the sake of demonstration.

📂 Project Structure
🔸 HTML Files
index.html
Main vulnerable web page. Demonstrates:

XSS via URL parameters

Inline script injections

Comment input field

demopage.html
Login form styled with embedded CSS. Posts data to login.php.

d.html
Displays a bar chart of monthly sales using Chart.js.

🔸 JavaScript
app.js
Handles a greeting form. Safely displays a personalized message using textContent.

🔸 PHP
login.php
Processes login credentials. May be vulnerable to SQL Injection for demo purposes.

🔸 CSS
style.css
Styling for the main page (index.html).

demo.css
Styling for the login form page (demopage.html).

s2.css
Alternate or backup CSS, similar to demo.css.

🔸 ZIP Archive
sql_injection.zip
Contains additional material related to SQL Injection attacks (content not shown here).

▶️ How to Run
Use a local server such as:

XAMPP / WAMP (for PHP support)

Python HTTP server (python -m http.server)

Place all files inside the server's root directory (e.g., htdocs for XAMPP).

Open your browser and visit:

http://localhost/index.html

http://localhost/demopage.html

http://localhost/d.html

✨ Features & Usage
Page/File	Feature
index.html	Comment form, greeting via URL, XSS demo (<script> injection)
app.js	Form submission with DOM-safe output
demopage.html	Login page posting to login.php, intended for SQLi demonstration
login.php	Backend login logic (not visible here), likely contains vulnerable SQL
d.html	Displays a dynamic bar chart using Chart.js
Try:

Opening index.html?Hello+World → Message appears

Adding <script>alert('XSS')</script> to test script injection

Using ' OR '1'='1 in the login form for SQLi

🎯 Learning Objectives
Understand how XSS and SQL Injection vulnerabilities occur.

Learn about insecure vs. secure DOM manipulation in JavaScript.

Visualize data using a JavaScript chart library (Chart.js).

Experiment with and identify security flaws in web applications.

📚 Credits
Chart.js – Used for rendering the bar graph in d.html.

