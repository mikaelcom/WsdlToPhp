<?php
/**
 * Class file for EccConvertChineseTypeGetSimplifiedChineseResponse
 * @date 03/07/2012
 */
/**
 * Class EccConvertChineseTypeGetSimplifiedChineseResponse
 * @date 03/07/2012
 */
class EccConvertChineseTypeGetSimplifiedChineseResponse extends EccConvertChineseWsdlClass
{
	/**
	 * The GetSimplifiedChineseResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccConvertChineseTypeConverter
	 */
	public $GetSimplifiedChineseResult;
	/**
	 * Constructor
	 * @param EccConvertChineseTypeConverter GetSimplifiedChineseResult
	 * @return EccConvertChineseTypeGetSimplifiedChineseResponse
	 */
	public function __construct($_GetSimplifiedChineseResult = null)
	{
		parent::__construct(array('GetSimplifiedChineseResult'=>$_GetSimplifiedChineseResult));
	}
	/**
	 * Set GetSimplifiedChineseResult
	 * @param Converter GetSimplifiedChineseResult
	 * @return Converter
	 */
	public function setGetSimplifiedChineseResult($_GetSimplifiedChineseResult)
	{
		return ($this->GetSimplifiedChineseResult = $_GetSimplifiedChineseResult);
	}
	/**
	 * Get GetSimplifiedChineseResult
	 * @return EccConvertChineseTypeConverter
	 */
	public function getGetSimplifiedChineseResult()
	{
		return $this->GetSimplifiedChineseResult;
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