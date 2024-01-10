<?php

namespace App\Classes;

use Google\Cloud\BigQuery\BigQueryClient;

class BigQuery {
  public $table;

  public function __construct() {
    $bigQuery = new BigQueryClient([
        'keyFilePath' => __DIR__ . '/../../bbds-401119-e2a52190d13a.json',
    ]);

    $dataset = $bigQuery->dataset('bbds23');
    $this->table['volunteer_registration'] = $dataset->table('volunteer_registration');
  }
}