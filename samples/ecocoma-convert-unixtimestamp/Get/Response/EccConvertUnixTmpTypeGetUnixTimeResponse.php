<?php
/**
 * Class file for EccConvertUnixTmpTypeGetUnixTimeResponse
 * @date 03/07/2012
 */
/**
 * Class EccConvertUnixTmpTypeGetUnixTimeResponse
 * @date 03/07/2012
 */
class EccConvertUnixTmpTypeGetUnixTimeResponse extends EccConvertUnixTmpWsdlClass
{
	/**
	 * The GetUnixTimeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccConvertUnixTmpTypeConverter
	 */
	public $GetUnixTimeResult;
	/**
	 * Constructor
	 * @param EccConvertUnixTmpTypeConverter GetUnixTimeResult
	 * @return EccConvertUnixTmpTypeGetUnixTimeResponse
	 */
	public function __construct($_GetUnixTimeResult = null)
	{
		parent::__construct(array('GetUnixTimeResult'=>$_GetUnixTimeResult));
	}
	/**
	 * Set GetUnixTimeResult
	 * @param Converter GetUnixTimeResult
	 * @return Converter
	 */
	public function setGetUnixTimeResult($_GetUnixTimeResult)
	{
		return ($this->GetUnixTimeResult = $_GetUnixTimeResult);
	}
	/**
	 * Get GetUnixTimeResult
	 * @return EccConvertUnixTmpTypeConverter
	 */
	public function getGetUnixTimeResult()
	{
		return $this->GetUnixTimeResult;
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