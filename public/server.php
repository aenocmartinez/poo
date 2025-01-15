<?php

$valorSalud = $_POST['input_salario_minimo'] * (12/100);

?>

<script>
function redirectTo(usuario) {
    const baseUrl = 'http://poo.test/';
    const urlWithParams = `${baseUrl}?valorSalud=${encodeURIComponent(usuario)}`;
    window.location.href = urlWithParams;
}

redirectTo('<?php echo $valorSalud; ?>');
</script>