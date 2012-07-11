<?php
/**
 * Class file for EbayTradingTypeSummaryFrequencyCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSummaryFrequencyCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSummaryFrequencyCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'EverySunday'
	 * Meta informations :
	 * 	- documentation : Deliver every Sunday.
	 * @return string 'EverySunday'
	 */
	const VALUE_EVERYSUNDAY = 'EverySunday';
	/**
	 * Constant for value 'EveryMonday'
	 * Meta informations :
	 * 	- documentation : Deliver every Monday.
	 * @return string 'EveryMonday'
	 */
	const VALUE_EVERYMONDAY = 'EveryMonday';
	/**
	 * Constant for value 'EveryTuesday'
	 * Meta informations :
	 * 	- documentation : Deliver every Tuesday.
	 * @return string 'EveryTuesday'
	 */
	const VALUE_EVERYTUESDAY = 'EveryTuesday';
	/**
	 * Constant for value 'EveryWednesday'
	 * Meta informations :
	 * 	- documentation : Deliver every Wednesday.
	 * @return string 'EveryWednesday'
	 */
	const VALUE_EVERYWEDNESDAY = 'EveryWednesday';
	/**
	 * Constant for value 'EveryThursday'
	 * Meta informations :
	 * 	- documentation : Deliver every Thursday.
	 * @return string 'EveryThursday'
	 */
	const VALUE_EVERYTHURSDAY = 'EveryThursday';
	/**
	 * Constant for value 'EveryFriday'
	 * Meta informations :
	 * 	- documentation : Deliver every Friday.
	 * @return string 'EveryFriday'
	 */
	const VALUE_EVERYFRIDAY = 'EveryFriday';
	/**
	 * Constant for value 'EverySaturday'
	 * Meta informations :
	 * 	- documentation : Deliver every Saturday.
	 * @return string 'EverySaturday'
	 */
	const VALUE_EVERYSATURDAY = 'EverySaturday';
	/**
	 * Constant for value 'MonthlyOn1st'
	 * Meta informations :
	 * 	- documentation : On day 1 of the month.
	 * @return string 'MonthlyOn1st'
	 */
	const VALUE_MONTHLYON1ST = 'MonthlyOn1st';
	/**
	 * Constant for value 'MonthlyOn2nd'
	 * Meta informations :
	 * 	- documentation : On day 2 of the month.
	 * @return string 'MonthlyOn2nd'
	 */
	const VALUE_MONTHLYON2ND = 'MonthlyOn2nd';
	/**
	 * Constant for value 'MonthlyOn3rd'
	 * Meta informations :
	 * 	- documentation : On day 3 of the month.
	 * @return string 'MonthlyOn3rd'
	 */
	const VALUE_MONTHLYON3RD = 'MonthlyOn3rd';
	/**
	 * Constant for value 'MonthlyOn4th'
	 * Meta informations :
	 * 	- documentation : On day 4 of the month.
	 * @return string 'MonthlyOn4th'
	 */
	const VALUE_MONTHLYON4TH = 'MonthlyOn4th';
	/**
	 * Constant for value 'MonthlyOn5th'
	 * Meta informations :
	 * 	- documentation : On day 5 of the month.
	 * @return string 'MonthlyOn5th'
	 */
	const VALUE_MONTHLYON5TH = 'MonthlyOn5th';
	/**
	 * Constant for value 'MonthlyOn6th'
	 * Meta informations :
	 * 	- documentation : On day 6 of the month.
	 * @return string 'MonthlyOn6th'
	 */
	const VALUE_MONTHLYON6TH = 'MonthlyOn6th';
	/**
	 * Constant for value 'MonthlyOn7th'
	 * Meta informations :
	 * 	- documentation : On day 7 of the month.
	 * @return string 'MonthlyOn7th'
	 */
	const VALUE_MONTHLYON7TH = 'MonthlyOn7th';
	/**
	 * Constant for value 'MonthlyOn8th'
	 * Meta informations :
	 * 	- documentation : On day 8 of the month.
	 * @return string 'MonthlyOn8th'
	 */
	const VALUE_MONTHLYON8TH = 'MonthlyOn8th';
	/**
	 * Constant for value 'MonthlyOn9th'
	 * Meta informations :
	 * 	- documentation : On day 9 of the month.
	 * @return string 'MonthlyOn9th'
	 */
	const VALUE_MONTHLYON9TH = 'MonthlyOn9th';
	/**
	 * Constant for value 'MonthlyOn10th'
	 * Meta informations :
	 * 	- documentation : On day 10 of the month.
	 * @return string 'MonthlyOn10th'
	 */
	const VALUE_MONTHLYON10TH = 'MonthlyOn10th';
	/**
	 * Constant for value 'MonthlyOn11th'
	 * Meta informations :
	 * 	- documentation : On day 11 of the month.
	 * @return string 'MonthlyOn11th'
	 */
	const VALUE_MONTHLYON11TH = 'MonthlyOn11th';
	/**
	 * Constant for value 'MonthlyOn12th'
	 * Meta informations :
	 * 	- documentation : On day 12 of the month.
	 * @return string 'MonthlyOn12th'
	 */
	const VALUE_MONTHLYON12TH = 'MonthlyOn12th';
	/**
	 * Constant for value 'MonthlyOn13th'
	 * Meta informations :
	 * 	- documentation : On day 13 of the month.
	 * @return string 'MonthlyOn13th'
	 */
	const VALUE_MONTHLYON13TH = 'MonthlyOn13th';
	/**
	 * Constant for value 'MonthlyOn14th'
	 * Meta informations :
	 * 	- documentation : On day 14 of the month.
	 * @return string 'MonthlyOn14th'
	 */
	const VALUE_MONTHLYON14TH = 'MonthlyOn14th';
	/**
	 * Constant for value 'MonthlyOn15th'
	 * Meta informations :
	 * 	- documentation : On day 15 of the month.
	 * @return string 'MonthlyOn15th'
	 */
	const VALUE_MONTHLYON15TH = 'MonthlyOn15th';
	/**
	 * Constant for value 'MonthlyOn16th'
	 * Meta informations :
	 * 	- documentation : On day 16 of the month.
	 * @return string 'MonthlyOn16th'
	 */
	const VALUE_MONTHLYON16TH = 'MonthlyOn16th';
	/**
	 * Constant for value 'MonthlyOn17th'
	 * Meta informations :
	 * 	- documentation : On day 17 of the month.
	 * @return string 'MonthlyOn17th'
	 */
	const VALUE_MONTHLYON17TH = 'MonthlyOn17th';
	/**
	 * Constant for value 'MonthlyOn18th'
	 * Meta informations :
	 * 	- documentation : On day 18 of the month.
	 * @return string 'MonthlyOn18th'
	 */
	const VALUE_MONTHLYON18TH = 'MonthlyOn18th';
	/**
	 * Constant for value 'MonthlyOn19th'
	 * Meta informations :
	 * 	- documentation : On day 19 of the month.
	 * @return string 'MonthlyOn19th'
	 */
	const VALUE_MONTHLYON19TH = 'MonthlyOn19th';
	/**
	 * Constant for value 'MonthlyOn20th'
	 * Meta informations :
	 * 	- documentation : On day 20 of the month.
	 * @return string 'MonthlyOn20th'
	 */
	const VALUE_MONTHLYON20TH = 'MonthlyOn20th';
	/**
	 * Constant for value 'MonthlyOn21st'
	 * Meta informations :
	 * 	- documentation : On day 21 of the month.
	 * @return string 'MonthlyOn21st'
	 */
	const VALUE_MONTHLYON21ST = 'MonthlyOn21st';
	/**
	 * Constant for value 'MonthlyOn22nd'
	 * Meta informations :
	 * 	- documentation : On day 22 of the month.
	 * @return string 'MonthlyOn22nd'
	 */
	const VALUE_MONTHLYON22ND = 'MonthlyOn22nd';
	/**
	 * Constant for value 'MonthlyOn23rd'
	 * Meta informations :
	 * 	- documentation : On day 23 of the month.
	 * @return string 'MonthlyOn23rd'
	 */
	const VALUE_MONTHLYON23RD = 'MonthlyOn23rd';
	/**
	 * Constant for value 'MonthlyOn24th'
	 * Meta informations :
	 * 	- documentation : On day 24 of the month.
	 * @return string 'MonthlyOn24th'
	 */
	const VALUE_MONTHLYON24TH = 'MonthlyOn24th';
	/**
	 * Constant for value 'MonthlyOn25th'
	 * Meta informations :
	 * 	- documentation : On day 25 of the month.
	 * @return string 'MonthlyOn25th'
	 */
	const VALUE_MONTHLYON25TH = 'MonthlyOn25th';
	/**
	 * Constant for value 'MonthlyOn26th'
	 * Meta informations :
	 * 	- documentation : On day 26 of the month.
	 * @return string 'MonthlyOn26th'
	 */
	const VALUE_MONTHLYON26TH = 'MonthlyOn26th';
	/**
	 * Constant for value 'MonthlyOn27th'
	 * Meta informations :
	 * 	- documentation : On day 27 of the month.
	 * @return string 'MonthlyOn27th'
	 */
	const VALUE_MONTHLYON27TH = 'MonthlyOn27th';
	/**
	 * Constant for value 'MonthlyOn28th'
	 * Meta informations :
	 * 	- documentation : On day 28 of the month.
	 * @return string 'MonthlyOn28th'
	 */
	const VALUE_MONTHLYON28TH = 'MonthlyOn28th';
	/**
	 * Constant for value 'MonthlyOn29th'
	 * Meta informations :
	 * 	- documentation : On day 29 of the month.
	 * @return string 'MonthlyOn29th'
	 */
	const VALUE_MONTHLYON29TH = 'MonthlyOn29th';
	/**
	 * Constant for value 'MonthlyOn30th'
	 * Meta informations :
	 * 	- documentation : On day 30 of the month.
	 * @return string 'MonthlyOn30th'
	 */
	const VALUE_MONTHLYON30TH = 'MonthlyOn30th';
	/**
	 * Constant for value 'MonthlyOn31st'
	 * Meta informations :
	 * 	- documentation : On day 31 of the month.
	 * @return string 'MonthlyOn31st'
	 */
	const VALUE_MONTHLYON31ST = 'MonthlyOn31st';
	/**
	 * Constant for value 'Every31Days'
	 * Meta informations :
	 * 	- documentation : Every 31 days.
	 * @return string 'Every31Days'
	 */
	const VALUE_EVERY31DAYS = 'Every31Days';
	/**
	 * Constant for value 'Every60Days'
	 * Meta informations :
	 * 	- documentation : Every 60 days.
	 * @return string 'Every60Days'
	 */
	const VALUE_EVERY60DAYS = 'Every60Days';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSummaryFrequencyCodeType
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
		return in_array($_value,array(self::VALUE_EVERYSUNDAY,self::VALUE_EVERYMONDAY,self::VALUE_EVERYTUESDAY,self::VALUE_EVERYWEDNESDAY,self::VALUE_EVERYTHURSDAY,self::VALUE_EVERYFRIDAY,self::VALUE_EVERYSATURDAY,self::VALUE_MONTHLYON1ST,self::VALUE_MONTHLYON2ND,self::VALUE_MONTHLYON3RD,self::VALUE_MONTHLYON4TH,self::VALUE_MONTHLYON5TH,self::VALUE_MONTHLYON6TH,self::VALUE_MONTHLYON7TH,self::VALUE_MONTHLYON8TH,self::VALUE_MONTHLYON9TH,self::VALUE_MONTHLYON10TH,self::VALUE_MONTHLYON11TH,self::VALUE_MONTHLYON12TH,self::VALUE_MONTHLYON13TH,self::VALUE_MONTHLYON14TH,self::VALUE_MONTHLYON15TH,self::VALUE_MONTHLYON16TH,self::VALUE_MONTHLYON17TH,self::VALUE_MONTHLYON18TH,self::VALUE_MONTHLYON19TH,self::VALUE_MONTHLYON20TH,self::VALUE_MONTHLYON21ST,self::VALUE_MONTHLYON22ND,self::VALUE_MONTHLYON23RD,self::VALUE_MONTHLYON24TH,self::VALUE_MONTHLYON25TH,self::VALUE_MONTHLYON26TH,self::VALUE_MONTHLYON27TH,self::VALUE_MONTHLYON28TH,self::VALUE_MONTHLYON29TH,self::VALUE_MONTHLYON30TH,self::VALUE_MONTHLYON31ST,self::VALUE_EVERY31DAYS,self::VALUE_EVERY60DAYS,self::VALUE_CUSTOMCODE));
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