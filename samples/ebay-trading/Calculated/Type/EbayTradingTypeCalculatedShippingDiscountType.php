<?php
/**
 * Class file for EbayTradingTypeCalculatedShippingDiscountType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCalculatedShippingDiscountType
 * Documentation : Details of an individual discount profile defined by the user for calculated shipping.
 * @date 04/07/2012
 */
class EbayTradingTypeCalculatedShippingDiscountType extends EbayTradingWsdlClass
{
	/**
	 * The DiscountName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of discount or "rule" that is being used by the profile. Only WeightOff is a "variable" rule, as defined in the documentation on shipping discount profiles.
	 * @var EbayTradingTypeDiscountNameCodeType
	 */
	public $DiscountName;
	/**
	 * The DiscountProfile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Details of this particular calculated shipping discount profile. If ModifyActionCode is Modify, all details of the new version of the profile must be provided. If ModifyActionCode is Delete, DiscountProfileID is required, MappingDiscountProfileID is optional, and all other fields of DiscountProfile are ignored. Restrictions of how many profiles you can have for a given discount rule are discussed in the documentation on shipping discount profiles.
	 * @var EbayTradingTypeDiscountProfileType
	 */
	public $DiscountProfile;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeDiscountNameCodeType DiscountName
	 * @param EbayTradingTypeDiscountProfileType DiscountProfile
	 * @param DOMDocument any
	 * @return EbayTradingTypeCalculatedShippingDiscountType
	 */
	public function __construct($_DiscountName = null,$_DiscountProfile = null,$_any = null)
	{
		parent::__construct(array('DiscountName'=>$_DiscountName,'DiscountProfile'=>$_DiscountProfile,'any'=>$_any));
	}
	/**
	 * Set DiscountName
	 * @param DiscountNameCodeType DiscountName
	 * @return DiscountNameCodeType
	 */
	public function setDiscountName($_DiscountName)
	{
		return ($this->DiscountName = EbayTradingTypeDiscountNameCodeType::valueIsValid($_DiscountName)?$_DiscountName:null);
	}
	/**
	 * Get DiscountName
	 * @return EbayTradingTypeDiscountNameCodeType
	 */
	public function getDiscountName()
	{
		return $this->DiscountName;
	}
	/**
	 * Set DiscountProfile
	 * @param DiscountProfileType DiscountProfile
	 * @return DiscountProfileType
	 */
	public function setDiscountProfile($_DiscountProfile)
	{
		return ($this->DiscountProfile = $_DiscountProfile);
	}
	/**
	 * Get DiscountProfile
	 * @return EbayTradingTypeDiscountProfileType
	 */
	public function getDiscountProfile()
	{
		return $this->DiscountProfile;
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