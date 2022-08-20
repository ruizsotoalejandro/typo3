<?php

class partial_LoginNews_7c3119b9806b8bd3a17b9de4e2445ef6e2351410 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section Item
 */
public function section_ecdda59aea5ee67d7d854c969ccf7f4f4b4a4c54(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <p id="loginNewsItem-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.uid', $array1)]);

$output0 .= '" class="typo3-login-news-heading">';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.header', $array2)]);

$output0 .= '</p>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Sanitize\HtmlViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Transform\HtmlViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$array7 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.content', $array7);
};
$arguments5 = array();
$arguments5['selector'] = 'a.href';
$arguments5['onFailure'] = 'removeEnclosure';
return TYPO3\CMS\Fluid\ViewHelpers\Transform\HtmlViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);
};
$arguments3 = array();
$arguments3['build'] = 'default';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Sanitize\HtmlViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '<p class="text-muted"><span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['languageKey'] = NULL;
$arguments14['alternativeLanguageKeys'] = NULL;
$arguments14['key'] = 'login.news.date';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '</span>';
$array16 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.date', $array16)]);

$output13 .= '</p>';
return $output13;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('item.date', $array11);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = $renderChildrenClosure9;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output17 = '';

$output17 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
    <section class="typo3-login-news" aria-labelledby="loginNewsHeader">
        <h2 id="loginNewsHeader" class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['key'] = NULL;
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['languageKey'] = NULL;
$arguments24['alternativeLanguageKeys'] = NULL;
$arguments24['key'] = 'login.news.header';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output23 .= '</h2>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                <div class="carousel slide typo3-login-carousel t3js-login-news-carousel" id="loginNews" data-bs-ride="false">
                    <button class="left typo3-login-carousel-control" data-bs-target="#loginNews" data-bs-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['key'] = NULL;
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['languageKey'] = NULL;
$arguments61['alternativeLanguageKeys'] = NULL;
$arguments61['key'] = 'login.news.previous';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output60 .= '</span>
                    </button>
                    <button type="button" class="right typo3-login-carousel-control" data-bs-target="#loginNews" data-bs-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['key'] = NULL;
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['languageKey'] = NULL;
$arguments63['alternativeLanguageKeys'] = NULL;
$arguments63['key'] = 'login.news.next';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output60 .= '</span>
                    </button>
                    <div class="carousel-inner" aria-live="polite">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
                            <div role="group" aria-labelledby="loginNewsItem-';
$array69 = array (
);
$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.uid', $array69)]);

$output68 .= '" class="carousel-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('loginNewsIterator.isFirst', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['then'] = ' active';

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output68 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['section'] = NULL;
$arguments75['partial'] = NULL;
$arguments75['delegate'] = NULL;
$arguments75['renderable'] = NULL;
$arguments75['arguments'] = array (
);
$arguments75['optional'] = false;
$arguments75['default'] = NULL;
$arguments75['contentAs'] = NULL;
$arguments75['debug'] = true;
$arguments75['section'] = 'Item';
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array78);
$arguments75['arguments'] = $array77;

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output68 .= '
                            </div>
                        ';
return $output68;
};
$arguments65 = array();
$arguments65['each'] = NULL;
$arguments65['as'] = NULL;
$arguments65['key'] = NULL;
$arguments65['reverse'] = false;
$arguments65['iteration'] = NULL;
$array67 = array (
);$arguments65['each'] = $renderingContext->getVariableProvider()->getByPath('loginNewsItems', $array67);
$arguments65['as'] = 'item';
$arguments65['iteration'] = 'loginNewsIterator';

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output60 .= '
                    </div>
                </div>
            ';
return $output60;
};
$arguments58 = array();

$output57 .= '';

$output57 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                <div class="carousel typo3-login-carousel">
                    <div class="carousel-inner">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['section'] = NULL;
$arguments82['partial'] = NULL;
$arguments82['delegate'] = NULL;
$arguments82['renderable'] = NULL;
$arguments82['arguments'] = array (
);
$arguments82['optional'] = false;
$arguments82['default'] = NULL;
$arguments82['contentAs'] = NULL;
$arguments82['debug'] = true;
$arguments82['section'] = 'Item';
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['item'] = $renderingContext->getVariableProvider()->getByPath('loginNewsItems.0', $array85);
$arguments82['arguments'] = $array84;

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                    </div>
                </div>
            ';
return $output81;
};
$arguments79 = array();
$arguments79['if'] = NULL;

$output57 .= '';

$output57 .= '
        ';
return $output57;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$array55 = array (
);return $renderingContext->getVariableProvider()->getByPath('loginNewsItems', $array55);
};
$arguments53 = array();
$arguments53['subject'] = NULL;
$renderChildrenClosure54 = ($arguments53['subject'] !== null) ? function() use ($arguments53) { return $arguments53['subject']; } : $renderChildrenClosure54;$array52['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);
$array52['1'] = ' > 1';

$expression56 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                <div class="carousel slide typo3-login-carousel t3js-login-news-carousel" id="loginNews" data-bs-ride="false">
                    <button class="left typo3-login-carousel-control" data-bs-target="#loginNews" data-bs-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'login.news.previous';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '</span>
                    </button>
                    <button type="button" class="right typo3-login-carousel-control" data-bs-target="#loginNews" data-bs-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['key'] = NULL;
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['languageKey'] = NULL;
$arguments31['alternativeLanguageKeys'] = NULL;
$arguments31['key'] = 'login.news.next';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output28 .= '</span>
                    </button>
                    <div class="carousel-inner" aria-live="polite">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                            <div role="group" aria-labelledby="loginNewsItem-';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.uid', $array37)]);

$output36 .= '" class="carousel-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('loginNewsIterator.isFirst', $array41);

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments38['then'] = ' active';

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output36 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['section'] = NULL;
$arguments43['partial'] = NULL;
$arguments43['delegate'] = NULL;
$arguments43['renderable'] = NULL;
$arguments43['arguments'] = array (
);
$arguments43['optional'] = false;
$arguments43['default'] = NULL;
$arguments43['contentAs'] = NULL;
$arguments43['debug'] = true;
$arguments43['section'] = 'Item';
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array46);
$arguments43['arguments'] = $array45;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output36 .= '
                            </div>
                        ';
return $output36;
};
$arguments33 = array();
$arguments33['each'] = NULL;
$arguments33['as'] = NULL;
$arguments33['key'] = NULL;
$arguments33['reverse'] = false;
$arguments33['iteration'] = NULL;
$array35 = array (
);$arguments33['each'] = $renderingContext->getVariableProvider()->getByPath('loginNewsItems', $array35);
$arguments33['as'] = 'item';
$arguments33['iteration'] = 'loginNewsIterator';

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output28 .= '
                    </div>
                </div>
            ';
return $output28;
};
$arguments26['__elseClosures'][] = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
                <div class="carousel typo3-login-carousel">
                    <div class="carousel-inner">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['debug'] = true;
$arguments48['section'] = 'Item';
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['item'] = $renderingContext->getVariableProvider()->getByPath('loginNewsItems.0', $array51);
$arguments48['arguments'] = $array50;

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
                    </div>
                </div>
            ';
return $output47;
};

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output23 .= '
    </section>
';
return $output23;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('loginNewsItems', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments18['__thenClosure'] = $renderChildrenClosure19;

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
    <p id="loginNewsItem-';
$array89 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.uid', $array89)]);

$output88 .= '" class="typo3-login-news-heading">';
$array90 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.header', $array90)]);

$output88 .= '</p>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Sanitize\HtmlViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Transform\HtmlViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array95 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.content', $array95);
};
$arguments93 = array();
$arguments93['selector'] = 'a.href';
$arguments93['onFailure'] = 'removeEnclosure';
return TYPO3\CMS\Fluid\ViewHelpers\Transform\HtmlViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);
};
$arguments91 = array();
$arguments91['build'] = 'default';

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\Sanitize\HtmlViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output88 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '<p class="text-muted"><span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['languageKey'] = NULL;
$arguments102['alternativeLanguageKeys'] = NULL;
$arguments102['key'] = 'login.news.date';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output101 .= '</span>';
$array104 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.date', $array104)]);

$output101 .= '</p>';
return $output101;
};
$arguments96 = array();
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$arguments96['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('item.date', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments96['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments96['__thenClosure'] = $renderChildrenClosure97;

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output88 .= '
';
return $output88;
};
$arguments86 = array();
$arguments86['name'] = NULL;
$arguments86['name'] = 'Item';

$output17 .= NULL;

$output17 .= '

';

return $output17;
}


}
#