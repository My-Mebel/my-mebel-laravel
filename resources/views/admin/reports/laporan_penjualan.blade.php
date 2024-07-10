@extends('admin.layout.layout')


@section('content')
    <script>
        function updateLinkTahunan() {
            const year = document.getElementById('yearSelectTahunan').value;
            const link = document.getElementById('printLinkTahunan');
            link.href = `laporan-penjualan-tahunan/${year}`;
        }

        function updateLinkBulanan() {
            const month = document.getElementById('monthSelectBulanan').value;
            const year = document.getElementById('yearSelectBulanan').value;
            const link = document.getElementById('printLinkBulanan');
            link.href = `laporan-penjualan-bulanan/${month}/${year}`;
        }

        function updateLinkHarian() {
            const day = document.getElementById('daySelectHarian').value;
            const month = document.getElementById('monthSelectHarian').value;
            const year = document.getElementById('yearSelectHarian').value;
            const link = document.getElementById('printLinkHarian');
            link.href = `laporan-penjualan-harian/${day}/${month}/${year}`;
        }
    </script>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col">
                                    <div class="card shadow-sm rounded-lg p-3">
                                        <h4 style="font-weight: 600; font-size: 20px; margin-bottom: 16px;">Laporan Harian
                                        </h4>
                                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 13px;">
                                            <div>
                                                <p style="margin-bottom: 10px;">Tanggal</p>
                                                <select id="daySelectHarian" onchange="updateLinkHarian()"
                                                    class="form-select" aria-label="Tanggal"
                                                    style="width: 100%; height: 40px; border-radius: 6px; border-color: #375957; font-weight: 500;">
                                                    @for ($day = 1; $day <= 31; $day++)
                                                        <option value="{{ $day }}"
                                                            {{ date('d') == $day ? 'selected' : '' }}>
                                                            {{ $day }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div>
                                                <p style="margin-bottom: 10px;">Bulan</p>
                                                <select id="monthSelectHarian" onchange="updateLinkHarian()"
                                                    class="form-select" aria-label="Bulan"
                                                    style="width: 100%; height: 40px; border-radius: 6px; border-color: #375957; font-weight: 500;">
                                                    @for ($month = 1; $month <= 12; $month++)
                                                        <option value="{{ $month }}"
                                                            {{ date('m') == $month ? 'selected' : '' }}>
                                                            {{ $month }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div>
                                                <p style="margin-bottom: 10px;">Tahun</p>
                                                <select id="yearSelectHarian" onchange="updateLinkHarian()"
                                                    class="form-select" aria-label="Tahun"
                                                    style="width: 100%; height: 40px; border-radius: 6px; border-color: #375957; font-weight: 500;">
                                                    @for ($i = 1900; $i <= date('Y'); $i++)
                                                        <option value="{{ $i }}"
                                                            {{ $i == date('Y') ? 'selected' : '' }}>{{ $i }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <a id="printLinkHarian"
                                            href="laporan-penjualan-harian/{{ date('d') }}/{{ date('m') }}/{{ date('Y') }}"
                                            style="text-align: center; text-decoration: none; margin-top: 16px; padding-top: 10px; padding-bottom: 10px; font-weight: 500; border-radius: 6px; background-color: #375957; border: none; color: white;">
                                            <img src="{{ asset('images/print.png') }}" alt="print"
                                                class="object-contain">
                                            <span>Cetak Laporan</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm rounded-lg p-3">
                                        <h4 style="font-weight: 600; font-size: 20px; margin-bottom: 16px;">Laporan Bulanan
                                        </h4>
                                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 13px;">
                                            <div>
                                                <p style="margin-bottom: 10px;">Bulan</p>
                                                <select id="monthSelectBulanan" onchange="updateLinkBulanan()"
                                                    class="form-select" aria-label="Bulan"
                                                    style="width: 100%; height: 40px; border-radius: 6px; border-color: #375957; font-weight: 500;">
                                                    @for ($month = 1; $month <= 12; $month++)
                                                        <option value="{{ $month }}"
                                                            {{ date('m') == $month ? 'selected' : '' }}>
                                                            {{ $month }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div>
                                                <p style="margin-bottom: 10px;">Tahun</p>
                                                <select id="yearSelectBulanan" onchange="updateLinkBulanan()"
                                                    class="form-select" aria-label="Tahun"
                                                    style="width: 100%; height: 40px; border-radius: 6px; border-color: #375957; font-weight: 500;">
                                                    @for ($i = 1900; $i <= date('Y'); $i++)
                                                        <option value="{{ $i }}"
                                                            {{ $i == date('Y') ? 'selected' : '' }}>{{ $i }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <a id="printLinkBulanan"
                                            href="laporan-penjualan-bulanan/{{ date('m') }}/{{ date('Y') }}"
                                            style="text-align: center; text-decoration: none; margin-top: 16px; padding-top: 10px; padding-bottom: 10px; font-weight: 500; border-radius: 6px; background-color: #375957; border: none; color: white;">
                                            <img src="{{ asset('images/print.png') }}" alt="print"
                                                class="object-contain">
                                            <span>Cetak Laporan</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm rounded-lg p-3">
                                        <h4 style="font-weight: 600; font-size: 20px; margin-bottom: 16px;">Laporan Tahunan
                                        </h4>
                                        <div style="display: grid; grid-template-columns: repeat(1, 1fr); gap: 13px;">
                                            <div>
                                                <p style="margin-bottom: 10px;">Tahun</p>
                                                <select id="yearSelectTahunan" class="form-select" aria-label="Tahun"
                                                    onchange="updateLinkTahunan()"
                                                    style="width: 100%; height: 40px; border-radius: 6px; border-color: #375957; font-weight: 500;">
                                                    @for ($i = 1900; $i <= date('Y'); $i++)
                                                        <option value="{{ $i }}"
                                                            {{ $i == date('Y') ? 'selected' : '' }}>{{ $i }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <a id="printLinkTahunan" href="laporan-penjualan-tahunan/{{ date('Y') }}"
                                            style="text-align: center; text-decoration: none; margin-top: 16px; padding-top: 10px; padding-bottom: 10px; font-weight: 500; border-radius: 6px; background-color: #375957; border: none; color: white;">
                                            <img src="{{ asset('images/print.png') }}" alt="print"
                                                class="object-contain">
                                            <span>Cetak Laporan</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. All rights
                    reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
