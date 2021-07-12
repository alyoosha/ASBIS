<?php


namespace Alyosha\Factory\TypeData\Getters;


use Alyosha\Factory\TypeData\TypeDateGetter;
use Alyosha\System\View;

class CsvGetter implements TypeDateGetter
{
	private $path;
	private $file;
	private $data;

	public function __construct(string $path)
	{
		$this->path = $path;
	}

	public function getData() {
		$this->file = fopen($this->path, 'r');
	}

	public function processData() {
		$i = 0;

		while (($data = fgetcsv($this->file)) !== false) {
			$num = count($data);

			for ($c=0; $c < $num; $c++) {
				if(!empty($data[$c])) $this->data[$i][$c] = $data[$c];
			}

			++$i;
		}
	}

	public function takeData() {
		return $this->data;
	}

	public function displayTable() {
		return View::render('main',
			[
				'data' => $this->data
			]
		);
	}
}