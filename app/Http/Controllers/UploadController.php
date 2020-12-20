<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request; 
    use Illuminate\Support\Facades\Storage;

    class UploadController extends Controller
    {
        public function getForm()
        {
            return view('home');
        }

        public function upload(Request $request)
        {
            foreach ($request->file() as $file) {
                foreach ($file as $f) {
					// $name_user =(String) (Auth::user()->name);
					die(var_dump(auth()->user()));
					$name_user = "Test";
					Storage::makeDirectory($name_user);
					//Storage::makeDirectory("Test");
						$f->move(storage_path($name_user), time().'_'.$f->getClientOriginalName());
                }
            }
            return "Успех";
        }
    }