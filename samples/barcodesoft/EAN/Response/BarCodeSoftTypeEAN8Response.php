<?php
/**
 * Class file for BarCodeSoftTypeEAN8Response
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeEAN8Response
 * @date 02/08/2012
 */
class BarCodeSoftTypeEAN8Response extends BarCodeSoftWsdlClass
{
	/**
	 * The EAN8Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $EAN8Result;
	/**
	 * Constructor
	 * @param base64Binary EAN8Result
	 * @return BarCodeSoftTypeEAN8Response
	 */
	public function __construct($_EAN8Result = null)
	{
		parent::__construct(array('EAN8Result'=>$_EAN8Result));
	}
	/**
	 * Set EAN8Result
	 * @param base64Binary EAN8Result
	 * @return base64Binary
	 */
	public function setEAN8Result($_EAN8Result)
	{
		return ($this->EAN8Result = $_EAN8Result);
	}
	/**
	 * Get EAN8Result
	 * @return base64Binary
	 */
	public function getEAN8Result()
	{
		return $this->EAN8Result;
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