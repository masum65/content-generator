<?php
/**
 * Created by PhpStorm.
 * User: stephanie.land
 * Date: 10/2/2015
 * Time: 8:35 AM
 */ ?>
<center>
    <form name="content-generator" action="generate.php" method="post">
        <table width="440">


            <tr>
                <td>Company Name:</td>
                <td><input type="text" name="company"></td>
            </tr>

            <tr>
                <td>Product or Service:</td>
                <td><input type="text" name="product"></td>
            </tr>
            <tr>
                <td>The above is a </td>
                <td><input type="radio" name="radio" value="products" checked> Products<br>
                    <input type="radio" name="radio" value="service"> Service<br></td>
            </tr>
            <tr>
                <td>Keyword:</td>
                <td><input type="text" name="keyword"></td>
            </tr>
            <tr>
                <td>Keyword 2:</td>
                <td><input type="text" name="keyword2"></td>
            </tr>
            <tr>
                <td>Keyword 3:</td>
                <td><input type="text" name="keyword3"></td>
            </tr>
            <tr>
                <td>Industry:</td>
                <td><input type="text" name="industry"></td>
            </tr>
        </table>
        <input type="submit" value="Done">
    </form>
</center>
