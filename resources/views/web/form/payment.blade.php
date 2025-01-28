<form method="post" name="customerData" action="/payment/request" class="d-inline">
    @csrf
    <input type="text" name="tid" id="tid" readonly />
    <input type="text" name="amount" value="{{ $admission_notice->application_fee }}" />
    <input TYPE="submit" value="Pay Online" class="btn btn-success">
</form>
<script>
    window.onload = function () {
        var d = new Date().getTime();
        document.getElementById("tid").value = d;
    };
</script>