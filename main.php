<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jangan Begitu </title>
</head>
<style>
    body {
        text-align: center;
    }
</style>

<body>
    <h2>Hi, crush</h2>
    <br>

    <img src="crush.png" />
    <br><br><br>
    Nak berkawan dengan saya tak?
    <button id="button" onclick="buang()">Taknak</button> <button onclick="chatMe()">Nak</button>
</body>

<script>
    function buang() {
        alert('K Fine. Terpaksa la aku buang button taknak.');
        document.getElementById("button").remove();
    }

    function chatMe() {
        alert('Pilihan yang tepat!');
        window.location.href = 'https://wa.me/60199661497?text=Hi,%20Sayang';
    }
</script>

</html>