<?php
include_once "api/settings.php";
/* $sql="select `date`.`invoice`, `item`.`invoice_details`, `type`.`invoice_details`, `category`.`invoice_details`, `method`.`invoice_details`, `notes`.`invoice_details` from `invoice`, `invoice_details`"; */
$sql = "select `invoice`.`date`, `invoice_details`.`item`, `invoice_details`.`type`, `invoice_details`.`category`, `invoice_details`.`method`, `invoice_details`.`notes` from `invoice`, `invoice_details`";
?>

<head>
    <style>
        body {
            background-color: red;
        }

        .container {
            background-color: white;
        }

        tr,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>日期</th>
            <th>消費項目</th>
            <th>收入/支出</th>
            <th>金額</th>
            <th>種類</th>
            <th>付款方式</th>
            <th>備註</th>
        </tr>
        <?php

        $rows = $pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['item'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['method'] . "</td>";
            echo "<td>" . $row['notes'] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>