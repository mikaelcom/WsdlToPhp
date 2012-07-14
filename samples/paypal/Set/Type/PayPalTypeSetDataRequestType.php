<?php
/**
 * Class file for PayPalTypeSetDataRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetDataRequestType
 * @date 14/07/2012
 */
class PayPalTypeSetDataRequestType extends PayPalWsdlClass
{
	/**
	 * The BillingApprovalDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Details about Billing Agreements requested to be created.
	 * @var PayPalTypeBillingApprovalDetailsType
	 */
	public $BillingApprovalDetails;
	/**
	 * The BuyerDetail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Only needed if Auto Authorization is requested. The authentication session token will be passed in here.
	 * @var PayPalTypeBuyerDetailType
	 */
	public $BuyerDetail;
	/**
	 * The InfoSharingDirectives
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Requests for specific buyer information like Billing Address to be returned through GetExpressCheckoutDetails should be specified under this.
	 * @var PayPalTypeInfoSharingDirectivesType
	 */
	public $InfoSharingDirectives;
	/**
	 * Constructor
	 * @param PayPalTypeBillingApprovalDetailsType BillingApprovalDetails
	 * @param PayPalTypeBuyerDetailType BuyerDetail
	 * @param PayPalTypeInfoSharingDirectivesType InfoSharingDirectives
	 * @return PayPalTypeSetDataRequestType
	 */
	public function __construct($_BillingApprovalDetails = null,$_BuyerDetail = null,$_InfoSharingDirectives = null)
	{
		parent::__construct(array('BillingApprovalDetails'=>$_BillingApprovalDetails,'BuyerDetail'=>$_BuyerDetail,'InfoSharingDirectives'=>$_InfoSharingDirectives));
	}
	/**
	 * Set BillingApprovalDetails
	 * @param BillingApprovalDetailsType BillingApprovalDetails
	 * @return BillingApprovalDetailsType
	 */
	public function setBillingApprovalDetails($_BillingApprovalDetails)
	{
		return ($this->BillingApprovalDetails = $_BillingApprovalDetails);
	}
	/**
	 * Get BillingApprovalDetails
	 * @return PayPalTypeBillingApprovalDetailsType
	 */
	public function getBillingApprovalDetails()
	{
		return $this->BillingApprovalDetails;
	}
	/**
	 * Set BuyerDetail
	 * @param BuyerDetailType BuyerDetail
	 * @return BuyerDetailType
	 */
	public function setBuyerDetail($_BuyerDetail)
	{
		return ($this->BuyerDetail = $_BuyerDetail);
	}
	/**
	 * Get BuyerDetail
	 * @return PayPalTypeBuyerDetailType
	 */
	public function getBuyerDetail()
	{
		return $this->BuyerDetail;
	}
	/**
	 * Set InfoSharingDirectives
	 * @param InfoSharingDirectivesType InfoSharingDirectives
	 * @return InfoSharingDirectivesType
	 */
	public function setInfoSharingDirectives($_InfoSharingDirectives)
	{
		return ($this->InfoSharingDirectives = $_InfoSharingDirectives);
	}
	/**
	 * Get InfoSharingDirectives
	 * @return PayPalTypeInfoSharingDirectivesType
	 */
	public function getInfoSharingDirectives()
	{
		return $this->InfoSharingDirectives;
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