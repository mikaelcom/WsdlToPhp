<?php
/**
 * Class file for AmazonAlexaTypeOffsets
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeOffsets
 * @date 10/07/2012
 */
class AmazonAlexaTypeOffsets extends AmazonAlexaWsdlClass
{
	/**
	 * The Arc
	 * @var UnsignedIntegerType
	 */
	public $Arc;
	/**
	 * The Dat
	 * @var UnsignedIntegerType
	 */
	public $Dat;
	/**
	 * Constructor
	 * @param UnsignedIntegerType Arc
	 * @param UnsignedIntegerType Dat
	 * @return AmazonAlexaTypeOffsets
	 */
	public function __construct($_Arc = null,$_Dat = null)
	{
		parent::__construct(array('Arc'=>$_Arc,'Dat'=>$_Dat));
	}
	/**
	 * Set Arc
	 * @param UnsignedIntegerType Arc
	 * @return UnsignedIntegerType
	 */
	public function setArc($_Arc)
	{
		return ($this->Arc = $_Arc);
	}
	/**
	 * Get Arc
	 * @return UnsignedIntegerType
	 */
	public function getArc()
	{
		return $this->Arc;
	}
	/**
	 * Set Dat
	 * @param UnsignedIntegerType Dat
	 * @return UnsignedIntegerType
	 */
	public function setDat($_Dat)
	{
		return ($this->Dat = $_Dat);
	}
	/**
	 * Get Dat
	 * @return UnsignedIntegerType
	 */
	public function getDat()
	{
		return $this->Dat;
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