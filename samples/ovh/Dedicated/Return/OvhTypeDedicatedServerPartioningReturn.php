<?php
/**
 * Class file for OvhTypeDedicatedServerPartioningReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedServerPartioningReturn
 * @date 02/07/2012
 */
class OvhTypeDedicatedServerPartioningReturn extends OvhWsdlClass
{
	/**
	 * The os
	 * @var string
	 */
	public $os;
	/**
	 * The langaue
	 * @var string
	 */
	public $langaue;
	/**
	 * The partioning
	 * @var OvhTypeMyArrayOfDedicatedServerPartioningDetailStructType
	 */
	public $partioning;
	/**
	 * The warn
	 * @var int
	 */
	public $warn;
	/**
	 * Constructor
	 * @param string os
	 * @param string langaue
	 * @param OvhTypeMyArrayOfDedicatedServerPartioningDetailStructType partioning
	 * @param int warn
	 * @return OvhTypeDedicatedServerPartioningReturn
	 */
	public function __construct($_os = null,$_langaue = null,$_partioning = null,$_warn = null)
	{
		parent::__construct(array('os'=>$_os,'langaue'=>$_langaue,'partioning'=>new OvhTypeMyArrayOfDedicatedServerPartioningDetailStructType($_partioning),'warn'=>$_warn));
	}
	/**
	 * Set os
	 * @param string os
	 * @return string
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Get os
	 * @return string
	 */
	public function getOs()
	{
		return $this->os;
	}
	/**
	 * Set langaue
	 * @param string langaue
	 * @return string
	 */
	public function setLangaue($_langaue)
	{
		return ($this->langaue = $_langaue);
	}
	/**
	 * Get langaue
	 * @return string
	 */
	public function getLangaue()
	{
		return $this->langaue;
	}
	/**
	 * Set partioning
	 * @param MyArrayOfDedicatedServerPartioningDetailStructType partioning
	 * @return MyArrayOfDedicatedServerPartioningDetailStructType
	 */
	public function setPartioning($_partioning)
	{
		return ($this->partioning = $_partioning);
	}
	/**
	 * Get partioning
	 * @return OvhTypeMyArrayOfDedicatedServerPartioningDetailStructType
	 */
	public function getPartioning()
	{
		return $this->partioning;
	}
	/**
	 * Set warn
	 * @param int warn
	 * @return int
	 */
	public function setWarn($_warn)
	{
		return ($this->warn = $_warn);
	}
	/**
	 * Get warn
	 * @return int
	 */
	public function getWarn()
	{
		return $this->warn;
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