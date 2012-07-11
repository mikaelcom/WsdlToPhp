<?php
/**
 * Class file for EccConvertChineseTypeGetUnicodeResponse
 * @date 03/07/2012
 */
/**
 * Class EccConvertChineseTypeGetUnicodeResponse
 * @date 03/07/2012
 */
class EccConvertChineseTypeGetUnicodeResponse extends EccConvertChineseWsdlClass
{
	/**
	 * The GetUnicodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccConvertChineseTypeConverter
	 */
	public $GetUnicodeResult;
	/**
	 * Constructor
	 * @param EccConvertChineseTypeConverter GetUnicodeResult
	 * @return EccConvertChineseTypeGetUnicodeResponse
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
	 * @return EccConvertChineseTypeConverter
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