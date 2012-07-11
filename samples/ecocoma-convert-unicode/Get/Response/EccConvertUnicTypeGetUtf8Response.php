<?php
/**
 * Class file for EccConvertUnicTypeGetUtf8Response
 * @date 03/07/2012
 */
/**
 * Class EccConvertUnicTypeGetUtf8Response
 * @date 03/07/2012
 */
class EccConvertUnicTypeGetUtf8Response extends EccConvertUnicWsdlClass
{
	/**
	 * The GetUtf8Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccConvertUnicTypeConverter
	 */
	public $GetUtf8Result;
	/**
	 * Constructor
	 * @param EccConvertUnicTypeConverter GetUtf8Result
	 * @return EccConvertUnicTypeGetUtf8Response
	 */
	public function __construct($_GetUtf8Result = null)
	{
		parent::__construct(array('GetUtf8Result'=>$_GetUtf8Result));
	}
	/**
	 * Set GetUtf8Result
	 * @param Converter GetUtf8Result
	 * @return Converter
	 */
	public function setGetUtf8Result($_GetUtf8Result)
	{
		return ($this->GetUtf8Result = $_GetUtf8Result);
	}
	/**
	 * Get GetUtf8Result
	 * @return EccConvertUnicTypeConverter
	 */
	public function getGetUtf8Result()
	{
		return $this->GetUtf8Result;
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