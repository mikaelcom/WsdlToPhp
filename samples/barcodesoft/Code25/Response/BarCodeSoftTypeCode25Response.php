<?php
/**
 * Class file for BarCodeSoftTypeCode25Response
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeCode25Response
 * @date 02/08/2012
 */
class BarCodeSoftTypeCode25Response extends BarCodeSoftWsdlClass
{
	/**
	 * The Code25Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $Code25Result;
	/**
	 * Constructor
	 * @param base64Binary Code25Result
	 * @return BarCodeSoftTypeCode25Response
	 */
	public function __construct($_Code25Result = null)
	{
		parent::__construct(array('Code25Result'=>$_Code25Result));
	}
	/**
	 * Set Code25Result
	 * @param base64Binary Code25Result
	 * @return base64Binary
	 */
	public function setCode25Result($_Code25Result)
	{
		return ($this->Code25Result = $_Code25Result);
	}
	/**
	 * Get Code25Result
	 * @return base64Binary
	 */
	public function getCode25Result()
	{
		return $this->Code25Result;
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