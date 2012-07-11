<?php
/**
 * Class file for EccConvertUnixTmpTypeGetSystemTimeResponse
 * @date 03/07/2012
 */
/**
 * Class EccConvertUnixTmpTypeGetSystemTimeResponse
 * @date 03/07/2012
 */
class EccConvertUnixTmpTypeGetSystemTimeResponse extends EccConvertUnixTmpWsdlClass
{
	/**
	 * The GetSystemTimeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccConvertUnixTmpTypeConverter
	 */
	public $GetSystemTimeResult;
	/**
	 * Constructor
	 * @param EccConvertUnixTmpTypeConverter GetSystemTimeResult
	 * @return EccConvertUnixTmpTypeGetSystemTimeResponse
	 */
	public function __construct($_GetSystemTimeResult = null)
	{
		parent::__construct(array('GetSystemTimeResult'=>$_GetSystemTimeResult));
	}
	/**
	 * Set GetSystemTimeResult
	 * @param Converter GetSystemTimeResult
	 * @return Converter
	 */
	public function setGetSystemTimeResult($_GetSystemTimeResult)
	{
		return ($this->GetSystemTimeResult = $_GetSystemTimeResult);
	}
	/**
	 * Get GetSystemTimeResult
	 * @return EccConvertUnixTmpTypeConverter
	 */
	public function getGetSystemTimeResult()
	{
		return $this->GetSystemTimeResult;
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