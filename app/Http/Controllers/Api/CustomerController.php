<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
            'no_telepon' => 'required|min:12|max:12'
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
            'status' => 201,
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
                'status' => 400,
                'message' => 'Validasi Error.',
                'data' => $validator->errors()
            ], 400);
        }

        $customer = Customer::where('id', $id)->update($data);

        $updatedCustomer = Customer::find($id);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil mengupdate data customer.',
            'data' => $updatedCustomer
        ], 200);
    }

    public function destroy(string $id){
        $customer = Customer::destroy($id);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menghapus data customer.'
        ], 200);
    }

    public function getAll(Request $request)
    {
        $customers = Customer::all();

        if($customers->isEmpty()) {
            return response()->json([
                'status' => 404,
                'message' => 'Data customer tidak ditemukan.'
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil mendapatkan data customer.',
            'data' => $customers,
        ], 200);
    }

    public function getById(string $id)
    {
        try {
            $customer = Customer::findOrFail($id);
        } catch (ModelNotFoundException $ex) {
            return response()->json([
                'status' => 404,
                'message' => 'Data customer tidak ditemukan.',
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil mendapatkan data customer.',
            'data' => $customer
        ], 200);
    }
}
