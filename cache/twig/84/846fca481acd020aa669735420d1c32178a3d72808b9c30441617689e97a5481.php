<?php

/* articles.html.twig */
class __TwigTemplate_e2ac8d615f358daac752f4e2ff4149932e3e2eac373212f3805e4dba1226cb3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("partials/base.html.twig", "articles.html.twig", 2);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["articles"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => "@self.children", "pagination" => true, "limit" => 10, "order" => ["by" => "default", "dir" => "asc"]]], "method");
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"container\">
<div class=\"row\">
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 7
            echo "\t\t<div class=\"col s4\">
\t\t\t\t <article class=\"tease  \">
            <figure class=\"tease__figure\">
               <a href=\"midcentury-modern-moscow-mule-martini-cocktail-recipe/\" class=\"tease__image-link\">
               <img src=\"https://images.pexels.com/photos/270186/pexels-photo-270186.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260\" class=\"tease__image\" scale=\"0\">
               </a>
            </figure>
            <div class=\"tease__text-card-wrapper\">
               <div class=\"tease__text-card\">
                  <div class=\"tease__post-type\">
                     <a href=\"/article/cocktails/\">
                     Culture
                     </a>
                  </div>
                  <h3 class=\"tease__title\"><a href=\"midcentury-modern-moscow-mule-martini-cocktail-recipe/\">";
            // line 21
            echo $this->getAttribute($this->getAttribute($context["a"], "header", []), "title", []);
            echo "</a></h3>
                  <p class=\"tease__dek\">
                     ";
            // line 23
            echo $this->getAttribute($this->getAttribute($context["a"], "header", []), "description", []);
            echo "
                  </p>
                  <div class=\"share-links\">
                     <i style=\"font-size: 0.8em !important;\" class=\"center fab fa-facebook-f grey-text darken-4\"></i>
                     <i style=\"font-size: 0.8em !important;\" class=\"center fab fa-twitter grey-text darken-4\"></i>
                     <i style=\"font-size: 0.8em !important;\" class=\"center fab fa-pinterest grey-text darken-4\"></i>
                     <i class=\"fa fa-envelope grey-text darken-4\"></i>
                  </div>
                  <ul class=\"tease__credits\">
                     <li class=\"tease__credit\">
                        story: <span class=\"tease__credit--name\">
                        <a href=\"/author/punch-staff/\">
                        ";
            // line 35
            echo $this->getAttribute($this->getAttribute($context["a"], "header", []), "author", []);
            echo "
                        </a>
                        </span>
                     </li>
                     <li class=\"tease__credit\">tags: <span class=\"tease__credit--name\"><a href=\"http://www.lizziemunro.com/\">";
            // line 39
            echo $this->getAttribute($this->getAttribute($context["a"], "header", []), "tags", []);
            echo "</a></span></li>
                  </ul>
               </div>
            </div>
         </article>
     </div>
\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 46,  85 => 39,  78 => 35,  63 => 23,  58 => 21,  42 => 7,  38 => 6,  34 => 4,  31 => 3,  27 => 2,  25 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set articles = page.collection({'items':'@self.children', 'pagination': true, 'limit': 10, 'order': {'by': 'default', 'dir': 'asc'}}) %}
{% extends 'partials/base.html.twig' %}
{% block content %}
<div class=\"container\">
<div class=\"row\">
\t\t{% for a in articles %}
\t\t<div class=\"col s4\">
\t\t\t\t <article class=\"tease  \">
            <figure class=\"tease__figure\">
               <a href=\"midcentury-modern-moscow-mule-martini-cocktail-recipe/\" class=\"tease__image-link\">
               <img src=\"https://images.pexels.com/photos/270186/pexels-photo-270186.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260\" class=\"tease__image\" scale=\"0\">
               </a>
            </figure>
            <div class=\"tease__text-card-wrapper\">
               <div class=\"tease__text-card\">
                  <div class=\"tease__post-type\">
                     <a href=\"/article/cocktails/\">
                     Culture
                     </a>
                  </div>
                  <h3 class=\"tease__title\"><a href=\"midcentury-modern-moscow-mule-martini-cocktail-recipe/\">{{ a.header.title }}</a></h3>
                  <p class=\"tease__dek\">
                     {{ a.header.description }}
                  </p>
                  <div class=\"share-links\">
                     <i style=\"font-size: 0.8em !important;\" class=\"center fab fa-facebook-f grey-text darken-4\"></i>
                     <i style=\"font-size: 0.8em !important;\" class=\"center fab fa-twitter grey-text darken-4\"></i>
                     <i style=\"font-size: 0.8em !important;\" class=\"center fab fa-pinterest grey-text darken-4\"></i>
                     <i class=\"fa fa-envelope grey-text darken-4\"></i>
                  </div>
                  <ul class=\"tease__credits\">
                     <li class=\"tease__credit\">
                        story: <span class=\"tease__credit--name\">
                        <a href=\"/author/punch-staff/\">
                        {{ a.header.author }}
                        </a>
                        </span>
                     </li>
                     <li class=\"tease__credit\">tags: <span class=\"tease__credit--name\"><a href=\"http://www.lizziemunro.com/\">{{ a.header.tags }}</a></span></li>
                  </ul>
               </div>
            </div>
         </article>
     </div>
\t\t {% endfor %}
</div>
</div>

{% endblock %}
", "articles.html.twig", "/Applications/MAMP/htdocs/lc/user/themes/lc/templates/articles.html.twig");
    }
}
