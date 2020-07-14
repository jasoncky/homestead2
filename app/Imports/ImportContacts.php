<?php

namespace App\Imports;

use App\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ImportContacts implements ToModel, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Contact([
            'first_name' => $row[0],
			'last_name' => $row[1],
			'email' => $row[2],
        ]);
    }
	
	public function batchSize(): int
    {
        return 1000;
    }
	
	public function chunkSize(): int
    {
        return 1000;
    }
}
