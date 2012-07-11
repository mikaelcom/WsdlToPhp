<?php
/**
 * Class file for OvhTypeRpsGetIOStatsDetailRawStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsGetIOStatsDetailRawStruct
 * @date 02/07/2012
 */
class OvhTypeRpsGetIOStatsDetailRawStruct extends OvhWsdlClass
{
	/**
	 * The raw
	 * @var string
	 */
	public $raw;
	/**
	 * Constructor
	 * @param string raw
	 * @return OvhTypeRpsGetIOStatsDetailRawStruct
	 */
	public function __construct($_raw = null)
	{
		parent::__construct(array('raw'=>$_raw));
	}
	/**
	 * Set raw
	 * @param string raw
	 * @return string
	 */
	public function setRaw($_raw)
	{
		return ($this->raw = $_raw);
	}
	/**
	 * Get raw
	 * @return string
	 */
	public function getRaw()
	{
		return $this->raw;
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