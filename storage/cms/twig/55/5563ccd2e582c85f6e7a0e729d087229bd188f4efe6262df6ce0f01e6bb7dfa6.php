<?php

/* /home/vagrant/maatschappelijkcollectief-nl/themes/jtherczeg-multi/partials/about.htm */
class __TwigTemplate_9ad4142c7779c1c4cba94b7cabf17ea42a8f557ba452961ca9740bd107c3b49c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">About Us</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    ";
        // line 10
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("about/video.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 11
        echo "                </div>

                <div class=\"col-sm-6 wow fadeInRight\">
                    ";
        // line 14
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("about/capabilities.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 15
        echo "                </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/maatschappelijkcollectief-nl/themes/jtherczeg-multi/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,  39 => 14,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">About Us</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    {% content 'about/video.htm' %}
                </div>

                <div class=\"col-sm-6 wow fadeInRight\">
                    {% content 'about/capabilities.htm' %}
                </div>
        </div>", "/home/vagrant/maatschappelijkcollectief-nl/themes/jtherczeg-multi/partials/about.htm", "");
    }
}
