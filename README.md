# Laboratorio 2: Controlador

## Objetivo
El objetivo de este laboratorio es el desarrollo de los elementos básicos de la capa de controlador del proyecto de citas.
Para ello tendremos que realizar las siguientes funcionalidades CRUD de Médico, que han sido eliminadas del proyecto.
En este laboratorio trabajaremos con los siguientes conceptos:
- Controladores https://laravel.com/docs/10.x/controllers (de tipo recurso https://laravel.com/docs/10.x/controllers#resource-controllers). Serán los encargados de recepcionar las peticiones HTTP y devolver las respuestas (vistas o redirecciones a otras rutas, en general) adecuadas.
- Policies (https://laravel.com/docs/10.x/authorization#creating-policies). Serán las encargadas de gestionar la autorización de los usuarios para realizar las diferentes acciones del controlador.
- Validación de datos (https://laravel.com/docs/10.x/validation). Será la encargada de validar los datos de entrada de los usuarios para asegurar que son correctos. Recuerde que se recomienda utilizar FormRequests https://laravel.com/docs/10.x/validation#form-request-validation para las acciones de crear (método store) y edición (método update) de los controladores.
- Rutas (https://laravel.com/docs/10.x/routing). Serán las encargadas de asociar las peticiones HTTP a los métodos de los controladores adecuados.
- Middlewares (https://laravel.com/docs/10.x/middleware). Serán los encargados de interceptar las peticiones HTTP y realizar acciones antes de que lleguen a los controladores. En este laboratorio, utilizaremos los middlewares para asegurarnos de que los usuarios están autenticados antes de realizar las diferentes acciones del controlador, que se someterán a una autorización posterior por parte de las policies.

Este laboratorio está diseñado para llevarse a cabo de manera autónoma, y, con las dudas conceptuales y técnicas que surjan durante el desarrollo, buscar apoyo en la sesión de seguimiento con el profesorado. Para ello, en esta rama encontrará el proyecto de citas completo excepto la capa de controlador para médico, y le guiará en el desarrollo de la misma indicando dónde puede encontrar material de estudio y apoyo. Recuerde que este laboratorio está solucionado en la rama main, con lo que puede consultarla en cualquier momento para comprobar su solución.



HU 1 - Gestión de médicos

    RF 1.1 - Listado de médicos.
    Como administrador,
    Quiero ver un listado de los médicos del sistema paginados de 10 en 10.
    
    RF 1.2 - Detalle de médico.
    Como administrador,
    Quiero ver el detalle de un médico.

    RF 1.3 - Creación de médico.
    Como administrador,
    Quiero crear un médico. Para ello, se debe indicar el nombre y apellidos, email, contraseña, fecha de contratación, si está vacunado de COVID o no, el sueldo y la especialidad. Deberé poder elegir la especilidad del médico entre el listado de especialidades ya existentes en la base de datos del sistema. El sistema debe impedir la creación de médico si:
    - El email ya existe.
    - El email no tiene el formato correcto.
    - La contraseña no tiene al menos 8 caracteres y viene la contraseña y su confirmación.
    - El sueldo no puede ser negativo
    - La especialidad tiene que ser una de las ya disponibles en el sistema.
    El sistema además deberá mostrar un mensaje de error en cada uno de los casos anteriores y, en caso de éxito, navegar al listado actualizado de médicos con un mensaje de éxito.

    RF 1.3 - Edición de médico.
    Como administrador,
    Quiero editar un médico eligiéndolo a partir del listado de médicos y llevándome a una nueva pantalla donde pueda trabajar con los datos. Para ello, se debe poder modificar el nombre y apellidos, email, fecha de contratación, si está vacunado de COVID o no, el sueldo y la especialidad. Deberé poder elegir la especilidad del médico entre el listado de especialidades ya existentes en la base de datos del sistema. El sistema debe impedir la edición de médico si:
    - El email no tiene el formato correcto.
    - La contraseña no tiene al menos 8 caracteres y viene la contraseña y su confirmación.
    - El sueldo no puede ser negativo
    - La especialidad tiene que ser una de las ya disponibles en el sistema.
    El sistema además deberá mostrar un mensaje de error en cada uno de los casos anteriores y, en caso de éxito, navegar al listado actualizado de médicos con un mensaje de éxito.
    
    RF 1.4 - Borrado de médico.
    Como administrador,
    Quiero borrar un médico. El sistema deberá alertarme de la irrevocabilidad de esta acción y pedir confirmación. En caso de confirmación, el sistema deberá borrar el médico y navegar al listado actualizado de médicos con un mensaje de éxito.

Como parte de este laboratorio tendrá que:
- Recuperar médicos, especialidades y otras entidades relacionadas con médicos. Para ello, puede utilizar las relaciones de Eloquent https://laravel.com/docs/10.x/eloquent-relationships. Puede encontrar más información sobre cómo hacerlo aquí: https://laravel.com/docs/10.x/eloquent#retrieving-models. Es posible que también necesite paginar los resultados en algunos casos. Puede encontrar más información sobre cómo hacerlo aquí: https://laravel.com/docs/10.x/pagination.
- Crear y actualizar tanto médicos como usuarios, ya que existe una relación de herencia entre ellos. https://laravel.com/docs/10.x/eloquent#inserting-and-updating-models.
- Borrar médicos y usuarios. https://laravel.com/docs/10.x/eloquent#deleting-models.
- Autorizar métodos de controlador con policies. https://laravel.com/docs/10.x/authorization#via-controller-helpers.
- Flashear mensajes de éxito y error para informar al usuario de que el. https://laravel.com/docs/10.x/session#flash-data.

Recuerde que tiene disponible tanto los modelos de datos que serán usados por los controladores, como las vistas de la aplicación que se devolverán como respuesta de los métodos del controlador ya implementadas. Trabaje con los controladores y rutas necesarias para cumplir con los requisitos funcionales especificados.
Además, tiene controladores de apoyo ya implementados que puede utilizar como referencia para el desarrollo del laboratorio.
Una vez completado el laboratorio, la aplicación debería funcionar exactamente igual que funciona la gestión de médicos de la aplicación desplegada en la rama master. Recuerde que puede desplegarla para inspirarse. Para ello, logee como administrador para comprobar las funcionalidades realizadas.

