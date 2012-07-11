<?php
/**
 * Class file for EbayTradingTypeGetSessionIDResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSessionIDResponseType
 * Documentation : Contains the generated SessionID, which is a unique identifier for authenticating data entry during the process that creates a user token.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSessionIDResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A 40-character identifier supplied by eBay to an application. Used to confirm the identities of the user and the application in a URL redirect during the process in which the user agrees to let the application wield a user token that grants the application the right to access eBay data on behalf of the user. Subsequently also used as input for the FetchToken API call. The SessionID is valid for five minutes after it is retrieved.
	 * @var string
	 */
	public $SessionID;
	/**
	 * Constructor
	 * @param string SessionID
	 * @return EbayTradingTypeGetSessionIDResponseType
	 */
	public function __construct($_SessionID = null)
	{
		EbayTradingWsdlClass::__construct(array('SessionID'=>$_SessionID));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
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