<!DOCTYPE html>
<html>
<head>
  <title>Php test</title>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('admissionForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var firstName = document.getElementById('firstName').value.trim();
        var lastName = document.getElementById('lastName').value.trim();

        if (firstName === '' || lastName === '') {
          alert('Please fill in all fields');
        } else {
          event.target.submit();
        }
      });
    });
  </script>
</head>
<body>
<form id="admissionForm" action="process_admission.php" method="post" enctype="multipart/form-data">
  <label for="firstName">First Name:</label>
  <input type="text" id="firstName" name="firstName" required><br><br>

  <label for="lastName">Last Name:</label>
  <input type="text" id="lastName" name="lastName" required><br><br>

  <label for="address">Address:</label>
  <input type="text" id="address" name="address" required><br><br>

  <label for="city">City:</label>
  <input type="text" id="city" name="city" required><br><br>

  <label for="state">State:</label>
  <select id="state" name="state" required>
    <option value="state1">State 1</option>
    <option value="state2">State 2</option>
    
  </select><br><br>

  <label for="country">Country:</label>
  <select id="country" name="country" required>
    <option value="country1">Germany</option>
    <option value="country2">india</option>
    
  </select><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="mobile">Mobile:</label>
  <input type="tel" id="mobile" name="mobile" required><br><br>

  <label for="qualification">Qualification:</label>
  <input type="text" id="qualification" name="qualification" required><br><br>

  <label for="courseName">Course Name:</label>
  <input type="text" id="courseName" name="courseName" required><br><br>

  <label for="admissionDate">Admission Date:</label>
  <input type="date" id="admissionDate" name="admissionDate" required><br><br>

  <label for="loginID">Login ID:</label>
  <input type="text" id="loginID" name="loginID" required><br><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required><br><br>

  <label for="photo">Photo:</label>
  <input type="file" id="photo" name="photo" accept="image/*" required><br><br>

  <input type="submit" value="Submit">
</form>
</body>
</html>
