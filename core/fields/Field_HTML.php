<?php
defined('CMSPATH') or die; // prevent unauthorized access

class Field_HTML extends Field {

	function __construct($default_content="") {
		$this->id = "";
		$this->name = "";
		$this->select_options=[];
		$this->default = $default_content;
		$this->content_type="";
		$this->nowrap = true;
		$this->save=false;
	}

	public function display() {
		echo $this->html;
	}



	public function load_from_config($config) {
		$this->name = $config->name ?? 'error!!!';
		$this->id = $config->id ?? $this->name;
		$this->label = $config->label ?? '';
		$this->required = $config->required ?? false;
		$this->description = $config->description ?? '';
		$this->maxlength = $config->maxlength ?? 999;
		$this->filter = $config->filter ?? 'RAW';
		$this->missingconfig = $config->missingconfig ?? false;
		$this->type = $config->type ?? 'error!!!';
		$this->default = $config->default ?? $this->default;
		$this->nowrap = $config->nowrap ?? true;
		$this->save = $config->save ?? false;
		$this->html = $config->html ?? "";
	}

	public function validate() {
		// not a real field, just displays stuff :)
		return true;
	}
}