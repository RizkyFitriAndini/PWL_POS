<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload() {
        return view('file-upload');
    }
    public function fileUploadRename() 
    {
      return view('file-upload-rename');
    }
    public function prosesFileUpload(Request $request) {
        $request->validate([
            'berkas'=>'required|file|image|max:500',]);
            $extfile =  $request->berkas->getClientOriginalName();
            $namaFile = 'web-'.time().".".$extfile;

            $path = $request->berkas->move('public',$namaFile);
            $path =  str_replace("\\","//",$path);
            echo "Variabel path berisi:$path <br>";
            
            $pathBaru = asset('gambar/'.$namaFile);
            echo "Proses upload berhasil, data disimpan pada: $path";
            echo "<br>";
            echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
    }
}
