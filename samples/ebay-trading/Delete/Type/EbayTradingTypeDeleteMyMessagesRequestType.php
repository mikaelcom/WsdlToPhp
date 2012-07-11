<?php
/**
 * Class file for EbayTradingTypeDeleteMyMessagesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDeleteMyMessagesRequestType
 * Documentation : Removes selected messages for a given user.
 * @date 04/07/2012
 */
class EbayTradingTypeDeleteMyMessagesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The AlertIDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained a list of up to 10 AlertID values.
	 * @var EbayTradingTypeMyMessagesAlertIDArrayType
	 */
	public $AlertIDs;
	/**
	 * The MessageIDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a list of up to 10 MessageID values.
	 * @var EbayTradingTypeMyMessagesMessageIDArrayType
	 */
	public $MessageIDs;
	/**
	 * Constructor
	 * @param EbayTradingTypeMyMessagesAlertIDArrayType AlertIDs
	 * @param EbayTradingTypeMyMessagesMessageIDArrayType MessageIDs
	 * @return EbayTradingTypeDeleteMyMessagesRequestType
	 */
	public function __construct($_AlertIDs = null,$_MessageIDs = null)
	{
		EbayTradingWsdlClass::__construct(array('AlertIDs'=>$_AlertIDs,'MessageIDs'=>$_MessageIDs));
	}
	/**
	 * Set AlertIDs
	 * @param MyMessagesAlertIDArrayType AlertIDs
	 * @return MyMessagesAlertIDArrayType
	 */
	public function setAlertIDs($_AlertIDs)
	{
		return ($this->AlertIDs = $_AlertIDs);
	}
	/**
	 * Get AlertIDs
	 * @return EbayTradingTypeMyMessagesAlertIDArrayType
	 */
	public function getAlertIDs()
	{
		return $this->AlertIDs;
	}
	/**
	 * Set MessageIDs
	 * @param MyMessagesMessageIDArrayType MessageIDs
	 * @return MyMessagesMessageIDArrayType
	 */
	public function setMessageIDs($_MessageIDs)
	{
		return ($this->MessageIDs = $_MessageIDs);
	}
	/**
	 * Get MessageIDs
	 * @return EbayTradingTypeMyMessagesMessageIDArrayType
	 */
	public function getMessageIDs()
	{
		return $this->MessageIDs;
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