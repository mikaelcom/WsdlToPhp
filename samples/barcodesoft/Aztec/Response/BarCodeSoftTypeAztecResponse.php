<?php
/**
 * Class file for BarCodeSoftTypeAztecResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeAztecResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeAztecResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The AztecResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $AztecResult;
	/**
	 * Constructor
	 * @param base64Binary AztecResult
	 * @return BarCodeSoftTypeAztecResponse
	 */
	public function __construct($_AztecResult = null)
	{
		parent::__construct(array('AztecResult'=>$_AztecResult));
	}
	/**
	 * Set AztecResult
	 * @param base64Binary AztecResult
	 * @return base64Binary
	 */
	public function setAztecResult($_AztecResult)
	{
		return ($this->AztecResult = $_AztecResult);
	}
	/**
	 * Get AztecResult
	 * @return base64Binary
	 */
	public function getAztecResult()
	{
		return $this->AztecResult;
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