<?php
/**
 * Class file for XWebOrderStatusTypeResponseOrderStatusSummaryType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeResponseOrderStatusSummaryType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeResponseOrderStatusSummaryType extends XWebOrderStatusWsdlClass
{
	/**
	 * The NbrOfSegments
	 * @var NbrOfSegments
	 */
	public $NbrOfSegments;
	/**
	 * Constructor
	 * @param NbrOfSegments NbrOfSegments
	 * @return XWebOrderStatusTypeResponseOrderStatusSummaryType
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