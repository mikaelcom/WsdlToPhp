<?php
/**
 * Class file for EbayTradingTypeUserIDArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUserIDArrayType
 * Documentation : Contains an array of eBay UserID entries.
 * @date 04/07/2012
 */
class EbayTradingTypeUserIDArrayType extends EbayTradingWsdlClass
{
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Unique eBay user ID for the user. Applies to eBay Motors Pro applications only.
	 * @var EbayTradingTypeUserIDType
	 */
	public $UserID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserIDType UserID
	 * @param DOMDocument any
	 * @return EbayTradingTypeUserIDArrayType
	 */
	public function __construct($_UserID = null,$_any = null)
	{
		parent::__construct(array('UserID'=>$_UserID,'any'=>$_any));
	}
	/**
	 * Set UserID
	 * @param UserIDType UserID
	 * @return UserIDType
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = EbayTradingTypeUserIDType::valueIsValid($_UserID)?$_UserID:null);
	}
	/**
	 * Get UserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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