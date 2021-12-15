
        <div>
            <div class="reg-wind">
                <form id="log_form" action="functionality/auth.php" method="post">
                    <input type="hidden" name="frmLogin">
                    <label for="inpLog">Login<input type="text" name="inpLog"></label>
                    <label for="inpPass">Pass<input type="password" name="inpPass"></label>
                    <p class="ifWrong hidden" name="ifWrong">Неверный логин или пароль</p>
                    <input type="submit" name="btnSubmit" id="btnSubm" value="Submit">
                </form>
            </div>
        </div>
    