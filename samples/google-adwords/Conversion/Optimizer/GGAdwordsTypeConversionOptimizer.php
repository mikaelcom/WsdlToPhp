<?php
/**
 * Class file for GGAdwordsTypeConversionOptimizer
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeConversionOptimizer
 * Documentation : Conversion optimizer bidding strategy. For more information, visit the <a href="http://www.google.com/adwords/conversionoptimizer/index.html" >Conversion Optimizer site</a>. <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @date 03/07/2012
 */
class GGAdwordsTypeConversionOptimizer extends GGAdwordsTypeBiddingStrategy
{
	/**
	 * The pricingModel
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Pricing model for the conversion optimizer bidding strategy, Click for pay-per-click or Conversions for pay-per-conversions. If the pricing model is not specified it defaults to Clicks. <span class="constraint Selectable">This field can be selected using the value "PricingModel".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var GGAdwordsTypePricingModel
	 */
	public $pricingModel;
	/**
	 * The conversionOptimizerBidType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Bid type for the conversion optimizer campaign <span class="constraint Selectable">This field can be selected using the value "ConversionOptimizerBidType".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var GGAdwordsTypeConversionOptimizerBidType
	 */
	public $conversionOptimizerBidType;
	/**
	 * The deduplicationMode
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Deduplication mode for the conversion optimizer campaign <span class="constraint Selectable">This field can be selected using the value "DeduplicationMode".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var GGAdwordsTypeConversionDeduplicationMode
	 */
	public $deduplicationMode;
	/**
	 * Constructor
	 * @param GGAdwordsTypePricingModel pricingModel
	 * @param GGAdwordsTypeConversionOptimizerBidType conversionOptimizerBidType
	 * @param GGAdwordsTypeConversionDeduplicationMode deduplicationMode
	 * @return GGAdwordsTypeConversionOptimizer
	 */
	public function __construct($_pricingModel = null,$_conversionOptimizerBidType = null,$_deduplicationMode = null)
	{
		GGAdwordsWsdlClass::__construct(array('pricingModel'=>$_pricingModel,'conversionOptimizerBidType'=>$_conversionOptimizerBidType,'deduplicationMode'=>$_deduplicationMode));
	}
	/**
	 * Set pricingModel
	 * @param PricingModel pricingModel
	 * @return PricingModel
	 */
	public function setPricingModel($_pricingModel)
	{
		return ($this->pricingModel = GGAdwordsTypePricingModel::valueIsValid($_pricingModel)?$_pricingModel:null);
	}
	/**
	 * Get pricingModel
	 * @return GGAdwordsTypePricingModel
	 */
	public function getPricingModel()
	{
		return $this->pricingModel;
	}
	/**
	 * Set conversionOptimizerBidType
	 * @param ConversionOptimizerBidType conversionOptimizerBidType
	 * @return ConversionOptimizerBidType
	 */
	public function setConversionOptimizerBidType($_conversionOptimizerBidType)
	{
		return ($this->conversionOptimizerBidType = GGAdwordsTypeConversionOptimizerBidType::valueIsValid($_conversionOptimizerBidType)?$_conversionOptimizerBidType:null);
	}
	/**
	 * Get conversionOptimizerBidType
	 * @return GGAdwordsTypeConversionOptimizerBidType
	 */
	public function getConversionOptimizerBidType()
	{
		return $this->conversionOptimizerBidType;
	}
	/**
	 * Set deduplicationMode
	 * @param ConversionDeduplicationMode deduplicationMode
	 * @return ConversionDeduplicationMode
	 */
	public function setDeduplicationMode($_deduplicationMode)
	{
		return ($this->deduplicationMode = GGAdwordsTypeConversionDeduplicationMode::valueIsValid($_deduplicationMode)?$_deduplicationMode:null);
	}
	/**
	 * Get deduplicationMode
	 * @return GGAdwordsTypeConversionDeduplicationMode
	 */
	public function getDeduplicationMode()
	{
		return $this->deduplicationMode;
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