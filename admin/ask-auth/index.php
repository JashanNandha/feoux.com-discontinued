<table class="table_results ajax pma_table" data-uniqueid="1206920417">

    <thead>
        <tr>

            <th class="draggable right column_heading pointer marker" data-column="id"><span>id</th>
            <th class="draggable column_heading pointer marker" data-column="query"><span>Query</th>
            <th class="draggable column_heading pointer marker" data-column="desc" style="cursor: move;"><span>Desc</th>
            <th class="draggable column_heading pointer marker" data-column="date"><span>date</span>
            </th><th class="draggable column_heading pointer marker" data-column="date"><span>delete</span>
            </th>



        </tr>
    </thead>

    <tbody><?php
                                    require("../dbcon.php");
                                    $sql = "SELECT * FROM `ask` ORDER BY id DESC LIMIT 20";
                                    $res = mysqli_query($conn, $sql);
                                     $count = mysqli_num_rows($res);
                                    if ($count > 0) {
                                        // Output the details within a table with Bootstrap styes
                                        while ($data = mysqli_fetch_assoc($res)) {
                                            $id = $data['id'];$query = $data['query'];$date = $data['date'];
                                            $desc = $data['desc'];
                                            echo '
                                        
                                        <td data-decimals="0" data-type="blob" data-originallength="10" class="data grid_edit click2 not_null"><span>'.$id.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="24" class="data grid_edit click2 not_null    "><span>'.$query.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="3" class="data grid_edit click2 not_null    "><span>'.$desc.'</span></td>
                                        <td data-decimals="0" data-type="timestamp" data-originallength="19" class="data grid_edit click2 not_null   datetimefield  nowrap"><span>'.$date.'</span></td>
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
                                    
                                    '>Delete</button></form>".'</td></tr>
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