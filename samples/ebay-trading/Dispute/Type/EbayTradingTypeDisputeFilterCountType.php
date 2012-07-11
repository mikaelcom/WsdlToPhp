<?php
/**
 * Class file for EbayTradingTypeDisputeFilterCountType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeFilterCountType
 * Documentation : The number of disputes that match a given filter.
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeFilterCountType extends EbayTradingWsdlClass
{
	/**
	 * The DisputeFilterType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A filter used to reduce the number of disputes returned. The filter uses criteria such as whether the dispute is awaiting a response, is closed, or is eligible for credit. Both Unpaid Item and Item Not Received disputes can be returned for the same filter value.
	 * @var EbayTradingTypeDisputeFilterTypeCodeType
	 */
	public $DisputeFilterType;
	/**
	 * The TotalAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of disputes that match the filter. In the GetUserDisputes response, not returned for the filter type that was used in the request.
	 * @var int
	 */
	public $TotalAvailable;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeFilterTypeCodeType DisputeFilterType
	 * @param int TotalAvailable
	 * @param DOMDocument any
	 * @return EbayTradingTypeDisputeFilterCountType
	 */
	public function __construct($_DisputeFilterType = null,$_TotalAvailable = null,$_any = null)
	{
		parent::__construct(array('DisputeFilterType'=>$_DisputeFilterType,'TotalAvailable'=>$_TotalAvailable,'any'=>$_any));
	}
	/**
	 * Set DisputeFilterType
	 * @param DisputeFilterTypeCodeType DisputeFilterType
	 * @return DisputeFilterTypeCodeType
	 */
	public function setDisputeFilterType($_DisputeFilterType)
	{
		return ($this->DisputeFilterType = EbayTradingTypeDisputeFilterTypeCodeType::valueIsValid($_DisputeFilterType)?$_DisputeFilterType:null);
	}
	/**
	 * Get DisputeFilterType
	 * @return EbayTradingTypeDisputeFilterTypeCodeType
	 */
	public function getDisputeFilterType()
	{
		return $this->DisputeFilterType;
	}
	/**
	 * Set TotalAvailable
	 * @param int TotalAvailable
	 * @return int
	 */
	public function setTotalAvailable($_TotalAvailable)
	{
		return ($this->TotalAvailable = $_TotalAvailable);
	}
	/**
	 * Get TotalAvailable
	 * @return int
	 */
	public function getTotalAvailable()
	{
		return $this->TotalAvailable;
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