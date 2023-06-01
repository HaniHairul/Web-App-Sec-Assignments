# Web-App-Sec-Assignment

<h2>1. index.html</h2> 
A file that contain the student details form. It is on the client side. The user should fill in the details and need to follow the requirement.

<h2>2. style.css</h2> 
Controls the presentation, such as the visual design and layout of the website page, which is index.html.

<h2>3. validateForm.js</h2> 
A file that will provide error-friendly notifications.

<h2>4. action.php</h2> 
A file that will show the detail of the student after they submit the form. This file is on the server side.

<h2>5. register.php</h2> 
The users will register their username, email, and password. They need to follow the requirement.

<h2>6. login.php</h2> 
Where the users will fill in their recent email and password from the registration.php, which will be authenticated and authorized first. If the user is a student and the email and password are matched with the database, they will see the student detail page (action.php), but if he/she is an admin and the email and password are matched with the database, then they will see the data from the register.php.

<h2>7. db.php</h2> 
A file to connect the PHP file to the database.

<h2>8. auth_session.php</h2> 
A file to create a session for the user.

<h2>9. logout.php</h2> 
When the user clicks the logout button, and the session is destroyed. Then, it will redirect to the login page (login.php).

<h2>10. style1.css</h2>
Controls the presentation, such as the visual design and layout of the website page, which is register.php.

<h2>11. admin.php</h2> 
Where the admin can see the data from the database (register.php).

<h2>12. CSP</h2>
CSP code is added at the meta tag in the register.php. By using "default-src", then neither the other website script nor the background image would load.

<h2>13. XSS</h2>
XSS is prevented using regex at every input text box.

<h2>14. CSRF</h2>
CSRF token is implemented at the auth_session.php. 
