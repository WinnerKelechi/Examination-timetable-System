<?php session_start();
?>
<!DOCTYPE hmtl>
<html>

<head>
    <link rel="stylesheet" href="../dist/css/print.css" media="print">
    <script src="../dist/js/jquery.min.js"></script>
    <style>
        table td,th{
		border: 1px solid black;
		
	}
	table{
		border-collapse:collapse;
		text-align:center;
		font-size:12px;
		
	}
	tr{
		height:20px;
	}
	thead tr {
		height:5px!important;
	}
	.logo{
		float:left;
		margin-left:100px
	}
	.logo2{
		float:right;
		margin-right:100px
	}
	.wrapper_print{
		width:60%;
		margin:auto;
	}
	
	.action a{

		color:#ff0000;
		text-decoration:none;
		font-weight:bolder;
	}
	th{
		width:15%
	}
	th:last-child{
		width:5%;
	}
	
</style>
</head>

<body>
    <?php 
include('../dist/includes/dbcon.php');
 ?>
    <script type="text/javascript" charset="utf-8">
        jQuery(document).ready(function() {

                window.print()

            )
        };

    </script>

    <div class="wrapper_print">

        <h5 align="center">

            UNIVERSITY OF CALABAR, CALABAR</br>
            <br><br>
            EXAMINATION TIMETABLE SCHEDULE</br>
        </h5>

        <table style="width:100%;float:left">
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Day</th>
                    <th>Venue (capacity)</th>
                    <th>Lecturer</th>

                </tr>
            </thead>



            <?php $query1=mysqli_query($con,"select * from exam_sched")or die(mysqli_error($con));
										while($row1=mysqli_fetch_array($query1)){
											$id1=$row1['sched_id'];	
											
                                           
									?>
            <tr class="show">
                <td class="name">
                    <?php echo $row1['subject_code'];?>
                </td>
                <td>
                    <?php echo $row1['day'];?> day</td>

                <td>
                    <?php echo $row1['room'];?>
                    <?php 
                                           $room2 = $row1['room'];
                                            $sql= mysqli_query($con,"select capacity, room from room where room='$room2'");
                                            $row2 = mysqli_fetch_array($sql);
                                             $capacity= $row2['capacity'];
                                            
                                         if(mysqli_num_rows($sql)>0)
                                            echo '(' .$capacity .')';?>
                </td>
                <td>
                    <?php 
                                            
                                           $member_id = $row1['member_id'];
                                            $sql= mysqli_query($con,"select member_id, member_salut, member_last from member where member_id='$member_id'");
                                            $row2 = mysqli_fetch_array($sql);
                                             $name= $row2['member_last'];
                                            $name2= $row2['member_salut'];
                                         if(mysqli_num_rows($sql)>0)
                                            echo '('.$name2 .'. '.$name .')';
                    ?>
                </td>

            </tr>



            <?php }?>
        </table>





        </b>

</body>
<script src="jquery.js"></script>
<script type="text/javascript">
    $(function() {
        $(".delete").click(function() {
            var element = $(this);
            var del_id = element.attr("id");
            var info = 'id=' + del_id;
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    type: "POST",
                    url: "exam_sched_del.php",
                    data: info,
                    success: function() {}
                });
                $(this).parents(".show").animate({
                        backgroundColor: "#003"
                    }, "slow")
                    .animate({
                        opacity: "hide"
                    }, "slow");
            }
            return false;
        });
    });

</script>

</html>
