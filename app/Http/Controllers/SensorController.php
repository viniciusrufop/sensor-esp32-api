<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Sensor;
use Exception;

class SensorController extends Controller
{
  public function __construct()
  {
  }

  public function create(Request $request)
  {
    try{
      $validator = Validator::make( $request->all(),
        [
          'name'  => 'required',
          'value' => 'required'
        ]);
      if ($validator->fails()) { throw new Exception($validator->errors()); }

      Sensor::create($request->all());
      
      return response()->json(["result" => 'Dados salvos com sucesso.', "success" => true], 200);
    } catch (Exception $e) {
      return response()->json(['message' => $e->getMessage(), 'success' => false], 400);
    }
  }

  public function get(Request $request)
  {
    try{
      $result = Sensor::get();

      return response()->json(["result" => $result, "success" => true], 200);
    } catch (Exception $e) {
      return response()->json(['message' => $e->getMessage(), 'success' => false], 400);
    }
  }

  public function deleteAll(Request $request)
  {
    try{
      $result = Sensor::query()->delete();

      return response()->json(["result" => $result, "success" => true], 200);
    } catch (Exception $e) {
      return response()->json(['message' => $e->getMessage(), 'success' => false], 400);
    }
  }

}
