### POC for #752 in Alice

This is a POC for the issue described here: https://github.com/nelmio/alice/issues/752

Clone the project, and run `php poc.php`, it will produce the following output:

```php
class Nelmio\Alice\ObjectSet#246 (2) {
  private $parameters =>
  array(0) {
  }
  private $objects =>
  array(2) {
    'address' =>
    class POC\Entity\Address#234 (3) {
      private $id =>
      NULL
      private $country =>
      string(36) "United States Minor Outlying Islands"
      private $city =>
      string(15) "Port Betsyhaven"
    }
    'person' =>
    class POC\Entity\Person#244 (2) {
      private $city =>
      NULL
      private $country =>
      NULL
    }
  }
}
```

The `$city` and `$country` property on Person is `NULL`, instead of having the same values as they have on the `Address` object.
