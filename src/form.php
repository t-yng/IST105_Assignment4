<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment4 | IST105</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
      }

      h1 {
        text-align: center;
      }

      .form-group {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        left: -16px;
        margin-bottom: 15px;
      }

      label {
        margin-right: 6px;
      }

      input[type="number"] {
        width: 140px;
        padding: 5px;
      }

      button {
        display: block;
        margin: 0 auto;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      button:hover {
          background-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <h1>Assignment4 IST105</h1>
    <form action="/process.php" method="POST">
      <div class="form-group">
        <label for="a">A: </label>
        <!-- We should use number. Using text type to check python script -->
        <input type="text" id="a" name="a" />
      </div>
      <div class="form-group">
        <label for="b">B: </label>
        <!-- We should use number. Using text type to check python script -->
        <input type="text" id="b" name="b" />
      </div>
      <div class="form-group">
        <label for="c">C: </label>
        <!-- We should use number. Using text type to check python script -->
        <input type="text" id="c" name="c" />
      </div>
      <button>Calculate</button>
    </form>
  </body>
</html>
