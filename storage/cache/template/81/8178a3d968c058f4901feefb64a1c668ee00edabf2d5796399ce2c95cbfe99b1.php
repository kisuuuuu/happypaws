<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* account/login.twig */
class __TwigTemplate_4f0c18bfd4a18212255bfd7d8650b1d611c0cf79b517e94fe21de6add1fbd290 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-3.7.0.min.js\" type=\"text/javascript\"></script>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>


<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
";
        // line 30
        echo "<link href=\"";
        echo "https://fonts.googleapis.com/css2?family=Poppins+One&family=Poppins:wght@400;500;600;700&display=swap";
        echo "\" rel=\"stylesheet\">
";
        // line 36
        echo "
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 38
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 38);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 38);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 38);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 41
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 45
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 45);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 45);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 48
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  
</head>
<body style=\"background: url(";
        // line 51
        echo ($context["bg"] ?? null);
        echo ");\">
<div id=\"account-login\">
  
  ";
        // line 54
        if (($context["success"] ?? null)) {
            // line 55
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 57
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 58
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 60
        echo "  <div class=\"mb-5\">
    <div id=\"content\" class=\"d-flex px-5 gap-4 flex-wrap justify-content-center align-items-center my-5\">
      
        <div><h1 style=\"color: #162F65; font-weight: 600;\">Welcome back!</h1>
          <img class=\"img-fluid\" src=\"";
        // line 64
        echo ($context["momdad"] ?? null);
        echo "\" alt=\"\" width=\"600px\">
                
        </div>
        <div class=\"col-sm-4 login-container mb-5\">
          <div class=\"well\">
            <div class=\"d-flex justify-content-center\">
              <img src=\"";
        // line 70
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" width=\"200px\"></div>
            <form action=\"";
        // line 71
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"px-5\">
              <div class=\"form-group\">
                ";
        // line 74
        echo "                <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                ";
        // line 78
        echo "                <input type=\"password\" name=\"password\" value=\"";
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              <div class=\"d-flex gap-4 flex-wrap justify-content-center\">
                <input type=\"submit\" value=\"";
        // line 80
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn px-4\"/ style=\"background-color: #162F65; color: #f6c96d;\">
                <a href=\"";
        // line 81
        echo ($context["register"] ?? null);
        echo "\" class=\"btn px-4\" style=\"background-color: #f6c96d; color: #162F65;\"/>Register</a>
              </div>
              ";
        // line 83
        if (($context["redirect"] ?? null)) {
            // line 84
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 86
        echo "              <div class=\"d-flex justify-content-center my-3\">
                <a href=\"";
        // line 87
        echo ($context["forgotten"] ?? null);
        echo "\" class=\"text-align-center text-black\">Forgot Password</a></div>
              </div>
            </form>
          </div>
        </div>
      
    </div>
  </div>
</div>
</body>
";
        // line 97
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 97,  256 => 87,  253 => 86,  247 => 84,  245 => 83,  240 => 81,  236 => 80,  228 => 78,  219 => 74,  214 => 71,  210 => 70,  201 => 64,  195 => 60,  189 => 58,  186 => 57,  180 => 55,  178 => 54,  172 => 51,  168 => 49,  160 => 48,  156 => 47,  145 => 45,  141 => 44,  138 => 43,  129 => 41,  125 => 40,  112 => 38,  108 => 37,  105 => 36,  100 => 30,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/login.twig", "");
    }
}
