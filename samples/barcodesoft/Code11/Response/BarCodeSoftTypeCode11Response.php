<?php
/**
 * Class file for BarCodeSoftTypeCode11Response
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeCode11Response
 * @date 02/08/2012
 */
class BarCodeSoftTypeCode11Response extends BarCodeSoftWsdlClass
{
	/**
	 * The Code11Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $Code11Result;
	/**
	 * Constructor
	 * @param base64Binary Code11Result
	 * @return BarCodeSoftTypeCode11Response
	 */
	public function __construct($_Code11Result = null)
	{
		parent::__construct(array('Code11Result'=>$_Code11Result));
	}
	/**
	 * Set Code11Result
	 * @param base64Binary Code11Result
	 * @return base64Binary
	 */
	public function setCode11Result($_Code11Result)
	{
		return ($this->Code11Result = $_Code11Result);
	}
	/**
	 * Get Code11Result
	 * @return base64Binary
	 */
	public function getCode11Result()
	{
		return $this->Code11Result;
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