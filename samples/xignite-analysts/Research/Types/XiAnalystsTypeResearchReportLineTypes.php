<?php
/**
 * Class file for XiAnalystsTypeResearchReportLineTypes
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeResearchReportLineTypes
 * @date 08/07/2012
 */
class XiAnalystsTypeResearchReportLineTypes extends XiAnalystsWsdlClass
{
	/**
	 * Constant for value 'Heading'
	 * @return string 'Heading'
	 */
	const VALUE_HEADING = 'Heading';
	/**
	 * Constant for value 'SubHeading'
	 * @return string 'SubHeading'
	 */
	const VALUE_SUBHEADING = 'SubHeading';
	/**
	 * Constant for value 'Line'
	 * @return string 'Line'
	 */
	const VALUE_LINE = 'Line';
	/**
	 * Constant for value 'Default'
	 * @return string 'Default'
	 */
	const VALUE_DEFAULT = 'Default';
	/**
	 * Constructor
	 * @return XiAnalystsTypeResearchReportLineTypes
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
		return in_array($_value,array(self::VALUE_HEADING,self::VALUE_SUBHEADING,self::VALUE_LINE,self::VALUE_DEFAULT));
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