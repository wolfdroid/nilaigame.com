<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <!-- Bootstrap Core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <title><?php echo e($title); ?></title>
    </head>
    <body>
        <center>
            <form action="/Dashboard/insert" method="post">
                <table>
                    <tr>
                        <?php echo e(csrf_field()); ?>

                        <td>Review Token : </td>
                        <td><input type="Integer" name="revtoken"></td>
                    </tr>
                    <tr>
                        <td>Review Mark : </td>
                        <td><input type="Integer" name="revmark"></td>
                    </tr>
                    <tr>
                        <td>Comment : </td>
                        <td><input type="text" name="revcom"></td>
                    </tr>
                    <tr>
                        <td>Product ID : </td>
                        <td><input type="Integer" name="prodid"></td>
                    </tr>
                    <tr>
                        <td>User ID : </td>
                        <td><input type="Integer" name="userid"></td>
                    </tr>
                    <tr>
                        <td>Username : </td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submitting" value="Submit"></td>
                    </tr> 

                </table>
            </form>
        </center>

        <center>
            
            <table>
                <tr>
                    <td>Review Token : </td>
                    <td>Review Mark : </td>
                    <td>Comment : </td>
                    <td>Product ID : </td>
                    <td>User ID : </td>
                    <td>Last Modified : </td>
                    <td>Username : </td>
                </tr>
            </table>
        
        </center>

        <center>

        </center>
    </body>
</html><?php /**PATH D:\xampp\htdocs\nilaigame\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>