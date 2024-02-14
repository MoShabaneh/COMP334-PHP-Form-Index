<!DOCTYPE html>
<html>
<head>
<title>Student Information System</title>
</head>
<body>
    <h1>Student Profile</h1>
    <form action="" method="post">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" style="margin: 10px;"><br><br>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" style="margin: 10px;">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" style="margin: 10px;"><br><br>


        <label for="gender">Gender:</label>
        <input type="radio" id="gender_male" name="gender" value="1">Male</input>
        <input type="radio" id="gender_female" name="gender" value="2">Female</input><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" style="margin: 10px;"><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" style="margin: 10px;"><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" style="margin: 10px;">
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" style="margin: 10px;"><br><br>

        <label for="tel">Telephone:</label>
        <input type="text" id="tel" name="tel" style="margin: 10px;" placeholder="+970598363203"><br><br>

        <button type="submit" name="action" value="view">View</button>
        <button type="submit" name="action" value="insert">Insert</button>
        <button type="submit" name="action" value="update">Update</button>
        <button type="submit" name="action" value="clear">Clear</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'Data.in.php'; // Include file holding student data array

        // Check which button was clicked
        if (isset($_POST['action'])) {
            $action = $_POST['action'];

            // Handle different actions
            switch ($action) {
                case 'view':
                    // Retrieve and display student information based on ID
                    $studentID = $_POST['student_id'];
                    if (isset($student_array[$studentID])) {
                        // Retrieve the student object
                        $student = $student_array[$studentID];

                        // Display student information
                        echo '<input type="text" id="first_name" name="first_name" style="margin: 10px;" value='.$student->firstName.'>';
                    } else {
                        echo "Student not found!";
                    }
                    break;
                case 'insert':
                    // Insert logic here
                    // Retrieve form data and create a new student object
                    // Add it to the student array if necessary
                    break;
                case 'update':
                    // Update logic here
                    // Retrieve form data and modify existing student object in the array
                    break;
                case 'clear':
                    // Clear or reset form fields
                    break;
                default:
                    // Handle any other actions or errors
                    break;
            }
        }
    }
?>

</body>
</html>