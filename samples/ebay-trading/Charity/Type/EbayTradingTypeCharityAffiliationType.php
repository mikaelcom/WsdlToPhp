<?php
/**
 * Class file for EbayTradingTypeCharityAffiliationType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharityAffiliationType
 * Documentation : Defines the affiliation status for a nonprofit charity organization registered with the dedicated eBay Giving Works provider.
 * @date 04/07/2012
 */
class EbayTradingTypeCharityAffiliationType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The type
	 * @var EbayTradingTypeCharityAffiliationTypeCodeType
	 */
	public $type;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @param string id
	 * @param EbayTradingTypeCharityAffiliationTypeCodeType type
	 * @return EbayTradingTypeCharityAffiliationType
	 */
	public function __construct($_any = null,$_id = null,$_type = null)
	{
		parent::__construct(array('any'=>$_any,'id'=>$_id,'type'=>$_type));
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
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set type
	 * @param CharityAffiliationTypeCodeType type
	 * @return CharityAffiliationTypeCodeType
	 */
	public function setType($_type)
	{
		return ($this->type = EbayTradingTypeCharityAffiliationTypeCodeType::valueIsValid($_type)?$_type:null);
	}
	/**
	 * Get type
	 * @return EbayTradingTypeCharityAffiliationTypeCodeType
	 */
	public function getType()
	{
		return $this->type;
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