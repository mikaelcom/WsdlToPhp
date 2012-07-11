<?php
/**
 * Class file for EbayTradingTypeAccountEntriesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAccountEntriesType
 * Documentation : Collection of zero, one, or multiple individual detail account entries. Contains one AccountEntry object for each account entry returned. See the schema documentation for AccountEntryType for details on its properties. You can uniquely identify the entries that the GetAccount call returns within the AccountEntries tag. Specifically, the following fields, returned within the AccountEntries tag, can be used in combination as a unique key: AccountEntry.Date, AccountEntry.AccountDetailsEntryType, AccountEntry.ItemID, and AccountEntry.RefNumber.
 * @date 04/07/2012
 */
class EbayTradingTypeAccountEntriesType extends EbayTradingWsdlClass
{
	/**
	 * The AccountEntry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the data for one account entry. (See the schema documentation for AccountEntryType for details on its properties.)
	 * @var EbayTradingTypeAccountEntryType
	 */
	public $AccountEntry;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAccountEntryType AccountEntry
	 * @param DOMDocument any
	 * @return EbayTradingTypeAccountEntriesType
	 */
	public function __construct($_AccountEntry = null,$_any = null)
	{
		parent::__construct(array('AccountEntry'=>$_AccountEntry,'any'=>$_any));
	}
	/**
	 * Set AccountEntry
	 * @param AccountEntryType AccountEntry
	 * @return AccountEntryType
	 */
	public function setAccountEntry($_AccountEntry)
	{
		return ($this->AccountEntry = $_AccountEntry);
	}
	/**
	 * Get AccountEntry
	 * @return EbayTradingTypeAccountEntryType
	 */
	public function getAccountEntry()
	{
		return $this->AccountEntry;
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