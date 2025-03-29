<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Que viva la U!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        header {
            background-color: #1E3A8A;
            color: white;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            animation: fadeInDown 1s ease-out;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            animation: fadeInUp 1s ease-out;
        }
        h2 {
            color: #1E3A8A;
        }
        footer {
            background-color: #1E3A8A;
            color: white;
            padding: 10px;
            margin-top: 20px;
            animation: fadeIn 2s ease-out;
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>

    <header>
        ¡Que viva la U!
    </header>

    <main>
        <section>
            <h2>Historia</h2>
            <p>Nuestra universidad ha sido un pilar fundamental en la educación superior,
            formando generaciones de profesionales comprometidos con la excelencia y la innovación.</p>
        </section>

        <section>
            <h2>Eventos</h2>
            <ul>
                <li>Conferencias magistrales con expertos internacionales</li>
                <li>Competencias deportivas interuniversitarias</li>
                <li>Ferias de innovación y emprendimiento</li>
            </ul>
        </section>

        <section>
            <h2>Misión</h2>
            <p>Brindar educación de calidad, fomentando la investigación y el desarrollo
            para contribuir al progreso de la sociedad.</p>
        </section>
    </main>

    <footer>
        &copy; 2025 ¡Que viva la U! - Todos los derechos reservados.
    </footer>

</body>
</html>
