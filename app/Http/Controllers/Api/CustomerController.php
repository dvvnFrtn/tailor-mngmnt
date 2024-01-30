<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function create(Request $request)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;
        $no_telepon = $request->no_telepon;

        $data = [
            'nama' => $nama,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon
        ];

        $rules = [
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required'
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return response()->json([
                'message' => 'Validasi Error.',
                'data' => $validator->errors()
            ], 400);
        }

        $customer = Customer::create($data);

        return response()->json([
            'message' => 'Berhasil menambahkan data customer.',
            'data' => $customer
        ], 201);

    }

    public function update(Request $request, string $id){
        $nama = $request->nama;
        $alamat = $request->alamat;
        $no_telepon = $request->no_telepon;

        $data = [
            'nama' => $nama,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon
        ];

        $rules = [
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required|min:12|max:12'
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return response()->json([
                'message' => 'Validasi Error.',
                'data' => $validator->errors()
            ], 400);
        }

        $customer = Customer::where('id', $id)->update($data);

        $updatedCustomer = Customer::find($id);

        return response()->json([
            'message' => 'Berhasil mengupdate data customer.',
            'data' => $updatedCustomer
        ], 200);
    }
}
