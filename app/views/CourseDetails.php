<div class="wrapper row3">
<div class="rounded">
    <main class="container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->

        <h1>Bachelor Degree in Computer Science and Engineering (B.Sc.Engg)</h1>
        <p>
            The objective of the 4 years Hons. degree in Computer Science and Engineering is to enable the students to be competent computer hardware and software professionals as well as to perform further studies. National University pursues a policy of continuous updating and improving the new four-year course curricula having 8(eight) semester carrying total credits 145
            for Bachelor Degree in Computer Science and Engineering (B.Sc.Engg).
        </p>
        <p>Total Fee(4 Years 8 Semister)=107200/=</p>
        <p>Semister Fee=13400/=</p>
        <h1>Course Details</h1>
        <div class="scrollable">
            <table>
                <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Per Credit</th>
                </tr>
                </thead>
                <tbody>
                <?php
                 foreach($param1 as $value)
                 {
                ?>
                <tr>
                    <td><?php echo "CSE-".$value['subject_code'];?></td>
                    <td><?php echo $value['subject_name'];?></td>
                    <td><?php echo $value['credit'];?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
</div>