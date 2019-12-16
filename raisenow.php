<!-- 1 -->
<!--
common:
    placeholders:
        name: NGO
        email: ngo@ngo.com       
    introduction: 'Willkommen bei Frank''s Küche.'      <!-- nehmen wir mal an dass das File UTF-8 konform eingelesen wird. Ich denke hauptsächlich ging es um das escaping des single quote -->

    
<!-- 2 -->
<script type='text/javascript'>
    var anrede = '';
    stored_customer_salutation = 'ms';
    stored_customer_lastname = 'Doe';
    
    if(stored_customer_salutation == 'mr') {
        anrede = 'Sehr geehrter Herr ' + stored_customer_lastname;
    } else if(stored_customer_salutation == 'ms') {
        anrede = 'Sehr geehrte Frau ' + stored_customer_lastname;
    } else {
        anrede = 'Guten Tag';
    }
    echo anrede;
</script>



<!-- 3 -->
<script type='text/javascript'>
    var obj = {
        "epp_transaction_id": "xy", 
        "payment_method": "vis", 
        "email": "john.doe@gmail.com", 
        "amount": "50000"
    }

    for (let key in obj) {
        console.log(key, ':', obj[key]);
    }

</script>



<!-- 4 -->
<script type='text/javascript'>
var amount = 5006;

if((amount % 100) == 0) {
    var formatted = (amount / 100)+'.-';
} else {
    var formatted = (amount / 100);   // Im DACH-Raum müsste man hier noch ggf. eine Ersetzung des Punktes durch ein Komma machen (str.replace()), aber das war nicht Teil der Aufgabe
}
echo formatted;


</script>
<!-- 5 -->
CNAME