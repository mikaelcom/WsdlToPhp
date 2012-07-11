<?php
/**
 * Class file for GGAdwordsTypeMutateResponse
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeMutateResponse
 * @date 03/07/2012
 */
class GGAdwordsTypeMutateResponse extends GGAdwordsWsdlClass
{
	/**
	 * The rval
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var GGAdwordsTypeCampaignReturnValue
	 */
	public $rval;
	/**
	 * Constructor
	 * @param GGAdwordsTypeCampaignReturnValue rval
	 * @return GGAdwordsTypeMutateResponse
	 */
	public function __construct($_rval = null)
	{
		parent::__construct(array('rval'=>$_rval));
	}
	/**
	 * Set rval
	 * @param CampaignReturnValue rval
	 * @return CampaignReturnValue
	 */
	public function setRval($_rval)
	{
		return ($this->rval = $_rval);
	}
	/**
	 * Get rval
	 * @return GGAdwordsTypeCampaignReturnValue
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