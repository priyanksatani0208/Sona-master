<?php
include_once('header.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    .validation-form {
        height: 70vh !important;
    }

    .dateColure {
        margin: 15px 0 0 0;
        color: #d95459;
        text-align: center;
    }

    table {
        margin: 10px auto;
        width: 50%;
        text-align: center;
    }

    .tableContent {
        text-align: center !important;
        padding: 5px 3px;
    }
</style>

<!--banner-->
<div class="banner">
    <h2>
        <a href="dashboard">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Report Generate</span>
    </h2>
</div>
<!--//banner-->

<!--grid-->
<div class="validation-system">
    <div class="validation-form">
        <form method="post" enctype="multipart/form-data" name="myform">


            <div class="d-flex">
                <div class="col-md-3 form-group1">
                    <label class="control-label">To Date :</label>
                    <input type="date" placeholder="Model Name" required="" name="toDate">
                </div>
                <!-- <div class="clearfix"> </div><br> -->

                <div class="col-md-3 form-group1">
                    <label class="control-label">From Date:</label>
                    <input type="date" placeholder="Model Image" required="" name="fromDate">
                </div>
                <div class="col-md-3 form-group1">
                    <label class="control-label">Room Category :</label>
                    <select name="category" style="border: 1px solid #e1e1e1; height: 50px; padding: 0.5em 1em; margin-top: 9px; color: #e1e1e1;">
                        <option value="">-- select --</option>
                        <?php foreach ($category_name as $value) { ?>
                            <option style="color: black;" value="<?php echo $value->room_category ?>">
                                <?php echo $value->room_category ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

            </div>
            <div class="clearfix"> </div><br>
            <div class="col-md-12 form-group">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
            <div class="clearfix"> </div>
        </form>

        <?php
        if (isset($_REQUEST['submit'])) {
            $toDate = new DateTime($_REQUEST['toDate']);
            $toDateformattedDate = $toDate->format('d-m-Y');
            $fromDate = new DateTime($_REQUEST['fromDate']);
            $fromDateformattedDate = $fromDate->format('d-m-Y');
            echo "<h4 class=\" dateColure\">" . "Booking Report From " . $toDateformattedDate . " To " . $fromDateformattedDate . "</h4> </br>"; ?>
            <div class="col-md-12 form-group1">
                <table border="1">
                    <tr>
                        <th class="tableContent">Id</th>
                        <th class="tableContent">Room Category</th>
                        <th class="tableContent">Total Booking</th>
                        <th class="tableContent">Total Amout</th>
                    </tr>

                    <?php
                        $i=1;
                    foreach ($booking_report_arr as $c) {
                        ?>

                        <tr class="tableContent">
                            <td>
                                <?php echo $i; $i = $i+1 ?>
                            </td>
                            <td>
                                <?php echo $c->room_category; ?>
                            </td>
                            <td>
                                <?php echo $c->total_rooms; ?>
                            </td>
                            <td>
                                <?php echo (null != $c->total_amount) ? $c->total_amount : "-"; ?>
                            </td>

                        </tr>


                        <?php
                    }
                    ?>
                </table>
            </div>
            <?php
        }
        ?>

    </div>
</div>
<?php
include_once('footer.php');
?>