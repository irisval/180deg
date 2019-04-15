<?php

/* partials/header.html.twig */
class __TwigTemplate_aaf37f3512aab3387b39ded7e02c9f83d8b577d1ce9ea58630d84ed63db3c03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"nav\">
  <div class=\"nav__top\">
    <div class=\"nav__top--inner\">
    <p class=\"recent__text\">Most recent post:&nbsp;&nbsp;</p><a class=\"recent__link\">Lorem Ipsum</a>
    <i class=\"socials fa fa-facebook-f\"></i>
    <i class=\"socials fa fa-twitter\"></i>
    <i class=\"socials fa fa-instagram\"></i>
    <i class=\"socials fa fa-pinterest-p\"></i>
    <i class=\"socials fa fa-search\"></i>
    </div>
    </div>



    <div class=\"nav__bottom\">

        <div class=\"nav__bottom--inner\">
          <img class=\"logo\" src=\"";
        // line 18
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/logo.png"]);
        echo "\">
          <ul class=\"nav-links\">
          <li class=\"nav-links__item\">About</li>
          <li class=\"nav-links__item\">Contact</li>
          <li class=\"nav-links__item\">Tech</li>
          <li class=\"nav-links__item\">Gender</li>
          <li class=\"nav-links__item\">Race</li>
          <li class=\"nav-links__item\">Culture</li>
          <li class=\"nav-links__item\">More</li>
          <div class=\"l\"></div>
          <li class=\"nav-links__item l2\">Get involved</li>
          <li class=\"nav-links__item\"><div class=\"button\">Let's Go!</div></li>
        </ul>

          </div>
      </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"nav\">
  <div class=\"nav__top\">
    <div class=\"nav__top--inner\">
    <p class=\"recent__text\">Most recent post:&nbsp;&nbsp;</p><a class=\"recent__link\">Lorem Ipsum</a>
    <i class=\"socials fa fa-facebook-f\"></i>
    <i class=\"socials fa fa-twitter\"></i>
    <i class=\"socials fa fa-instagram\"></i>
    <i class=\"socials fa fa-pinterest-p\"></i>
    <i class=\"socials fa fa-search\"></i>
    </div>
    </div>



    <div class=\"nav__bottom\">

        <div class=\"nav__bottom--inner\">
          <img class=\"logo\" src=\"{{ 'assets/images/logo.png'|theme }}\">
          <ul class=\"nav-links\">
          <li class=\"nav-links__item\">About</li>
          <li class=\"nav-links__item\">Contact</li>
          <li class=\"nav-links__item\">Tech</li>
          <li class=\"nav-links__item\">Gender</li>
          <li class=\"nav-links__item\">Race</li>
          <li class=\"nav-links__item\">Culture</li>
          <li class=\"nav-links__item\">More</li>
          <div class=\"l\"></div>
          <li class=\"nav-links__item l2\">Get involved</li>
          <li class=\"nav-links__item\"><div class=\"button\">Let's Go!</div></li>
        </ul>

          </div>
      </div>
  </div>", "partials/header.html.twig", "/Applications/MAMP/htdocs/lc/user/themes/lc/templates/partials/header.html.twig");
    }
}
