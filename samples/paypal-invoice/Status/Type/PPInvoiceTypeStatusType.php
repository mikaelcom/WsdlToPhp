<?php
/**
 * Class file for PPInvoiceTypeStatusType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeStatusType
 * @date 02/07/2012
 */
class PPInvoiceTypeStatusType extends PPInvoiceWsdlClass
{
	/**
	 * Constant for value 'Draft'
	 * @return string 'Draft'
	 */
	const VALUE_DRAFT = 'Draft';
	/**
	 * Constant for value 'Sent'
	 * @return string 'Sent'
	 */
	const VALUE_SENT = 'Sent';
	/**
	 * Constant for value 'Paid'
	 * @return string 'Paid'
	 */
	const VALUE_PAID = 'Paid';
	/**
	 * Constant for value 'MarkedAsPaid'
	 * @return string 'MarkedAsPaid'
	 */
	const VALUE_MARKEDASPAID = 'MarkedAsPaid';
	/**
	 * Constant for value 'Canceled'
	 * @return string 'Canceled'
	 */
	const VALUE_CANCELED = 'Canceled';
	/**
	 * Constant for value 'Refunded'
	 * @return string 'Refunded'
	 */
	const VALUE_REFUNDED = 'Refunded';
	/**
	 * Constant for value 'PartiallyRefunded'
	 * @return string 'PartiallyRefunded'
	 */
	const VALUE_PARTIALLYREFUNDED = 'PartiallyRefunded';
	/**
	 * Constant for value 'MarkedAsRefunded'
	 * @return string 'MarkedAsRefunded'
	 */
	const VALUE_MARKEDASREFUNDED = 'MarkedAsRefunded';
	/**
	 * Constructor
	 * @return PPInvoiceTypeStatusType
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
		return in_array($_value,array(self::VALUE_DRAFT,self::VALUE_SENT,self::VALUE_PAID,self::VALUE_MARKEDASPAID,self::VALUE_CANCELED,self::VALUE_REFUNDED,self::VALUE_PARTIALLYREFUNDED,self::VALUE_MARKEDASREFUNDED));
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