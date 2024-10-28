<?php

namespace App\Http\Controllers;

use App\Models\testModel;
use Illuminate\Http\Request;

class fitur1Controller extends Controller
{
    public function saving(Request $saving)
    {
        // simpam gambar
        $imageNama = 'img-' . time() . '.' . $saving->gambar->extension();
        $saving->gambar->move(public_path('img'), $imageNama);

        $inputan = new testModel;
        $inputan->judul = $saving->judul;
        $inputan->isi = $saving->isi;
        $inputan->gambar = $imageNama;
        $inputan->save();
        return redirect('/show');
    }
    public function show()
    {
        $showData = testModel::get();
        return view('admin.fitur1.database', ['data' => $showData]);
    }
    public function edit($id)
    {
        $editing = testModel::where('id', '=', $id)->first();
        return view('admin.fitur1.edit', ['editData' => $editing]);
    }
    public function update(Request $update, $id)
    {
        // $updateNilai = testModel::find($id);
        // $updateNilai->update($update->all());
        $updateNilai = testModel::where('id', '=', $id)->first();
        $updateNilai->judul = $update->judul;
        $updateNilai->isi = $update->isi;
        if ($update->hasFile('gambar')) {
            // Delete the old image if it exists
            if ($updateNilai->gambar) {
                $oldImagePath = public_path('img/' . $updateNilai->gambar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and save the new image
            $imageNama = 'img-' . time() . '.' . $update->gambar->extension();
            $update->gambar->move(public_path('img'), $imageNama);
            $updateNilai->gambar = $imageNama;
        }
        $updateNilai->save();
        return redirect('/show');
    }
    public function delete($id)
    {
        $hapus = testModel::where('id', '=', $id)->delete();
        return redirect('/show');
    }
    public function publish($id)
    {
        $publish = testModel::where('id', '=', $id)->first();
        $publish->status = 'publish';
        $publish->save();
        return redirect('/show');
    }
    public function pending($id)
    {
        $pending = testModel::where('id', '=', $id)->first();
        // dd($pending);
        $pending->status = 'pending';
        $pending->save();
        return redirect('/show');
    }
    public function status(Request $request, $id)
    {

        $test = testModel::findOrFail($id);
        $request->validate([
            'status' => 'required'
        ]);
        $test->update([
            'status' => $request->status
        ]);
        return back();
    }
}
