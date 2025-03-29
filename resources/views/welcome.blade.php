<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>¡Viva Alianza!</title>

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600|poppins:400,700" rel="stylesheet" />

    <!-- Estilos -->
    <style>
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
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
            position: relative;
        }

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

        .viva-alianza {
            font-size: 4rem;
            font-weight: bold;
            text-shadow: 0px 0px 15px rgba(255, 255, 255, 1);
            animation: glow 2s infinite alternate;
            letter-spacing: 3px;
        }

        .frase {
            font-size: 1.5rem;
            font-weight: 400;
            margin-top: 10px;
            font-style: italic;
        }

        .input-nombre {
            margin-top: 20px;
            padding: 10px;
            font-size: 1rem;
            border-radius: 8px;
            border: none;
            width: 80%;
            max-width: 300px;
            text-align: center;
        }

        .autor {
            margin-top: 20px;
            font-size: 1rem;
            font-weight: 500;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1 class="viva-alianza">¡Viva Alianza!</h1>
        <p class="frase">El más grande, el más querido.</p>
        <input type="text" class="input-nombre" placeholder="Escribe tu nombre...">
        
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
        
        <p class="autor">Creado por Henry Valdez Zevallos</p>
    </div>
</body>
</html>
