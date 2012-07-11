<?php
/**
 * Class file for EccConvertChineseTypeGetTraditionalChineseResponse
 * @date 03/07/2012
 */
/**
 * Class EccConvertChineseTypeGetTraditionalChineseResponse
 * @date 03/07/2012
 */
class EccConvertChineseTypeGetTraditionalChineseResponse extends EccConvertChineseWsdlClass
{
	/**
	 * The GetTraditionalChineseResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccConvertChineseTypeConverter
	 */
	public $GetTraditionalChineseResult;
	/**
	 * Constructor
	 * @param EccConvertChineseTypeConverter GetTraditionalChineseResult
	 * @return EccConvertChineseTypeGetTraditionalChineseResponse
	 */
	public function __construct($_GetTraditionalChineseResult = null)
	{
		parent::__construct(array('GetTraditionalChineseResult'=>$_GetTraditionalChineseResult));
	}
	/**
	 * Set GetTraditionalChineseResult
	 * @param Converter GetTraditionalChineseResult
	 * @return Converter
	 */
	public function setGetTraditionalChineseResult($_GetTraditionalChineseResult)
	{
		return ($this->GetTraditionalChineseResult = $_GetTraditionalChineseResult);
	}
	/**
	 * Get GetTraditionalChineseResult
	 * @return EccConvertChineseTypeConverter
	 */
	public function getGetTraditionalChineseResult()
	{
		return $this->GetTraditionalChineseResult;
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