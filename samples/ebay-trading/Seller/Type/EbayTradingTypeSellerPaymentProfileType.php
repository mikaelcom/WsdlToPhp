<?php
/**
 * Class file for EbayTradingTypeSellerPaymentProfileType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerPaymentProfileType
 * Documentation : Type defining the <b>SellerPaymentProfile</b> container, which is used in an Add/Revise/Relist Trading API call to reference a Business Policies payment profile. <br/><br/> <span class="tablenote"><b>Note:</b> Business Policies are not yet available for use on the eBay platform. <span/>
 * @date 04/07/2012
 */
class EbayTradingTypeSellerPaymentProfileType extends EbayTradingWsdlClass
{
	/**
	 * The PaymentProfileID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of a Business Policies payment profile. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist call to reference and use the payment policy values of a Business Policies payment profile. If both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence. <br/><br/> In the "Get" calls, the <b>PaymentProfileID</b> value will always be returned if the listing is using a Business Policies payment profile, and the <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment profile. <br/><br/> <span class="tablenote"><b>Note:</b> Business Policies are not yet available for use on the eBay platform. <span/>
	 * @var long
	 */
	public $PaymentProfileID;
	/**
	 * The PaymentProfileName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of a Business Policies payment profile. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist call to reference and use the payment policy values of a Business Policies payment profile. If both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence. <br/><br/> In the "Get" calls, the <b>PaymentProfileID</b> value will always be returned if the listing is using a Business Policies payment profile, and the <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment profile. <br/><br/> <span class="tablenote"><b>Note:</b> Business Policies are not yet available for use on the eBay platform. <span/>
	 * @var string
	 */
	public $PaymentProfileName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long PaymentProfileID
	 * @param string PaymentProfileName
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerPaymentProfileType
	 */
	public function __construct($_PaymentProfileID = null,$_PaymentProfileName = null,$_any = null)
	{
		parent::__construct(array('PaymentProfileID'=>$_PaymentProfileID,'PaymentProfileName'=>$_PaymentProfileName,'any'=>$_any));
	}
	/**
	 * Set PaymentProfileID
	 * @param long PaymentProfileID
	 * @return long
	 */
	public function setPaymentProfileID($_PaymentProfileID)
	{
		return ($this->PaymentProfileID = $_PaymentProfileID);
	}
	/**
	 * Get PaymentProfileID
	 * @return long
	 */
	public function getPaymentProfileID()
	{
		return $this->PaymentProfileID;
	}
	/**
	 * Set PaymentProfileName
	 * @param string PaymentProfileName
	 * @return string
	 */
	public function setPaymentProfileName($_PaymentProfileName)
	{
		return ($this->PaymentProfileName = $_PaymentProfileName);
	}
	/**
	 * Get PaymentProfileName
	 * @return string
	 */
	public function getPaymentProfileName()
	{
		return $this->PaymentProfileName;
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