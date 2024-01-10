<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use Google\Cloud\BigQuery\BigQueryClient;


class TestController extends Controller
{
   
    public function volunteer_register()
    {
//        echo 'hello';exit;
       
        
        $email = 'test';        

        $bigQuery = new BigQueryClient([
            'keyFilePath' => __DIR__ . '/../../../../bbds-401119-e2a52190d13a.json',
            'projectId' => 'bbds-401119'
        ]);
        $dataset = $bigQuery->dataset('bbds23');
        $table = $dataset->table('volunteer_registration');
        
        $record = [
            'email' => $email
        ];

        $resInsert =  $table->insertRows([
            ['data' => $record],
        ]);

        return json_encode($resInsert->isSuccessful());
    }

}

