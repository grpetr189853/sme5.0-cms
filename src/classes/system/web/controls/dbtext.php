<?php
 $this->ImportClass("system.web.controls.link","linkcontrol");
 $this->ImportClass("system.web.controls.dbfield","dbfieldcontrol");

/** DbTextControl control
     * @author Artem Mikhmel <amikhmel@activemedia.com.ua>
     * @version 1.0
     * @package Framework
     * @subpackage classes.system.web.controls
     * @access public
	 */
	class DbTextControl extends DbFieldControl  {
        var $ClassName = "DbTextControl";
        var $Version = "1.0";
		/**  Table object
        * @var  AbstractTable   $Storage
        */
        var $Storage;

        	 /**
          * Initialization data array
          * structure:
          *           <ul>
          *           <li> <b>name</b>           - control name
          *           <li> <b>table</b>          - Storage name (in module.ini) for get values
          *           <li> <b>caption_field</b>  - Field name in storage where caption is
          *           <li> <b>query_data</b>     - WHERE clause data array for get method {@see GetList()}
          *           <li> <b>orders</b>         - ORDER BY clause data array for get method {@see GetList()}
          *           </ul>
          * @var    array   $data
          **/
          var $data = array();

	/**
	 * Method  Executes on control load to the parent
	 * @access  private
     */
	function ControlOnLoad(){
	 // parent::ControlOnLoad();
    }

   /**
   * Method sets control with initial data
   * @access public
   */
   function InitControl($data=array()){

	  $this->data = $data;
	  $this->data["name"] = $data["name"];
      $this->data["table"] = $data["table"];
      $this->data["caption_field"] = $data["caption_field"];
      $this->data["query_data"] = ($data["query_data"]==""? null:$data["query_data"]);
	  $this->data["orders"] = ($data["orders"]==""? null:$data["orders"]);
	  $this->Page->Kernel->ImportClass("data.".strtolower($this->data["table"]), $this->data["table"]);
	  $this->Storage = new $this->data["table"] ($this->Page->Kernel->Connection, $this->Page->Kernel->Settings->GetItem("database", $this->data["table"]));
	  if ($this->data["get_method"]=="") $method="GetRecord"; else $method=$this->data["get_method"];
      $record = $this->Storage->$method($this->data["query_data"],$this->data["orders"]);
	  $this->data = array();
      $keyField = $this->Storage->getKeyColumns();
	  $this->data["caption"] = $record[$data["caption_field"]];
      $this->data["value"] = $record[$keyField[0]["name"]];
	  $this->data["disabled"] = "yes";
	  if ($this->Page->Event=="EditItem" || $this->Page->Event=="AddItem" || $this->Page->Event=="DoEditItem" || $this->Page->Event=="DoAddItem")
          $this->data["colspan"] = "2";
   }
   /**
   *  Method Draws XML-content of a control
   *  @param XMLWriter    $xmlWriter  instance of XMLWriter
   *  @access private
   */
   function XmlControlOnRender(&$xmlWriter) {
	  if(!empty($this->data))
	  {
		LinkControl::StaticXmlControlOnRender($this, $xmlWriter);
	  }
   }


  }// class
?>