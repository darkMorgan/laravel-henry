<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>¡Viva Alianza!</title>

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Estilos -->
    <style>
        /* Fondo con imagen y superposición */
        body {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3)), 
                        url('https://caretas.pe/wp-content/uploads/2024/01/Alianza-Lima-presentara-a-su-equipo-para-este-2024.png') 
                        no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            font-family: 'Instrument Sans', sans-serif;
            overflow: hidden;
            position: relative;
        }

        /* Animación de partículas */
        .particles span {
            position: absolute;
            bottom: 0;
            width: 6px; height: 6px;
            background: rgba(255, 255, 255, 0.8);
            animation: floatUp 6s infinite ease-in-out;
        }

        @keyframes floatUp {
            from { transform: translateY(0) scale(1); opacity: 1; }
            to { transform: translateY(-100vh) scale(1.5); opacity: 0; }
        }

        /* Contenedor con efecto glassmorphism */
        .content {
            position: relative;
            z-index: 1;
            padding: 2rem;
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1.5s ease-in-out;
            width: 80%;
            max-width: 600px;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        /* Título con animación de brillo */
        .viva-alianza {
            font-size: 4rem;
            font-weight: bold;
            text-shadow: 0px 0px 15px rgba(255, 255, 255, 1);
            animation: glow 2s infinite alternate;
            letter-spacing: 3px;
        }

        /* Botones */
        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 14px 28px;
            font-size: 1rem;
            font-weight: 700;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
            border: 2px solid white;
            color: white;
        }

        .btn-primary {
            background: rgba(0, 102, 255, 0.7);
        }

        .btn-primary:hover {
            background: rgba(0, 102, 255, 1);
            box-shadow: 0px 0px 15px rgba(0, 102, 255, 0.8);
        }

        /* Animaciones */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes glow {
            from { text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.7); }
            to { text-shadow: 0px 0px 25px rgba(255, 255, 255, 1); }
        }
    </style>
</head>
<body>
    <!-- Partículas en movimiento -->
    <div class="particles">
        <span style="left:5%; animation-duration: 5s;"></span>
        <span style="left:25%; animation-duration: 6s;"></span>
        <span style="left:50%; animation-duration: 4s;"></span>
        <span style="left:75%; animation-duration: 7s;"></span>
        <span style="left:95%; animation-duration: 5.5s;"></span>
    </div>

    <div class="content">
        <h1 class="viva-alianza">¡Viva Alianza!</h1>
        @if (Route::has('login'))
            <nav>
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</body>
</html>
