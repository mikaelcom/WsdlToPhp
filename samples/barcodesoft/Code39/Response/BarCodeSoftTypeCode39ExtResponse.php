<?php
/**
 * Class file for BarCodeSoftTypeCode39ExtResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeCode39ExtResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeCode39ExtResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The Code39ExtResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $Code39ExtResult;
	/**
	 * Constructor
	 * @param base64Binary Code39ExtResult
	 * @return BarCodeSoftTypeCode39ExtResponse
	 */
	public function __construct($_Code39ExtResult = null)
	{
		parent::__construct(array('Code39ExtResult'=>$_Code39ExtResult));
	}
	/**
	 * Set Code39ExtResult
	 * @param base64Binary Code39ExtResult
	 * @return base64Binary
	 */
	public function setCode39ExtResult($_Code39ExtResult)
	{
		return ($this->Code39ExtResult = $_Code39ExtResult);
	}
	/**
	 * Get Code39ExtResult
	 * @return base64Binary
	 */
	public function getCode39ExtResult()
	{
		return $this->Code39ExtResult;
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