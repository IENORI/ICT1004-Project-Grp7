<?php
    foreach($userarr as $user){
        foreach($user as $key => $value){
            echo 
            '<tr>
                <th scope="row">' . $value .'</th>
                <td>' . $value . '</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>';
        }
    }
?>


