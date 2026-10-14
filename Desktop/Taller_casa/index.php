<?php
$nombre_heladeria = "Heladería Glacial";
$administrador = "Andrés Portilla";
$ciudad = "Pasto";

$edad_cliente = 20; 

$dia_semana = "Martes"; 

$sabor_disponible = true; 
$nombre_sabor_verificar = "Chocorron";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre_heladeria; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fce4ec;
            color: #333;
        }

        header {
            background-color: #f06292;
            color: white;
            text-align: center;
            padding: 2rem 1rem;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .descripcion {
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }

        .mensajes-dinamicos {
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 600px;
            margin: 20px auto;
            padding: 0 1rem;
        }

        .mensajes-dinamicos div {
            background: white;
            padding: 12px 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            font-weight: bold;
            text-align: center;
        }

        main {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        main h2 {
            text-align: center;
            color: #ad1457;
            margin-bottom: 1.5rem;
        }

        .tarjetas-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .tarjeta {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            padding-bottom: 1rem;
        }

        .tarjeta:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .tarjeta img {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .tarjeta h3 {
            margin: 10px 0 5px;
            color: #880e4f;
        }

        .precio {
            color: #e91e63;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .promociones {
            background-color: #f8bbd0;
            text-align: center;
            padding: 2rem 1rem;
            margin-top: 2rem;
        }

        .promociones h2 {
            color: #880e4f;
        }

        footer {
            background-color: #880e4f;
            color: white;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
        }

        footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo-container">
            <h1>🍦 <?php echo $nombre_heladeria; ?></h1>
            <p>Administrador: <strong><?php echo $administrador; ?></strong> | Ciudad: <strong><?php echo $ciudad; ?></strong></p>
        </div>
        <p class="descripcion">El lugar donde los sueños se congelan y los sabores cobran vida. ¡Disfruta de la mejor experiencia artesanal!</p>
    </header>

    <section class="mensajes-dinamicos">
        <div class="alerta-edad">
            <?php 
                if ($edad_cliente >= 18) {
                    echo "<p>🟢 ¡Bienvenido! Conoce nuestras promociones especiales.</p>";
                } else {
                    echo "<p>🔵 ¡Bienvenido! Descubre nuestros deliciosos sabores.</p>";
                }
            ?>
        </div>

        <div class="alerta-dia">
            <?php 
                if ($dia_semana == "Martes") {
                    echo "<p>🎉 ¡Hoy tenemos 2x1 en conos!</p>";
                } else {
                    echo "<p>🍦 Hoy puedes disfrutar de nuestros sabores habituales.</p>";
                }
            ?>
        </div>

        <div class="alerta-disponibilidad">
            <?php 
                if ($sabor_disponible) {
                    echo "<p>✅ ¡Este sabor ($nombre_sabor_verificar) está disponible!</p>";
                } else {
                    echo "<p>❌ Lo sentimos, este sabor ($nombre_sabor_verificar) está agotado.</p>";
                }
            ?>
        </div>
    </section>

    <main>
        <h2>Nuestros Sabores</h2>
        <div class="tarjetas-container">
            
            <div class="tarjeta">
                <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?auto=format&fit=crop&w=500&q=80" alt="Helado de Vainilla">
                <h3>Vainilla Suprema</h3>
                <p class="precio">$4.500</p>
            </div>

            <div class="tarjeta">
                <img src="https://images.unsplash.com/photo-1570197788417-0e82375c9371?auto=format&fit=crop&w=500&q=80" alt="Helado de Chocolate">
                <h3>Chocolate Belga</h3>
                <p class="precio">$5.000</p>
            </div>

            <div class="tarjeta">
                <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=500&q=80" alt="Helado de Fresa">
                <h3>Fresa Silvestre</h3>
                <p class="precio">$4.500</p>
            </div>

            <div class="tarjeta">
                <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=500&q=80" alt="Helado de Maracuyá">
                <h3>Maracuyá Tropical</h3>
                <p class="precio">$4.800</p>
            </div>

        </div>
    </main>

    <section class="promociones">
        <h2>🎁 Promociones Especiales</h2>
        <p>¡Ven con tus amigos y aprovecha nuestros combos en todas las sucursales!</p>
    </section>

    <footer>
        <p>📞 Contacto: +57 310 123 4567 | 📧 contacto@heladeriaglacial.com</p>
        <p>&copy; 2026 Heladería Glacial. Todos los derechos reservados.</p>
    </footer>

</body>
</html>