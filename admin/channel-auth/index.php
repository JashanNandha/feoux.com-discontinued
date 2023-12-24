<table class="table_results ajax pma_table" data-uniqueid="1206920417">

    <thead>
        <tr>
            <th class="draggable right column_heading pointer marker" data-column="id" style="cursor: move;">id</th>
            <th class="draggable column_heading pointer marker" data-column="channel">channel</th>
            <th class="draggable column_heading pointer marker" data-column="image">image</th>
            <th class="draggable column_heading pointer marker" data-column="owner_name">owner_name</th>
            <th class="draggable column_heading pointer marker" data-column="owner_id" style="cursor: move;">owner_id
                            </th>
            <th class="draggable column_heading pointer marker" data-column="desc">desc</th>
            <th class="draggable column_heading pointer marker" data-column="date">date</th>
            <th class="draggable column_heading pointer marker" data-column="follower">follower</th>
            <th class="draggable column_heading pointer marker" data-column="follower">Delete</th>
            <th class="draggable column_heading pointer marker" data-column="follower">Block</th>


        </tr>
    </thead>

    <tbody><?php
                                    require("../dbcon.php");
                                    $sql = "SELECT * FROM `channel` ORDER BY id DESC LIMIT 20";
                                    $res = mysqli_query($conn, $sql);
                                     $count = mysqli_num_rows($res);
                                    if ($count > 0) {
                                        // Output the details within a table with Bootstrap styes
                                        while ($data = mysqli_fetch_assoc($res)) {
                                            $id = $data['id'];$channel = $data['channel'];$image = $data['image'];
                                            $ow = $data['owner_name'];$oid = $data['owner_id'];$desc = $data['desc'];
                                            $date = $data['date'];$follow = $data['follower'];
                                            echo '
                                        
                                        <td data-decimals="0" data-type="blob" data-originallength="10" class="data grid_edit click2 not_null"><span>'.$id.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="24" class="data grid_edit click2 not_null    "><span>'.$channel.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="3" class="data grid_edit click2 not_null    "><span>'."<img src='../../channel/$image' style='
                                        width: 90px;
                                        height: 60px;
                                        border-radius: 10px;
                                    '>".'</span></td>
                                        <td data-decimals="0" data-type="timestamp" data-originallength="19" class="data grid_edit click2 not_null   datetimefield  nowrap"><span>'.$ow.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="10" class="data grid_edit click2 not_null"><span>'.$oid.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="24" class="data grid_edit click2 not_null    "><span>'.$desc.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="3" class="data grid_edit click2 not_null    "><span>'.$date.'</span></td>
                                        <td data-decimals="0" data-type="timestamp" data-originallength="19" class="data grid_edit click2 not_null   datetimefield  nowrap"><span>'.$follow.'</span></td>
                                        <td>'."<form action='delete/' method='post'><input name='code' type='text' value='$id' style='display:none'><button type='submit' title='Delete' id='link' style='
                                        text-decoration:
                                        none;
                                        outline:
                                        none;
                                        border:
                                        none;
                                        background: red;
                                        padding: 5px;
                                        border-radius: 10px;
                                        border: none;
                                        outline: none;
                                        color: white;
                                    
                                    '>Delete</button></form>".'</td>
                                    <td>'."<form action='block/' method='post'><input name='code' type='text' value='$id' style='display:none'><button type='submit' title='Delete' id='link' style='
                                        text-decoration:
                                        none;
                                        outline:
                                        none;
                                        border:
                                        none;
                                        background: red;
                                        padding: 5px;
                                        border-radius: 10px;
                                        border: none;
                                        outline: none;
                                        color: white;
                                    
                                    '>Block</button></form>".'</td></tr>
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
    border-radius: 5px;
    background: linear-gradient(45deg, #f5f5f5, #cfd8dc);
}

th {
    background: linear-gradient(45deg, #3f51b5, #2196f3);
    text-transform: capitalize;
    color: white;
}
</style>