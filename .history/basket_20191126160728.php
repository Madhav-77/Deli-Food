<html><body class="order-place"></body>
    
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>    
<script>
$(document).ready(function(){
    //console.log(test[3].name);
    var html = "<table><thead><tr><th>Item Name</th><th>Item Price</th><th>Quantity</th><th>Total</th></tr></thead><tbody>";
    var i;
    var g_total = 0;
    for(i=0; i<test.length; i++){
        g_total+=test[i].total;
        html+="<tr>";
        html+="<td>"+test[i].name+"</td>";
        html+="<td>"+test[i].price+"</td>";
        html+="<td>"+test[i].count+"</td>";
        html+="<td>"+test[i].total+"</td>";
        html+="</tr>";
    }
    html+="<tr><td></td><td></td><td><b>Grand Total</b></td><td>"+g_total+"</td></tr></tbody></table>";
    $(".order-place").html(html);
});

</script></html>