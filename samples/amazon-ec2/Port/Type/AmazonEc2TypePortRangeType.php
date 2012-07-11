<?php
/**
 * Class file for AmazonEc2TypePortRangeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypePortRangeType
 * @date 10/07/2012
 */
class AmazonEc2TypePortRangeType extends AmazonEc2WsdlClass
{
	/**
	 * The from
	 * @var int
	 */
	public $from;
	/**
	 * The to
	 * @var int
	 */
	public $to;
	/**
	 * Constructor
	 * @param int from
	 * @param int to
	 * @return AmazonEc2TypePortRangeType
	 */
	public function __construct($_from = null,$_to = null)
	{
		parent::__construct(array('from'=>$_from,'to'=>$_to));
	}
	/**
	 * Set from
	 * @param int from
	 * @return int
	 */
	public function setFrom($_from)
	{
		return ($this->from = $_from);
	}
	/**
	 * Get from
	 * @return int
	 */
	public function getFrom()
	{
		return $this->from;
	}
	/**
	 * Set to
	 * @param int to
	 * @return int
	 */
	public function setTo($_to)
	{
		return ($this->to = $_to);
	}
	/**
	 * Get to
	 * @return int
	 */
	public function getTo()
	{
		return $this->to;
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