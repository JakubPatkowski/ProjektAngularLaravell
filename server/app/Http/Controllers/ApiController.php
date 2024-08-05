<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DOMDocument;
//zmienić nazwę na InterestRateConroller

class ApiController extends Controller
{
    public function getInterestRates()
    {
        // Ścieżka do pliku XML
        $path = storage_path('app/public/datasets/stopy_procentowe.xml');

        // Wczytaj plik XML
        $doc = new DOMDocument();
        $doc->load($path);

        // Przetwarzaj plik XML
        $root = $doc->documentElement;
        $data = [];

        foreach ($root->getElementsByTagName('pozycje') as $pozycje) {
            $obowiazuje_od = $pozycje->getAttribute('obowiazuje_od');
            $oprocentowanie = $pozycje->getAttribute('oprocentowanie');



            $data[] = [
                'obowiazuje_od' => $obowiazuje_od,
                'oprocentowanie' => $oprocentowanie
            ];
        }

        return response()->json($data);
    }
}
