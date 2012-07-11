<?php
/**
 * Class file for XiBATSRealTimeTypeImageFrameType
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeImageFrameType
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeImageFrameType extends XiBATSRealTimeWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Colonial'
	 * @return string 'Colonial'
	 */
	const VALUE_COLONIAL = 'Colonial';
	/**
	 * Constant for value 'Common'
	 * @return string 'Common'
	 */
	const VALUE_COMMON = 'Common';
	/**
	 * Constant for value 'Embed'
	 * @return string 'Embed'
	 */
	const VALUE_EMBED = 'Embed';
	/**
	 * Constant for value 'Emboss'
	 * @return string 'Emboss'
	 */
	const VALUE_EMBOSS = 'Emboss';
	/**
	 * Constant for value 'FrameOpenRight'
	 * @return string 'FrameOpenRight'
	 */
	const VALUE_FRAMEOPENRIGHT = 'FrameOpenRight';
	/**
	 * Constant for value 'FrameOpenRL'
	 * @return string 'FrameOpenRL'
	 */
	const VALUE_FRAMEOPENRL = 'FrameOpenRL';
	/**
	 * Constant for value 'OneBarGradient'
	 * @return string 'OneBarGradient'
	 */
	const VALUE_ONEBARGRADIENT = 'OneBarGradient';
	/**
	 * Constant for value 'RoundedUp'
	 * @return string 'RoundedUp'
	 */
	const VALUE_ROUNDEDUP = 'RoundedUp';
	/**
	 * Constant for value 'SlimRoundedShadowed'
	 * @return string 'SlimRoundedShadowed'
	 */
	const VALUE_SLIMROUNDEDSHADOWED = 'SlimRoundedShadowed';
	/**
	 * Constructor
	 * @return XiBATSRealTimeTypeImageFrameType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_COLONIAL,self::VALUE_COMMON,self::VALUE_EMBED,self::VALUE_EMBOSS,self::VALUE_FRAMEOPENRIGHT,self::VALUE_FRAMEOPENRL,self::VALUE_ONEBARGRADIENT,self::VALUE_ROUNDEDUP,self::VALUE_SLIMROUNDEDSHADOWED));
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