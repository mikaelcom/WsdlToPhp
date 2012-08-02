<?php
/**
 * Class file for BarCodeSoftTypeCode128AResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeCode128AResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeCode128AResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The Code128AResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $Code128AResult;
	/**
	 * Constructor
	 * @param base64Binary Code128AResult
	 * @return BarCodeSoftTypeCode128AResponse
	 */
	public function __construct($_Code128AResult = null)
	{
		parent::__construct(array('Code128AResult'=>$_Code128AResult));
	}
	/**
	 * Set Code128AResult
	 * @param base64Binary Code128AResult
	 * @return base64Binary
	 */
	public function setCode128AResult($_Code128AResult)
	{
		return ($this->Code128AResult = $_Code128AResult);
	}
	/**
	 * Get Code128AResult
	 * @return base64Binary
	 */
	public function getCode128AResult()
	{
		return $this->Code128AResult;
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