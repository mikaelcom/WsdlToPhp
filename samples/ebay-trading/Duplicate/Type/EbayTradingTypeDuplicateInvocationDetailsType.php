<?php
/**
 * Class file for EbayTradingTypeDuplicateInvocationDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDuplicateInvocationDetailsType
 * Documentation : Contains properties that provide information on duplicate uses of InvocationIDs.
 * @date 04/07/2012
 */
class EbayTradingTypeDuplicateInvocationDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The DuplicateInvocationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The duplicate InvocationID.
	 * @var EbayTradingTypeUUIDType
	 */
	public $DuplicateInvocationID;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status of the previous call that used the InvocationID.
	 * @var EbayTradingTypeInvocationStatusType
	 */
	public $Status;
	/**
	 * The InvocationTrackingID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The id that identifies the business item the previous API invocation created. For example, the ItemID of the item created by an AddItem call.
	 * @var string
	 */
	public $InvocationTrackingID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeUUIDType DuplicateInvocationID
	 * @param EbayTradingTypeInvocationStatusType Status
	 * @param string InvocationTrackingID
	 * @param DOMDocument any
	 * @return EbayTradingTypeDuplicateInvocationDetailsType
	 */
	public function __construct($_DuplicateInvocationID = null,$_Status = null,$_InvocationTrackingID = null,$_any = null)
	{
		parent::__construct(array('DuplicateInvocationID'=>$_DuplicateInvocationID,'Status'=>$_Status,'InvocationTrackingID'=>$_InvocationTrackingID,'any'=>$_any));
	}
	/**
	 * Set DuplicateInvocationID
	 * @param UUIDType DuplicateInvocationID
	 * @return UUIDType
	 */
	public function setDuplicateInvocationID($_DuplicateInvocationID)
	{
		return ($this->DuplicateInvocationID = EbayTradingTypeUUIDType::valueIsValid($_DuplicateInvocationID)?$_DuplicateInvocationID:null);
	}
	/**
	 * Get DuplicateInvocationID
	 * @return EbayTradingTypeUUIDType
	 */
	public function getDuplicateInvocationID()
	{
		return $this->DuplicateInvocationID;
	}
	/**
	 * Set Status
	 * @param InvocationStatusType Status
	 * @return InvocationStatusType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeInvocationStatusType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeInvocationStatusType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set InvocationTrackingID
	 * @param string InvocationTrackingID
	 * @return string
	 */
	public function setInvocationTrackingID($_InvocationTrackingID)
	{
		return ($this->InvocationTrackingID = $_InvocationTrackingID);
	}
	/**
	 * Get InvocationTrackingID
	 * @return string
	 */
	public function getInvocationTrackingID()
	{
		return $this->InvocationTrackingID;
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