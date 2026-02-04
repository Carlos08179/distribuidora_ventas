# Distribuidora de Ventas

## Nota sobre la subida inicial del proyecto

Durante el desarrollo del proyecto se hizo en la PC del laboratorio, al intentar subir el repositorio utilizando Git desde la consola, se presentó un problema de autenticación que impidió realizar el `git push` de manera normal.

El error mostrado fue el siguiente:

remote: Permission to Carlos08179/distribuidora_ventas.git denied to Jasenovec.
fatal: unable to access 'https://github.com/Carlos08179/distribuidora_ventas.git/': The requested URL returned error: 403


Este error ocurrió debido a que el entorno del laboratorio tenía configuradas credenciales de Git correspondientes a otro usuario, lo que provocó un conflicto de permisos con el repositorio.

Debido a la limitación de tiempo y para no retrasar la entrega del trabajo, se optó inicialmente por subir el proyecto comprimido en un archivo `.rar` utilizando la interfaz web de GitHub.

**Para poder visualizar el contenido del proyecto en esa subida inicial, es necesario descargar el archivo .rar, ya que GitHub no muestra los archivos internos de los comprimidos**.

---
---

## Requisitos

- XAMPP (Apache)
- PHP (incluido en XAMPP)
- SQLite (archivo local)
- Navegador web

---

## Instrucciones de Ejecución

1. Copiar la carpeta del proyecto dentro del directorio:
C:\xampp\htdocs\
Copiar código

2. Abrir **XAMPP Control Panel** e iniciar el servicio **Apache**.

3. Crear la base de datos:
- Abrir el archivo `script.sql`
- Ejecutar el script en SQLite (por ejemplo con *DB Browser for SQLite*)
- Guardar la base de datos como `ventas.db` dentro de la carpeta `db/`

4. Abrir un navegador web y acceder a:
http://localhost/distribuidora/
Copiar código

5. El sistema mostrará el formulario para registrar ventas y la lista de ventas almacenadas.

---

## Notas

- El sistema utiliza una arquitectura cliente-servidor.
- JavaScript se emplea para validaciones en el cliente.
- PHP gestiona la lógica del servidor y la conexión con SQLite.
- La estructura de la base de datos fue diseñada a partir de un archivo CSV proporcionado como referencia académica.

---

Gracias por la comprensión.
