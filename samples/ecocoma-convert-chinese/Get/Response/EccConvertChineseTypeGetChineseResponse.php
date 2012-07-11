<?php
/**
 * Class file for EccConvertChineseTypeGetChineseResponse
 * @date 03/07/2012
 */
/**
 * Class EccConvertChineseTypeGetChineseResponse
 * @date 03/07/2012
 */
class EccConvertChineseTypeGetChineseResponse extends EccConvertChineseWsdlClass
{
	/**
	 * The GetChineseResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccConvertChineseTypeConverter
	 */
	public $GetChineseResult;
	/**
	 * Constructor
	 * @param EccConvertChineseTypeConverter GetChineseResult
	 * @return EccConvertChineseTypeGetChineseResponse
	 */
	public function __construct($_GetChineseResult = null)
	{
		parent::__construct(array('GetChineseResult'=>$_GetChineseResult));
	}
	/**
	 * Set GetChineseResult
	 * @param Converter GetChineseResult
	 * @return Converter
	 */
	public function setGetChineseResult($_GetChineseResult)
	{
		return ($this->GetChineseResult = $_GetChineseResult);
	}
	/**
	 * Get GetChineseResult
	 * @return EccConvertChineseTypeConverter
	 */
	public function getGetChineseResult()
	{
		return $this->GetChineseResult;
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