@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<br>
<section>
    <fieldset>
      <legend><strong>Datos Académicos</strong></legend>
      <div>
        <table class="tabla-registro">
          <tr>
            <th>Registro Universitario</th>
            <th>Nombre</th>
            <th>Contenido</th>
            <th>Actividad</th>
          </tr>
          <tr>
            <td>200048974</td>
            <td>Carlos Mamani</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing.</td>
            <td>
                <button id="botonActividad" class="btn-actividad">Activo</button>
            </td>
          </tr>
        </table>
      </div>
    </fieldset>
  
    <fieldset>
      <legend><strong>Publicaciones</strong></legend>
      <div>
        <table class="tabla-registro">
          <thead>
            <tr>
              <th>Número</th>
              <th>Nro. Entidad</th>
              <th>Descripción</th>
              <th>Fecha de Publicación</th>
              <th>Actividad</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>001</td>
              <td>Descripción de la entidad 1</td>
              <td>01/01/2023</td>
              <td>
                <button class="btn-publicar" id="botonPublicar">Publico</button>
              </td>
              <td>
                <button class="btn-eliminar">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>002</td>
              <td>Descripción de la entidad 2</td>
              <td>15/03/2023</td>
              <td>
                <button class="btn-publicar" id="botonPublicar">Publico</button>
              </td>
              <td>
                <button class="btn-eliminar">Eliminar</button>
              </td>
            </tr>
            <!-- Agrega más filas según sea necesario -->
          </tbody>
        </table>
      </div>
    </fieldset>
  </section>
<style>
/* Estilos para la sección de contenido */
:root {
  --primary-color: #2c3e50;
  --secondary-color: #34495e;
  --accent-color: #3222e6;
  --text-color: #333333;
  --background-color: #f5f5f5;
}

/* Estilos generales */
body {
  font-family: 'Roboto', sans-serif;
  background-color: var(--background-color);
  color: var(--text-color);
  margin: 0;
  padding: 0;
}

h1, h2, h3, h4, h5, h6 {
  color: var(--primary-color);
}

/* Estilos para la sección de contenido */
section {
  max-width: 100%;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}

fieldset {
  border: none;
  padding: 20px;
  margin-bottom: 20px;
  background-color: var(--background-color);
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease-in-out;
}

fieldset:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

legend {
  font-size: 24px;
  font-weight: bold;
  color: var(--primary-color);
  margin-bottom: 10px;
}

/* Estilos para tablas */
.tabla-registro {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

.tabla-registro th,
.tabla-registro td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid var(--secondary-color);
}

.tabla-registro th {
  background-color: var(--primary-color);
  color: #fff;
}

.tabla-registro tr:nth-child(even) {
  background-color: var(--background-color);
}

.tabla-registro tr:hover {
  background-color: rgba(var(--accent-color), 0.1);
}

/* Estilos para botones */
.btn-actividad {
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  background-color: var(--accent-color);
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.btn-actividad:hover {
  background-color: var(--primary-color);
}
.btn-inactivo {
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  background-color: #eb052b; /* Puedes cambiar el color de fondo según tus preferencias */
  color: #efeeee; /* Puedes cambiar el color del texto según tus preferencias */
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}
/* Estilos para botones */
.btn-publicar {
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  background-color: greenyellow;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.btn-publicar:hover {
  background-color: green;
}

.btn-eliminar {
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  background-color: #dc3545;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.btn-eliminar:hover {
  background-color: #c82333;
}
.btn-inactivop {
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  background-color: #ff0a1e; /* Puedes cambiar el color de fondo según tus preferencias */
  color: #efeeee; /* Puedes cambiar el color del texto según tus preferencias */
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}
</style>
<script>
    const botonActividad = document.getElementById('botonActividad');

    botonActividad.addEventListener('click', function() {
      if (botonActividad.textContent === 'Activo') {
        botonActividad.textContent = 'Inactivo';
        botonActividad.classList.remove('btn-actividad');
        botonActividad.classList.add('btn-inactivop');
      } else {
        botonActividad.textContent = 'Activo';
        botonActividad.classList.remove('btn-inactivop');
        botonActividad.classList.add('btn-actividad');
      }
    });


    const botonActividad1 = document.getElementById('botonPublicar');
    botonActividad1.addEventListener('click', function() {
      if (botonActividad1.textContent === 'Publico') {
        botonActividad1.textContent = 'noPublico';
        botonActividad1.classList.remove('btn-publicar');
        botonActividad1.classList.add('btn-inactivo');
      } else {
        botonActividad1.textContent = 'Publico';
        botonActividad1.classList.remove('btn-inactivo');
        botonActividad1.classList.add('btn-publicar');
      }
    });
</script>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
