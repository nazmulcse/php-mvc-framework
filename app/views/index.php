<html>
<head>
</head>
<body>
<table>
    <?php
    foreach($pars['info'] as $z){
        ?>
    <tr>
        <td><?php echo $z['id'];?></td>
        <td><?php echo $z['student_name'];?></td>
        <td><?php echo $z['student_roll'];?></td>
    </tr>
    <?php }?>
</table>
</body>
</html>