<?php
session_start();

// Check if the session variables exist
if (isset($_SESSION['name'])) {
    // Display the success page content
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Employee Data Central - Success</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                background-color: #1f242d;
            }

            h1 {
                color: aliceblue;
                margin-top: 15px;
            }

            h1 span {
                color: aqua;
            }

            .footer span {
                color: #888;
            }

            .footer {
                margin-top: 15px;
                margin-left: 600px;
            }


            .container {
                padding: 20px;
                text-align: center;
            }

            .success-message {
                color: green;
                font-weight: bold;
                margin-top: 20px;
            }

            table {
                margin: 80px auto;
                border-collapse: collapse;
                width: 60%;
                max-width: 800px;
                border-style: ridge;
            }

            th,
            td {
                padding: 12px;
                border-bottom: 1px solid white;
                text-align: left;
            }

            td {
                color: aliceblue;
                font-weight: 150px;
            }


            tr span {
                color: aliceblue;
                font-weight: 150px;
            }

            tr:hover {
                background-color: #c5b7b7;
            }

            .table-header {
                color: #fff;
                font-weight: bold;
                background-color: hsla(220, 2%, 35%, 0.618);
                color: aqua;
            }

            @media (min-width: 201px) and (max-width: 600px) {
                h1 {
                    font-size: 26px;
                }

                .container {
                    margin: 45px auto;
                    max-width: 400px;
                    margin-top: 30px;
                }
                table {
                   
                     width: 90%;
                     max-width: 400px;
                }
                .footer {
                text-align: center;
                margin-top: 20px;
                margin-left: auto;
                margin-right: auto;
            }
              
            }

            @media (min-width: 601px) and (max-width: 900px) {
                h1 {
                    font-size: 30px;
                }

                .container {
                    margin: 45px auto;
                    max-width: 500px;
                    margin-top: 40px;
                }
                table {
                    
                     width:100%;
                }
                .footer {
                text-align: center;
                margin-top: 20px;
                margin-left: auto;
                margin-right: auto;
            }
            }


            @media (min-width: 901px) and (max-width: 1200px) {
                h1 {
                    font-size: 45px;
                }

                .container {
                    margin: 45px auto;
                    max-width: 800px;
                    margin-top: 60px;

                }
                table {
                width: 80%;
                margin: 0 auto;
            }
            .footer {
                text-align: center;
                margin-top: 20px;
                margin-left: auto;
                margin-right: auto;
            }
            }

            /* Styles specific to large screens (over 1200px width) */
            @media (max-width: 1201px) {
                h1 {
                    font-size: 45px;
                }

                .container {
                    margin: 150px auto;
                    max-width: 800px;
                    margin-top: 60px;

                }

                table {
                    
                     width: 70%;
                     max-width: 800px;
                }
                .footer {
                text-align: center;
                margin-top: 15px;
            }
              
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1><span>Employee</span> Details Successfully Entered</h1>

            <table>
                <tr class="table-header">
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td><span>Name</span></td>
                    <td>
                        <?php echo $_SESSION['name']; ?>
                    </td>
                </tr>
                <tr>
                    <td><span>Employee ID</span></td>
                    <td>
                        <?php echo $_SESSION['employeeId']; ?>
                    </td>
                </tr>
                <tr>
                    <td><span>Email ID</span></td>
                    <td>
                        <?php echo $_SESSION['email']; ?>
                    </td>
                </tr>
                <tr>
                    <td><span>Role</span></td>
                    <td>
                        <?php echo $_SESSION['role']; ?>
                    </td>
                </tr>
                <tr>
                    <td><span>Experience</span></td>
                    <td>
                        <?php echo $_SESSION['experience']; ?>
                    </td>
                </tr>
                <tr>
                    <td><span>Tools</span></td>
                    <td>
                        <?php echo $_SESSION['tools']; ?>
                    </td>
                </tr>
            </table>

            <p class="success-message">The employee details have been successfully saved, and the photo has been
                successfully uploaded.</p>
        </div>
        <div class="footer">
            <span>&copy; 2023 | Rashid Baig | All rights reserved.</span>
        </div>

        <script>
            // Check if the page has been refreshed
            if (performance.navigation.type === 1) {
                // Clear the session variables
                <?php session_unset(); ?>

                // Redirect to the fresh form page (index.html)
                window.location.href = "index.html";
            }
        </script>
    </body>

    </html>

    <?php
} else {
    // Redirect to the fresh form page (index.html) if session variables do not exist
    header("Location: index.html");
    exit;
}
?>