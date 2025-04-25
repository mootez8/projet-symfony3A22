<?php

namespace App\Service;

use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateService
{
    public function translateLongText(string $text, string $source = 'fr', string $target = 'en'): string
    {
        $translator = new GoogleTranslate();
        $translator->setSource($source);
        $translator->setTarget($target);

        $paragraphs = preg_split('/\n+/', $text); // Découpe en paragraphes
        $translated = [];

        foreach ($paragraphs as $paragraph) {
            $paragraph = trim($paragraph);
            if (!empty($paragraph)) {
                $translated[] = $translator->translate($paragraph);
            }
        }

        return implode("\n\n", $translated);
    }
}
