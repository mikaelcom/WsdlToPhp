<?php
/**
 * Class file for EccConvertCsharpTypeGetCsharpResponse
 * @date 03/07/2012
 */
/**
 * Class EccConvertCsharpTypeGetCsharpResponse
 * @date 03/07/2012
 */
class EccConvertCsharpTypeGetCsharpResponse extends EccConvertCsharpWsdlClass
{
	/**
	 * The GetCsharpResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccConvertCsharpTypeConverter
	 */
	public $GetCsharpResult;
	/**
	 * Constructor
	 * @param EccConvertCsharpTypeConverter GetCsharpResult
	 * @return EccConvertCsharpTypeGetCsharpResponse
	 */
	public function __construct($_GetCsharpResult = null)
	{
		parent::__construct(array('GetCsharpResult'=>$_GetCsharpResult));
	}
	/**
	 * Set GetCsharpResult
	 * @param Converter GetCsharpResult
	 * @return Converter
	 */
	public function setGetCsharpResult($_GetCsharpResult)
	{
		return ($this->GetCsharpResult = $_GetCsharpResult);
	}
	/**
	 * Get GetCsharpResult
	 * @return EccConvertCsharpTypeConverter
	 */
	public function getGetCsharpResult()
	{
		return $this->GetCsharpResult;
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