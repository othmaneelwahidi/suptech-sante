<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SUPTECH SANTE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    @include('layouts.MainCss')


    <style>
        .table-wrapper {
            width: auto;
            margin: 30px auto 100px;
        }

        table {
            display: block;
            width: 100%;
            position: relative;
            margin-top: 50px;
            color: black;
            border-collapse: collapse;
            font-family: Arial;
        }

        /* table:before {
        content: "Scroll to see more >";
        position: absolute;
        top: -25px;
        right: 0;
        text-transform: uppercase;
        font-size: 10px;
    } */

        table thead,
        table tbody,
        table thead th {
            display: block;
        }

        table th,
        table td {
            padding: 15px 10px 0;
            height: 110px;
            box-sizing: border-box;
            overflow: hidden;
            min-width: 130px;
            font-size: 20px;
            text-align: center;
            text-overflow: ellipsis;
        }

        table th {
            padding-top: 45px;
            text-align: center;
        }

        table thead {
            float: left;
            white-space: nowrap;
        }

        table thead tr th {
            white-space: nowrap;
            border-bottom: none;
            border-right: none;
            background-color: #f0f0f0;
            padding-left: 20px;
            font-weight: bold;
        }

        table thead tr th:first-child {
            white-space: nowrap;
            height: 60px;
            padding: 20px 40px;
            background: none;
        }

        table thead tr th:nth-child(even) {
            background-color: #d8d8d8;
        }

        table tbody {
            width: auto;
            position: relative;
            overflow-x: auto;
        }

        table tbody tr {
            display: table-cell;
        }

        table tbody tr td {
            display: block;
            text-align: center;
            border-bottom: 1px solid #e6e4e4;
            border-right: 1px solid #e6e4e4;
        }

        table tbody tr td:first-child {
            border-top: 1px solid transparent;
            white-space: nowrap;
            height: 60px;
            padding: 14px 40px;
            color: black;
            text-transform: uppercase;
            font-size: 20px;
            letter-spacing: 1px;
        }

        table tbody tr td:nth-child(even) {
            background: #cce5ff;
            border-right: 1px solid #cce5ff;
        }

        /* Colored Columns Loop */
        table tbody tr:nth-child(1) td:first-child:nth-child(odd) {
            background-color: #99ccff !important;
            border-bottom: 1px solid #99ccff !important;
            border-right: 1px solid #99ccff !important;
        }

        table tbody tr:nth-child(1) td:nth-child(odd) {
            background-color: #99ccff !important;
            border-bottom: 1px solid #99ccff !important;
            border-right: 1px solid #99ccff !important;
        }

        table tbody tr:nth-child(1) td:nth-child(even) {
            background-color: #66b2ff !important;
            border-bottom: 1px solid #66b2ff !important;
            border-right: 1px solid #66b2ff !important;
        }

        table tbody tr:nth-child(2) td:first-child:nth-child(odd) {
            background-color: #cce5ff !important;
            border-bottom: 1px solid #cce5ff !important;
            border-right: 1px solid #cce5ff !important;
        }

        table tbody tr:nth-child(2) td:nth-child(odd) {
            background-color: #66b2ff !important;
            border-bottom: 1px solid #66b2ff !important;
            border-right: 1px solid #66b2ff !important;
        }

        table tbody tr:nth-child(2) td:nth-child(even) {
            background-color: #3299ff !important;
            border-bottom: 1px solid #3299ff !important;
            border-right: 1px solid #3299ff !important;
        }

        table tbody tr:nth-child(3) td:first-child:nth-child(odd) {
            background-color: #99ccff !important;
            border-bottom: 1px solid #99ccff !important;
            border-right: 1px solid #99ccff !important;
        }

        table tbody tr:nth-child(3) td:nth-child(odd) {
            background-color: #99ccff !important;
            border-bottom: 1px solid #99ccff !important;
            border-right: 1px solid #99ccff !important;
        }

        table tbody tr:nth-child(3) td:nth-child(even) {
            background-color: #66b2ff !important;
            border-bottom: 1px solid #66b2ff !important;
            border-right: 1px solid #66b2ff !important;
        }

        table tbody tr:nth-child(4) td:first-child:nth-child(odd) {
            background-color: #cce5ff !important;
            border-bottom: 1px solid #cce5ff !important;
            border-right: 1px solid #cce5ff !important;
        }

        table tbody tr:nth-child(4) td:nth-child(odd) {
            background-color: #66b2ff !important;
            border-bottom: 1px solid #66b2ff !important;
            border-right: 1px solid #66b2ff !important;
        }

        table tbody tr:nth-child(4) td:nth-child(even) {
            background-color: #3299ff !important;
            border-bottom: 1px solid #3299ff !important;
            border-right: 1px solid #3299ff !important;
        }

        table tbody tr:nth-child(5) td:first-child:nth-child(odd) {
            background-color: #99ccff !important;
            border-bottom: 1px solid #99ccff !important;
            border-right: 1px solid #99ccff !important;
        }

        table tbody tr:nth-child(5) td:nth-child(odd) {
            background-color: #99ccff !important;
            border-bottom: 1px solid #99ccff !important;
            border-right: 1px solid #99ccff !important;
        }

        table tbody tr:nth-child(5) td:nth-child(even) {
            background-color: #66b2ff !important;
            border-bottom: 1px solid #66b2ff !important;
            border-right: 1px solid #66b2ff !important;
        }

        table tbody tr:nth-child(6) td:first-child:nth-child(odd) {
            background-color: #cce5ff !important;
            border-bottom: 1px solid #cce5ff !important;
            border-right: 1px solid #cce5ff !important;
        }

        table tbody tr:nth-child(6) td:nth-child(odd) {
            background-color: #66b2ff !important;
            border-bottom: 1px solid #66b2ff !important;
            border-right: 1px solid #66b2ff !important;
        }

        table tbody tr:nth-child(6) td:nth-child(even) {
            background-color: #3299ff !important;
            border-bottom: 1px solid #3299ff !important;
            border-right: 1px solid #3299ff !important;
        }
    </style>

</head>

<body>

    <!-- ======= Top Bar ======= -->

    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- End Header -->


    <div class="row mb-2"> </div>


    <section class="counts section-bg" data-aos="fade-up">
        <div class="container">

            <div class="text-center ">
                <div class="count-box sector">
                    <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                    <h2>{{ __('messages.cigdias') }} </h2>
                </div>
            </div>

            <h2> {{ __('messages.cda') }}: </h2>
            <div class="row mb-4"> </div>

            <div class="col-lg-12 col-md-6  ">
                <div class="count-box sector">
                    <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                    <h3>- {{ __('messages.cnc') }} .</h3>
                    <h3>- {{ __('messages.etdbs') }}.</h3>
                </div>
            </div>

            <h2> {{ __('messages.prgrm') }}: </h2>
            <div class="row mb-4"> </div>
            <div class="table-wrapper">
                <table>
                    <tbody>
                        <tr>
                            <td>{{ __('messages.s1') }}</td>
                            <td>{{ __('messages.lg1_gd') }}</td>
                            <td>{{ __('messages.ecc_gd') }} </td>
                            <td>{{ __('messages.api_gd') }} </td>
                            <td>{{ __('messages.scph_gd') }}</td>
                            <td>{{ __('messages.ps_gd') }} </td>
                            <td>{{ __('messages.gl_gd') }} </td>
                            <td>{{ __('messages.ea_gd') }}</td>
                            <td>{{ __('messages.ap_gd') }} </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.s2') }}</td>
                            <td>{{ __('messages.encp_gd') }} </td>
                            <td>{{ __('messages.poc_gd') }} </td>
                            <td>{{ __('messages.bsr_gd') }} </td>
                            <td>{{ __('messages.roan_gd') }} </td>
                            <td>{{ __('messages.tds_gd') }} </td>
                            <td>{{ __('messages.ri_gd') }} </td>
                            <td>{{ __('messages.dge_gd') }} </td>
                            <td>{{ __('messages.lg2_gd') }} </td>
                            <td>{{ __('messages.stg_gd') }} </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.s3') }}</td>
                            <td>{{ __('messages.dtap_gd') }} </td>
                            <td>{{ __('messages.dw_gd') }} </td>
                            <td>{{ __('messages.isd_gd') }} </td>
                            <td>{{ __('messages.ia_gd') }} </td>
                            <td>{{ __('messages.cc_gd') }} </td>
                            <td>{{ __('messages.nrq_gd') }} </td>
                            <td>{{ __('messages.mnc_gd') }} </td>
                            <td>{{ __('messages.lg3_gd') }} </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.s4') }}</td>
                            <td>{{ __('messages.bda_gd') }} </td>
                            <td>{{ __('messages.ml_gd') }} </td>
                            <td>{{ __('messages.tim_gd') }} </td>
                            <td>{{ __('messages.rm_gd') }} </td>
                            <td>{{ __('messages.bi_gd') }} </td>
                            <td>{{ __('messages.pid_gd') }} </td>
                            <td>{{ __('messages.ohes_gd') }} </td>
                            <td>{{ __('messages.lang4_gd') }} </td>
                            <td>{{ __('messages.stg_gd') }} </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.s5') }}</td>
                            <td>{{ __('messages.dlps_gd') }} </td>
                            <td>{{ __('messages.dwb_gd') }} </td>
                            <td>{{ __('messages.bd_gd') }} </td>
                            <td>{{ __('messages.cpim_gd') }} </td>
                            <td>{{ __('messages.vi_gd') }} </td>
                            <td>{{ __('messages.mno_gd') }} </td>
                            <td>{{ __('messages.astim_gd') }} </td>
                            <td>{{ __('messages.ssdp_gd') }} </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.s6') }}</td>
                            <td>{{ __('messages.pfe_gd') }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <tbody>
                </table>
            </div>
            <div class="row mb-2"> </div>
        </div>
    </section>




    <div class="row mb-4"> </div>





    </main><td-End #main -->




    <!-- ======= Footer ======= -->

    @include('layouts.footer')

    <!-- End Footer --> <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts.MainJs')
    <script>
        $(".changeLang").change(function() {
            if ($(this).val() == 'fr') {
                window.location.href = "/fr/genied";
            } else if ($(this).val() == 'ar') {
                window.location.href = "/ar/genied";
            }
        });
    </script>
</body>

</html>
