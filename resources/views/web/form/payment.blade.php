<div>
    <form method="post" name="customerData" action="/payment/request">

        @csrf

        <table width="40%" height="100" border='1' align="center">
            <caption>
                <font size="4" color="blue"><b>Integration Kit</b></font>
            </caption>
        </table>
        <table width="40%" height="100" border='1' align="center">
            <tr>
                <td>Parameter Name:</td>
                <td>Parameter Value:</td>
            </tr>
            <tr>
                <td colspan="2"> Compulsory information</td>
            </tr>
            <tr>
                <td>TID :</td>
                <td><input type="text" name="tid" id="tid" readonly /></td>
            </tr>
            <tr>
                <td>Order Id :</td>
                <td><input type="text" name="order_id" value="123654789" /></td>
            </tr>
            <tr>
                <td>Amount :</td>
                <td><input type="text" name="amount" value="1.00" /></td>
            </tr>
            <tr>
                <td></td>
                <td><INPUT TYPE="submit" value="CheckOut"></td>
            </tr>
        </table>
    </form>

</div>
	




<script>
    window.onload = function () {
        var d = new Date().getTime();
        document.getElementById("tid").value = d;
    };
</script>