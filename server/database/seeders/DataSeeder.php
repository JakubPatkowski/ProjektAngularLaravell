<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Csv\Reader;
use Illuminate\Support\Facades\DB;



class DataSeeder extends Seeder
{
    public function run()
    {
        $this->seedTableFromCsv('rynek_pierwotny_ceny_ofertowe', database_path('seeders/data/RynekPierwotnyCenyOfertowe.csv'));
        $this->seedTableFromCsv('rynek_pierwotny_ceny_transakcyjne', database_path('seeders/data/RynekPierwotnyCenyTransakcyjne.csv'));
        $this->seedTableFromCsv('rynek_wtorny_ceny_ofertowe', database_path('seeders/data/RynekWtornyCenyOfertowe.csv'));
        $this->seedTableFromCsv('rynek_wtorny_ceny_transakcyjne', database_path('seeders/data/RynekWtornyCenyTransakcyjne.csv'));
    }

    private function seedTableFromCsv($tableName, $filePath)
    {
        $csv = Reader::createFromPath($filePath, 'r');
        $csv->setHeaderOffset(0); // Ustawienie pierwszego wiersza jako nagłówki
        $records = $csv->getRecords();
        $data = [];
        foreach ($records as $record) {
            $data[] = $record;
        }
        DB::table($tableName)->insert($data);
    }
}
