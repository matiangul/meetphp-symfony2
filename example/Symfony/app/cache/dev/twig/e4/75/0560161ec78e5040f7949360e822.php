<?php

/* MeetStoreBundle:Product:show.html.twig */
class __TwigTemplate_e4750560161ec78e5040f7949360e822 extends Twig_Template
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
        <h1>Product</h1>

        <table class=\"record_properties\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Producer</th>
                    <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "producer"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "price"), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>

        <ul class=\"record_actions\">
            <li>
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product"), "html", null, true);
        echo "\">
                    Back to the list
                </a>
            </li>
            <li>
                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
                    Edit
                </a>
            </li>
            <li>
                <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
                    <button type=\"submit\">Delete</button>
                </form>
            </li>
        </ul>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MeetStoreBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
