<?php
/**
 * Class file for GGAdwordsTypeCampaignOperation
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeCampaignOperation
 * Documentation : An operation on an AdWords campaign. <p class="note"><b>Note:</b> The <code>REMOVE</code> operator is not supported. To remove a campaign, set its {@link Campaign#status status} to <code>DELETED</code>.</p>
 * @date 03/07/2012
 */
class GGAdwordsTypeCampaignOperation extends GGAdwordsTypeOperation
{
	/**
	 * The biddingTransition
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Changes the bidding strategy for this campaign. Use only when performing a <code>SET</code> operation.
	 * @var GGAdwordsTypeBiddingTransition
	 */
	public $biddingTransition;
	/**
	 * The operand
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * @var GGAdwordsTypeCampaign
	 */
	public $operand;
	/**
	 * Constructor
	 * @param GGAdwordsTypeBiddingTransition biddingTransition
	 * @param GGAdwordsTypeCampaign operand
	 * @return GGAdwordsTypeCampaignOperation
	 */
	public function __construct($_biddingTransition = null,$_operand = null)
	{
		GGAdwordsWsdlClass::__construct(array('biddingTransition'=>$_biddingTransition,'operand'=>$_operand));
	}
	/**
	 * Set biddingTransition
	 * @param BiddingTransition biddingTransition
	 * @return BiddingTransition
	 */
	public function setBiddingTransition($_biddingTransition)
	{
		return ($this->biddingTransition = $_biddingTransition);
	}
	/**
	 * Get biddingTransition
	 * @return GGAdwordsTypeBiddingTransition
	 */
	public function getBiddingTransition()
	{
		return $this->biddingTransition;
	}
	/**
	 * Set operand
	 * @param Campaign operand
	 * @return Campaign
	 */
	public function setOperand($_operand)
	{
		return ($this->operand = $_operand);
	}
	/**
	 * Get operand
	 * @return GGAdwordsTypeCampaign
	 */
	public function getOperand()
	{
		return $this->operand;
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