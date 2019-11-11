<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Paciente, Comentario};

class ComentarioController extends Controller
{
	/**
	 * [get description]
	 *
	 * @param   Comentario  $comentario  [$comentario description]
	 *
	 * @return  [type]                   [return description]
	 */
	public function get(Comentario $comentario)
	{
		return response()->json([
			'comentario' => $comentario
		]);
	}

	/**
	 * [store description]
	 *
	 * @param   Request   $request   [$request description]
	 * @param   Paciente  $paciente  [$paciente description]
	 *
	 * @return  [type]               [return description]
	 */
	public function store(Request $request, Paciente $paciente)
	{
		$paciente->comentarios()->save(new Comentario($request->all()));

		session()->flash('message_success', "Comentario agregado");
		return back();
	}

	/**
	 * [update description]
	 *
	 * @param   Request     $request     [$request description]
	 * @param   Comentario  $comentario  [$comentario description]
	 *
	 * @return  [type]                   [return description]
	 */
	public function update(Request $request, Comentario $comentario)
	{
		$comentario->update($request->all());

		session()->flash('message_success', "Comentario actualizado");
		return back();
	}

	/**
	 * [delete description]
	 *
	 * @param   Comentario  $comentario  [$comentario description]
	 *
	 * @return  [type]                   [return description]
	 */
	public function delete(Comentario $comentario)
	{
		$comentario->delete();

		session()->flash('message_success', "Comentario borrado");
		return back();
	}
}
