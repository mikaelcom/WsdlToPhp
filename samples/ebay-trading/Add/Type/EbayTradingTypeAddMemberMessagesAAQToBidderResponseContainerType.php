<?php
/**
 * Class file for EbayTradingTypeAddMemberMessagesAAQToBidderResponseContainerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddMemberMessagesAAQToBidderResponseContainerType
 * Documentation : Contains the response information.
 * @date 04/07/2012
 */
class EbayTradingTypeAddMemberMessagesAAQToBidderResponseContainerType extends EbayTradingWsdlClass
{
	/**
	 * The CorrelationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use to track that a response is returned for every request and to match particular responses to particular requests.
	 * @var string
	 */
	public $CorrelationID;
	/**
	 * The Ack
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the response status (e.g., success).
	 * @var EbayTradingTypeAckCodeType
	 */
	public $Ack;
	/**
	 * Constructor
	 * @param string CorrelationID
	 * @param EbayTradingTypeAckCodeType Ack
	 * @return EbayTradingTypeAddMemberMessagesAAQToBidderResponseContainerType
	 */
	public function __construct($_CorrelationID = null,$_Ack = null)
	{
		parent::__construct(array('CorrelationID'=>$_CorrelationID,'Ack'=>$_Ack));
	}
	/**
	 * Set CorrelationID
	 * @param string CorrelationID
	 * @return string
	 */
	public function setCorrelationID($_CorrelationID)
	{
		return ($this->CorrelationID = $_CorrelationID);
	}
	/**
	 * Get CorrelationID
	 * @return string
	 */
	public function getCorrelationID()
	{
		return $this->CorrelationID;
	}
	/**
	 * Set Ack
	 * @param AckCodeType Ack
	 * @return AckCodeType
	 */
	public function setAck($_Ack)
	{
		return ($this->Ack = EbayTradingTypeAckCodeType::valueIsValid($_Ack)?$_Ack:null);
	}
	/**
	 * Get Ack
	 * @return EbayTradingTypeAckCodeType
	 */
	public function getAck()
	{
		return $this->Ack;
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