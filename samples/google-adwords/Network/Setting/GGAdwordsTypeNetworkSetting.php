<?php
/**
 * Class file for GGAdwordsTypeNetworkSetting
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeNetworkSetting
 * Documentation : Network settings for a Campaign.
 * @date 03/07/2012
 */
class GGAdwordsTypeNetworkSetting extends GGAdwordsWsdlClass
{
	/**
	 * The targetGoogleSearch
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Ads will be served with Google.com search results. <span class="constraint Selectable">This field can be selected using the value "TargetGoogleSearch".</span><span class="constraint Filterable">This field can be filtered on.</span> <span class="constraint AdxEnabled">This is disabled for AdX.</span>
	 * @var boolean
	 */
	public $targetGoogleSearch;
	/**
	 * The targetSearchNetwork
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Ads will be served on partner sites in the Google Search Network (requires {@code GOOGLE_SEARCH}). <span class="constraint Selectable">This field can be selected using the value "TargetSearchNetwork".</span><span class="constraint Filterable">This field can be filtered on.</span> <span class="constraint AdxEnabled">This is disabled for AdX.</span>
	 * @var boolean
	 */
	public $targetSearchNetwork;
	/**
	 * The targetContentNetwork
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Ads will be served on specified placements in the Google Display Network. Placements are specified using {@code Placement} criteria. <span class="constraint Selectable">This field can be selected using the value "TargetContentNetwork".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var boolean
	 */
	public $targetContentNetwork;
	/**
	 * The targetContentContextual
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Ads will be served on the Google Display Network based on {@code Keyword} criteria contextually matching the placement's content (requires {@code CONTENT_NETWORK}). <span class="constraint Selectable">This field can be selected using the value "TargetContentContextual".</span><span class="constraint Filterable">This field can be filtered on.</span> <span class="constraint AdxEnabled">This is disabled for AdX.</span>
	 * @var boolean
	 */
	public $targetContentContextual;
	/**
	 * The targetPartnerSearchNetwork
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Ads will be served on the Google Partner Network. This is available to only some specific Google partner accounts. <span class="constraint Selectable">This field can be selected using the value "TargetPartnerSearchNetwork".</span><span class="constraint Filterable">This field can be filtered on.</span> <span class="constraint AdxEnabled">This is disabled for AdX.</span>
	 * @var boolean
	 */
	public $targetPartnerSearchNetwork;
	/**
	 * Constructor
	 * @param boolean targetGoogleSearch
	 * @param boolean targetSearchNetwork
	 * @param boolean targetContentNetwork
	 * @param boolean targetContentContextual
	 * @param boolean targetPartnerSearchNetwork
	 * @return GGAdwordsTypeNetworkSetting
	 */
	public function __construct($_targetGoogleSearch = null,$_targetSearchNetwork = null,$_targetContentNetwork = null,$_targetContentContextual = null,$_targetPartnerSearchNetwork = null)
	{
		parent::__construct(array('targetGoogleSearch'=>$_targetGoogleSearch,'targetSearchNetwork'=>$_targetSearchNetwork,'targetContentNetwork'=>$_targetContentNetwork,'targetContentContextual'=>$_targetContentContextual,'targetPartnerSearchNetwork'=>$_targetPartnerSearchNetwork));
	}
	/**
	 * Set targetGoogleSearch
	 * @param boolean targetGoogleSearch
	 * @return boolean
	 */
	public function setTargetGoogleSearch($_targetGoogleSearch)
	{
		return ($this->targetGoogleSearch = $_targetGoogleSearch);
	}
	/**
	 * Get targetGoogleSearch
	 * @return boolean
	 */
	public function getTargetGoogleSearch()
	{
		return $this->targetGoogleSearch;
	}
	/**
	 * Set targetSearchNetwork
	 * @param boolean targetSearchNetwork
	 * @return boolean
	 */
	public function setTargetSearchNetwork($_targetSearchNetwork)
	{
		return ($this->targetSearchNetwork = $_targetSearchNetwork);
	}
	/**
	 * Get targetSearchNetwork
	 * @return boolean
	 */
	public function getTargetSearchNetwork()
	{
		return $this->targetSearchNetwork;
	}
	/**
	 * Set targetContentNetwork
	 * @param boolean targetContentNetwork
	 * @return boolean
	 */
	public function setTargetContentNetwork($_targetContentNetwork)
	{
		return ($this->targetContentNetwork = $_targetContentNetwork);
	}
	/**
	 * Get targetContentNetwork
	 * @return boolean
	 */
	public function getTargetContentNetwork()
	{
		return $this->targetContentNetwork;
	}
	/**
	 * Set targetContentContextual
	 * @param boolean targetContentContextual
	 * @return boolean
	 */
	public function setTargetContentContextual($_targetContentContextual)
	{
		return ($this->targetContentContextual = $_targetContentContextual);
	}
	/**
	 * Get targetContentContextual
	 * @return boolean
	 */
	public function getTargetContentContextual()
	{
		return $this->targetContentContextual;
	}
	/**
	 * Set targetPartnerSearchNetwork
	 * @param boolean targetPartnerSearchNetwork
	 * @return boolean
	 */
	public function setTargetPartnerSearchNetwork($_targetPartnerSearchNetwork)
	{
		return ($this->targetPartnerSearchNetwork = $_targetPartnerSearchNetwork);
	}
	/**
	 * Get targetPartnerSearchNetwork
	 * @return boolean
	 */
	public function getTargetPartnerSearchNetwork()
	{
		return $this->targetPartnerSearchNetwork;
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