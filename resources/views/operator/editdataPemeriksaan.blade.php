@extends('templete.base')
@section('content')
    <main class="p-32">
        <div class="card w-full bg-base-100 shadow-xl">
            <div class="card-body space-y-5">
                <h2 class="card-title">Formulir Pemeriksaan</h2>
                <form action={{ "/update/formulir/pemeriksaan/".$id }} class="space-y-5" method="post">
                    @csrf   
                    <div class="form-control">
                    <label class="label">
                        <span class="label-text">NAMA CUSTOMER</span>
                    </label>
                    <input type="text" value="{{ $namaCustomer }}" name="namaCustomer" placeholder="NAMA CUSTOMER ..." class="input input-bordered" />
                    </div>
                    <div class="form-control">
                    <label class="label">
                        <span class="label-text">ALAMAT CUSTOMER</span>
                    </label>
                    <input type="text" value="{{ $alamatCustomer }}" name="alamatCustomer" placeholder="ALAMAT CUSTOMER" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                    <label class="label">
                        <span class="label-text">TANGGAL REGISTRASI</span>
                    </label>
                    <input type="text" value={{ $tanggalRegistrasi }} name="tanggalRegis" readonly class="input input-bordered" />
                    </div>
                    <div class="form-control">
                    <label class="label">
                        <span class="label-text">NAMA OPERATOR</span>
                    </label>
                    <input type="text" value="{{ $penerima }}" readonly name="namaOperator" class="input input-bordered" />
                    </div>

                    <hr>
                    <h1>I. PEMERIKSAAN SAMPEL AIR </h1>
                    {{-- table pemeriksaan sempel air --}}
                        <div class="overflow-x-auto w-full">
                            <table class="table w-full">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>
                                        <label>
                                            <input type="checkbox" class="checkbox" />
                                        </label>
                                        </th>
                                        <th>PARAMETER</th>
                                        <th>QYT</th>
                                        <th>TARIF</th>
                                        <th>JUMLAH</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- row 1 -->
                                    <tr>
                                        <th>
                                            <label>
                                                <input type="checkbox" class="checkbox" />
                                            </label>
                                        </th>
                                        <td>
                                            PAKET PEMERIKSAAN AIR MINUM
                                        </td>
                                        <td id="AirMinum">
                                            <input onchange="AirMinum()" value={{ $airMinum/464000 }} type="number" id="jumlahAirminum" class="input input-bordered" />
                                        </td>
                                        <td>
                                            <input type="number" readonly id="tarifAirMinum" value="464000" class="input input-bordered" />
                                        </td>
                                        <td >
                                            <input type="number" value={{ $airMinum }} name="totalAirMinum" readonly id="totalAirMinum" class="input input-bordered" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label>
                                                <input  type="checkbox" class="checkbox" />
                                            </label>
                                        </th>
                                        <td>
                                            PAKET PEMERIKSAAN AIR BERSIH
                                        </td>
                                        <td id="AirBersih">
                                            <input onchange="AirBersih()" value={{ $airBersih/420000 }} type="number" id="jumlahAirBersih" class="input input-bordered" />
                                        </td>
                                        <td>
                                            <input type="number" readonly id="tarifAirBersih" value="420000" class="input input-bordered" />
                                        </td>
                                        <td >
                                            <input type="number" readonly value={{ $airBersih }} name="totalAirBersih" id="totalAirBersih" class="input input-bordered" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label>
                                                <input  type="checkbox" class="checkbox" />
                                            </label>
                                        </th>
                                        <td>
                                            PEMERIKSAAN AIR LIMBAH RS
                                        </td>
                                        <td id="AirLimbahRs">
                                            <input onchange="AirLimbahRs()" value={{ $airLimbahRs/257000 }} type="number" id="jumlahAirLimbahRs" class="input input-bordered" />
                                        </td>
                                        <td>
                                            <input type="number" readonly id="tarifAirLimbahRs" value="257000" class="input input-bordered" />
                                        </td>
                                        <td >
                                            <input type="number" readonly value={{ $airLimbahRs }} name="totalAirLimbahRs" id="totalAirLimbahRs" class="input input-bordered" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label>
                                                <input  type="checkbox" class="checkbox" />
                                            </label>
                                        </th>
                                        <td>
                                            PEMERIKSAAN AIR SUNGAI
                                        </td>
                                        <td id="AirSungai">
                                            <input onchange="AirSungai()" value={{ $airSungai/513000 }} type="number" id="jumlahAirSungai" class="input input-bordered" />
                                        </td>
                                        <td>
                                            <input type="number" readonly id="tarifAirSungai" value="513000" class="input input-bordered" />
                                        </td>
                                        <td >
                                            <input type="number" readonly value={{ $airSungai }} name="totalAirSungai" id="totalAirSungai" class="input input-bordered" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label>
                                                <input  type="checkbox" class="checkbox" />
                                            </label>
                                        </th>
                                        <td>
                                            PAKET PEMERIKSAAN AIR KOLAM RENANG
                                        </td>
                                        <td id="AirKolam">
                                            <input onchange="AirKolam()" value={{ $airKolamRenang/521000 }} type="number" id="jumlahAirKolam" class="input input-bordered" />
                                        </td>
                                        <td>
                                            <input type="number" readonly id="tarifAirKolam" value="521000" class="input input-bordered" />
                                        </td>
                                        <td >
                                            <input type="number" readonly {{ $airKolamRenang }} name="totalAirKolam" id="totalAirKolam" class="input input-bordered" />
                                        </td>
                                    </tr>
                                </tbody>
                            <!-- foot -->                          
                            </table>
                        </div>
                    {{-- end table pemeriksaan sempel air --}}
                    <hr>

                    <h1>II. PEMERIKSAAN SEMPEL MAKANAN / MINUMAN / SWAB</h1>
                    {{-- table pemeriksaan sempel makanan / minuman / swab --}}
                        <div class="overflow-x-auto w-full">
                            <table class="table w-full">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>
                                        <label>
                                            <input type="checkbox" class="checkbox" />
                                        </label>
                                        </th>
                                        <th>PARAMETER</th>
                                        <th>QYT</th>
                                        <th>TARIF</th>
                                        <th>JUMLAH</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- row 1 -->
                                    <tr>
                                        <th>
                                            <label>
                                                <input  type="checkbox" class="checkbox" />
                                            </label>
                                        </th>
                                        <td>
                                            E COLI
                                        </td>
                                        <td id="EColi">
                                            <input onchange="EColi()" {{ $EColi/63000 }} type="number" id="jumlahEColi" class="input input-bordered" />
                                        </td>
                                        <td>
                                            <input type="number" readonly id="tarifEColi" value="63000" class="input input-bordered" />
                                        </td>
                                        <td >
                                            <input type="number" readonly {{ $EColi }} name="totalEColi" id="totalEColi" class="input input-bordered" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label>
                                                <input  type="checkbox" class="checkbox" />
                                            </label>
                                        </th>
                                        <td>
                                            SALMONELLA
                                        </td>
                                        <td id="Salmonela">
                                            <input onchange="Salmonela()" {{ $Salmonella/50000 }} type="number" id="jumlahSalmonela" class="input input-bordered" />
                                        </td>
                                        <td>
                                            <input type="number" readonly id="tarifSalmonela" value="50000" class="input input-bordered" />
                                        </td>
                                        <td >
                                            <input type="number" readonly {{ $Salmonella }} name="totalSalmonela" id="totalSalmonela" class="input input-bordered" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label>
                                                <input  type="checkbox" class="checkbox" />
                                            </label>
                                        </th>
                                        <td>
                                            JAMUR
                                        </td>
                                        <td id="Jamur">
                                            <input onchange="Jamur()" type="number" value={{ $jamur/60000 }} id="jumlahJamur" class="input input-bordered" />
                                        </td>
                                        <td>
                                            <input type="number" readonly id="tarifJamur" value="60000" class="input input-bordered" />
                                        </td>
                                        <td >
                                            <input type="number" readonly value={{ $jamur }} name="totalJamur" id="totalJamur" class="input input-bordered" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label>
                                                <input  type="checkbox" class="checkbox" />
                                            </label>
                                        </th>
                                        <td>
                                            PAKET KIMIA FOOD SECURITY
                                        </td>
                                        <td id="KimiaFood">
                                            <input onchange="KimiaFood()" value={{ $KimiaFood/61000 }} type="number" id="jumlahKimiaFood" class="input input-bordered" />
                                        </td>
                                        <td>
                                            <input type="number" readonly id="tarifKimiaFood" value="61000" class="input input-bordered" />
                                        </td>
                                        <td >
                                            <input type="number" readonly value={{ $KimiaFood }} name="totalKimiaFood" id="totalKimiaFood" class="input input-bordered" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <span class="flex justify-center">
                                                TOTAL BIAYA PEMERIKSAAN
                                            </span>
                                        </td>
                                        <td >
                                            <input onchange="totalBiaya()" value={{ $TotalBiaya }} type="number" name="TotalBiayaPemeriksaan" id="totalBiaya" class="input input-bordered" />
                                        </td>
                                    </tr>
                                </tbody>
                            <!-- foot -->                          
                            </table>
                        </div>
                    {{-- end table pemeriksaan sempel makanan / minuman / swab --}}

                    <div class="form-control mt-6">
                        <button type="submite" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
          </div>
    </main>
    
    {{-- pemeriksaan semple air --}}
        <script>
            function AirMinum(){
                var tarifAirMinum = document.getElementById('tarifAirMinum').value
                var jumlahAirminum = document.getElementById('jumlahAirminum').value
                
                var total = tarifAirMinum*jumlahAirminum;
                
                var jumlahAirminum = document.getElementById('totalAirMinum').value = total;

                totalBiaya(total)
            }
            function AirBersih(){
                var tarifAirBersih = document.getElementById('tarifAirBersih').value
                var jumlahAirBersih = document.getElementById('jumlahAirBersih').value
                
                var total = tarifAirBersih*jumlahAirBersih;

                var jumlahAirBersih = document.getElementById('totalAirBersih').value = total;
                totalBiaya(total)
            }
            function AirLimbahRs(){
                var tarifAirLimbahRs = document.getElementById('tarifAirLimbahRs').value
                var jumlahAirLimbahRs = document.getElementById('jumlahAirLimbahRs').value
                
                var total = tarifAirLimbahRs*jumlahAirLimbahRs;

                var jumlahAirLimbahRs = document.getElementById('totalAirLimbahRs').value = total;
                totalBiaya(total)
            }
            function AirSungai(){
                var tarifAirSungai = document.getElementById('tarifAirSungai').value
                var jumlahAirSungai = document.getElementById('jumlahAirSungai').value
                
                var total = tarifAirSungai*jumlahAirSungai;

                var jumlahAirSungai = document.getElementById('totalAirSungai').value = total;
                totalBiaya(total)
            }
            function AirKolam(){
                var tarifAirKolam = document.getElementById('tarifAirKolam').value
                var jumlahAirKolam = document.getElementById('jumlahAirKolam').value
                
                var total = tarifAirKolam*jumlahAirKolam;

                var jumlahAirKolam = document.getElementById('totalAirKolam').value = total;
                totalBiaya(total)
            }
        </script>
    {{-- end pemeriksaan semple air --}}
    
    {{-- pemeriksaan semple makanan/minuman/swab --}}
        <script>
            function EColi(){
                var tarifEColi = document.getElementById('tarifEColi').value
                var jumlahEColi = document.getElementById('jumlahEColi').value
                
                var total = tarifEColi*jumlahEColi;

                var jumlahEColi = document.getElementById('totalEColi').value = total;
                totalBiaya(total)
            }

            function Salmonela(){
                var tarifSalmonela = document.getElementById('tarifSalmonela').value
                var jumlahSalmonela = document.getElementById('jumlahSalmonela').value
                
                var total = tarifSalmonela*jumlahSalmonela;

                var jumlahSalmonela = document.getElementById('totalSalmonela').value = total;
                totalBiaya(total)
            }

            function Jamur(){
                var tarifJamur = document.getElementById('tarifJamur').value
                var jumlahJamur = document.getElementById('jumlahJamur').value
                
                var total = tarifJamur*jumlahJamur;

                var jumlahJamur = document.getElementById('totalJamur').value = total;
                totalBiaya(total)
            }

            function KimiaFood(){
                var tarifKimiaFood = document.getElementById('tarifKimiaFood').value
                var jumlahKimiaFood = document.getElementById('jumlahKimiaFood').value
                
                var total = tarifKimiaFood*jumlahKimiaFood;

                var jumlahKimiaFood = document.getElementById('totalKimiaFood').value = total;
                totalBiaya(total)
            }
        </script>
    {{-- end pemeriksaan semple makanan/minuman/swab --}}

    <script>
        var totalBiayaPembayaran = 0
        function totalBiaya(total){
            totalBiaya = document.getElementById('totalBiaya').value
            var hasil = Number(totalBiaya) + total
            
            var totalBiaya = document.getElementById('totalBiaya').value = hasil
        }
    </script>
@endsection