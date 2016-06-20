<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="phpfreechat-2.1.0/client/themes/carbon/jquery.phpfreechat.min.css" />
        <script src="phpfreechat-2.1.0/client/jquery.phpfreechat.min.js" type="text/javascript"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Country</title>
    </head>
    <script type="text/javaScript" src="jquery-1.11.2.min.js"></script>
    <script>
        $(document).ready(function()
        {
            $("select#country_list").change(function()
            {
                var s_id = $(this).val();
                $.ajax
                        ({
                            url: "state_ajax.php?s_id=" + s_id,
                            type: "GET"
                        }).done(function(state)
                {
                    $("#state_list").html(state);
                });
            });

            $("select#state_list").change(function()
            {
                var c_id = $(this).val();
                $.ajax
                        ({
                            url: "city.php?c_id=" + c_id,
                            type: "GET"
                        }).done(function(city)
                {
                    $("#city_list").html(city);
                });


            });

        });

    </script>

    <center><h1><font color="blue">Select Country</h1></center>
    <table  align="center" border="1" cellspacing="4" cellspadding="4" width="40%">
        <tr>
            <td><label><b>Select Country</b></label></td>
            <?php
            $connection = mysql_connect("localhost", "root", "");
            $db = mysql_select_db("rahuldb");
            $query = mysql_query("select * from tbl_country");
            ?>

            <td><select name="country" id="country_list" style="width:310px" >
                    <option>------Select Country------</option>
                    <?php
                    while ($row_country = mysql_fetch_array($query)) {
                        print_r($row_country);
                        ?> 
                        <option value="<?php echo $row_country['country_id']; ?>"><?php echo $row_country['country_name']; ?></option>
                    <?php } ?>
                </select>    
            </td>
        </tr>

        <tr>
            <td><label><b>Select State</b></label></td>
            <td><select name="state" id="state_list" style="width: 310px">
                    <option>------Select State-------</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label><b>Select City</b></label></td>
            <td><select name="city" id="city_list" style="width: 310px">
                    <option>------Select City-------</option>
                </select>
            </td>
        </tr>
    </table>

</body>
</html>
