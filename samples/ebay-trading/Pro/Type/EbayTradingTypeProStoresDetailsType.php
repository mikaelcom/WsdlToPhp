<?php
/**
 * Class file for EbayTradingTypeProStoresDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProStoresDetailsType
 * Documentation : Details about the store.
 * @date 04/07/2012
 */
class EbayTradingTypeProStoresDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The SellerThirdPartyUsername
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The username associated with the store. Returned only if the parent container is returned.
	 * @var string
	 */
	public $SellerThirdPartyUsername;
	/**
	 * The StoreName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the store. Returned only if the parent container is returned.
	 * @var string
	 */
	public $StoreName;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status--whether enabled or disabled. Returned only if the parent container is returned.
	 * @var EbayTradingTypeEnableCodeType
	 */
	public $Status;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string SellerThirdPartyUsername
	 * @param string StoreName
	 * @param EbayTradingTypeEnableCodeType Status
	 * @param DOMDocument any
	 * @return EbayTradingTypeProStoresDetailsType
	 */
	public function __construct($_SellerThirdPartyUsername = null,$_StoreName = null,$_Status = null,$_any = null)
	{
		parent::__construct(array('SellerThirdPartyUsername'=>$_SellerThirdPartyUsername,'StoreName'=>$_StoreName,'Status'=>$_Status,'any'=>$_any));
	}
	/**
	 * Set SellerThirdPartyUsername
	 * @param string SellerThirdPartyUsername
	 * @return string
	 */
	public function setSellerThirdPartyUsername($_SellerThirdPartyUsername)
	{
		return ($this->SellerThirdPartyUsername = $_SellerThirdPartyUsername);
	}
	/**
	 * Get SellerThirdPartyUsername
	 * @return string
	 */
	public function getSellerThirdPartyUsername()
	{
		return $this->SellerThirdPartyUsername;
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
	 * Set Status
	 * @param EnableCodeType Status
	 * @return EnableCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeEnableCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeEnableCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
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