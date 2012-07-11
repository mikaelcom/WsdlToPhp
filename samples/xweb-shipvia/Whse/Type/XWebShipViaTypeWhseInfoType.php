<?php
/**
 * Class file for XWebShipViaTypeWhseInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebShipViaTypeWhseInfoType
 * @date 09/07/2012
 */
class XWebShipViaTypeWhseInfoType extends XWebShipViaWsdlClass
{
	/**
	 * The WhseCode
	 * @var WhseCode
	 */
	public $WhseCode;
	/**
	 * The WhseDesc
	 * @var WhseDesc
	 */
	public $WhseDesc;
	/**
	 * The ShipViaInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebShipViaTypeShipViaInfoType
	 */
	public $ShipViaInfo;
	/**
	 * Constructor
	 * @param WhseCode WhseCode
	 * @param WhseDesc WhseDesc
	 * @param XWebShipViaTypeShipViaInfoType ShipViaInfo
	 * @return XWebShipViaTypeWhseInfoType
	 */
	public function __construct($_WhseCode = null,$_WhseDesc = null,$_ShipViaInfo)
	{
		parent::__construct(array('WhseCode'=>$_WhseCode,'WhseDesc'=>$_WhseDesc,'ShipViaInfo'=>$_ShipViaInfo));
	}
	/**
	 * Set WhseCode
	 * @param WhseCode WhseCode
	 * @return WhseCode
	 */
	public function setWhseCode($_WhseCode)
	{
		return ($this->WhseCode = $_WhseCode);
	}
	/**
	 * Get WhseCode
	 * @return WhseCode
	 */
	public function getWhseCode()
	{
		return $this->WhseCode;
	}
	/**
	 * Set WhseDesc
	 * @param WhseDesc WhseDesc
	 * @return WhseDesc
	 */
	public function setWhseDesc($_WhseDesc)
	{
		return ($this->WhseDesc = $_WhseDesc);
	}
	/**
	 * Get WhseDesc
	 * @return WhseDesc
	 */
	public function getWhseDesc()
	{
		return $this->WhseDesc;
	}
	/**
	 * Set ShipViaInfo
	 * @param ShipViaInfoType ShipViaInfo
	 * @return ShipViaInfoType
	 */
	public function setShipViaInfo($_ShipViaInfo)
	{
		return ($this->ShipViaInfo = $_ShipViaInfo);
	}
	/**
	 * Get ShipViaInfo
	 * @return XWebShipViaTypeShipViaInfoType
	 */
	public function getShipViaInfo()
	{
		return $this->ShipViaInfo;
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