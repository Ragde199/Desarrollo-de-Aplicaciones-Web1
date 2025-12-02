# Asignación 3: Migraciones y Relaciones Completas

**Autor:** Edgar de Jesús  
**Curso:** Desarrollo de Aplicaciones Web 1  
**Fecha:** Diciembre 2025

---

##  Objetivo

Crear la base de datos completa del proyecto con migraciones y modelos con relaciones Eloquent.

---

##  Estructura de la Base de Datos

### Diagrama de Relaciones

`
       
   SPECIALTIES              PATIENTS     
       
 id                      id              
 name (unique)           name            
 description?            lastname        
 timestamps              phone           
        email (unique)  
                          date_of_birth   
          1:N             timestamps      
                         
                                  
                 1:N
    DOCTORS                      
                
 id                     
 name                     APPOINTMENTS   
 lastname               
 phone            patient_id (FK) 
 specialty_id(FK)  1:N   doctor_id (FK)  
 timestamps              scheduled_at    
        status (enum)   
                           notes?          
                           timestamps      
                           softDeletes     
                          
`

---

##  Archivos de Migración

| Archivo | Tabla | Campos |
|---------|-------|--------|
| `create_specialties_table.php` | specialties | id, name (unique), description (nullable), timestamps |
| `create_doctors_table.php` | doctors | id, name, lastname, phone, specialty_id (FK), timestamps |
| `create_patients_table.php` | patients | id, name, lastname, phone, email (unique), date_of_birth, timestamps |
| `create_appointments_table.php` | appointments | id, patient_id (FK), doctor_id (FK), scheduled_at, status (enum), notes (nullable), timestamps, softDeletes |

---

##  Relaciones en los Modelos

### Specialty
- `hasMany(Doctor::class)` - Una especialidad tiene muchos doctores

### Doctor
- `belongsTo(Specialty::class)` - Un doctor pertenece a una especialidad
- `hasMany(Appointment::class)` - Un doctor tiene muchas citas

### Patient
- `hasMany(Appointment::class)` - Un paciente tiene muchas citas

### Appointment
- `belongsTo(Patient::class)` - Una cita pertenece a un paciente
- `belongsTo(Doctor::class)` - Una cita pertenece a un doctor
- Usa `SoftDeletes` para eliminación suave

---

##  Ejecutar Migraciones

`ash
# Instalar dependencias
composer install

# Configurar entorno
cp .env.example .env
php artisan key:generate

# Ejecutar migraciones
php artisan migrate
`

---

##  Tecnologías

- **Laravel 12** - Framework PHP
- **SQLite** - Base de datos
- **Eloquent ORM** - Relaciones belongsTo/hasMany
- **SoftDeletes** - Eliminación suave

---

##  Licencia

Este proyecto es parte de una asignación académica.
