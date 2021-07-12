<?php


namespace Alyosha\Action;


use Alyosha\Factory\TypeData\Tables\CsvTable;

class CsvAction
{
	public function __invoke()
	{
		$csvTable = new CsvTable('d:/OpenServer/domains/abis.loc/storage/to_upload.csv');

		$csvTable->displayOwnTable();
	}
}