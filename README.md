# GDARD-TI22
Trabajo semestral de Taller de integracion Generador de API REST dinamico.

<h1>ApiGenerator</h1>

--------------------------------------------------------
## English Documentation.

## Resume 🚀
This moudle would ensure the selection of objects(Tables,views,stored procedures) from a database  and obtain its properties(columns, parameters, etc.). This must require auth tokens to generate the CRUD methods  in JSON format for the REST API. This module should also administer already created APIs in somekind of repository allowing it accesss with it s corresponding documentation.

## Objectives
* **Build a tool that must allow in base of the metadata of any table, view or stored procedure  generate the basic API for it maintainance** 

 * Read the database and select tables, stored procedures or views on which you want to build the REST API. 
* Obtain the metadata or parameters of the database object dynamically and build the methods it supports according to its permissions to perform the corresponding CRUD **(GET/POST/PUT/DELETE)**.
*Apply security concepts in APIs using Token or API-Key for the authorization of calls or critical procedures and identification of the client that executes the API.
* A module that allows the management of REST APIs based on the objects found in the database.


## Technologies involved 👩‍💻

```

POSTAMN
Laravel
PHP7
SQLServer 2008R2

```
### Pre-requisitos 📋

_The Computer Equipment has to have the following characteristics:_

```
RAM: 4gb
Disco Duro:60gb
Procesador: Intel Pentium o amd ryzen 3 
```


### Installation 🔧

_ First we have to have downloaded the applications that we are going to use that are xampp, posman, Laravel, PHP7, SQLServer 2008R2 _


### XAMPP APPLICATION

The installation wizard then starts. To continue, click the "Next" button.

![image](https://user-images.githubusercontent.com/31218299/202347447-ac2cf13a-ef0b-47ab-91d6-9b4cdd09e7b4.png)

The minimum components that XAMPP installs are the Apache server and the PHP language, but XAMPP also installs other elements. On the component selection screen, you can choose whether or not to install these components. To follow these notes you need to at least install MySQL and phpMyAdmin.

![image](https://user-images.githubusercontent.com/31218299/202347943-00a8a1ad-74af-4f7e-ae09-b68a0217be2f.png)

On the next screen you can choose the XAMPP installation folder. The default installation folder is C:\xampp. If you want to change it, click the folder icon and select the folder where you want to install XAMPP. To continue configuring the installation, click the "Next" button.

![image](https://user-images.githubusercontent.com/31218299/202348034-01929b85-5aa7-4d31-8eef-5607a96c046b.png)

The next screen offers to select the language of the control panel interface (the options available in this version are English and German).

![image](https://user-images.githubusercontent.com/31218299/202348111-040b66e1-2bb2-4fc1-aea7-8395b77804cb.png)

The next screen provides information about the application installers for XAMPP created by Bitnami. Click the "Next" button to continue. If you leave the box checked, a Bitnami web page will open in your browser.

![image](https://user-images.githubusercontent.com/31218299/202348185-c1868eb8-8936-42eb-884d-5e33b3c82843.png)

Once you have chosen the installation options on the previous screens, this screen is the installation confirmation screen. Click the "Next" button to begin the installation on the hard drive.

![image](https://user-images.githubusercontent.com/31218299/202348271-f4031429-29df-4852-9fb8-e2b1f4409d2d.png)

The process of copying files may take a few minutes.

![image](https://user-images.githubusercontent.com/31218299/202348409-a8b008ae-19e7-403c-a910-6a45915c6513.png)

During installation, if Apache has not been installed on your computer before, at some point a Windows firewall prompt will be displayed to authorize Apache to communicate on private or public networks. In principle, it is recommended not to modify the checked boxes, whether public or private, and click on the "Allow access" button. As an example, in the screenshot the private box is checked, because that is the network profile configured on the computer. The next section, The Windows Firewall, explains in a little more detail the meaning of these permissions and how to modify them later if necessary.

![image](https://user-images.githubusercontent.com/31218299/202348509-c162336c-5ab0-4ea3-8654-ecdcfc265b82.png)

Thus, the first time Apache is launched after installation using the corresponding Start button ...

![image](https://user-images.githubusercontent.com/31218299/202348735-e334d8bc-5900-43a7-9ef0-9da1c7d59fe6.png)

### Postman App

Click the Windows button to download.

![image](https://user-images.githubusercontent.com/31218299/202349801-64a53240-0ae8-4d36-a9e6-eb46abf870e8.png)

Now click on Windows 64 - bit button.

![image](https://user-images.githubusercontent.com/31218299/202349878-b85ee8aa-3524-4e48-94f7-a890f5af172d.png)

Now check the executable file in the downloads on your system and run it.

![image](https://user-images.githubusercontent.com/31218299/202349963-a31dbae3-7d55-4b0b-96c7-f8ddfd4cf141.png)

Now the installation process will begin, it will take a minute to install on the system.

![image](https://user-images.githubusercontent.com/31218299/202350008-c28bc507-f974-4457-81ce-e8a42b58d337.png)


After installing the program, the software opens automatically. Now you can see the interface of the software.

![image](https://user-images.githubusercontent.com/31218299/202350077-aa98e3d4-4e29-4652-b4d0-07f91ec30883.png)

### SQLServer 2008R2

Download the SQL Server 2008 Express installation file by opening any browser and accessing the URL:

http://www.microsoft.com/express/Database

We will select the type of installation (32 or 64 bits), in our case, since we have Microsoft Windows 10 64-bit on 64-bit architecture, we will select 64 bits, the download of SQLEXPRWT_x64_ENU.exe

![image](https://user-images.githubusercontent.com/31218299/202350882-0d909138-060e-4a7f-abf5-3065ef1aa10d.png)

The download of the selected installation file will start:

![image](https://user-images.githubusercontent.com/31218299/202350987-6c2b8e88-b7b6-408d-942b-fd815fd20e70.png)


We will execute the downloaded file (if we have Microsoft Windows 10 it is advisable to click with the right mouse button on the executable and select "Run as administrator")

![image](https://user-images.githubusercontent.com/31218299/202351052-c2540b6a-947b-405e-8a33-e2538681b3a6.png)


Select "New installation or add features to an existing installation":

![image](https://user-images.githubusercontent.com/31218299/202351155-99d9a839-f40b-4ec0-93a2-af526579c5c6.png)

We will read the license terms of Microsoft SQL Server 2008 R2 Express, if we agree we will mark "I accept the license terms" and press "Next"

![image](https://user-images.githubusercontent.com/31218299/202351459-514b37da-4243-4f47-81d1-2782000cf252.png)


We will select the elements to install:

Database Engine services: SQL Server Database Engine services, a mandatory installation feature for SQL Server server operation.
SQL Server Replication: SQL Server database replication tool.
Management Tools - Basic: SQL Server Management Console.
SQL Client Connectivity SDK: SQL Server connection tools for developers.
Select the installation folder and press "Next":

![image](https://user-images.githubusercontent.com/31218299/202351522-904e191c-af5d-44b2-abac-c731836c7415.png)

We will enter the name of the instance of SQL Server (we can have several installed on the same computer), in our case "SQLExpress2008":

![image](https://user-images.githubusercontent.com/31218299/202351580-cd4f445f-7dec-42bf-86b7-165ee60cee4a.png)


We will enter the username and password for each service that will be installed, clicking on "Use the same account for all SQL Server services" we can establish the same user for all Microsoft SQL Server 2008 R2 Express services:

![image](https://user-images.githubusercontent.com/31218299/202351636-b1099e75-e759-4973-85a6-467b8184c29e.png)

Note: SQL Server Browser is the name resolution service that provides connection information to SQL Server for client computers. This service is shared across multiple instances of SQL Server and Integration Services.

We will enter username in "Account Name" and password in "Password":

![image](https://user-images.githubusercontent.com/31218299/202351682-f24d216a-64f7-41d0-8f1a-946a299efb52.png)

In the previous window, we can also choose the type of startup for each service, by default SQL Server Database Engine is automatic (Automatic) and SQL Server Browser is disabled (Disabled):

![image](https://user-images.githubusercontent.com/31218299/202351725-d267e9a0-ac79-4bc1-8197-de8a390aa002.png)


Then we must choose the authentication method in the "Account Provisioning" tab, the possibilities:

Windows authentication mode: Operating system (Windows) users will be used for SQL Server login.
Mixed Mode (SQL Server authentication and Windows authentication): Mixed mode, access with SQL Server users and with operating system users.
In our case we will select "Mixd Mode" and in "Specify the password for the SQL Server system administrator (sa) account" we will enter the password for the SQL Server administrator superuser "sa". It is recommended that it be a strong password (with numbers, uppercase and lowercase letters and some special characters) because this user has permissions to perform any action in the database.

In "Specify SQL Server administrators" we can add the users that we want to be SQL Server administrators:

![image](https://user-images.githubusercontent.com/31218299/202351787-c7578aef-a1ee-42b8-a326-360905fc5e36.png)


In the "Data Directories" tab you can choose the installation directories of each element (user directory, log, temporary, backup, etc.):

![image](https://user-images.githubusercontent.com/31218299/202351848-b6fa4923-fd6c-4c3c-b779-adaac49ce722.png)


Marcaremos el check "Send Windows and SQL Server Error Reports to Microsoft or your corporate report server. This settings only applies to services that run without user interations" si queremos enviar reportes automáticos de errores a Microsoft. Pulsaremos "Next" para continuar:

![image](https://user-images.githubusercontent.com/31218299/202351907-1cec35a7-d780-46fc-8e8c-c98475959873.png)


The Microsoft SQL Server 2008 R2 Express installation process starts:

![image](https://user-images.githubusercontent.com/31218299/202351977-ef742d26-3344-4a6e-92d3-3788fd0f03bf.png)


Once the process is finished, it may tell us that we have to restart the computer, with the message "One or more affected files have operations pendins. You must restart your computer to complete this process". Press "OK":

![image](https://user-images.githubusercontent.com/31218299/202352020-97e6a5b3-32ef-4814-a7d2-3bc72e5f78e8.png)


### app Composer

download the Composer .exe file

![image](https://user-images.githubusercontent.com/31218299/202352874-b77ffa54-ed8f-4ecd-af73-bc3e86adf803.png)

Click Download the Composer.exe file. Then open a prompt box:

![image](https://user-images.githubusercontent.com/31218299/202352939-3c9cdb70-1fbc-4d5f-bd0c-01659a649915.png)


Now set the PHP path and click next:

![image](https://user-images.githubusercontent.com/31218299/202352976-c8338b0a-3bff-410d-874a-d11a8c529932.png)

If you have a proxy URL enter here, I do not know how to leave it to click next:

![image](https://user-images.githubusercontent.com/31218299/202353034-1ee3e7a3-89d9-4863-806e-a858cdb58212.png)


Now, review the composer setup wizard. And click install.

![image](https://user-images.githubusercontent.com/31218299/202353114-735a3ce8-6ab1-4c13-af89-130ac0b8af8e.png)

Composer has been successfully installed. Click to finish the button.

![image](https://user-images.githubusercontent.com/31218299/202353167-9853fbd9-5768-4d71-8ab4-dc839d9e9de9.png)


### app Laravel


Type the following command in the Command Prompt window: 

Global Composer requires "Laravel / Installer". 
composer create-project –prefer-dist laravel / laravel Project_name: This command will install Laravel and other dependencies and also generate the ANSI key. 

![image](https://user-images.githubusercontent.com/31218299/202352351-9c9883f6-1778-4655-b6b5-129276b27941.png)

PHP Handmade Service: This command starts your development server. 

![image](https://user-images.githubusercontent.com/31218299/202353488-fa95d257-731d-4e24-a25e-9e75755cc14f.png)

Go to the IP URL you see on your CMD screen.

![image](https://user-images.githubusercontent.com/31218299/202353539-6193601d-467a-4044-a1ee-bcfeebe703db.png)




## RUN PROJECT
```py
    composer install
    php artisan serve
    php artisan migrate #in case you don't have an user table use  to migrate your model and generate it.
```
## Authors ✒️

_Developer_

* **Cesar Caris** - *developer* 
* **Edison Sepulveda** - *developer* 

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License 📓

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).





## Documentacion Español.
## Resumen 🚀
El módulo permitirá seleccionar objetos (Tablas, vistas, procedimientosalmacenados) dentro de una base de datos y obtener sus propiedades (columnas, parámetros, etc.).En función de ello y de los permisos que tenga generar los métodos respectivos para el CRUD enformato JSON para la API REST.El modulo debe administrar además las APIs ya creadas en algún tipo de repositorio permitiendoacceder a las APIS disponibles, sus parámetros y sus salidas.

## Objetivos
* **Construir una herramienta que permita de acuerdo a la definición de una tablagenerar las APIs básicas de mantenimiento de los registros (CRUD).** 


 * Leer la base de datos y seleccionar tablas, procedimientos almacenados ovistas sobre los cuales se desea construir la API REST.
* Obtener la metadata o parámetros del objeto de la base de datos de formadinámica y construir los métodos que soporte de acuerdo a sus permisos para realizar un el CRUDcorrespondiente **(GET/POST/PUT/DELETE)**.
* Aplicar conceptos de seguridad en APIs usando Token o API-Key para la autorización de llamadas o procedimientos críticos e identificación del cliente que ejecuta la API.
* Un módulo que permita la gestión de API REST en función de los objetosencontrados en la base de datos.
 


## Tecnologías involucradas 👩‍💻

```

POSTAMN
Laravel
PHP7
SQLServer 2008R2

```

### Pre-requisitos 📋

_El Equipo computacional tiene con contar con las siguientes características:_

```
RAM: 4gb
Disco Duro:60gb
Procesador: Intel Pentium o amd ryzen 3 
```
### Instalación 🔧

_Primero tenemos que tener descargado las aplicaciones que vamos a utilizar que son xampp,posman,Laravel,PHP7,SQLServer 2008R2 _

### aplicacion xampp

A continuación, se inicia el asistente de instalación. Para continuar, haga clic en el botón "Next".

![image](https://user-images.githubusercontent.com/31218299/202347447-ac2cf13a-ef0b-47ab-91d6-9b4cdd09e7b4.png)

Los componentes mínimos que instala XAMPP son el servidor Apache y el lenguaje PHP, pero XAMPP también instala otros elementos. En la pantalla de selección de componentes puede elegir la instalación o no de estos componentes. Para seguir estos apuntes se necesita al menos instalar MySQL y phpMyAdmin.

![image](https://user-images.githubusercontent.com/31218299/202347943-00a8a1ad-74af-4f7e-ae09-b68a0217be2f.png)

En la siguiente pantalla puede elegir la carpeta de instalación de XAMPP. La carpeta de instalación predeterminada es C:\xampp. Si quiere cambiarla, haga clic en el icono de carpeta y seleccione la carpeta donde quiere instalar XAMPP. Para continuar la configuración de la instalación, haga clic en el botón "Next".

![image](https://user-images.githubusercontent.com/31218299/202348034-01929b85-5aa7-4d31-8eef-5607a96c046b.png)

La siguiente pantalla ofrece seleccionar el idioma del interfaz del panel de control (las opciones disponibles en esta versión son el inglés y el alemán).

![image](https://user-images.githubusercontent.com/31218299/202348111-040b66e1-2bb2-4fc1-aea7-8395b77804cb.png)

La siguiente pantalla ofrece información sobre los instaladores de aplicaciones para XAMPP creados por Bitnami. Haga clic en el botón "Next" para continuar. Si deja marcada la casilla, se abrirá una página web de Bitnami en el navegador.

![image](https://user-images.githubusercontent.com/31218299/202348185-c1868eb8-8936-42eb-884d-5e33b3c82843.png)

Una vez elegidas las opciones de instalación en las pantallas anteriores, esta pantalla es la pantalla de confirmación de la instalación. Haga clic en el botón "Next" para comenzar la instalación en el disco duro.

![image](https://user-images.githubusercontent.com/31218299/202348271-f4031429-29df-4852-9fb8-e2b1f4409d2d.png)

El proceso de copia de archivos puede durar unos minutos.

![image](https://user-images.githubusercontent.com/31218299/202348409-a8b008ae-19e7-403c-a910-6a45915c6513.png)

Durante la instalación, si en el ordenador no se había instalado Apache anteriormente, en algún momento se mostrará un aviso del cortafuegos de Windows para autorizar a Apache a comunicarse en las redes privadas o públicas. En principio, se recomienda no modificar las casillas marcadas, sean públicas o privadas, y hacer clic en el botón "Permitir acceso". Como ejemplo, en la captura de pantalla aparece marcada la casilla privada, porque ese es el perfil de red configurado en el equipo. En el apartado siguiente, El cortafuegos de Windows, se explica con algo más de detalle el significado de estos permisos y la manera de modificarlos posteriormente si fuera necesario.

![image](https://user-images.githubusercontent.com/31218299/202348509-c162336c-5ab0-4ea3-8654-ecdcfc265b82.png)

Así, la primera vez que se pone en marcha Apache después de la instalación mediante el botón Start correspondiente ...

![image](https://user-images.githubusercontent.com/31218299/202348735-e334d8bc-5900-43a7-9ef0-9da1c7d59fe6.png)

### aplicacion postman

Haga clic en el botón de Windows para descargar.

![image
](https://user-images.githubusercontent.com/31218299/202349801-64a53240-0ae8-4d36-a9e6-eb46abf870e8.png)

Ahora haga clic en Windows 64 - botón de bits.

![image](https://user-images.githubusercontent.com/31218299/202349878-b85ee8aa-3524-4e48-94f7-a890f5af172d.png)

Ahora verifique el archivo ejecutable en las descargas en su sistema y ejecútelo.

![image](https://user-images.githubusercontent.com/31218299/202349963-a31dbae3-7d55-4b0b-96c7-f8ddfd4cf141.png)

Ahora el proceso de instalación comenzará, tardará un minuto en instalarse en el sistema.

![image](https://user-images.githubusercontent.com/31218299/202350008-c28bc507-f974-4457-81ce-e8a42b58d337.png)


Después de instalar el programa, el software se abre automáticamente. Ahora puede ver la interfaz del software.

![image](https://user-images.githubusercontent.com/31218299/202350077-aa98e3d4-4e29-4652-b4d0-07f91ec30883.png)

### SQLServer 2008R2

Descargaremos el fichero de instalación de SQL Server 2008 Express abriendo cualquier navegador y accediendo a la URL:

http://www.microsoft.com/express/Database

Seleccionaremos el tipo de instalación (32 ó 64 bits), en nuestro caso, puesto que tenemos Microsoft Windows 10 de 64 bits sobre arquitectura de 64 bits, seleccionaremos 64 bits, se iniciará la descarga de SQLEXPRWT_x64_ENU.exe

![image](https://user-images.githubusercontent.com/31218299/202350882-0d909138-060e-4a7f-abf5-3065ef1aa10d.png)

Se iniciará la descarga del fichero de instalación seleccionado:

![image](https://user-images.githubusercontent.com/31218299/202350987-6c2b8e88-b7b6-408d-942b-fd815fd20e70.png)


Ejecutaremos el fichero descargado (si tenemos Microsoft Windows 10 es recomendable pulsar con el botón derecho del ratón sobre el ejecutable y seleccionar "Ejecutar como administrador")

![image](https://user-images.githubusercontent.com/31218299/202351052-c2540b6a-947b-405e-8a33-e2538681b3a6.png)


Seleccionaremos "New installation or add features to an existing installation":

![image](https://user-images.githubusercontent.com/31218299/202351155-99d9a839-f40b-4ec0-93a2-af526579c5c6.png)

Leeremos los términos de licencia de Microsoft SQL Server 2008 R2 Express, si estamos de acuerdo marcaremos "I accept the license terms" y pulsaremos "Next"

![image](https://user-images.githubusercontent.com/31218299/202351459-514b37da-4243-4f47-81d1-2782000cf252.png)


Seleccionaremos los elementos a instalar:

Database Engine services: servicios del motor de base de datos SQL Server, característica de obligatoria instalación para el funcionamiento del servidor de SQL Server.
SQL Server Replication: herramienta de replicación de bases de datos SQL Server.
Management Tools - Basic: consola de administración de SQL Server.
SQL Client Connectivity SDK: herramientas de conexión con SQL Server para desarrolladores.
Seleccionaremos la carpeta de instalación y pulsaremos "Next":

![image](https://user-images.githubusercontent.com/31218299/202351522-904e191c-af5d-44b2-abac-c731836c7415.png)

Introduciremos el nombre de la instancia de SQL Server (podemos tener varias instaladas en un mismo equipo), en nuestro caso "SQLExpress2008":

![image](https://user-images.githubusercontent.com/31218299/202351580-cd4f445f-7dec-42bf-86b7-165ee60cee4a.png)


Introduciremos el usuario y contraseña para cada servicio que se instalará, pulsando en "Use the same account for all SQL Server services" podremos establecer el mismo usuario para todos los servicios de Microsoft SQL Server 2008 R2 Express:

![image](https://user-images.githubusercontent.com/31218299/202351636-b1099e75-e759-4973-85a6-467b8184c29e.png)

Nota: SQL Server Browser es el servicio de resolución de nombres que proporciona información de conexión a SQL Server para equipos cliente. Este servicio es compartido a través de múltiples instancias de SQL Server y Integration Services.

Introduciremos usuario en "Account Name" y contraseña en "Password":

![image](https://user-images.githubusercontent.com/31218299/202351682-f24d216a-64f7-41d0-8f1a-946a299efb52.png)

En la ventana anterior, también podremos elegir el tipo de inicio para cada servicio, por defecto SQL Server Database Engine es automático (Automatic) y SQL Server Browser está desactivado (Disabled):

![image](https://user-images.githubusercontent.com/31218299/202351725-d267e9a0-ac79-4bc1-8197-de8a390aa002.png)


A continuación deberemos elegir el método de autenticación en la pestaña "Account Provisioning", las posibilidades:

Windows authentication mode: se utilizarán los usuarios del sistema operativo (Windows) para inicio de sesión en SQL Server.
Mixed Mode (SQL Server authentication and Windows authentication): modo mixto, acceso con usuarios de SQL Server y con usuarios del sistema operativo.
En nuestro caso seleccionaremos "Mixd Mode" y en "Specify the password for the SQL Server system administrator (sa) account" introduciermos la contraseña para el superusuario administrador de SQL Server "sa". Es recomendable que sea una contraseña segura (con números, letras en mayúsculas y minúsculas y algún carácter especial) pues este usuario tiene permisos para realizar cualquier acción en la base de datos.

En "Specify SQL Server administrators" podremos añadir los usuarios que queramos que sean administradores del servidor de SQL Server:

![image](https://user-images.githubusercontent.com/31218299/202351787-c7578aef-a1ee-42b8-a326-360905fc5e36.png)


En la pestaña "Data Directories" podremso elegir los directorios de instalación de cada elemento (directorio de usuario, log, temporal, backup, etc.):

![image](https://user-images.githubusercontent.com/31218299/202351848-b6fa4923-fd6c-4c3c-b779-adaac49ce722.png)


Marcaremos el check "Send Windows and SQL Server Error Reports to Microsoft or your corporate report server. This settings only applies to services that run without user interations" si queremos enviar reportes automáticos de errores a Microsoft. Pulsaremos "Next" para continuar:

![image](https://user-images.githubusercontent.com/31218299/202351907-1cec35a7-d780-46fc-8e8c-c98475959873.png)


Se iniciará el proceso de instalación de Microsoft SQL Server 2008 R2 Express:

![image](https://user-images.githubusercontent.com/31218299/202351977-ef742d26-3344-4a6e-92d3-3788fd0f03bf.png)


Una vez finalizado el proceso, puede que nos indique que tenemos que reiniciar el equipo, con el mensaje "One or more affected files have operations pendins. You must restart your computer to complete this process". Pulsaremos "OK":

![image](https://user-images.githubusercontent.com/31218299/202352020-97e6a5b3-32ef-4814-a7d2-3bc72e5f78e8.png)


### app Composer

descarga el archivo Composer .exe

![image](https://user-images.githubusercontent.com/31218299/202352874-b77ffa54-ed8f-4ecd-af73-bc3e86adf803.png)

haga clic en descargar el archivo composer.exe. Luego abra un cuadro de aviso:

![image](https://user-images.githubusercontent.com/31218299/202352939-3c9cdb70-1fbc-4d5f-bd0c-01659a649915.png)


Ahora establezca la ruta PHP y haga clic en siguiente:

![image](https://user-images.githubusercontent.com/31218299/202352976-c8338b0a-3bff-410d-874a-d11a8c529932.png)

Si tiene alguna URL proxy ingrese aquí, no sé dejarla para hacer clic en siguiente:

![image](https://user-images.githubusercontent.com/31218299/202353034-1ee3e7a3-89d9-4863-806e-a858cdb58212.png)


Ahora, revise el asistente de configuración del compositor. Y haga clic en instalar.

![image](https://user-images.githubusercontent.com/31218299/202353114-735a3ce8-6ab1-4c13-af89-130ac0b8af8e.png)

Composer se ha instalado correctamente. Haga clic para finalizar el botón.

![image](https://user-images.githubusercontent.com/31218299/202353167-9853fbd9-5768-4d71-8ab4-dc839d9e9de9.png)


### app Laravel


Escriba el siguiente comando en la ventana del símbolo del sistema:  

composer global requiere "laravel / installer". 
composer create-project –prefer-dist laravel / laravel Project_name: este comando instalará Laravel y otras dependencias y también generará la clave ANSI. 

![image](https://user-images.githubusercontent.com/31218299/202352351-9c9883f6-1778-4655-b6b5-129276b27941.png)

Servicio artesanal de PHP: este comando inicia su servidor de desarrollo. 

![image](https://user-images.githubusercontent.com/31218299/202353488-fa95d257-731d-4e24-a25e-9e75755cc14f.png)

Vaya a la URL de IP que ve en la pantalla de su CMD.

![image](https://user-images.githubusercontent.com/31218299/202353539-6193601d-467a-4044-a1ee-bcfeebe703db.png)





## Para iniciar el proyecto.
```py
    composer install
    php artisan serve
    php artisan migrate # En caso que no se posea una tabla de usuario en la estructura de su base de datos 
                        # usarpara generarla en su modelo.
```


## Autores ✒️

_Developer_

* **Cesar Cares** - *developer* 
* **Edison Sepulveda** - *developer* 

## Contribuciones.
¡Gracias por considerar contribuir al marco de Laravel! La guía de contribución se puede encontrar en la [documentación de Laravel] (https://laravel.com/docs/contributions).

## Codigo de conducta.
Para garantizar que la comunidad de Laravel les dé la bienvenida a todos, revise y respete el [Código de conducta] (https://laravel.com/docs/contributions#code-of-conduct).

## Vulnerabilidades de seguridad.

Si descubre una vulnerabilidad de seguridad dentro de Laravel, envíe un correo electrónico a Taylor Otwell a través de [taylor@laravel.com](mailto:taylor@laravel.com). Todas las vulnerabilidades de seguridad se abordarán de inmediato.

## Licencia 📓

El marco de Laravel es un software de código abierto con licencia de [licencia MIT] (https://opensource.org/licenses/MIT).
