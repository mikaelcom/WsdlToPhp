<?php
/**
 * Class file for XWebShipViaTypeShipViaInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebShipViaTypeShipViaInfoType
 * @date 09/07/2012
 */
class XWebShipViaTypeShipViaInfoType extends XWebShipViaWsdlClass
{
	/**
	 * The ShipViaCode
	 * @var ShipViaCode
	 */
	public $ShipViaCode;
	/**
	 * The ShipViaDesc
	 * @var ShipViaDesc
	 */
	public $ShipViaDesc;
	/**
	 * The ShipmentTypeCode
	 * @var ShipmentTypeCode
	 */
	public $ShipmentTypeCode;
	/**
	 * The ShipmentTypeDesc
	 * @var ShipmentTypeDesc
	 */
	public $ShipmentTypeDesc;
	/**
	 * Constructor
	 * @param ShipViaCode ShipViaCode
	 * @param ShipViaDesc ShipViaDesc
	 * @param ShipmentTypeCode ShipmentTypeCode
	 * @param ShipmentTypeDesc ShipmentTypeDesc
	 * @return XWebShipViaTypeShipViaInfoType
	 */
	public function __construct($_ShipViaCode = null,$_ShipViaDesc = null,$_ShipmentTypeCode = null,$_ShipmentTypeDesc = null)
	{
		parent::__construct(array('ShipViaCode'=>$_ShipViaCode,'ShipViaDesc'=>$_ShipViaDesc,'ShipmentTypeCode'=>$_ShipmentTypeCode,'ShipmentTypeDesc'=>$_ShipmentTypeDesc));
	}
	/**
	 * Set ShipViaCode
	 * @param ShipViaCode ShipViaCode
	 * @return ShipViaCode
	 */
	public function setShipViaCode($_ShipViaCode)
	{
		return ($this->ShipViaCode = $_ShipViaCode);
	}
	/**
	 * Get ShipViaCode
	 * @return ShipViaCode
	 */
	public function getShipViaCode()
	{
		return $this->ShipViaCode;
	}
	/**
	 * Set ShipViaDesc
	 * @param ShipViaDesc ShipViaDesc
	 * @return ShipViaDesc
	 */
	public function setShipViaDesc($_ShipViaDesc)
	{
		return ($this->ShipViaDesc = $_ShipViaDesc);
	}
	/**
	 * Get ShipViaDesc
	 * @return ShipViaDesc
	 */
	public function getShipViaDesc()
	{
		return $this->ShipViaDesc;
	}
	/**
	 * Set ShipmentTypeCode
	 * @param ShipmentTypeCode ShipmentTypeCode
	 * @return ShipmentTypeCode
	 */
	public function setShipmentTypeCode($_ShipmentTypeCode)
	{
		return ($this->ShipmentTypeCode = $_ShipmentTypeCode);
	}
	/**
	 * Get ShipmentTypeCode
	 * @return ShipmentTypeCode
	 */
	public function getShipmentTypeCode()
	{
		return $this->ShipmentTypeCode;
	}
	/**
	 * Set ShipmentTypeDesc
	 * @param ShipmentTypeDesc ShipmentTypeDesc
	 * @return ShipmentTypeDesc
	 */
	public function setShipmentTypeDesc($_ShipmentTypeDesc)
	{
		return ($this->ShipmentTypeDesc = $_ShipmentTypeDesc);
	}
	/**
	 * Get ShipmentTypeDesc
	 * @return ShipmentTypeDesc
	 */
	public function getShipmentTypeDesc()
	{
		return $this->ShipmentTypeDesc;
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