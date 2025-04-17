<?php

namespace App\Http\Controllers;
use App\Models\Password;
use Illuminate\Http\Request;


class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data = Password::all();

       return response()->json($data, 201);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function teste()
     {
         return view('dunga-burro');
     }

     
    public function store(Request $request)
    {

        $lastPassword =  Password::where('status', false)
        ->orderBy('password', 'desc')
        ->first();

        if (!$lastPassword) {
            $passrodValue = 1;
        } else {
            $passrodValue = $lastPassword->password + 1;
        }

        $data = Password::create([
            'password' => $passrodValue,
            'status' => false,
        ]);

    

        return response()->json($data, 201);

        // return view('dunga-burro', compact(['data']) );
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
   // Busca a última senha com status true (atendida), ordenando pela mais recente
   $ultimaSenha = Password::where('status', true)
   ->orderBy('updated_at', 'desc')
   ->first();

    if (!$ultimaSenha) {
    return response()->json([
    'success' => false,
    'message' => 'Nenhuma senha foi chamada ainda'
    ], 404);
    }

    return response()->json([
    'success' => true,
    'message' => 'Agora é o número ' . $ultimaSenha->numero,
    'data' => [
    'numero' => $ultimaSenha->numero,
    'hora_chamada' => $ultimaSenha->updated_at->format('H:i:s')
    ]
    ]);
}


    

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
            // Encontra a primeira senha não atendida (status = false)
            $proximaSenha = Password::where('status', false)
            ->orderBy('created_at', 'asc')
            ->first();
      
              if (!$proximaSenha) {
              return response()->json([
              'message' => 'Não há senhas disponíveis para chamar'
              ], 404);
              }
      
              // Atualiza o status para atendido (true)
              $proximaSenha->update(['status' => true]);
      
              return response()->json([
              'message' => 'Senha chamada com sucesso',
              'senha' => $proximaSenha
              ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Password $password)
    {
        //
    }
}
