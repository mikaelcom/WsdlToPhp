<?php
/**
 * Class file for BarCodeSoftTypePdf417Response
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypePdf417Response
 * @date 02/08/2012
 */
class BarCodeSoftTypePdf417Response extends BarCodeSoftWsdlClass
{
	/**
	 * The Pdf417Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $Pdf417Result;
	/**
	 * Constructor
	 * @param base64Binary Pdf417Result
	 * @return BarCodeSoftTypePdf417Response
	 */
	public function __construct($_Pdf417Result = null)
	{
		parent::__construct(array('Pdf417Result'=>$_Pdf417Result));
	}
	/**
	 * Set Pdf417Result
	 * @param base64Binary Pdf417Result
	 * @return base64Binary
	 */
	public function setPdf417Result($_Pdf417Result)
	{
		return ($this->Pdf417Result = $_Pdf417Result);
	}
	/**
	 * Get Pdf417Result
	 * @return base64Binary
	 */
	public function getPdf417Result()
	{
		return $this->Pdf417Result;
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