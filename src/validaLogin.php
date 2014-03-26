<?php

if(!isset($_SESSION['user']) or empty($_SESSION['user'])){
    ?>
    <script type="text/javascript">
        alert("por favor, Efetue Login");
        location.href = '../';
    </script>
<?php }