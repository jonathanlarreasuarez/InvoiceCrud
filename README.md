# InvoiceCrud
 Crud Model Invoice for test

# INSTALAR DEPENDENCIAS
Ejecutar en la terminal el comando:
	-composer install
Para instalar las dependencias necesarias.

# DESCRIPCION PROYECTO
Proyecto desarrollo de CRUD para un modelo de factura.
Para el proyecto se utilizó el patrón repositorio que consiste en añadir una capa de clases que se encargue a acceder al origen de datos y obtener los distintos modelos de datos, permitiendo reutilizar sus métodos instanciados en las clases que las implemente.
Las validaciones de los datos enviados por Request http son realizadas en archivos independientes y quitando esa responsabilidad al controlador.
El frontend es realizado con archivos blade y boostrap 4 para los estilos.

# API Referencias
GET /invoices: Listar todas las facturas
GET /invoices/{invoice} : Obtener una factura
POST /invoices : Crear una factura
PUT /invoices/{invoice} : Actualizar una factura
DELETE /invoices/{invoice} : Eliminar una factura
GET /invoices/{invoice} : Obtener una factura
GET /pdf : Generar pdf de una factura por id
