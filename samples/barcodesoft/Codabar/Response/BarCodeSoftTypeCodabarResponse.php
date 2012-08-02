<?php
/**
 * Class file for BarCodeSoftTypeCodabarResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeCodabarResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeCodabarResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The CodabarResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $CodabarResult;
	/**
	 * Constructor
	 * @param base64Binary CodabarResult
	 * @return BarCodeSoftTypeCodabarResponse
	 */
	public function __construct($_CodabarResult = null)
	{
		parent::__construct(array('CodabarResult'=>$_CodabarResult));
	}
	/**
	 * Set CodabarResult
	 * @param base64Binary CodabarResult
	 * @return base64Binary
	 */
	public function setCodabarResult($_CodabarResult)
	{
		return ($this->CodabarResult = $_CodabarResult);
	}
	/**
	 * Get CodabarResult
	 * @return base64Binary
	 */
	public function getCodabarResult()
	{
		return $this->CodabarResult;
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