<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\PacienteImage;
use Illuminate\Http\Request;

class PacienteImageController extends Controller
{
	/**
	 * [store description]
	 * @param   Request   $request   [$request description]
	 * @param   Paciente  $paciente  [$paciente description]
	 * @return  [type]               [return description]
	 */
	public function store(Request $request, Paciente $paciente)
	{
		if ($request->hasFile('image')) {
			$request->validate([
				'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);

			$imageName = "/img/paciente/{$paciente->id}/{$request->image->getClientOriginalName()}";
			$request->image->move(base_path("/img/paciente/{$paciente->id}/"), $imageName);

			$image = new PacienteImage();
			$image->url_img = $imageName;
			$paciente->images()->save($image);

			session()->flash('message_success', "Imagen Agregada");
			return back();
		}
	}

	/**
	 * [delete description]
	 * @param   PacienteImage  $PacienteImage  [$PacienteImage description]
	 * @return  [type]                         [return description]
	 */
	public function delete(PacienteImage $PacienteImage)
	{
		\File::delete(base_path($PacienteImage->url_img));
		$PacienteImage->delete();

		session()->flash('message_danger', "Imagen Borrada");
		return back();
	}
}
