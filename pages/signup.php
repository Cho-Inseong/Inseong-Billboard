<body class="signupbody">
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>

            <div class="gender-container">
                <label>
                    <input type="radio" id="male" name="gender" value="male" required>
                    Male
                </label>
                <label>
                    <input type="radio" id="female" name="gender" value="female" required>
                    Female
                </label>
            </div>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>