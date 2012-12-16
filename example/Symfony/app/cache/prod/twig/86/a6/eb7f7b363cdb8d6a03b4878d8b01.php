<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_86a6eb7f7b363cdb8d6a03b4878d8b01 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_jsonencode_filter(array("error" => array("code" => $_status_code_, "message" => $_status_text_)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
