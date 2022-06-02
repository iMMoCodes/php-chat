<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat</title>
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="firstName">First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label for="lastName">Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Enter your password">
                    </div>
                    <div class="field image">
                        <label for="image">Select Image</label>
                        <input type="file">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>

            </form>
            <div class="link">Already signed up? <a href="#">Login now</a></div>
        </section>
    </div>
</body>
</html>