<?php

namespace App\Http\Controllers;

use App\Models\Conversion;
use App\Models\ConversionFile;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConversionController extends Controller
{
  public function index(): View
  {
    return view('processed.conversions.index');
  }

  public function store(Request $request)
  {
    $request->validate([
      'files' => 'required|array',
      'files.*' => 'required|file|max:102400|mimes:png,jpeg,webp,avif,gif,doc,pdf,docx',
      'convert_to' => 'required|array',
      'convert_to.*' => 'in:jpg,png,webp,pdf,docx',
    ]);

    $conversion = Conversion::create([
      'user_id' => auth()->id(),
      'status' => 'pending',
    ]);

    foreach ($request->file('files') as $index => $file) {
      $path = $file->store('files', 'public');

      $fileRecord = File::create([
        'user_id' => auth()->id(),
        'name' => $file->getClientOriginalName(),
        'path' => $path,
        'mime_type' => $file->getClientOriginalExtension(),
        'size' => $file->getSize(),
      ]);

      foreach ($request->convert_to[$index] as $format) {
        ConversionFile::create([
          'conversion_id' => $conversion->id,
          'file_id' => $fileRecord->id,
          'converted_format' => $format,
          'status' => 'pending',
        ]);
      }
    }

    return response()->json([
      'message' => 'Conversão iniciada!',
      'conversion_id' => $conversion->id,
    ]);
  }
}
