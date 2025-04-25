<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <style {csp-style-nonce}>
        /* —————————————— Variabel Tema —————————————— */
        :root {
            --color-primary: #1abc9c;
            --color-secondary: #16a085;
            --color-bg-light: #f4f7f6;
            --color-bg-dark: #ecf0f1;
            --color-text: #2c3e50;
            --color-muted: #7f8c8d;
            --transition: 0.3s ease;
            --radius: 6px;
            --shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        /* ————————— Reset & Base ————————— */
        *, *::before, *::after {
            box-sizing: border-box;
            transition: background-color var(--transition), color var(--transition);
        }
        body {
            margin: 0;
            font-family: "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
            color: var(--color-text);
            background: var(--color-bg-light);
            -webkit-font-smoothing: antialiased;
        }
        a {
            color: var(--color-primary);
            text-decoration: none;
        }
        a:hover {
            color: var(--color-secondary);
        }

        /* ————————— Header ————————— */
        header {
            background: var(--color-bg-dark);
            box-shadow: var(--shadow);
            padding: 0.5rem 1rem;
        }
        header .menu ul {
            list-style: none;
            margin: 0; padding: 0;
            display: flex; justify-content: space-between; align-items: center;
        }
        header .logo svg {
            height: 44px;
            filter: hue-rotate(150deg);
        }
        header li.menu-item a {
            padding: 0.5rem 1rem;
            border-radius: var(--radius);
            color: var(--color-muted);
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background: var(--color-primary);
            color: #fff;
        }
        header .menu-toggle button {
            background: var(--color-primary);
            border: none;
            border-radius: var(--radius);
            width: 40px; height: 36px;
            font-size: 1.4rem;
            color: #fff;
            cursor: pointer;
            box-shadow: var(--shadow);
        }
        header .menu-toggle button:hover {
            background: var(--color-secondary);
        }

        /* ————————— Hero Section ————————— */
        .heroe {
            text-align: center;
            padding: 2rem 1rem;
            background: #fff;
            border-radius: var(--radius);
            margin: 1rem auto;
            max-width: 800px;
            box-shadow: var(--shadow);
        }
        .heroe h1 {
            margin: 0 0 .5rem;
            font-size: 2.75rem;
            color: var(--color-primary);
        }
        .heroe h2 {
            margin: 0;
            font-size: 1.5rem;
            color: var(--color-muted);
        }

        /* ————————— Section Konten ————————— */
        section {
            max-width: 900px;
            margin: 2rem auto;
            background: #fff;
            padding: 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }
        section h1 {
            margin-top: 0;
            color: var(--color-primary);
        }
        section pre {
            background: var(--color-bg-dark);
            border: none;
            padding: 1rem;
            border-radius: var(--radius);
            overflow-x: auto;
        }

        /* ————————— Further ————————— */
        .further {
            background: var(--color-bg-light);
            padding: 2rem 0;
        }
        .further section {
            box-shadow: none;
            background: var(--color-bg-light);
        }
        .further h2 {
            display: flex;
            align-items: center;
            color: var(--color-secondary);
        }
        .further svg {
            margin-right: .5rem;
            stroke: var(--color-secondary);
            stroke-width: 24px;
        }

        /* ————————— Footer ————————— */
        footer {
            background: var(--color-primary);
            color: #fff;
            text-align: center;
            padding: 1.5rem 0;
        }
        footer .copyrights {
            background: var(--color-secondary);
            padding: .5rem 0;
            font-size: .9rem;
        }

        /* ————————— Responsive ————————— */
        @media (max-width: 768px) {
            header .menu ul {
                flex-direction: column;
            }
            header li.menu-item {
                width: 100%;
                margin: .25rem 0;
            }
            .heroe {
                margin: 1rem;
            }
            section {
                margin: 1rem;
                padding: 1rem;
            }
        }
    </style>
</body>
</html>