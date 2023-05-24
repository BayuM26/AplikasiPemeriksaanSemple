<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index(){
        return view('operator.berandaOperator',[
            'title' => 'Beranda'
        ]);
    }

    public function tampilKelolaPemeriksaan(){
        $dataHistoryCustomer = Customer::paginate(10);
        return view('operator.kelolaPemeriksaanSemple',[
            'title' => 'pemeriksaan Semple',
            'dataCustomer' => $dataHistoryCustomer,
        ]);
    }

    public function tambahPemeriksaaanSemple(){
        return view('operator.TambahPemeriksaanSample',[
            'title' => 'Tambah Pemeriksaan Semple'
        ]);
    }

    public function editData($id){
        $dataCustomer = Customer::where('id',$id)->get();

        foreach($dataCustomer as $getDataCustomer){
            $idUser = $getDataCustomer->user_id;
            $id = $getDataCustomer->id;
            $namaCustomer = $getDataCustomer->namaCustomer;
            $alamat = $getDataCustomer->alamatCustomer;
            $tanggalRegis = $getDataCustomer->tanggalRegistrasi;
            $airminum = $getDataCustomer->airMinum;
            $airbersih = $getDataCustomer->airBersih;
            $airlimbah = $getDataCustomer->airLimbahRs;
            $airsungai = $getDataCustomer->airSungai;
            $airkolamrenang = $getDataCustomer->airKolamRenang;
            $ecoli = $getDataCustomer->EColi;
            $salmonella = $getDataCustomer->Salmonella;
            $jamur = $getDataCustomer->jamur;
            $kimiafood = $getDataCustomer->KimiaFood;
            $total = $getDataCustomer->TotalBiaya;
        }
    
        $dataUser = User::all()->where('id',$idUser);
        foreach($dataUser as $getDataUser){
            $penerima = $getDataUser->namaOpertator;
        }
        return view('operator.editdataPemeriksaan',[
            'title' => 'Tambah Pemeriksaan Semple',
            'id' => $id,
            'penerima' => $penerima,
            'namaCustomer' => $namaCustomer ,
            'alamatCustomer' => $alamat ,
            'tanggalRegistrasi' => $tanggalRegis ,
            'airMinum' => $airminum ,
            'airBersih' => $airbersih ,
            'airLimbahRs' => $airlimbah ,
            'airSungai' => $airsungai ,
            'airKolamRenang' => $airkolamrenang ,
            'EColi' => $ecoli ,
            'Salmonella' => $salmonella ,
            'jamur' => $jamur ,
            'KimiaFood' => $kimiafood ,
            'TotalBiaya' => $total,
        ]);
    }

    public function created(Request $request){
        $request->validate([
            'namaCustomer' => 'required',
            'alamatCustomer' => 'required',
            'TotalBiaya' => 'required',
        ]);
        Customer::create([
            'user_id' => auth()->user()->id,
            'namaCustomer' => $request->namaCustomer,
            'alamatCustomer' => $request->alamatCustomer,
            'tanggalRegistrasi' => date('Y-m-d'),
            'airMinum' => $request->totalAirMinum,
            'airBersih' => $request->totalAirBersih,
            'airLimbahRs' => $request->totalAirLimbahRs,
            'airSungai' => $request->totalAirSungai,
            'airKolamRenang' => $request->totalAirKolam,
            'EColi' => $request->totalEColi,
            'Salmonella' => $request->totalSalmonela,
            'jamur' => $request->totalJamur,
            'KimiaFood' => $request->totalKimiaFood,
            'TotalBiaya' => $request->TotalBiayaPemeriksaan,
        ]);

        return redirect()->back();
    }

    public function updateData(Request $request, $id){
     
        Customer::where('id',$id)->update([
            'namaCustomer' => $request->namaCustomer,
            'alamatCustomer' => $request->alamatCustomer,
            'airMinum' => $request->totalAirMinum,
            'airBersih' => $request->totalAirBersih,
            'airLimbahRs' => $request->totalAirLimbahRs,
            'airSungai' => $request->totalAirSungai,
            'airKolamRenang' => $request->totalAirKolam,
            'EColi' => $request->totalEColi,
            'Salmonella' => $request->totalSalmonela,
            'jamur' => $request->totalJamur,
            'KimiaFood' => $request->totalKimiaFood,
            'TotalBiaya' => $request->TotalBiayaPemeriksaan,
        ]);

        return redirect()->back();
    }
}
