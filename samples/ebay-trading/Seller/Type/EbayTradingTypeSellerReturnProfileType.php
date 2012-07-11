<?php
/**
 * Class file for EbayTradingTypeSellerReturnProfileType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerReturnProfileType
 * Documentation : Type defining the <b>SellerReturnProfile</b> container, which is used in an Add/Revise/Relist Trading API call to reference a Business Policies return policy profile. <br/><br/> <span class="tablenote"><b>Note:</b> Business Policies are not yet available for use on the eBay platform. <span/>
 * @date 04/07/2012
 */
class EbayTradingTypeSellerReturnProfileType extends EbayTradingWsdlClass
{
	/**
	 * The ReturnProfileID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of a Business Policies return policy profile. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist call to reference and use the payment policy values of a Business Policies return policy profile. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence. <br/><br/> In the "Get" calls, the <b>ReturnProfileID</b> value will always be returned if the listing is using a Business Policies return policy profile, and the <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy profile. <br/><br/> <span class="tablenote"><b>Note:</b> Business Policies are not yet available for use on the eBay platform. <span/>
	 * @var long
	 */
	public $ReturnProfileID;
	/**
	 * The ReturnProfileName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of a Business Policies return policy profile. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist call to reference and use the return policy values of a Business Policies return policy profile. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence. <br/><br/> In the "Get" calls, the <b>ReturnProfileID</b> value will always be returned if the listing is using a Business Policies return policy profile, and the <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy profile. <br/><br/> <span class="tablenote"><b>Note:</b> Business Policies are not yet available for use on the eBay platform. <span/>
	 * @var string
	 */
	public $ReturnProfileName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long ReturnProfileID
	 * @param string ReturnProfileName
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerReturnProfileType
	 */
	public function __construct($_ReturnProfileID = null,$_ReturnProfileName = null,$_any = null)
	{
		parent::__construct(array('ReturnProfileID'=>$_ReturnProfileID,'ReturnProfileName'=>$_ReturnProfileName,'any'=>$_any));
	}
	/**
	 * Set ReturnProfileID
	 * @param long ReturnProfileID
	 * @return long
	 */
	public function setReturnProfileID($_ReturnProfileID)
	{
		return ($this->ReturnProfileID = $_ReturnProfileID);
	}
	/**
	 * Get ReturnProfileID
	 * @return long
	 */
	public function getReturnProfileID()
	{
		return $this->ReturnProfileID;
	}
	/**
	 * Set ReturnProfileName
	 * @param string ReturnProfileName
	 * @return string
	 */
	public function setReturnProfileName($_ReturnProfileName)
	{
		return ($this->ReturnProfileName = $_ReturnProfileName);
	}
	/**
	 * Get ReturnProfileName
	 * @return string
	 */
	public function getReturnProfileName()
	{
		return $this->ReturnProfileName;
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