<?php
/**
 * Class file for EbayTradingTypeGetContextualKeywordsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetContextualKeywordsResponseType
 * Documentation : Response to a GetContextualKeywords request.
 * @date 04/07/2012
 */
class EbayTradingTypeGetContextualKeywordsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ContextSearchAsset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An array of either keyword/category pairs or categories, with ranking and score.
	 * @var EbayTradingTypeContextSearchAssetType
	 */
	public $ContextSearchAsset;
	/**
	 * Constructor
	 * @param EbayTradingTypeContextSearchAssetType ContextSearchAsset
	 * @return EbayTradingTypeGetContextualKeywordsResponseType
	 */
	public function __construct($_ContextSearchAsset = null)
	{
		EbayTradingWsdlClass::__construct(array('ContextSearchAsset'=>$_ContextSearchAsset));
	}
	/**
	 * Set ContextSearchAsset
	 * @param ContextSearchAssetType ContextSearchAsset
	 * @return ContextSearchAssetType
	 */
	public function setContextSearchAsset($_ContextSearchAsset)
	{
		return ($this->ContextSearchAsset = $_ContextSearchAsset);
	}
	/**
	 * Get ContextSearchAsset
	 * @return EbayTradingTypeContextSearchAssetType
	 */
	public function getContextSearchAsset()
	{
		return $this->ContextSearchAsset;
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