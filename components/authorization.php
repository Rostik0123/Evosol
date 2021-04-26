<div class="form-wrap">
    <h1 id="title">Авторизация</h1>
    <form id="form" method="POST" action="/authorization.php">
        <div class="inputs">
            <input type="text" name="authorization[login]" required placeholder="Логин / e-mail">
            <input type="password" name="authorization[password]" required placeholder="Пароль">
        </div>
        <input id="submit" type="submit">
        <div class="send" id="sendButton">
            <div class="bg"></div>
            <div class="front"></div>
            <p>АВОРИЗАЦИЯ</p>
            <i class="fas fa-paper-plane"></i>
        </div>
    </form>

    <script>
        document.getElementById('submit').hidden = true;
        document.getElementById('sendButton').onclick = function () {
            document.getElementById('submit').click();
        }
    </script>

</div>

<?php $_SESSION['helpForm'];
if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
    echo 'Ошибка ' . $_SESSION['error'];
} else {
    if (!empty($_SESSION['helpForm'])) {
        ?>
        <script>
            document.getElementById("title").innerHTML = "Ваш вопрос принят на рассмотрение!)";
            document.getElementById('form').hidden = true;
        </script>
    <?php }
}
?>