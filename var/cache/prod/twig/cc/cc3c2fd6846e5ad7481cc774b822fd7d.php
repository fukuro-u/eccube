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

/* Help/tradelaw.twig */
class __TwigTemplate_52a3dddc4951ba3207f036adbb176140 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__eccube__gblobal = $this->env->getGlobals();
        $__eccube__eventDispatcher = $__eccube__gblobal['event_dispatcher'];
        $__eccube__source = $this->env->getLoader()->getSourceContext($this->getTemplateName())->getCode();
        $__eccube__event = new \Eccube\Event\TemplateEvent($this->getTemplateName(), $__eccube__source, $context);
        $__eccube__eventDispatcher->dispatch($__eccube__event, $this->getTemplateName());
        $context = $__eccube__event->getParameters();
        if ($__eccube__event->getSource() !== $__eccube__source) {
            $__eccube__newTemplate = $this->env->createTemplate($__eccube__event->getSource());
            $__eccube__newTemplate->display($__eccube__event->getParameters());
            return;
        }

        $this->parent = $this->loadTemplate("default_frame.twig", "Help/tradelaw.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1> ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.tradelaw.title"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-borderedDefs\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["tradelaws"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (twig_get_attribute($this->env, $this->source, ($context["t"] ?? null), "name", [], "any", false, false, true, 21) && twig_get_attribute($this->env, $this->source, ($context["t"] ?? null), "description", [], "any", false, false, true, 21)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["tradelaw"]) {
            // line 22
            echo "                    <dl>
                        <dt>
                            <label class=\"ec-label\">";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tradelaw"], "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 26
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tradelaw"], "description", [], "any", false, false, true, 26), 26, $this->source);
            echo "</dd>
                    </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tradelaw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Help/tradelaw.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  98 => 29,  89 => 26,  84 => 24,  80 => 22,  76 => 21,  68 => 16,  64 => 14,  60 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Help/tradelaw.twig", "/home/keg4re/Documents/ECcube/my-ec-cube/src/Eccube/Resource/template/default/Help/tradelaw.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21);
        static $filters = array("escape" => 16, "trans" => 16, "filter" => 21, "raw" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'trans', 'filter', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
