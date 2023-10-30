CREATE DATABASE parcial1;
USE parcial1;
CREATE TABLE `login` (
  `name` VARCHAR(20) NOT NULL,
  `password` VARCHAR(20) NULL,
  PRIMARY KEY (`name`)); 

INSERT INTO  login (name,password)
VALUES ("rodolfo" , "1234pass");


App Login Screen Requirements
 
 Functional Requirements:
 
1. User Registration:
   - Users should be able to register for an account by providing a valid email address and password.
   - Registration should include validation of email format and password strength.
   - The system must provide clear and concise instructions during the registration process.
 
2. User Login:
   - Registered users should be able to log in with their email and password.
   - User authentication should be securely handled, and passwords must be hashed and salted before storage.
 
3. Forgot Password:
   - Users should have the option to reset their password if forgotten.
   - This process should involve sending a password reset link to the user's registered email.
   - The password reset must be done through your validated email.
 
4. Session Management:
   - User sessions should be managed securely, including session timeouts and the ability to log out.
 
5. Authentication Using a Database:
   - User data, including credentials, should be stored securely in a database.
   - Database access should be protected and follow best security practices.
 
6. Authentication Using an API:
   - The system should interact with an authentication API for additional security checks, such as multi-factor authentication (MFA).
   - API endpoints should be secured with appropriate authorization mechanisms.
 
7. Error Handling:
   - Proper error messages should be displayed to users for failed login attempts or other authentication-related errors.
   - Log and handle errors gracefully to avoid exposing sensitive information.
 
 Non-Functional Requirements:
 
1. Security:
   - The login screen must implement strong security measures to protect user data and authentication credentials.
   - Use encryption for data transmission and implement best practices for secure password storage.
 
2. Performance:
   - The login process should be fast and responsive, even during high traffic loads.
   - Optimize database queries and API calls to minimize response times.
 
3. Scalability:
   - The authentication system should be designed to scale horizontally to accommodate growing numbers of users.
   - Consider load balancing and database sharding strategies.
 
4. Availability:
   - Ensure high availability of the authentication system to prevent service disruptions.
   - Implement redundancy and failover mechanisms.
 
5. Compatibility:
   - The login screen should be compatible with various web browsers and mobile devices.
   - Test and ensure a consistent user experience across different platforms.
 
6. Logging and Auditing:
   - Implement comprehensive logging and auditing to track login attempts and system behavior.
   - Logs should be stored securely and regularly reviewed.
 
7. User Experience (UX):
   - Design the login screen with a user-friendly interface and provide clear instructions.
   - Use responsive design principles for usability on different screen sizes.
 
# C4 Architecture Diagram
 
 Context (C1):
 
- Authentication System: This component represents the entire authentication system, including the login screen.
 
 Containers (C2):
 
- Web Application: This container represents the frontend of the application, including the user interface.
- Authentication API: This container represents the backend API responsible for user authentication.
- Database: This container stores user account information securely.
 
 Components (C3):
 
- Login Screen UI: The user interface component responsible for rendering the login screen.
- Authentication Controller: Manages user authentication logic on the frontend.
- Authentication Service: Handles user authentication requests to the API.
- API Authentication Middleware: Authenticates and authorizes incoming requests to the API.
- Database Service: Manages interactions with the database, including user data retrieval and storage.
 
 Code (C4):
 
- Each component in C3 will have its corresponding codebase, including HTML/CSS/JavaScript for the UI, backend code for the API and database interaction, and appropriate middleware.
 
This architecture diagram provides a high-level view of the authentication system, illustrating the key components and their interactions.
