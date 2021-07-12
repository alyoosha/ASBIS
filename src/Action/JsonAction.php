<?php


namespace Alyosha\Action;


use Alyosha\Factory\TypeData\Tables\JsonTable;

class JsonAction
{
	public function __invoke()
	{
		$jsonTable = new JsonTable('d:/OpenServer/domains/abis.loc/storage/to_upload.json');

		$jsonTable->displayOwnTable();
	}
}