# Laboratorio 1 - Modelo

## Objetivo

El objetivo de este laboratorio es preparar al estudiante para desarrollar la capa de Modelo del proyecto de gestión de citas, focalizándose en tres conceptos principales:
- Modelos, que representarán las entidades de nuestro sistema y siguen un patrón de Active Record para la comunicación con la BBDD gracias a la herencia de la clase Model de Laravel.
- Migraciones, que se ejecutarán para aplicar cambios en los esquemas (tablas) de la BBDD. Funcionan como una máquina de estados, y, por tanto, se pueden revertir.
- Seeders, que se ejecutarán para poblar la BBDD con datos de pruebas.

Este laboratorio está diseñado para llevarse a cabo de manera autónoma, y, con las dudas conceptuales y técnicas que surjan durante el desarrollo, buscar apoyo en la sesión de seguimiento con el profesorado.
Para ello, en esta rama encontrará el proyecto de citas completo excepto la capa de Modelo, y le guiará en el desarrollo de la misma indicando dónde puede encontrar material de estudio y apoyo.
Recuerde que este laboratorio está solucionado en la rama main, con lo que puede consultarla en cualquier momento para comprobar su solución.

## Requisitos

1. Crear los modelos necesarios (https://laravel.com/docs/10.x/eloquent#generating-model-classes) para cumplir con el siguiente diagrama Entidad/Relación:
   ![diagrama-er-citas-cgis.svg](public%2Fdiagrama-er-citas-cgis.svg). Para definir las relaciones entre modelos, puede apoyarse en la documentación de Eloquent (https://laravel.com/docs/10.x/eloquent-relationships). Para definir accesors (propiedades derivadas/computadas) y casts (propiedades que se almacenan en la base de datos como un tipo de dato y se devuelven como otro), puede apoyarse en la documentación de Eloquent (https://laravel.com/docs/10.x/eloquent-mutators).
2. Crear las migraciones necesarias para crear las tablas en la base de datos: https://laravel.com/docs/10.x/migrations.
3. Crear los seeders necesarios (https://laravel.com/docs/10.x/seeding) para poblar la base de datos con datos de prueba con los siguientes datos:
    - 3 especialidades: Oftalmología, Neurología, Cardiología.
    - 1 médico.
    - 1 paciente.
    - 1 administrador.
    - 1 medicamento.
    - 1 cita, que tengan como médico al médico creado, como paciente al paciente creado. Tendrá también asociada una prescripción al medicamento creado.
    - Tenga en cuenta que, para poder crear la cita, deberá crear primero el médico y el paciente, ya que la cita tiene como clave foránea a estos dos modelos.
    - Sepa además que los modelos deberán permitir el auto-rellenado (https://laravel.com/docs/10.x/eloquent#mass-assignment) de todas las propiedades provistas por los formularios de creación/edición de dichas entidades. Despliegue la rama master de este proyecto si tiene dudas de qué campos deben ser fillables.

Recuerde que, para comprobar que todo funciona, al entrar en http://localhost debería poder hacer login con los usuarios que ha creado y ver la cita, medicamentos y especialidades que haya introducido con los seeders.
Apóyese en los errores que vayan apareciendo durante el desarrollo para la corrección de los mismos.
