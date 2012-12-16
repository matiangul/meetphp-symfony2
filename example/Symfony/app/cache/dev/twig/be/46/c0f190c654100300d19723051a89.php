<?php

/* MeetStoreBundle:Product:edit.html.twig */
class __TwigTemplate_be46c0f190c654100300d19723051a89 extends Twig_Template
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
        <h1>Product edit</h1>

        <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "edit_form"));
        echo "
            <p>
                <button type=\"submit\">Edit</button>
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
            <li>
                <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
                    <button type=\"submit\">Delete</button>
                </form>
            </li>
        </ul>
    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "MeetStoreBundle:Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
