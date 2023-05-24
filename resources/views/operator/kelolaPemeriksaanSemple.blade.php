@extends('templete.base')
@section('content')
    <main class="p-10 space-y-10">
        <a href="/tambah/PemeriksaanSemple">
            <button class="btn btn-outline btn-accent py-2.5">+</button>
        </a>
        <div class="overflow-x-auto">
            <table class="table w-full">
              <!-- head -->
              <thead>
                <tr>
                  <th>Nama Customer</th>
                  <th>Alamat</th>
                  <th>Tanggal Registrasi</th>
                  <th>Total Biaya</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <!-- row 1 -->
                @forelse ($dataCustomer as $getDataCustomer)
                    <tr>
                        <th>{{ $getDataCustomer->namaCustomer }}</th>
                        <td>{{ $getDataCustomer->alamatCustomer }}</td>
                        <td>{{ $getDataCustomer->tanggalRegistrasi }}</td>
                        <td>{{ $getDataCustomer->TotalBiaya }}</td>
                        <td>
                            <a href={{ "/edit/PemeriksaanSemple/".$getDataCustomer->id }}>
                                <button class="btn btn-outline btn-accent py-2.5">edit</button>
                            </a>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
              </tbody>
            </table>
          </div>
    </main>
@endsection