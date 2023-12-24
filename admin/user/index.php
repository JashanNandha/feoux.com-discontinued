<form action="empty">
    <button type="submit" style="padding:10px;color:white;background: #f44336;border: none;outline: none;border-radius: 10px;">Empty Log</button>
</form><table class="table_results ajax pma_table" data-uniqueid="1206920417">

    <thead>
        <tr>

            <th class="draggable right column_heading pointer marker" data-column="id"><span>id</th>
            <th class="draggable column_heading pointer marker" data-column="name"><span>avatar</th>
            <th class="draggable column_heading pointer marker" data-column="name"><span>name</th>
            <th class="draggable column_heading pointer marker" data-column="name"><span>Username</th>
            <th class="draggable column_heading pointer marker" data-column="phone"><span>phone</th>
            <th class="draggable column_heading pointer marker" data-column="email"><span>email</th>
            <th class="draggable column_heading pointer marker" data-column="name"><span>dob</th>
            <th class="draggable column_heading pointer marker" data-column="name"><span>gender</th>
            <th class="draggable column_heading pointer marker" data-column="phone"><span>adress</th>
            </th>


        </tr>
    </thead>

    <tbody><?php
                                    require("../dbcon.php");
                                    $sql = "SELECT * FROM `user` ORDER BY id DESC LIMIT 10";
                                    $res = mysqli_query($conn, $sql);
                                     $count = mysqli_num_rows($res);
                                    if ($count > 0) {
                                        // Output the details within a table with Bootstrap styes
                                        while ($data = mysqli_fetch_assoc($res)) {
                                            $id = $data['id'];
                                            $uname = $data['username'];
                                            $name = $data['name'];
                                            $email = $data['email'];
                                            $dob = $data['dob'];
                                            $phone = $data['phone'];
                                            $gender = $data['gender'];
                                            $avatar = $data['avatar'];
                                            $phone = $data['phone'];
                                            $adress = $data['adress'];
                                            echo '
                                            <tr><td><span>'.$id.'</span></td>
                                            <td data-decimals="0" data-type="blob" data-originallength="6" class="data grid_edit click2 not_null    "><span><img style="
                                            width: 90px;
                                            height: 60px;
                                            border-radius: 10px;
                                        " src="../../my-account/'.$avatar.'"></span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="6" class="data grid_edit click2 not_null    "><span>'.$name.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="6" class="data grid_edit click2 not_null    "><span>'.$uname.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="10" class="data grid_edit click2 not_null"><span>'.$phone.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="24" class="data grid_edit click2 not_null    "><span>'.$email.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="6" class="data grid_edit click2 not_null    "><span>'.$dob.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="3" class="data grid_edit click2 not_null    "><span>'.$gender.'</span></td>
                                        <td data-decimals="0" data-type="timestamp" data-originallength="19"><span>'.$adress.'</span></td>
                                        </tr>
                                        ';
                                        }
                                    }
                      
      ?>
    </tbody>
</table>

<style>
td,
th {
    border: solid 1px black;
    padding: 10px 20px;
    font-family: sans-serif;
    text-decoration: none;
    border-radius:5px;
    background:linear-gradient(45deg, #f5f5f5, #cfd8dc);
}th {
    background: linear-gradient(45deg, #3f51b5, #2196f3);
    text-transform: capitalize;
    color: white;
}
</style>