<?php
/**
 * Class file for BarCodeSoftTypeUPCEResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeUPCEResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeUPCEResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The UPCEResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $UPCEResult;
	/**
	 * Constructor
	 * @param base64Binary UPCEResult
	 * @return BarCodeSoftTypeUPCEResponse
	 */
	public function __construct($_UPCEResult = null)
	{
		parent::__construct(array('UPCEResult'=>$_UPCEResult));
	}
	/**
	 * Set UPCEResult
	 * @param base64Binary UPCEResult
	 * @return base64Binary
	 */
	public function setUPCEResult($_UPCEResult)
	{
		return ($this->UPCEResult = $_UPCEResult);
	}
	/**
	 * Get UPCEResult
	 * @return base64Binary
	 */
	public function getUPCEResult()
	{
		return $this->UPCEResult;
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