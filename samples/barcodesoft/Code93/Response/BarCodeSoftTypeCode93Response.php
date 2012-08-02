<?php
/**
 * Class file for BarCodeSoftTypeCode93Response
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeCode93Response
 * @date 02/08/2012
 */
class BarCodeSoftTypeCode93Response extends BarCodeSoftWsdlClass
{
	/**
	 * The Code93Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $Code93Result;
	/**
	 * Constructor
	 * @param base64Binary Code93Result
	 * @return BarCodeSoftTypeCode93Response
	 */
	public function __construct($_Code93Result = null)
	{
		parent::__construct(array('Code93Result'=>$_Code93Result));
	}
	/**
	 * Set Code93Result
	 * @param base64Binary Code93Result
	 * @return base64Binary
	 */
	public function setCode93Result($_Code93Result)
	{
		return ($this->Code93Result = $_Code93Result);
	}
	/**
	 * Get Code93Result
	 * @return base64Binary
	 */
	public function getCode93Result()
	{
		return $this->Code93Result;
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