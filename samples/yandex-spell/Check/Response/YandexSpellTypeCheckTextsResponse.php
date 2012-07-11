<?php
/**
 * Class file for YandexSpellTypeCheckTextsResponse
 * @date 10/07/2012
 */
/**
 * Class YandexSpellTypeCheckTextsResponse
 * @date 10/07/2012
 */
class YandexSpellTypeCheckTextsResponse extends YandexSpellWsdlClass
{
	/**
	 * The ArrayOfSpellResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YandexSpellTypeArrayOfSpellResult
	 */
	public $ArrayOfSpellResult;
	/**
	 * Constructor
	 * @param YandexSpellTypeArrayOfSpellResult ArrayOfSpellResult
	 * @return YandexSpellTypeCheckTextsResponse
	 */
	public function __construct($_ArrayOfSpellResult)
	{
		parent::__construct(array('ArrayOfSpellResult'=>new YandexSpellTypeArrayOfSpellResult($_ArrayOfSpellResult)));
	}
	/**
	 * Set ArrayOfSpellResult
	 * @param ArrayOfSpellResult ArrayOfSpellResult
	 * @return ArrayOfSpellResult
	 */
	public function setArrayOfSpellResult($_ArrayOfSpellResult)
	{
		return ($this->ArrayOfSpellResult = $_ArrayOfSpellResult);
	}
	/**
	 * Get ArrayOfSpellResult
	 * @return YandexSpellTypeArrayOfSpellResult
	 */
	public function getArrayOfSpellResult()
	{
		return $this->ArrayOfSpellResult;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>