<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
	public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
	{
		$name = !is_null($filename) ? $filename : mt_rand(25);

		$file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

		return $file;
	}

	public function unlinkImage($old_image_path)
	{
		if(File::exists($old_image_path)) {
			File::delete($old_image_path);
		}
	}
}