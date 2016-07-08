<?php
include("Smarty/libs/Smarty.class.php");
class Smarty_ADAM_MMA_admincp extends Smarty
    {
        function __construct()
        {
            parent::__construct();
            $this->setCacheDir("Smarty/cache/"); // Thư mục bộ nhớ tạm
            $this->setConfigDir("Smarty/configs/"); // Thư mục cấu hình
            $this->setTemplateDir("Smarty/templates/"); // Thư mục template
            $this->setCompileDir("Smarty/templates_c/"); // Thư mục template compli
        }
    }
?>
