<?php
/**
 * Class file for XWebPriceListTypeResponseErrorInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypeResponseErrorInfoType
 * @date 09/07/2012
 */
class XWebPriceListTypeResponseErrorInfoType extends XWebPriceListWsdlClass
{
	/**
	 * The ErrorID
	 * @var ErrorID
	 */
	public $ErrorID;
	/**
	 * The ErrorDesc
	 * @var ErrorDesc
	 */
	public $ErrorDesc;
	/**
	 * Constructor
	 * @param ErrorID ErrorID
	 * @param ErrorDesc ErrorDesc
	 * @return XWebPriceListTypeResponseErrorInfoType
	 */
	public function __construct($_ErrorID = null,$_ErrorDesc = null)
	{
		parent::__construct(array('ErrorID'=>$_ErrorID,'ErrorDesc'=>$_ErrorDesc));
	}
	/**
	 * Set ErrorID
	 * @param ErrorID ErrorID
	 * @return ErrorID
	 */
	public function setErrorID($_ErrorID)
	{
		return ($this->ErrorID = $_ErrorID);
	}
	/**
	 * Get ErrorID
	 * @return ErrorID
	 */
	public function getErrorID()
	{
		return $this->ErrorID;
	}
	/**
	 * Set ErrorDesc
	 * @param ErrorDesc ErrorDesc
	 * @return ErrorDesc
	 */
	public function setErrorDesc($_ErrorDesc)
	{
		return ($this->ErrorDesc = $_ErrorDesc);
	}
	/**
	 * Get ErrorDesc
	 * @return ErrorDesc
	 */
	public function getErrorDesc()
	{
		return $this->ErrorDesc;
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