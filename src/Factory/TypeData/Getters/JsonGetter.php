<?php


namespace Alyosha\Factory\TypeData\Getters;


use Alyosha\Factory\TypeData\TypeDateGetter;
use Alyosha\System\View;

class JsonGetter implements TypeDateGetter
{
	private $path;
	private $file;

	public function __construct(string $path)
	{
		$this->path = $path;
	}

	public function getData() {
		$this->file = file_get_contents($this->path);
	}

	public function processData() {
		$this->data = json_decode($this->file);
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