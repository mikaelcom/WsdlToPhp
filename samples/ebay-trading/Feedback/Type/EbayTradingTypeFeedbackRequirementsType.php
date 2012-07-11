<?php
/**
 * Class file for EbayTradingTypeFeedbackRequirementsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackRequirementsType
 * Documentation : Used to determine whether the seller meets the minimum feedback requirements for Express.
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackRequirementsType extends EbayTradingWsdlClass
{
	/**
	 * The _
	 * @var boolean
	 */
	public $_;
	/**
	 * The minimum
	 * @var string
	 */
	public $minimum;
	/**
	 * Constructor
	 * @param boolean _
	 * @param string minimum
	 * @return EbayTradingTypeFeedbackRequirementsType
	 */
	public function __construct($__ = null,$_minimum = null)
	{
		parent::__construct(array('_'=>$__,'minimum'=>$_minimum));
	}
	/**
	 * Set _
	 * @param boolean _
	 * @return boolean
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return boolean
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set minimum
	 * @param string minimum
	 * @return string
	 */
	public function setMinimum($_minimum)
	{
		return ($this->minimum = $_minimum);
	}
	/**
	 * Get minimum
	 * @return string
	 */
	public function getMinimum()
	{
		return $this->minimum;
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