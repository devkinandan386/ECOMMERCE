<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: url(agriculture.jpg);
        }
    
        h1::first-letter {
            font-family: lucida calligraphy;
            font-size: 3cm;
            color: red;
            text-shadow: 6px 8px 9px cyan;
            color: aliceblue;
        }
        
        div {
            display: inline;
            position: absolute;
            width: 10px;
            height:10px;
            left: calc(50% - 1em);
            border-radius: 1.3cm;
            transform-origin: 2.3em 2.3em;
            animation: rotate;
            animation-iteration-count: infinite;
            animation-duration: 1.5s;
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .a1 { animation-delay: 0.1s; background-color: gold; }
        .a2 { animation-delay: 0.2s; background-color: gold; }
        .a3 { animation-delay: 0.3s; background-color: gold; }
        .a4 { animation-delay: 0.4s; background-color: white; }
        .a5 { animation-delay: 0.5s; background-color: white; }
        .a6 { animation-delay: 0.6s; background-color: white; border-radius: 40px; }
        .a7 { animation-delay: 0.7s; background-color: white; border-radius: 50%; background: url(); }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            gap: 40px;
        }

        nav ul li button {
            position: relative;
            background: none;
            border: none;
            font-size: 18px;
            padding: 10px 20px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        nav ul li button:hover {
            color: green;
            box-shadow: 0px 4px 10px rgba(0, 255, 0, 0.5);
        }

        nav ul li button::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: green;
            transition: width 0.3s ease;
        }

        nav ul li button:hover::after {
            width: 100%;
        }
    </style>
</head>
<body>
    
    <center>
        <h1>Welcome to Agriculture Farm</h1>
        <div class="a1"></div>
        <div class="a2"></div>
        <div class="a3"></div>
        <div class="a4"></div>
        <div class="a5"></div>
        <div class="a6"></div>
        <div class="a7"></div>
    </center>

    <script>
        // Redirect to index.html after 3 seconds
        setTimeout(function() {
            window.location.href = 'index1.php';
        }, 3000);
    </script>
</body>
</html>
