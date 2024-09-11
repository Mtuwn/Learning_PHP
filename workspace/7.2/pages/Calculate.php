<div class="container-calculate">
    <?php

    $factorial = 1;
    for ($i = 1; $i <= 10; $i++) {
        $factorial *= $i;
    }
    echo "Giai thua cua 10 la: " . $factorial . "<br>";

    $radius = 10;
    $pi = 3.14;

    $circleArea = $pi * pow($radius, 2);
    echo "Dien tich hinh tron co ban kinh 10 la: " . $circleArea . "<br>";

    $sphereVolume = (4 / 3) * $pi * pow($radius, 3);
    echo "The tich khoi cau co ban kinh 10 la: " . $sphereVolume . "<br>";
    ?>
    <div id="movingText">Hello</div>
</div>


<script>
    let pos = 0;
    let text = document.getElementById("movingText");
    let container = document.querySelector('.container-loop');
    let containerWidth = container.offsetWidth;
    let textWidth = text.offsetWidth;

    function moveText() {
        pos += 2;
        text.style.left = pos + "px";
        if (pos < containerWidth) {
            requestAnimationFrame(moveText);
        } else {
            pos = 0;
            moveText();
        }
    }

    moveText();
</script>