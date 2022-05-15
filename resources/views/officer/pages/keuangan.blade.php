@extends('superuser.layouts.app')

@section('title')
Keuangan
@endsection

@section('content')
<main class="main-content position-relative border-radius-lg ">
  @include('superuser.components.topbar')
  <div class="container-fluid py-4">
    <div class="row mt-4">
      <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize">Keuangan</h6>
            <p class="mb-3">
              Di dalam fitur ini menampilkan informasi tentang penggunaan keuangan. Seperti informasi keuangan masjid (dana masuk, dana keluar, saldo) dengan tampilan berupa tabel. Sebagai tambahan infografis, terdapat grafik yang dapat terupdate secara otomatis ketika data di table berubah. Yaitu grafik dana dana masuk, keluar dan saldo. Kemudian grafik prosentase penggunaan, yaitu pembangunan fisik, peningkatan ekonomi, pemberdayaan masyarakat, peningkatan kapasitas, kesehatan, pendidikan, dana sosial.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card ">
          <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
              <h6 class="mb-2">Pendapatan dan Pengeluaran Desa 2021</h6>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center ">
              <thead>
                <tr>
                  <th class="text-uppercase font-weight-bolder">Sumber Pendapatan</th>
                  <th class="text-uppercase font-weight-bolder ps-2">Nominal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Pendapatan asli desa</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 1.000.000.000</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Bantuan dari pemerintah kabupaten</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 1.000.000.000</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Bantuan dari pemerintah dan pemerintah provinsi</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 1.000.000.000</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Sumbangan pihak ke-3</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 200.000.000</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Pinjaman desa</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. -</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Total</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 3.200.000.000</p>
                  </td>
                </tr>

                <thead style="border-top: 5px solid #dee2e6">
                  <tr>
                    <th class="text-uppercase font-weight-bolder">Perihal Pengeluaran</th>
                    <th class="text-uppercase font-weight-bolder ps-2">Nominal</th>
                  </tr>
                </thead>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Belanja aparatur desa</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 500.000.000</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Pembangunan infrastruktur</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 1.000.000.000</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Pembangunan ekonomi</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 500.000.000</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Pembangunan pendidikan</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 500.000.000</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Pemberdayaan masyarakat</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 500.000.000</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Bantuan kepada masyarakat</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 100.000.000</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="mb-0 px-3">Total</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 3.100.000.000</p>
                  </td>
                </tr>

                <tr style="border-top: 5px solid #dee2e6">
                  <td>
                    <p class="font-weight-bold mb-0 px-3">Sisa Keuangan Desa</p>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Rp. 100.000.000</p>
                  </td>
                </tr>
                <tr>
                  <td class="pb-0">
                    <p class="font-weight-bold mb-0 px-3">Status keuangan</p>
                  </td>
                  <td class="pb-0">
                    <p class="font-weight-bold mb-0">Surplus</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize mb-0">Sumber Pendapatan Desa</h6>
          </div>
          <div class="card-body p-3">
            <div class="chart">
              <canvas id="pie-chart3" class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize mb-0">Pengeluaran Desa</h6>
          </div>
          <div class="card-body p-3">
            <div class="chart">
              <canvas id="pie-chart4" class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('superuser.components.footer')
  </div>
</main>
@endsection
