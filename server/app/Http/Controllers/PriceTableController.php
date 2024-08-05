<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;


use App\Models\PriceTable;

class PriceTableController extends Controller
{
    public function getData(Request $request)
    {
        $tableName = $request->input('table_name'); // Nazwa tabeli, którą chcesz zaimportować

        // Sprawdź, czy nazwa tabeli została podana
        if (!$tableName) {
            return response()->json(['error' => 'Table name is required'], 400);
        }

        // Validate the table name to prevent SQL injection
        if (!Schema::hasTable($tableName)) {
            return response()->json(['error' => 'Table does not exist'], 400);
        }

        try {
            // Pobierz dane z odpowiedniej tabeli
            $data = PriceTable::selectTable($tableName)->get();

            $result = $data->map(function ($item) {
                return [
                    'quarter' => $item->Kwartal,
                    'prices' => [
                        'Bialystok' => $item->Bialystok,
                        'Bydgoszcz' => $item->Bydgoszcz,
                        'Gdansk' => $item->Gdansk,
                        'Gdynia' => $item->Gdynia,
                        'Katowice' => $item->Katowice,
                        'Kielce' => $item->Kielce,
                        'Krakow' => $item->Krakow,
                        'Lublin' => $item->Lublin,
                        'Lodz' => $item->Lodz,
                        'Olsztyn' => $item->Olsztyn,
                        'Opole' => $item->Opole,
                        'Poznan' => $item->Poznan,
                        'Rzeszow' => $item->Rzeszow,
                        'Szczecin' => $item->Szczecin,
                        'Warszawa' => $item->Warszawa,
                        'Wroclaw' => $item->Wroclaw,
                        'ZielonaGora' => $item->{'Zielona Gora'},
                        '7_miast' => $item->{'7 miast'},
                        '10_miast' => $item->{'10 miast'},
                        '6_miast_bez_Warszawy' => $item->{'6  miast bez Warszawy'},
                        '9_miast' => $item->{'9 miast'}
                    ]
                ];
            });

            // Zwróć dane w formie JSON lub przetwórz je w inny sposób
            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getDataInRange(Request $request)
    {
        $tableName = $request->input('table_name'); // Nazwa tabeli, którą chcesz zaimportować
        $startDate = $request->input('start_date'); // Data początkowa
        $endDate = $request->input('end_date'); // Data końcowa

        // Sprawdź, czy wszystkie wymagane parametry zostały podane
        if (!$tableName || !$startDate || !$endDate) {
            return response()->json(['error' => 'Table name, start date, and end date are required'], 400);
        }

        // Validate the table name to prevent SQL injection
        if (!Schema::hasTable($tableName)) {
            return response()->json(['error' => 'Table does not exist'], 400);
        }

        try {
            // Pobierz dane z odpowiedniej tabeli z przedziału czasowego
            $data = PriceTable::getDataWithinDateRange($tableName, $startDate, $endDate);

            $result = $data->map(function ($item) {
                return [
                    'quarter' => $item->Kwartal,
                    'prices' => [
                        'Bialystok' => $item->Bialystok,
                        'Bydgoszcz' => $item->Bydgoszcz,
                        'Gdansk' => $item->Gdansk,
                        'Gdynia' => $item->Gdynia,
                        'Katowice' => $item->Katowice,
                        'Kielce' => $item->Kielce,
                        'Krakow' => $item->Krakow,
                        'Lublin' => $item->Lublin,
                        'Lodz' => $item->Lodz,
                        'Olsztyn' => $item->Olsztyn,
                        'Opole' => $item->Opole,
                        'Poznan' => $item->Poznan,
                        'Rzeszow' => $item->Rzeszow,
                        'Szczecin' => $item->Szczecin,
                        'Warszawa' => $item->Warszawa,
                        'Wroclaw' => $item->Wroclaw,
                        'Zielona Gora' => $item->{'Zielona Gora'},
                        '7 miast' => $item->{'7 miast'},
                        '10 miast' => $item->{'10 miast'},
                        '6 miast bez Warszawy' => $item->{'6 miast bez Warszawy'},
                        '9 miast' => $item->{'9 miast'}
                    ]
                ];
            });


            // Zwróć dane w formie JSON
            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getCityData(Request $request)
    {
        $tableName = $request->input('table_name'); // Nazwa tabeli
        $city = $request->input('city'); // Nazwa miasta

        // Sprawdź, czy nazwa tabeli i miasta została podana
        if (!$tableName || !$city) {
            return response()->json(['error' => 'Table name and city are required'], 400);
        }

        // Validate the table name to prevent SQL injection
        if (!Schema::hasTable($tableName)) {
            return response()->json(['error' => 'Table does not exist'], 400);
        }

        try {
            // Pobierz ceny dla danego miasta z odpowiedniej tabeli
            $data = PriceTable::getCityPrices($tableName, $city);

            // Zwróć dane w formie JSON
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getCityDataInRange(Request $request)
    {
        $tableName = $request->input('table_name'); // Nazwa tabeli
        $city = $request->input('city'); // Nazwa miasta
        $startDate = $request->input('start_date'); // Data początkowa
        $endDate = $request->input('end_date'); // Data końcowa

        // Sprawdź, czy wszystkie wymagane parametry zostały podane
        if (!$tableName || !$city || !$startDate || !$endDate) {
            return response()->json(['error' => 'Table name, city, start date, and end date are required'], 400);
        }

        // Validate the table name to prevent SQL injection
        if (!Schema::hasTable($tableName)) {
            return response()->json(['error' => 'Table does not exist'], 400);
        }

        try {
            // Check if the city column exists in the table
            $instance = PriceTable::selectTable($tableName);
            if (!Schema::hasColumn($tableName, $city)) {
                return response()->json(['error' => "Column $city does not exist in the table $tableName"], 400);
            }

            // Pobierz ceny dla danego miasta z odpowiedniej tabeli w przedziale czasowym
            $data = PriceTable::getCityPricesWithinDateRange($tableName, $city, $startDate, $endDate);

            $formattedData = [];
            foreach ($data as $item) {
                $formattedData[] = [
                    'quarter' => $item->Kwartal,
                    'price' => $item->$city // Zmieniamy klucz na 'price'
                ];
            }

            // Zwróć dane w formie JSON
            return response()->json($formattedData);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
