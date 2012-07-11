<?php
/**
 * Class file for PPInvoiceTypePaymentTermsType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypePaymentTermsType
 * @date 02/07/2012
 */
class PPInvoiceTypePaymentTermsType extends PPInvoiceWsdlClass
{
	/**
	 * Constant for value 'DueOnReceipt'
	 * Meta informations :
	 * 	- documentation : Due when the payer recieves the invoice.
	 * @return string 'DueOnReceipt'
	 */
	const VALUE_DUEONRECEIPT = 'DueOnReceipt';
	/**
	 * Constant for value 'DueOnDateSpecified'
	 * Meta informations :
	 * 	- documentation : Due on the date specified elsewhere in the invoice.
	 * @return string 'DueOnDateSpecified'
	 */
	const VALUE_DUEONDATESPECIFIED = 'DueOnDateSpecified';
	/**
	 * Constant for value 'Net10'
	 * Meta informations :
	 * 	- documentation : Due ten days from the invoice date.
	 * @return string 'Net10'
	 */
	const VALUE_NET10 = 'Net10';
	/**
	 * Constant for value 'Net15'
	 * Meta informations :
	 * 	- documentation : Due fifteen days from the invoice date.
	 * @return string 'Net15'
	 */
	const VALUE_NET15 = 'Net15';
	/**
	 * Constant for value 'Net30'
	 * Meta informations :
	 * 	- documentation : Due thirty days from the invoice date.
	 * @return string 'Net30'
	 */
	const VALUE_NET30 = 'Net30';
	/**
	 * Constant for value 'Net45'
	 * Meta informations :
	 * 	- documentation : Due forty five days from the invoice date.
	 * @return string 'Net45'
	 */
	const VALUE_NET45 = 'Net45';
	/**
	 * Constructor
	 * @return PPInvoiceTypePaymentTermsType
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
		return in_array($_value,array(self::VALUE_DUEONRECEIPT,self::VALUE_DUEONDATESPECIFIED,self::VALUE_NET10,self::VALUE_NET15,self::VALUE_NET30,self::VALUE_NET45));
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