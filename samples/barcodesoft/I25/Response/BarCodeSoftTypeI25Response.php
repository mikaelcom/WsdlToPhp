<?php
/**
 * Class file for BarCodeSoftTypeI25Response
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeI25Response
 * @date 02/08/2012
 */
class BarCodeSoftTypeI25Response extends BarCodeSoftWsdlClass
{
	/**
	 * The I25Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $I25Result;
	/**
	 * Constructor
	 * @param base64Binary I25Result
	 * @return BarCodeSoftTypeI25Response
	 */
	public function __construct($_I25Result = null)
	{
		parent::__construct(array('I25Result'=>$_I25Result));
	}
	/**
	 * Set I25Result
	 * @param base64Binary I25Result
	 * @return base64Binary
	 */
	public function setI25Result($_I25Result)
	{
		return ($this->I25Result = $_I25Result);
	}
	/**
	 * Get I25Result
	 * @return base64Binary
	 */
	public function getI25Result()
	{
		return $this->I25Result;
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