<div class="container-matrix">
  <?php $l = 3 ?>
  <p>Su dung mang de tinh: hieu, tong, tich 2 ma tran</p>
  <form id="associateArray" action="" method="post">
    <div style="display: flex;">
      <div id="matrix1" style="margin-right: 30px;">
        <p>Nhap ma tran 1</p>
        <?php
        for ($i = 0; $i < $l; $i++) {
          echo "<div style='display: flex;''>";
          for ($j = 0; $j < $l; $j++) {
            echo "<input name='input-1-" . $i . "-" . $j . "' type='text'>";
          }
          echo "</div>";
        }
        ?>
      </div>
      <div id="matrix2">
        <p>Nhap ma tran 2</p>
        <?php
        for ($i = 0; $i < $l; $i++) {
          echo "<div style='display: flex;''>";
          for ($j = 0; $j < $l; $j++) {
            echo "<input name='input-2-" . $i . "-" . $j . "' type='text'>";
          }
          echo "</div>";
        }
        ?>
      </div>
    </div>
    <div id="group-button">
      <button type="reset">Nhap lai</button>
      <button type="submit">Tinh</button>
    </div>
  </form>

  <h3>KET Qua: </h3>
  <p>Ma tran Tong: </p>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 0; $i < 3; $i++) {
      echo "<div  id='result-matrix'>";
      for ($j = 0; $j < 3; $j++) {
        $el1 = "input-1-" . $i . "-" . $j;
        $el2 = "input-2-" . $i . "-" . $j;
        echo "<p style='margin-right: 10px;'>" . (int)$_POST[$el1] + (int)$_POST[$el2] . "</p>";
      }
      echo "</div>";
    }
  }
  ?>
</div>