<?php
/**
 * Class file for EbayTradingTypeAccountHistorySelectionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAccountHistorySelectionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAccountHistorySelectionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'LastInvoice'
	 * Meta informations :
	 * 	- documentation : (in) Contains the entries since the last invoice eBay sent to the seller. If you use LastInvoice, then InvoiceDate, BeginDate and EndDate are ignored.
	 * @return string 'LastInvoice'
	 */
	const VALUE_LASTINVOICE = 'LastInvoice';
	/**
	 * Constant for value 'SpecifiedInvoice'
	 * Meta informations :
	 * 	- documentation : (in) Contains the entries for a specific invoice, identified by the invoice month and year. If you use SpecifiedInvoice, then you must also use InvoiceDate. If you use SpecifiedInvoice, then BeginDate and EndDate are ignored.
	 * @return string 'SpecifiedInvoice'
	 */
	const VALUE_SPECIFIEDINVOICE = 'SpecifiedInvoice';
	/**
	 * Constant for value 'BetweenSpecifiedDates'
	 * Meta informations :
	 * 	- documentation : (in) Contains entries that were posted to the seller's account between two dates. The period covered may cross the boundaries of formal invoices. If you use BetweenSpecifiedDates, then you also must specify BeginDate and EndDate. If you use BetweenSpecifiedDates, then InvoiceDate is ignored.
	 * @return string 'BetweenSpecifiedDates'
	 */
	const VALUE_BETWEENSPECIFIEDDATES = 'BetweenSpecifiedDates';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAccountHistorySelectionCodeType
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
		return in_array($_value,array(self::VALUE_LASTINVOICE,self::VALUE_SPECIFIEDINVOICE,self::VALUE_BETWEENSPECIFIEDDATES,self::VALUE_CUSTOMCODE));
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