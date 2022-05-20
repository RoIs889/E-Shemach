<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="customer.css?v= <?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Customer Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://kit.fontawesome.com/e54152159e.js" crossorigin="anonymous"></script>
     <link rel = "stylesheet" href = "style0.css">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 40px 100px;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            color: lavender;
            text-transform: uppercase;
            cursor: pointer;
            font-size: 22px;
            font-weight: bolder;
        }

        .logo:hover {
            color: black;
            font-weight: lighter;
            font-size: 24px;
        }

        .toggle {
            position: relative;
            width: 60px;
            height: 60px;
            background: url(https://i.ibb.co/HrfVRcx/menu.png);
            background-repeat: no-repeat;
            background-size: 30px;
            background-position: center;
            cursor: pointer;
        }

        .toggle.active {
            background: url(https://i.ibb.co/rt3HybH/close.png);
            background-repeat: no-repeat;
            background-size: 25px;
            background-position: center;
            cursor: pointer;
        }

        .showcase {
            position: absolute;
            right: 0;
            width: 100%;
            min-height: 100vh;
            padding: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #111;
            transition: 0.5s;
            z-index: 2;
        }

        .showcase.active {
            right: 300px;
        }

        .showcase video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #03a9f4;
            mix-blend-mode: overlay;
        }

        .text {
            position: relative;
            z-index: 10;
        }

        .text h2 {
            font-size: 3.5em;
            font-weight: 800;
            color: rgb(0, 0, 0);
            line-height: 1em;
            text-transform: uppercase;
        }

        .text h3 {
            font-size: 2.5em;
            font-weight: 700;
            color: rgb(0, 0, 0);
            line-height: 1em;
            text-transform: uppercase;
        }

        .text p {
            font-size: 0.9em;
            color: black;
            margin: 20px 0;
            font-weight: 400;
            max-width: 700px;
            font-weight: bold;
        }

        .text a {
            display: inline-block;
            font-size: 1em;
            background: rgb(0, 217, 255);
            padding: 10px 30px;
            text-transform: uppercase;
            text-decoration: none;
            font-weight: 500;
            margin-top: 10px;
            color: #111;
            letter-spacing: 2px;
            transition: 0.2s;
        }

        .text a:hover {
            letter-spacing: 6px;
            background-color: aliceblue;
            color: black;
            border-radius: 10px;
        }
        .parent{
            color:white;

        }

        .social li a:hover {
            transform: scale(0.5) translateY(-15px);
        }

        @media (max-width: 991px) {

            .showcase,
            .showcase header {
                padding: 40px;
            }

            .text h2 {
                font-size: 3em;
            }

            .text h3 {
                font-size: 2em;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <img class="logo" src="logo_ccms.png" alt="logo">
        <label class="name" for="">Customer</label>
        <div class="header-right">
            <a href="cust.php">Home</a>
            <a href="customer/history.php">Purchase History</a>
            <a href="customer/profile.php">Profile</a>
            <a href="customer/comment.php">Comment</a>
            <a href="index.php">Logout</a>
        </div>
    </div>

    <section class="showcase">
        <header>
            <h2 class="logo">Consumers Cooperative Management System</h2>
            <div class="toggle"></div>
        </header>
        <video src="v.mp4   " muted loop autoplay></video>

        <div class="overlay"></div>
        <div class="text">
            <h2>Easy Life</h2>
            <h3>For the community</h3>
            <p class="par">  
                Cooperatives are user owned, user controlled and user benefited
                organizations. They could be agricultural, non-agricultural, unions,
                and rural saving and credit cooperatives. They operate different
                sectors of the economy including agricultural, handicraft, housing,
                transport, consumer services, building and construction, banking and
                insurance, fisheries, forestry, etc. Cooperatives contribute to
                economic and social development in both developed and developing
                countries. Though the value which a cooperative contributes to society
                differs depending on its individual objectives, cooperatives play a
                role in finding solutions to unemployment and promoting technical
                skills.
            </p>
            <a href="index.php">Logout</a>
        </div>
    </section>
</body>

</html>