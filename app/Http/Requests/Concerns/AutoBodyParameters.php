<?php

namespace App\Http\Requests\Concerns;

trait AutoBodyParameters
{
    public function bodyParameters(): array
    {
        $params = [];

        foreach ($this->rules() as $field => $rules) {
            $rules = is_array($rules) ? implode('|', $rules) : $rules;

            $params[$field] = [
                'description' => "Request parameter: {$field}",
                'example' => $this->exampleForRule($rules),
            ];
        }

        return $params;
    }

    protected function exampleForRule(string $rules)
    {
        if (str_contains($rules, 'numeric') || str_contains($rules, 'integer')) {
            return 1000;
        }

        if (str_contains($rules, 'boolean')) {
            return true;
        }

        if (str_contains($rules, 'email')) {
            return 'user@example.com';
        }

        if (str_contains($rules, 'url')) {
            return 'https://example.com';
        }

        return 'Any string';
    }
}
