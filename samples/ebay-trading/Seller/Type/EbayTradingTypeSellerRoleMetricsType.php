<?php
/**
 * Class file for EbayTradingTypeSellerRoleMetricsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerRoleMetricsType
 * Documentation : Specifies 1 year feedback metrics for a seller.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerRoleMetricsType extends EbayTradingWsdlClass
{
	/**
	 * The PositiveFeedbackLeftCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Count of positive feedback entries given as a seller.
	 * @var int
	 */
	public $PositiveFeedbackLeftCount;
	/**
	 * The NegativeFeedbackLeftCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Count of negative feedback entries given as a seller.
	 * @var int
	 */
	public $NegativeFeedbackLeftCount;
	/**
	 * The NeutralFeedbackLeftCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Count of neutral feedback entries given as a seller.
	 * @var int
	 */
	public $NeutralFeedbackLeftCount;
	/**
	 * The FeedbackLeftPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percentage of leaving feedback as a seller.
	 * @var float
	 */
	public $FeedbackLeftPercent;
	/**
	 * The RepeatBuyerCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of buyers who bought more than once from this seller.
	 * @var int
	 */
	public $RepeatBuyerCount;
	/**
	 * The RepeatBuyerPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percentage of repeat buyers.
	 * @var float
	 */
	public $RepeatBuyerPercent;
	/**
	 * The UniqueBuyerCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Count of unique buyers from this seller.
	 * @var int
	 */
	public $UniqueBuyerCount;
	/**
	 * The TransactionPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percentage of number of times a member has sold successfully vs. the number of times a member has bought an item in the preceding 365 days.
	 * @var float
	 */
	public $TransactionPercent;
	/**
	 * The CrossBorderTransactionCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Count of order line items done cross-border.
	 * @var int
	 */
	public $CrossBorderTransactionCount;
	/**
	 * The CrossBorderTransactionPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percentage of cross-border order line items.
	 * @var float
	 */
	public $CrossBorderTransactionPercent;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int PositiveFeedbackLeftCount
	 * @param int NegativeFeedbackLeftCount
	 * @param int NeutralFeedbackLeftCount
	 * @param float FeedbackLeftPercent
	 * @param int RepeatBuyerCount
	 * @param float RepeatBuyerPercent
	 * @param int UniqueBuyerCount
	 * @param float TransactionPercent
	 * @param int CrossBorderTransactionCount
	 * @param float CrossBorderTransactionPercent
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerRoleMetricsType
	 */
	public function __construct($_PositiveFeedbackLeftCount = null,$_NegativeFeedbackLeftCount = null,$_NeutralFeedbackLeftCount = null,$_FeedbackLeftPercent = null,$_RepeatBuyerCount = null,$_RepeatBuyerPercent = null,$_UniqueBuyerCount = null,$_TransactionPercent = null,$_CrossBorderTransactionCount = null,$_CrossBorderTransactionPercent = null,$_any = null)
	{
		parent::__construct(array('PositiveFeedbackLeftCount'=>$_PositiveFeedbackLeftCount,'NegativeFeedbackLeftCount'=>$_NegativeFeedbackLeftCount,'NeutralFeedbackLeftCount'=>$_NeutralFeedbackLeftCount,'FeedbackLeftPercent'=>$_FeedbackLeftPercent,'RepeatBuyerCount'=>$_RepeatBuyerCount,'RepeatBuyerPercent'=>$_RepeatBuyerPercent,'UniqueBuyerCount'=>$_UniqueBuyerCount,'TransactionPercent'=>$_TransactionPercent,'CrossBorderTransactionCount'=>$_CrossBorderTransactionCount,'CrossBorderTransactionPercent'=>$_CrossBorderTransactionPercent,'any'=>$_any));
	}
	/**
	 * Set PositiveFeedbackLeftCount
	 * @param int PositiveFeedbackLeftCount
	 * @return int
	 */
	public function setPositiveFeedbackLeftCount($_PositiveFeedbackLeftCount)
	{
		return ($this->PositiveFeedbackLeftCount = $_PositiveFeedbackLeftCount);
	}
	/**
	 * Get PositiveFeedbackLeftCount
	 * @return int
	 */
	public function getPositiveFeedbackLeftCount()
	{
		return $this->PositiveFeedbackLeftCount;
	}
	/**
	 * Set NegativeFeedbackLeftCount
	 * @param int NegativeFeedbackLeftCount
	 * @return int
	 */
	public function setNegativeFeedbackLeftCount($_NegativeFeedbackLeftCount)
	{
		return ($this->NegativeFeedbackLeftCount = $_NegativeFeedbackLeftCount);
	}
	/**
	 * Get NegativeFeedbackLeftCount
	 * @return int
	 */
	public function getNegativeFeedbackLeftCount()
	{
		return $this->NegativeFeedbackLeftCount;
	}
	/**
	 * Set NeutralFeedbackLeftCount
	 * @param int NeutralFeedbackLeftCount
	 * @return int
	 */
	public function setNeutralFeedbackLeftCount($_NeutralFeedbackLeftCount)
	{
		return ($this->NeutralFeedbackLeftCount = $_NeutralFeedbackLeftCount);
	}
	/**
	 * Get NeutralFeedbackLeftCount
	 * @return int
	 */
	public function getNeutralFeedbackLeftCount()
	{
		return $this->NeutralFeedbackLeftCount;
	}
	/**
	 * Set FeedbackLeftPercent
	 * @param float FeedbackLeftPercent
	 * @return float
	 */
	public function setFeedbackLeftPercent($_FeedbackLeftPercent)
	{
		return ($this->FeedbackLeftPercent = $_FeedbackLeftPercent);
	}
	/**
	 * Get FeedbackLeftPercent
	 * @return float
	 */
	public function getFeedbackLeftPercent()
	{
		return $this->FeedbackLeftPercent;
	}
	/**
	 * Set RepeatBuyerCount
	 * @param int RepeatBuyerCount
	 * @return int
	 */
	public function setRepeatBuyerCount($_RepeatBuyerCount)
	{
		return ($this->RepeatBuyerCount = $_RepeatBuyerCount);
	}
	/**
	 * Get RepeatBuyerCount
	 * @return int
	 */
	public function getRepeatBuyerCount()
	{
		return $this->RepeatBuyerCount;
	}
	/**
	 * Set RepeatBuyerPercent
	 * @param float RepeatBuyerPercent
	 * @return float
	 */
	public function setRepeatBuyerPercent($_RepeatBuyerPercent)
	{
		return ($this->RepeatBuyerPercent = $_RepeatBuyerPercent);
	}
	/**
	 * Get RepeatBuyerPercent
	 * @return float
	 */
	public function getRepeatBuyerPercent()
	{
		return $this->RepeatBuyerPercent;
	}
	/**
	 * Set UniqueBuyerCount
	 * @param int UniqueBuyerCount
	 * @return int
	 */
	public function setUniqueBuyerCount($_UniqueBuyerCount)
	{
		return ($this->UniqueBuyerCount = $_UniqueBuyerCount);
	}
	/**
	 * Get UniqueBuyerCount
	 * @return int
	 */
	public function getUniqueBuyerCount()
	{
		return $this->UniqueBuyerCount;
	}
	/**
	 * Set TransactionPercent
	 * @param float TransactionPercent
	 * @return float
	 */
	public function setTransactionPercent($_TransactionPercent)
	{
		return ($this->TransactionPercent = $_TransactionPercent);
	}
	/**
	 * Get TransactionPercent
	 * @return float
	 */
	public function getTransactionPercent()
	{
		return $this->TransactionPercent;
	}
	/**
	 * Set CrossBorderTransactionCount
	 * @param int CrossBorderTransactionCount
	 * @return int
	 */
	public function setCrossBorderTransactionCount($_CrossBorderTransactionCount)
	{
		return ($this->CrossBorderTransactionCount = $_CrossBorderTransactionCount);
	}
	/**
	 * Get CrossBorderTransactionCount
	 * @return int
	 */
	public function getCrossBorderTransactionCount()
	{
		return $this->CrossBorderTransactionCount;
	}
	/**
	 * Set CrossBorderTransactionPercent
	 * @param float CrossBorderTransactionPercent
	 * @return float
	 */
	public function setCrossBorderTransactionPercent($_CrossBorderTransactionPercent)
	{
		return ($this->CrossBorderTransactionPercent = $_CrossBorderTransactionPercent);
	}
	/**
	 * Get CrossBorderTransactionPercent
	 * @return float
	 */
	public function getCrossBorderTransactionPercent()
	{
		return $this->CrossBorderTransactionPercent;
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