<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadRenameController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload-rename');
    }
    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'nama_berkas' => 'required|alpha_dash',
            'berkas' => 'required|file|image|max:500',
        ]);

        $namaFile = $request->nama_berkas . "." . $request->berkas->extension();

        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\", "//", $path);

        $pathBaru = asset('gambar/' . $namaFile);
        echo "Gambar berhasil diupload ke <a href='$pathBaru'>$namaFile</a>";
        echo "<br><br>";
        echo "<img src='$pathBaru' style='width: 50vw; height: auto'>";
    }
}