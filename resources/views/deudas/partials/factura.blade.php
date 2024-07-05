<!-- resources/views/deudas/show.blade.php -->

@extends('layouts.admin-sidebar')

@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Invoice Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                                <li class="breadcrumb-item active">Invoice Details</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-xxl-9">
                    <div class="card" id="demo">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-header border-bottom-dashed p-4">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <img src="{{ asset('assets/images/logo-dark.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="17">
                                            <img src="{{ asset('assets/images/logo-light.png') }}" class="card-logo card-logo-light" alt="logo light" height="17">
                                            <div class="mt-sm-5 mt-4">
                                                <h6 class="text-muted text-uppercase fw-semibold">Address</h6>
                                                <p class="text-muted mb-1" id="address-details">California, United States</p>
                                                <p class="text-muted mb-0" id="zip-code"><span>Zip-code:</span> 90201</p>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 mt-sm-0 mt-3">
                                            <h6><span class="text-muted fw-normal">Legal Registration No:</span><span id="legal-register-no">987654</span></h6>
                                            <h6><span class="text-muted fw-normal">Email:</span><span id="email">velzon@themesbrand.com</span></h6>
                                            <h6><span class="text-muted fw-normal">Website:</span> <a href="https://themesbrand.com/" class="link-primary" target="_blank" id="website">www.themesbrand.com</a></h6>
                                            <h6 class="mb-0"><span class="text-muted fw-normal">Contact No: </span><span id="contact-no"> +(01) 234 6789</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-header-->
                            </div><!--end col-->
                            <div class="col-lg-12">
                                <div class="card-body p-4">
                                    <div class="row g-3">
                                        <div class="col-lg-3 col-6">
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Invoice No</p>
                                            <h5 class="fs-14 mb-0">#VL<span id="invoice-no">25000355</span></h5>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Date</p>
                                            <h5 class="fs-14 mb-0"><span id="invoice-date">{{ $deuda->created_at }}</span> <small class="text-muted" id="invoice-time">02:36PM</small></h5>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Payment Status</p>
                                            <span class="badge badge-soft-success fs-11" id="payment-status">{{ $deuda->deu_tipo_deudor }}</span>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Total Amount</p>
                                            <h5 class="fs-14 mb-0">S/. <span id="total-amount">{{ $deuda->deu_monto_deuda }}</span></h5>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                            </div><!--end col-->
                            <div class="col-lg-12">
                                <div class="card-body p-4 border-top border-top-dashed">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <h6 class="text-muted text-uppercase fw-semibold mb-3">Billing Address</h6>
                                            <p class="fw-medium mb-2" id="billing-name">{{ $deuda->deu_nombres }}</p>
                                            <p class="text-muted mb-1" id="billing-address-line-1">305 S San Gabriel Blvd</p>
                                            <p class="text-muted mb-1"><span>Phone: +</span><span id="billing-phone-no">(123) 456-7890</span></p>
                                            <p class="text-muted mb-0"><span>Tax: </span><span id="billing-tax-no">12-3456789</span> </p>
                                        </div>
                                        <!--end col-->

                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                            </div><!--end col-->
                            <div class="col-lg-12">
                                <div class="card-body p-4">
                                    <div class="table-responsive">
                                        <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                            <thead>
                                                <tr class="table-active">
                                                    <th scope="col" style="width: 50px;">#</th>
                                                    <th scope="col">Pagos detalles</th>
                                                    <th scope="col">Inicial</th>
                                                    <th scope="col">Disminuye</th>
                                                    <th scope="col" class="text-end">Monto de pago</th>
                                                </tr>
                                            </thead>
                                            @php
                                            use Carbon\Carbon;
                                            Carbon::setLocale('es');
                                        @endphp

                                        <tbody id="products-list">
                                            @php
                                                $montoRestante = $deuda->deu_monto_fijo;
                                            @endphp
                                            @foreach ($deuda->pagos as $pago)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td class="text-start">
                                                        @if ($pago->id_deuda == $deuda->id_deuda)
                                                            <span class="fw-medium">{{ $deuda->deu_tipo_deudor }}</span>
                                                        @else
                                                            <span class="fw-medium">{{ $pago->id_deuda }}</span>
                                                        @endif
                                                        <p class="text-muted mb-0">
                                                            {{ Carbon::parse($pago->created_at)->translatedFormat('d \d\e F \d\e\l Y \a \l\a\s h:i A') }}
                                                        </p>
                                                    </td>
                                                    <td>{{ $montoRestante }}</td>
                                                    @php
                                                        $montoRestante -= $pago->monto_pago;
                                                    @endphp
                                                    <td>-</td>
                                                    <td class="text-end">{{ $pago->monto_pago }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                        </table>
                                    </div>
                                    <div class="border-top border-top-dashed mt-2">
                                        <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                            <tbody>
                                                {{-- <tr>
                                                    <td>Sub Total</td>
                                                    <td class="text-end">S/. {{ $deuda->deu_monto_deuda }}</td>
                                                </tr> --}}
                                                {{-- <tr>
                                                    <td>Estimated Tax (12.5%)</td>
                                                    <td class="text-end">$44.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Discount <small class="text-muted">(VELZON15)</small></td>
                                                    <td class="text-end">- $53.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Shipping Charge</td>
                                                    <td class="text-end">$65.00</td>
                                                </tr> --}}
                                                <tr class="border-top border-top-dashed fs-15">
                                                    <th scope="row">Total pagado</th>
                                                    <th class="text-end">S/. {{ $deuda->deu_monto_deuda }}</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end table-->
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment Details:</h6>
                                        <p class="text-muted mb-1">Payment Method: <span class="fw-medium" id="payment-method">Mastercard</span></p>
                                        <p class="text-muted mb-1">Card Holder: <span class="fw-medium" id="card-holder-name">David Nichols</span></p>
                                        <p class="text-muted mb-1">Card Number: <span class="fw-medium" id="card-number">xxx xxxx xxxx 1234</span></p>
                                        <p class="text-muted">Total Amount: <span class="fw-medium" id="">$ </span><span id="card-total-amount">755.96</span></p>
                                    </div>
                                    <div class="mt-4">
                                        <div class="alert alert-info">
                                            <p class="mb-0"><span class="fw-semibold">NOTES:</span>
                                                <span id="note">All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or
                                                    credit card or direct payment online. If account is not paid within 7
                                                    days the credits details supplied as confirmation of work undertaken
                                                    will be charged the agreed quoted fee noted above.
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                        <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                                        <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download</a>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->

</div>
@endsection
