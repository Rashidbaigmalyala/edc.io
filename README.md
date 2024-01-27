# edc.io
PROJECT REPORT 
 Introduction
This report aims to provide an overview of the implementation of the end-to-end website deployment on an EC2 instance with RDS connectivity and storing details in RDS while storing photos in S3. The Employee Data Central web application is designed to collect and store employee information. It provides a user-friendly interface for employees to enter their details, including their name, employee ID, email, role, experience, and tools. The application also allows employees to upload their photos for identification purposes. Once the employee submits the form, the data is stored in a MySQL database.
Goals of the Project:
The goals of the project were to:
Develop a web application for storing employee information.
Deploy the web application on an EC2 instance.
Establish connectivity with RDS to store employee data.
Enable employees to upload their photos for identification.
Store the uploaded photos in an S3 bucket.
Ensure the security, and scalability of the web application.

HTML Structure and Styling:
The web application is built using HTML, CSS, and PHP. The HTML code defines the structure of the web pages, including the form fields and layout. The CSS styles are used to enhance the application's appearance, with a gradient background, responsive design for different screen sizes, and various formatting elements.
The form page displays the Employee Data Central header and a container for the form.
The form collects the information from the employee.
The form also includes client-side JavaScript code to display the selected file name and a confirmation dialog before submission.

PHP Backend:
The PHP code handles the submission of the form and the storage of employee data in the MySQL database.
Establishing a Database Connection.
Form Submission Handling.
Success Page.

Conclusion:
The implementation of the end-to-end website deployment on an EC2 instance with RDS connectivity and integration with S3 has been completed. The website is now live and functional, and the Employee Data Central web application provides an intuitive interface for employees to submit their information securely. It utilizes HTML, CSS, and PHP technologies to collect, store, and display employee data.The application enhances user experience with responsive design and validation logic, ensuring the accuracy and integrity of the collected information.
The following are some of the benefits of this deployment architecture:
The data is stored in a secure and reliable database.
The photos are stored in a scable and cost-effective object storage service.
The website is highly available and can be accessed from anywhere in the world.


