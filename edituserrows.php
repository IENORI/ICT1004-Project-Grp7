<?php
    $delete = "delete";
    $update = "update";
    foreach($userarr as $user){
            echo 
            '<tr>
                <th scope="row">' . $user["UID"] .'</th>'
                . '<td>' . $user["Fname"] . '</td>'
                . '<td>' . $user["Lname"] . '</td>'
                . '<td>' . $user["Email"] .'</td>'
                . '<td>' . $user["HPNum"] .'</td>'
                . '<td>' . $user["IsAdmin"] .'</td>'
                .'<td>'
                    .'<a href="/process/proc.editusers.php?UID='. $user["UID"] .'&action=' . $delete . '">'
                        . '<button type="button" class="btn btn-danger">Delete</button>'
                    .'</a>'
                    ." "
                    .'<a href="/process/proc.editusers.php?UID='. $user["UID"] .'&action=' . $update . '">'
                        . '<button type="button" class="btn btn-warning" disabled>Update</button>'
                    .'</a>'
                . '</td>'
            . '</tr>';
    }
?>


