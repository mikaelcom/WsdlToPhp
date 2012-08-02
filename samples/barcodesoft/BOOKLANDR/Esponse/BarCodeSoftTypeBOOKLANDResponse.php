<?php
/**
 * Class file for BarCodeSoftTypeBOOKLANDResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeBOOKLANDResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeBOOKLANDResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The BOOKLANDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $BOOKLANDResult;
	/**
	 * Constructor
	 * @param base64Binary BOOKLANDResult
	 * @return BarCodeSoftTypeBOOKLANDResponse
	 */
	public function __construct($_BOOKLANDResult = null)
	{
		parent::__construct(array('BOOKLANDResult'=>$_BOOKLANDResult));
	}
	/**
	 * Set BOOKLANDResult
	 * @param base64Binary BOOKLANDResult
	 * @return base64Binary
	 */
	public function setBOOKLANDResult($_BOOKLANDResult)
	{
		return ($this->BOOKLANDResult = $_BOOKLANDResult);
	}
	/**
	 * Get BOOKLANDResult
	 * @return base64Binary
	 */
	public function getBOOKLANDResult()
	{
		return $this->BOOKLANDResult;
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