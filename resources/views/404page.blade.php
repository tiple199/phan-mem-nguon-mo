<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Không tìm thấy trang</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }
        .stars {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            border-radius: 50%;
            animation: twinkle 3s infinite;
        }
        @keyframes twinkle {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }
        .container {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
            padding: 20px;
            max-width: 600px;
        }
        .error-code {
            font-size: 180px;
            font-weight: 900;
            line-height: 1;
            text-shadow: 0 10px 30px rgba(0,0,0,0.3);
            animation: float 3s ease-in-out infinite;
            position: relative;
        }
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        .error-code::before {
            content: '404';
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 180px;
            color: rgba(255, 255, 255, 0.1);
            z-index: -1;
            text-shadow: 0 0 50px rgba(255, 255, 255, 0.5);
        }
        .astronaut {
            font-size: 100px;
            display: inline-block;
            animation: rotate 10s linear infinite;
            margin: 20px 0;
        }
        @keyframes rotate {
            0% { transform: rotate(0deg) translateX(30px) rotate(0deg); }
            100% { transform: rotate(360deg) translateX(30px) rotate(-360deg); }
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
            line-height: 1.6;
        }
        .btn-home {
            display: inline-block;
            padding: 15px 40px;
            background: white;
            color: #667eea;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        .btn-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }
        .btn-back {
            display: inline-block;
            padding: 15px 40px;
            background: transparent;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            border: 2px solid white;
            margin-left: 15px;
            transition: all 0.3s;
        }
        .btn-back:hover {
            background: white;
            color: #667eea;
            transform: translateY(-3px);
        }
        .links {
            margin-top: 30px;
        }
        @media (max-width: 768px) {
            .error-code {
                font-size: 120px;
            }
            .error-code::before {
                font-size: 120px;
            }
            h1 {
                font-size: 2rem;
            }
            p {
                font-size: 1rem;
            }
            .astronaut {
                font-size: 60px;
            }
            .btn-home, .btn-back {
                display: block;
                margin: 10px auto;
            }
        }
        .planet {
            position: absolute;
            border-radius: 50%;
            opacity: 0.3;
            animation: orbit 20s linear infinite;
        }
        .planet-1 {
            width: 100px;
            height: 100px;
            background: radial-gradient(circle at 30% 30%, #ffd700, #ff8c00);
            top: 10%;
            left: 10%;
            animation-duration: 25s;
        }
        .planet-2 {
            width: 60px;
            height: 60px;
            background: radial-gradient(circle at 30% 30%, #00bfff, #0080ff);
            bottom: 15%;
            right: 15%;
            animation-duration: 30s;
            animation-direction: reverse;
        }
        @keyframes orbit {
            0% { transform: rotate(0deg) translateX(50px) rotate(0deg); }
            100% { transform: rotate(360deg) translateX(50px) rotate(-360deg); }
        }
    </style>
</head>
<body>
    <!-- Stars background -->
    <div class="stars" id="stars"></div>
    
    <!-- Planets -->
    <div class="planet planet-1"></div>
    <div class="planet planet-2"></div>

    <div class="container">
        <div class="error-code">404</div>
        <div class="astronaut">🚀</div>
        <h1>Úi! Trang không tồn tại</h1>
        <p>
            Có vẻ như bạn đã lạc vào không gian số! Trang bạn đang tìm kiếm không tồn tại hoặc đã bị di chuyển.
        </p>
        <div class="links">
            <a href="/" class="btn-home">🏠 Về trang chủ</a>
            <a href="javascript:history.back()" class="btn-back">← Quay lại</a>
        </div>
    </div>

    <script>
        // Generate random stars
        const starsContainer = document.getElementById('stars');
        const numberOfStars = 100;
        
        for (let i = 0; i < numberOfStars; i++) {
            const star = document.createElement('div');
            star.className = 'star';
            star.style.left = Math.random() * 100 + '%';
            star.style.top = Math.random() * 100 + '%';
            star.style.animationDelay = Math.random() * 3 + 's';
            star.style.width = Math.random() * 3 + 'px';
            star.style.height = star.style.width;
            starsContainer.appendChild(star);
        }
    </script>
</body>
</html>
