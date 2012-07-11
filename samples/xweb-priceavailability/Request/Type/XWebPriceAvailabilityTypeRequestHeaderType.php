<?php
/**
 * Class file for XWebPriceAvailabilityTypeRequestHeaderType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypeRequestHeaderType
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypeRequestHeaderType extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * The TransControlID
	 * @var TransControlID
	 */
	public $TransControlID;
	/**
	 * Constructor
	 * @param TransControlID TransControlID
	 * @return XWebPriceAvailabilityTypeRequestHeaderType
	 */
	public function __construct($_TransControlID = null)
	{
		parent::__construct(array('TransControlID'=>$_TransControlID));
	}
	/**
	 * Set TransControlID
	 * @param TransControlID TransControlID
	 * @return TransControlID
	 */
	public function setTransControlID($_TransControlID)
	{
		return ($this->TransControlID = $_TransControlID);
	}
	/**
	 * Get TransControlID
	 * @return TransControlID
	 */
	public function getTransControlID()
	{
		return $this->TransControlID;
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