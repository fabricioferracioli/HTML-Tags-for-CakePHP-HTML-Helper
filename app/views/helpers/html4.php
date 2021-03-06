<?php

    class Html4Helper extends HtmlHelper
    {
        public $html_4_tags = array(
            'button' => '<input type="%s" %s>',
            'charset' => '<meta http-equiv="Content-Type" content="text/html; charset=%s" >',
            'checkbox' => '<input type="checkbox" name="%s" %s>',
            'checkboxmultiple' => '<input type="checkbox" name="%s[]"%s>',
            'css' => '<link rel="%s" type="text/css" href="%s" %s>',
            'file' => '<input type="file" name="%s" %s>',
            'file_no_model' => '<input type="file" name="%s" %s>',
            'hidden' => '<input type="hidden" name="%s" %s>',
            'image' => '<img src="%s" %s>',
            'input' => '<input name="%s" %s>',
            'meta' => '<meta %s>',
            'metalink' => '<link href="%s"%s >',
            'password' => '<input type="password" name="%s" %s>',
            'radio' => '<input type="radio" name="%s" id="%s" %s>%s',
            'submit' => '<input type="submit" %s>',
            'submitimage' => '<input type="image" src="%s" %s>'
        );

        function __construct()
        {
            parent::__construct();
            $this->tags = Set::merge($this->tags, $this->html_4_tags);
        }

        public function docType($type = 'html4-strict')
        {
            if (isset($this->__docTypes[$type]))
            {
                return $this->output($this->__docTypes[$type]);
            }
            return null;
        }
    }

?>