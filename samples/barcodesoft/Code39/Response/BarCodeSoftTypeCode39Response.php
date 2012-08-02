<?php
/**
 * Class file for BarCodeSoftTypeCode39Response
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeCode39Response
 * @date 02/08/2012
 */
class BarCodeSoftTypeCode39Response extends BarCodeSoftWsdlClass
{
	/**
	 * The Code39Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $Code39Result;
	/**
	 * Constructor
	 * @param base64Binary Code39Result
	 * @return BarCodeSoftTypeCode39Response
	 */
	public function __construct($_Code39Result = null)
	{
		parent::__construct(array('Code39Result'=>$_Code39Result));
	}
	/**
	 * Set Code39Result
	 * @param base64Binary Code39Result
	 * @return base64Binary
	 */
	public function setCode39Result($_Code39Result)
	{
		return ($this->Code39Result = $_Code39Result);
	}
	/**
	 * Get Code39Result
	 * @return base64Binary
	 */
	public function getCode39Result()
	{
		return $this->Code39Result;
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