<?php
/**
 * Class file for EbayTradingTypeCharityAffiliationsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharityAffiliationsType
 * Documentation : Lists the nonprofit charity organization affiliations for a specified user.
 * @date 04/07/2012
 */
class EbayTradingTypeCharityAffiliationsType extends EbayTradingWsdlClass
{
	/**
	 * The CharityID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Indicates the affiliation status for nonprofit charity organizations registered with the dedicated eBay Giving Works provider.
	 * @var EbayTradingTypeCharityIDType
	 */
	public $CharityID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeCharityIDType CharityID
	 * @param DOMDocument any
	 * @return EbayTradingTypeCharityAffiliationsType
	 */
	public function __construct($_CharityID = null,$_any = null)
	{
		parent::__construct(array('CharityID'=>$_CharityID,'any'=>$_any));
	}
	/**
	 * Set CharityID
	 * @param CharityIDType CharityID
	 * @return CharityIDType
	 */
	public function setCharityID($_CharityID)
	{
		return ($this->CharityID = $_CharityID);
	}
	/**
	 * Get CharityID
	 * @return EbayTradingTypeCharityIDType
	 */
	public function getCharityID()
	{
		return $this->CharityID;
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