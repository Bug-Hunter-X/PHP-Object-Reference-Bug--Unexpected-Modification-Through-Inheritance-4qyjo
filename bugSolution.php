```php
class ParentClass {
    public $value = 10;
}

class ChildClass extends ParentClass {
    public $childValue = 20;
}

$parent = new ParentClass();
$child = new ChildClass();

$parent = clone $child; // Create a clone to avoid reference issues

$parent->value = 30;

var_dump($child->value); // Outputs 10, correctly demonstrating an independent copy
var_dump($parent->value); // Outputs 30
```

By using the `clone` keyword, we create a deep copy of the `$child` object. Modifications to the cloned object (`$parent`) no longer affect the original object (`$child`). This ensures predictable and correct behavior.