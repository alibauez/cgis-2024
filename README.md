# Laboratorio 3: Vista

## Objetivo
El objetivo de este laboratorio es practicar con Laravel Blade para el desarrollo de vistas simples de relaciones 1-N (1 especialidad - N médicos) que permitan el inicio del desarrollo del proyecto individual al completo.

Este laboratorio está diseñado para llevarse a cabo de manera autónoma, y, con las dudas conceptuales y técnicas que surjan durante el desarrollo, buscar apoyo en la sesión de seguimiento con el profesorado. Para ello, en esta rama encontrará el proyecto de citas completo excepto las vistas que tendrá que implementar, y le guiará en el desarrollo de la misma indicando dónde puede encontrar material de estudio y apoyo. Recuerde que este laboratorio está solucionado en la rama main, con lo que puede consultarla en cualquier momento para comprobar su solución.

En este laboratorio el estudiante deberá implementar el CRUD básico de la entidad Especialidad, que consta de:
- **Vista de listado de especialidades (incluyendo paginación)**. El listado deberá dar acceso a las acciones de crear, editar y borrar especialidades.
  ![listado-especialidades.png](public%2Flistado-especialidades.png)
- **Vista de creación de especialidad**. El formulario deberá impedir en cliente que el formulario se envíe si el nombre está vacío y mostrar los errores devueltos por el controlador en caso de haberlos y mantener los valores introducidos por el usuario en dicho caso. Se debe poder navegar al listado de especialidades además de poder guardar la especialidad.
  ![crear-especialidad.png](public%2Fcrear-especialidad.png)
- **Vista de edición de especialidad**. El formulario deberá mostrar los valores almacenados en la base de datos al inicio de la edición, los errores en su caso y mantener los valores introducidos por el usuario en caso de error.
  ![editar-especialidad.png](public%2Feditar-especialidad.png)

Además, deberá realizar las vistas del lado N de la relación entre Médico-Especialidad: Médico.
- Vista de listado de médicos (incluyendo paginación). El listado deberá dar acceso a las acciones de crear, editar y borrar médicos.
  ![listado-medicos.png](public%2Flistado-medicos.png)
- Vista de creación de médico. Deberá poderse elegir una especialidad de la lista de especialidades disponibles en la base de datos (relación 1-N) y deberá validarse en cliente todo aquello que sea posible. Para ello, compruebe las reglas de validación presentes en MedicoController::store para establecer las restricciones de validación en el formulario.
  ![crear-medico.png](public%2Fcrear-medico.png)
- Vista de detalle de médico (incluyendo el nombre de la especialidad). Nótese que en el título aparece Editar Médico NOMBREMEDICO. Corríjalo y muestre el mensaje "Detalle de médico NOMBREMEDICO" en lugar de "Editar médico NOMBREMEDICO".
  ![show-medico.png](public%2Fshow-medico.png)
- Vista de edición de médico. Deberá poderse elegir una especialidad de la lista de especialidades disponibles en la base de datos (relación 1-N) y deberá validarse en cliente todo aquello que sea posible. Para ello, compruebe las reglas de validación presentes en MedicoController::update para establecer las restricciones de validación en el formulario.
  ![editar-medico.png](public%2Feditar-medico.png)
## Requisitos

Para ello, deberá conocer el funcionamiento de Laravel Blade y las directivas de control de flujo y de impresión de datos. Además, deberá conocer el funcionamiento de los formularios HTML y el uso de los elementos de formulario para la creación de formularios de edición y creación de entidades.
Si no tiene experiencia con el uso de formularios HTML, puede consultar la documentación de referencia de Mozilla Developer Network (MDN) en el siguiente enlace: https://developer.mozilla.org/es/docs/Learn/Forms/Your_first_form
Si necesita más apoyo sobre el lenguaje de marcado HTML, puede consultar la documentación de referencia de Mozilla Developer Network (MDN) en el siguiente enlace: https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML, haciendo especial hincapié en los siguientes elementos:
- Tablas: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table
- Inputs: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
- Selects: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/select
- Divs: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div
- Buttons: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button

Una vez tenga la base necesaria, tendrá que:
- Mostrar información provista por los controladores en las vistas: https://laravel.com/docs/10.x/blade#displaying-data
- Mostrar información de forma condicional: https://laravel.com/docs/10.x/blade#if-statements
- Mostrar información de forma iterativa: https://laravel.com/docs/10.x/blade#loops, por ejemplo, para generar las filas de una tabla basado en las colecciones (https://laravel.com/docs/10.x/collections) pasadas a la vista por el controlador.
- Trabajar con los CSRF field dentro de los formularios HTML para la creación/edición: https://laravel.com/docs/10.x/blade#csrf-field
- Trabajar con los componentes (https://laravel.com/docs/10.x/blade#components) creados para facilitar la creación de vistas, que pueden encontrarse en resources/views/components, en especial: los botones (button-primary para botones de acción principal, danger-button para botones de cancelar o similares), input-error para mostrar los errores de validación en servidor, así como los inputs más usados: input-label para las etiquetas de los inputs, text-input y select.
- Trabajar con paginación: https://laravel.com/docs/10.x/pagination#customizing-the-pagination-view

Dé por hecho el sistema de plantillas presente (https://laravel.com/docs/10.x/blade#building-layouts), e intente reutilizar los estilos de otras vistas que encontrará ya implementadas.
Recuerde que son los controladores los que se encargan de gestionar las peticiones HTTP y devolver las respuestas HTTP (por ejemplo, devolviendo el HTML que representa una vista en concreto). 
Por tanto, deberá comprobar qué vistas son las utilizadas por dichos controladores para que las vistas funcionen correctamente y crearlas en caso necesario.
Además, en este laboratorio, las rutas necesarias para que las vistas funcionen correctamente están implementadas. Compruebe, además del path, el verbo usado por cada ruta involucrada.

El modo propuesto de trabajo es: copie una vista similar, pruebe a borrar/añadir componentes y elementos HTML y recargue la página para comprobar el resultado. Si no funciona, deshaga los cambios y pruebe de nuevo. Si funciona, continúe con el siguiente paso.

Recuerde que, tras ejecutar en el terminal ``./vendor/bin/sail up -d`` para levantar Laravel Sail, deberá ejecutar ``.npm run dev`` si quiere que, cuando se salve un cambio en la vista, se haga un redespliegue en caliente.

Al finalizar el laboratorio, además de establecerse un diseño similar al adjunto en las capturas, la experiencia de usuario en cuanto al funcionamiento de la aplicación deberá ser similar al disponible en la rama master. Despliegue dicha como paso previo para establecer el comportamiento deseado y revise tantas veces sea necesario hasta conseguir el resultado deseado.
