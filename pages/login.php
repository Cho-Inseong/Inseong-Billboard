<body class="loginbody">
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button id="loginbutton" type="submit">Login</button>
            <div id="signupbutton">
                <a href="signup"><button id="signupdeco" type="button">signup</button></a>
            </div>
        </form>
    </div>

    <script>
        // JavaScript로 그라데이션 색상 변경
        document.addEventListener('DOMContentLoaded', function() {
            var container = document.querySelector('.login-container');
            container.style.background = 'linear-gradient(to bottom, #8e44ad, #3498db)';
        });
    </script>
</body>