# ClimApp

Una versión simplificada de una aplicación del clima. Esta versión conserva el diseño original, pero introduce datos dinámicos simulados usando PHP y JavaScript.

## Funcionalidades

- Visualización de ciudad, clima y temperatura.
- Botón de actualización que recarga los datos.
- Datos generados de forma aleatoria al cargar o actualizar.
- Mantiene el diseño moderno y responsive.

## Estructura

- `index.html`: estructura visual.
- `style.css`: diseño original.
- `script.js`: obtiene datos dinámicos y los inserta en el DOM.
- `datos.php`: genera datos aleatorios simulados en formato JSON.
- `CORRECCION.md`: explicación de la mala práctica corregida.

## Cómo usar

1. Clona este repositorio.
2. Ejecuta un servidor PHP local:
   ```
   php -S localhost:8000
   ```
3. Abre tu navegador en `http://localhost:8000`

## Tecnologías usadas

- HTML5
- CSS3
- JavaScript (vanilla)
- PHP (para datos simulados)
