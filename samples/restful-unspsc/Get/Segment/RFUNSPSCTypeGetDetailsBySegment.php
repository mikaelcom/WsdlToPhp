<?php
/**
 * Class file for RFUNSPSCTypeGetDetailsBySegment
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeGetDetailsBySegment
 * @date 15/08/2012
 */
class RFUNSPSCTypeGetDetailsBySegment extends RFUNSPSCWsdlClass
{
	/**
	 * The Segment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Segment;
	/**
	 * Constructor
	 * @param string Segment
	 * @return RFUNSPSCTypeGetDetailsBySegment
	 */
	public function __construct($_Segment = null)
	{
		parent::__construct(array('Segment'=>$_Segment));
	}
	/**
	 * Set Segment
	 * @param string Segment
	 * @return string
	 */
	public function setSegment($_Segment)
	{
		return ($this->Segment = $_Segment);
	}
	/**
	 * Get Segment
	 * @return string
	 */
	public function getSegment()
	{
		return $this->Segment;
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