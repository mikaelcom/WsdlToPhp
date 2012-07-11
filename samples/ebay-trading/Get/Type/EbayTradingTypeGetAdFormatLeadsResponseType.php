<?php
/**
 * Class file for EbayTradingTypeGetAdFormatLeadsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetAdFormatLeadsResponseType
 * Documentation : Returns number of leads and contact and other information for each lead. One AdFormatLead node is returned for each lead.
 * @date 04/07/2012
 */
class EbayTradingTypeGetAdFormatLeadsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The AdFormatLead
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains contact and other information for one lead. One node is returned for each lead. Only returned at a detail level of ReturnAll. At least one lead must be available for the specified item to return AdFormatLead.
	 * @var EbayTradingTypeAdFormatLeadType
	 */
	public $AdFormatLead;
	/**
	 * The AdFormatLeadCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of leads returned. Only returned if you do not specify a detail level.
	 * @var int
	 */
	public $AdFormatLeadCount;
	/**
	 * Constructor
	 * @param EbayTradingTypeAdFormatLeadType AdFormatLead
	 * @param int AdFormatLeadCount
	 * @return EbayTradingTypeGetAdFormatLeadsResponseType
	 */
	public function __construct($_AdFormatLead = null,$_AdFormatLeadCount = null)
	{
		EbayTradingWsdlClass::__construct(array('AdFormatLead'=>$_AdFormatLead,'AdFormatLeadCount'=>$_AdFormatLeadCount));
	}
	/**
	 * Set AdFormatLead
	 * @param AdFormatLeadType AdFormatLead
	 * @return AdFormatLeadType
	 */
	public function setAdFormatLead($_AdFormatLead)
	{
		return ($this->AdFormatLead = $_AdFormatLead);
	}
	/**
	 * Get AdFormatLead
	 * @return EbayTradingTypeAdFormatLeadType
	 */
	public function getAdFormatLead()
	{
		return $this->AdFormatLead;
	}
	/**
	 * Set AdFormatLeadCount
	 * @param int AdFormatLeadCount
	 * @return int
	 */
	public function setAdFormatLeadCount($_AdFormatLeadCount)
	{
		return ($this->AdFormatLeadCount = $_AdFormatLeadCount);
	}
	/**
	 * Get AdFormatLeadCount
	 * @return int
	 */
	public function getAdFormatLeadCount()
	{
		return $this->AdFormatLeadCount;
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