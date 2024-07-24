<script>
    document.getElementById("printbtn").addEventListener("click", function() {
        var printArea = document.getElementById("printarea").innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printArea;
        window.print();
        document.body.innerHTML = originalContents;
        window.location.reload();
    });
</script>