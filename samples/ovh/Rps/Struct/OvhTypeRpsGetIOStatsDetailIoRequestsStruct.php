<?php
/**
 * Class file for OvhTypeRpsGetIOStatsDetailIoRequestsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsGetIOStatsDetailIoRequestsStruct
 * @date 02/07/2012
 */
class OvhTypeRpsGetIOStatsDetailIoRequestsStruct extends OvhWsdlClass
{
	/**
	 * The read
	 * @var OvhTypeRpsGetIOStatsDetailRawStruct
	 */
	public $read;
	/**
	 * The write
	 * @var OvhTypeRpsGetIOStatsDetailRawStruct
	 */
	public $write;
	/**
	 * Constructor
	 * @param OvhTypeRpsGetIOStatsDetailRawStruct read
	 * @param OvhTypeRpsGetIOStatsDetailRawStruct write
	 * @return OvhTypeRpsGetIOStatsDetailIoRequestsStruct
	 */
	public function __construct($_read = null,$_write = null)
	{
		parent::__construct(array('read'=>$_read,'write'=>$_write));
	}
	/**
	 * Set read
	 * @param rpsGetIOStatsDetailRawStruct read
	 * @return rpsGetIOStatsDetailRawStruct
	 */
	public function setRead($_read)
	{
		return ($this->read = $_read);
	}
	/**
	 * Get read
	 * @return OvhTyperpsGetIOStatsDetailRawStruct
	 */
	public function getRead()
	{
		return $this->read;
	}
	/**
	 * Set write
	 * @param rpsGetIOStatsDetailRawStruct write
	 * @return rpsGetIOStatsDetailRawStruct
	 */
	public function setWrite($_write)
	{
		return ($this->write = $_write);
	}
	/**
	 * Get write
	 * @return OvhTyperpsGetIOStatsDetailRawStruct
	 */
	public function getWrite()
	{
		return $this->write;
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