<?php
/**
 * Class file for OvhTypeDedicatedFreedomStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFreedomStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedFreedomStruct extends OvhWsdlClass
{
	/**
	 * The remaining
	 * @var int
	 */
	public $remaining;
	/**
	 * The assigned
	 * @var int
	 */
	public $assigned;
	/**
	 * The total
	 * @var int
	 */
	public $total;
	/**
	 * The preset
	 * @var int
	 */
	public $preset;
	/**
	 * Constructor
	 * @param int remaining
	 * @param int assigned
	 * @param int total
	 * @param int preset
	 * @return OvhTypeDedicatedFreedomStruct
	 */
	public function __construct($_remaining = null,$_assigned = null,$_total = null,$_preset = null)
	{
		parent::__construct(array('remaining'=>$_remaining,'assigned'=>$_assigned,'total'=>$_total,'preset'=>$_preset));
	}
	/**
	 * Set remaining
	 * @param int remaining
	 * @return int
	 */
	public function setRemaining($_remaining)
	{
		return ($this->remaining = $_remaining);
	}
	/**
	 * Get remaining
	 * @return int
	 */
	public function getRemaining()
	{
		return $this->remaining;
	}
	/**
	 * Set assigned
	 * @param int assigned
	 * @return int
	 */
	public function setAssigned($_assigned)
	{
		return ($this->assigned = $_assigned);
	}
	/**
	 * Get assigned
	 * @return int
	 */
	public function getAssigned()
	{
		return $this->assigned;
	}
	/**
	 * Set total
	 * @param int total
	 * @return int
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
	}
	/**
	 * Get total
	 * @return int
	 */
	public function getTotal()
	{
		return $this->total;
	}
	/**
	 * Set preset
	 * @param int preset
	 * @return int
	 */
	public function setPreset($_preset)
	{
		return ($this->preset = $_preset);
	}
	/**
	 * Get preset
	 * @return int
	 */
	public function getPreset()
	{
		return $this->preset;
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