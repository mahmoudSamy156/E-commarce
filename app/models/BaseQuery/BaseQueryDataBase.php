<?php 
namespace App\Models\BaseQuery;

use App\DataBase\DataBaseHandler;

class BaseQueryDataBase{

    const DATA_TYPE_BOOL = \PDO::PARAM_BOOL;
    const DATA_TYPE_STR = \PDO::PARAM_STR;
    const DATA_TYPE_INT = \PDO::PARAM_INT;
    const DATA_TYPE_DECIMAL = 4;
    const DATA_TYPE_DATE = 5;

    const VALIDATE_DATE_STRING = '/^[1-2][0-9][0-9][0-9]-(?:(?:0[1-9])|(?:1[0-2]))-(?:(?:0[1-9])|(?:(?:1|2)[0-9])|(?:3[0-1]))$/';

    public function getAll(){
        
        $sql = "SELECT * FROM ".static::$table;
        $query = DataBaseHandler::factory()->prepare($sql);
        $query->execute();
        $query->fetchAll();
        
    }





}