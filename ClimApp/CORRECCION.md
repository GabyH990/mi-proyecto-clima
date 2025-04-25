# CORRECCIÓN

## ✅ Mala práctica identificada:
El proyecto original contenía solamente HTML y CSS estáticos, sin ninguna lógica de programación ni conexión dinámica con fuentes de datos, lo que limita su funcionalidad como aplicación climática real.

## ❌ ¿Por qué es una mala práctica?
Una aplicación que se basa en mostrar datos en tiempo real (como el clima) no debería tener contenido completamente fijo. Esto dificulta actualizaciones, pruebas y escalabilidad.

## 🛠 ¿Cómo lo solucioné?
- Añadí un archivo `script.js` que se conecta a un backend para obtener datos simulados.
- Implementé un `datos.php` que genera información aleatoria (ciudad, descripción y temperatura).
- Mantuvimos la estructura y estilo original para no alterar el diseño base, pero le dimos funcionalidad dinámica.

## 🌟 Beneficios:
- Se convierte en una aplicación funcional.
- Se mejora la experiencia del usuario mostrando datos reales (aunque sean simulados).
- Abre la posibilidad de expandir la app fácilmente (ej: usando una API real en el futuro).
