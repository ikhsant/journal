<?php 

$string = "<h2>".ucfirst($table_name)." List</h2>
<div class=\"table-responsive\">
        <table class=\"word-table\" style=\"margin-bottom: 10px\">
            <tr>
                <th>No</th>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
}
$string .= "\n\t\t
            </tr>";
$string .= "<?php
            foreach ($" . $c_url . "_data as \$$c_url)
            {
                ?>
                <tr>";

$string .= "\n\t\t      <td><?php echo ++\$start ?></td>";

foreach ($non_pk as $row) {
    $string .= "\n\t\t      <td><?php echo $" . $c_url ."->". $row['column_name'] . " ?></td>";
}

$string .=  "\t
                </tr>
                <?php
            }
            ?>
        </table>
    </div>";


$hasil_view_pdf = createFile($string, $target."views/" . $c_url . "/" . $v_pdf_file);

?>