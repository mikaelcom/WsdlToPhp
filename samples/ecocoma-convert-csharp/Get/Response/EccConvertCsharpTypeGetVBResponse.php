<?php
/**
 * Class file for EccConvertCsharpTypeGetVBResponse
 * @date 03/07/2012
 */
/**
 * Class EccConvertCsharpTypeGetVBResponse
 * @date 03/07/2012
 */
class EccConvertCsharpTypeGetVBResponse extends EccConvertCsharpWsdlClass
{
	/**
	 * The GetVBResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccConvertCsharpTypeConverter
	 */
	public $GetVBResult;
	/**
	 * Constructor
	 * @param EccConvertCsharpTypeConverter GetVBResult
	 * @return EccConvertCsharpTypeGetVBResponse
	 */
	public function __construct($_GetVBResult = null)
	{
		parent::__construct(array('GetVBResult'=>$_GetVBResult));
	}
	/**
	 * Set GetVBResult
	 * @param Converter GetVBResult
	 * @return Converter
	 */
	public function setGetVBResult($_GetVBResult)
	{
		return ($this->GetVBResult = $_GetVBResult);
	}
	/**
	 * Get GetVBResult
	 * @return EccConvertCsharpTypeConverter
	 */
	public function getGetVBResult()
	{
		return $this->GetVBResult;
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