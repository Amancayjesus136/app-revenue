<?php

namespace App\Models\mongodb;

use MongoDB\Client;

class Pendientes
{
    protected $collection;

    public function __construct()
    {
        $client = new Client(env('DB_DSN', 'mongodb://127.0.0.1:27017'));
        $database = $client->selectDatabase(env('DB_DATABASE', 'bd_app'));
        $this->collection = $database->selectCollection('pendientes');
    }

    public function countWhere($field, $value)
    {
        return $this->collection->countDocuments([$field => $value]);
    }

    public function sumWhere($field, $value, $sumField)
    {
        $result = $this->collection->aggregate([
            ['$match' => [$field => $value]],
            ['$group' => ['_id' => null, 'total' => ['$sum' => '$' . $sumField]]]
        ])->toArray();

        return $result[0]['total'] ?? 0;
    }
}
