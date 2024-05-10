@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PERFILES</h1>

    @vite(['resources/css/style.css','resources/css/style-preset.css'])
@stop
@section('content')

<div class="col-md-12 col-xl-12">
    <div class="card user-card">
      <div class="card-body">
        <div class="user-cover-bg">
          <img src="{{asset('assets/images/shapes/baner2.jpg')}}" alt="image" class="img-fluid" >
          <div class="cover-data">
            <!--<div class="d-inline-flex align-items-center">
              <i class="ph-duotone ph-star text-warning me-1"></i>
              4.5 <small class="text-white text-opacity-50">/ 5</small>
            </div>-->
          </div>
        </div>

        <div class="chat-avtar card-user-image">
          <img src="{{asset('assets/images/portfolio/p4.jpg')}}" alt="user-image" class="img-thumbnail rounded-circle">
          <span class="edit-icon"><i class="fas fa-edit"></i></span>
          <i class="chat-badge bg-success"></i>
        </div>
        <div class="d-flex flex-wrap gap-1">
          <div class="flex-grow-1">
            <h6 class="mb-1">{{Auth::user()->name}}</h6>
            <p class="text-muted text-sm mb-0">DM on <a href="#" class="text-primary">@williambond</a></p>
          </div>
          <div class="flex-shrink-0" >
            <button class="btn btn-primary btn-sm">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M360-460h40v-80h40q17 0 28.5-11.5T480-580v-40q0-17-11.5-28.5T440-660h-80v200Zm40-120v-40h40v40h-40Zm120 120h80q17 0 28.5-11.5T640-500v-120q0-17-11.5-28.5T600-660h-80v200Zm40-40v-120h40v120h-40Zm120 40h40v-80h40v-40h-40v-40h40v-40h-80v200ZM320-240q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z"/></svg>
              Descargar Pdf
            </button>
            <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
          </div>
        </div>
        <div class="row g-3 my-3 text-center">
          <div class="col-4">
            <h5 class="mb-0">86</h5>
            <small class="text-muted">Post</small>
          </div>
          <div class="col-4 border border-top-0 border-bottom-0">
            <h5 class="mb-0">40</h5>
            <small class="text-muted">Project</small>
          </div>
          <div class="col-4">
            <h5 class="mb-0">4.5K</h5>
            <small class="text-muted">Members</small>
          </div>
        </div>
        <div class="saprator my-3">
          <span>Skills</span>
        </div>
        <div>
    
        <section id="contenido">
              <fieldset>
                <legend><strong>Nivel Academicos</strong></legend>
                <table>
                  <thead>
                    <tr>
                      <th>Título</th>
                      <th>Institución</th>
                      <th>Fechas</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nombre de la carrera</td>
                      <td>Universidad</td>
                      <td>Fechas de inicio y finalización</td>
                      <td>
                        <div class="container">
                          <button class="edit-btn">Editar</button>
                          <button class="elim-btn">Eliminar</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Título de Secundaria</td>
                      <td>Institución Educativa</td>
                      <td>Año de graduación</td>
                      <td>
                        <div class="container">
                          <button class="edit-btn">Editar</button>
                          <button class="elim-btn">Eliminar</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Bachiller</td>
                      <td>Nombre del Colegio</td>
                      <td>Año de graduación</td>
                      <td>
                        <div class="container">
                          <button class="edit-btn">Editar</button>
                          <button class="elim-btn">Eliminar</button>
                        </div>
                      </td>
                    </tr>
                    <!-- Puedes agregar más filas para otros estudios -->
                  </tbody>
                </table>
            </fieldset>
    
          
    
            <fieldset>
              <legend><strong>Habilidades</strong></legend>
              <table>
                <thead>
                  <tr>
                    <th>Habilidad</th>
                    <th>Nivel</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Programación en JavaScript</td>
                    <td>Avanzado</td>
                    <td>Experiencia en el desarrollo de aplicaciones web interactivas utilizando JavaScript, jQuery y frameworks populares como React y Angular.</td>
                    <td>
                      <div class="container">
                        <button class="edit-btn">Editar</button>
                        <button class="elim-btn">Eliminar</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Diseño gráfico</td>
                    <td>Intermedio</td>
                    <td>Habilidades en el uso de software de edición de imágenes como Adobe Photoshop y Illustrator. Capacidad para crear diseños atractivos y visualmente impactantes.</td>
                    <td>
                      <div class="container">
                        <button class="edit-btn">Editar</button>
                        <button class="elim-btn">Eliminar</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Gestión de proyectos</td>
                    <td>Avanzado</td>
                    <td>Experiencia en la planificación, ejecución y seguimiento de proyectos complejos. Dominio de herramientas de gestión de proyectos y metodologías ágiles.</td>
                    <td>
                      <div class="container">
                        <button class="edit-btn">Editar</button>
                        <button class="elim-btn">Eliminar</button>
                      </div>
                    </td>
                  </tr>
                  <!-- Puedes agregar más filas para otras habilidades -->
                </tbody>
              </table>
            </fieldset>

            <fieldset>
              <legend><strong>Estudios de Postgrado</strong></legend>
              <table>
                <thead>
                  <tr>
                    <th>Título</th>
                    <th>Institución</th>
                    <th>Fechas</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Maestría en [Área de Estudio]</td>
                    <td>Universidad</td>
                    <td>Fechas de inicio y finalización</td>
                    <td>
                      <div class="container">
                        <button class="edit-btn">Editar</button>
                        <button class="elim-btn">Eliminar</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Diplomado en [Área de Estudio]</td>
                    <td>Instituto o Universidad</td>
                    <td>Año de obtención</td>
                    <td>
                      <div class="container">
                        <button class="edit-btn">Editar</button>
                        <button class="elim-btn">Eliminar</button>
                      </div>
                    </td>
                  </tr>
                  <!-- Puedes agregar más filas para otros estudios de posgrado -->
                </tbody>
              </table>
            </fieldset>
            
            <fieldset>
              <legend><strong>Experiencia Laboral</strong></legend>
              <table>
                <thead>
                  <tr>
                    <th>Puesto o Cargo</th>
                    <th>Empresa</th>
                    <th>Fechas</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Puesto de Trabajo 1</td>
                    <td>Nombre de la Empresa</td>
                    <td>Fechas de inicio y finalización</td>
                    <td>
                      <ul>
                        <li>Descripción de las responsabilidades y logros en este puesto de trabajo.</li>
                      </ul>
                    </td>
                    <td>
                      <div class="container">
                        <button class="edit-btn">Editar</button>
                        <button class="elim-btn">Eliminar</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Puesto de Trabajo 2</td>
                    <td>Nombre de la Empresa</td>
                    <td>Fechas de inicio y finalización</td>
                    <td>
                      <ul>
                        <li>Descripción de las responsabilidades y logros en este puesto de trabajo.</li>
                      </ul>
                    </td>
                    <td>
                      <div class="container">
                        <button class="edit-btn">Editar</button>
                        <button class="elim-btn">Eliminar</button>
                      </div>
                    </td>
                  </tr>
                  <!-- Puedes agregar más filas para otros puestos de trabajo -->
                </tbody>
              </table>
        </section>    
    
        </div>
        <div class="text-center">
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">UX</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Figma</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Backend</span>
        </div>
        <div class="saprator my-3">
          <span>Task completed</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <div class="progress" style="height: 12px;">
              <div class="progress-bar bg-primary" style="width: 15%"></div>
            </div>
          </div>
          <div class="flex-shrink-0">
            <h6 class="mb-0">30%</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('resources/css/style-preset.css')}}">
@stop
@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
