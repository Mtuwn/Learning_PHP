<div class="container-upload">
  <div class="content-header">

  </div>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadedFiles = [];
    foreach ($_FILES as $key => $file) {
      if ($file['error'] === UPLOAD_ERR_OK) {
        $uploadedFiles[] = $file['name'];
        move_uploaded_file($file['tmp_name'], './Upload' . $file['name']);
      }
    }
    echo "<div class='file-uploaded'>";
    echo "<h3>Danh sach file da Uploaded:</h3> <br>";
    echo "<ul style='list-style-type: none;'";
    foreach ($uploadedFiles as $fileName) {
      echo "<li><a href='./Upload/$fileName'>" . htmlspecialchars($fileName) . "</a></li>";
    }
    echo "</ul>";
    echo "</div>";
  } else {
    echo "<form action='' method='post' enctype='multipart/form-data'>";

    for ($i = 0; $i < 4; $i++) {
      echo "<div class='content-upload'>";
      echo "<span class='space-name-file'></span>";
      echo "<label class='file-name' for='file-" . $i . "'>Browse...</label>";
      echo "<input type='file' class='file-upload' id='file-" . $i . "' name='file-" . $i . "'>";
      echo "</div>";
    }

    echo "<div>
      <button type='reset' id='reset-button'>Reset</button>
      <button type='submit'>Upload</button>
    </div>";
    echo  '</form>';
  }


  ?>

</div>