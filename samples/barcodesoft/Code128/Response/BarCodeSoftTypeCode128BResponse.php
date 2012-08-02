<?php
/**
 * Class file for BarCodeSoftTypeCode128BResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeCode128BResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeCode128BResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The Code128BResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $Code128BResult;
	/**
	 * Constructor
	 * @param base64Binary Code128BResult
	 * @return BarCodeSoftTypeCode128BResponse
	 */
	public function __construct($_Code128BResult = null)
	{
		parent::__construct(array('Code128BResult'=>$_Code128BResult));
	}
	/**
	 * Set Code128BResult
	 * @param base64Binary Code128BResult
	 * @return base64Binary
	 */
	public function setCode128BResult($_Code128BResult)
	{
		return ($this->Code128BResult = $_Code128BResult);
	}
	/**
	 * Get Code128BResult
	 * @return base64Binary
	 */
	public function getCode128BResult()
	{
		return $this->Code128BResult;
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