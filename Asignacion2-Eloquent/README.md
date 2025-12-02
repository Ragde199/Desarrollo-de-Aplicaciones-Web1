# Asignación 2: Conexión a la Base de Datos y Eloquent

**Autor:** Edgar de Jesús  
**Curso:** Desarrollo de Aplicaciones Web 1  
**Fecha:** Diciembre 2025

---

##  Objetivo de la Asignación

Introducirse a la capa de persistencia de datos en Laravel:
- Configurar la conexión a una **base de datos** (SQLite)
- Crear **migraciones** para definir la estructura de tablas
- Crear un **Modelo de Eloquent** para interactuar con la base de datos
- Utilizar **Seeders** para poblar la base de datos con datos de prueba

---

##  Estructura de la Base de Datos

### Tabla: productos

| Campo | Tipo | Descripción |
|-------|------|-------------|
| id | INTEGER | Clave primaria autoincremental |
| nombre | STRING | Nombre del producto |
| descripcion | TEXT | Descripción detallada del producto |
| precio | DECIMAL(10,2) | Precio del producto |
| created_at | TIMESTAMP | Fecha de creación |
| updated_at | TIMESTAMP | Fecha de actualización |

---

##  Archivos Creados

`
Asignacion2-Eloquent/
 app/
    Http/Controllers/
       ProductoController.php      # Controlador de productos
    Models/
        Producto.php                # Modelo Eloquent
 database/
    migrations/
       2025_12_02_..._create_productos_table.php
    seeders/
        ProductoSeeder.php          # Seeder con 5 productos
 resources/views/
    productos.blade.php             # Vista con lista de productos
 routes/
     web.php                         # Ruta /productos
`

---

##  Ruta Implementada

| Ruta | Método | Descripción |
|------|--------|-------------|
| `/productos` | GET | Muestra todos los productos de la base de datos |

---

##  Instalación y Ejecución

1. **Clonar el repositorio:**
   `ash
   git clone https://github.com/Ragde199/Desarrollo-de-Aplicaciones-Web1.git
   cd Desarrollo-de-Aplicaciones-Web1/Asignacion2-Eloquent
   `

2. **Instalar dependencias:**
   `ash
   composer install
   `

3. **Configurar entorno:**
   `ash
   cp .env.example .env
   php artisan key:generate
   `

4. **Ejecutar migraciones:**
   `ash
   php artisan migrate
   `

5. **Ejecutar seeder:**
   `ash
   php artisan db:seed --class=ProductoSeeder
   `

6. **Iniciar servidor:**
   `ash
   php artisan serve
   `

7. **Acceder a la ruta:**
   - http://127.0.0.1:8000/productos

---

##  Capturas de Pantalla

### Ruta /productos
*(Agregar captura de pantalla)*

---

##  Tecnologías Utilizadas

- **Laravel 12** - Framework PHP
- **SQLite** - Base de datos
- **Eloquent ORM** - Mapeo objeto-relacional
- **Blade** - Motor de plantillas

---

##  Licencia

Este proyecto es parte de una asignación académica.
