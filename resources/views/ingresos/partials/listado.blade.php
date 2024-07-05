<div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
    <div class="file-manager-sidebar">
        <div class="p-4 d-flex flex-column h-100">
            <div class="mb-3">
                <button class="btn btn-success w-100" data-bs-target="#modalRegistrar" data-bs-toggle="modal"><i class="ri-add-line align-bottom"></i> Agregar ingresos</button>
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
                                @if (!$hideColumns['ing_monto'])
                                    <th scope="col">Monto ingreso</th>
                                @endif
                                @if (!$hideColumns['ing_fecha'])
                                    <th scope="col">Fecha de ingreso</th>
                                @endif
                                @if (!$hideColumns['ing_tipo_ingreso'])
                                    <th scope="col">T. ingreso</th>
                                @endif
                                @if (!$hideColumns['ing_tipo_donante'])
                                    <th scope="col">Metodo de ingreso</th>
                                @endif
                                @if (!$hideColumns['ing_nombres'])
                                    <th scope="col">Nombres de I.</th>
                                @endif
                                @if (!$hideColumns['ing_apellidos'])
                                    <th scope="col">Apellidos de I.</th>
                                @endif
                                @if (!$hideColumns['ing_correo'])
                                    <th scope="col">Correo de I.</th>
                                @endif
                                @if (!$hideColumns['ing_numero'])
                                    <th scope="col">Numero de I.</th>
                                @endif
                                @if (!$hideColumns['ing_descripcion'])
                                    <th scope="col">Descripcion</th>
                                @endif
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>

                        <tbody id="task-list">
                            @php
                                use \Carbon\Carbon;
                                Carbon::setLocale('es');
                            @endphp

                            @if ($ingresos->isEmpty())
                                <tr>
                                    <td colspan="12" class="text-center">No hay ingresos registradas</td>
                                </tr>
                            @else
                                @foreach ($ingresos as $ingreso)
                                    <tr>
                                        @if (!$hideColumns['ing_monto'])
                                            <td>S/. {{ $ingreso->ing_monto ?? '' }}</td>
                                        @endif
                                        @if (!$hideColumns['ing_fecha'])
                                        <td>
                                            @if($ingreso->ing_fecha)
                                                <b>{{ \Carbon\Carbon::parse($ingreso->ing_fecha)->translatedFormat('d \d\e F \d\e\l Y') }}</b>
                                            @else
                                                ''
                                            @endif
                                        </td>

                                        @endif
                                        @if (!$hideColumns['ing_tipo_ingreso'])
                                            <td><span class="badge bg-warning text-uppercase">{{ $ingreso->ing_tipo_ingreso ?? '' }}</span></td>
                                        @endif
                                        @if (!$hideColumns['ing_tipo_donante'])
                                            <td><span class="badge bg-info text-uppercase">{{ $ingreso->ing_tipo_donante ?? '' }}</span></td>
                                        @endif
                                        @if (!$hideColumns['ing_nombres'])
                                            <td>{{ $ingreso->ing_nombres ?? '' }}</td>
                                        @endif
                                        @if (!$hideColumns['ing_apellidos'])
                                            <td>{{ $ingreso->ing_apellidos ?? '' }}</td>
                                        @endif
                                        @if (!$hideColumns['ing_correo'])
                                            <td>{{ $ingreso->ing_correo ?? '' }}</td>
                                        @endif
                                        @if (!$hideColumns['ing_numero'])
                                            <td>{{ $ingreso->ing_numero ?? '' }}</td>
                                        @endif
                                        @if (!$hideColumns['ing_descripcion'])
                                            <td>{{ $ingreso->ing_descripcion ?? '' }}</td>
                                        @endif

                                        <td>
                                            @if ($ingreso->ing_estado)
                                                <span class="badge bg-success text-uppercase">Recibido</span>
                                            @else
                                                <span class="badge bg-danger text-uppercase">Cancelado</span>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#removeTaskItemModal"><i class="ri-delete-bin-5-fill align-bottom"></i></button>
                                                <button class="btn btn-sm btn-soft-info edit-list" data-bs-toggle="modal" data-bs-target="#createTask"><i class="ri-pencil-fill align-bottom"></i></button>
                                            </div>
                                        </td>
                                    </tr>

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
          <h5 class="modal-title" id="exampleModalLabel">Registrar pendientes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('ingresos.store')}}" method="post" class="tablelist-form needs-validation" alt="user-profile-image" enctype="multipart/form-data" autocomplete="off" novalidate>
              @csrf
                <div class="row g-3 mb-3">
                    <div class="col-lg-3">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Monto ingreso <span class="text-danger">*</span></label>
                                <input type="number" id="car_nombre" name="ing_monto" class="form-control" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El monto es necesario
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Fecha ingreso <span class="text-danger">*</span></label>
                                <input type="date" id="car_nombre" name="ing_fecha" class="form-control" placeholder="Ingresar la fecha de ingreso" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    La fecha es necesario
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">T. ingreso <span class="text-danger">*</span></label>
                                <select class="form-control" name="ing_tipo_ingreso">
                                    <option value="Trabajo">Trabajo</option>
                                    <option value="Freelancer developer">Freelancer developer</option>
                                    <option value="Cachuelos general">Cachuelos general</option>
                                    <option value="Prestamos">Prestamos</option>
                                    <option value="Ayuda general">Ayuda general</option>
                                </select>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    La tipo de ingreso es necesario
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Metodo de ingreso <span class="text-danger">*</span></label>
                                <select class="form-control" name="ing_tipo_donante">
                                    <option value="Deposito">Deposito</option>
                                    <option value="Efectivo">Efectivo</option>
                                    <option value="Yape">Yape</option>
                                    <option value="Plin">Plin</option>
                                    <option value="General">General</option>
                                </select>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El metodo de ingreso es necesario
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Nombres del I. <span class="text-danger">(opcional)</span></label>
                                <input type="text" id="car_nombre" name="ing_nombres" class="form-control" placeholder="Ingresar el nombre" />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El tipo objetivo es necesario
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Apellidos del I. <span class="text-danger">(opcional)</span></label>
                                <input type="text" id="car_nombre" name="ing_apellidos" class="form-control" placeholder="Ingresar el apellido" />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El tipo objetivo es necesario
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Correo del I. <span class="text-danger">(opcional)</span></label>
                                <input type="email" id="car_nombre" name="ing_correo" class="form-control" placeholder="Ingresar el correo" />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El tipo objetivo es necesario
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div>
                                <label for="alias" class="form-label">Numero del I. <span class="text-danger">(opcional)</span></label>
                                <input type="number" id="car_nombre" name="ing_numero" class="form-control" placeholder="Ingresar el numero" />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El tipo objetivo es necesario
                                </div>
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

