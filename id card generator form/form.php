<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <form action="id.php" method="post" enctype="multipart/form-data" >
      <h1>Create Your Virtual ID Card</h1>

      <!-- NAME FIELD -->
      <div class="form-field">
        <label for="field" class="label--required">Name</label>
        <section>
          <input id="field" name="user_name" required type="text" placeholder="John Doe" />
        </section>
      </div>

      <!-- PHONE FIELD -->
      <div class="form-field">
        <label for="phone" class="label--required">Phone</label>
        <section>
          <input id="phone" name="user_phone" required type="tel" placeholder="(234) 234-2342" />
        </section>
      </div>

      <!-- EMAIL FIELD -->
      <div class="form-field">
        <label for="email" class="label--required">Email</label>
        <section>
          <input id="email" name="user_email" required type="email" placeholder="somebody@me.com" />
        </section>
      </div>
      
      <!-- Course FIELD -->
      <div class="form-field">
        <label for="course" class="label--required">Course</label>
        <section>
          <input type="text" name="user_course" placeholder="Name of Your Course" />
        </section>
      </div>

      <!-- Batch FIELD -->
      <div class="form-field">
        <label for="batch" class="label--required">Batch No</label>
        <section>
          <input type="text" name="user_batch" placeholder="Your Batch No" />
        </section>
      </div>

      <br>

      
      <!-- Upload Image Fifld -->
      <div class="upload_img">
      Upload Photo:  <input type="file" name="upload_img">
      </div>



      <!-- BUTTONS -->
      <div class="form-buttons">
        <input type="submit" name="submit" value="Generate ID" class="a-btn--filled">
      </div>
      <div class="form-buttons">
        <input type="reset" name="submit" value="Reset" class="a-btn--filled">
      </div>

    </form>
  </main>
</body>

</html>