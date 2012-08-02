<?php
/**
 * Class file for BarCodeSoftTypeCode128CResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeCode128CResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeCode128CResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The Code128CResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $Code128CResult;
	/**
	 * Constructor
	 * @param base64Binary Code128CResult
	 * @return BarCodeSoftTypeCode128CResponse
	 */
	public function __construct($_Code128CResult = null)
	{
		parent::__construct(array('Code128CResult'=>$_Code128CResult));
	}
	/**
	 * Set Code128CResult
	 * @param base64Binary Code128CResult
	 * @return base64Binary
	 */
	public function setCode128CResult($_Code128CResult)
	{
		return ($this->Code128CResult = $_Code128CResult);
	}
	/**
	 * Get Code128CResult
	 * @return base64Binary
	 */
	public function getCode128CResult()
	{
		return $this->Code128CResult;
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