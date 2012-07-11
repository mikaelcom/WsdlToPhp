<?php
/**
 * Class file for EbayTradingTypeMyMessagesAlertIDArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesAlertIDArrayType
 * Documentation : Contains a list of up to 10 AlertID values.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesAlertIDArrayType extends EbayTradingWsdlClass
{
	/**
	 * The AlertID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly was an ID that uniquely identified an alert for a given user.
	 * @var EbayTradingTypeMyMessagesAlertIDType
	 */
	public $AlertID;
	/**
	 * Constructor
	 * @param EbayTradingTypeMyMessagesAlertIDType AlertID
	 * @return EbayTradingTypeMyMessagesAlertIDArrayType
	 */
	public function __construct($_AlertID = null)
	{
		parent::__construct(array('AlertID'=>$_AlertID));
	}
	/**
	 * Set AlertID
	 * @param MyMessagesAlertIDType AlertID
	 * @return MyMessagesAlertIDType
	 */
	public function setAlertID($_AlertID)
	{
		return ($this->AlertID = EbayTradingTypeMyMessagesAlertIDType::valueIsValid($_AlertID)?$_AlertID:null);
	}
	/**
	 * Get AlertID
	 * @return EbayTradingTypeMyMessagesAlertIDType
	 */
	public function getAlertID()
	{
		return $this->AlertID;
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