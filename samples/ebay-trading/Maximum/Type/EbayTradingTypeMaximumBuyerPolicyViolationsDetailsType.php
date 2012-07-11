<?php
/**
 * Class file for EbayTradingTypeMaximumBuyerPolicyViolationsDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMaximumBuyerPolicyViolationsDetailsType
 * Documentation : [Selling] The maximum number of policy violations and the durations that can be designated by sellers at this site.
 * @date 04/07/2012
 */
class EbayTradingTypeMaximumBuyerPolicyViolationsDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The NumberOfPolicyViolations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : [Selling] The number of policy violation that can be used to limit buyers at the site.
	 * @var EbayTradingTypeNumberOfPolicyViolationsDetailsType
	 */
	public $NumberOfPolicyViolations;
	/**
	 * The PolicyViolationDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : [Selling] The policy violation duration(s) supported by the site.
	 * @var EbayTradingTypePolicyViolationDurationDetailsType
	 */
	public $PolicyViolationDuration;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeNumberOfPolicyViolationsDetailsType NumberOfPolicyViolations
	 * @param EbayTradingTypePolicyViolationDurationDetailsType PolicyViolationDuration
	 * @param DOMDocument any
	 * @return EbayTradingTypeMaximumBuyerPolicyViolationsDetailsType
	 */
	public function __construct($_NumberOfPolicyViolations = null,$_PolicyViolationDuration = null,$_any = null)
	{
		parent::__construct(array('NumberOfPolicyViolations'=>$_NumberOfPolicyViolations,'PolicyViolationDuration'=>$_PolicyViolationDuration,'any'=>$_any));
	}
	/**
	 * Set NumberOfPolicyViolations
	 * @param NumberOfPolicyViolationsDetailsType NumberOfPolicyViolations
	 * @return NumberOfPolicyViolationsDetailsType
	 */
	public function setNumberOfPolicyViolations($_NumberOfPolicyViolations)
	{
		return ($this->NumberOfPolicyViolations = $_NumberOfPolicyViolations);
	}
	/**
	 * Get NumberOfPolicyViolations
	 * @return EbayTradingTypeNumberOfPolicyViolationsDetailsType
	 */
	public function getNumberOfPolicyViolations()
	{
		return $this->NumberOfPolicyViolations;
	}
	/**
	 * Set PolicyViolationDuration
	 * @param PolicyViolationDurationDetailsType PolicyViolationDuration
	 * @return PolicyViolationDurationDetailsType
	 */
	public function setPolicyViolationDuration($_PolicyViolationDuration)
	{
		return ($this->PolicyViolationDuration = $_PolicyViolationDuration);
	}
	/**
	 * Get PolicyViolationDuration
	 * @return EbayTradingTypePolicyViolationDurationDetailsType
	 */
	public function getPolicyViolationDuration()
	{
		return $this->PolicyViolationDuration;
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