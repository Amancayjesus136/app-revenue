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
                                <th scope="col">Deuda</th>
                                <th scope="col">Monto pagado</th>
                                <th scope="col">Fecha pagado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>

                        <tbody id="task-list">
                            @php
                                use Carbon\Carbon;
                                Carbon::setLocale('es');

                                // Función para generar colores aleatorios
                                function generateRandomColor($seed) {
                                    srand($seed);
                                    $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                                    return $color;
                                }

                                $colorMap = [];
                            @endphp
                                @if ($pagos->isEmpty())
                                    <tr>
                                        <td colspan="12" class="text-center">No hay pagos registradas</td>
                                    </tr>
                                @else
                                @foreach ($pagos as $pago)
                                    @php
                                        $tipoDeudor = $pago->deuda->deu_tipo_deudor ?? 'default';
                                        if (!isset($colorMap[$tipoDeudor])) {
                                            $colorMap[$tipoDeudor] = generateRandomColor(crc32($tipoDeudor));
                                        }
                                        $badgeColor = $colorMap[$tipoDeudor];
                                    @endphp

                                    <tr>
                                        <td><span class="badge text-uppercase" style="background-color: {{ $badgeColor }}">{{ $pago->deuda->deu_tipo_deudor ?? $pago->id_deuda }}</span></td>
                                        <td>{{ $pago->monto_pago ?? '' }}</td>
                                        <td>
                                            @if($pago->updated_at)
                                                {{ Carbon::parse($pago->updated_at)->translatedFormat('d \d\e F \d\e Y') }}
                                            @else
                                                ''
                                            @endif
                                        </td>

                                        <td>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#removeTaskItemModal" data-remove-id="#"><i class="ri-delete-bin-5-fill align-bottom"></i></button>
                                                <button class="btn btn-sm btn-soft-info edit-list" data-bs-toggle="modal" data-bs-target="#createTask" data-edit-id="#"><i class="ri-pencil-fill align-bottom"></i></button>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $pagos->onEachSide(1)->links() }}
                </div>
            </div>
            <div class="py-4 mt-4 text-center" id="noresult" style="display: none;">
                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
                <h5 class="mt-4">Sorry! No Result Found</h5>
            </div>
        </div>

    </div>
</div>
