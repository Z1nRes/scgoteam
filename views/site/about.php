<?php

/** @var yii\web\View $this */
use yii\bootstrap5;
use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about" id="test" style="width: 1000vh; height: 1000vh" oncontextmenu="return false;">
    <h1><?= Html::encode($this->title) ?></h1>
    

</div>

<style>
    table {
        user-select: none
    }
</style>

<script>
    document.getElementById('test').addEventListener('mousedown', (e) => {
        if (e.which == 3) {
            let perent = document.getElementById('test')
            let elem = document.createElement("img")
            elem.src = "https://www.iconpacks.net/icons/1/free-pin-icon-48-thumb.png"
            elem.alt = "●︎"
            elem.id = 'pin'
            elem.style = `position: absolute; top: ${e.layerY - 25}px; left: ${e.layerX - 10}px; width: 25px; height: 25px)`
            perent.appendChild(elem)
        }
    })

    
    document.getElementById('test').addEventListener('click', (event) => {
        if (event.target.matches('#pin')) {
            let pin = document.getElementById('pin')
            pin.classList.add('active')
            window.location.href = '';
        }            
    })

</script>