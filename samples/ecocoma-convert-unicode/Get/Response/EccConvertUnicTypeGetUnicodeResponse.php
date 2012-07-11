<?php
/**
 * Class file for EccConvertUnicTypeGetUnicodeResponse
 * @date 03/07/2012
 */
/**
 * Class EccConvertUnicTypeGetUnicodeResponse
 * @date 03/07/2012
 */
class EccConvertUnicTypeGetUnicodeResponse extends EccConvertUnicWsdlClass
{
	/**
	 * The GetUnicodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccConvertUnicTypeConverter
	 */
	public $GetUnicodeResult;
	/**
	 * Constructor
	 * @param EccConvertUnicTypeConverter GetUnicodeResult
	 * @return EccConvertUnicTypeGetUnicodeResponse
	 */
	public function __construct($_GetUnicodeResult = null)
	{
		parent::__construct(array('GetUnicodeResult'=>$_GetUnicodeResult));
	}
	/**
	 * Set GetUnicodeResult
	 * @param Converter GetUnicodeResult
	 * @return Converter
	 */
	public function setGetUnicodeResult($_GetUnicodeResult)
	{
		return ($this->GetUnicodeResult = $_GetUnicodeResult);
	}
	/**
	 * Get GetUnicodeResult
	 * @return EccConvertUnicTypeConverter
	 */
	public function getGetUnicodeResult()
	{
		return $this->GetUnicodeResult;
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