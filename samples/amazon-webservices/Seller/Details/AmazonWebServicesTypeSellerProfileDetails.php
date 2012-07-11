<?php
/**
 * Class file for AmazonWebServicesTypeSellerProfileDetails
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeSellerProfileDetails
 * @date 10/07/2012
 */
class AmazonWebServicesTypeSellerProfileDetails extends AmazonWebServicesWsdlClass
{
	/**
	 * The SellerNickname
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SellerNickname;
	/**
	 * The OverallFeedbackRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OverallFeedbackRating;
	/**
	 * The NumberOfFeedback
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NumberOfFeedback;
	/**
	 * The NumberOfCanceledBids
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NumberOfCanceledBids;
	/**
	 * The NumberOfCanceledAuctions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NumberOfCanceledAuctions;
	/**
	 * The StoreId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StoreId;
	/**
	 * The StoreName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StoreName;
	/**
	 * The SellerFeedback
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonWebServicesTypeSellerFeedback
	 */
	public $SellerFeedback;
	/**
	 * Constructor
	 * @param string SellerNickname
	 * @param string OverallFeedbackRating
	 * @param string NumberOfFeedback
	 * @param string NumberOfCanceledBids
	 * @param string NumberOfCanceledAuctions
	 * @param string StoreId
	 * @param string StoreName
	 * @param AmazonWebServicesTypeSellerFeedback SellerFeedback
	 * @return AmazonWebServicesTypeSellerProfileDetails
	 */
	public function __construct($_SellerNickname = null,$_OverallFeedbackRating = null,$_NumberOfFeedback = null,$_NumberOfCanceledBids = null,$_NumberOfCanceledAuctions = null,$_StoreId = null,$_StoreName = null,$_SellerFeedback = null)
	{
		parent::__construct(array('SellerNickname'=>$_SellerNickname,'OverallFeedbackRating'=>$_OverallFeedbackRating,'NumberOfFeedback'=>$_NumberOfFeedback,'NumberOfCanceledBids'=>$_NumberOfCanceledBids,'NumberOfCanceledAuctions'=>$_NumberOfCanceledAuctions,'StoreId'=>$_StoreId,'StoreName'=>$_StoreName,'SellerFeedback'=>$_SellerFeedback));
	}
	/**
	 * Set SellerNickname
	 * @param string SellerNickname
	 * @return string
	 */
	public function setSellerNickname($_SellerNickname)
	{
		return ($this->SellerNickname = $_SellerNickname);
	}
	/**
	 * Get SellerNickname
	 * @return string
	 */
	public function getSellerNickname()
	{
		return $this->SellerNickname;
	}
	/**
	 * Set OverallFeedbackRating
	 * @param string OverallFeedbackRating
	 * @return string
	 */
	public function setOverallFeedbackRating($_OverallFeedbackRating)
	{
		return ($this->OverallFeedbackRating = $_OverallFeedbackRating);
	}
	/**
	 * Get OverallFeedbackRating
	 * @return string
	 */
	public function getOverallFeedbackRating()
	{
		return $this->OverallFeedbackRating;
	}
	/**
	 * Set NumberOfFeedback
	 * @param string NumberOfFeedback
	 * @return string
	 */
	public function setNumberOfFeedback($_NumberOfFeedback)
	{
		return ($this->NumberOfFeedback = $_NumberOfFeedback);
	}
	/**
	 * Get NumberOfFeedback
	 * @return string
	 */
	public function getNumberOfFeedback()
	{
		return $this->NumberOfFeedback;
	}
	/**
	 * Set NumberOfCanceledBids
	 * @param string NumberOfCanceledBids
	 * @return string
	 */
	public function setNumberOfCanceledBids($_NumberOfCanceledBids)
	{
		return ($this->NumberOfCanceledBids = $_NumberOfCanceledBids);
	}
	/**
	 * Get NumberOfCanceledBids
	 * @return string
	 */
	public function getNumberOfCanceledBids()
	{
		return $this->NumberOfCanceledBids;
	}
	/**
	 * Set NumberOfCanceledAuctions
	 * @param string NumberOfCanceledAuctions
	 * @return string
	 */
	public function setNumberOfCanceledAuctions($_NumberOfCanceledAuctions)
	{
		return ($this->NumberOfCanceledAuctions = $_NumberOfCanceledAuctions);
	}
	/**
	 * Get NumberOfCanceledAuctions
	 * @return string
	 */
	public function getNumberOfCanceledAuctions()
	{
		return $this->NumberOfCanceledAuctions;
	}
	/**
	 * Set StoreId
	 * @param string StoreId
	 * @return string
	 */
	public function setStoreId($_StoreId)
	{
		return ($this->StoreId = $_StoreId);
	}
	/**
	 * Get StoreId
	 * @return string
	 */
	public function getStoreId()
	{
		return $this->StoreId;
	}
	/**
	 * Set StoreName
	 * @param string StoreName
	 * @return string
	 */
	public function setStoreName($_StoreName)
	{
		return ($this->StoreName = $_StoreName);
	}
	/**
	 * Get StoreName
	 * @return string
	 */
	public function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * Set SellerFeedback
	 * @param SellerFeedback SellerFeedback
	 * @return SellerFeedback
	 */
	public function setSellerFeedback($_SellerFeedback)
	{
		return ($this->SellerFeedback = $_SellerFeedback);
	}
	/**
	 * Get SellerFeedback
	 * @return AmazonWebServicesTypeSellerFeedback
	 */
	public function getSellerFeedback()
	{
		return $this->SellerFeedback;
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