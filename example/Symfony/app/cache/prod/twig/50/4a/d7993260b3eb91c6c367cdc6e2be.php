<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_504ad7993260b3eb91c6c367cdc6e2be extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_jsonencode_filter($this->getAttribute($_exception_, "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
