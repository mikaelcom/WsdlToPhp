<?php
/**
 * Class file for XWebOrderStatusTypeRequestSummaryType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeRequestSummaryType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeRequestSummaryType extends XWebOrderStatusWsdlClass
{
	/**
	 * The NbrOfSegments
	 * @var NbrOfSegments
	 */
	public $NbrOfSegments;
	/**
	 * Constructor
	 * @param NbrOfSegments NbrOfSegments
	 * @return XWebOrderStatusTypeRequestSummaryType
	 */
	public function __construct($_NbrOfSegments = null)
	{
		parent::__construct(array('NbrOfSegments'=>$_NbrOfSegments));
	}
	/**
	 * Set NbrOfSegments
	 * @param NbrOfSegments NbrOfSegments
	 * @return NbrOfSegments
	 */
	public function setNbrOfSegments($_NbrOfSegments)
	{
		return ($this->NbrOfSegments = $_NbrOfSegments);
	}
	/**
	 * Get NbrOfSegments
	 * @return NbrOfSegments
	 */
	public function getNbrOfSegments()
	{
		return $this->NbrOfSegments;
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