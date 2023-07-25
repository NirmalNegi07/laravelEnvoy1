<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnvoyController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function triggerEnvoy(Request $request)
    {
        // Replace 'path/to/your/envoy.blade.php' with the actual path to your Envoy file.
        $envoyFile = 'Envoy.blade.php';
        // $localFolderPath = $request->input('local_folder_path');
        
        // Use the exec function to run the envoy command.
        $out = exec("php vendor/bin/envoy run setup-uat-project_a");
        dd($out);

        // Process the output or logs for further display or storage.
        // $logs = implode(PHP_EOL, $output);
        // dd($logs);

        // if ($exitCode === 0) {
        //     return redirect()->back()->with('success', 'Envoy task triggered successfully!');
        // } else {
        //     return redirect()->back()->with('error', 'Error executing Envoy task: ' . $logs);
        // }
    }
}
