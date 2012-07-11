<?php
/**
 * Class file for PPInvoiceTypeInvoiceDetailsType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeInvoiceDetailsType
 * Documentation : Invoice details about the invoice status and state change dates.
 * @date 02/07/2012
 */
class PPInvoiceTypeInvoiceDetailsType extends PPInvoiceWsdlClass
{
	/**
	 * The status
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Status of the invoice.
	 * @var PPInvoiceTypeStatusType
	 */
	public $status;
	/**
	 * The totalAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The total amount of the invoice (cost of items, shipping and tax, less any discount). This field is set by the invoicing system and will ignore any changes made by API callers.
	 * @var decimal
	 */
	public $totalAmount;
	/**
	 * The origin
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Whether the invoice was created via the website or via an API call.
	 * @var PPInvoiceTypeOriginType
	 */
	public $origin;
	/**
	 * The createdDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Date when the invoice was created.
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * The createdBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Account that created the invoice.
	 * @var string
	 */
	public $createdBy;
	/**
	 * The canceledDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : If canceled, date when the invoice was canceled.
	 * @var dateTime
	 */
	public $canceledDate;
	/**
	 * The canceledByActor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Actor who canceled the invoice.
	 * @var PPInvoiceTypeActorType
	 */
	public $canceledByActor;
	/**
	 * The canceledBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Account that canceled the invoice.
	 * @var string
	 */
	public $canceledBy;
	/**
	 * The lastUpdatedDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date when the invoice was last edited.
	 * @var dateTime
	 */
	public $lastUpdatedDate;
	/**
	 * The lastUpdatedBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Account that last edited the invoice.
	 * @var string
	 */
	public $lastUpdatedBy;
	/**
	 * The firstSentDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date when the invoice was first sent.
	 * @var dateTime
	 */
	public $firstSentDate;
	/**
	 * The lastSentDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date when the invoice was last sent.
	 * @var dateTime
	 */
	public $lastSentDate;
	/**
	 * The lastSentBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Account that last sent the invoice.
	 * @var string
	 */
	public $lastSentBy;
	/**
	 * The paidDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : If the invoice was paid, date when the invoice was paid.
	 * @var dateTime
	 */
	public $paidDate;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param PPInvoiceTypeStatusType status
	 * @param decimal totalAmount
	 * @param PPInvoiceTypeOriginType origin
	 * @param dateTime createdDate
	 * @param string createdBy
	 * @param dateTime canceledDate
	 * @param PPInvoiceTypeActorType canceledByActor
	 * @param string canceledBy
	 * @param dateTime lastUpdatedDate
	 * @param string lastUpdatedBy
	 * @param dateTime firstSentDate
	 * @param dateTime lastSentDate
	 * @param string lastSentBy
	 * @param dateTime paidDate
	 * @param DOMDocument any
	 * @return PPInvoiceTypeInvoiceDetailsType
	 */
	public function __construct($_status,$_totalAmount = null,$_origin,$_createdDate,$_createdBy = null,$_canceledDate = null,$_canceledByActor = null,$_canceledBy = null,$_lastUpdatedDate = null,$_lastUpdatedBy = null,$_firstSentDate = null,$_lastSentDate = null,$_lastSentBy = null,$_paidDate = null,$_any = null)
	{
		parent::__construct(array('status'=>$_status,'totalAmount'=>$_totalAmount,'origin'=>$_origin,'createdDate'=>$_createdDate,'createdBy'=>$_createdBy,'canceledDate'=>$_canceledDate,'canceledByActor'=>$_canceledByActor,'canceledBy'=>$_canceledBy,'lastUpdatedDate'=>$_lastUpdatedDate,'lastUpdatedBy'=>$_lastUpdatedBy,'firstSentDate'=>$_firstSentDate,'lastSentDate'=>$_lastSentDate,'lastSentBy'=>$_lastSentBy,'paidDate'=>$_paidDate,'any'=>$_any));
	}
	/**
	 * Set status
	 * @param StatusType status
	 * @return StatusType
	 */
	public function setStatus($_status)
	{
		return ($this->status = PPInvoiceTypeStatusType::valueIsValid($_status)?$_status:null);
	}
	/**
	 * Get status
	 * @return PPInvoiceTypeStatusType
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set totalAmount
	 * @param decimal totalAmount
	 * @return decimal
	 */
	public function setTotalAmount($_totalAmount)
	{
		return ($this->totalAmount = $_totalAmount);
	}
	/**
	 * Get totalAmount
	 * @return decimal
	 */
	public function getTotalAmount()
	{
		return $this->totalAmount;
	}
	/**
	 * Set origin
	 * @param OriginType origin
	 * @return OriginType
	 */
	public function setOrigin($_origin)
	{
		return ($this->origin = PPInvoiceTypeOriginType::valueIsValid($_origin)?$_origin:null);
	}
	/**
	 * Get origin
	 * @return PPInvoiceTypeOriginType
	 */
	public function getOrigin()
	{
		return $this->origin;
	}
	/**
	 * Set createdDate
	 * @param dateTime createdDate
	 * @return dateTime
	 */
	public function setCreatedDate($_createdDate)
	{
		return ($this->createdDate = $_createdDate);
	}
	/**
	 * Get createdDate
	 * @return dateTime
	 */
	public function getCreatedDate()
	{
		return $this->createdDate;
	}
	/**
	 * Set createdBy
	 * @param string createdBy
	 * @return string
	 */
	public function setCreatedBy($_createdBy)
	{
		return ($this->createdBy = $_createdBy);
	}
	/**
	 * Get createdBy
	 * @return string
	 */
	public function getCreatedBy()
	{
		return $this->createdBy;
	}
	/**
	 * Set canceledDate
	 * @param dateTime canceledDate
	 * @return dateTime
	 */
	public function setCanceledDate($_canceledDate)
	{
		return ($this->canceledDate = $_canceledDate);
	}
	/**
	 * Get canceledDate
	 * @return dateTime
	 */
	public function getCanceledDate()
	{
		return $this->canceledDate;
	}
	/**
	 * Set canceledByActor
	 * @param ActorType canceledByActor
	 * @return ActorType
	 */
	public function setCanceledByActor($_canceledByActor)
	{
		return ($this->canceledByActor = PPInvoiceTypeActorType::valueIsValid($_canceledByActor)?$_canceledByActor:null);
	}
	/**
	 * Get canceledByActor
	 * @return PPInvoiceTypeActorType
	 */
	public function getCanceledByActor()
	{
		return $this->canceledByActor;
	}
	/**
	 * Set canceledBy
	 * @param string canceledBy
	 * @return string
	 */
	public function setCanceledBy($_canceledBy)
	{
		return ($this->canceledBy = $_canceledBy);
	}
	/**
	 * Get canceledBy
	 * @return string
	 */
	public function getCanceledBy()
	{
		return $this->canceledBy;
	}
	/**
	 * Set lastUpdatedDate
	 * @param dateTime lastUpdatedDate
	 * @return dateTime
	 */
	public function setLastUpdatedDate($_lastUpdatedDate)
	{
		return ($this->lastUpdatedDate = $_lastUpdatedDate);
	}
	/**
	 * Get lastUpdatedDate
	 * @return dateTime
	 */
	public function getLastUpdatedDate()
	{
		return $this->lastUpdatedDate;
	}
	/**
	 * Set lastUpdatedBy
	 * @param string lastUpdatedBy
	 * @return string
	 */
	public function setLastUpdatedBy($_lastUpdatedBy)
	{
		return ($this->lastUpdatedBy = $_lastUpdatedBy);
	}
	/**
	 * Get lastUpdatedBy
	 * @return string
	 */
	public function getLastUpdatedBy()
	{
		return $this->lastUpdatedBy;
	}
	/**
	 * Set firstSentDate
	 * @param dateTime firstSentDate
	 * @return dateTime
	 */
	public function setFirstSentDate($_firstSentDate)
	{
		return ($this->firstSentDate = $_firstSentDate);
	}
	/**
	 * Get firstSentDate
	 * @return dateTime
	 */
	public function getFirstSentDate()
	{
		return $this->firstSentDate;
	}
	/**
	 * Set lastSentDate
	 * @param dateTime lastSentDate
	 * @return dateTime
	 */
	public function setLastSentDate($_lastSentDate)
	{
		return ($this->lastSentDate = $_lastSentDate);
	}
	/**
	 * Get lastSentDate
	 * @return dateTime
	 */
	public function getLastSentDate()
	{
		return $this->lastSentDate;
	}
	/**
	 * Set lastSentBy
	 * @param string lastSentBy
	 * @return string
	 */
	public function setLastSentBy($_lastSentBy)
	{
		return ($this->lastSentBy = $_lastSentBy);
	}
	/**
	 * Get lastSentBy
	 * @return string
	 */
	public function getLastSentBy()
	{
		return $this->lastSentBy;
	}
	/**
	 * Set paidDate
	 * @param dateTime paidDate
	 * @return dateTime
	 */
	public function setPaidDate($_paidDate)
	{
		return ($this->paidDate = $_paidDate);
	}
	/**
	 * Get paidDate
	 * @return dateTime
	 */
	public function getPaidDate()
	{
		return $this->paidDate;
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