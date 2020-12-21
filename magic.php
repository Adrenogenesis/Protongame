<!DOCTYPE html>
<html>
  <head>
    <title>Magic Hello World 🌎</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/magic.css" />
    <!-- 1️⃣ Install Magic SDK -->
    <script src="https://cdn.jsdelivr.net/npm/magic-sdk/dist/magic.js"></script>
    <script>
      /* 2️⃣ Initialize Magic Instance */
      let magic = new Magic("pk_test_xxxxxxxxxxxxxxxxxxxx");

      /* 3️⃣ Implement Render Function */
      const render = async () => {
        const isLoggedIn = await magic.user.isLoggedIn();

        /* Show login form if user is not logged in */
        let html = `
          <h1>Please sign up or login</h1>
          <?php echo("logged out"); ?>
          <form onsubmit="handleLogin(event)">
            <input type="email" name="email" required="required" placeholder="Enter your email" />
            <button type="submit">Send</button>
          </form>
        `;

        if (isLoggedIn) {
          /* Get user metadata including email */
          const userMetadata = await magic.user.getMetadata();
          html = `
            <h1>Current user: ${userMetadata.email}</h1>
            <?php echo("Mise à jour...");
                include 'connect.php';
                $ip=$_SERVER['REMOTE_ADDR'];
                   
                $sql = "DELETE FROM prtg WHERE ip === $ip";

                if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                }

                $conn->close();
            
            ?>
            <button onclick="handleLogout()">Logout</button>
          `;
        }

        document.getElementById("app").innerHTML = html;
      };

      /* 4️⃣ Implement Login Handler */
      const handleLogin = async (e) => {
        e.preventDefault();
        const email = new FormData(e.target).get("email");
        if (email) {
          /* One-liner login 🤯 */
          await magic.auth.loginWithMagicLink({ email });
          render();
        }
      };

      /* 5️⃣ Implement Logout Handler */
      const handleLogout = async () => {
        await magic.user.logout();
        render();
      };
    </script>
  </head>
  <body onload="render()">
    <div id="app">
      Loading...
    </div>
  </body>
</html>
