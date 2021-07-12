<?php


namespace Alyosha\Factory\TypeData\Tables;


use Alyosha\Factory\TypeData\Getters\CsvGetter;
use Alyosha\Factory\TypeData\TypeDateGetter;
use Alyosha\Factory\TypeData\TypeDataTable;

class CsvTable extends TypeDataTable
{
	private $path;

	public function __construct(string $path)
	{
		$this->path = $path;
	}

	public function getTypeData(): TypeDateGetter
	{
		return new CsvGetter($this->path);
	}
}