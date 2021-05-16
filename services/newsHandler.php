<?php


namespace App\Services\news;

use App\Services\DBConnector;

/**
 * @var $newsData
 */
//require_once('../services/DBConnector.php');
//require_once('../data/newsData.php');

class newsHandler
{

    public function timeFix(array $newsData): array
    {
        for ($i = 0; $i < count($newsData); $i++) {
            $newsData[$i]['timesTamp'] = '10 часов назад';
            unset($newsData[$i]['created_at']);
        }

        return $newsData;
    }

    public function labelFix(array $newsData): array
    {
        for ($i = 0; $i < count($newsData); $i++) {
            $newsData[$i]['label'] = 'Новости';
        }

        return $newsData;
    }
}

//$dbConnect = new DBConnector('evosol', 'root', '');
//
//$newsData = $dbConnect->select()
//    ->from('news')
////    ->where('id = :id', ['id' => 2])
////    ->limit(1)
//    ->all();
//
//var_dump($newsData);