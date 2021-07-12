<?php


namespace Alyosha\Factory\TypeData;


abstract class TypeDataTable
{
	abstract public function getTypeData();

	public function displayOwnTable() {
		$typeData = $this->getTypeData();

		$typeData->getData();
		$typeData->processData();
		$typeData->displayTable();
	}

	public function takeData() {
		$typeData = $this->getTypeData();

		$typeData->getData();
		$typeData->processData();

		return $typeData->takeData();
	}
}