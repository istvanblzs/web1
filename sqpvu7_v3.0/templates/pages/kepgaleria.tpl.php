<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  margin: 1px;
  border: 5px solid #ccc;
  float: left;
  width: auto;
  height: 300px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 100px;
  text-align: center;
}
</style>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
Válasszon feltöltendő képfájlt:
<input type="file" name="file">
<input type="submit" name="submit" value="Feltöltés">
</form>
<hr>
  <?php
  // Include the database configuration file
  include 'config.php';
  // Get images from the database
  $query = $db->query("SELECT file_name FROM images ORDER BY uploaded_on DESC");
  if($query->num_rows > 0){
      while($row = $query->fetch_assoc()){
          $imageURL = 'uploads/'.$row["file_name"];
  ?>
      <img src="<?= $imageURL; ?>" />
  <?php }} ?>

<div class="gallery">
  <a target="_blank" href="01.jpg">
    <img src="\sqpvu7\images\01.png" alt="01" width="600" height="400">
  </a>
  <div class="desc">Ez itt az első kép.</div>
</div>

<div class="gallery">
  <a target="_blank" href="02.jpg">
    <img src="\sqpvu7\images\02.png" alt="02" width="600" height="400">
  </a>
  <div class="desc">Ez itt a második kép.</div>
</div>

<div class="gallery">
  <a target="_blank" href="03.jpg">
    <img src="\sqpvu7\images\03.png" alt="03" width="600" height="400">
  </a>
  <div class="desc">Ez itt a harmadik kép.</div>
</div>

<div class="gallery">
  <a target="_blank" href="04.jpg">
    <img src="\sqpvu7\images\04.png" alt="04" width="600" height="400">
  </a>
  <div class="desc">Ez itt a negyedik kép.</div>
</div>



</body>
</html>

