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

<div>
<p>Click on the "Choose File" button to upload a file:</p>

<form action="/action_page.php">
  <input type="file" id="myFile" name="filename">
  <input type="submit">
</form>
<br>
<br>
</div>

</body>
</html>
