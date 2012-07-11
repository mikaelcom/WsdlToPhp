<?php
/**
 * Class file for EbayTradingTypeINEscrowWorkflowTimelineCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeINEscrowWorkflowTimelineCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeINEscrowWorkflowTimelineCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Default'
	 * Meta informations :
	 * 	- documentation : Default Escrow timelines apply.
	 * @return string 'Default'
	 */
	const VALUE_DEFAULT = 'Default';
	/**
	 * Constant for value 'WorkflowA'
	 * Meta informations :
	 * 	- documentation : Special Escrow timelines for Workflow A applies.
	 * @return string 'WorkflowA'
	 */
	const VALUE_WORKFLOWA = 'WorkflowA';
	/**
	 * Constant for value 'WorkflowB'
	 * Meta informations :
	 * 	- documentation : Special Escrow timelines for Workflow B applies.
	 * @return string 'WorkflowB'
	 */
	const VALUE_WORKFLOWB = 'WorkflowB';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeINEscrowWorkflowTimelineCodeType
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
		return in_array($_value,array(self::VALUE_DEFAULT,self::VALUE_WORKFLOWA,self::VALUE_WORKFLOWB,self::VALUE_CUSTOMCODE));
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