<?php

namespace Alyosha\Action;

use Alyosha\Factory\TypeData\Tables\CsvTable;
use Alyosha\Factory\TypeData\Tables\JsonTable;
use Alyosha\System\View;

class MainAction
{
    public function __invoke()
    {
	    $jsonTable = new JsonTable('d:/OpenServer/domains/abis.loc/storage/to_upload.json');
	    $json = $jsonTable->takeData();

	    $csvTable = new CsvTable('d:/OpenServer/domains/abis.loc/storage/to_upload.csv');
	    $csv = $csvTable->takeData();

	    return View::render('main',
	        [
	            'data' => array_merge($csv, $json)
	        ]
	    );
    }
}