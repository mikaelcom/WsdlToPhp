<?php
/**
 * Class file for EbayTradingTypeSubscriptionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSubscriptionType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeSubscriptionType extends EbayTradingWsdlClass
{
	/**
	 * The EIASToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var string
	 */
	public $EIASToken;
	/**
	 * The SiteID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $SiteID;
	/**
	 * The Active
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var boolean
	 */
	public $Active;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string EIASToken
	 * @param EbayTradingTypeSiteCodeType SiteID
	 * @param boolean Active
	 * @param DOMDocument any
	 * @return EbayTradingTypeSubscriptionType
	 */
	public function __construct($_EIASToken = null,$_SiteID = null,$_Active = null,$_any = null)
	{
		parent::__construct(array('EIASToken'=>$_EIASToken,'SiteID'=>$_SiteID,'Active'=>$_Active,'any'=>$_any));
	}
	/**
	 * Set EIASToken
	 * @param string EIASToken
	 * @return string
	 */
	public function setEIASToken($_EIASToken)
	{
		return ($this->EIASToken = $_EIASToken);
	}
	/**
	 * Get EIASToken
	 * @return string
	 */
	public function getEIASToken()
	{
		return $this->EIASToken;
	}
	/**
	 * Set SiteID
	 * @param SiteCodeType SiteID
	 * @return SiteCodeType
	 */
	public function setSiteID($_SiteID)
	{
		return ($this->SiteID = EbayTradingTypeSiteCodeType::valueIsValid($_SiteID)?$_SiteID:null);
	}
	/**
	 * Get SiteID
	 * @return EbayTradingTypeSiteCodeType
	 */
	public function getSiteID()
	{
		return $this->SiteID;
	}
	/**
	 * Set Active
	 * @param boolean Active
	 * @return boolean
	 */
	public function setActive($_Active)
	{
		return ($this->Active = $_Active);
	}
	/**
	 * Get Active
	 * @return boolean
	 */
	public function getActive()
	{
		return $this->Active;
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