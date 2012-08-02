<?php
/**
 * Class file for BarCodeSoftTypeEAN13Response
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeEAN13Response
 * @date 02/08/2012
 */
class BarCodeSoftTypeEAN13Response extends BarCodeSoftWsdlClass
{
	/**
	 * The EAN13Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $EAN13Result;
	/**
	 * Constructor
	 * @param base64Binary EAN13Result
	 * @return BarCodeSoftTypeEAN13Response
	 */
	public function __construct($_EAN13Result = null)
	{
		parent::__construct(array('EAN13Result'=>$_EAN13Result));
	}
	/**
	 * Set EAN13Result
	 * @param base64Binary EAN13Result
	 * @return base64Binary
	 */
	public function setEAN13Result($_EAN13Result)
	{
		return ($this->EAN13Result = $_EAN13Result);
	}
	/**
	 * Get EAN13Result
	 * @return base64Binary
	 */
	public function getEAN13Result()
	{
		return $this->EAN13Result;
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