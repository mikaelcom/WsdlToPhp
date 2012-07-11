<?php
/**
 * Class file for EbayTradingTypeCommentTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCommentTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCommentTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Positive'
	 * Meta informations :
	 * 	- documentation : Positive feedback. Increases total feedback score.
	 * @return string 'Positive'
	 */
	const VALUE_POSITIVE = 'Positive';
	/**
	 * Constant for value 'Neutral'
	 * Meta informations :
	 * 	- documentation : Neutral feedback. No effect on total feedback score.
	 * @return string 'Neutral'
	 */
	const VALUE_NEUTRAL = 'Neutral';
	/**
	 * Constant for value 'Negative'
	 * Meta informations :
	 * 	- documentation : Negative feedback. Decreases total feedback score.
	 * @return string 'Negative'
	 */
	const VALUE_NEGATIVE = 'Negative';
	/**
	 * Constant for value 'Withdrawn'
	 * Meta informations :
	 * 	- documentation : Withdrawn feedback. Removes the effect of the original feedback on total feedback score. Comments from withdrawn feedback are still visible.
	 * @return string 'Withdrawn'
	 */
	const VALUE_WITHDRAWN = 'Withdrawn';
	/**
	 * Constant for value 'IndependentlyWithdrawn'
	 * Meta informations :
	 * 	- documentation : Applies to the eBay Motors site only. Feedback is withdrawn based on the decision of a third party.
	 * @return string 'IndependentlyWithdrawn'
	 */
	const VALUE_INDEPENDENTLYWITHDRAWN = 'IndependentlyWithdrawn';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCommentTypeCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_POSITIVE,self::VALUE_NEUTRAL,self::VALUE_NEGATIVE,self::VALUE_WITHDRAWN,self::VALUE_INDEPENDENTLYWITHDRAWN,self::VALUE_CUSTOMCODE));
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