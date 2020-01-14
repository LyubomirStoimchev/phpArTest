<?php
error_reporting(E_ERROR);

function LogError($input)
{
    echo '
        <div class="alert alert-danger">
            <strong>Error! </strong>'.$input.'</a>
        </div>';
}
?>