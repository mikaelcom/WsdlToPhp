<?php
/**
 * Class file for GGAdwordsTypeGetResponse
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeGetResponse
 * @date 03/07/2012
 */
class GGAdwordsTypeGetResponse extends GGAdwordsWsdlClass
{
	/**
	 * The rval
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var GGAdwordsTypeCampaignPage
	 */
	public $rval;
	/**
	 * Constructor
	 * @param GGAdwordsTypeCampaignPage rval
	 * @return GGAdwordsTypeGetResponse
	 */
	public function __construct($_rval = null)
	{
		parent::__construct(array('rval'=>$_rval));
	}
	/**
	 * Set rval
	 * @param CampaignPage rval
	 * @return CampaignPage
	 */
	public function setRval($_rval)
	{
		return ($this->rval = $_rval);
	}
	/**
	 * Get rval
	 * @return GGAdwordsTypeCampaignPage
	 */
	public function getRval()
	{
		return $this->rval;
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