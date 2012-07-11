<?php
/**
 * Class file for EbayTradingTypeGetCharitiesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCharitiesRequestType
 * Documentation : Searches for nonprofit charity organizations that meet the criteria specified in the request. It is recommended that you use at least one input filter, because this call no longer returns all charities when made without filters.
 * @date 04/07/2012
 */
class EbayTradingTypeGetCharitiesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CharityID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identification number assigned by eBay to registered nonprofit charity organizations.
	 * @var string
	 */
	public $CharityID;
	/**
	 * The CharityName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A name assigned to a specified nonprofit organization. Accepts full charity nonprofit name or partial name as input. For example, enter a CharityName of "heart" (case-insensitive) to return all charity nonprofits that start with "heart." Use with a MatchType value of "Contains" to return all charity nonprofits that contain the string "heart."
	 * @var string
	 */
	public $CharityName;
	/**
	 * The Query
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Accepts a case-insensitive string used to find a nonprofit charity organization. Default behavior is to search the CharityName field. Use with an IncludeDescription value of true to include the Mission field in the search.
	 * @var string
	 */
	public $Query;
	/**
	 * The CharityRegion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Region that the nonprofit charity organization is associated with. A specific nonprofit charity organization may be associated with only one region. Meaning of input values differs depending on the site. See GetCharities in the API Developer's Guide for the meaning of each input/output value. CharityRegion input value must be valid for that SiteID.
	 * @var int
	 */
	public $CharityRegion;
	/**
	 * The CharityDomain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Domain (mission area) that a nonprofit charity organization belongs to. Nonprofit charity organizations may belong to multiple mission areas. Meaning of input values differs depending on the site. See GetCharities in the API Developer's Guide for the meaning of each input/output value. CharityDomain input value must be valid for that SiteID.
	 * @var int
	 */
	public $CharityDomain;
	/**
	 * The IncludeDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used with Query to search for charity nonprofit organizations. A value of true will search the Mission field as well as the CharityName field for a string specified in Query.
	 * @var boolean
	 */
	public $IncludeDescription;
	/**
	 * The MatchType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the type of string matching to use when a value is submitted in CharityName. If no value is specified, default behavior is "StartsWith." Does not apply to Query.
	 * @var EbayTradingTypeStringMatchCodeType
	 */
	public $MatchType;
	/**
	 * The Featured
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used to decide if the search is only for featured charities. A value of true will search for only featured charities.
	 * @var boolean
	 */
	public $Featured;
	/**
	 * The CampaignID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for future use.
	 * @var long
	 */
	public $CampaignID;
	/**
	 * Constructor
	 * @param string CharityID
	 * @param string CharityName
	 * @param string Query
	 * @param int CharityRegion
	 * @param int CharityDomain
	 * @param boolean IncludeDescription
	 * @param EbayTradingTypeStringMatchCodeType MatchType
	 * @param boolean Featured
	 * @param long CampaignID
	 * @return EbayTradingTypeGetCharitiesRequestType
	 */
	public function __construct($_CharityID = null,$_CharityName = null,$_Query = null,$_CharityRegion = null,$_CharityDomain = null,$_IncludeDescription = null,$_MatchType = null,$_Featured = null,$_CampaignID = null)
	{
		EbayTradingWsdlClass::__construct(array('CharityID'=>$_CharityID,'CharityName'=>$_CharityName,'Query'=>$_Query,'CharityRegion'=>$_CharityRegion,'CharityDomain'=>$_CharityDomain,'IncludeDescription'=>$_IncludeDescription,'MatchType'=>$_MatchType,'Featured'=>$_Featured,'CampaignID'=>$_CampaignID));
	}
	/**
	 * Set CharityID
	 * @param string CharityID
	 * @return string
	 */
	public function setCharityID($_CharityID)
	{
		return ($this->CharityID = $_CharityID);
	}
	/**
	 * Get CharityID
	 * @return string
	 */
	public function getCharityID()
	{
		return $this->CharityID;
	}
	/**
	 * Set CharityName
	 * @param string CharityName
	 * @return string
	 */
	public function setCharityName($_CharityName)
	{
		return ($this->CharityName = $_CharityName);
	}
	/**
	 * Get CharityName
	 * @return string
	 */
	public function getCharityName()
	{
		return $this->CharityName;
	}
	/**
	 * Set Query
	 * @param string Query
	 * @return string
	 */
	public function setQuery($_Query)
	{
		return ($this->Query = $_Query);
	}
	/**
	 * Get Query
	 * @return string
	 */
	public function getQuery()
	{
		return $this->Query;
	}
	/**
	 * Set CharityRegion
	 * @param int CharityRegion
	 * @return int
	 */
	public function setCharityRegion($_CharityRegion)
	{
		return ($this->CharityRegion = $_CharityRegion);
	}
	/**
	 * Get CharityRegion
	 * @return int
	 */
	public function getCharityRegion()
	{
		return $this->CharityRegion;
	}
	/**
	 * Set CharityDomain
	 * @param int CharityDomain
	 * @return int
	 */
	public function setCharityDomain($_CharityDomain)
	{
		return ($this->CharityDomain = $_CharityDomain);
	}
	/**
	 * Get CharityDomain
	 * @return int
	 */
	public function getCharityDomain()
	{
		return $this->CharityDomain;
	}
	/**
	 * Set IncludeDescription
	 * @param boolean IncludeDescription
	 * @return boolean
	 */
	public function setIncludeDescription($_IncludeDescription)
	{
		return ($this->IncludeDescription = $_IncludeDescription);
	}
	/**
	 * Get IncludeDescription
	 * @return boolean
	 */
	public function getIncludeDescription()
	{
		return $this->IncludeDescription;
	}
	/**
	 * Set MatchType
	 * @param StringMatchCodeType MatchType
	 * @return StringMatchCodeType
	 */
	public function setMatchType($_MatchType)
	{
		return ($this->MatchType = EbayTradingTypeStringMatchCodeType::valueIsValid($_MatchType)?$_MatchType:null);
	}
	/**
	 * Get MatchType
	 * @return EbayTradingTypeStringMatchCodeType
	 */
	public function getMatchType()
	{
		return $this->MatchType;
	}
	/**
	 * Set Featured
	 * @param boolean Featured
	 * @return boolean
	 */
	public function setFeatured($_Featured)
	{
		return ($this->Featured = $_Featured);
	}
	/**
	 * Get Featured
	 * @return boolean
	 */
	public function getFeatured()
	{
		return $this->Featured;
	}
	/**
	 * Set CampaignID
	 * @param long CampaignID
	 * @return long
	 */
	public function setCampaignID($_CampaignID)
	{
		return ($this->CampaignID = $_CampaignID);
	}
	/**
	 * Get CampaignID
	 * @return long
	 */
	public function getCampaignID()
	{
		return $this->CampaignID;
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