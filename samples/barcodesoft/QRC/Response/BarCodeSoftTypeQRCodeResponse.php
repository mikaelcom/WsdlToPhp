<?php
/**
 * Class file for BarCodeSoftTypeQRCodeResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeQRCodeResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeQRCodeResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The QRCodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $QRCodeResult;
	/**
	 * Constructor
	 * @param base64Binary QRCodeResult
	 * @return BarCodeSoftTypeQRCodeResponse
	 */
	public function __construct($_QRCodeResult = null)
	{
		parent::__construct(array('QRCodeResult'=>$_QRCodeResult));
	}
	/**
	 * Set QRCodeResult
	 * @param base64Binary QRCodeResult
	 * @return base64Binary
	 */
	public function setQRCodeResult($_QRCodeResult)
	{
		return ($this->QRCodeResult = $_QRCodeResult);
	}
	/**
	 * Get QRCodeResult
	 * @return base64Binary
	 */
	public function getQRCodeResult()
	{
		return $this->QRCodeResult;
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