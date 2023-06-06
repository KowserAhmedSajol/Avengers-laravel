<!DOCTYPE html>
<html>
<head>
<style> 

input[type=text] {
  width: 100%;
  padding: 6px 10px;
  margin: 0px 0;
  box-sizing: border-box;
  border: 1px solid rgb(8, 145, 10);
  border-radius: 4px;
}
label {
    color: black;
    margin: 0;
    padding-bottom: 0;
}

body {
  margin: 0;
  padding: 1rem .5rem;
  font: 1rem/1.5 "PT Sans", Arial, sans-serif;
  color: #5a5a5a;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: black;
  padding: 6px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 0px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
    width: 100%;
  background-color: transparent; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<h2>ADD NEW AVENGER</h2>

<form>
  <label style="margin-bottom: 0px;" for="name">Name</label>
  <input type="text" id="name" name="name">
  <label style="margin-bottom: 0px;" for="aka">Known As</label>
  <input type="text" id="aka" name="knownAs">
  <label style="margin-bottom: 0px;" for="ability">Ability</label>
  <input type="text" id="ability" name="ability">
  <label style="margin-bottom: 0px;" for="uses">Uses</label>
  <input type="text" id="uses" name="uses">
  <label style="margin-bottom: 0px;" for="villain">Villain</label>
  <input type="text" id="villain" name="villain">
  <label style="margin-bottom: 0px;" for="gender">Gender</label>
  <input type="text" id="gender" name="gender">
  <label style="margin-bottom: 0px;">Upload Image:</label>
  <div class="custom-file mb-3">
    <input type="file" class="custom-file-input" id="customFile" name="image">
    <label class="custom-file-label" for="customFile">Choose Image</label>
  </div>
  <button class="button button1" type="submit"> ADD NEW AVENGER </button>
</form>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
</body>
</html>


