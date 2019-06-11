## About
fork of haphproxy aiming to support the latest software and configuration versions.

## Changelog
- Updated phpunit tests to use namespaces and fixed deprecation warnings.
- Setup new devbox environment using ubuntu 18.04, php 7.3 and haproxy 1.9.

## Testing
There is a Vagrantfile under /devbox folder to automatically provision an ubuntu 18.04 vm using virtualbox provider and ansible.

### Running the tests from within vagrant box:
```
vagrant@ubuntu-bionic:/shared$ phpunit  --coverage-text


PHPUnit 8.0.6 by Sebastian Bergmann and contributors.

...........                                                       11 / 11 (100%)

Time: 288 ms, Memory: 14.00 MB

OK (11 tests, 22 assertions)


Code Coverage Report:
  2019-06-11 18:41:44

 Summary:
  Classes: 75.00% (9/12)
  Methods: 87.76% (43/49)
  Lines:   93.57% (131/140)

\Jalle19\HaPHProxy::Jalle19\HaPHProxy\Configuration
  Methods:  72.73% ( 8/11)   Lines:  86.36% ( 19/ 22)
\Jalle19\HaPHProxy::Jalle19\HaPHProxy\Parser
  Methods: 100.00% (11/11)   Lines: 100.00% ( 46/ 46)
\Jalle19\HaPHProxy::Jalle19\HaPHProxy\Writer
  Methods:  85.71% ( 6/ 7)   Lines:  92.00% ( 23/ 25)
\Jalle19\HaPHProxy\Parameter::Jalle19\HaPHProxy\Parameter\Parameter
  Methods:  60.00% ( 3/ 5)   Lines:  55.56% (  5/  9)
\Jalle19\HaPHProxy\Section::Jalle19\HaPHProxy\Section\AbstractSection
  Methods: 100.00% ( 7/ 7)   Lines: 100.00% ( 16/ 16)
\Jalle19\HaPHProxy\Section::Jalle19\HaPHProxy\Section\BackendSection
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  1/  1)
\Jalle19\HaPHProxy\Section::Jalle19\HaPHProxy\Section\DefaultsSection
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  1/  1)
\Jalle19\HaPHProxy\Section::Jalle19\HaPHProxy\Section\Factory
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% ( 13/ 13)
\Jalle19\HaPHProxy\Section::Jalle19\HaPHProxy\Section\FrontendSection
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  1/  1)
\Jalle19\HaPHProxy\Section::Jalle19\HaPHProxy\Section\GlobalSection
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  1/  1)
\Jalle19\HaPHProxy\Section::Jalle19\HaPHProxy\Section\ListenSection
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  1/  1)
\Jalle19\HaPHProxy\Section::Jalle19\HaPHProxy\Section\NamedSection
  Methods: 100.00% ( 2/ 2)   Lines: 100.00% (  4/  4)
```

## More information

For more information please see the original readme.md in source project.

## License

This library is licensed under the GNU General Public License 2 or newer.
