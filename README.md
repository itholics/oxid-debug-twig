# itholics/oxid-debug-twig




## Installation

```bash
composer require --dev itholics/oxid-debug-twig
```

## Usage

### xdebug_break()
Xdebug will stop at this mark. You may need to go up the chain and look at the `context` variable.
```twig
{{ xdebug_break() }}
```

### var_dump()
`var_dump` in `<pre>` tags.
```twig
{{ var_dump(item) }}
{{ var_dump(item1, item2, item3) }}
```

### print_r
`print_r` in `<pre>` tags.
```twig
{{ print_r(item) }}
```

## License

MIT


## Copyright

ITholics Dev Team <info@itholics.de>