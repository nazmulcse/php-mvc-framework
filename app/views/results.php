<div class="wrapper row3">
    <div class="rounded">
        <main class="container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="sidebar one_third first">
                <!-- ################################################################################################ -->
                <h6>Results Info</h6>
                <nav class="sdb_holder">
                    <ul>
                        <li>Name: <?php echo $param2['student_name'];?></li>
                        <li>Roll: <?php echo $param2['student_roll'];?></li>
                        <li>Registration: <?php echo $param2['student_registration'];?></li>
                        <li>Semister: <?php echo $param1['semister'];?></li>
                        <li>Session: <?php echo $param1['session'];?></li>
                    </ul>
                </nav>
                <!-- ################################################################################################ -->
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <div id="content" class="two_third">
                <!-- ################################################################################################ -->
                <div class="scrollablea">
                    <table border="2">
                        <thead>
                        <tr>
                            <th>Subject Code</th>
                            <th>Subject Name</th>
                            <th>GPA</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($param3 as $vparam)
                        {
                        ?>
                        <tr>
                            <td><?php echo $vparam['subject_code'];?></td>
                            <td><?php echo $vparam['subject_name'];?></td>
                            <td><?php echo $vparam['gpa'];?></td>
                        </tr>
                        <?php }?>
                        <tr>

                            <td colspan="3">Your Semister Grade Point Average(SGPA) Is:  <span><?php echo $param2['cgpa'];?></span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ################################################################################################ -->
            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
</div>