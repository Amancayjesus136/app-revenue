@extends('layouts_mongodb.admin')
@section('content2')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-sm-4">
                            <div class="search-box">
                                <input type="text" class="form-control" id="searchMemberList" placeholder="Search for name or designation...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>

                        <div class="col-sm-auto ms-auto">
                            <div class="list-grid-nav hstack gap-1">
                                <button class="btn btn-info addMembers-modal" data-bs-toggle="modal" data-bs-target="#addmemberModal"><i class="ri-file-paper-2-fill align-bottom"></i> Ver facturación</button>
                                <a href="{{ route('export.exportDeudaToExcel') }}" class="btn btn-success addMembers-modal"><i class="ri-file-excel-2-fill me-1 align-bottom"></i> Excel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>

                        <div id="teamlist">
                            <div class="team-list row list-view-filter" id="team-member-list">

                                @foreach($resultados as $deuda)
                                    <div class="col">
                                        <div class="card team-box">
                                            <div class="team-cover"> <img src="assets/images/small/img-9.jpg" alt="" class="img-fluid"> </div>
                                            <div class="card-body p-4">
                                                <div class="row align-items-center team-row">
                                                    <div class="col team-settings">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <button type="button" class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn">
                                                                        @if ($deuda['deu_monto_deuda'] == 0)
                                                                            <i class="ri-star-fill fs-14 text-warning"></i>
                                                                        @else
                                                                            <i class="ri-star-fill fs-14"></i>
                                                                        @endif
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item edit-list" href="#addmemberModal" data-bs-toggle="modal" data-edit-id="12"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item remove-list" href="#removeMemberModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col">
                                                        <div class="team-profile-img">
                                                            <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img src="{{ asset('assets/images/sin-foto.png') }}" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                                                            <div class="team-content"> <a class="member-name" data-bs-toggle="offcanvas" href="#member-overview" aria-controls="member-overview">
                                                                    <h5 class="fs-16 mb-1">{{ $deuda['deu_nombres'] }} {{ $deuda['deu_apellidos'] }}</h5>
                                                                </a>
                                                                <p class="text-muted member-designation mb-0">{{ $deuda['deu_tipo_deuda'] }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col">
                                                        <div class="row text-muted text-center">
                                                            <div class="col-2">
                                                                <h5 class="mb-1 tasks-num"></h5>
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                            <div class="col-8 border-end border-end-dashed">
                                                                <h5 class="mb-1 projects-num">{{ $deuda['deu_tipo_deudor'] }}</h5>
                                                                <p class="text-muted mb-0">S/. {{ $deuda['deu_monto_fijo'] }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col">
                                                        <div class="text-end">
                                                            <span class="btn btn-light view-btn">
                                                                @if ($deuda['deu_monto_deuda'] == 0)
                                                                    <span class="badge bg-success text-uppercase">Cancelado</span>
                                                                @else
                                                                    <span class="badge bg-danger text-uppercase">Pendiente</span>
                                                                @endif
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
