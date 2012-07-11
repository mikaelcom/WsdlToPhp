<?php
/**
 * Class file for EbayTradingTypeGetMyMessagesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMyMessagesResponseType
 * Documentation : Conains information about the messages sent to a user. Depending on the detail level, this information can include message counts, resolution and flagged status, message headers, and message text.
 * @date 04/07/2012
 */
class EbayTradingTypeGetMyMessagesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Summary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Summary data for a given user's messages. This includes the numbers of new messages, flagged messages, and total messages. The amount and type of data returned is the same whether or not the request includes specific MessageIDs. Always/Conditionally returned logic assumes a detail level of ReturnMessages.
	 * @var EbayTradingTypeMyMessagesSummaryType
	 */
	public $Summary;
	/**
	 * The Alerts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container was deprecated in 685 version. Alerts are now considered Flagged messages.
	 * @var EbayTradingTypeMyMessagesAlertArrayType
	 */
	public $Alerts;
	/**
	 * The Messages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the message information for each message specified in MessageIDs. The amount and type of information returned varies based on the requested detail level. Contains one MyMessagesMessageType object per message. Returned as an empty node if user has no messages.
	 * @var EbayTradingTypeMyMessagesMessageArrayType
	 */
	public $Messages;
	/**
	 * Constructor
	 * @param EbayTradingTypeMyMessagesSummaryType Summary
	 * @param EbayTradingTypeMyMessagesAlertArrayType Alerts
	 * @param EbayTradingTypeMyMessagesMessageArrayType Messages
	 * @return EbayTradingTypeGetMyMessagesResponseType
	 */
	public function __construct($_Summary = null,$_Alerts = null,$_Messages = null)
	{
		EbayTradingWsdlClass::__construct(array('Summary'=>$_Summary,'Alerts'=>$_Alerts,'Messages'=>$_Messages));
	}
	/**
	 * Set Summary
	 * @param MyMessagesSummaryType Summary
	 * @return MyMessagesSummaryType
	 */
	public function setSummary($_Summary)
	{
		return ($this->Summary = $_Summary);
	}
	/**
	 * Get Summary
	 * @return EbayTradingTypeMyMessagesSummaryType
	 */
	public function getSummary()
	{
		return $this->Summary;
	}
	/**
	 * Set Alerts
	 * @param MyMessagesAlertArrayType Alerts
	 * @return MyMessagesAlertArrayType
	 */
	public function setAlerts($_Alerts)
	{
		return ($this->Alerts = $_Alerts);
	}
	/**
	 * Get Alerts
	 * @return EbayTradingTypeMyMessagesAlertArrayType
	 */
	public function getAlerts()
	{
		return $this->Alerts;
	}
	/**
	 * Set Messages
	 * @param MyMessagesMessageArrayType Messages
	 * @return MyMessagesMessageArrayType
	 */
	public function setMessages($_Messages)
	{
		return ($this->Messages = $_Messages);
	}
	/**
	 * Get Messages
	 * @return EbayTradingTypeMyMessagesMessageArrayType
	 */
	public function getMessages()
	{
		return $this->Messages;
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