<?php

/* MeetStoreBundle:Product:new.html.twig */
class __TwigTemplate_4211ffa7111964180c1aa22b2de8b0f5 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\">
    </head>
    <body>
        <h1>Product creation ążćńł</h1>

        <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
            <p>
                <button type=\"submit\">Create</button>
            </p>
        </form>

        <ul class=\"record_actions\">
            <li>
                <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product"), "html", null, true);
        echo "\">
                    Back to the list
                </a>
            </li>
        </ul>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MeetStoreBundle:Product:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
