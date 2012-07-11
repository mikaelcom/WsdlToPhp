<?php
/**
 * Class file for XWebOrderStatusTypeResponseShipmentStatusSummaryType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeResponseShipmentStatusSummaryType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeResponseShipmentStatusSummaryType extends XWebOrderStatusWsdlClass
{
	/**
	 * The NbrOfContainers
	 * @var NbrOfContainers
	 */
	public $NbrOfContainers;
	/**
	 * The NbrOfSegments
	 * @var NbrOfSegments
	 */
	public $NbrOfSegments;
	/**
	 * Constructor
	 * @param NbrOfContainers NbrOfContainers
	 * @param NbrOfSegments NbrOfSegments
	 * @return XWebOrderStatusTypeResponseShipmentStatusSummaryType
	 */
	public function __construct($_NbrOfContainers = null,$_NbrOfSegments = null)
	{
		parent::__construct(array('NbrOfContainers'=>$_NbrOfContainers,'NbrOfSegments'=>$_NbrOfSegments));
	}
	/**
	 * Set NbrOfContainers
	 * @param NbrOfContainers NbrOfContainers
	 * @return NbrOfContainers
	 */
	public function setNbrOfContainers($_NbrOfContainers)
	{
		return ($this->NbrOfContainers = $_NbrOfContainers);
	}
	/**
	 * Get NbrOfContainers
	 * @return NbrOfContainers
	 */
	public function getNbrOfContainers()
	{
		return $this->NbrOfContainers;
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