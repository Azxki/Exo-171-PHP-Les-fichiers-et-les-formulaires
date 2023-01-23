<?php

if (isset($_FILES['fileUser'])) {
    $tmpName = $_FILES['fileUser']['tmp_name'];
    $name = $_FILES['fileUser']['name'];

    move_uploaded_file($tmpName, $name);
}