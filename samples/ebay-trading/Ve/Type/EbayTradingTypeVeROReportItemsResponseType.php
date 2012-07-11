<?php
/**
 * Class file for EbayTradingTypeVeROReportItemsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVeROReportItemsResponseType
 * Documentation : Contains a packet ID and status for the items reported by the VeRO Program member.
 * @date 04/07/2012
 */
class EbayTradingTypeVeROReportItemsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The VeROReportPacketID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique packet identifier for the items reported.
	 * @var long
	 */
	public $VeROReportPacketID;
	/**
	 * The VeROReportPacketStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The processing status of the packet.
	 * @var EbayTradingTypeVeROReportPacketStatusCodeType
	 */
	public $VeROReportPacketStatus;
	/**
	 * Constructor
	 * @param long VeROReportPacketID
	 * @param EbayTradingTypeVeROReportPacketStatusCodeType VeROReportPacketStatus
	 * @return EbayTradingTypeVeROReportItemsResponseType
	 */
	public function __construct($_VeROReportPacketID = null,$_VeROReportPacketStatus = null)
	{
		EbayTradingWsdlClass::__construct(array('VeROReportPacketID'=>$_VeROReportPacketID,'VeROReportPacketStatus'=>$_VeROReportPacketStatus));
	}
	/**
	 * Set VeROReportPacketID
	 * @param long VeROReportPacketID
	 * @return long
	 */
	public function setVeROReportPacketID($_VeROReportPacketID)
	{
		return ($this->VeROReportPacketID = $_VeROReportPacketID);
	}
	/**
	 * Get VeROReportPacketID
	 * @return long
	 */
	public function getVeROReportPacketID()
	{
		return $this->VeROReportPacketID;
	}
	/**
	 * Set VeROReportPacketStatus
	 * @param VeROReportPacketStatusCodeType VeROReportPacketStatus
	 * @return VeROReportPacketStatusCodeType
	 */
	public function setVeROReportPacketStatus($_VeROReportPacketStatus)
	{
		return ($this->VeROReportPacketStatus = EbayTradingTypeVeROReportPacketStatusCodeType::valueIsValid($_VeROReportPacketStatus)?$_VeROReportPacketStatus:null);
	}
	/**
	 * Get VeROReportPacketStatus
	 * @return EbayTradingTypeVeROReportPacketStatusCodeType
	 */
	public function getVeROReportPacketStatus()
	{
		return $this->VeROReportPacketStatus;
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