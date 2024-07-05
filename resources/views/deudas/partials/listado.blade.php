<div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
    <div class="file-manager-sidebar">
        <div class="p-4 d-flex flex-column h-100">
            <div class="mb-3">
                <button class="btn btn-success w-100" data-bs-target="#modalRegistrar" data-bs-toggle="modal"><i class="ri-add-line align-bottom"></i> Agregar deuda</button>
            </div>

            <div class="px-4 mx-n4" data-simplebar style="height: calc(100vh - 468px);">
                <ul class="to-do-menu list-unstyled" id="projectlist-data">
                    <li>
                        <a data-bs-toggle="collapse" href="#velzonAdmin" class="nav-link fs-13 active">Velzon Admin & Dashboard</a>
                        <div class="collapse show" id="velzonAdmin">
                            <ul class="mb-0 sub-menu list-unstyled ps-3 vstack gap-2 mb-2">
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-danger"></i> v1.4.0</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-secondary"></i> v1.5.0</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-info"></i> v1.6.0</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-primary"></i> v1.7.0</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-warning"></i> v1.8.0</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-bs-toggle="collapse" href="#projectManagement" class="nav-link fs-13">Project Management</a>
                        <div class="collapse" id="projectManagement">
                            <ul class="mb-0 sub-menu list-unstyled ps-3 vstack gap-2 mb-2">
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-danger"></i> v2.1.0</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-secondary"></i> v2.2.0</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-info"></i> v2.3.0</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-primary"></i> v2.4.0</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-bs-toggle="collapse" href="#skoteAdmin" class="nav-link fs-13">Skote Admin & Dashboard</a>
                        <div class="collapse" id="skoteAdmin">
                            <ul class="mb-0 sub-menu list-unstyled ps-3 vstack gap-2 mb-2">
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-danger"></i> v4.1.0</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-secondary"></i> v4.2.0</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-bs-toggle="collapse" href="#ecommerceProject" class="nav-link fs-13">Doot - Chat App Template</a>
                        <div class="collapse" id="ecommerceProject">
                            <ul class="mb-0 sub-menu list-unstyled ps-3 vstack gap-2 mb-2">
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-danger"></i> v1.0.0</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-secondary"></i> v1.1.0</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-info"></i> v1.2.0</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="mt-auto text-center">
                <img src="assets/images/task.png" alt="Task" class="img-fluid" />
            </div>
        </div>
    </div>
    <div class="file-manager-content w-100 p-4 pb-0">
        <div class="row mb-4">
            <div class="col-auto order-1 d-block d-lg-none">
                <button type="button" class="btn btn-soft-success btn-icon btn-sm fs-16 file-menu-btn">
                    <i class="ri-menu-2-fill align-bottom"></i>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('pagos.index') }}">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="fw-medium text-muted mb-0">Pagos registrados</p>
                                    <h2 class="mt-4 ff-secondary fw-semibold"><span>{{ $totalPagados }}</span></h2>
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
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="fw-medium text-muted mb-0">Total pendientes</p>
                                <h2 class="mt-4 ff-secondary fw-semibold"><span>0</span></h2>
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
            </div>
        </div>

        <div class="p-3 bg-light rounded mb-4">
            <div class="row g-2">
                <div class="col-lg-auto">
                    <select class="form-control" data-choices data-choices-search-false name="choices-select-sortlist" id="choices-select-sortlist">
                        <option value="">Sort</option>
                        <option value="By ID">By ID</option>
                        <option value="By Name">By Name</option>
                    </select>
                </div>
                <div class="col-lg-auto">
                    <select class="form-control" data-choices data-choices-search-false name="choices-select-status" id="choices-select-status">
                        <option value="">All Tasks</option>
                        <option value="Completed">Completed</option>
                        <option value="Inprogress">Inprogress</option>
                        <option value="Pending">Pending</option>
                        <option value="New">New</option>
                    </select>
                </div>
                <div class="col-lg">
                    <div class="search-box">
                        <input type="text" id="searchTaskList" class="form-control search" placeholder="Search task name">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <button class="btn btn-primary createTask" type="button" data-bs-toggle="modal" data-bs-target="#createTask">
                        <i class="ri-add-fill align-bottom"></i> Add Tasks
                    </button>
                </div>
            </div>
        </div>

        <div class="todo-content position-relative px-4 mx-n4" id="todo-content">
            <div class="todo-task" id="todo-task">
                <div class="table-responsive">
                    <table class="table align-middle position-relative table-nowrap">
                        <thead class="table-active">
                            <tr>
                                @if (!$hideColumns['deu_monto_fijo'])
                                    <th scope="col">Monto de la deuda</th>
                                @endif
                                @if (!$hideColumns['deu_monto_deuda'])
                                    <th scope="col">Monto actual</th>
                                @endif
                                @if (!$hideColumns['deu_fecha_pagar'])
                                    <th scope="col">Fecha registrado</th>
                                @endif
                                @if (!$hideColumns['deu_tipo_deuda'])
                                    <th scope="col">T. deuda</th>
                                @endif
                                @if (!$hideColumns['deu_tipo_deudor'])
                                    <th scope="col">Obj. deuda</th>
                                @endif
                                @if (!$hideColumns['deu_nombres'])
                                    <th scope="col">Nombres D.</th>
                                @endif
                                {{-- @if (!$hideColumns['deu_apellidos'])
                                    <th scope="col">Apellidos D.</th>
                                @endif --}}
                                {{-- @if (!$hideColumns['deu_correo'])
                                    <th scope="col">Correo D.</th>
                                @endif --}}
                                @if (!$hideColumns['deu_numero'])
                                    <th scope="col">Numero D.</th>
                                @endif
                                @if (!$hideColumns['deu_descripcion'])
                                    <th scope="col">Descripciones</th>
                                @endif
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>

                        <tbody id="task-list">
                            @php
                                use Carbon\Carbon;
                                Carbon::setLocale('es');
                            @endphp

                            @if ($deudas->isEmpty())
                                <tr>
                                    <td colspan="12" class="text-center">No hay deudas registradas</td>
                                </tr>
                            @else
                                @foreach ($deudas as $deuda)
                                    <tr>
                                        @if (!$hideColumns['deu_monto_fijo'])
                                            <td>S/. {{ $deuda->deu_monto_fijo ?? '' }}</td>
                                        @endif
                                        @if (!$hideColumns['deu_monto_deuda'])
                                            <td>S/. {{ $deuda->deu_monto_deuda ?? '' }}</td>
                                        @endif
                                        @if (!$hideColumns['deu_fecha_pagar'])
                                            <td>
                                                @if($deuda->deu_fecha_pagar)
                                                    {{ Carbon::parse($deuda->deu_fecha_pagar)->translatedFormat('d \d\e F \d\e\l Y') }}
                                                @else
                                                    ''
                                                @endif
                                            </td>
                                        @endif
                                        @if (!$hideColumns['deu_tipo_deuda'])
                                            <td>{{ $deuda->deu_tipo_deuda ?? '' }}</td>
                                        @endif
                                        @if (!$hideColumns['deu_tipo_deudor'])
                                            <td>{{ $deuda->deu_tipo_deudor ?? '' }}</td>
                                        @endif
                                        @if (!$hideColumns['deu_nombres'])
                                            <td>{{ $deuda->deu_nombres ?? '' }}</td>
                                        @endif
                                        {{-- @if (!$hideColumns['deu_apellidos'])
                                            <td>{{ $deuda->deu_apellidos ?? '' }}</td>
                                        @endif --}}
                                        {{-- @if (!$hideColumns['deu_correo'])
                                            <td>{{ $deuda->deu_correo ?? '' }}</td>
                                        @endif --}}
                                        @if (!$hideColumns['deu_numero'])
                                            <td>
                                                @if($deuda->deu_numero)
                                                    <b>+51 {{ $deuda->deu_numero }}</b>
                                                @else
                                                    <span class="badge bg-warning text-uppercase">Numero sin registrar</span>
                                                @endif
                                            </td>
                                        @endif

                                        @if (!$hideColumns['deu_descripcion'])
                                            <td>{{ $deuda->deu_descripcion ?? '' }}</td>
                                        @endif

                                        <td>
                                            @if ($deuda->deu_monto_deuda == 0)
                                                <span class="badge bg-success text-uppercase">Pagado</span>
                                            @elseif ($deuda->deu_estado)
                                                <span class="badge bg-danger text-uppercase">Pendiente</span>
                                            @else
                                                <span class="badge bg-warning text-uppercase">Parcialmente Pagado</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($deuda->deu_monto_deuda != 0)
                                                <div class="hstack gap-2">
                                                    <button class="btn btn-sm btn-soft-primary" data-bs-target="#modal{{ $deuda->id_deuda }}" data-bs-toggle="modal"><i class="ri-check-fill align-bottom"></i> Pagar deuda</button>
                                            @endif
                                                    <button class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#removeTaskItemModal" data-remove-id="{{ $deuda->id_deuda }}"><i class="ri-delete-bin-5-fill align-bottom"></i></button>
                                                    <button class="btn btn-sm btn-soft-info edit-list" data-bs-toggle="modal" data-bs-target="#createTask" data-edit-id="{{ $deuda->id_deuda }}"><i class="ri-pencil-fill align-bottom"></i></button>
                                                </div>
                                        </td>
                                    </tr>

                                    <div class="modal fade zoomIn" id="modal{{ $deuda->id_deuda }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header p-3 bg-soft-primary">
                                                    <h5 class="modal-title" id="exampleModalLabel">Pagar deuda</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('pagos.store') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id_deuda" value="{{ $deuda->id_deuda }}">
                                                        <div class="row g-3 mb-3">
                                                            <div class="col-lg-12">
                                                                <div>
                                                                    <label for="monto_pago" class="form-label">Monto a pagar <span class="text-danger">*</span></label>
                                                                    <input type="number" id="monto_pago" name="monto_pago" class="form-control" step="0.01" min="0" placeholder="Ingresar monto a pagar" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-ghost-primary" data-bs-dismiss="modal"><i class="ri-close-line align-bottom"></i> Cerrar</button>
                                                            <button type="submit" class="btn btn-primary" id="addNewProject">Guardar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="py-4 mt-4 text-center" id="noresult" style="display: none;">
                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
                <h5 class="mt-4">Sorry! No Result Found</h5>
            </div>
        </div>

    </div>
</div>

<div class="modal fade zoomIn" id="modalRegistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered   ">
      <div class="modal-content">
        <div class="modal-header p-3 bg-soft-primary">
          <h5 class="modal-title" id="exampleModalLabel">Registrar deuda</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('deudas.store')}}" method="post" class="tablelist-form needs-validation" alt="user-profile-image" enctype="multipart/form-data" autocomplete="off" novalidate>
              @csrf
                <div class="row g-3 mb-3">
                    <div class="col-lg-4">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Monto de deuda <span class="text-danger">*</span></label>
                                <input type="number" id="car_nombre" name="deu_monto_deuda" class="form-control" placeholder="Ingresar monto de la deuda" required />
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
                                <label for="alias" class="form-label">Fecha registrado <span class="text-danger">*</span></label>
                                <input type="date" id="car_nombre" name="deu_fecha_pagar" class="form-control" placeholder="Ingresar fecha del pago" required />
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

                <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">T. deuda <span class="text-danger">*</span></label>
                                <select class="form-control" name="deu_tipo_deuda">
                                    <option value="General">General</option>
                                    <option value="Servicios de casa">Servicios de casa</option>
                                    <option value="Servicios de papel">Servicios de papel</option>
                                    <option value="Familiar">Familiar</option>
                                    <option value="Mascotas">Mascotas</option>
                                    <option value="Comida">Comida</option>
                                    <option value="Pasajes">Pasajes</option>
                                    <option value="Salidas">Salidas</option>
                                    <option value="Juegos">Juegos</option>
                                    <option value="Electrodonomestico">Electrodonomestico</option>
                                    <option value="Ropa en general">Ropa en general</option>
                                    <option value="Colaboraciones">Colaboraciones</option>
                                    <option value="Estudios">Estudios</option>
                                </select>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El nombre es necesario
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Obj. deuda <span class="text-danger">*</span></label>
                                <input type="text" id="car_nombre" name="deu_tipo_deudor" class="form-control" placeholder="Ingresar tipo de deuda" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El nombre es necesario
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Nombres del D. <span class="text-danger">(opcional)</span></label>
                                <input type="text" id="car_nombre" name="deu_nombres" class="form-control" placeholder="Ingresar nombre de carrera" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Apellidos del D. <span class="text-danger">(opcional)</span></label>
                                <input type="text" id="car_nombre" name="deu_apellidos" class="form-control" placeholder="Ingresar nombre de carrera" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Correo del D. <span class="text-danger">(opcional)</span></label>
                                <input type="text" id="car_nombre" name="deu_correo" class="form-control" placeholder="Ingresar nombre de carrera" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Numero del D. <span class="text-danger">(opcional)</span></label>
                                <input type="text" id="car_nombre" name="deu_numero" class="form-control" placeholder="Ingresar nombre de carrera" />
                            </div>
                        </div>
                    </div>

              <div class="hstack gap-2 justify-content-end">
                  <button type="button" class="btn btn-ghost-primary" data-bs-dismiss="modal"><i class="ri-close-line align-bottom"></i>Cerrar</button>
                  <button type="submit" class="btn btn-primary" id="addNewProject">Guardar</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    (function () {
        'use strict';

        var forms = document.querySelectorAll('.tablelist-form');

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false);
            });
    })();
</script>

