<?php
/**
 * Class file for EbayTradingTypeDisputeResolutionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeResolutionType
 * Documentation : Contains all information about a dispute resolution. A dispute can have a resolution even if the seller does not receive payment. The resolution can have various results, including a Final Value Fee credit to the seller or a strike to the buyer.
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeResolutionType extends EbayTradingWsdlClass
{
	/**
	 * The DisputeResolutionRecordType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The action resulting from the resolution, affecting either the buyer or the seller.
	 * @var EbayTradingTypeDisputeResolutionRecordTypeCodeType
	 */
	public $DisputeResolutionRecordType;
	/**
	 * The DisputeResolutionReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The reason for the resolution. The DisputeResolutionReason results in the action described by the DisputeResolutionRecordType.
	 * @var EbayTradingTypeDisputeResolutionReasonCodeType
	 */
	public $DisputeResolutionReason;
	/**
	 * The ResolutionTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time the dispute was resolved, in GMT.
	 * @var dateTime
	 */
	public $ResolutionTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeResolutionRecordTypeCodeType DisputeResolutionRecordType
	 * @param EbayTradingTypeDisputeResolutionReasonCodeType DisputeResolutionReason
	 * @param dateTime ResolutionTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeDisputeResolutionType
	 */
	public function __construct($_DisputeResolutionRecordType = null,$_DisputeResolutionReason = null,$_ResolutionTime = null,$_any = null)
	{
		parent::__construct(array('DisputeResolutionRecordType'=>$_DisputeResolutionRecordType,'DisputeResolutionReason'=>$_DisputeResolutionReason,'ResolutionTime'=>$_ResolutionTime,'any'=>$_any));
	}
	/**
	 * Set DisputeResolutionRecordType
	 * @param DisputeResolutionRecordTypeCodeType DisputeResolutionRecordType
	 * @return DisputeResolutionRecordTypeCodeType
	 */
	public function setDisputeResolutionRecordType($_DisputeResolutionRecordType)
	{
		return ($this->DisputeResolutionRecordType = EbayTradingTypeDisputeResolutionRecordTypeCodeType::valueIsValid($_DisputeResolutionRecordType)?$_DisputeResolutionRecordType:null);
	}
	/**
	 * Get DisputeResolutionRecordType
	 * @return EbayTradingTypeDisputeResolutionRecordTypeCodeType
	 */
	public function getDisputeResolutionRecordType()
	{
		return $this->DisputeResolutionRecordType;
	}
	/**
	 * Set DisputeResolutionReason
	 * @param DisputeResolutionReasonCodeType DisputeResolutionReason
	 * @return DisputeResolutionReasonCodeType
	 */
	public function setDisputeResolutionReason($_DisputeResolutionReason)
	{
		return ($this->DisputeResolutionReason = EbayTradingTypeDisputeResolutionReasonCodeType::valueIsValid($_DisputeResolutionReason)?$_DisputeResolutionReason:null);
	}
	/**
	 * Get DisputeResolutionReason
	 * @return EbayTradingTypeDisputeResolutionReasonCodeType
	 */
	public function getDisputeResolutionReason()
	{
		return $this->DisputeResolutionReason;
	}
	/**
	 * Set ResolutionTime
	 * @param dateTime ResolutionTime
	 * @return dateTime
	 */
	public function setResolutionTime($_ResolutionTime)
	{
		return ($this->ResolutionTime = $_ResolutionTime);
	}
	/**
	 * Get ResolutionTime
	 * @return dateTime
	 */
	public function getResolutionTime()
	{
		return $this->ResolutionTime;
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