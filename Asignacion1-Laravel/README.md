# Asignación 1: Fundamentos de Laravel - Rutas, Controladores y Vistas

**Autor:** Edgar de Jesús  
**Curso:** Desarrollo de Aplicaciones Web 1  
**Fecha:** Diciembre 2025

---

##  Objetivo de la Asignación

Familiarizarse con el patrón fundamental de Laravel para manejar solicitudes web:
- Definir **rutas**
- Conectar rutas a **controladores**
- Pasar datos desde un controlador a una **vista de Blade**

---

##  Rutas Implementadas

| Ruta | Tipo | Descripción |
|------|------|-------------|
| `/bienvenida` | Estática | Muestra un mensaje de bienvenida estático |
| `/saludo/{nombre}` | Dinámica | Muestra un saludo personalizado con el nombre proporcionado |

---

##  Estructura del Proyecto

`
Asignacion1-Laravel/
 app/
    Http/
        Controllers/
            PaginaController.php    # Controlador principal
 resources/
    views/
        bienvenida.blade.php        # Vista de bienvenida
        saludo.blade.php            # Vista de saludo dinámico
 routes/
    web.php                         # Definición de rutas
 ...
`

---

##  Instalación y Ejecución

1. **Clonar el repositorio:**
   `ash
   git clone https://github.com/Ragde199/Desarrollo-de-Aplicaciones-Web1.git
   cd Desarrollo-de-Aplicaciones-Web1/Asignacion1-Laravel
   `

2. **Instalar dependencias:**
   `ash
   composer install
   `

3. **Copiar archivo de configuración:**
   `ash
   cp .env.example .env
   `

4. **Generar clave de aplicación:**
   `ash
   php artisan key:generate
   `

5. **Iniciar el servidor de desarrollo:**
   `ash
   php artisan serve
   `

6. **Acceder a las rutas:**
   - http://127.0.0.1:8000/bienvenida
   - http://127.0.0.1:8000/saludo/Edgar

---

##  Capturas de Pantalla

### Ruta /bienvenida
*(Agregar captura de pantalla)*

### Ruta /saludo/{nombre}
*(Agregar captura de pantalla)*

---

##  Tecnologías Utilizadas

- **Laravel 12** - Framework PHP
- **PHP 8.x** - Lenguaje de programación
- **Blade** - Motor de plantillas de Laravel

---

##  Licencia

Este proyecto es parte de una asignación académica.
