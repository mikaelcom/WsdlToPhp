<?php
/**
 * Class file for BarCodeSoftTypeUPCAResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeUPCAResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeUPCAResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The UPCAResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $UPCAResult;
	/**
	 * Constructor
	 * @param base64Binary UPCAResult
	 * @return BarCodeSoftTypeUPCAResponse
	 */
	public function __construct($_UPCAResult = null)
	{
		parent::__construct(array('UPCAResult'=>$_UPCAResult));
	}
	/**
	 * Set UPCAResult
	 * @param base64Binary UPCAResult
	 * @return base64Binary
	 */
	public function setUPCAResult($_UPCAResult)
	{
		return ($this->UPCAResult = $_UPCAResult);
	}
	/**
	 * Get UPCAResult
	 * @return base64Binary
	 */
	public function getUPCAResult()
	{
		return $this->UPCAResult;
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