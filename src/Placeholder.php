<?php

namespace Marshmallow\Placeholder;

use Laravel\Nova\Fields\Field;

class Placeholder extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'placholder';

    public function __construct(...$arguments)
    {
        parent::__construct(...$arguments);

        $this->fillUsing(function () {
            // Disable updates on the model
        });
    }

    public function content(string $content): self
    {
        return $this->withMeta([
            'content' => $content,
        ]);
    }

    public function view(string $blade_file, array $data): self
    {
        return $this->withMeta([
            'content' => (string) view($blade_file, $data),
        ]);
    }
}
