@extends('layouts.admin-sidebar')
@section('content')

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/dayjs@1.10.4/dayjs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dayjs@1.10.4/locale/es.min.js"></script>

@php
    $user = auth()->user();
    $hora = now()->hour;
    $saludo = '';

    if ($hora >= 5 && $hora < 12) {
        $saludo = 'Buenos días';
    } elseif ($hora >= 12 && $hora < 24) {
        $saludo = 'Buenas tardes';
    } else {
        $saludo = 'Buenas madrugadas';
    }
@endphp

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">{{ $saludo }}, {{ Auth::user()->name }}!</h4>
                                        <p class="text-muted mb-0">Esto es lo que tienes en tu cuenta el día de hoy.</p>
                                    </div>

                                    <div class="mt-3 mt-lg-0">
                                        <form action="javascript:void(0);">
                                            <div class="row g-3 mb-0 align-items-center">
                                                <div class="col-sm-auto">
                                                    <div class="input-group">
                                                        <input id="hora-actual" type="text" class="form-control border-0 dash-filter-picker shadow">
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <form action="{{ route('migrate.data') }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-soft-primary"><i class="ri-database-2-line align-middle me-1"></i> Archivar datos de forma segura</button>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xxl-5">
                                <div class="d-flex flex-column h-100">
                                    <div class="row h-100">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <div class="alert alert-warning border-0 rounded-0 m-0 d-flex align-items-center" role="alert">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle text-warning me-2 icon-sm"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                                        <div class="flex-grow-1 text-truncate">
                                                            Your free trial expired in <b>17</b> days.
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <a href="pages-pricing.html" class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-end">
                                                        <div class="col-sm-8">
                                                            <div class="p-3">
                                                                <p class="fs-20 lh-base">Crear mis eventos <span class="fw-semibold">y personalizar</span></p>
                                                                <div class="mt-3">
                                                                    <a href="#" class="btn btn-secondary" data-bs-target="#crearEvento" data-bs-toggle="modal">Crear aquí!</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="px-3">
                                                                <img src="assets/images/user-illustarator-2.png" class="img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end card-body-->
                                            </div>
                                        </div> <!-- end col-->
                                    </div> <!-- end row-->

                                    <div class="row" style="margin-bottom: 200px">
                                        <div class="col-md-12">
                                            <a href="{{ route('ingresos.index') }}">
                                                <div class="card card-animate">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <p class="fw-medium text-muted mb-0">Ingresos totales del año <script>document.write(new Date().getFullYear())</script></p>
                                                                <h2 class="mt-4 ff-secondary fw-semibold"><span>S/. {{ $totalIngresos }}</span></h2>
                                                            </div>
                                                            <div>
                                                                <div class="avatar-sm flex-shrink-0">
                                                                    <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users text-info"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-6">
                                            <a href="{{ route('read.pagos') }}">
                                                <div class="card card-animate">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <p class="fw-medium text-muted mb-0">Cantidad de pagos cancelados</p>
                                                                <h2 class="mt-4 ff-secondary fw-semibold"><span>{{ $totalPagadas }} </span></h2>
                                                            </div>
                                                            <div>
                                                                <div class="avatar-sm flex-shrink-0">
                                                                    <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users text-info"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-6">
                                            <a href="{{ route('deudas.index') }}">
                                                <div class="card card-animate">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <p class="fw-medium text-muted mb-0">Pendientes comprados</p>
                                                                <h2 class="mt-4 ff-secondary fw-semibold"><span>{{ $pendientesCount  }}</span></h2>
                                                            </div>
                                                            <div>
                                                                <div class="avatar-sm flex-shrink-0">
                                                                    <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity text-info"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-6">
                                            <a href="{{ route('deudas.index') }}">
                                                <div class="card card-animate">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <p class="fw-medium text-muted mb-0">Deudas</p>
                                                                <h2 class="mt-4 ff-secondary fw-semibold"><span>S/. {{ $totalDeudas }}</span></h2>
                                                            </div>
                                                            <div>
                                                                <div class="avatar-sm flex-shrink-0">
                                                                    <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity text-info"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-6">
                                            <a href="{{ route('pendientes.index') }}">
                                                <div class="card card-animate">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <p class="fw-medium text-muted mb-0">Pendientes</p>
                                                                <h2 class="mt-4 ff-secondary fw-semibold"><span>S/. {{ $pendientesTotales }}</span></h2>
                                                            </div>
                                                            <div>
                                                                <div class="avatar-sm flex-shrink-0">
                                                                    <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity text-info"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-7">
                                <div class="row h-100">
                                    <div class="col-xl-12">
                                        <div class="card card-height-100">
                                            <div class="card-body">
                                                <div id='calendar'></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @foreach ($eventos as $evento)
    <div class="modal fade zoomIn" id="modalEvento{{ $evento->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-3 bg-soft-primary">
                    <h5 class="modal-title" id="modalEventoTitulo{{ $evento->id }}">Detalles del Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div>
                                <label for="modalEventoNombre{{ $evento->id }}" class="form-label">Evento</label>
                                <p id="modalEventoNombre{{ $evento->id }}" class="form-control-static">{{ $evento->evento }}</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div>
                                <label for="modalEventoMotivo{{ $evento->id }}" class="form-label">Motivo</label>
                                <p id="modalEventoMotivo{{ $evento->id }}" class="form-control-static">{{ $evento->objeto_evento }}</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div>
                                <label for="modalEventoFecha{{ $evento->id }}" class="form-label">Fecha</label>
                                <p id="modalEventoFecha{{ $evento->id }}" class="form-control-static">{{ \Carbon\Carbon::parse($evento->fecha_evento)->format('d/m/Y') }}</p>
                            </div>

                        </div>
                    </div>

                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-ghost-primary" data-bs-dismiss="modal">Cerrar</button>
                        <!-- Puedes agregar botones adicionales aquí según sea necesario -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'es', // Configura el idioma (opcional)
            events: [
                @foreach($eventos as $evento)
                {
                    title: '{{ $evento->evento }}',
                    start: '{{ $evento->fecha_evento }}',
                    end: '{{ $evento->created_at }}',
                    description: '{{ $evento->objeto_evento }}',
                    // Agrega más propiedades de evento según necesites
                },
                @endforeach
            ],
            eventClick: function(info) {
                // Mostrar detalles del evento en el modal correspondiente
                var modalEventoTitulo = document.getElementById('modalEventoTitulo{{ $evento->id }}');
                var modalEventoNombre = document.getElementById('modalEventoNombre{{ $evento->id }}');
                var modalEventoMotivo = document.getElementById('modalEventoMotivo{{ $evento->id }}');
                var modalEventoFecha = document.getElementById('modalEventoFecha{{ $evento->id }}');

                modalEventoTitulo.textContent = 'Detalles del Evento';
                modalEventoNombre.textContent = info.event.title;
                modalEventoMotivo.textContent = info.event.extendedProps.description;
                modalEventoFecha.textContent = dayjs(info.event.start).locale('es').format('DD [de] MMMM [del] YYYY');
                var modal = new bootstrap.Modal(document.getElementById('modalEvento{{ $evento->id }}'));
                modal.show();
            }
        });
        calendar.render();
    });
</script>


    <div class="modal fade zoomIn" id="crearEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered   ">
          <div class="modal-content">
            <div class="modal-header p-3 bg-soft-primary">
              <h5 class="modal-title" id="exampleModalLabel">Registrar pendientes</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('eventos.store') }}" method="post" class="tablelist-form needs-validation" enctype="multipart/form-data" autocomplete="off" novalidate>
                    @csrf

                    <div class="row g-3 mb-3">

                        <div class="col-lg-4">
                            <div class="col-lg-12">
                                <div>
                                    <label for="monto_pendiente" class="form-label">Evento</label>
                                    <input type="text" id="car_nombre" name="evento" class="form-control" placeholder="Ingresar monto de la deuda" required />
                                    <div class="valid-feedback">
                                        ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback text-end">
                                        El nombre es necesario
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="col-lg-12">
                                <div>
                                    <label for="monto_pendiente" class="form-label">Motivo</label>
                                    <input type="text" id="car_nombre" name="objeto_evento" class="form-control" placeholder="Ingresar monto de la deuda" required />
                                    <div class="valid-feedback">
                                        ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback text-end">
                                        El nombre es necesario
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="col-lg-12">
                                <div>
                                    <label for="monto_pendiente" class="form-label">Fecha</label>
                                    <input type="date" id="car_nombre" name="fecha_evento" class="form-control" placeholder="Ingresar monto de la deuda" required />
                                    <div class="valid-feedback">
                                        ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback text-end">
                                        El nombre es necesario
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-ghost-primary" data-bs-dismiss="modal"><i class="ri-close-line align-bottom"></i> Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="addNewProject">Registrar evento</button>
                    </div>
                </form>

            </div>
          </div>
        </div>
      </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Función para actualizar totalPagadas después de guardar un ingreso
        function actualizarTotalPagadas() {
            // Realizar una solicitud GET para obtener el último registro de ing_monto
            $.get('{{ route('api.ultimo_ingreso') }}', function(data) {
                // Sumar el último ingreso al valor actual de totalPagadas
                var nuevoTotal = parseFloat(data) + parseFloat('{{ $totalPagadas }}');
                // Actualizar el HTML con el nuevo valor
                $('#totalPagadas').html('S/. ' + nuevoTotal.toFixed(2));
            });
        }

        // Llamar a la función al cargar la página
        actualizarTotalPagadas();

        // Llamar a la función después de cada registro de ingreso (puedes modificar según tu implementación)
        $('#form_registro_ingreso').on('submit', function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: formData,
                success: function(response) {
                    // Después de guardar, actualizar totalPagadas
                    actualizarTotalPagadas();
                    // Aquí puedes agregar lógica adicional si es necesario
                }
            });
        });
    });
</script>

<script>
    const horaActualInput = document.getElementById('hora-actual');

    function obtenerHoraActual() {
        const ahora = new Date();
        let horas = ahora.getHours();
        let minutos = ahora.getMinutes();
        let segundos = ahora.getSeconds();
        const ampm = horas >= 12 ? 'PM' : 'AM';
        horas = horas % 12;
        horas = horas ? horas : 12;
        minutos = minutos < 10 ? '0' + minutos : minutos;
        segundos = segundos < 10 ? '0' + segundos : segundos;
        const horaFormateada = horas + ':' + minutos + ':' + segundos + ' ' + ampm;
        return horaFormateada;
    }

    function actualizarHora() {
        const horaActual = obtenerHoraActual();
        horaActualInput.value = horaActual;
    }

    actualizarHora();

    setInterval(actualizarHora, 1000);
</script>

@endsection
