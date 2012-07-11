<?php
/**
 * Class file for EbayTradingTypePaymentHoldDetailType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaymentHoldDetailType
 * Documentation : This type defines the <b>PaymentHoldDetails</b> container, which consists of information that can assist DE or AT sellers expedite the payout process for orders that are subject to the new eBay payment process.
 * @date 04/07/2012
 */
class EbayTradingTypePaymentHoldDetailType extends EbayTradingWsdlClass
{
	/**
	 * The ExpectedReleaseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Timestamp that indicates the expected date in which eBay will distribute the payout to the seller's account. This is not a firm date and is subject to change.
	 * @var dateTime
	 */
	public $ExpectedReleaseDate;
	/**
	 * The RequiredSellerActionArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of one or more <b>RequiredSellerAction</b> fields. <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to expedite the seller payout process.
	 * @var EbayTradingTypeRequiredSellerActionArrayType
	 */
	public $RequiredSellerActionArray;
	/**
	 * The NumOfReqSellerActions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Integer value that indicates the number of possible actions a seller can take to possibly expedite the seller payout process. This value should equal the number of <b>RequiredSellerAction</b> fields contained in the <b>RequiredSellerActionArray</b> container.
	 * @var int
	 */
	public $NumOfReqSellerActions;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param dateTime ExpectedReleaseDate
	 * @param EbayTradingTypeRequiredSellerActionArrayType RequiredSellerActionArray
	 * @param int NumOfReqSellerActions
	 * @param DOMDocument any
	 * @return EbayTradingTypePaymentHoldDetailType
	 */
	public function __construct($_ExpectedReleaseDate = null,$_RequiredSellerActionArray = null,$_NumOfReqSellerActions = null,$_any = null)
	{
		parent::__construct(array('ExpectedReleaseDate'=>$_ExpectedReleaseDate,'RequiredSellerActionArray'=>$_RequiredSellerActionArray,'NumOfReqSellerActions'=>$_NumOfReqSellerActions,'any'=>$_any));
	}
	/**
	 * Set ExpectedReleaseDate
	 * @param dateTime ExpectedReleaseDate
	 * @return dateTime
	 */
	public function setExpectedReleaseDate($_ExpectedReleaseDate)
	{
		return ($this->ExpectedReleaseDate = $_ExpectedReleaseDate);
	}
	/**
	 * Get ExpectedReleaseDate
	 * @return dateTime
	 */
	public function getExpectedReleaseDate()
	{
		return $this->ExpectedReleaseDate;
	}
	/**
	 * Set RequiredSellerActionArray
	 * @param RequiredSellerActionArrayType RequiredSellerActionArray
	 * @return RequiredSellerActionArrayType
	 */
	public function setRequiredSellerActionArray($_RequiredSellerActionArray)
	{
		return ($this->RequiredSellerActionArray = $_RequiredSellerActionArray);
	}
	/**
	 * Get RequiredSellerActionArray
	 * @return EbayTradingTypeRequiredSellerActionArrayType
	 */
	public function getRequiredSellerActionArray()
	{
		return $this->RequiredSellerActionArray;
	}
	/**
	 * Set NumOfReqSellerActions
	 * @param int NumOfReqSellerActions
	 * @return int
	 */
	public function setNumOfReqSellerActions($_NumOfReqSellerActions)
	{
		return ($this->NumOfReqSellerActions = $_NumOfReqSellerActions);
	}
	/**
	 * Get NumOfReqSellerActions
	 * @return int
	 */
	public function getNumOfReqSellerActions()
	{
		return $this->NumOfReqSellerActions;
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